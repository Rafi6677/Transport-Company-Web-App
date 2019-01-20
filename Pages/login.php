<?php 
  session_start();

  if((isset($_SESSION['userLogged'])) && ($_SESSION['userLogged'] == true))
  {
    header('Location: indexUserLogged.php');
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Royal Estate - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="../app/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../app/css/animate.css">
    
    <link rel="stylesheet" href="../app/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../app/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../app/css/magnific-popup.css">

    <link rel="stylesheet" href="../app/css/aos.css">

    <link rel="stylesheet" href="../app/css/ionicons.min.css">

    <link rel="stylesheet" href="../app/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../app/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../app/css/flaticon.css">
    <link rel="stylesheet" href="../app/css/icomoon.css">
    <link rel="stylesheet" href="../app/css/style.css">
    <link rel="stylesheet" href="../app/css/MyCSS/footer.css">
    <link rel="stylesheet" href="../app/css/MyCSS/login.css">
  </head>
  <body>
    <?php 
      include_once("../View/MainView.php");
      addNavbar();
    ?>

    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <h2 class="header-mine">Zaloguj się</h2>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <!-- formularz -->
            <form action="../Controller/checkLogin.php" method="POST" class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" name="login" class="form-control" placeholder="Login">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Hasło">
              </div>
              <div class="form-group">
                <input type="submit" value="Zaloguj" name="submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
          <?php 
            if(isset($_SESSION['loginError']))
            {
              echo $_SESSION['loginError'];
            } 
          ?> 
      </div>
    </section>
    
    <?php 
      addFooter();
    ?>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="../app/js/jquery.min.js"></script>
    <script src="../app/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../app/js/popper.min.js"></script>
    <script src="../app/js/bootstrap.min.js"></script>
    <script src="../app/js/jquery.easing.1.3.js"></script>
    <script src="../app/js/jquery.waypoints.min.js"></script>
    <script src="../app/js/jquery.stellar.min.js"></script>
    <script src="../app/js/owl.carousel.min.js"></script>
    <script src="../app/js/jquery.magnific-popup.min.js"></script>
    <script src="../app/js/aos.js"></script>
    <script src="../app/js/jquery.animateNumber.min.js"></script>
    <script src="../app/js/bootstrap-datepicker.js"></script>
    <script src="../app/js/jquery.timepicker.min.js"></script>
    <script src="../app/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="../app/js/google-map.js"></script>
    <script src="../app/js/main.js"></script>
    
  </body>
</html>