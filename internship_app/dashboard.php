<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Internship Application Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="nav-bar">
        <img src="image_1.png" alt="Logo" class="nav-logo">
        <div class="user-info">
            <span>Welcome, <b><?php echo $_SESSION['username']; ?></b></span>
            <a href="index.php" class="logout-btn">Logout</a>
        </div>
    </div>

    <div class="main-content">
        <div class="form-card">
            <h2>Internship Application</h2>
            <p>Please fill out your details below.</p>
            <hr style="margin: 20px 0; border: 0; border-top: 1px solid #eee;">

            <form action="submit.php" method="POST">
                <label>Full Name</label>
                <div class="input-group">
                    <input type="text" name="name" required placeholder="John Doe">
                </div>

                <label>Email Address</label>
                <div class="input-group">
                    <input type="email" name="email" required placeholder="john@example.com">
                </div>

                <label>Role Applying For</label>
                <div class="input-group">
                    <select name="role" class="custom-select">
                        <option value="Frontend">Frontend Developer</option>
                        <option value="Backend">Backend Developer</option>
                        <option value="DevOps">DevOps Engineer</option>
                    </select>
                </div>

                <label>Resume Link (Google Drive / LinkedIn)</label>
                <div class="input-group">
                    <input type="text" name="resume_link" placeholder="https://..." required>
                </div>

                <button type="submit" class="login-btn">Submit Application</button>
            </form>
        </div>
    </div>

</body>
</html>