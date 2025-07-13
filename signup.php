<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $username, $email, $hashedPassword);

  if ($stmt->execute()) {
    header("Location: login.php");
    exit();
  } else {
    $error = "Failed to register user.";
  }
}
?>

<!DOCTYPE html>
<html>
<head><title>Smarteller Signup</title></head>
<body>
  <h2>Create an Account</h2>
  <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
  <form method="POST">
    <input type="text" name="username" placeholder="Username" required /><br>
    <input type="email" name="email" placeholder="Email" required /><br>
    <input type="password" name="password" placeholder="Password" required /><br>
    <button type="submit">Sign Up</button>
  </form>
  <p>Already have an account? <a href="login.php">Log in</a></p>
</body>
</html>
