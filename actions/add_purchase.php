<?php
require_once '../config/db.php';
session_start();

$seller_id     = $_POST['seller_id'];
$bill_no       = $_POST['bill_no'];
$product_name  = $_POST['product_name'];
$company_name  = $_POST['company_name'];
$packing       = $_POST['packing'];
$mrp           = $_POST['mrp'];
$rate          = $_POST['rate'];
$total         = $_POST['total'];

$sql = "INSERT INTO purchases (seller_id, bill_no, product_name, company_name, packing, mrp, rate, total)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("issssddd", $seller_id, $bill_no, $product_name, $company_name, $packing, $mrp, $rate, $total);
$stmt->execute();

$_SESSION['message'] = "Purchase added successfully!";
header("Location: ../dashboard/purchase.php");
