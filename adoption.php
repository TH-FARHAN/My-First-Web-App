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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>AdoptLove - Adoption Requests</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./js/dashboard/bootstrap.min.css">
  <script src="./js/dashboard/jquery.min.js"></script>
  <script src="./js/dashboard/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
      flex-wrap: wrap;
      gap: 15px;
    }

    .dashboard-header h2 {
      color: #007bbd;
      font-weight: 700;
      font-size: 2.5rem;
      letter-spacing: 1.5px;
      margin: 0;
    }

    .dashboard-card {
      background: #ffffff;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 123, 189, 0.12);
      margin-bottom: 30px;
    }

 .dashboard-card-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  margin-bottom: 25px;
  gap: 10px;
}

.dashboard-card-header h4 {
  font-size: 1.8rem;
  color: #007bbd;
  font-weight: 700;
  margin: 0;
  padding-bottom: 8px;
  border-bottom: 2px solid #007bbd;
  white-space: nowrap;
}

.action-buttons {
  display: flex;
  align-items: center;
  gap: 10px;
}

@media (max-width: 576px) {
  .dashboard-card-header {
    flex-direction: column;
    align-items: flex-start;
  }

  .action-buttons {
    width: 100%;
    justify-content: flex-start;
    flex-wrap: wrap;
  }
}


    .btn-primary {
      background-color: #007bbd;
      border: none;
      padding: 10px 25px;
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

    .btn-icon {
      background-color: #ffffff;
      border: 1px solid #d0e7f9;
      border-radius: 50%;
      width: 42px;
      height: 42px;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      transition: background-color 0.3s ease;
    }

    .btn-icon:hover {
      background-color: #e6f2ff;
    }

    .dropdown-menu {
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
      gap: 20px;
    }

   .adoption-card {
  background: #ffffff;
  border-radius: 15px;
  padding: 20px;
  box-shadow: 0 6px 15px rgba(0, 123, 189, 0.1);
  transition: all 0.3s ease;
}

.adoption-card:hover {
  background-color: #eaf6ff; /* soft light blue background */
  box-shadow: 0 12px 30px rgba(0, 123, 189, 0.25); /* deeper blue shadow */
}
    

  

    .adoption-card h5 {
      color: #007bbd;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .adoption-card p {
      margin: 4px 0;
      font-size: 0.95rem;
    }

    .scroll-top-btn {
      position: fixed;
      bottom: 30px;
      right: 30px;
      padding: 10px 16px;
      font-size: 16px;
      font-weight: 500;
      color: #ffffff;
      background-color: #29b6f6;
      border: none;
      border-radius: 50px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
      cursor: pointer;
      display: none;
      transition: all 0.3s ease-in-out;
      z-index: 999;
    }

    .scroll-top-btn:hover {
      background-color: #0288d1;
      transform: translateY(-3px);
    }

    @media (max-width: 768px) {
      .dashboard-header {
        flex-direction: column;
        align-items: flex-start;
      }

      .dashboard-card-header {
        flex-direction: column;
        align-items: flex-start;
      }

      .dashboard-header h2,
      .dashboard-card-header h4 {
        font-size: 2rem;
      }

      .btn-primary {
        width: 100%;
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
        <h2>Adoption Requests</h2>
      </div>

      <div class="dashboard-card">
    <div class="dashboard-card-header d-flex justify-content-between align-items-center flex-wrap">
  <h4 class="mb-0">All Requests</h4>
  <div class="action-buttons d-flex align-items-center gap-2">
    <a href="download.php?sort=<?= urlencode($_GET['sort'] ?? 'first') ?>" class="btn btn-primary d-flex align-items-center">
  <i class="fas fa-download mr-2"></i> Download
</a>
    <div class="dropdown">
      <button class="btn btn-icon d-flex align-items-center justify-content-center" type="button" id="sortMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-ellipsis-v"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sortMenu">
        <h6 class="dropdown-header text-primary">Sort by</h6>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="?sort=name">🔤 Sort by Name</a>
        <br>
        <a class="dropdown-item" href="?sort=recent">🕒 Recently Requested</a>
        <br>
        <a class="dropdown-item" href="?sort=first">📄 First Requested</a>
      </div>
    </div>
  </div>
</div>

        <div class="card-grid">
          <?php
          $sort = $_GET['sort'] ?? 'first';
          switch ($sort) {
            case 'name': $orderBy = "a_name ASC"; break;
            case 'recent': $orderBy = "a_id DESC"; break;
            case 'first':
            default: $orderBy = "a_id ASC"; break;
          }

          $sql = "SELECT a_id, a_name, a_address, a_pn, a_email, a_petName, a_comment FROM adoption ORDER BY $orderBy";
          $result = $conn->query($sql);
          $serial = 1;

          if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo '<div class="adoption-card">';
              echo '<h5>' . $serial++ . ' - ' . htmlspecialchars($row['a_name']) . '</h5>';
              echo '<p><strong>📍 Address:</strong> ' . htmlspecialchars($row['a_address']) . '</p>';
              echo '<p><strong>📞 Phone:</strong> ' . htmlspecialchars($row['a_pn']) . '</p>';
              echo '<p><strong>📧 Email:</strong> ' . htmlspecialchars($row['a_email']) . '</p>';
              echo '<p><strong>🐾 Pet Name:</strong> ' . htmlspecialchars($row['a_petName']) . '</p>';
              echo '<p><strong>💬 Comment:</strong> ' . htmlspecialchars($row['a_comment']) . '</p>';
              echo '</div>';
            }
          } else {
            echo "<p>No adoption requests found.</p>";
          }
          $conn->close();
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Scroll to Top Button -->
<button onclick="scrollToTop()" id="scrollBtn" class="scroll-top-btn" title="Back to Top">
  <i class="fas fa-arrow-up"></i>
</button>

<script>
  window.onscroll = function () {
    const scrollBtn = document.getElementById("scrollBtn");
    scrollBtn.style.display = (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200)
      ? "block" : "none";
  };

  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
  }
</script>

</body>
</html>