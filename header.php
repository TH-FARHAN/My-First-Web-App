<?php 
  $currentPage = basename($_SERVER['PHP_SELF']); 
?>
<style>
  .sidenav {
    background-color: #fdfdfd;
    border-right: 1px solid #ddd;
    height: 100vh;
    padding: 20px;
    box-shadow: 2px 0 5px rgba(0,0,0,0.05);
  }
  .sidenav img {
    max-width: 100%;
    border-radius: 8px;
    margin-bottom: 20px;
  }
  .nav-pills > li > a {
    border-radius: 8px;
    padding: 10px 15px;
    color: #333;
    font-weight: 500;
    transition: background-color 0.2s ease;
  }
  .nav-pills > li > a:hover {
    background-color: #e8f5e9; /* light green hover */
    color: #2e7d32;
  }
  .nav-pills > li.active > a,
  .nav-pills > li.active > a:focus,
  .nav-pills > li.active > a:hover {
    background-color: #4CAF50;  /* ✅ GREEN highlight */
    color: white;
    font-weight: bold;
  }
</style>
<div class="col-sm-3 sidenav hidden-xs">
  <img src="images/adoptlove1.png" alt="" class="img-thumbnail">
  <ul class="nav nav-pills nav-stacked">
    <li class="<?= ($currentPage == 'dashboard.php') ? 'active' : '' ?>">
      <a href="./dashboard.php">Dashboard</a>
    </li>
    <li class="<?= ($currentPage == 'pets.php') ? 'active' : '' ?>">
      <a href="./pets.php">Pets</a>
    </li>
    <li class="<?= ($currentPage == 'adoption.php') ? 'active' : '' ?>">
      <a href="./adoption.php">Adoption</a>
    </li>
    <li class="<?= ($currentPage == 'logout.php') ? 'active' : '' ?>">
      <a href="./logout.php">Logout</a>
    </li>
  </ul>
</div>
