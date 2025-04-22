<?php
require_once '../config/db.php';
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: ../index.php");
  exit;
}
?>

<?php include '../includes/sidebar.php'; ?>
<div class="content">
  <h2>Welcome, <?= $_SESSION['admin'] ?> 👋</h2>
  <p>This is your dashboard homepage. From here, you can manage purchases, sellers, and more features coming soon!</p>

  <ul>
    <li>📦 Add or view purchases</li>
    <li>🧾 Manage sellers</li>
    <li>📊 Ledger & reports (coming soon)</li>
    <li>🧑‍🤝‍🧑 Customer management (coming next)</li>
  </ul>
</div>
