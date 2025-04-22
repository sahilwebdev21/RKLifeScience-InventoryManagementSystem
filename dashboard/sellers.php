<?php
require_once '../config/db.php';
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: ../index.php");
  exit;
}

$sellers = $conn->query("SELECT * FROM sellers ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Seller Management</title>
</head>
<body>
<?php include '../includes/sidebar.php'; ?>
<div class="content">
  <h2>Add New Seller</h2>
  <form action="../actions/add_seller.php" method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>PAN:</label><br>
    <input type="text" name="pan"><br><br>

    <label>Address:</label><br>
    <input type="text" name="address"><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone"><br><br>

    <button type="submit">Add Seller</button>
  </form>

  <h2>All Sellers</h2>
  <table border="1" cellpadding="5">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>PAN</th>
      <th>Address</th>
      <th>Phone</th>
    </tr>
    <?php while ($seller = $sellers->fetch_assoc()): ?>
      <tr>
        <td><?= $seller['id'] ?></td>
        <td><?= $seller['name'] ?></td>
        <td><?= $seller['pan'] ?></td>
        <td><?= $seller['address'] ?></td>
        <td><?= $seller['phone'] ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
  </div>
</body>
</html>
