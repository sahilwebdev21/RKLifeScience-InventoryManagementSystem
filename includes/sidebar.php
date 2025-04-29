<!-- includes/sidebar.php -->
<style>
  .sidebar {
    position: fixed;
    left: 0;
    top: 0;
    width: 200px;
    height: 100vh;
    background-color: #2c3e50;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 20px;
    color: white;
  }

  .sidebar-logo {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background-color: #ecf0f1;
    overflow: hidden;
    margin-bottom: 10px;
  }

  .sidebar-logo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .sidebar-name {
    font-weight: bold;
    font-size: 16px;
    margin-bottom: 20px;
    text-align: center;
  }

  .sidebar a {
    display: block;
    width: 100%;
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    text-align: left;
    box-sizing: border-box;
  }

  .sidebar a:hover {
    background-color: #34495e;
  }

  .logout-link {
    margin-top: auto;
    width: 100%;
    text-align: left;
    padding-bottom: 20px;
  }

  .content {
    margin-left: 200px;
    padding: 20px;
  }
</style>

<div class="sidebar">
  <div class="sidebar-logo">
    <img src="../assets/logo.png" alt="Company Logo">
  </div>
  <div class="sidebar-name">R K Life Science</div>

  <a href="index.php">🏠 Dashboard</a>
  <a href="purchase.php">📦 Purchase</a>
  <a href="sellers.php">🧾 Sellers</a>

  <div class="logout-link">
    <a href="../auth/logout.php">🚪 Logout</a>
  </div>
</div>
