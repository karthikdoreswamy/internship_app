<?php
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$role = $_POST['role'];
$resume = $_POST['resume_link'];

$sql = "INSERT INTO applications (name, email, role, resume_link) VALUES ('$name', '$email', '$role', '$resume')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Application Submitted Successfully!</h1>";
    echo "<a href='dashboard.php'>Go Back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>