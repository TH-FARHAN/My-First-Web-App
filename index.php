<!DOCTYPE html>
<html>
<head>  
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>AdoptLove | Home</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
<style>
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
</head>
<body>
  <div class="hero_area">
    <?php include 'navbar.php'; ?>
  <section class="slider_section">
  <div id="customCarousel1" class="carousel slide" data-ride="carousel" data-interval="2000" data-pause="false">
    <ol class="carousel-indicators">
      <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#customCarousel1" data-slide-to="1"></li>
      <li data-target="#customCarousel1" data-slide-to="2"></li>
      <li data-target="#customCarousel1" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-md-10 mx-auto">
              <div class="detail-box text-center">
                <h1>Adopt <br> Your <br> Love</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-10 mx-auto">
              <div class="detail-box text-center">
                <h1>Find <br> A <br> Friend</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-10 mx-auto">
              <div class="detail-box text-center">
                <h1>Give <br> Them <br> Hope</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div class="col-md-10 mx-auto">
              <div class="detail-box text-center">
                <h1>Be <br> Their <br> Hero</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<style>
 .about_section {
  background-color: #ffffff;
  padding: 50px 0;
}
.about_section .container {
  background: linear-gradient(135deg, #dcedc8, #ffffff); /* light green to white */
  border-radius: 15px;
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
  padding: 40px 30px;
  transition: all 0.3s ease;
}
.about_section .heading_container h2 {
  color: #2e7d32; /* dark green */
  font-weight: 700;
  margin-bottom: 20px;
}
.about_section .detail-box p {
  font-size: 16px;
  line-height: 1.7;
  color: #1b5e20; /* strong green */
}
.about_section .img-box img {
  width: 100%;
  height: auto;
  border-radius: 12px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}
.more-btn {
  margin-top: 20px;
}
.more-btn a {
  display: inline-block;
  background-color: #43a047; /* green */
  color: #fff;
  padding: 10px 20px;
  border-radius: 30px;
  text-decoration: none;
  font-weight: 600;
  transition: background 0.3s ease;
}
.more-btn a:hover {
  background-color: #2e7d32; /* darker green on hover */
}
</style>
<section class="about_section" id="about_us">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>About Us</h2>
          </div>
          <p>
            Welcome to <strong></strong>, your trusted platform for pet adoption. We are dedicated to connecting loving families with pets in need of a forever home. Our mission is to reduce pet homelessness by making adoption easy, accessible, and compassionate.
          </p>
          <p>
            We work closely with animal shelters and rescue organizations to provide a safe, supportive space where animals can find the care and love they deserve. Whether you're looking to adopt a dog, cat, or any other pet,  helps guide you every step of the way.
          </p>
          <p>
            Every adoption through our platform brings us one step closer to a world where every pet has a home. Join us in spreading love—one adoption at a time.
          </p>
          <div class="more-btn">
            <a href="about.php">More About Us</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img src="images/about-img1.webp" alt=" About Image">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="service_section layout_padding bg-white">
  <div class="service_container" style="background-color: #e8f5e9; border-radius: 12px; padding: 30px;">
    <div class="container">
      <div class="heading_container text-center mb-5">
        <h2 style="color: #2e7d32;">Our Services</h2>
        <p class="text-muted">Explore the services we offer to support a successful pet adoption journey.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body">
              <div class="mb-3" style="color: #43a047;">
                <i class="fa fa-heartbeat fa-3x"></i>
              </div>
              <h5 class="card-title">Pet Adoption Matching</h5>
              <p class="card-text">We help match potential adopters with the perfect pet based on breed, size, and temperament preferences. Our intelligent matching system ensures compatibility and lasting bonds.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body">
              <div class="mb-3" style="color: #2e7d32;">
                <i class="fa fa-medkit fa-3x"></i>
              </div>
              <h5 class="card-title">Health & Vaccination</h5>
              <p class="card-text">All pets come with detailed health records including vaccination history, medical treatments, and wellness checks to ensure complete transparency for new owners.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body">
              <div class="mb-3" style="color: #f9a825;">
                <i class="fa fa-file-text-o fa-3x"></i>
              </div>
              <h5 class="card-title">Adoption Applications</h5>
              <p class="card-text">Submit adoption requests directly online. We carefully review each to ensure responsible ownership and perform necessary checks for the pet’s well-being.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body">
              <div class="mb-3" style="color: #d84315;">
                <i class="fa fa-paw fa-3x"></i>
              </div>
              <h5 class="card-title">Post-Adoption Support</h5>
              <p class="card-text">We offer resources and guidance post-adoption, including training tips, pet care articles, and local vet/groomer connections to help ensure a smooth transition.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <?php include 'info_us.php'; ?>
  <?php include 'footer.php'; ?>
<script>
  document.getElementById("displayYear").textContent = new Date().getFullYear();
</script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
<script>
  $(document).ready(function(){
    $('#customCarousel1').carousel({
      interval: 4000,   // Slide every 4 seconds
      pause: false      // Don't pause on hover
    });
  });
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
  if (!navigator.onLine) {
    showConnectionStatus('⚠️ You are offline', false);
  }
</script>
</body>
</html>