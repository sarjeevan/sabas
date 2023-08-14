<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location:index.php");
}
?>
<?php include '../common/db.config.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sabas</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/SABAS.png" rel="icon">
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
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM users";

    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if(isset($_GET['ID'])){
        $id=$_GET['ID'];
        $sql="DELETE FROM users WHERE ID=$id";
        if(mysqli_query($conn,$sql)){
            header("location:users.php");
        }else{
            echo"delete not performed";
        }

    }

    mysqli_close($conn);
    ?>


    <!-- ======= Header ======= -->
    <?php include 'header.php'; ?>

    <!-- End Header -->

    <!-- ======= Sidebar ======= -->

    <?php include 'sidebar.php' ;?>

    <!-- End Sidebar--> 

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Users</h1>
        </div><!-- End Page Title -->
        <div class="text-end">
            <a class="btn btn-primary mb-3 mt-2 " href="add.php">ADD USER</a>
        </div>
        <div>
            <table class="table table-striped table-bordered">

                <tr>
                    <th class="text-center ">Username</th>
                    <th class="text-center ">Password</th>
                    <th class="text-center ">Branch</th>
                    <th class="text-center ">Usertype</th>
                    <th class="text-center">Display Name</th>
                    <th class="text-center ">Delete</th>
                    <th class="text-center ">Edit</th>
                </tr>
                <?php
                if ($count > 0) {

                    for ($i = 0; $i < $count; $i++) {
                        $row = mysqli_fetch_assoc($result);

                        ?>
                        <tr>
                            <td class="text-center ">
                                <?php echo $row['username']; ?>
                            </td>
                            <td class="text-center ">
                                <?php echo $row['password']; ?>
                            </td>
                            <td class="text-center ">
                                <?php echo $row['branch']; ?>
                            </td>
                            <td class="text-center ">
                                <?php echo $row['usertype']; ?>
                            </td>
                            <td class="text-center ">
                                <?php echo $row['display_name']; ?>
                            </td>
                            <td class="text-center ">
                                <a class="" href="users.php?ID=<?php echo $row['ID'] ?>" >
                                    <i class="bi bi-trash3 " style="font-size:25px;"></i>
                                   
                                </a>
                            </td>
                            <td class="text-center">
                            <a class="" href="edit.php?ID=<?php echo $row['ID'] ?>" >
                                    <i class="bi bi-pencil-square " style="font-size:25px;"></i>
                                   
                                </a>
                            </td>
                        </tr>
                    <?php }
                } else {
                    echo "no entries found";
                } ?>
            </table>
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