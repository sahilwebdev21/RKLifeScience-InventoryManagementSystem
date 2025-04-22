<?php
require_once '../config/db.php';
session_start();

$name    = $_POST['name'];
$pan     = $_POST['pan'];
$address = $_POST['address'];
$phone   = $_POST['phone'];

$sql = "INSERT INTO sellers (name, pan, address, phone) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $pan, $address, $phone);
$stmt->execute();

$_SESSION['message'] = "Seller added successfully!";
header("Location: ../dashboard/sellers.php");
exit;
