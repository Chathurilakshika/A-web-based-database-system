<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diploma_institute";
// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check the connection
If ($conn->connect_error) {
 Die("Connection failed: " . $conn->connect_error);
}
?>
