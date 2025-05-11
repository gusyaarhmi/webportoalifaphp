<?php
$servername = "127.0.0.1"; // atau "localhost"
$username = "root";
$password = "";
$dbname = "contact_form_db";
$port = 3306; 

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>