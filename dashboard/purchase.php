<?php
require_once '../config/db.php';
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: ../index.php");
  exit;
}

$sellers = $conn->query("SELECT * FROM sellers");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Purchase Goods</title>
</head>
<body>
<?php include '../includes/sidebar.php'; ?>
<div class="content">
  <h2>Purchase Entry</h2>
  <form action="../actions/add_purchase.php" method="POST">
    <label>Bill Number:</label><br>
    <input type="text" name="bill_no" required><br><br>

    <label>Select Seller:</label><br>
    <select name="seller_id" required>
      <option value="">-- Select Seller --</option>
      <?php while ($row = $sellers->fetch_assoc()): ?>
        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
      <?php endwhile; ?>
    </select><br><br>

    <label>Product Name:</label><br>
    <input type="text" name="product_name" required><br><br>

    <label>Company Name:</label><br>
    <input type="text" name="company_name"><br><br>

    <label>Packing:</label><br>
    <input type="text" name="packing"><br><br>

    <label>MRP:</label><br>
    <input type="number" step="0.01" name="mrp"><br><br>

    <label>Rate:</label><br>
    <input type="number" step="0.01" name="rate"><br><br>

    <label>Total:</label><br>
    <input type="number" step="0.01" name="total"><br><br>

    <button type="submit">Add Purchase</button>
  </form>
  </div>
</body>
</html>
