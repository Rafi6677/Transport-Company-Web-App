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
    <link rel="stylesheet" href="../app/css/stylev2.css">
  </head>
  </head>
  <body>
    <?php 
      include_once("../View/MainView.php");
      addNavbar();
      addMainSection();
      addFooter();
    ?>

    <!-- loader -->
    

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