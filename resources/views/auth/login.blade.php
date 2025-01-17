
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2>Login</h2>
                <p>Welcome back! Please log in to your account.</p>
            </div>
            <div id="status-message" class="status-message">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email Input -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                </div>

                <!-- Password Input -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <!-- Remember me Checkbox -->
                <div class="form-group checkbox-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>

                <!-- Actions -->
                <div class="form-actions">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-password">Forgot your password?</a>
                    @endif
                    <button type="submit" class="login-button">Log in</button>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>


<style>
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

    .checkbox-group {
        display: flex;
        align-items: center;
    }

    .forgot-password {
        display: block;
        font-size: 12px;
        color: #1a73e8;
        text-decoration: none;
        margin-top: 10px;
    }

    .forgot-password:hover {
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
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // جلب بيانات الإدخال
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // مثال على رسالة نجاح
    const statusMessage = document.getElementById('status-message');
    if (email && password) {
        statusMessage.textContent = "Login successful!";
        statusMessage.style.display = "block";
        statusMessage.style.color = "green";
    } else {
        statusMessage.textContent = "Please fill out all fields!";
        statusMessage.style.display = "block";
        statusMessage.style.color = "red";
    }
});

</script>
