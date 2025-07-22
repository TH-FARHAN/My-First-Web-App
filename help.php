<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Help & Support | AdoptLove</title>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    .social-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      margin-left: 12px;
      font-size: 24px;
      transition: all 0.3s ease;
    }
    .social-icon:hover {
      background-color: rgba(255, 255, 255, 0.2);
      transform: scale(1.2);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }
    .social-icon.instagram:hover {
      color: #E1306C;
      background-color: #ffe4f0;
    }
    .social-icon.whatsapp:hover {
      color: #25D366;
      background-color: #dcfce7;
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
    <?php include 'navbar.php'; ?>
  </div>
  <!-- Help Section -->
  <section class="contact_section layout_padding bg-white">
    <div class="container" style="background-color: #e3f2fd; border-radius: 12px; padding: 40px; box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);">
      <div class="heading_container">
        <h2>Help & Support</h2>
        <p>If you have questions about adopting, volunteering, or contacting us — you're in the right place!</p>
      </div>
      <div class="row mt-4">
        <div class="col-md-6">
          <h4>Frequently Asked Questions</h4>
          <ul class="list-group">
            <li class="list-group-item">
              <strong>How do I adopt a pet?</strong><br>
              Simply click on a pet image, fill the popup form, and our team will contact you within 24-48 hours.
            </li>
            <li class="list-group-item">
              <strong>Is there an adoption fee?</strong><br>
              Yes, fees vary by animal type and help cover vaccination, food, and shelter.
            </li>
            <li class="list-group-item">
              <strong>Can I volunteer?</strong><br>
              Absolutely! Reach out using the popup or email us at <a href="mailto:farhanmpd2005@gmail.com?subject=AdoptLove%20Support&body=Hello%20team%2C%0AI%20need%20help%20with...">farhanmpd2005@gmail.com</a>.
            </li>
            <li class="list-group-item">
              <strong>Where are you located?</strong><br>
              We’re based in India — visit us or check our Google Map on the homepage.
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <h4>Still Need Help?</h4>
          <p>You can always contact us through the popup message when viewing pets. Or:</p>
          <ul class="list-unstyled">
            <li><i class="fa fa-phone"></i> Call: <a href="tel:+918848272821" class="phone-link">+91 8848272821</a></li>
            <li><i class="fa fa-envelope"></i> Email: <a href="mailto:farhanmpd2005@gmail.com?subject=AdoptLove%20Support&body=Hello%20team%2C%0AI%20need%20help%20with...">farhanmpd2005@gmail.com</a></li>
          </ul>
          <p>We're here to support you with any questions about our animals, services, or platform.</p>
          <div class="row mt-5">
            <div class="col-lg-12">
              <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                  <h4 class="mb-4">Quick Links</h4>
                  <div class="d-flex justify-content-center flex-wrap gap-2">
                    <a href="index.php" class="btn btn-light border rounded-pill me-2">🏠 Home</a>
                    <a href="service.php" class="btn btn-light border rounded-pill me-2">🐾 Pets</a>
                    <a href="about.php" class="btn btn-light border rounded-pill me-2">ℹ️ About Us</a>
                    <a href="login.php" class="btn btn-light border rounded-pill">🔐 Login</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Right Column -->
      </div> <!-- End Row -->
    </div> <!-- End Container -->
  </section>
  <!-- Social Icons -->
  <div class="info_bottom">
    <div class="row">
      <div class="col-md-4 ml-auto">
        <div class="social_box d-flex justify-content-end" style="transform: translate(-25px, -20px);">
          <a href="https://www.instagram.com/farraannn/" target="_blank" class="social-icon instagram">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="https://wa.me/918848272821?text=Hi%20there!%20I'm%20interested%20in%20adopting%20a%20pet.%20Could%20you%20please%20guide%20me%20through%20the%20process%3F" target="_blank" class="social-icon whatsapp">
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
  <!-- Scripts -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
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
