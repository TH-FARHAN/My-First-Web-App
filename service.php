<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<button onclick="scrollToTop()" id="scrollBtn" class="scroll-top-btn" title="Back to Top">
  <i class="fas fa-arrow-up"></i>
</button>
<style>
.scroll-top-btn {
  position: fixed;
  bottom: 30px;
  right: 30px;
  padding: 10px 16px;
  font-size: 16px;
  font-weight: 500;
  color: #ffffff;
  background-color: #4caf50;
  border: none;
  border-radius: 50px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
  cursor: pointer;
  display: none;
  transition: all 0.3s ease-in-out;
  z-index: 999;
}
.scroll-top-btn:hover {
  background-color: #388e3c;
  transform: translateY(-3px);
}
.scroll-top-btn:active {
  transform: scale(0.95);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
.card {
  height: 450px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  cursor: pointer;
}
.card-img-top {
  height: 220px;
  object-fit: cover;
  width: 100%;
}
.card-body {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%;
}
.card-title {
  font-size: 1.25rem;
  font-weight: bold;
  margin-bottom: 0.5rem;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.card-text-short {
  font-size: 0.95rem;
  color: #555;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.card-text-full {
  display: none;
  font-size: 0.95rem;
  color: #555;
  margin-top: 0.5rem;
}
.more-btn {
  background: none;
  border: none;
  color: #388e3c;
  font-size: 0.9rem;
  padding: 0;
  margin-top: 5px;
  cursor: pointer;
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
  background-color: #f9f9f9;
  transition: all 0.3s ease-in-out;
  box-shadow: 0 2px 8px rgba(0, 123, 255, 0.1);
}
.search-input:focus {
  outline: none;
  border-color: #4caf50;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(76, 175, 80, 0.3);
}
.search-btn {
  background-color: #4caf50;
  color: #fff;
  padding: 12px 25px;
  border: none;
  border-radius: 30px;
  font-size: 16px;
  font-weight: 500;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out, transform 0.2s ease;
  box-shadow: 0 2px 6px rgba(76, 175, 80, 0.4);
}
.search-btn:hover {
  background-color: #388e3c;
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
.modal-body.bg-image {
  background-image: url('./images/modal.jpg');
  background-size: cover;
  background-position: center;
  position: relative;
  padding: 0;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}
.modal-overlay {
  background-color: rgba(255, 255, 255, 0);
  padding: 20px;
  border-radius: 10px;
  position: relative;
  z-index: 2;
}
.modal-content.custom-modal {
  border-radius: 12px;
  overflow: hidden;
  background-color: transparent;
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
}
.modal-header {
  background-color: #dcdcdc;
  color: #4caf50;
  border-bottom: 3px solid #4caf50;
}
.modal-footer {
  background-color: #f0f0f0;
  border-top: 3px solid #4caf50;
}
.form-control {
  border-radius: 6px;
  border: 1px solid #ced4da;
  transition: all 0.3s ease-in-out;
}
.form-control:focus {
  border-color: #4caf50;
  box-shadow: 0px 0px 10px rgba(76, 175, 80, 0.5);
}
.modal-header h5,
.modal-header h4,
.modal-header h3 {
  color: #4caf50 !important;
}
.modal-content.custom-modal label,
.modal-content.custom-modal p,
.modal-content.custom-modal h6,
.modal-content.custom-modal span {
  color: #ffffff !important;
}
.form-control {
  color: #ffffff;
  background-color: rgba(255, 255, 255, 0.05); /* optional translucent bg */
}
.form-control::placeholder {
  color: #cccccc;
  opacity: 1;
}
.btn-primary {
  background-color: #4caf50;
  border: none;
  padding: 10px 20px;
  border-radius: 6px;
  transition: 0.3s;
}
.btn-primary:hover {
  background-color: #388e3c;
}
.btn-success {
  background-color: #4caf50;
  border: none;
  padding: 10px 20px;
  border-radius: 6px;
  transition: 0.3s;
}
.btn-success:hover {
  background-color: #388e3c;
}
.paw-icon {
  color: white;
}
.close {
  color: white;
  font-size: 24px;
  transition: 0.3s ease-in-out;
}
.close:hover {
  color: #4caf50 !important;
  background-color: rgba(255, 255, 255, 0.2) !important;
  border-radius: 50%;
  padding: 5px;
}
.success-box, .error-box {
  position: relative;
  padding: 16px 20px 16px 56px;
  margin: 20px auto;
  border-radius: 12px;
  width: 90%;
  max-width: 600px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 16px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  transition: all 1s ease;
  opacity: 1;
  transform: translateY(0);
  z-index: 1000;
}
.success-box {
  background-color: #e8f5e9;
  color: #2e7d32;
  border-left: 6px solid #4caf50;
}
.error-box {
  background-color: #fdecea;
  color: #842029;
  border-left: 6px solid #e74c3c;
}
.success-box::before,
.error-box::before {
  content: '✔️';
  position: absolute;
  left: 20px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 20px;
}
.error-box::before {
  content: '❌';
}
.fade-slide-up {
  opacity: 0;
  transform: translateY(-30px);
}
.g-recaptcha {
  display: inline-block;
  transform: scale(1.05);
  transition: box-shadow 0.3s ease-in-out;
  border-radius: 8px;
  padding: 5px;
}
.modal-content.error-highlight {
  border: 2px solid #ff4d4d !important;
  box-shadow: 0 0 12px rgba(255, 77, 77, 0.6);
  background-color: #fff5f5;
  animation: shake 0.3s ease-in-out;
}
@keyframes shake {
  0% { transform: translateX(0); }
  25% { transform: translateX(-4px); }
  50% { transform: translateX(4px); }
  75% { transform: translateX(-4px); }
  100% { transform: translateX(0); }
}
.service_container .container {
  background-color: #e8f5e9;
  border-radius: 12px;
  padding: 20px 25px;
  margin-bottom: 30px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}
.connection-popup {
  position: fixed;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  background-color: #ffcdd2; /* default: red tone */
  color: #b71c1c;
  padding: 10px 20px;
  border-radius: 20px;
  font-weight: 600;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
  display: none;
  transition: all 0.3s ease-in-out;
  z-index: 10000;
}
.connection-popup.online {
  background-color: #c8e6c9;
  color: #1b5e20;
}
</style>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>AdoptLove | Pets</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>
  <?php if (isset($_GET['success'])): ?>
<div id="adoptionAlert" class="<?= $_GET['success'] == 1 ? 'success-box' : 'error-box' ?>">
  <?= $_GET['success'] == 1
    ? 'Adoption request submitted successfully!'
    : 'Failed to submit request. Please check your internet connection and try again.' ?>
</div>
  <script>
    setTimeout(function () {
      var alert = document.getElementById("adoptionAlert");
      if (alert) {
        alert.classList.add("fade-slide-up");
        setTimeout(() => alert.remove(), 1000);
      }
    }, 5000);
  </script>
<?php endif; ?>
</body>
<body class="sub_page">
  <div class="hero_area">
    <?php include 'navbar.php'; ?>
  </div>
  <div class="container">
    <form method="GET" class="search-form" onsubmit="return false;">
      <input type="text" name="search" id="searchInput" class="search-input" placeholder="Search pets by name or category..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
      <button type="submit" class="search-btn">Search</button>
    </form>
  </div>
  <script>
    document.getElementById("searchInput").addEventListener("input", function() {
      const query = this.value;
      const xhr = new XMLHttpRequest();
      xhr.open("GET", "search_pets.php?search=" + encodeURIComponent(query), true);
      xhr.onload = function() {
        if (xhr.status === 200) {
          document.getElementById("petResults").innerHTML = xhr.responseText;
        }
      };
      xhr.send();
    });
  </script>
  <section class="service_section layout_padding">
<?php
$conn = new mysqli("localhost", "root", "", "adoptlove");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
$sql = "SELECT p.p_id, p.p_tittle, p.p_description, p.p_imagename, c.cat_name
        FROM pets p
        JOIN category c ON p.cat_id = c.cat_id
        WHERE p.p_status = 1";
if (!empty($search)) {
    $sql .= " AND (p.p_tittle LIKE '%$search%' OR c.cat_name LIKE '%$search%')";
}
$sql .= " ORDER BY c.cat_name, p.p_tittle";
$result = $conn->query($sql);
$groupedPets = [];
if ($result && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $groupedPets[$row['cat_name']][] = $row;
  }
} else {
  echo "<div class='container text-center mt-4'><p>No pets found matching your search.</p></div>";
}
?>
<div id="petResults">
<?php foreach ($groupedPets as $category => $pets): ?>
  <div class="service_container" style="background-color: #e8f5e9; border-radius: 12px; padding: 20px;">
  <div class="heading_container" style="color: #4caf50;">
    <h2 style="color: #4caf50;"><?php echo htmlspecialchars($category); ?></h2>
    <p style="color: #2e7d32;">These are lovely <?php echo strtolower($category); ?> available for adoption or viewing.</p>
  </div>
  <div class="row row-cols-1 row-cols-md-2 col-md-12">
    <?php foreach ($pets as $pet): ?>
      <div class="col mb-4 col-md-4">
        <div class="card" onclick="loadAdoptionModal(<?php echo htmlspecialchars($pet['p_id']); ?>,'<?php echo htmlspecialchars($pet['p_tittle']); ?>')" style="cursor: pointer; border: 1px solid #4caf50;">
          <img src="<?php echo htmlspecialchars($pet['p_imagename']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($pet['p_tittle']); ?>">
          <div class="card-body" style="background-color: #f1f8e9;">
            <h5 class="card-title" style="color: #388e3c;"><?php echo htmlspecialchars($pet['p_tittle']); ?></h5>
            <p class="card-text" style="color: #2e7d32;"><?php echo htmlspecialchars($pet['p_description']); ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
  </div>
  <hr/>
<?php endforeach; ?>
</div> <!-- end of petResults div -->
<button onclick="scrollToTop()" id="scrollBtn" class="scroll-top-btn" title="Back to Top">
  ↑
</button>
</section>
 <?php include 'info_us.php'; ?>
 <?php include 'footer.php'; ?>
<script>
  document.getElementById("displayYear").textContent = new Date().getFullYear();
</script>
<div class="modal fade" id="adoptionModal" tabindex="-1" role="dialog" aria-labelledby="adoptionModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <form method="POST" action="submit_adoption.php" class="modal-content custom-modal border-0" id="adoptionForm">      
      <div class="modal-header">
        <h5 class="modal-title" id="adoptionModalLabel">🐾 Adopting Request Form</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body bg-image">
        <div class="modal-overlay">
          <input type="hidden" name="pet_id" id="petIdInput" required>
          <div class="form-group">
            <label for="a_name"><strong>Full Name</strong></label>
            <input type="text" name="a_name" id="a_name" class="form-control" placeholder="Your full name" required>
          </div>
          <div class="form-group">
            <label for="a_pn"><strong>Phone Number</strong></label>
            <input type="tel" name="a_pn" id="a_pn" class="form-control" placeholder="Your contact number" required>
          </div>
          <div class="form-group">
            <label for="a_email"><strong>Email Address</strong></label>
            <input type="email" name="a_email" id="a_email" class="form-control" placeholder="yourname@example.com" required>
          </div>
          <div class="form-group">
            <label for="a_address"><strong>Address</strong></label>
            <textarea name="a_address" id="a_address" class="form-control" rows="3" placeholder="Your full address" required></textarea>
          </div>
          <div class="form-group">
            <label for="a_petName"><strong>Pet Name</strong></label>
            <input type="text" name="a_petName" id="petNameInput" class="form-control bg-light" readonly required>
          </div>
          <div class="form-group">
            <label for="a_comment"><strong>Additional Comments</strong></label>
            <textarea name="a_comment" id="a_comment" class="form-control" rows="2" placeholder="Any special requests?" required></textarea>
          </div>
          <div class="form-group text-center">
            <div class="g-recaptcha" data-sitekey="6LeYWlkrAAAAAOHjeKBsw1OWr7idURwekyt784ps"></div>
            <small id="captchaMessage" class="text-danger d-block mt-2" style="display: none;"></small>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <small class="text-muted">📞 We will contact you after submission.</small>
        <button type="submit" class="btn btn-success">Submit Adoption Request</button>
      </div>
    </form>
  </div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
  <script src="js/custom.js"></script>
  <scrip src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
<div id="connectionStatus" class="connection-popup"></div>
<script>
  function showConnectionStatus(message, isOnline) {
    const statusBox = document.getElementById('connectionStatus');
    statusBox.className = 'connection-popup' + (isOnline ? ' online' : '');
    statusBox.textContent = message;
    statusBox.style.display = 'block';
    setTimeout(() => {
      statusBox.style.display = 'none';
    }, 3000);
  }
  window.addEventListener('online', () => {
    showConnectionStatus('✅ You are online', true);
  });
  window.addEventListener('offline', () => {
    showConnectionStatus('⚠️ You are offline', false);
  });
  if (!navigator.onLine) {
    showConnectionStatus('⚠️ You are offline', false);
  }
   function loadAdoptionModal(petId, petTitle) {
    $('#petIdInput').val(petId);
    $('#petNameInput').val(petTitle);
    $('#adoptionModal').modal('show');
  }
 document.getElementById("adoptionForm").addEventListener("submit", function (e) {
    const captchaResponse = grecaptcha.getResponse();
    const modal = this.closest(".modal-content");
    const captchaMsg = document.getElementById("captchaMessage");
    if (!captchaResponse) {
      e.preventDefault();
      modal.classList.add("error-highlight");
      captchaMsg.style.display = "block"; // Show the inline message
      setTimeout(() => {
        modal.classList.remove("error-highlight");
      }, 2000);
    } else {
      captchaMsg.style.display = "none"; // Hide message when verified
    }
  });
document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.querySelector('.search-input');
  searchInput.addEventListener('input', function () {
    const query = this.value;
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "search_pets.php?search=" + encodeURIComponent(query), true);
    xhr.onload = function () {
      if (xhr.status === 200) {
        document.getElementById('petResults').innerHTML = xhr.responseText;
      }
    };
    xhr.send();
  });
});
 window.onscroll = function() { toggleScrollButton(); };
  function toggleScrollButton() {
    let scrollBtn = document.getElementById("scrollBtn");
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      scrollBtn.style.display = "block";
    } else {
      scrollBtn.style.display = "none";
    }
  }
  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
  }
</script>
</body>
</html>