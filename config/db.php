<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "rk_life_science";

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
