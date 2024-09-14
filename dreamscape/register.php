<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['psw'];
$password_repeat = $_POST['psw-repeat'];

    // Basic form validation
 if (empty($username) || empty($email) || empty($password) || empty($password_repeat)) {
 echo "All fields are required.";
exit;
}

    // Check if passwords match
if ($password !== $password_repeat) {
 echo "Passwords do not match!";
 exit;
 }

    // Password hashing for security
 $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Store user data (For this example, we'll store in a text file)
    // In a real application, you'd use a database like MySQL
$user_data = $username . "," . $email . "," . $hashed_password . "\n";
$file = fopen("users.txt", "a");

 if ($file) {
 fwrite($file, $user_data);
 fclose($file);
 echo "Registration successful! You can now <a href='signin.html'>sign in</a>.";
 } else {
 echo "There was an error processing your registration.";
 }
}
?>
