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
  <style>
    /*the container must be positioned relative:*/
    .autocomplete {
      position: relative;

    }




    .autocomplete-items {
      position: absolute;
      border: 1px solid #d4d4d4;
      border-bottom: none;
      border-top: none;
      z-index: 99;
      /*position the autocomplete items to be the same width as the container:*/
      top: 100%;
      left: 0;
      right: 0;
      margin-top: 15px;
      width: 35%;
    }

    .autocomplete-items div {
      padding: 10px;
      cursor: pointer;
      background-color: #fff;
      border-bottom: 1px solid #d4d4d4;
    }

    /*when hovering an item:*/
    .autocomplete-items div:hover {
      background-color: #e9e9e9;
    }

    /*when navigating through the items using the arrow keys:*/
    .autocomplete-active {
      background-color: DodgerBlue !important;
      color: #ffffff;
    }

    #innerdiv {
      height: 400px;
      width:
    }
    #add-btn{
      border-radius: 10px;
      
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include 'header.php' ?>
  <?php include 'sidebar.php' ?>
  <!-- ======= Sidebar ======= -->
  <!-- End Sidebar-->


  <?php $user = $_SESSION['display_name'];
  $branch = $_SESSION['branch'];
  $date = date("Y-m-d");



  ?>

  <main id="main" class="main">

    <div class="pagetitle mb-1">
      <h1>Add Intend</h1><br>


    </div><!-- End Page Title -->
    <div class="card w-75 ">
      <div class="card-body mt-3 ">
        <div id="innerdiv" >

          <div class="autocomplete">

            Product: <input id="product" type="text" name="product" placeholder="Product">

            Quantity:<input type="number" id="quantity" placeholder="Quantity"
              title="Type in the required quantity"></input>
            <input type="hidden" id="product_id" value="" />

            <button class="btn  btn-dark text-white " id="add-btn" onclick="addrow(this)">Add</button>

          </div>


          <div class="overflow-auto mt-2" style="height:325px;" >
            <table border="1" id="table" class="table table-striped  w-100  ">
              <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th> </th>
              </tr>

            </table>
          </div>

        </div> 
        <div class="text-end">
        <button class="btn  btn-dark text-white " onclick="load()">submit</button>
        </div>
      </div>
    </div>

    <script>

      var products = [

      ];

      /***
       * fetching products from database  
       * adding it to products array
       */
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function (data) {
        var data = JSON.parse(this.responseText);
        for (let i = 0; i < data.length; i++) {
          var obj = { id: data[i].ID, name: data[i].product_name };

          products.push(obj);
        }

      }
      xhttp.open("GET", "api/getproducts.php", true);
      //xhttp.setRequestHeader("Content-type", "application/json");
      xhttp.send();





      var name = "<?php echo $user; ?>";
      var branch = "<?php echo $branch; ?>";
      var date = "<?php echo $date; ?>";

      var indent = {
        branch: branch,
        created_date: date,
        created_by: name,
        items: [

        ]
      }

      // console.log("indent", indent);





      function addrow() {
        //var delete1="<button type="submit">Delete</button>";
        var tablerow = document.getElementById("table");
        var product = document.getElementById("product").value;
        var quantity = document.getElementById("quantity").value;
        var id = document.getElementById("product_id").value;
        if (!product) {
          alert("please enter product name");
          return;
        }
        if (!quantity) {
          alert("please enter quantity");
          return;
        }

        indent.items.push(
          { productId: id, quantity: quantity }
        );
        //console.log("indent - updated", indent);


        var row = tablerow.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = product;
        cell2.innerHTML = quantity;
        cell3.innerHTML = "<a onclick='deleterow(this)'> <i class='bi bi-trash3'  style='font-size:25px;'></i></a>";


        clear();
      }
      function load() {
        senddata(indent);
      }

      /* Submit data to server */
      function senddata(indent) {

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function (data) {
          document.getElementById('res').innerHTML = this.responseText;
        }


        xhttp.open("POST", "api/addintend.php", true);
        xhttp.setRequestHeader("Content-type", "application/json");
        xhttp.send(JSON.stringify(indent));

      }


      function clear() {
        document.getElementById("product").value = "";
        document.getElementById("quantity").value = "";
        document.getElementById("product").focus();
      }

      function deleterow(row) {
        var index = row.parentNode.parentNode.rowIndex;
        document.getElementById("table").deleteRow(index);

      }

      /**
       * autocomplete input product feild
       */
      function autocomplete(inp) {
        let arr = products;
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function (e) {
          var a, b, i, val = this.value;
          /*close any already open lists of autocompleted values*/
          closeAllLists();
          if (!val) {
            return false;
          }
          currentFocus = -1;
          /*create a DIV element that will contain the items (values):*/
          a = document.createElement("DIV");
          a.setAttribute("id", this.id + "autocomplete-list");
          a.setAttribute("class", "autocomplete-items");
          /*append the DIV element as a child of the autocomplete container:*/
          this.parentNode.appendChild(a);
          /*for each item in the array...*/

          arr.forEach(element => {

            //If entered value is part of element
            if (element.name.substr(0, val.length).toUpperCase() == val.toUpperCase()) {
              //Container div for popup
              const child = addChildElement(element, val);

              child.addEventListener("click", function (e) {
                /*insert the value for the autocomplete text field:*/
                inp.value = this.querySelector("#name").value;
                //this.getElementById
                document.getElementById("product_id").value = this.querySelector("#id").value;
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
              }
              );

              a.appendChild(child);


            }
          });


        });


        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function (e) {
          var x = document.getElementById(this.id + "autocomplete-list");
          if (x) x = x.getElementsByTagName("div");
          if (e.keyCode == 40) {
            /*If the arrow DOWN key is pressed,
            increase the currentFocus variable:*/
            currentFocus++;
            /*and and make the current item more visible:*/
            addActive(x);
          } else if (e.keyCode == 38) { //up
            /*If the arrow UP key is pressed,
            decrease the currentFocus variable:*/
            currentFocus--;
            /*and and make the current item more visible:*/
            addActive(x);
          } else if (e.keyCode == 13) {
            /*If the ENTER key is pressed, prevent the form from being submitted,*/
            e.preventDefault();
            if (currentFocus > -1) {
              /*and simulate a click on the "active" item:*/
              if (x) x[currentFocus].click();
            }
            document.getElementById("quantity").focus();

          }
        });

        // Add child element to autocomplete list
        function addChildElement(ele, val) {
          let itemElement;
          itemElement = document.createElement("DIV");
          /*make the matching letters bold:*/
          itemElement.innerHTML = "<strong>" + ele.name.substr(0, val.length) + "</strong>";
          itemElement.innerHTML += ele.name.substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          itemElement.innerHTML += "<input type='hidden' id='name' value='" + ele.name + "'>";
          itemElement.innerHTML += "<input type='hidden' id='id' value='" + ele.id + "'>";

          return itemElement;
        }

        function addActive(x) {
          /*a function to classify an item as "active":*/
          if (!x) return false;
          /*start by removing the "active" class on all items:*/
          removeActive(x);
          if (currentFocus >= x.length) currentFocus = 0;
          if (currentFocus < 0) currentFocus = (x.length - 1);
          /*add class "autocomplete-active":*/
          x[currentFocus].classList.add("autocomplete-active");
        }

        function removeActive(x) {
          /*a function to remove the "active" class from all autocomplete items:*/
          for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
          }
        }

        function closeAllLists(elmnt) {
          /*close all autocomplete lists in the document,
          except the one passed as an argument:*/
          var x = document.getElementsByClassName("autocomplete-items");
          for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
              x[i].parentNode.removeChild(x[i]);
            }
          }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
          closeAllLists(e.target);
        });
      }


      /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
      autocomplete(document.getElementById("product"));

      const qty = document.getElementById("quantity");

      qty.addEventListener("keydown", function (e) {
        if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          document.getElementById("add-btn").click();


        }
      });







    </script>






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