<!DOCTYPE html>
<html lang="en">
<?php include '../common/db.config.php'; 
ob_start();
?>

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
  <?php
  $id = $_GET['ID'];
  $user_id=$_SESSION['ID'];
  
  //$status = $_GET['status'];
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // $sql = "SELECT * FROM intend_items WHERE intend_id=$id ";
  $sql = "SELECT intend_items.ID,products.product_name,intend_items.product_quantity,intend_items.deliver_quantity
  FROM intend_items LEFT JOIN products ON intend_items.product_id=products.ID WHERE intend_items.intend_id=$id;";


  $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);

  if (isset($_POST['submit_btn'])) {
   // var_dump($_POST);
    $r_quantity = $_POST['r_quantity'];

    $sql1 = "UPDATE `intend` SET `status` = 'recieve',`received_date` =now(),`received_by` =$user_id   WHERE `intend`.`ID` = $id;";
    mysqli_query($conn, $sql1);
    foreach ($r_quantity as $key => $value) {
      $sql2 = "UPDATE intend_items SET received_quantity=$value  WHERE ID=$key";
      mysqli_query($conn, $sql2);


    }
    header("Location:index.php");
  }

  ?>

  

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Deliver </h1>
    </div><!-- End Page Title -->

    <form action="" method="POST">

      <table class="table table-striped">
        <tr>
          <th class="text-center ">S No</th>
          <th class="text-center ">Product</th>
          <th class="text-center ">Requested_Quantity</th>
          <th class="text-center ">Delivered_Quantity</th>
          <th class="text-center ">Received_Quantity</th>
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
                <?php echo $row['product_name']; ?>
              </td>
              <td class="text-center ">
                <?php echo $row['product_quantity']; ?>
              </td>
              <td class="text-center ">
              <?php echo $row['deliver_quantity']; ?>
              </td>
              <td class="text-center ">
              <input type="number" name="r_quantity[<?php echo $row['ID'] ?>]" id="<?php echo $row['ID'] ?>" />
              </td>




            </tr>
          <?php }
        } else {
          echo "no intend products found!!!";
        } ?>
      </table>
      <div class="text-center">
        <input type="submit" value="submit" name="submit_btn" class="btn btn-primary mt-3" />

      </div>

    </form>
    <!-- <div class="text-end">
      <a href="javascript:void(0);" onclick="change_status('process')" class="btn text-white "  id="process" style="background-color:#402424">Process</a>
      <a href="deliver.php"  class="btn text-white "  id="deliver" style="background-color:#402424">Deliver</a>
    </div> -->



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