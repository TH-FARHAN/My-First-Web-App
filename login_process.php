<?php
session_start();
// Database connection
$conn = new mysqli("localhost", "root", "", "adoptlove");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get form values
$username = $_POST['username'];
$password = $_POST['password'];
// Prepare statement to avoid SQL injection
$stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();
    if (password_verify($password, $hashed_password)) {
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $username;
         header("Location: dashboard.php");
        exit(); // Always call exit after header redirect
    } else {
        echo "<script>
    alert('Invalid password!');
    window.location.href = './login.php'; // Replace with your actual form page filename
</script>";
    }
} else {
    echo "User not found.";
    echo "<script>
    alert('User not found!');
    window.location.href = './login.php'; // Replace with your actual form page filename
</script>";
}
$stmt->close();
$conn->close();
?>
