<?php
$servername = "localhost"; // MySQL server hostname (usually localhost)
$username = "id21957489_grocery"; // MySQL username
$password = "Grocery0#@$"; // MySQL password
$dbname = "id21957489_grocery"; // MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
