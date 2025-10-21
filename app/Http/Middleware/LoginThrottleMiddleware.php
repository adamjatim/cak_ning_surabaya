<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

/**
 * LoginThrottleMiddleware
 *
 * Implements exponential backoff rate limiting for login attempts
 * to prevent brute force attacks on the authentication system.
 *
 * Security Features:
 * - Progressive delay after failed attempts
 * - IP-based and email-based tracking
 * - Automatic lockout with exponential backoff
 * - Security event logging
 *
 * @package App\Http\Middleware
 * @author Cak & Ning Surabaya Security Team
 * @version 1.0.0
 */
class LoginThrottleMiddleware
{
    /**
     * Maximum allowed attempts before lockout
     */
    private const MAX_ATTEMPTS = 3;

    /**
     * Base lockout time in minutes
     */
    private const BASE_LOCKOUT_MINUTES = 15;

    /**
     * Maximum lockout time in minutes (6 hours)
     */
    private const MAX_LOCKOUT_MINUTES = 360;

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Only apply throttling to login POST requests
        if (!$this->isLoginAttempt($request)) {
            return $next($request);
        }

        $email = $request->input('email');
        $ip = $request->ip();

        // Check both IP and email-based throttling
        $ipKey = $this->getThrottleKey('ip', $ip);
        $emailKey = $this->getThrottleKey('email', $email);

        // Check if IP or email is currently locked out
        if ($this->isLockedOut($ipKey) || ($email && $this->isLockedOut($emailKey))) {
            $lockoutTime = max(
                $this->getLockoutTimeRemaining($ipKey),
                $email ? $this->getLockoutTimeRemaining($emailKey) : 0
            );

            $this->logSecurityEvent('login_blocked_throttle', [
                'ip' => $ip,
                'email' => $email,
                'lockout_remaining' => $lockoutTime,
                'user_agent' => $request->userAgent()
            ]);

            return response()->json([
                'error' => 'Too many login attempts. Please try again in ' .
                          $this->formatLockoutTime($lockoutTime) . '.',
                'lockout_time' => $lockoutTime,
                'retry_after' => now()->addMinutes($lockoutTime)->toISOString()
            ], 429);
        }

        // Process the request
        $response = $next($request);

        // If login failed, increment attempt counters
        if ($this->isFailedLoginResponse($response)) {
            $this->recordFailedAttempt($ipKey);
            if ($email) {
                $this->recordFailedAttempt($emailKey);
            }

            $this->logSecurityEvent('login_failed', [
                'ip' => $ip,
                'email' => $email,
                'attempts_ip' => $this->getAttempts($ipKey),
                'attempts_email' => $email ? $this->getAttempts($emailKey) : 0,
                'user_agent' => $request->userAgent()
            ]);
        } else {
            // Login successful, clear attempt counters
            $this->clearAttempts($ipKey);
            if ($email) {
                $this->clearAttempts($emailKey);
            }

            $this->logSecurityEvent('login_success', [
                'ip' => $ip,
                'email' => $email,
                'user_agent' => $request->userAgent()
            ]);
        }

        return $response;
    }

    /**
     * Check if this is a login attempt
     */
    private function isLoginAttempt(Request $request): bool
    {
        return $request->isMethod('POST') &&
               $request->is('login') &&
               $request->has(['email', 'password']);
    }

    /**
     * Check if the response indicates a failed login
     */
    private function isFailedLoginResponse(Response $response): bool
    {
        // Check for validation errors or redirect with errors
        return $response->getStatusCode() === 422 ||
               ($response->getStatusCode() === 302 &&
                session()->has('errors'));
    }

    /**
     * Generate cache key for throttling
     */
    private function getThrottleKey(string $type, string $identifier): string
    {
        return "login_throttle:{$type}:" . hash('sha256', $identifier);
    }

    /**
     * Check if identifier is currently locked out
     */
    private function isLockedOut(string $key): bool
    {
        return Cache::has($key . ':lockout');
    }

    /**
     * Get remaining lockout time in minutes
     */
    private function getLockoutTimeRemaining(string $key): int
    {
        $lockoutExpiry = Cache::get($key . ':lockout');
        if (!$lockoutExpiry) {
            return 0;
        }

        $remaining = $lockoutExpiry->diffInMinutes(now());
        return max(0, $remaining);
    }

    /**
     * Record a failed login attempt
     */
    private function recordFailedAttempt(string $key): void
    {
        $attempts = $this->getAttempts($key) + 1;

        // Store attempt count for 24 hours
        Cache::put($key . ':attempts', $attempts, now()->addHours(24));

        // If max attempts reached, initiate lockout
        if ($attempts >= self::MAX_ATTEMPTS) {
            $this->initiateLockout($key, $attempts);
        }
    }

    /**
     * Get current attempt count
     */
    private function getAttempts(string $key): int
    {
        return Cache::get($key . ':attempts', 0);
    }

    /**
     * Clear attempt counters
     */
    private function clearAttempts(string $key): void
    {
        Cache::forget($key . ':attempts');
        Cache::forget($key . ':lockout');
    }

    /**
     * Initiate lockout with exponential backoff
     */
    private function initiateLockout(string $key, int $attempts): void
    {
        // Calculate lockout duration with exponential backoff
        $multiplier = pow(2, $attempts - self::MAX_ATTEMPTS);
        $lockoutMinutes = min(
            self::BASE_LOCKOUT_MINUTES * $multiplier,
            self::MAX_LOCKOUT_MINUTES
        );

        $lockoutExpiry = now()->addMinutes($lockoutMinutes);
        Cache::put($key . ':lockout', $lockoutExpiry, $lockoutExpiry);

        $this->logSecurityEvent('login_lockout_initiated', [
            'key' => $key,
            'attempts' => $attempts,
            'lockout_minutes' => $lockoutMinutes,
            'lockout_expiry' => $lockoutExpiry->toISOString()
        ]);
    }

    /**
     * Format lockout time for user display
     */
    private function formatLockoutTime(int $minutes): string
    {
        if ($minutes < 60) {
            return $minutes . ' minute' . ($minutes !== 1 ? 's' : '');
        }

        $hours = floor($minutes / 60);
        $remainingMinutes = $minutes % 60;

        $timeString = $hours . ' hour' . ($hours !== 1 ? 's' : '');

        if ($remainingMinutes > 0) {
            $timeString .= ' and ' . $remainingMinutes . ' minute' .
                          ($remainingMinutes !== 1 ? 's' : '');
        }

        return $timeString;
    }

    /**
     * Log security events for monitoring
     */
    private function logSecurityEvent(string $event, array $context = []): void
    {
        Log::channel('security')->info("Security Event: {$event}", array_merge($context, [
            'timestamp' => now()->toISOString(),
            'event_type' => $event
        ]));
    }
}
