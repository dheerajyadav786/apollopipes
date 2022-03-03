<?php
header('Content-Type: text/html; charset=ISO-8859-1');

$servername = "localhost";
$username = "indaplpi_newap";
$password = "Dheeraj@123!";
$database = "indaplpi_newap";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>
