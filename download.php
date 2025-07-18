<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "adoptlove");
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Handle sorting
$sort = $_GET['sort'] ?? 'first';
switch ($sort) {
    case 'name':
        $orderBy = "a_name ASC";
        break;
    case 'recent':
        $orderBy = "a_id DESC";
        break;
    case 'first':
    default:
        $orderBy = "a_id ASC";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>AdoptLove</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./js/dashboard/bootstrap.min.css">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
      color: #333;
    }

    .container {
      margin: 40px auto;
      max-width: 900px;
      padding: 20px;
      background: #ffffff;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      border-radius: 8px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #0277bd;
    }

    .table {
      width: 100%;
      border-collapse: collapse;
      background: #ffffff;
    }

    .table th, .table td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: center;
    }

    .table th {
      background-color: #0277bd;
      color: #fff;
      font-weight: bold;
    }

    .table tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table tr:hover {
      background-color: #d0e9ff;
    }

    @media print {
      body {
        background: none;
        color: black;
      }
      .container {
        box-shadow: none;
        border: none;
      }
      .table th {
        background: #ddd;
        color: black;
      }
      .d-print-none {
        display: none !important;
      }
    }

    .custom-btn {
      background-color: #add8e6;
      color: #000;
      border: 1px solid #90c8dd;
      padding: 10px 20px;
      font-weight: 500;
      border-radius: 6px;
      transition: background-color 0.3s ease;
    }

    .custom-btn:hover {
      background-color: #90c8dd;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Adoption Requests</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Serial No</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Pet Name</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT a_name, a_address, a_pn, a_email, a_petName FROM adoption ORDER BY $orderBy";
      $result = $conn->query($sql);
      $serial = 1;

      if ($result && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "<tr>
                      <td>{$serial}</td>
                      <td>" . htmlspecialchars($row['a_name']) . "</td>
                      <td>" . htmlspecialchars($row['a_address']) . "</td>
                      <td>" . htmlspecialchars($row['a_pn']) . "</td>
                      <td>" . htmlspecialchars($row['a_email']) . "</td>
                      <td>" . htmlspecialchars($row['a_petName']) . "</td>
                    </tr>";
              $serial++;
          }
      } else {
          echo "<tr><td colspan='6'>No adoption requests found.</td></tr>";
      }

      $conn->close();
      ?>
    </tbody>
  </table>

 
</div>

<script>
  window.onload = function () {
    // Open print dialog
    window.print();

    // Redirect to adoption.php after a short delay (whether printed or canceled)
    setTimeout(() => {
      window.location.replace("adoption.php");
    }, 100);
  };
</script>


</body>
</html>