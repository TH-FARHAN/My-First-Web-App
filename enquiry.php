<?php
$conn = new mysqli("localhost", "root", "", "adoptlove");
if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'DB connection failed']));
}
$name = $_POST['name'];
$address = $_POST['address'];
$pn = $_POST['pn'];
$email = $_POST['email'];
$petname = $_POST['petname'];
$comment = $_POST['comment'];
$petid = $_POST['petid'];
$status=1;
$user='USER';
$sql = "INSERT INTO adoption (a_name, a_address, a_pn, a_email,pet_id, a_petName, 
    a_comment, a_status, a_createdBy, a_updatedBy) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?);";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssiss", $name, $address, $pn, $email,$petid, $petname, $comment, $status, $user, $user);
if ($stmt->execute()) {
    echo "<script>
    alert('Adoption saved successfully!');
    window.location.href = './service.php';
    </script>";
} else {
     echo "<script>
    alert('Adoption saved failed!');
    window.location.href = './service.php';
    </script>";
}
$stmt->close();
$conn->close();
