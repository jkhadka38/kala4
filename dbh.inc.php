<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "Kala";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName) ;

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>