<?php
// Establish a connection to the database
/*
$servername = "localhost";
$username = "phpuser";
$password = "password";
$dbname = "restaurant";
*/

//Host
$host = "db";
$user = "root";
$password = "root";
$database = "mydb";

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
