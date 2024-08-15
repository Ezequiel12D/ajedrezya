<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajedrezya";

$conn = new mysqli($servername, $username, $password, 'ajedrezya');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
