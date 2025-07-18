<?php
$conn = new mysqli("localhost", "root", "", "adoptlove");

if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'DB connection failed']));
}

$pet_id = intval($_POST['pet_id']);

$sql = "SELECT p.p_id, p.p_tittle, p.p_description, p.cat_id, p.p_date_of_birth, p.p_status
        FROM pets p WHERE p.p_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $pet_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $pet = $result->fetch_assoc();
    echo json_encode(['success' => true, 'pet' => $pet]);
} else {
    echo json_encode(['success' => false]);
}

$stmt->close();
$conn->close();
?>
