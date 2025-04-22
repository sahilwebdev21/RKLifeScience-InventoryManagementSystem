<?php
session_start();
require_once '../config/db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    $_SESSION['admin'] = $user['username'];
    header("Location: ../dashboard/index.php");
    exit;
} else {
    $_SESSION['error'] = "Invalid username or password!";
    header("Location: ../index.php");
    exit;
}
