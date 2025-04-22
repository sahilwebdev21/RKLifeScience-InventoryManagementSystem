<!-- includes/sidebar.php -->
<style>
  .sidebar {
    position: fixed;
    left: 0;
    top: 0;
    width: 180px;
    height: 100vh;
    background-color: #2c3e50;
    padding-top: 20px;
    color: white;
  }

  .sidebar a {
    display: block;
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    margin-bottom: 5px;
  }

  .sidebar a:hover {
    background-color: #34495e;
  }

  .content {
    margin-left: 200px;
    padding: 20px;
  }
</style>

<div class="sidebar">
  <a href="index.php">🏠 Dashboard</a>
  <a href="purchase.php">📦 Purchase</a>
  <a href="sellers.php">🧾 Sellers</a>
  <a href="javascript:history.back()">🔙 Go Back</a>
  <a href="../auth/logout.php">🚪 Logout</a>
</div>
