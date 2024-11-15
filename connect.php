<?php
$servername = "localhost"; // Database Server
$username = "root"; // Database username
$password = ""; // Aam taur par root user ke liye default password khali hota hai
$dbname = "shoes_website_db"; // Aapka database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection Successfully to the Database: $dbname";
}
?>
