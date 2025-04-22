<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard - R K Life Science</title>
</head>
<body>
  <h1>Welcome, <?= $_SESSION['admin']; ?>!</h1>
  <p><a href="../auth/logout.php">Logout</a></p>
  <ul>
    <li><a href="customers.php">Customers</a></li>
    <li><a href="sellers.php">Sellers</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="purchase.php">Purchase</a></li>
    <li><a href="sales.php">Sales</a></li>
    <li><a href="ledger.php">Ledger</a></li>
  </ul>
</body>
</html>
