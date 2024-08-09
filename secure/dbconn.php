<?php
// Database connection
// Connect to MySQL

$servername = "localhost";
$username = "vinkblgn_clearline";
$password = "KpR})#f11,ZB";
$dbname = "vinkblgn_clearline";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>