<?php
$host = "localhost";
$userName = "root";
$password = "root";
$dbName = "php_project";

// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);

// Check connection
if ($conn) {
	//echo "Database Connection Establish successfully";
	
}
else{
	die("Connection failed: " . $conn->connect_error);
}
?>