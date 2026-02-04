<?php
// 1. DATABASE CREDENTIALS (EDIT THIS SECTION ONLY)
$db_host = "127.0.0.1";//"internship-db.xxxxxxx.us-east-1.rds.amazonaws.com"; // Your RDS Endpoint
$db_user = "devops"; //"admin";           // Your RDS Username
$db_pass = "test1234"; //"Cloudify@2026";   // Your RDS Password
$db_name = "internship_db";   // The database name we want to create

// 2. AUTOMATIC CONNECTION LOGIC
// We check if a constant 'INSTALLING' is defined. 
// If it is, we SKIP connecting (so the installer can handle it).
if (!defined('INSTALLING')) {
    // Standard connection for the website
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("<strong>Database Connection Failed:</strong> " . $conn->connect_error . 
            "<br><em>(Hint: Have you run <a href='install.php'>install.php</a> yet?)</em>");
    }
}
?>
