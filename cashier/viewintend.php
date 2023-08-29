<!DOCTYPE html>
<html lang="en">
<?php include '../common/db.config.php'; ?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sabas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/SABAS Round.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?php
  $id = $_GET['ID'];
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $sql = "SELECT * FROM intend_items WHERE intend_id=$id ";

  $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);



  ?>

  <!-- ======= Header ======= -->

  <?php include 'header.php' ?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include 'sidebar.php' ?>

  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Intend Items </h1>
    </div><!-- End Page Title -->
    <div class="text-end pb-3">


    </div>
    <!-- End Sales Card -->
    <!--<div class="pagetitle">
      <h1>Paramathi Road:</h1>
    </div>-->
    <table class="table table-striped">
      <tr>
        <th class="text-center ">S No</th>
        <th class="text-center ">Product</th>
        <th class="text-center ">Quantity</th>
      </tr>
      <?php

      if ($count > 0) {

        for ($i = 0; $i < $count; $i++) {
          $row = mysqli_fetch_assoc($result);

          ?>
          <tr>
            <td class="text-center ">
              <?php echo $i; ?>
            </td>
            <td class="text-center ">
              <?php
              $pro_id = $row['product_id'];
              $sql1 = "SELECT product_name FROM products WHERE ID=$pro_id ";
              $result1 = mysqli_query($conn, $sql1);
              $row1 = mysqli_fetch_assoc($result1);
              echo $row1['product_name'];


              ?>
            </td>
            <td class="text-center ">
              <?php echo $row['product_quantity']; ?>
            </td>



          </tr>
        <?php }
      } else {
        echo "no intend products found!!!";
      } ?>
    </table>

    <!-- Revenue Card -->
    <!-- End Revenue Card -->

    <!-- Customers Card -->
    <!-- End Customers Card -->

    <!-- Reports -->
    <!-- End Reports -->

    <!-- Recent Sales -->
    <!-- End Recent Sales -->

    <!-- Top Selling -->
    <!-- End Top Selling -->

    </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <!--<div class="col-lg-4">-->

    <!-- Recent Activity -->
    <!-- End Recent Activity -->

    <!-- Budget Report -->
    <!-- End Budget Report -->

    <!-- Website Traffic -->
    <!-- End Website Traffic -->

    <!-- News & Updates Traffic -->
    <!-- End News & Updates -->

    </div><!-- End Right side columns -->

    </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <?php include 'footer.php' ?>

  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>