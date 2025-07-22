<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "adoptlove";
// Connect to DB
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get form data
$pet_id = isset($_POST['pet_id']) ? intval($_POST['pet_id']) : 0;
$name = $_POST['name'];
$description = $_POST['description'];
$category_id = $_POST['petType'];
$dob = $_POST['dob'];
$status = $_POST['status'];
$imagePath = null; // To hold uploaded image path if uploaded
// Handle file upload only if an image is selected
if (isset($_FILES['petImage']) && $_FILES['petImage']['error'] == 0) {
    $image = $_FILES['petImage'];
    $uploadDir = "uploads/";
    $imageName = basename($image["name"]);
    $targetFile = $uploadDir . time() . "_" . $imageName;
    $imageType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $check = getimagesize($image["tmp_name"]);
    if ($check === false) {
        die("File is not an image.");
    }
    if (!move_uploaded_file($image["tmp_name"], $targetFile)) {
        die("Sorry, there was an error uploading your file.");
    }
    $imagePath = $targetFile;
}
if ($pet_id > 0) {
    // UPDATE existing pet
    if ($imagePath) {
        $stmt = $conn->prepare("UPDATE pets SET p_tittle=?, p_description=?, p_imagename=?, cat_id=?, p_date_of_birth=?, p_status=? WHERE p_id=?");
        $stmt->bind_param("sssissi", $name, $description, $imagePath, $category_id, $dob, $status, $pet_id);
    } else {
        $stmt = $conn->prepare("UPDATE pets SET p_tittle=?, p_description=?, cat_id=?, p_date_of_birth=?, p_status=? WHERE p_id=?");
        $stmt->bind_param("ssissi", $name, $description, $category_id, $dob, $status, $pet_id);
    }
} else {
    // INSERT new pet
    $stmt = $conn->prepare("INSERT INTO pets (p_tittle, p_description, p_imagename, cat_id, p_date_of_birth, p_status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiss", $name, $description, $imagePath, $category_id, $dob, $status);
}
if ($stmt->execute()) {
    echo "<script>
    alert('Pet " . ($pet_id > 0 ? "updated" : "added") . " successfully!');
    window.location.href = './pets.php';
    </script>";
} else {
    echo "Error: " . $stmt->error;
     echo "<script>
    alert('something went wrong!');
    window.location.href = './pets.php';
    </script>";
}
$stmt->close();
$conn->close();
?>
