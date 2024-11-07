<?php
include 'db_connection.php'; // Adjust the path as necessary

// Test connection
if ($conn) {
    echo "Database connected successfully!";
} else {
    echo "Connection failed: " . $conn->connect_error;
}

// Close the connection
$conn->close();
?>
