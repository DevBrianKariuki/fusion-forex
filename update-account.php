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
        <h2 class="text-center">Welcome <?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName']; ?></h2>
        <?php //echo $Ip ?>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Home Section ======= -->
    <section id="portfolio-details" class="portfolio-details text-center">
      <div class="container">

        <div class="row align-items-center" >
          <!--========= Trading Details Section ========== -->
          <div class="col-lg-6 text-center" style="background-color: white; border-radius: 10px">
            <div class="portfolio-info">
              <h3>Update your account Details</h3>
              <div class="card-body text-center">

                <form action="includes/update-details.php" method="POST" enctype="multipart/form-data">
                <div class="mt-3 mb-4">
                  <p style="font-style: italic; font-size: 15px">Please enter your trading account details below</p>
                  <div class="input-group mb-2">
                      <select id="broker" name="broker" data-default="" style="width: 100%; border-radius: 50px; font-size: 12px; font-family: poppins; color: grey; padding: 5px; border-color: grey">
                          <option value="select broker">Select Broker</option>
                          <option value="MetaTrader">MetaTrader</option>
                          <option value="HotForex">HotForex</option>
                          <option value="FxPesa">FxPesa</option>
                      </select>
                  </div>
                  <div class="input-group mb-2">
                      <input style="border-radius: 50px; font-size: 12px; font-family: poppins" name="account" type="text" class="form-control" placeholder="Account ID or Email">
                  </div>
                  <div class="input-group mb-2">
                      <input style="border-radius: 50px; font-size: 12px; font-family: poppins" name="password" id="pass1" type="text" class="form-control" placeholder="Account Password">
                  </div>
                  <div class="input-group mb-2">
                      <input style="border-radius: 50px; font-size: 12px; font-family: poppins" name="password1" id="pass2" onfocus="checkPassword()" oninput="checkPassword()" type="text" class="form-control" placeholder="Confirm Account Password">
                  </div>
                  <div id="error-text" class="text-danger" style="font-family: poppins; font-size: 13px"><i>Passwords do not match</i></div>
                  <script>document.getElementById("error-text").style.display = "none";</script>
                  <p style="font-style: italic; font-size: 15px">Or upload a screenshot of the account details</p>
                  <div class="input-group mb-2">
                      <input style="border-radius: 50px; font-size: 12px; font-family: poppins" name="photo" type="file" class="form-control">
                  </div>
                  <div class="text-center">
                    <button style="width: 80%; border-radius: 50px; font-family: poppins; margin-top: 10px; margin-left: 10px" type="submit" name="upload" class="btn btn-primary text-center">Upload</button>
                </div>
              </form>

                <!-- Posted Account Details -->
                <div class="mt-5" style="font-size: 15px; font-family: nunito">
                  <p>Broker: <span class="text-muted"><?php echo $rows['broker'] ?></span></p>
                  <p>Email or Account ID: <span class="text-muted"><?php echo $rows['accountName'] ?></span></p>
                  <p>Password: <span class="text-muted"><?php echo $rows['accountPassword'] ?></span></p>
                </div>
                <div class="text-center">
                    <button style="width: 70%; border-radius: 50px; font-family: poppins; margin-top: 10px; margin-left: 10px" type="submit" class="btn btn-primary text-center">Update Details</button>
                </div>
                <!-- Payment supposed to pay -->
                <div>
                  <div class="mt-5"  style="font-size: 14px">
                    <span>This weeks payment </span><span class="text-success text-right"> Ksh 500</span>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <!--========= Account Details Section ========== -->

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
