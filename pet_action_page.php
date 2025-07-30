<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "adoptlove";
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$pet_id = isset($_POST['pet_id']) ? intval($_POST['pet_id']) : 0;
$name = trim($_POST['name']);
$description = trim($_POST['description']);
$category_id = $_POST['petType'];
$dob = $_POST['dob'];
$status = $_POST['status'];
$imagePath = null;
$statusType = "";
$message = "";
if (isset($_FILES['petImage']) && $_FILES['petImage']['error'] == 0) {
    $image = $_FILES['petImage'];
    $uploadDir = "uploads/";
    $imageName = basename($image["name"]);
    $targetFile = $uploadDir . time() . "_" . $imageName;
    $imageType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $check = getimagesize($image["tmp_name"]);
    if ($check === false) {
        $statusType = "error";
        $message = "File is not a valid image.";
    } elseif (!move_uploaded_file($image["tmp_name"], $targetFile)) {
        $statusType = "error";
        $message = "Failed to upload the image.";
    } else {
        $imagePath = $targetFile;
    }
}
if ($statusType !== "error") {
    if ($pet_id > 0) {
        if ($imagePath) {
            $stmt = $conn->prepare("UPDATE pets SET p_tittle=?, p_description=?, p_imagename=?, cat_id=?, p_date_of_birth=?, p_status=? WHERE p_id=?");
            $stmt->bind_param("sssissi", $name, $description, $imagePath, $category_id, $dob, $status, $pet_id);
        } else {
            $stmt = $conn->prepare("UPDATE pets SET p_tittle=?, p_description=?, cat_id=?, p_date_of_birth=?, p_status=? WHERE p_id=?");
            $stmt->bind_param("ssissi", $name, $description, $category_id, $dob, $status, $pet_id);
        }
        $message = "Pet updated successfully!";
    } else {
        $stmt = $conn->prepare("INSERT INTO pets (p_tittle, p_description, p_imagename, cat_id, p_date_of_birth, p_status) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssiss", $name, $description, $imagePath, $category_id, $dob, $status);
        $message = "Pet added successfully!";
    }
    if ($stmt->execute()) {
        $statusType = "success";
    } else {
        $statusType = "error";
        $message = "Database error: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pet Submission Result</title>
    <style>
        body {
            margin: 0;
            background: #f8f8f8;
            font-family: 'Segoe UI', sans-serif;
        }
        .custom-alert {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            color: #333;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            text-align: center;
            z-index: 1000;
            width: 90%;
            max-width: 400px;
        }
        .custom-alert.success {
            border-top: 8px solid #28a745;
        }
        .custom-alert.error {
            border-top: 8px solid #dc3545;
        }
        .custom-alert h2 {
            margin-top: 0;
            font-size: 22px;
        }
        .custom-alert p {
            margin: 15px 0;
        }
        .loader {
            margin-top: 20px;
            border: 4px solid #f3f3f3;
            border-radius: 50%;
            border-top: 4px solid #3498db;
            width: 30px;
            height: 30px;
            animation: spin 1s linear infinite;
            display: inline-block;
        }
        @keyframes spin {
            0% { transform: rotate(0deg);}
            100% { transform: rotate(360deg);}
        }
    </style>
</head>
<body>
<div class="custom-alert <?php echo htmlspecialchars($statusType); ?>">
    <h2><?php echo $statusType === "success" ? "Success!" : "Error"; ?></h2>
    <p><?php echo htmlspecialchars($message); ?></p>
    <div class="loader"></div>
</div>
<script>
    setTimeout(() => {
        window.location.href = './pets.php';
    }, 1000);
</script>
</body>
</html>
