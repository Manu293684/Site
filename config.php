<?php
$host = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "licenta";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Conexiune nereușită! " . $conn->connect_error);
}
?>