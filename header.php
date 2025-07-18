<?php 
  $currentPage = basename($_SERVER['PHP_SELF']); 
?>
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
  </ul><br>
</div>