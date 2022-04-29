<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sipla - Tanques de almacenamiento">
  <meta name="author" content="Dimarketing">

  <!-- Favicon -->   
  <link href="./images/icon/icon.png" rel="shortcut icon"/>

  <title>Sipla - Tanques de almacenamiento</title> 

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- STYLE W -->
    <link href="./css/style.css" rel="stylesheet">

  <!-- slider --> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!--icons--->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  <!--jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!--fonts--->
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  
</head>

  <body>

    <!-- bitton whatsApp-->
    <button class="button-whatsapp" 
      onclick="window.open('https://wa.me/525540602956?text=<?php 
      echo(str_replace(' ', '%20', 'Me interesa un Tanque de almacenamiento')) ?>');" 
      >
        <p><i class="fab fa-whatsapp"></i></p><h2>Cotiza tu tanque</h2>
    </button>

    <?php include("./php/head.php");?>

    <div class="slider-00">
      <div id="tanke_1" class="carousel carousel-2 slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active ">
            <div class="box-slider">
              <img class="d-block w-100 ban-pc" src="./images/banner/banner_6.jpg">
              <img class="d-block w-100 ban-mobil" src="./images/banner/banner_6_m.jpg">
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#tanke_1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#tanke_1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>

    <div class="box-01">
      <div class="row">
        <div class="col-md-7">
          <h3>Tanques de almacenamiento</h3>
          <p>Diseño, cálculo, fabricación y montaje de Tanques con nuestro sistema constructivo a base de herrajes de ensamble atornillables.</p>
          <ul>
            <li><i class="fab fa-envira"></i> Solución integral para tu sistema de almacenamiento.</li>
            <li><i class="fab fa-envira"></i> Membrana de alta duración certificada bajo la norma NSF para la contención agua potable.</li> 
            <li><i class="fab fa-envira"></i> Hechos a la medida de cada uno de nuestros clientes.</li>
            <li><i class="fab fa-envira"></i> Una alternativa sustentable y de alta duración.</li>
            <li><i class="fab fa-envira"></i> Fácil trasportación. </li>
            <li><i class="fab fa-envira"></i> Capacidad desde 12,000 lts. Hasta 1,000,000 lts. </li>
            <li><i class="fab fa-envira"></i> Cumplimos con los requerimientos técnicos y tecnológicos para brindarte el servicio de calidad desde la fabricación hasta la instalación.</li>
          </ul>
        </div>
        <div class="col-md-5">
          <img src="./images/img/tanque_1.png" class="hidden-sm">
          <img src="./images/img/invernadero_4.png" class="hidden-md">
        </div>
      </div>
    </div>

    <div class="box-03">

      <div class="row">

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/cubierta_interor.svg">
            <p>Cubierta interior de larga duración.</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/instalation.svg">
            <p>Fácil instalación</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/fit.svg">
            <p>Totalmente desarmables</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/time.svg">
            <p>Tiempo de entrega récord</p>
          </div>
        </div>

      </div>
    </div>

    <div class="box-03" style="background: #f1f1f1; display: none;">

      <div class="row" style="justify-content: center;">
        
        <div class="col-md-5" style="text-align: center;">
          <h5>Tanques de Campo</h5>
          <div class="box-greenhouse-type" data-toggle="modal" data-target="#modal-campo">
            <span><i class="fas fa-search"></i></span>
            <img src="./images/img/sipla_2.png">
          </div>
        </div>

        <div class="col-md-5" style="text-align: center;">
          <h5>Tanques Urbanos</h5>
          <div class="box-greenhouse-type" data-toggle="modal" data-target="#modal-campo">
            <span><i class="fas fa-search"></i></span>
            <img src="./images/img/sipla_2.png">
          </div>
        </div>

      </div>
    </div>

    <div class="box-05">
      <div class="row">
        <div class="col-md-12">
          <h2>Aplicaciones</h2>
          <ul>  
            <li data-toggle="modal" data-target="#modal-campo">
              <span>Agricultura </span>
              <img src="./images/img/greenhouse_3.jpg">
            </li>
            <li data-toggle="modal" data-target="#modal-campo">
              <span>Ganadería</span>
              <img src="./images/img/tanque_2.jpg">
            </li>
            <li data-toggle="modal" data-target="#modal-campo">
              <span>Hogares</span>
              <img src="./images/img/tanque_3.jpg">
            </li>
            <li data-toggle="modal" data-target="#modal-campo">
              <span>Industrias</span>
              <img src="./images/img/tanque_1.jpg">
            </li>
            <li data-toggle="modal" data-target="#modal-campo">
              <span>Galería</span>
              <img src="./images/img/gallery_1.jpg">
            </li>
          </ul>
        </div>
      </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modal-campo" role="dialog">
      <div class="modal-dialog modal-xl">

        <div class="modal-content ">
          <i class="far fa-times-circle" data-dismiss="modal" style="display: none;"></i>

          <div class="slider-00">
            <div id="carouselExampleControls_1" class="carousel carousel-2 slide" data-ride="carousel" >
              <div class="carousel-inner">


                <div class="carousel-item active">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/tank/tanke_1.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/tank/tanke_2.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/tank/tanke_3.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/tank/tanke_4.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/tank/tanke_5.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/tank/tanke_6.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/tank/tanke_7.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/tank/tanke_8.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>


              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls_1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls_1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

        </div>

      </div>
    </div>



    <?php include('./php/footer.php'); ?>

    <!-- animations -->
    <?php include('./php/arrowup.php'); ?>

  </body>

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

  <!-- Main Javascript File -->
    <script src="js/main.js"></script>
</html>
