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

// Fetch statistics
$totalAdoptions = $conn->query("SELECT COUNT(*) AS total FROM adoption")->fetch_assoc()['total'];
$availablePets = $conn->query("SELECT COUNT(*) AS available FROM pets WHERE p_status = 1")->fetch_assoc()['available'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>AdoptLove - Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./js/dashboard/bootstrap.min.css">
  <script src="./js/dashboard/jquery.min.js"></script>
  <script src="./js/dashboard/bootstrap.min.js"></script>
  <style>
    body {
      background-color: #f0f8ff;
      color: #004080;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
    }

    .container-fluid {
      padding-top: 30px;
    }

    .row.content {
      min-height: 80vh;
    }

    .dashboard-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }

    .dashboard-header h2 {
      color: #007bbd;
      font-weight: 700;
      font-size: 2.5rem;
      letter-spacing: 1.5px;
      margin: 0;
    }

    .btn-primary {
      background-color: #007bbd;
      border: none;
      padding: 12px 30px;
      font-size: 1rem;
      border-radius: 50px;
      font-weight: 600;
      box-shadow: 0 6px 15px rgba(0, 123, 189, 0.3);
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover,
    .btn-primary:focus {
      background-color: #004080;
      box-shadow: 0 8px 25px rgba(0, 64, 128, 0.5);
    }

    .row > .col-sm-6 {
      margin-bottom: 25px;
    }

    .stat-link {
      text-decoration: none;
      color: inherit;
    }

    .stat-box {
      background: #ffffff;
      border-left: 6px solid #007bbd;
      padding: 25px 20px 25px 25px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 123, 189, 0.12);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .stat-box:hover {
      transform: translateY(-8px);
      box-shadow: 0 14px 35px rgba(0, 123, 189, 0.25);
    }

    .stat-box h4 {
      font-size: 2.5rem;
      margin: 0;
      color: #004080;
      font-weight: 700;
      letter-spacing: 2px;
      text-align: center;
      user-select: none;
    }

    .stat-box p {
      margin-top: 10px;
      font-size: 1.2rem;
      font-weight: 600;
      text-align: center;
      color: #007bbd;
      user-select: none;
    }

    .dashboard-card {
      background: #ffffff;
      padding: 30px 30px 35px 30px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 123, 189, 0.12);
      margin-top: 40px;
      color: #004080;
      font-weight: 600;
    }

    .dashboard-card h4 {
      margin-bottom: 20px;
      font-size: 1.8rem;
      color: #007bbd;
      font-weight: 700;
      border-bottom: 2px solid #007bbd;
      padding-bottom: 8px;
    }

    .dashboard-card ul {
      list-style-type: none;
      padding-left: 0;
      font-size: 1.1rem;
      line-height: 1.6;
      color: #004080;
    }

    .dashboard-card ul li {
      padding: 10px 0;
      border-bottom: 1px solid #e0e7f1;
    }

    .dashboard-card ul li:last-child {
      border-bottom: none;
    }

    .dashboard-card ul li strong {
      color: #007bbd;
    }

    @media (max-width: 768px) {
      .dashboard-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
      }

      .dashboard-header h2 {
        font-size: 2rem;
      }

      .btn-primary {
        width: 100%;
        padding: 14px;
      }

      .row > .col-sm-6 {
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<body>
<?php include 'headermobile.php'; ?>

<div class="container-fluid">
  <div class="row content">
    <?php include 'header.php'; ?>
    <div class="col-sm-9">
      <div class="dashboard-header">
        <h2>Dashboard</h2>
      </div>

      <div class="row">
        <!-- Total Pets -->
        <div class="col-sm-6">
          <div class="stat-box" onclick="location.href='pets.php';" style="cursor:pointer;">
            <h4><?php echo $availablePets; ?></h4>
            <p>Available for Adoption</p>
          </div>
        </div>

        <!-- Requests for Adoption -->
        <div class="col-sm-6">
          <div class="stat-box" onclick="location.href='adoption.php';" style="cursor:pointer;">
            <h4><?php echo $totalAdoptions; ?></h4>
            <p>Adoption requests</p>
          </div>
        </div>
      </div>

     <div class="row">
  <!-- Recently Added Pets -->
  <div class="col-md-6">
    <div class="dashboard-card">
      <h4>Recently Added Pets</h4>
      <ul>
        <?php
        $recentPets = $conn->query("SELECT p_tittle, p_date_of_birth FROM pets ORDER BY p_id DESC LIMIT 5");
        while ($pet = $recentPets->fetch_assoc()) {
          echo "<li><strong>{$pet['p_tittle']}</strong> – DOB: {$pet['p_date_of_birth']}</li>";
        }
        ?>
      </ul>
    </div>
  </div>

  <!-- Recently Adopters -->
  <div class="col-md-6">
    <div class="dashboard-card">
      <h4>Recently Adopter's Requests</h4>
      <ul>
        <?php
        $recentAdopters = $conn->query("SELECT a_name, a_pn, a_petName FROM adoption ORDER BY a_id DESC LIMIT 5");
        if ($recentAdopters && $recentAdopters->num_rows > 0) {
          while ($adopter = $recentAdopters->fetch_assoc()) {
            echo "<li><strong>{$adopter['a_name']}</strong> (P No. {$adopter['a_pn']}), pet <strong>{$adopter['a_petName']}</strong></li>";
          }
        } else {
          echo "<li>No recent adoption records found.</li>";
        }
        ?>
      </ul>
    </div>
  </div>
</div>


    </div>
  </div>
</div>
</body>
</html>
