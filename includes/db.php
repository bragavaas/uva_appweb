<?php
// Database credentials
$hostname = 'localhost'; // e.g., 'localhost' or '127.0.0.1'
$username = 'uvaroot'; // MySQL username
$password = 'uvaroot'; // MySQL password
$database = 'uva_webapp'; // Database name

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
}
?>