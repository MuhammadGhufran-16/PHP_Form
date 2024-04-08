<?php

$servername = "localhost"; 
$username = "root"; // your database username
$password = ""; //  your database password
$dbname = "users_db"; //  your database name


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$username = $_POST['username'];
$password = $_POST['password'];


$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

// Query to check if user exists
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    echo "<script>alert('Login successful!');</script>";
} else {
  
    echo "<script>alert('Invalid username or password');</script>";
}

$conn->close();

?>
