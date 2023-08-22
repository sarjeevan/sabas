<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sabas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/SABAS Round.png" rel="icon">"apple-touch-icon">-->

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
  <style>
    input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
  </style>
</head>

<body>

  <!-- ======= Header ======= -->

  <?php include 'header.php' ?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include 'sidebar.php' ?>

  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Warehouse</h1>
    </div><!-- End Page Title -->
<div class="text-end pb-3">

<button class="btn btn-info text-white" onclick="window.print()">Print</button>
<button class="btn btn-info text-white" download="process.php">Download</button>

</div>
    <!-- End Sales Card -->
    <!--<div class="pagetitle">
      <h1>Paramathi Road:</h1>
    </div>-->
    <table class="table table-striped">
      <tr>
        <th>S No</th>
        <th>Name</th>
        <th>Received Qty</th>
        <th>Sent Qty</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Samosa</td>
        <td>200</td>
        <td><input type="number" class="col-md-2"></input></td>
      </tr>
    </table>
    <div class="text-end">
        <a href="" class="btn text-white btn-danger">Cancel</a>
        <a href="" class="btn text-white btn-success">Transfer</a>
    </div>


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