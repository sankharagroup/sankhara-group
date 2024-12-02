<?php
// db_connect.php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Adjust if you have a password set
$dbname = "sankhara";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Optionally, you can also return the connection object for further use
// return $conn;
?>
