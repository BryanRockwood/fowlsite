<?php
$hostName = "localhost";
$userName = "root2"
$password = "password"
$databaseName = "owlplayers";
$conn = new mysqli($hostName, $userName, $password, $databaseName);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>