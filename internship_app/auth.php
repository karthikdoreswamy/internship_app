<?php
session_start();
include 'config.php';

$user = $_POST['username'];
$pass = md5($_POST['password']); // Simple hashing

$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $user;
    header("Location: dashboard.php");
} else {
    echo "Invalid username or password. <a href='index.php'>Try again</a>";
}
$conn->close();
?>