<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * AuthController
 *
 * Handles user authentication with enhanced security features including:
 * - Input validation and sanitization
 * - Rate limiting protection
 * - Security event logging
 * - Session security
 * - Brute force protection
 *
 * @package App\Http\Controllers
 * @author Cak & Ning Surabaya Security Team
 * @version 2.0.0
 */
class AuthController extends Controller
{
    /**
     * Display login form with security considerations
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function showLoginForm(Request $request)
    {
        // Check if user is already authenticated
        if (Auth::check()) {
            $user = Auth::user();

            // Redirect authenticated users to appropriate dashboard
            if ($user->role && $user->role->name === 'admin') {
                return redirect()->route('dashboard');
            }

            return redirect()->route('cakning.home');
        }

        // Log login page access for security monitoring
        $this->logSecurityEvent('login_page_accessed', [
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'referer' => $request->header('referer')
        ]);

        return view('auth.login');
    }

    /**
     * Process login with enhanced security
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws ValidationException
     */
    public function login(Request $request)
    {
        // Enhanced input validation with security rules
        $validated = $request->validate([
            'email' => [
                'required',
                'email:strict,dns,spoof', // Strict email validation
                'max:255',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/' // Additional email format check
            ],
            'password' => [
                'required',
                'string',
                'min:6', // Minimum password length
                'max:255'
            ],
            'remember' => 'nullable|boolean'
        ], [
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.regex' => 'Email format is invalid.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password is too short.',
        ]);

        // Sanitize inputs
        $email = filter_var(trim($validated['email']), FILTER_SANITIZE_EMAIL);
        $password = $validated['password'];
        $remember = $validated['remember'] ?? false;

        // Additional email validation after sanitization
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->logSecurityEvent('login_invalid_email_format', [
                'ip' => $request->ip(),
                'attempted_email' => $email,
                'user_agent' => $request->userAgent()
            ]);

            throw ValidationException::withMessages([
                'email' => ['Invalid email format detected.'],
            ]);
        }

        // Check if user exists first (timing attack prevention)
        $user = User::where('email', $email)->first();

        if (!$user) {
            $this->logSecurityEvent('login_nonexistent_user', [
                'ip' => $request->ip(),
                'attempted_email' => $email,
                'user_agent' => $request->userAgent()
            ]);

            // Use generic error message to prevent user enumeration
            throw ValidationException::withMessages([
                'email' => ['The username or password you entered is incorrect.'],
            ]);
        }        // Check if user account is active
        if (isset($user->status) && $user->status !== 'active') {
            $this->logSecurityEvent('login_inactive_account', [
                'ip' => $request->ip(),
                'user_id' => $user->id,
                'user_status' => $user->status ?? 'undefined',
                'user_agent' => $request->userAgent()
            ]);

            throw ValidationException::withMessages([
                'email' => ['The username or password you entered is incorrect.'],
            ]);
        }

        // Attempt authentication
        $credentials = ['email' => $email, 'password' => $password];

        if (Auth::attempt($credentials, $remember)) {
            // Successful login
            $request->session()->regenerate();

            $authenticatedUser = Auth::user();

            // Log successful login
            $this->logSecurityEvent('login_success', [
                'ip' => $request->ip(),
                'user_id' => $authenticatedUser->id,
                'user_email' => $authenticatedUser->email,
                'user_role' => $authenticatedUser->role->name ?? 'undefined',
                'user_agent' => $request->userAgent(),
                'remember_token' => $remember ? 'yes' : 'no'
            ]);

            // Update last login information
            $this->updateLastLogin($authenticatedUser, $request);

            // Redirect based on role with fallback
            $redirectRoute = $this->getRedirectRoute($authenticatedUser);

            return redirect()->intended($redirectRoute);
        }

        // Failed login - let middleware handle the logging and rate limiting
        $this->logSecurityEvent('login_failed_credentials', [
            'ip' => $request->ip(),
            'attempted_email' => $email,
            'user_id' => $user->id,
            'user_agent' => $request->userAgent()
        ]);

        throw ValidationException::withMessages([
            'email' => ['The username or password you entered is incorrect.'],
        ]);
    }

    /**
     * Process logout with security cleanup
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            $this->logSecurityEvent('logout_success', [
                'ip' => $request->ip(),
                'user_id' => $user->id,
                'user_email' => $user->email,
                'session_duration' => $this->calculateSessionDuration($user),
                'user_agent' => $request->userAgent()
            ]);
        }

        // Clear authentication
        Auth::logout();

        // Invalidate session
        $request->session()->invalidate();

        // Regenerate CSRF token
        $request->session()->regenerateToken();

        // Clear any remember me tokens
        if ($user && method_exists($user, 'setRememberToken')) {
            $user->setRememberToken(null);
            try {
                $user->save();
            } catch (\Exception $e) {
                // Log error but don't fail the logout process
                Log::warning('Failed to clear remember token during logout', [
                    'user_id' => $user->id,
                    'error' => $e->getMessage()
                ]);
            }
        }

        return redirect()->route('cakning.home')->with('success', 'You have been logged out successfully.');
    }

    /**
     * Get appropriate redirect route based on user role
     *
     * @param User $user
     * @return string
     */
    private function getRedirectRoute(User $user): string
    {
        if (!$user->role) {
            return route('cakning.home');
        }

        return match($user->role->name) {
            'admin' => route('dashboard'),
            'talent' => route('dashboard'), // Could be talent-specific dashboard
            default => route('cakning.home')
        };
    }

    /**
     * Update user's last login information
     *
     * @param User $user
     * @param Request $request
     * @return void
     */
    private function updateLastLogin(User $user, Request $request): void
    {
        try {
            // Only update if the user model has these fields
            $updateData = [];

            if ($user->getConnection()->getSchemaBuilder()->hasColumn($user->getTable(), 'last_login_at')) {
                $updateData['last_login_at'] = now();
            }

            if ($user->getConnection()->getSchemaBuilder()->hasColumn($user->getTable(), 'last_login_ip')) {
                $updateData['last_login_ip'] = $request->ip();
            }

            if (!empty($updateData)) {
                $user->update($updateData);
            }
        } catch (\Exception $e) {
            // Log error but don't fail the login process
            Log::warning('Failed to update last login information', [
                'user_id' => $user->id,
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Calculate session duration for logout logging
     *
     * @param User $user
     * @return int Duration in minutes
     */
    private function calculateSessionDuration(User $user): int
    {
        try {
            if (isset($user->last_login_at)) {
                return $user->last_login_at->diffInMinutes(now());
            }
        } catch (\Exception $e) {
            // Return 0 if calculation fails
        }

        return 0;
    }

    /**
     * Log security events for monitoring and analysis
     *
     * @param string $event
     * @param array $context
     * @return void
     */
    private function logSecurityEvent(string $event, array $context = []): void
    {
        Log::channel('security')->info("Auth Event: {$event}", array_merge($context, [
            'timestamp' => now()->toISOString(),
            'event_type' => $event,
            'session_id' => session()->getId()
        ]));
    }
}
