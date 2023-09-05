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

<body>
    <?php

    if (isset($_GET['submit_btn'])) {
       
        $user = $_GET['user'];
        $pass = $_GET['pass'];
        $branch = $_GET['branch'];
        $type = $_GET['type'];
        $dname = $_GET['dname'];
        $hashed_pass = md5($pass);

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql = "INSERT INTO `users` (`username`,`password`,`branch`,`usertype`,`display_name`) 
        VALUES ('$user','$hashed_pass','$branch','$type','$dname')";
        if (mysqli_query($conn, $sql)) {
            header("location:users.php");
        } else {
            echo "error in creation";
        }



        mysqli_close($conn);


    }

    ?>

    <!-- ======= Header ======= -->

    <?php include 'header.php' ?>

    <!-- End Header -->

    <!-- ======= Sidebar ======= -->

    <?php include 'sidebar.php' ?>

    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle mb-4">
            <h1>Add User</h1>
        </div><!-- End Page Title -->
        <div class="card ">
            <div class="card-body mt-4">
              

              
              <form method="GET" action="add.php">
                <div class="row mb-3">
                  <label for="user" class="col-sm-2 col-form-label">Username:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control w-75" id="user" name="user">
                  </div>
                </div>
                <div class="row mb-3">
                   <label for="pass" class="col-sm-2 col-form-label">Password:</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control w-75" id="pass" name="pass">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="branch" class="col-sm-2 col-form-label">Branch:</label>
                   <div class="col-sm-10">
                    <input type="text" class="form-control w-75" id="branch" name="branch">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="type" class="col-sm-2 col-form-label">User Type:</label>
                   <div class="col-sm-10">
                   <input type="text" name="type" class="form-control w-75" id="type" />
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="dname" class="col-sm-2 col-form-label ">Display Name:</label>
                   <div class="col-sm-10">
                   <input type="text" name="dname" class="form-control w-75" id="dname" />
                  </div>
                </div>
                
                
                <div class="text-center">
                <input type="submit" value="submit" name="submit_btn" class="btn btn-primary mt-3" />
                  
                </div>
              </form><!-- End Horizontal Form -->

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