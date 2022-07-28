<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - Fusion Forex</title>
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

      <!--<h1 class="logo"><a href="index.php">FUSION FOREX</a></h1>-->
      <a href="index.php"><img src="assets/img/logo.png" width="150" height="50" alt="Fusion Forex Logo"></a>

      <nav id="navbar" class="navbar" style="height: 25%;">
        <ul>
          <li><a class="text-right" href="register.php">Sign up</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <h2 class="text-center">SIGN IN</h2>
        <?php if (isset($_GET['error'])) { ?>
              <div class="alert alert-danger text-center">
                <?php echo $_GET['error']; ?>
              </div>
        <?php } ?>
        

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Login Section ======= -->
    <section id="portfolio-details" class="portfolio-details text-center" style="background-image: url('./assets/img/hero.png');">
      <div class="container">

        <div class="row gy-8">
          <div class="col-lg-3" class="text-center"></div>

          <div class="col-lg-6" class="text-center" style="background-color: white; border-radius: 10px">
            <div class="portfolio-info">
              <form action="includes/login.php" method="POST">
                <h3>Login into your account</h3>
                <div class="input-group mb-2" style="margin-top: 30px">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="border-radius: 50px; background-color: #e43c5c; color: white;"><i class="bi bi-envelope"></i></span>
                    </div>
                    <input style="border-radius: 50px; font-size: 12px; font-family: poppins" name="email" type="email" class="form-control" placeholder="Email address" required>
                </div>
                <div class="input-group mb-2" style="margin-top: 30px">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="border-radius: 50px; background-color: #e43c5c; color: white;"><i class="bi bi-key"></i></span>
                    </div>
                    <input style="border-radius: 50px; font-size: 12px; font-family: poppins" name="password" type="password" class="form-control" placeholder="***********" required>
                </div>
                <div class="text-center">
                    <button style="width: 80%; border-radius: 50px; font-family: poppins; background-color: #e43c5c; color: white; margin-top: 10px; margin-left: 20px;" name="login" type="submit" class="btn text-center">Sign in</button>
                </div>
                <div class="social-links text-center text-md-right pt-8" style="margin-top: 25px; margin-bottom: -20px">
                    <p style="font-family: nunito; margin-bottom: -15px; font-size: 15px;">Login with socials:</p>
                    <button style="border-radius: 50%; margin: 25px; border: none; background-color: #e43c5c; color: white; width: 45px; height: 45px"><i class="bx bxl-google"></i></button>
                    <button style="border-radius: 50%; margin: 20px; border: none; background-color: #e43c5c; color: white; width: 45px; height: 45px"><i class="bx bxl-facebook"></i></button>
                    <button style="border-radius: 50%; margin: 20px; border: none; background-color: #e43c5c; color: white; width: 45px; height: 45px"><i class="bx bxl-twitter"></i></button>
                </div>
              </form>
              <hr style="color: grey">
              <div>
                <p style="font-family: nunito; font-size: 14px; margin-top: 10px"><a href="reset_password.php">Forgot Password?</a> <span style="color: grey">| </span><a href="register.php">Create account</a></p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include './includes/footer.php'; ?>
  <!-- End Footer -->

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