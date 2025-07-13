<?php
$host = "localhost";
$dbname = "smarteller";
$user = "your_db_user";
$pass = "your_db_password";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
