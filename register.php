<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudifyOps Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="logo-container">
        <img src="image_1.png" alt="CloudifyOps Logo" class="main-logo">
    </div>

    <div class="login-container">
        <h2>Create Account</h2>
        <h3>Sign up to apply for Internship</h3>

        <form action="register_process.php" method="POST">
            <div class="input-group">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                </span>
                <input type="text" name="username" placeholder="Choose a Username" required>
            </div>

            <div class="input-group">
                <span class="input-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                </span>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="login-btn">REGISTER</button>

            <div class="form-footer" style="justify-content: center;">
                <span>Already have an account? <a href="index.php">Login</a></span>
            </div>
        </form>
    </div>

    <div class="site-footer">Cloudify IT, Simplify IT</div>
</body>
</html>