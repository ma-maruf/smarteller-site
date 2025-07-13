<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Smarteller Control Panel</title>
  <style>
    body { font-family: Arial; margin: 40px; }
    h1 { color: #0077cc; }
  </style>
</head>
<body>
  <h1>Welcome to your Control Panel, <?php echo $_SESSION['user']; ?>!</h1>
  <p>Here you can manage users, payments, and monitor activity.</p>
</body>
</html>
