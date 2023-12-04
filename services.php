<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');


  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JaLu Nails-Servicios</title>
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

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg-2_S.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5">
            <h2 class="mb-0 bread">Servicios</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Servicios <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
       

    <section class="ftco-section ftco-pricing">
			<div class="container">
				<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          <!--	<h1 class="big">Precios</h1>-->
          	<span class="subheading">Precios</span>
            <h2 class="mb-4">Precio de Nuestros Servicios</h2>
            <p>Tenemos un gran pull de servicios para tu deleite, sabemos que te encantará disfrutar de nuestros Servicios</p>
          </div>
        </div>
            <table class="table table-bordered"> <thead> <tr> <th>#</th> <th>Servicios</th> <th>Precios</th> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  tblservices");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

             <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['ServiceName'];?></td> <td><?php  echo $row['Cost'];?></td> </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
			</div>
		</section>


    <section class="ftco-section ftco-pricing">
			<div class="container">
				<div class="row justify-content-center pb-3">
        <div class="col-md-10 heading-section text-center ftco-animate">
          <!--	<h1 class="big">Precios</h1>-->
          	<span class="subheading">JaLu Nails</span>
            <h2 class="mb-4">¿En que consisten los servicios?</h2>
            <p>Te ayudaremos a elegir lo mejor para ti.</p>

       <!--CARDS-->
          <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="card h-100" style="width: 15rem;">
                  <img src="images/tecnicas.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Tecnicas</h5>
                    <p class="card-text">La técnica de uñas acrílicas se realizan mezclando polvo acrílico (polímero) con líquido acrílico (monómero). </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tecnicaNails">
                      Conocer Más
                    </button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100" style="width: 15rem;">
                  <img src="images/poly-gel.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Poly Gel</h5>
                    <p class="card-text">Este tipo de uñas tienen un efecto muy natural. Son bastante más flexibles y brillantes y menos duras que las acrílicas. </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#polyGel">
                      Conocer Más
                    </button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100" style="width: 15rem;">
                  <img src="images/press-on.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Press On</h5>
                    <p class="card-text">El término press on hace referencia, precisamente, a la clave de su colocación.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pressOn">
                      Conocer Más
                    </button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100" style="width: 15rem; margin-top:50px;">
                  <img src="images/lujo.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Manicure de Lujo</h5>
                    <p class="card-text">La aesthetic más trendy del momento no sólo se lleva en los outfits, también en las uñas de lujo silencioso. </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#manicureLujo">
                      Conocer Más
                    </button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100" style="width: 15rem; margin-top:50px;" >
                  <img src="images/estudiantes.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Manicure Estudiantes</h5>
                    <p class="card-text">Si eres estudiante, ¡es tu día de suerte!. En Jalu Nails podremos hacer te un precio adecuado para ti.  </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#manicureEstudiante">
                      Conocer Más
                    </button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100" style="width: 15rem; margin-top:50px;">
                  <img src="images/acrilicas.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Acrilicas</h5>
                    <p class="card-text">Retire el acrílico del recipiente en etapa plástica. (Las etapas del acrílico son: arenosa, filamentosa, plástica, y gomosa).</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nailsAcrilicas">
                      Conocer Más
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div> <!--FIN TARJETAS-->
        </div>
      </div>
</section>
         

<!-- MODAL Tecnicas-->          
            
                      <!-- The Modal -->
                      <div class="modal fade" id="tecnicaNails">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Técnicas</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                            <img src="images/tecnicas.jpg" class="rounded mx-auto d-block" alt="...">
                                                              Esta técnica consiste en añadir unas extensiones a las uñas naturales para después decorarlas al gusto de cada uno. 
                                                              Por ejemplo, puede conseguir resultados muy diversos, desde uñas largas o cortas hasta cuadradas, redondeadas o puntiagudas, con cualquier esmalte o técnica de nail art.
                                                              Los productos que se usan no amarillean y consiguen dar un aspecto fuerte y natural. 
                                                              Aunque cabe destacar que no es recomendable su uso en exceso ya que puede debilitar la uña natural.
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
            <!---->  

            <!-- MODAL POLY Gel-->          
            
                      <!-- The Modal -->
                      <div class="modal fade" id="polyGel">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Poly Gel</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                            <img src="images/poly-gel.jpg" class="rounded mx-auto d-block" alt="...">
                                Este tipo de uñas tienen un efecto muy natural. Son bastante más flexibles y brillantes y menos duras que las acrílicas. 
                                Se trata de aplicar un gel directamente en la uña y secarlo con la lámpara led. 
                                Normalmente se necesitan entre 2 y 3 capas de gel, hasta que esta esté firme y resistente.
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
            <!---->


          <!-- MODAL Press On-->          
            
                      <!-- The Modal -->
                      <div class="modal fade" id="pressOn">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Press On</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                            <img src="images/press-on.jpg" class="rounded mx-auto d-block" alt="...">
                            El término <b>press on</b> hace referencia, precisamente, a la clave de su colocación.
                            Que consiste en una ligera presión, sea cual sea el material de adhesión, sin que se
                            genere aire entre la uña postiza y la uña natural para lograr una mejor adherencia.                             
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
            <!---->

         

<!-- MODAL Manicure de Lujo -->          
            
                      <!-- The Modal -->
                      <div class="modal fade" id="manicureLujo">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Manicure de Lujo</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                            <img src="images/lujo.jpeg" class="rounded mx-auto d-block" alt="...">
                            La aesthetic más trendy del momento no sólo se lleva en los outfits, también en las uñas de lujo silencioso.
                            ¡Así es!.En lugar de gritar que tienes una fortuna, sus colores y detalles evocan lo mucho que vales, pero de manera
                             discreta y súper sofisticada a través de polvos cromados, hilos de oro y más.
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
            <!---->  

            <!-- MODAL Manicure de Estudiante-->          
            
                      <!-- The Modal -->
                      <div class="modal fade" id="manicureEstudiante">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Manicure Estudiantes</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                            <img src="images/estudiantes.jpg" class="rounded mx-auto d-block" alt="...">
                            Si eres estudiante, ¡es tu día de suerte!. En Jalu Nails podremos hacer te un precio adecuado para ti.  Dónde podrás elegir los diseños más apropiados para ti. 
                            Recuerda que de entre tantos colores, el que luces es el que mejor te queda. 
                            <b>¡Pregunta para más información¡</b>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
            <!---->


          <!-- MODAL ACRILICAS-->          
            
                      <!-- The Modal -->
                      <div class="modal fade" id="nailsAcrilicas">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Acrilicas</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                            <img src="images/acrilicas.jpg" class="rounded mx-auto d-block" alt="...">
                            La manicura <b>acrílica</b> consiste en colocar unas extensiones y dejarlas secar al aire.
                            Las de gel se consiguen aplicando un esmalte especial en gel sobre la uña y se secan con una lámpara especial.
                            Otra diferencia es la forma de retirado.<br>
                            Retire el acrílico del recipiente en etapa plástica. (Las etapas del acrílico son:<b> arenosa, filamentosa, plástica, y gomosa).</b>       

                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
            <!---->










<?php include_once('includes/footer_2.php');?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script src="/jalu-nails-2/js/app.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Bootstrap 4 JavaScript con Popper.js -->
      <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



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