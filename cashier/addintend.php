
<!DOCTYPE html>
<html lang="en">

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

  <!-- ======= Header ======= -->

  <?php include 'header.php' ?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include 'sidebar.php' ?>

  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Intend</h1><br>


    </div><!-- End Page Title -->

    <!-- End Sales Card -->


    <!--<label><b>Products:</b></label><input type="text" id="product" placeholder="Product" title="Type in the required product" required></input>
    <label><b>Quantity:</b></label><input type="text" id="quantity" placeholder="Quantity" title="Type in the required quantity" required></input>
 <button class="btn text-white pt-0 pb-0 text-end" style="background-color:#402424" onclick="myCreateFunction()">Add</button>
 <button class="btn text-white pt-0 pb-0 text-end" style="background-color:#402424" onclick="deleteRow()">Delete</button>
 


        <table id="table" class="table table-striped">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th></th>
                </tr> 
            </table>
    
        
      <script>
        function myCreateFunction() {
  var table = document.getElementById("myTable");
  var row = table.insertRow(0);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  cell1.innerHTML = "NEW CELL1";
  cell2.innerHTML = "NEW CELL2";
}

function myDeleteFunction() {
  document.getElementById("myTable").deleteRow(0);
}-->
  <div class="pb-4"><form>
    <b>Products:<b>  <input type="text" class="mr-7" id="product" placeholder="Product" title="Type in the required product"></input>
    <b>Quantity:<b>  <input class="col-md-1" type="number" id="quantity" placeholder="Quantity" title="Type in the required quantity"></input>
    <button class="btn text-white pt-0 pb-0 text-end" onclick="addrow(this)" style="background-color:#402424"><i class="bi bi-plus"></i>Add</button><form></div>
       

    <table id="table" class="table table-striped mt-3 w-75">
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th> </th>
      </tr>

    </table>


    <script>
      

      function addrow() {
        //var delete1="<button type="submit">Delete</button>";
        var tablerow = document.getElementById("table");
        var product = document.getElementById("product").value;
        var quantity = document.getElementById("quantity").value;

        var row = tablerow.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 =row.insertCell(2);
        cell1.innerHTML = product;
        cell2.innerHTML = quantity;
        cell3.innerHTML= "<a onclick='deleterow(this)'> <i class='bi bi-trash3'  style='font-size:25px;'></i></a>";
       clear();
      }
      function clear() {
        document.getElementById("product").value = "";
        document.getElementById("quantity").value = "";
      }

      /*function deleteRow{
        document.getElementById("table").deleteRow(0);
      }*/


      function deleterow(row){
        var index= row.parentNode.parentNode.rowIndex;
        document.getElementById("table").deleteRow(index);

      }


    </script>


    
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