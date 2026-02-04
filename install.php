<?php
// Define this flag so config.php doesn't try to connect automatically
define('INSTALLING', true);
include 'config.php';

// 1. Connect to the Server (NOT the Database yet)
$conn = new mysqli($db_host, $db_user, $db_pass);

if ($conn->connect_error) {
    die("<h1>Connection to RDS Failed</h1><p>Check your Host, Username, and Password in config.php</p><br>Error: " . $conn->connect_error);
}

echo "<h2>🚀 Starting CloudifyOps Database Installation...</h2>";

// 2. Create Database
$sql = "CREATE DATABASE IF NOT EXISTS $db_name";
if ($conn->query($sql) === TRUE) {
    echo "✅ Database '$db_name' check/creation successful.<br>";
} else {
    die("❌ Error creating database: " . $conn->error);
}

// 3. Select the Database
$conn->select_db($db_name);

// 4. Create Users Table
$sql_users = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";
if ($conn->query($sql_users) === TRUE) {
    echo "✅ Table 'users' created successfully.<br>";
} else {
    echo "❌ Error creating users table: " . $conn->error . "<br>";
}

// 5. Create Applications Table
$sql_apps = "CREATE TABLE IF NOT EXISTS applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    role VARCHAR(50),
    resume_link VARCHAR(255),
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql_apps) === TRUE) {
    echo "✅ Table 'applications' created successfully.<br>";
} else {
    echo "❌ Error creating applications table: " . $conn->error . "<br>";
}

// 6. Create Default Admin User (if not exists)
// Note: Using MD5 for consistency with your previous code. 
// Ideally, use password_hash() in production.
$admin_user = 'admin';
$admin_pass = md5('admin123'); // Default password

$check_admin = "SELECT * FROM users WHERE username='$admin_user'";
$result = $conn->query($check_admin);

if ($result->num_rows == 0) {
    $sql_admin = "INSERT INTO users (username, password) VALUES ('$admin_user', '$admin_pass')";
    if ($conn->query($sql_admin) === TRUE) {
        echo "✅ Default Admin user created (User: admin / Pass: admin123)<br>";
    } else {
        echo "❌ Error creating admin user: " . $conn->error . "<br>";
    }
} else {
    echo "ℹ️ Admin user already exists. Skipping.<br>";
}

echo "<hr><h3>🎉 Installation Complete!</h3>";
echo "<a href='index.php'>Go to Login Page</a>";

$conn->close();
?>
