<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'forex') or die("Couldn't connect to the database");

if (isset($_SESSION['email']) AND $_SESSION['uploadedId'] = '1') {

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

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!--<link href="assets/css/tabs-css.css" rel="stylesheet">-->
  <script src="assets/vendor/jquery/jquery-3.6.0.js"></script>
  <style>
    .payment ul{
      text-decoration: none;
      list-style: none;
      display: flex;
      justify-content: space-around;
    }

    .payment ul li{
      margin: 10px;
    }

    .payment ul li button{
      border-radius: 40px;
      font-family: nunito;
    }

    #btc-btn{
      color: white;
    }

    #eth-btn{
      color: white;
    }
  </style>

</head>

<body class="align-items-center">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="home.php">FUSION FOREX</a></h1>

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
        <?php if (isset($_GET['success'])) { ?>
              <div class="alert alert-success text-center">
                <?php echo $_GET['success']; ?>
              </div>
        <?php } ?>

        <?php if (isset($_GET['error'])) { ?>
              <div class="alert alert-danger text-center">
                <?php echo $_GET['error']; ?>
              </div>
        <?php } ?>
        
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
                                <p class="text-secondary mb-1" style="font-family: poppins"><?php echo $_SESSION['email'] ?></p>
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
                              <span class="text-success text-center"><small><i>Last login: <?php echo $_SESSION['login-time'] ?> &nbsp; IP: <?php echo $_SESSION['IP'] ?></i></small></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <?php
                        $accountID = $_SESSION['accountID'];
                        $select = "SELECT * FROM `details` WHERE accountID = '$accountID'";
                        $result = mysqli_query($db, $select);

                        if (mysqli_num_rows($result) > 0) {
                          $details = mysqli_fetch_assoc($result);
                        
                      ?>
                      <div class="col-md-8">
                        <div class="card mb-3">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-1 mt-2">Metatrader</h6>
                              </div>
                              <div class="col-sm-9 text-secondary mt-3" style="font-family: poppins">
                                <?php echo $details['metatrader']; ?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0 mt-4">Server</h6>
                              </div>
                              <div class="col-sm-9 text-secondary mt-3" style="font-family: poppins">
                                 <?php echo $details['server']; ?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0 mt-4">Login ID</h6>
                              </div>
                              <div class="col-sm-9 text-secondary mt-3" style="font-family: poppins">
                                 <?php echo $details['loginID']; ?>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0 mt-4">Trading Password</h6>
                              </div>
                              <div class="col-sm-9 text-secondary mt-3 mb-2" style="font-family: poppins">
                                 <?php echo $details['password']; ?>
                              </div>
                            </div>
                          <?php } ?>
                            <hr>
                            <div class="row">
                              <div class="col-sm-12">
                                <a class="btn btn-primary" href="edit_profile.php"  style="width: 200px; background-color: #e43c5c;border:none; border-radius: 50px"><small>Update Details</small></a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row gutters-sm">
                          <div class="col-sm-12 mb-3">
                            <div class="card h-100">
                              <div class="card-title mb-3 mt-3">
                                <b>Due Payment -&nbsp;</b>
                                <span class="text-right align-items-right text-success" style="font-size: "><b>$200</b></span>
                              </div>

<!--=============================================================================================================================--->

                                 <div class="payment" >
                                   <ul class="text-center">
                                     <li><button id="btc-btn" class="btn btn-warning btn-small">Bitcoin</button></li>
                                     <li><button id="eth-btn" class="btn btn-info btn-small">Ethereum</button></li>
                                     <li><button id="usdt-btn" class="btn btn-primary btn-small">USDT</button></li>
                                   </ul>
                                 </div>
<!--=============================================================================================================================--->
                              <div class="addresses">
                                <div class="card p-5 m-3" id="bitcoin" style="border: none;">
                                  <div class="qr-btc">
                                    <a target="target_blank" href="assets/img/wallets/BTC/btc-qr.png"><img src="assets/img/wallets/BTC/btc-qr.png" width="150" height="150"></a>
                                  </div>
                                  <span class="" style="font-family: nunito">Deposit Bitcoin to this wallet address:</span>
                                  <span class="m-3 p-3"><b>3DCMz2A6AZx3oc2SSzqyBi2pZ1HY5Q8MPP</b></span><br>
                                  <button class="btn btn-small btn-primary" style="font-family: nunito">Copy Address</button>
                                  <script>document.getElementById("bitcoin").style.display = "none";</script>
                                </div>


                                <div class="card p-5 m-3" id="ethereum" style="border: none;">
                                  <div class="qr-eth">
                                    <a target="target_blank" href="assets/img/wallets/USDT/etherium/qr-eth.png"><img src="assets/img/wallets/USDT/etherium/qr-eth.png" width="150" height="150"></a>
                                  </div>
                                  <span class="" style="font-family: nunito">Deposit Ethereum to this wallet address:</span>
                                  <span class="m-3 p-3"><b>0x6E6F6f269daa714AED1E6Ba43baa2497db8412a0</b></span><br>
                                  <button class="btn btn-small btn-info" style="font-family: nunito; color: white">Copy Address</button>
                                  <script>document.getElementById("ethereum").style.display = "none";</script>
                                </div>


                                <div class="card m-3" id="usdt" style="border: none;">
                                  <div class="card-title"><b>Tether address</b></div>
                                  <div class="qr-usdt">
                                    <div class="alert alert-warning">
                                      <strong>Only send Tether in the following network(s): TRC-20, ERC-20.</strong> You could lose funds from other currencies or networks.
                                    </div>
                                  </div>
                                  <div class="mt-4" style="justify-content: flex-start;font-family: nunito">
                                    <div class="mb-3">
                                      <h5><b><u>ERC-20</u></b></h5>
                                      <span class="text-left">0x6E6F6f269daa714AED1E6Ba43baa2497db8412a0</span>
                                      <br>
                                      <button class="btn btn-small btn-primary">Copy Address</button>
                                    </div>
                                    <div class="mt-3">
                                      <h5><b><u>TRC-20</u></b></h5>
                                      <span>TX8Eke5zPXdjpE7zCB7AGPjyDtwJovbdKV</span><br>
                                      <button class="btn btn-small btn-primary">Copy Address</button>
                                    </div>
                                  </div>
                                  <script>document.getElementById("usdt").style.display = "none";</script>
                                </div>
                              </div>                            
  

                            </div>
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
    const bitcoin = document.getElementById('bitcoin');
    const btn_btc = document.getElementById('btc-btn');

    const eth = document.getElementById('ethereum');
    const btn_eth = document.getElementById('eth-btn');

    const usdt = document.getElementById('usdt');
    const btn_usdt = document.getElementById('usdt-btn');

    btn_btc.addEventListener('click', () =>{
        bitcoin.style.display = 'block';
        eth.style.display = 'none';
        usdt.style.display = 'none';

    })

    btn_eth.addEventListener('click', () =>{
      
        eth.style.display = 'block';
        bitcoin.style.display = 'none';
        usdt.style.display = 'none';

      
    })



    btn_usdt.addEventListener('click', () =>{
        usdt.style.display = 'block';
        bitcoin.style.display = 'none';
        eth.style.display = 'none';
    
    })



  </script>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery/jquery-3.6.0.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php

}else if(isset($_SESSION['email']) AND $_SESSION['uploadedId'] === '0'){
  header("Location: ../create_profile.php");
}else{
  header("Location: ./login.php");
}


?>
