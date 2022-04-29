<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sipla - Sistemas de Climatización">
  <meta name="author" content="Dimarketing">

  <!-- Favicon -->   
  <link href="./images/icon/icon.png" rel="shortcut icon"/>

  <title>Sipla - Sistemas de Climatización</title> 

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
      echo(str_replace(' ', '%20', 'Me interesa un Sistema de Climatización')) ?>');" 
      >
        <p><i class="fab fa-whatsapp"></i></p><h2>cotiza un sistema</h2>
    </button>

    <?php include("./php/head.php");?>

    <div class="slider-00">
      <div id="carouselExampleControls" class="carousel carousel-2 slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active ">
            <div class="box-slider">
              <img class="d-block w-100 ban-pc" src="./images/banner/banner_9.jpg">
              <img class="d-block w-100 ban-mobil" src="./images/banner/banner_9_m.jpg">
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="box-01">
      <div class="row">
        <div class="col-md-7">
          <h3>Sistemas de Climatización</h3>
          <p>Evita las bajas de temperaturas en el interior del invernadero para no afectar el cultivo.</p>
          <ul>
            <li><i class="fab fa-envira"></i> Estabilidad de las producciones a lo largo del año.</li>
            <li><i class="fab fa-envira"></i> Manejo de la temperatura.</li>
            <li><i class="fab fa-envira"></i> Montaje de equipos para climatizar el interior del invernadero.</li>
          </ul>
        </div>
        <div class="col-md-5">
        </div>
      </div>
    </div>

    <div class="box-03" style="background: #f1f1f1;">

      <div class="row" style="justify-content: center;">

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/meteorology-2.svg">
            <p>Controlas las temperaturas adecuadas para el cultivo.</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/seo-and-web-2.svg">
            <p>Ahorro de energia.</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/fit.svg">
            <p>Genera cultivos todo el año.</p>
          </div>
        </div>


      </div>
    </div>

    <div class="box-05">
      <div class="row">
        <div class="col-md-12">
          <h2>Aplicaciones</h2>
          <ul>  
            <li data-toggle="modal" data-target="#modal-campo"  >
              <span>Invernaderos </span>
              <img src="./images/img/greenhouse_3.jpg">
            </li>
            <li data-toggle="modal" data-target="#modal-campo"  >
              <span>Agrícultura </span>
              <img src="./images/img/greenhouse_3.jpg">
            </li>
            <li data-toggle="modal" data-target="#modal-campo"  >
              <span>Hogares</span>
              <img src="./images/img/greenhouse_4.jpg">
            </li>
            <li data-toggle="modal" data-target="#modal-campo" >
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

        <div class="modal-content">
          
          <i class="far fa-times-circle" data-dismiss="modal" style="display: none;"></i>

          <div class="slider-00">
            <div id="carouselExampleControls_4" class="carousel carousel-2 slide" data-ride="carousel" >
              <div class="carousel-inner">


                <div class="carousel-item active">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/clima/clima_1.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/clima/clima_2.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls_4" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls_4" role="button" data-slide="next">
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
