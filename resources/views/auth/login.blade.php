@extends('layouts.app')
@section('title', 'Login - Cak Ning Surabaya')
@section('styles')
    <style>
        .drawer {
            display: none
        }
    </style>
@endsection
@section('content')
    <div>
        <div class="bg-white dark:bg-gray-900">
            <div class="flex justify-center h-screen">
                <div class="hidden bg-cover bg-center lg:block lg:w-2/3"
                    style="background-image: url({{ asset('images/cover_2.jpg') }})">
                    <div class="flex items-center h-full px-20 bg-gray-900 opacity-10">
                        {{-- <div>
                            <h2 class="text-2xl font-bold text-white sm:text-3xl">Meraki UI</h2>

                            <p class="max-w-xl mt-3 text-gray-300">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. In
                                autem ipsa, nulla laboriosam dolores, repellendus perferendis libero suscipit nam temporibus
                                molestiae
                            </p>
                        </div> --}}
                    </div>
                </div>

                <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                    <div class="flex-1">
                        <div class="text-center">
                            <div class="flex justify-center mx-auto">
                                <img class="w-auto h-20 sm:h-18" src="{{ asset('images/logo/cak_ning_full_color.svg') }}" alt="">
                            </div>

                            {{-- <p class="mt-3 text-gray-500 dark:text-gray-300">Login</p> --}}
                        </div>

                        <div class="mt-8">
                            {{-- <!-- Security Notice - Always visible -->
                            <div class="mb-4 p-3 bg-blue-50 border border-blue-200 rounded-lg">
                                <div class="flex items-start">
                                    <span class="iconify text-blue-600 mr-2 mt-0.5" data-icon="mdi:shield-check" data-width="16"></span>
                                    <div class="text-xs text-blue-800">
                                        <p class="font-medium">Security Notice:</p>
                                        <p>Multiple failed login attempts will result in temporary account lockout. Please ensure you enter the correct credentials.</p>
                                    </div>
                                </div>
                            </div> --}}

                            @if ($errors->any())
                                <div class="mb-4 p-4 bg-red-50 border border-red-200 rounded-lg">
                                    <div class="flex items-center mb-2">
                                        <span class="iconify text-red-500 mr-2" data-icon="mdi:alert-circle" data-width="20"></span>
                                        <h3 class="text-sm font-medium text-red-800">Login Error</h3>
                                    </div>
                                    <div class="text-sm text-red-700">
                                        @if ($errors->has('email') && Str::contains($errors->first('email'), 'Too many login attempts'))
                                            <p><strong>Account Temporarily Locked:</strong> Too many failed login attempts detected. Please wait before trying again.</p>
                                        @elseif ($errors->has('email') || $errors->has('password'))
                                            <p>The username or password you entered is incorrect. Please check your credentials and try again.</p>
                                        @else
                                            <ul class="list-disc list-inside">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="mb-4 p-4 bg-green-50 border border-green-200 rounded-lg">
                                    <div class="flex items-center">
                                        <span class="iconify text-green-500 mr-2" data-icon="mdi:check-circle" data-width="20"></span>
                                        <p class="text-sm text-green-700">{{ session('success') }}</p>
                                    </div>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login.perform') }}" id="loginForm" autocomplete="on">
                                @csrf

                                <div>
                                    <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">
                                        Email Address <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email"
                                           name="email"
                                           id="email"
                                           value="{{ old('email') }}"
                                           placeholder="example@example.com"
                                           autocomplete="email"
                                           required
                                           maxlength="255"
                                           class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-olive-400 dark:focus:border-olive-400 focus:ring-olive-400 focus:outline-none focus:ring focus:ring-opacity-40 @error('email') border-red-500 @enderror" />
                                    @error('email')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mt-6">
                                    <label for="password" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">
                                        Password <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <input type="password"
                                               name="password"
                                               id="password"
                                               placeholder="Your Password"
                                               autocomplete="current-password"
                                               required
                                               minlength="6"
                                               maxlength="255"
                                               class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-olive-400 dark:focus:border-olive-400 focus:ring-olive-400 focus:outline-none focus:ring focus:ring-opacity-40 @error('password') border-red-500 @enderror" />
                                        <button type="button"
                                                onclick="togglePasswordVisibility()"
                                                class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                            <span id="passwordToggleIcon" class="iconify text-gray-400 hover:text-gray-600" data-icon="mdi:eye-off" data-width="20"></span>
                                        </button>
                                    </div>
                                    @error('password')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- <div class="mt-4">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="remember" id="remember" value="1" class="w-4 h-4 text-olive-600 border-gray-300 rounded focus:ring-olive-500">
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Remember me for 30 days</span>
                                    </label>
                                </div> --}}

                                <div class="mt-6">
                                    <button type="submit"
                                            id="loginButton"
                                            class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform bg-olive-600 rounded-lg hover:bg-olive-500 focus:outline-none focus:bg-olive-500 focus:ring focus:ring-olive-300 focus:ring-opacity-50 disabled:opacity-50 disabled:cursor-not-allowed">
                                        <span id="loginButtonText">Login</span>
                                        <span id="loginButtonSpinner" class="hidden">
                                            <span class="iconify animate-spin mr-2" data-icon="mdi:loading" data-width="16"></span>
                                            Logging in...
                                        </span>
                                    </button>
                                </div>
                            </form>

                            {{-- <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a
                                    href="#"
                                    class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign up</a>.
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        // Form security and UX enhancements
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');
            const loginButton = document.getElementById('loginButton');
            const loginButtonText = document.getElementById('loginButtonText');
            const loginButtonSpinner = document.getElementById('loginButtonSpinner');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');

            // Form submission handler
            loginForm.addEventListener('submit', function(e) {
                // Basic client-side validation
                if (!validateForm()) {
                    e.preventDefault();
                    return false;
                }

                // Show loading state
                setLoadingState(true);

                // Add a timeout to prevent indefinite loading
                setTimeout(() => {
                    setLoadingState(false);
                }, 10000);
            });

            // Real-time email validation
            emailInput.addEventListener('blur', function() {
                validateEmail(this.value);
            });

            // Password input security
            passwordInput.addEventListener('paste', function(e) {
                // Allow paste but warn about clipboard security
                setTimeout(() => {
                    if (this.value.length > 255) {
                        this.value = this.value.substring(0, 255);
                        showWarning('Password has been truncated to maximum length.');
                    }
                }, 10);
            });

            // Prevent common security issues
            document.addEventListener('keydown', function(e) {
                // Prevent F12, Ctrl+Shift+I, Ctrl+U (basic deterrent)
                if (e.key === 'F12' ||
                    (e.ctrlKey && e.shiftKey && e.key === 'I') ||
                    (e.ctrlKey && e.key === 'u')) {
                    e.preventDefault();
                    return false;
                }
            });

            // Disable right-click context menu (basic deterrent)
            document.addEventListener('contextmenu', function(e) {
                e.preventDefault();
                return false;
            });

            // Form validation function
            function validateForm() {
                let isValid = true;
                const errors = [];

                // Email validation
                const emailValue = emailInput.value.trim();
                if (!emailValue) {
                    errors.push('Email is required.');
                    isValid = false;
                } else if (!isValidEmail(emailValue)) {
                    errors.push('Please enter a valid email address.');
                    isValid = false;
                }

                // Password validation
                const passwordValue = passwordInput.value;
                if (!passwordValue) {
                    errors.push('Password is required.');
                    isValid = false;
                } else if (passwordValue.length < 6) {
                    errors.push('Password must be at least 6 characters long.');
                    isValid = false;
                }

                if (!isValid) {
                    showErrors(errors);
                }

                return isValid;
            }

            // Email validation helper
            function validateEmail(email) {
                const isValid = isValidEmail(email);
                const emailField = document.getElementById('email');

                if (email && !isValid) {
                    emailField.classList.add('border-red-500');
                    showFieldError('email', 'Please enter a valid email address.');
                } else {
                    emailField.classList.remove('border-red-500');
                    hideFieldError('email');
                }

                return isValid;
            }

            function isValidEmail(email) {
                const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                return emailRegex.test(email);
            }

            function setLoadingState(loading) {
                if (loading) {
                    loginButton.disabled = true;
                    loginButtonText.classList.add('hidden');
                    loginButtonSpinner.classList.remove('hidden');
                } else {
                    loginButton.disabled = false;
                    loginButtonText.classList.remove('hidden');
                    loginButtonSpinner.classList.add('hidden');
                }
            }

            function showErrors(errors) {
                // Remove existing error display
                const existingAlert = document.querySelector('.client-error-alert');
                if (existingAlert) {
                    existingAlert.remove();
                }

                // Create error alert
                const errorHtml = `
                    <div class="client-error-alert mb-4 p-4 bg-red-50 border border-red-200 rounded-lg">
                        <div class="flex items-center mb-2">
                            <span class="iconify text-red-500 mr-2" data-icon="mdi:alert-circle" data-width="20"></span>
                            <h3 class="text-sm font-medium text-red-800">Please correct the following errors:</h3>
                        </div>
                        <ul class="text-sm text-red-700 list-disc list-inside">
                            ${errors.map(error => `<li>${error}</li>`).join('')}
                        </ul>
                    </div>
                `;

                loginForm.insertAdjacentHTML('afterbegin', errorHtml);
            }

            function showFieldError(fieldName, message) {
                hideFieldError(fieldName);
                const field = document.getElementById(fieldName);
                const errorElement = document.createElement('p');
                errorElement.className = 'field-error mt-1 text-sm text-red-600';
                errorElement.textContent = message;
                field.parentNode.appendChild(errorElement);
            }

            function hideFieldError(fieldName) {
                const field = document.getElementById(fieldName);
                const existingError = field.parentNode.querySelector('.field-error');
                if (existingError) {
                    existingError.remove();
                }
            }

            function showWarning(message) {
                // Simple toast-like warning
                const warning = document.createElement('div');
                warning.className = 'fixed top-4 right-4 bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded z-50';
                warning.innerHTML = `
                    <div class="flex items-center">
                        <span class="iconify mr-2" data-icon="mdi:alert" data-width="16"></span>
                        <span>${message}</span>
                    </div>
                `;
                document.body.appendChild(warning);

                setTimeout(() => {
                    warning.remove();
                }, 5000);
            }
        });

        // Password visibility toggle
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('passwordToggleIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.setAttribute('data-icon', 'mdi:eye');
            } else {
                passwordInput.type = 'password';
                toggleIcon.setAttribute('data-icon', 'mdi:eye-off');
            }
        }

        // Handle server-side rate limiting responses
        @if($errors->has('email') && Str::contains($errors->first('email'), 'Too many login attempts'))
            document.addEventListener('DOMContentLoaded', function() {
                // Disable form for rate limited users
                const form = document.getElementById('loginForm');
                const inputs = form.querySelectorAll('input');
                const button = document.getElementById('loginButton');

                inputs.forEach(input => input.disabled = true);
                button.disabled = true;

                // Update button text and style
                const buttonText = document.getElementById('loginButtonText');
                const buttonSpinner = document.getElementById('loginButtonSpinner');
                buttonText.textContent = 'Account Temporarily Locked';
                buttonSpinner.classList.add('hidden');
                button.classList.add('bg-red-500', 'cursor-not-allowed');
                button.classList.remove('bg-olive-600', 'hover:bg-olive-500');
            });
        @endif
    </script>
@endsection
