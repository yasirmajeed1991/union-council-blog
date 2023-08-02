<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "unioncouncil";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 "Connected successfully";
 
 // Nwdd75_3    live site ka password user bukola_work hai 
?>