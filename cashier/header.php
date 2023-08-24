<?php
session_start();
if (isset($_SESSION['username'])) {
  if ($_SESSION['usertype'] != "cashier") {
    header("Location:../index.php");
  }
}else{
  header("Location:../index.php");
}
?>
<!-- ======= Header ======= -->
<!--jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<header id="header" class="header fixed-top d-flex align-items-center" style="background-color:#402424">

  <div class="d-flex align-items-center justify-content-between">

    <img src="../assets/img/SABAS W PNG.png" alt="sabas" height="80">
    <span class="d-none d-lg-block" bg-light></span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn "></i>
  </div><!-- End Logo -->


  <nav class="header-nav ms-auto baxk">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->




      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="../assets/img/man.png" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2 text-white">
            <?php echo $_SESSION['display_name']; ?>
          </span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>
              <?php echo $_SESSION['display_name']; ?>
            </h6>
            <span>
              <?php echo $_SESSION['usertype']; ?>
            </span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <!--<li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>Need Help?</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>-->

          <li>
            <a class="dropdown-item d-flex align-items-center" href="../logout.php">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->