<style>
  .dashboard-container {
    margin-left: 200px;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f4f6f8;
    padding: 40px 20px;
  }

  .dashboard-content {
    max-width: 700px;
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    text-align: center;
    font-family: Arial, sans-serif;
  }

  .dashboard-content h2 {
    color: #2c3e50;
    margin-bottom: 10px;
  }

  .dashboard-content p {
    margin-bottom: 20px;
    color: #555;
  }

  .dashboard-content ul {
    text-align: left;
    list-style-type: none;
    padding-left: 0;
    margin-top: 15px;
  }

  .dashboard-content ul li {
    background: #ecf0f1;
    padding: 10px 15px;
    margin-bottom: 10px;
    border-radius: 5px;
  }
</style>
<?php include '../includes/sidebar.php'; ?>
<div class="dashboard-container">
  <div class="dashboard-content">
    <h2>Welcome, 👋</h2>
    <p>We're glad to see you back! You are now logged in to the <strong>R K Life Science Admin Panel</strong>.</p>

    <p><strong>About Company:</strong><br>
      R K Life Science is a growing pharmaceutical supplier and distributor, ensuring top-quality products and professional account management.
    </p>

    <p>Use the options below to manage your operations efficiently:</p>
    <ul>
      <li>📦 Add or view purchases</li>
      <li>🧾 Manage sellers</li>
      <li>📊 Ledger & reports (coming soon)</li>
      <li>🧑‍🤝‍🧑 Customer management (coming next)</li>
    </ul>
  </div>
</div>
