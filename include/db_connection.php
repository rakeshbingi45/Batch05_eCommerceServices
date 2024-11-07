<?php
$servername = "localhost"; // MySQL server address
$username = "root"; // Default XAMPP MySQL username
$password = ""; // Default XAMPP MySQL password (usually empty)
$dbname = "vmr_electronics"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Display connection error
}

// Uncomment below to confirm successful connection (for testing purposes)
// echo "Connected successfully";
?>

