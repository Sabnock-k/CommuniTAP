<?php
$host = "localhost";  // Server (localhost in XAMPP)
$user = "root";       // Default XAMPP username
$pass = "";           // Default XAMPP password (empty)
$dbname = "Communitap"; // Change to your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
