<!DOCTYPE html>
<html>
<head>
<!-- Add this in <head> if not already included -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<!-- Then update the button -->
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
.scroll-top-btn:active {
  transform: scale(0.95);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
.card {
  height: 450px; /* Increase card height */
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  cursor: pointer;
}
.card-img-top {
  height: 220px; /* Larger image */
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
  color: #007bff;
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
    border-color: #0dcaf0;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(13, 202, 240, 0.3);
  }
  .search-btn {
    background-color: #0dcaf0;
    color: #fff;
    padding: 12px 25px;
    border: none;
    border-radius: 30px;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out, transform 0.2s ease;
    box-shadow: 0 2px 6px rgba(13, 202, 240, 0.4);
  }
  .search-btn:hover {
    background-color: #0bb5d4;
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
  padding: 0; /* Remove default padding so overlay fits */
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}
.modal-overlay {
  background-color: rgba(255, 255, 255, 0.85);
  padding: 20px;
  border-radius: 10px;
  position: relative;
  z-index: 2;
}
.modal-content.custom-modal {
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
}
.modal-header {
  background-color: #dcdcdc;
  color: #72a3d7;
  border-bottom: 3px solid #72a3d7;
}
.modal-footer {
  background-color: #f0f0f0;
  border-top: 3px solid #72a3d7;
}
/* Smooth input focus effect */
.form-control {
    border-radius: 6px;
    border: 1px solid #ced4da;
    transition: all 0.3s ease-in-out;
}
.form-control:focus {
    border-color: rgb(114, 163, 215);
    box-shadow: 0px 0px 10px rgba(114, 163, 215, 0.5);
}
/* Soft blue button styles */
.btn-primary {
    background-color: rgb(173, 216, 230); /* Light blue */
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    transition: 0.3s;
}
.btn-primary:hover {
    background-color: rgb(135, 206, 250); /* Slightly darker light blue */
}
/* Green success button (unchanged) */
.btn-success {
    background-color: rgb(135, 206, 250);
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    transition: 0.3s;
}
.btn-success:hover {
    background-color:rgb(135, 206, 250);
}
/* White paw emoji */
.paw-icon {
    color: white; 
}
.close {
    color: white;
    font-size: 24px;
    transition: 0.3s ease-in-out;
}
.close:hover {
    color: rgb(173, 216, 230) !important; /* Light blue */
    background-color: rgba(255, 255, 255, 0.2) !important; /* Subtle highlight */
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
/* ✅ Success styling */
.success-box {
  background-color: #e6f4ff;
  color: #0f5132;
  border-left: 6px solid #1e90ff;
}
/* ❌ Error styling */
.error-box {
  background-color: #fdecea;
  color: #842029;
  border-left: 6px solid #e74c3c;
}
/* ✅ Icon before text */
.success-box::before,
.error-box::before {
  content: '✔️';
  position: absolute;
  left: 20px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 20px;
}
/* ❌ Error icon override */
.error-box::before {
  content: '❌';
}
/* ✅ Animation class to fade and slide up */
.fade-slide-up {
  opacity: 0;
  transform: translateY(-30px);
}
/* reCAPTCHA container styling */
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
/* internet */
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
  .service_container .container {
    background-color: #e3f2fd;
    border-radius: 12px;
    padding: 20px 25px;
    margin-bottom: 30px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  }
</style>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Pets | AdoptLove</title>
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
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
    // Trigger fade-and-move-up animation after 5 seconds
    setTimeout(function () {
      var alert = document.getElementById("adoptionAlert");
      if (alert) {
        alert.classList.add("fade-slide-up");
        // Remove the element after animation completes (1s later)
        setTimeout(() => alert.remove(), 1000);
      }
    }, 5000);
  </script>
<?php endif; ?>
</body>
<body class="sub_page">
  <div class="hero_area">
    <!-- header section starts -->
    <?php include 'navbar.php'; ?>
    <!-- end header section -->
  </div>
  <!-- 🆕 Search Bar -->
  <div class="container">
    <form method="GET" class="search-form" onsubmit="return false;">
      <input type="text" name="search" id="searchInput" class="search-input" placeholder="Search pets by name or category..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
      <button type="submit" class="search-btn">Search</button>
    </form>
  </div>
  <!-- 🆕 Live Search Script -->
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
  <!-- service section -->
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
<!-- 🆕 Wrap all results inside petResults div -->
<div id="petResults">
<?php foreach ($groupedPets as $category => $pets): ?>
  <div class="service_container" style="background-color: #e3f2fd; border-radius: 12px; padding: 20px;">
      <div class="heading_container">
        <h2><?php echo htmlspecialchars($category); ?></h2>
        <p>These are lovely <?php echo strtolower($category); ?> available for adoption or viewing.</p>
      </div>
      <div class="row row-cols-1 row-cols-md-2 col-md-12">
        <?php foreach ($pets as $pet): ?>
          <div class="col mb-4 col-md-4">
            <div class="card" onclick="loadAdoptionModal(<?php echo htmlspecialchars($pet['p_id']); ?>,'<?php echo htmlspecialchars($pet['p_tittle']); ?>')" style="cursor: pointer;">
              <img src="<?php echo htmlspecialchars($pet['p_imagename']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($pet['p_tittle']); ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($pet['p_tittle']); ?></h5>
                <p class="card-text"><?php echo htmlspecialchars($pet['p_description']); ?></p>
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
<!-- end service section -->
  <!-- info section -->
  <section class="info_section ">
    <div class="container">
  <!-- Top Contact Info -->
  <div class="contact_nav">
    <a href="tel:+918848272821">
      <i class="fa fa-phone" aria-hidden="true"></i>
      <span>Call : +91 8848272821</span>
    </a>
    <a href="mailto:farhanmpd2005@gmail.com?subject=AdoptLove%20Support&body=Hello%20team%2C%0AI%20need%20help%20with...">
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <span>Email : farhanmpd2005@gmail.com</span>
    </a>
    </div>
  <!-- Info Sections -->
  <div class="info_top">
    <div class="row info_main_row">
      <!-- Quick Links -->
      <div class="col-sm-6 col-md-4 col-lg-3">
  <div class="info_links">
    <h4 class="mb-3">QUICK LINKS</h4>
    <ul class="list-unstyled quick-links">
      <li>
        <a href="index.php">
          <i class="fa fa-home mr-2" aria-hidden="true"></i> Home
        </a>
      </li>
      <li>
        <a href="about.php">
          <i class="fa fa-info-circle mr-2" aria-hidden="true"></i> About
        </a>
      </li>
      <li>
        <a href="help.php">
          <i class="fa fa-life-ring mr-2" aria-hidden="true"></i> Help & Support
        </a>
      </li>
      <li>
        <a href="login.php">
          <i class="fa fa-sign-in mr-2" aria-hidden="true"></i> Login
        </a>
      </li>
    </ul>
  </div>
</div>
      <!-- Instagram Feeds -->
      <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
       <!-- Home Services Section -->
        <div class="home_services">
          <h5>Our Home Services</h5>
          <ul class="services_list">
            <li>Pet Adoption Guidance</li>
            <li>Home Pet Health Checkups</li>
            <li>Pet Training & Behavior Advice</li>
            <li>Nutrition and Feeding Consultations</li>
            <li>Post-Adoption Support</li>
          </ul>
          <p class="contact_info">
            Need more info? Call us at <a href="tel:+918848272821">+91 8848272821</a> or 
            <a href="mailto:farhanmpd2005@gmail.com?subject=AdoptLove%20Support&body=Hello%20team%2C%0AI%20need%20help%20with...">email us</a>
          </p>
        </div>
      </div>
      <!-- Adoption Process Guide (Replaces Newsletter) -->
      <div class="col-md-4">
        <div class="info_form">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21782.194670313733!2d76.18054203183236!3d11.250344969162642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba63a4aa86c5e45%3A0x125afddff94baea3!2sMampad%2C%20Kerala!5e0!3m2!1sen!2sin!4v1748537121535!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
  <!-- Bottom Row -->
  <div class="info_bottom">
    <div class="row">
      <div class="col-md-2">
        <div class="info_logo">
          <a href="#"><img src="images/adoptlove1.png" alt=""></a>
        </div>
      </div>
      <div class="col-md-4 ml-auto">
       <div class="social_box d-flex justify-content-end">
       <a href="https://www.instagram.com/farraannn/" target="_blank" style="color: #E1306C; font-size: 24px; margin-right: 15px;">
         <i class="fa fa-instagram" aria-hidden="true"></i>
       </a>
       <a href="https://wa.me/918848272821?text=Hi%20there!%20I'm%20interested%20in%20adopting%20a%20pet.%20Could%20you%20please%20guide%20me%20through%20the%20process%3F
                " target="_blank" style="color: #25D366; font-size: 24px;">
         <i class="fa fa-whatsapp" aria-hidden="true"></i>
       </a>
      </div>
      </div>
    </div>
  </div>
</div>
  </section>
  <!-- end info_section -->
  <!-- footer section -->
 <?php include 'footer.php'; ?>
<script>
  document.getElementById("displayYear").textContent = new Date().getFullYear();
</script>
  <!-- end footer section -->
<!-- Adoption Modal Form -->
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
<!-- Load reCAPTCHA script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!--  OwlCarousel 2 - Filter -->
  <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <scrip src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->  
  <script>
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
</script>
<script>
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
</script>
<script>
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
  // Optional: Check immediately on load
  if (!navigator.onLine) {
    showConnectionStatus('⚠️ You are offline', false);
  }
</script>
</body>
</html>