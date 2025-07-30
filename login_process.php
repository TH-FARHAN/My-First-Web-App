<?php
session_start();
$conn = new mysqli("localhost", "root", "", "adoptlove");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = htmlspecialchars(trim($_POST['username']));
$password = $_POST['password'];
$stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();
$login_error = '';
if ($stmt->num_rows > 0) {
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();
    if (password_verify($password, $hashed_password)) {
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $login_error = 'Incorrect password. Please try again.';
    }
} else {
    $login_error = 'No account found with that username.';
}
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Failed</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #eaf6ea;
    }
    .custom-alert-overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100vw; height: 100vh;
      background-color: rgba(0, 0, 0, 0.6);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
    }
    .custom-alert-box {
      background-color: #ffffff;
      padding: 30px 25px;
      border-radius: 12px;
      width: 90%;
      max-width: 400px;
      text-align: center;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
    }
    .custom-alert-box h3 {
      margin-bottom: 15px;
      color: #d32f2f;
    }
    .custom-alert-box p {
      margin-bottom: 20px;
      color: #333;
    }
    .custom-alert-box button {
      background-color: #4caf50;
      color: white;
      padding: 10px 22px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
    }
    .custom-alert-box button:hover {
      background-color: #388e3c;
    }
  </style>
</head>
<body>
<div class="custom-alert-overlay">
  <div class="custom-alert-box">
    <h3>Login Failed</h3>
    <p><?php echo $login_error; ?></p>
    <button onclick="redirectToLogin()">Try Again</button>
  </div>
</div>
<script>
  function redirectToLogin() {
    window.location.href = './login.php';
  }
  setTimeout(redirectToLogin, 4000);
</script>
</body>
</html>
