<style>
  .header_section,
  .header_bottom {
    background-color: #e3f2fd !important; /* force light blue */
  }
</style>

<header class="header_section">
  <div class="header_bottom">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <img src="images/adoptlove1.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">Pets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="help.php">Help & Support</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php"> Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    var currentPath = window.location.pathname.split("/").pop();
    if (currentPath === "") {
      currentPath = "index.php";
    }

    $('.nav-item').removeClass('active');

    $('.nav-item a').each(function () {
      var linkPath = $(this).attr('href');
      if (linkPath === currentPath) {
        $(this).closest('.nav-item').addClass('active');
      }
    });
  });
</script>
