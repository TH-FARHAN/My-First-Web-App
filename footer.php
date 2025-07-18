<style>
  .footer_section {
   background-image: url('./images/footer1.png'); /* ✅ Make sure the path is correct */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 8px 10px;
    font-family: 'Segoe UI', sans-serif;
    color: #1a237e;
    text-align: center;
    border-top: 1px solid #90caf9;
    position: relative;
    z-index: 1;
  }

  .footer_section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.85); /* White transparent overlay */
    z-index: 0;
  }

  .footer_section .container {
    position: relative;
    z-index: 2;
  }

  .footer_section p {
    margin: 0;
    font-size: 13px;
    font-weight: 500;
    line-height: 1.4;
  }

  .footer_section a {
    color: #0d47a1;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.2s ease;
  }

  .footer_section a:hover {
    color: #1565c0;
    text-decoration: underline;
  }

  .footer_tagline {
    font-size: 12px;
    font-style: italic;
    color: #455a64;
    margin-top: 3px;
  }

  @media (max-width: 600px) {
    .footer_section {
      padding: 6px 8px;
    }

    .footer_section p {
      font-size: 12px;
    }

    .footer_tagline {
      font-size: 11px;
    }
  }
</style>

<footer class="footer_section">
  <div class="container">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="https://www.instagram.com/farraannn/" target="_blank">Muhammed Farhan</a>
    </p>
    <div class="footer_tagline">Adopt. Love. Care. 🐶🐾</div>
  </div>
</footer>

<script>
  document.getElementById("displayYear").textContent = new Date().getFullYear();
</script>
