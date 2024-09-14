<?php
// Sample user credentials
$valid_username = "admin";
$valid_password = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $username = $_POST['username'];
 $password = $_POST['password'];

    // Check if the entered username and password match
if ($username === $valid_username && $password === $valid_password) {
 echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
 } else {
 echo "Invalid username or password. Please try again.";
 }
}
?>
