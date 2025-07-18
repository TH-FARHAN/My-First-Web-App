<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Home | AdoptLove</title>


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

  <style>
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
  </style>

</head>
<body>

  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'navbar.php'; ?>
    <!-- end header section -->
    <!-- slider section -->
  <section class="slider_section">
  <div id="customCarousel1" class="carousel slide" data-ride="carousel" data-interval="2000" data-pause="false">
    <!-- 🔵 Dots/Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#customCarousel1" data-slide-to="1"></li>
      <li data-target="#customCarousel1" data-slide-to="2"></li>
      <li data-target="#customCarousel1" data-slide-to="3"></li>
    </ol>

    <!-- 🔁 Slides -->
    <div class="carousel-inner">
      <!-- Slide 1 -->
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

      <!-- Slide 2 -->
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

      <!-- Slide 3 -->
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

      <!-- Slide 4 -->
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


    <!-- end slider section -->
  </div>

   <!-- about section -->

<style>
  .about_section {
    background-color: #ffffff;
    padding: 50px 0;
  }

  .about_section .container {
    background: linear-gradient(135deg, #e3f2fd, #ffffff);
    border-radius: 15px;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
    padding: 40px 30px;
    transition: all 0.3s ease;
  }

  .about_section .heading_container h2 {
    color: #1565c0;
    font-weight: 700;
    margin-bottom: 20px;
  }

  .about_section .detail-box p {
    font-size: 16px;
    line-height: 1.7;
    color: #333;
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
    background-color: #1565c0;
    color: #fff;
    padding: 10px 20px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.3s ease;
  }

  .more-btn a:hover {
    background-color: #0d47a1;
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
            Welcome to <strong>AdoptLove</strong>, your trusted platform for pet adoption. We are dedicated to connecting loving families with pets in need of a forever home. Our mission is to reduce pet homelessness by making adoption easy, accessible, and compassionate.
          </p>
          <p>
            We work closely with animal shelters and rescue organizations to provide a safe, supportive space where animals can find the care and love they deserve. Whether you're looking to adopt a dog, cat, or any other pet, AdoptLove helps guide you every step of the way.
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
          <img src="images/about-img1.webp" alt="AdoptLove About Image">
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- end about section -->


  <!-- service section -->


<section class="service_section layout_padding bg-white">
  <div class="service_container" style="background-color: #e3f2fd; border-radius: 12px; padding: 30px;">
    <div class="container">
      <div class="heading_container text-center mb-5">
        <h2 style="color: black;">Our Services</h2>
        <p class="text-muted">Explore the services we offer to support a successful pet adoption journey.</p>
      </div>
      <div class="row g-4">
        <!-- Service 1 -->
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body">
              <div class="mb-3 text-primary">
                <i class="fa fa-heartbeat fa-3x"></i>
              </div>
              <h5 class="card-title">Pet Adoption Matching</h5>
              <p class="card-text">We help match potential adopters with the perfect pet based on breed, size, and temperament preferences. Our intelligent matching system ensures compatibility and lasting bonds.</p>
            </div>
          </div>
        </div>
        <!-- Service 2 -->
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body">
              <div class="mb-3 text-success">
                <i class="fa fa-medkit fa-3x"></i>
              </div>
              <h5 class="card-title">Health & Vaccination</h5>
              <p class="card-text">All pets come with detailed health records including vaccination history, medical treatments, and wellness checks to ensure complete transparency for new owners.</p>
            </div>
          </div>
        </div>
        <!-- Service 3 -->
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body">
              <div class="mb-3 text-warning">
                <i class="fa fa-file-text-o fa-3x"></i>
              </div>
              <h5 class="card-title">Adoption Applications</h5>
              <p class="card-text">Submit adoption requests directly online. We carefully review each to ensure responsible ownership and perform necessary checks for the pet’s well-being.</p>
            </div>
          </div>
        </div>
        <!-- Service 4 -->
        <div class="col-md-6 col-lg-3">
          <div class="card border-0 shadow-sm h-100 text-center">
            <div class="card-body">
              <div class="mb-3 text-danger">
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


  <!-- end service section -->


 


  <!-- project section -->

  <!-- end project section -->


  <!-- end why us section -->

  <!-- end contact section -->

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
        <a href="service.php">
          <i class="fa fa-paw mr-2" aria-hidden="true"></i> Pets
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

      
  <!-- footer section -->

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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
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

  // Optional: Check immediately on load
  if (!navigator.onLine) {
    showConnectionStatus('⚠️ You are offline', false);
  }
</script>



</body>

</html>