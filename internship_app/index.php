<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudifyOps Internship Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="logo-container">
        <img src="image_1.png" alt="CloudifyOps Logo" class="main-logo">
    </div>

    <div class="login-container">
        <h2>CloudifyOps Internship</h2>
        <h3>Login to Apply</h3>

        <form action="auth.php" method="POST">
            <div class="input-group">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                </span>
                <input type="text" name="username" placeholder="Username" required>
            </div>

            <div class="input-group">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                </span>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <span class="password-toggle" id="togglePassword">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                </span>
            </div>

            <button type="submit" class="login-btn">LOGIN</button>

            <div class="form-footer">
                <a href="#" class="forgot-pass">Forgot Password?</a>
                <span>New User? <a href="register.php" class="apply-here">Apply Here</a></span>
            </div>
        </form>
    </div>

    <div class="site-footer">
        Cloudify IT, Simplify IT
    </div>

    <script src="script.js"></script>
</body>
</html>