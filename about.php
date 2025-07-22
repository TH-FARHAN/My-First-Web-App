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

  <title>About | AdoptLove</title>

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

  <!-- Owl Carousel CSS (add this last among stylesheets) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  
  <style>
.about_section {
  background-color: #ffffff;
  padding: 50px 0;
}

.about_section .container {
  background-color: #e3f2fd; /* Light blue background */
  border-radius: 15px;
  box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12); /* ✅ Added stronger shadow here */
  padding: 40px 30px;
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
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
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

</style>
</head>
<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'navbar.php'; ?>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <style>
  body {
    background-color: #e3f2fd; /* Light blue background */
  }
  </style>

 <section class="about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>About Us</h2>
          </div>
          <p>
            Welcome to <strong>AdoptLove</strong>, your trusted platform for pet adoption. We connect loving families with homeless pets to ensure every animal finds a caring home.
          </p>
          <p>
            Our mission is to <strong>reduce pet homelessness</strong> and promote ethical treatment by partnering with shelters and rescue organizations. We provide an easy, transparent adoption process and lifelong support for pet parents.
          </p>
          <ul>
            <li><strong>❤️ Our Vision:</strong> A world where every pet has a home and love.</li>
            <li><strong>📅 Established:</strong> 2025</li>
            <li><strong>💼 Our Services:</strong> Pet Adoption, Post-Adoption Support, Home Visits, Pet Care Resources</li>
            <li><strong>📢 Motto:</strong> "Adopt, Don't Shop!"</li>
          </ul>
          <p>
            Whether you're looking to adopt a dog, cat, or any other furry friend, <strong>AdoptLove</strong> is here to guide you at every step. Join us and be a part of a growing family that believes in compassion and second chances.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img src="images/about-img1.webp" alt="About AdoptLove">
        </div>
        <div class="mt-4">
          <h5>What Makes Us Different?</h5>
          <ul>
            <li>✅ Verified pet listings only</li>
            <li>✅ Direct shelter communication</li>
            <li>✅ 24/7 adoption and care support</li>
            <li>✅ Trusted by 10,000+ pet lovers</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Added Section: Testimonials Carousel -->
<style>
  .testimonial_section {
    background-color: #e3f2fd;
    padding: 60px 20px;
  }

  .testimonial_section h2 {
    color: #1565c0;
    font-weight: 700;
    margin-bottom: 40px;
    text-align: center;
  }

  .testimonial-card {
    border-radius: 15px;
    background: #ffffff;
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
    padding: 30px;
    transition: transform 0.3s ease;
    height: 100%;
  }
 
  .testimonial-card p {
    color: #37474f;
    font-style: italic;
    font-size: 16px;
    margin-bottom: 15px;
  }

  .testimonial-card strong {
    color: #1e88e5;
    font-weight: 600;
  }
</style>

<section class="testimonial_section" style="background-color: #ffffff; padding: 60px 20px;">
  <div class="container" style="background-color: #e3f2fd; border-radius: 15px; padding: 40px; box-shadow: 0 8px 20px rgba(0,0,0,0.08);">
    <h2 style="color: #1565c0; font-weight: 700; text-align: center; margin-bottom: 40px;">What Our Adopters Say</h2>
    <div class="owl-carousel owl-theme">
      <div class="item">
        <div class="testimonial-card">
          <p>"AdoptLove helped me find my soulmate in a fur coat. The process was smooth, and support was incredible!"</p>
          <strong>- Anas, Kochi</strong>
        </div>
      </div>
      <div class="item">
        <div class="testimonial-card">
          <p>"I was nervous about adopting, but AdoptLove made me feel confident and supported every step of the way."</p>
          <strong>- Farhan, Malappuram</strong>
        </div>
      </div>
      <div class="item">
        <div class="testimonial-card">
          <p>"Our rescue pup brought light into our home. Thank you, AdoptLove, for making this possible."</p>
          <strong>- Adhnan, Nilambur</strong>
        </div>
      </div>
      <div class="item">
        <div class="testimonial-card">
          <p>"From the first message to bringing home my new buddy, AdoptLove’s team was kind and professional."</p>
          <strong>- Danish, Kozhikode</strong>
        </div>
      </div>
      <div class="item">
        <div class="testimonial-card">
          <p>"I never thought I’d love a cat this much. AdoptLove matched me perfectly with my little shadow, Coco."</p>
          <strong>- Sahil, Panthalingal</strong>
        </div>
      </div>
      <div class="item">
        <div class="testimonial-card">
          <p>"Volunteering with AdoptLove gave me meaning. I’ve met amazing people and even adopted my foster pup!"</p>
          <strong>- Ameerudheen, Naduvakkad</strong>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- jQuery (Required) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Owl Carousel Initialization -->
<script>
  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 5000,
      responsive: {
        0: { items: 1 },
        768: { items: 1 },
        992: { items: 2 }
      }
    });
  });
</script>

  <!-- end about section -->

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
              <a href="service.php">
                <i class="fa fa-paw mr-2" aria-hidden="true"></i> Pets
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