<?php
// Google reCAPTCHA secret key
$recaptcha_secret = '6LeYWlkrAAAAAL2PWhT0ASqN-a9wJLe1xtohteK5';
$recaptcha_response = $_POST['g-recaptcha-response'] ?? '';
// Prevent empty CAPTCHA submission
if (empty($recaptcha_response)) {
    header("Location: service.php?success=0&captcha=missing");
    exit;
}
// Attempt to verify CAPTCHA
$verify_url = "https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response";
$verify = @file_get_contents($verify_url); // suppress warning
$response_data = $verify ? json_decode($verify) : null;

// Offline or failed response
if (!$response_data || !$response_data->success) {
    $reason = !$verify ? "offline" : "failed";
    header("Location: service.php?success=0&captcha=$reason");
    exit;
}
// Database connection
$conn = new mysqli("localhost", "root", "", "adoptlove");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Collect and sanitize form data
$a_name     = trim($_POST['a_name']);
$a_address  = trim($_POST['a_address']);
$a_pn       = trim($_POST['a_pn']);
$a_email    = trim($_POST['a_email']);
$a_petName  = trim($_POST['a_petName']);
$a_comment  = trim($_POST['a_comment']);
$a_status   = "1";
$pet_id     = intval($_POST['pet_id'] ?? 0);
// Insert into adoption table
$sql = "INSERT INTO adoption (a_name, a_address, a_pn, a_email, a_petName, a_comment, a_status, pet_id, a_createdDate)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())";
$stmt = $conn->prepare($sql);
if ($stmt) {
    $stmt->bind_param("sssssssi", $a_name, $a_address, $a_pn, $a_email, $a_petName, $a_comment, $a_status, $pet_id);
    $stmt->execute();
    // Redirect based on success
    $redirect = $stmt->affected_rows > 0 ? "1" : "0";
    $stmt->close();
    $conn->close();
    header("Location: service.php?success=$redirect");
    exit;
} else {
    // SQL prepare failed
    $conn->close();
    header("Location: service.php?success=0&error=stmt");
    exit;
}
?>