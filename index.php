<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    $err;
    if (isset($_GET['submit'])) {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'sabas';
        $user = $_GET['username'];
        $pass = $_GET['password'];
        //echo $pass;
        //die();
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM users WHERE username='$user' ";
        $result = mysqli_query($conn, $sql);
        global $row;

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            # var_dump($row);
    

            if ($row['password'] == md5($pass)) {

                session_start();
                $_SESSION['username'] = $user;

                //based on user type, redirect to corresponding section
                $type = $row['usertype'];

                header("Location: $type/index.php");

            } else {
                $err = "Invalid Password";
                //0 header("Location:index.php");
            }
        } else {
            $err = "Invalid Username";
        }


    }



    ?>
    <main>
        <div class="container">

            <section>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <?php if (isset($err)) { ?>
                                <div class="alert alert-danger alert-dismissible fade show mt-2 w-75" role="alert">
                                    <?php   echo $err;   ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php } ?>



                            <div class="d-flex justify-content-center py-4 w-75 ">

                                <img src="assets/img/SABAS PNG.png" height="150" width="300" alt="">


                            </div>


                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p>
                                    </div>

                                    <form class="row g-3 needs-validation" action="index.php" method="GET" novalidate>

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">

                                                <input type="text" name="username" class="form-control"
                                                    id="yourUsername" required>
                                                <div class="invalid-feedback">Please enter your username.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="yourPassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <!-- <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>-->
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit" name="submit"
                                                onclick="validate()">Login</button>
                                        </div>
                                        <!-- <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
                    </div> -->
                                    </form>

                                </div>
                            </div>

                            <!-- <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ 
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div> -->

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->
    <script>
        function validate() {
            var username = document.getElementById('yourUsername').value;
            var password = document.getElementById('yourPassword').value;
            if (!username) {
                alert("please enter your username");
            } else if (!password) {
                alert("please enter your password");

            }
        }
    </script>

</body>

</html>