<?php
include 'config.php';

$user = $_POST['username'];
$pass = md5($_POST['password']); // Hashing password

// Check if username already exists
$check_sql = "SELECT * FROM users WHERE username='$user'";
$result = $conn->query($check_sql);

if ($result->num_rows > 0) {
    echo "<script>alert('Username already exists!'); window.location.href='register.php';</script>";
} else {
    $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful! Please Login.'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>