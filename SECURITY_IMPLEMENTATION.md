# Security Implementation Guide - Cak & Ning Surabaya

## 🛡️ Overview

Sistem keamanan Cak & Ning Surabaya telah ditingkatkan dengan implementasi multiple layers security untuk melindungi dari berbagai jenis serangan, terutama brute force attacks dan unauthorized access attempts.

## 🔒 Security Features Implemented

### 1. **Rate Limiting & Brute Force Protection**

#### Exponential Backoff System
- **3 failed attempts** → 15 minutes lockout
- **6 failed attempts** → 30 minutes lockout  
- **9 failed attempts** → 60 minutes lockout
- **Maximum lockout** → 6 hours

#### Dual Tracking System
```php
// IP-based tracking
"login_throttle:ip:" + hash('sha256', $ip_address)

// Email-based tracking  
"login_throttle:email:" + hash('sha256', $email_address)
```

#### Protection Mechanisms
- **IP-based lockout** - Prevents attacks from specific IP addresses
- **Email-based lockout** - Prevents targeted attacks on specific accounts
- **Progressive delays** - Exponentially increasing lockout times
- **Cache-based storage** - Fast lookup and automatic expiration

### 2. **Enhanced Input Validation**

#### Server-Side Validation
```php
$validated = $request->validate([
    'email' => [
        'required',
        'email:strict,dns,spoof', // Strict email validation
        'max:255',
        'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'
    ],
    'password' => [
        'required',
        'string',
        'min:6',
        'max:255'
    ],
    'remember' => 'nullable|boolean'
]);
```

#### Client-Side Protection
- **Real-time email format validation**
- **Password length requirements**
- **Input sanitization**
- **XSS prevention measures**
- **Form submission security**

### 3. **Security Logging System**

#### Dedicated Security Log Channel
```php
// config/logging.php
'security' => [
    'driver' => 'daily',
    'path' => storage_path('logs/security.log'),
    'level' => 'info',
    'days' => 90, // Retain logs for 3 months
],
```

#### Logged Security Events
- **Login attempts** (success/failure)
- **Account lockouts** and unlocks
- **Suspicious activity** detection
- **IP address tracking**
- **User agent logging**
- **Session duration** tracking

### 4. **Database Security Enhancements**

#### New Security Fields
```sql
-- Additional columns in users table
last_login_at           TIMESTAMP NULL
last_login_ip           VARCHAR(45) NULL  -- IPv6 support
status                  ENUM('active', 'inactive', 'suspended') DEFAULT 'active'
email_verified_at       TIMESTAMP NULL
failed_login_attempts   INT DEFAULT 0
locked_until            TIMESTAMP NULL
```

#### User Model Security Methods
```php
$user->isLocked()              // Check if account is locked
$user->lockAccount($minutes)   // Lock account for duration
$user->unlockAccount()         // Remove account lock
$user->incrementFailedAttempts() // Track failed attempts
$user->resetFailedAttempts()   // Clear failed attempts
$user->isActive()              // Check account status
```

## 🔧 Implementation Components

### 1. **LoginThrottleMiddleware**
**File**: `app/Http/Middleware/LoginThrottleMiddleware.php`

**Features**:
- Exponential backoff calculation
- IP and email-based tracking
- Automatic lockout management
- Security event logging
- JSON response for lockout status

**Usage**:
```php
Route::post('/login', [AuthController::class, 'login'])
    ->middleware('login.throttle')
    ->name('login.perform');
```

### 2. **Enhanced AuthController**
**File**: `app/Http/Controllers/AuthController.php`

**Security Improvements**:
- Comprehensive input validation
- Email sanitization and verification
- User existence verification
- Account status checking
- Security event logging
- Session security management
- Remember token security

### 3. **Secure Login Form**
**File**: `resources/views/auth/login.blade.php`

**Frontend Security**:
- CSRF protection
- Input validation (client & server)
- Error message handling
- Loading state management
- Password visibility toggle
- Security notices
- Rate limiting feedback

### 4. **JavaScript Security**
**Client-side Protection**:
- Form validation
- Input sanitization
- XSS prevention
- Developer tools deterrent
- Context menu blocking
- Real-time feedback

## 📊 Security Monitoring

### Log Analysis
Security logs are stored in `storage/logs/security.log` with structured JSON format:

```json
{
    "timestamp": "2024-10-21T10:30:00Z",
    "event_type": "login_failed",
    "ip": "192.168.1.100",
    "email": "user@example.com",
    "user_agent": "Mozilla/5.0...",
    "attempts_ip": 2,
    "attempts_email": 1
}
```

### Key Metrics to Monitor
- **Failed login attempts** per IP/email
- **Lockout frequency** and duration
- **Suspicious patterns** (time-based, geographic)
- **Account security** status changes
- **Session duration** anomalies

## 🚨 Security Alerts

### Automatic Triggers
1. **Multiple failed attempts** from same IP
2. **Account lockout** events
3. **Suspicious login patterns**
4. **Account status** changes
5. **Extended session** durations

### Response Actions
1. **IP-based blocking** (automatic)
2. **Account lockout** (progressive)
3. **Security team notification**
4. **Incident logging**
5. **Pattern analysis**

## 🔍 Testing Security Features

### Manual Testing
```bash
# Test rate limiting
curl -X POST http://localhost:8000/login \
  -d "email=test@example.com&password=wrong" \
  -H "Content-Type: application/x-www-form-urlencoded"

# Repeat 3+ times to trigger lockout
```

### Expected Responses
```json
// After 3 failed attempts
{
    "error": "Too many login attempts. Please try again in 15 minutes.",
    "lockout_time": 15,
    "retry_after": "2024-10-21T11:45:00Z"
}
```

## 📋 Security Checklist

### ✅ Implemented Features
- [x] Rate limiting with exponential backoff
- [x] IP and email-based tracking
- [x] Enhanced input validation
- [x] Security event logging
- [x] Account lockout system
- [x] Session security
- [x] CSRF protection
- [x] XSS prevention
- [x] Client-side validation
- [x] Database security fields

### 🔄 Recommended Enhancements
- [ ] **Two-Factor Authentication (2FA)**
- [ ] **CAPTCHA integration** after failed attempts
- [ ] **Geolocation tracking** for suspicious logins
- [ ] **Email notifications** for security events
- [ ] **Admin dashboard** for security monitoring
- [ ] **API rate limiting** for future API endpoints
- [ ] **Password complexity** requirements
- [ ] **Account recovery** security measures

## 🛠️ Configuration

### Environment Variables
```env
# Security settings
LOG_CHANNEL=stack
LOG_LEVEL=info
SESSION_LIFETIME=120
SESSION_SECURE_COOKIE=true
SESSION_HTTP_ONLY=true
SESSION_SAME_SITE=strict

# Cache settings for rate limiting
CACHE_DRIVER=redis  # Recommended for production
```

### Recommended Production Settings
```php
// config/session.php
'lifetime' => 120,
'secure' => true,
'http_only' => true,
'same_site' => 'strict',

// config/app.php
'debug' => false,
'log_level' => 'warning',
```

## 🚀 Deployment Notes

### Pre-Deployment
1. **Run migrations** to add security fields
2. **Clear cache** and compile assets
3. **Test security features** in staging
4. **Configure logging** channels
5. **Set production** environment variables

### Post-Deployment
1. **Monitor security logs** for unusual activity
2. **Verify rate limiting** is working
3. **Test lockout mechanisms**
4. **Check database** field additions
5. **Validate security** enhancements

This implementation provides a robust security foundation while maintaining good user experience and system performance.
