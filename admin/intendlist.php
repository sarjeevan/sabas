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
  <!--<link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

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
<style>
   .header1 {
            position: sticky;
            top:0;
        }
</style>

<body>
  <?php

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  $sql = "SELECT * FROM intend ORDER BY ID DESC";

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
      <h1>Intend List</h1><br>


    </div><!-- End Page Title -->
    <!--<div class="text-end pb-3">
      <a href="addintend.php" class="btn btn-primary text-white"><i class="bi bi-plus"></i>Add Intend</a>


    </div>-->
    <div class="card  ">
      <div class="card-body mt-3 mb-1">
        <div class="overflow-auto " style="height:370px;">
          <table class="table table-striped table-bordered">

            <tr>
              <thead style="position: sticky;top:0;margin-top:2px;" class="thead-dark">
                <th class="text-center bg-dark text-white ">From</th>
                <th class="text-center bg-dark text-white ">Created_Date</th>
                <th class="text-center bg-dark text-white ">Created_By</th>

                <th class="text-center bg-dark text-white ">Status</th>
                <th class="text-center bg-dark text-white "></th>
              </thead>
            </tr>
            <?php

            if ($count > 0) {

              for ($i = 0; $i < $count; $i++) {
                $row = mysqli_fetch_assoc($result);

                ?>
                <tr>
                  <td class="text-center ">
                    <?php echo $row['branch']; ?>
                  </td>
                  <td class="text-center ">
                    <?php echo $row['created_date']; ?>
                  </td>
                  <td class="text-center ">
                    <?php echo $row['created_by']; ?>
                  </td>
                  <td class="text-center ">
                    <?php echo $row['status']; ?>
                  </td>
                  <td class="text-center">

                    <a class="btn btn-dark" href="viewintend.php?ID=<?php echo $row['ID'] ?>">view</a>
                  </td>


                </tr>
              <?php }
            } else {
              echo "no entries found";
            } ?>
          </table>
        </div>

      </div>
    </div>


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