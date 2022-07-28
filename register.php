<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register - Fusion Forex</title>
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

      <nav id="navbar" class="navbar" style="height: 25%;">
        <ul>
          <li><a class="text-right" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <h2 class="text-center">SIGN UP</h2>
        <?php if (isset($_GET['error'])) { ?>
              <div class="alert alert-danger text-center">
                <?php echo $_GET['error']; ?>
              </div>
        <?php } ?>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Register Section ======= -->
    <section id="portfolio-details" class="portfolio-details text-center" style="background-image: url('./assets/img/hero.png');">
      <div class="container">

        <div class="row gy-8">
          <div class="col-lg-3" class="text-center">
          </div>

          <div class="col-lg-6" class="text-center" style="background-color: white; border-radius: 10px">
            <div class="portfolio-info">
              <form action="includes/register.php" method="POST">
                <h3>Create an account</h3>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="border-radius: 50px; background-color: #e43c5c; color: white;"><i class="bi bi-envelope"></i></span>
                    </div>
                    <input style="border-radius: 50px; font-size: 12px; font-family: poppins" name="firstname" type="text" class="form-control" placeholder="First name" required>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="border-radius: 50px; background-color: #e43c5c; color: white;"><i class="bi bi-envelope"></i></span>
                    </div>
                    <input style="border-radius: 50px; font-size: 12px; font-family: poppins" name="lastname" type="text" class="form-control" placeholder="Last name" required>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="border-radius: 50px; background-color: #e43c5c; color: white;"><i class="bi bi-envelope"></i></span>
                    </div>
                    <input style="border-radius: 50px; font-size: 12px; font-family: poppins" name="email" type="email" class="form-control" placeholder="Email address" required>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="border-radius: 50px; background-color: #e43c5c; color: white;"><i class="bi bi-phone"></i></span>
                    </div>
                    <input style="border-radius: 50px; font-size: 12px; font-family: poppins" name="phone" type="tel" class="form-control" placeholder="Phone" required>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="border-radius: 50px; background-color: #e43c5c; color: white;"><i class="bi bi-key"></i></span>
                    </div>
                    <input style="border-radius: 50px; font-size: 12px; font-family: poppins" name="password" id="password" oninput="passCheck()"  type="password" class="form-control" placeholder="Password" required>
                </div>
                <div id="error-text1" class="text-danger text-left" style="font-family: poppins; font-size: 12px">Password less than 6 characters</div>
                <script>document.getElementById('error-text1').style.display = 'none'</script>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="border-radius: 50px; background-color: #e43c5c; color: white;"><i class="bi bi-key"></i></span>
                    </div>
                    <input style="border-radius: 50px; font-size: 12px; font-family: poppins" name="password1" oninput="checkPassword()" onfocus="checkPassword()" id="password1" type="password" class="form-control" placeholder="Confirm Password" required><br>
                </div>
                <div id="error-text" class="text-danger text-left" style="font-family: poppins; font-size: 12px">Passwords do not match</div>
                <script>document.getElementById('error-text').style.display = 'none'</script>
                <div class="form-group text-left mt-2">
                    <div class="checkbox" style="padding: 10px; display: inline-flex;">
                        <input type="checkbox" name="checkboxfill" id="checkbox-fill-a1" style="width: 15px; height: 15px; margin: 5px">
                        <label for="checkbox-fill-a1" class="cr" style="font-family: nunito; font-size: 15px"> I have read and understood the <a href="index.php#terms"> Terms and Conditions</a></label>
                    </div>
                </div>
                <div class="text-center">
                    <button style="width: 80%; border-radius: 50px; font-family: poppins; margin-top: 10px; margin-left: 20px; background-color: #e43c5c; border: none;" type="submit" name="register" class="btn btn-primary text-center">Sign up</button>
                </div>
                <div class="social-links text-center text-md-right pt-8" style="margin-top: 25px">
                    <p style="font-family: nunito; margin-bottom: -15px; font-size: 15px;">Sign up with socials:</p>
                    <button style="border-radius: 50%; margin: 25px; border: none; background-color: #e43c5c; color: white; width: 45px; height: 45px"><i class="bx bxl-google"></i></button>
                    <button style="border-radius: 50%; margin: 20px; border: none; background-color: #e43c5c; color: white; width: 45px; height: 45px"><i class="bx bxl-facebook"></i></button>
                    <button style="border-radius: 50%; margin: 20px; border: none; background-color: #e43c5c; color: white; width: 45px; height: 45px"><i class="bx bxl-twitter"></i></button>
                </div>
              </form>
              <div>
                <p style="font-family: nunito; font-size: 14px; margin-top: 10px"><a href="login.php">Already have an account?</a></p>
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

  <script>

    function passCheck() {
      let password = document.getElementById('password').value;

      if (password.length < 6) {
          document.getElementById('error-text1').style.display = 'block';
        }else{
          document.getElementById('error-text1').style.display = 'none';
        }
    }
      
    function checkPassword() {
      let password = document.getElementById('password').value;
      let password1 = document.getElementById('password1').value;

      if (password != password1) {
        document.getElementById('error-text').style.display = 'block';
      }else{
        document.getElementById('error-text').style.display = 'none';
      }


    }

  </script>

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