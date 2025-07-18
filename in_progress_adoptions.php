<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "adoptlove");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT a.a_name, a.a_email, a.a_pn, a.a_petName, a.a_comment, a.a_status, a.a_createdDate 
        FROM adoption a 
        WHERE a.a_status IN ('Pending', 'Processing') 
        ORDER BY a.a_createdDate DESC";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Adoptions In Progress</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./js/dashboard/bootstrap.min.css">
  <script src="./js/dashboard/jquery.min.js"></script>
  <script src="./js/dashboard/bootstrap.min.js"></script>
  <style>
    body {
      background-color: #f0f8ff;
      color: #004080;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 20px;
    }

    h2 {
      color: #007bbd;
      font-weight: 700;
      margin-bottom: 25px;
      border-bottom: 2px solid #007bbd;
      padding-bottom: 8px;
    }

    table {
      width: 100%;
      background-color: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0, 123, 189, 0.12);
    }

    th, td {
      padding: 14px 16px;
      text-align: left;
    }

    th {
      background-color: #007bbd;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f8fc;
    }

    .btn-back {
      margin-top: 20px;
      background-color: #007bbd;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 30px;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-back:hover {
      background-color: #004080;
    }
  </style>
</head>
<body>

<h2>Adoptions In Progress (Pending + Processing)</h2>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Adopter Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Pet Name</th>
      <th>Comment</th>
      <th>Status</th>
      <th>Date Requested</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['a_name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['a_email']) . "</td>";
    echo "<td>" . htmlspecialchars($row['a_pn']) . "</td>";
    echo "<td>" . htmlspecialchars($row['a_petName']) . "</td>";
    echo "<td>" . htmlspecialchars($row['a_comment']) . "</td>";
    echo "<td>" . htmlspecialchars($row['a_status']) . "</td>";
    echo "<td>" . htmlspecialchars($row['a_createdDate']) . "</td>";
    echo "</tr>";
}

    } else {
        echo "<tr><td colspan='7' style='text-align:center;'>No in-progress adoptions found.</td></tr>";
    }
    ?>
  </tbody>
</table>

<a href="dashboard.php" class="btn btn-back">← Back to Dashboard</a>

</body>
</html>
