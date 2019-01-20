<?php 
  session_start();

  if(!isset($_SESSION['userLogged']))
  {
    header('Location: index.php');
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

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="../app/css/myCSS/myStyle.css">
  </head>
  <body>
    <?php 
    include_once("../View/MainView.php");
    addNavbar();
    ?>

    <div id='usermenu'>
      <ul>
        <li><a href='indexUserLogged.php'>Mój profil</a></li>
        <li><a href='drivers.php'>Kierowcy</a></li>
        <li class="active"><a href='#'>Samochody</a></li>
        <li><a href='transports.php'>Transporty</a></li>
      </ul>
    </div>
    <div id='insert-button'>
      <a class="link" href="insert.php?table=samochody">Dodaj nowy pojazd</a>
    </div>
    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <?php 
            require_once "../Model/DatabaseQuery.php";
            showCarsData();
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

    <script src="../app/vendor/jquery/jquery-3.2.1.min.js"></script>
	  <script src="../app/vendor/bootstrap/js/popper.js"></script>
    <script src="../app/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../app/vendor/select2/select2.min.js"></script>
    <script src="js/table/main.js"></script>
    
  </body>
</html>