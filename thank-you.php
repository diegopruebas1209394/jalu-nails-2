<?php
session_start();
error_reporting(0);

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JaLu Nails</title>
	<link href="/jalu-nails/images/logo_nails.ico" rel="icon">

<!-- NAVBAR-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

	<link rel="manifest" href="manifest.json">
	<!--Tema para android - define el color para la barra de direcciones-->
	<meta name="theme-color" content="#F5EDBC" />

	
  </head>
  <body>
	   <?php include_once('includes/header.php');?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg-2.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5">
            <h2 class="mb-0 bread">Gracias</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> Gracias<span> <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-no-pb">
    	<div class="container">
    		<div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-6 text-center heading-section ftco-animate">
          	<h4 class="w3ls_head">Gracias por aplicar, su número de cita es <?php echo $_SESSION['aptno'];?> </h4>
        </div>
    	</div>

		<!-- GALERIA  -->
			<div class="container-fluid p-0">
    		<div class="row no-gutters">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Cualquier</span>
	    					<h3>Estilo</h3>
	    				</div>
	    				<a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-2.png" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Consiéntete</span>
	    					<h3>En Tu Boda.</h3>
	    				</div>
	    				<a href="images/work-2.png" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-3.png" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Randiante</span>
	    					<h3>En Tu Boda.</h3>
	    				</div>
	    				<a href="images/work-3.png" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-4.png" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Se</span>
	    					<h3>Única</h3>
	    				</div>
	    				<a href="images/work-4.png" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-5.png" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Sorprende</span>
	    					<h3>A Cual Quiera</h3>
	    				</div>
	    				<a href="images/work-5.png" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Luce </span>
	    					<h3>Elegante</h3>
	    				</div>
	    				<a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Un Estilo</span>
	    					<h3>Natural</h3>
	    				</div>
	    				<a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-8.png" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Sorprende</span>
	    					<h3>En Tus XV Años</h3>
	    				</div>
	    				<a href="images/work-8.png" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    		</div>
    	</div>
		</section>

    <?php include_once('includes/footer_2.php');?>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>