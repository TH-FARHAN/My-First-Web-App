<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<button onclick="scrollToTop()" id="scrollBtn" class="scroll-top-btn" title="Back to Top">
  <i class="fas fa-arrow-up"></i>
</button>
  <link rel="stylesheet" href="styles.css">
  <title>AdoptLove | Pets </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./js/dashboard/bootstrap.min.css">
  <script src="./js/dashboard/jquery.min.js"></script>
  <script src="./js/dashboard/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
 <style>
  body {
    background-color: #ffffff; /* white */
    color: #004d00; /* dark green text */
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
  }
  .container-fluid {
    padding-top: 30px;
  }
  .well {
    background: white;
    border-radius: 15px;
    padding: 15px 25px;
    box-shadow: 0 8px 20px rgba(0, 128, 0, 0.12);
    display: flex !important;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
  }
  .well h4 {
    color: #008000;
    font-weight: 700;
    font-size: 1.8rem;
    margin: 0;
    letter-spacing: 1.2px;
  }
  .btn-success {
    background-color: #28a745;
    border: none;
    padding: 12px 28px;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 50px;
    box-shadow: 0 6px 15px rgba(40, 167, 69, 0.3);
    transition: background-color 0.3s ease;
    cursor: pointer;
  }
  .btn-success:hover, .btn-success:focus {
    background-color: #1c7430;
    box-shadow: 0 8px 25px rgba(28, 116, 48, 0.5);
    outline: none;
  }
  table.table {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 128, 0, 0.12);
    border-collapse: separate !important;
    border-spacing: 0 10px;
    width: 100%;
  }
  table.table thead tr {
    background-color: #f8f8f8;
    color: #004d00;
    font-weight: 700;
    font-size: 1.1rem;
    letter-spacing: 1px;
    text-align: left;
    border-bottom: none !important;
  }
  table.table thead th {
    padding: 14px 20px;
    border: none !important;
  }
  table.table tbody tr {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 128, 0, 0.07);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  table.table tbody tr:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 128, 0, 0.15);
  }
  table.table tbody td {
    padding: 15px 20px;
    vertical-align: middle;
    color: #004d00;
    font-weight: 600;
    border: none !important;
  }
  table.table tbody td:nth-child(4) {
    max-width: 100px;
  }
  table.table tbody td:nth-child(4) img {
    max-width: 80px;
    border-radius: 10px;
    object-fit: cover;
  }
  .modal-content {
    border-radius: 20px;
    box-shadow: 0 14px 40px rgba(0, 128, 0, 0.2);
    padding: 20px 25px;
    background-color: white;
    color: #004d00;
  }
  .modal-header {
    border-bottom: 2px solid #28a745;
    padding-bottom: 10px;
  }
  .modal-header h4 {
    font-weight: 700;
    color: #28a745;
  }
  .modal-body .form-group label {
    font-weight: 600;
    color: #28a745;
  }
  .modal-body .form-control {
    border-radius: 12px;
    border: 2px solid #28a745;
    padding: 10px 15px;
    font-size: 1rem;
    color: #004d00;
    transition: border-color 0.3s ease;
  }
  .modal-body .form-control:focus {
    border-color: #1c7430;
    box-shadow: 0 0 8px rgba(28, 116, 48, 0.3);
    outline: none;
  }
  .modal-footer {
    border-top: 2px solid #28a745;
    padding-top: 15px;
    display: flex;
    justify-content: flex-end;
    gap: 12px;
  }
  .modal-footer .btn-primary {
    background-color: #28a745;
    border: none;
    border-radius: 50px;
    padding: 10px 28px;
    font-weight: 700;
    box-shadow: 0 6px 15px rgba(40, 167, 69, 0.3);
    transition: background-color 0.3s ease;
  }
  .modal-footer .btn-primary:hover {
    background-color: #1c7430;
    box-shadow: 0 8px 25px rgba(28, 116, 48, 0.5);
  }
  .modal-footer .btn-secondary {
    background-color: #ffffff;
    color: #28a745;
    border-radius: 50px;
    padding: 10px 28px;
    font-weight: 600;
    border: 2px solid #28a745;
    transition: background-color 0.3s ease, color 0.3s ease;
  }
  .modal-footer .btn-secondary:hover {
    background-color: #28a745;
    color: white;
  }
  select.form-control,
  input.form-control,
  textarea.form-control {
    padding: 0.5rem 1rem;
    font-size: 16px;
    line-height: 1.5;
    height: auto;
    box-sizing: border-box;
  }
  @media (max-width: 768px) {
    body {
      padding: 15px 20px;
    }
    .well {
      flex-direction: column !important;
      align-items: flex-start !important;
      gap: 10px;
    }
    .btn-success {
      width: 100%;
      padding: 14px;
    }
    table.table thead th,
    table.table tbody td {
      padding: 12px 10px;
    }
    table.table tbody td:nth-child(4) img {
      max-width: 50px;
    }
  }
  .scroll-top-btn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    padding: 10px 16px;
    font-size: 16px;
    font-weight: 500;
    color: #ffffff;
    background-color: #43a047;
    border: none;
    border-radius: 50px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    cursor: pointer;
    display: none;
    transition: all 0.3s ease-in-out;
    z-index: 999;
  }
  .scroll-top-btn:hover {
    background-color: #2e7d32;
    transform: translateY(-3px);
  }
  .scroll-top-btn:active {
    transform: scale(0.95);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }
  .search-form {
    margin: 40px auto 30px auto;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
  }
  .search-input {
    padding: 12px 20px;
    width: 100%;
    max-width: 400px;
    border: 1px solid #ccc;
    border-radius: 30px;
    font-size: 16px;
    background-color: #ffffff;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 2px 8px rgba(40, 167, 69, 0.1);
  }
  .search-input:focus {
    outline: none;
    border-color: #28a745;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(40, 167, 69, 0.3);
  }
  .search-btn {
    background-color: #28a745;
    color: #fff;
    padding: 12px 25px;
    border: none;
    border-radius: 30px;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out, transform 0.2s ease;
    box-shadow: 0 2px 6px rgba(40, 167, 69, 0.4);
  }
  .search-btn:hover {
    background-color: #1c7430;
    transform: scale(1.05);
  }
  @media (max-width: 500px) {
    .search-input {
      width: 90%;
    }

    .search-btn {
      width: 100%;
    }
  }
</style>
</head>
<body>
<?php if (isset($_GET['msg'])): ?>
  <?php
    $isSuccess = isset($_GET['success']) && $_GET['success'] == "1";
    $color = $isSuccess ? "#4caf50" : "#f44336"; // green = success, red = error
  ?>
  <div id="customAlert" style="
    position: fixed;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background-color: <?= $color ?>;
    color: white;
    padding: 14px 20px;
    border-radius: 6px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    z-index: 9999;
    font-family: sans-serif;
    font-size: 15px;
    transition: opacity 0.3s ease;
  ">
    <?= htmlspecialchars($_GET['msg']) ?>
  </div>
  <script>
    setTimeout(() => {
      const box = document.getElementById("customAlert");
      if (box) {
        box.style.opacity = "0";
        setTimeout(() => box.remove(), 500);
      }
    }, 3000);
  </script>
<?php endif; ?>
<?php include 'headermobile.php'; ?>
<div class="container-fluid">
  <div class="row content">
    <?php include 'header.php'; ?>
    <br>
    <div class="col-sm-9">
      <div class="well" style="display: flex; justify-content: space-between; align-items: center;">
        <h4 style="margin: 0;">Adopt Love</h4>
        <button class="btn btn-success" data-toggle="modal" data-target="#myModal" onclick="clearPetForm()">Add</button>
      </div>
  <div class="search-form">
  <input type="text" id="searchInput" class="search-input" placeholder="🔍 Search by pet name or category...">
  <button class="search-btn" type="button">Search</button>
</div>
     <div class="row">
        <div class="col-md-12">
          <div id="petTableContainer">
            <?php
              $conn = new mysqli("localhost", "root", "", "adoptlove");
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }
              $search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
              $sql = "SELECT p.p_id, p.p_tittle, p.p_description, p.p_imagename, c.cat_name, p.p_date_of_birth, p.p_status
                      FROM pets p
                      JOIN category c ON p.cat_id = c.cat_id";
              if (!empty($search)) {
                  $sql .= " WHERE p.p_tittle LIKE '%$search%' OR c.cat_name LIKE '%$search%'";
              }
              $sql .= " ORDER BY p.p_id ASC";
              $result = $conn->query($sql);
            ?>
            <table class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Name</th>
                  <th>Descripton</th>
                  <th>Image</th>
                  <th>Catagory</th>
                  <th>DOB</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                  <tr>
                    <td><?php echo $row['p_id']; ?></td>
                    <td><?php echo $row['p_tittle']; ?></td>
                    <td><?php echo $row['p_description']; ?></td>
                    <td><img src="./<?php echo htmlspecialchars($row['p_imagename']); ?>" alt="<?php echo htmlspecialchars($row['p_tittle']); ?>" style="max-width: 80px; border-radius: 10px;"></td>
                    <td><?php echo $row['cat_name']; ?></td>
                    <td><?php echo $row['p_date_of_birth']; ?></td>
                    <td><?php echo $row['p_status'] == 1 ? "active" : "inactive"; ?></td>
                    <td>
                      <button class="btn btn-success" onclick="loadPetDetails(<?php echo $row['p_id']; ?>)" data-toggle="modal" data-target="#myModal">Update</button>
                    </td>
                  </tr>
                <?php
                    }
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'pet_modal.php'; ?>
<button onclick="scrollToTop()" id="scrollBtn" class="scroll-top-btn" title="Back to Top">↑</button>
<script>
function clearPetForm() {
    document.getElementById('pet_id').value = 0;
    document.getElementById('name').value = '';
    document.getElementById('description').value = '';
    document.getElementById('petImage').value = '';
    document.getElementById('petType').selectedIndex = 0;
    document.getElementById('dob').value = '';
    document.getElementById('status').value = '1'; // default to active
}
document.getElementById("searchInput").addEventListener("input", function () {
    const query = this.value;
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "pets.php?search=" + encodeURIComponent(query), true);
    xhr.onload = function () {
      if (xhr.status === 200) {
        const parser = new DOMParser();
        const doc = parser.parseFromString(xhr.responseText, "text/html");
        const newTable = doc.querySelector("#petTableContainer").innerHTML;
        document.getElementById("petTableContainer").innerHTML = newTable;
      }
    };
    xhr.send();
  });
   function loadPetDetails(id) {
    $.ajax({
      url: 'get_pet_details.php',
      type: 'POST',
      data: { pet_id: id },
      dataType: 'json',
      success: function(data) {
        if (data.success) {
          $('#pet_id').val(data.pet.p_id);
          $('#name').val(data.pet.p_tittle);
          $('#description').val(data.pet.p_description);
          $('#petType').val(data.pet.cat_id);
          $('#dob').val(data.pet.p_date_of_birth);
          $('#status').val(data.pet.p_status);
        } else {
          alert('Pet not found');
        }
      },
      error: function() {
        alert('An error occurred');
      }
    });
  }
    flatpickr("#dob", { dateFormat: "Y-m-d" });
 window.onscroll = function () {
    let scrollBtn = document.getElementById("scrollBtn");
    scrollBtn.style.display = (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) ? "block" : "none";
  };
  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
  }

</script>
</body>
</html>