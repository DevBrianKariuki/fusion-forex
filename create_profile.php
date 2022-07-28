<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'forex') or die("Couldn't connect to the database");

if (isset($_SESSION['email'])) {

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome - Fusion Forex</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="align-items-center">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">FUSION FOREX</a></h1>

      <nav id="navbar" class="navbar" style="height: 30%;">
        <ul>
          <li><a class="text-right" style="font-size: 12px"><?php echo $_SESSION['email']  ?></a></li>
          <li><a class="text-right" style="font-size: 12px" href="./includes/logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <h2 class="text-center"> <?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName']; ?></h2>
        <?php //echo $Ip ?>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Home Section ======= -->
    <section class="inner-page">
      <div class="container text-center"  >
          <div class="container" style="background-color: white; width: 100%">
            <div class="">
              
            </div>
              <div class="main-body">
                    <div class="row gutters-sm">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                              <div class="mt-3 mb-4">
                                <img src="assets/img/team/team-3.jpg"
                                                      class="rounded-circle img-fluid" style="width: 170px; margin-top: -10px" />
                                                  </div>
                              <div class="mt-3">
                                <h4><b><?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName']; ?></b></h4>
                                <p class="text-secondary mb-1" style="font-family: nunito"><?php echo $_SESSION['email'] ?></p>
                                <p class="text-muted font-size-sm" style="font-family: poppins"><?php echo $_SESSION['phone'] ?></p>
                                <p class="text-muted font-size-sm" style="font-family: poppins">Thika, Nairobi</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card mt-3">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                              <h6 class="mb-0"></h6>
                              <span class="text-info text-center"><small><i>Last login: <?php echo $_SESSION['login-time'] ?> &nbsp; IP: <?php echo $_SESSION['IP'] ?></i></small></span>

                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="card mb-3">
                          <div class="alert alert-info">
                            Please input your Metatrader account details below
                          </div>
                          <div class="card-body">
                            <form action="./includes/upload-details.php" method="POST">
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-1 mt-2">Select Metatrader<span style="color: red">*</span></h6>
                              </div>
                              <div class="col-sm-9 text-secondary" style="font-family: poppins">
                                <div class="input-group">
                                    <select id="broker" name="metatrader" data-default="Select MetaTrader" style="width: 100%; border-radius: 50px; font-size: 12px; font-family: poppins; color: #555; padding:5px 5px 5px 20px; border-color: grey">
                                      <option value="MetaTrader 4">MetaTrader 4</option>
                                      <option value="MetaTrader 5">MetaTrader 5</option>
                                    </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0 mt-4">Server<span style="color: red">*</span></h6>
                              </div>
                              <div class="col-sm-9 text-secondary mt-3" style="font-family: poppins">
                                <div class="input-group mb-2">
                                  <input style="width: 100%; border-radius: 50px; font-size: 12px; font-family: poppins; color: #555; padding-left: 20px; border-color: grey" name="server" type="text" class="form-control" placeholder="Metatrader Server" required>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0 mt-4" >Login ID<span style="color: red">*</span></h6>
                              </div>
                              <div class="col-sm-9 text-secondary mt-3" style="font-family: poppins">
                                <input style="width: 100%; border-radius: 50px; font-size: 12px; font-family: poppins; color: #555; padding-left: 20px; border-color: grey" name="loginid" type="text" class="form-control" placeholder="Login ID" required>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0 mt-4">Trading Password<span style="color: red">*</span></h6>
                              </div>
                              <div class="col-sm-9 text-secondary mt-3" style="font-family: poppins">
                                <input style="width: 100%; border-radius: 50px; font-size: 12px; font-family: poppins; color: #555; padding-left: 20px; border-color: grey" name="password" type="text" class="form-control" placeholder="Trading Password" required>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0 mt-4">Confirm Trading Password<span style="color: red">*</span></h6>
                              </div>
                              <div class="col-sm-9 text-secondary mt-3 mb-2" style="font-family: poppins">
                                <input style="width: 100%; border-radius: 50px; font-size: 12px; font-family: poppins; color: #555; padding-left: 20px; border-color: grey" name="confirm-password" type="text" class="form-control" placeholder=" Confirm Trading Password" required>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                <button class="btn btn-primary" name="upload" type="submit" style="width: 200px; border-radius: 50px"><small>Upload</small></button>
                              </div>
                            </div>
                            </form>
                          </div>
                        </div>

                      </div>
                    </div>

                  </div>
              </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include './includes/footer.php'; ?>
  <!--===== End Footer ===== -->

  <script>
    function checkPassword() {
      const password1 = document.getElementById('pass1').value;
      const password2 = document.getElementById('pass2').value;

      if (password1 != password2) {
        document.getElementById("error-text").style.display = "block";
      }else if (password1 === password2){
        document.getElementById("error-text").style.display = "none";
      }

    }
  </script>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php

}else{
  header("Location: ./login.php");
}


?>
