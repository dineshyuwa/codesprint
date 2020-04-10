<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name"; // create codesprint_db database in your phpmyadmin

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>