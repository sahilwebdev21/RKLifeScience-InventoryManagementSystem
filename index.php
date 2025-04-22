<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>R K Life Science - Login</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="login-container">
    <h2>Admin Login</h2>
    <?php if (isset($_SESSION['error'])): ?>
      <p class="error"><?= $_SESSION['error']; unset($_SESSION['error']); ?></p>
    <?php endif; ?>
    <form method="POST" action="auth/verify.php">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
