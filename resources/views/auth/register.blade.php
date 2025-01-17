<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2>Register</h2>
                <p>Welcome! Please create a new account.</p>
            </div>
            <div id="status-message" class="status-message">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name Input -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                </div>

                <!-- Email Input -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                </div>

                <!-- Password Input -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <!-- Confirm Password Input -->
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <!-- Terms and Privacy Policy -->
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="form-group">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />
                                <div class="ms-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <!-- Actions -->
                <div class="form-actions">
                    <a href="{{ route('login') }}" class="already-registered">Already have an account? Login</a>
                    <button type="submit" class="login-button">Register</button>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

<style>
    /* Custom Styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f3f4f6;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .login-card {
        background-color: #ffffff;
        width: 350px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .login-header h2 {
        margin: 0;
        font-size: 24px;
        color: #333333;
    }

    .login-header p {
        font-size: 14px;
        color: #777777;
        margin-top: 5px;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
        text-align: left;
    }

    label {
        display: block;
        font-size: 14px;
        color: #333333;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 95%;
        padding: 10px;
        border: 1px solid #dddddd;
        border-radius: 5px;
        font-size: 14px;
    }

    input[type="checkbox"] {
        margin-right: 5px;
    }

    .forgot-password,
    .already-registered {
        display: block;
        font-size: 12px;
        color: #1a73e8;
        text-decoration: none;
        margin-top: 10px;
    }

    .forgot-password:hover,
    .already-registered:hover {
        text-decoration: underline;
    }

    .login-button {
        width: 100%;
        padding: 10px;
        background-color: #1a73e8;
        border: none;
        border-radius: 5px;
        color: #ffffff;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
    }

    .login-button:hover {
        background-color: #1664c1;
    }

    .status-message {
        color: green;
        font-size: 14px;
        margin-bottom: 15px;
        display: none;
    }
</style>

<script>
    // script.js
document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // جلب بيانات الإدخال
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const passwordConfirmation = document.getElementById('password_confirmation').value;

    // مثال على رسالة نجاح
    const statusMessage = document.getElementById('status-message');
    if (name && email && password && passwordConfirmation) {
        statusMessage.textContent = "Registration successful!";
        statusMessage.style.display = "block";
        statusMessage.style.color = "green";
    } else {
        statusMessage.textContent = "Please fill out all fields!";
        statusMessage.style.display = "block";
        statusMessage.style.color = "red";
    }
});
</script>
