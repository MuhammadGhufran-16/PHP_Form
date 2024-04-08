<?php
// Database connection
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "users_db"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validate if password matches confirm password
if ($password != $confirm_password) {
    die("Error: Passwords do not match");
}

// Sanitize inputs to prevent SQL injection
$name = $conn->real_escape_string($name);
// $lname = $conn->real_escape_string($lname);
$email = $conn->real_escape_string($email);
$password = $conn->real_escape_string($password);

// Insert user information into users_registration table
$sql = "INSERT INTO reg_details (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>