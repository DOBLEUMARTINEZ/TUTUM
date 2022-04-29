<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sipla - Sistema hidropónico">
  <meta name="author" content="Dimarketing">

  <!-- Favicon -->   
  <link href="./images/icon/icon.png" rel="shortcut icon"/>

  <title>Sipla - Sistema hidropónico</title> 

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
      echo(str_replace(' ', '%20', 'Me interesa un Sistema Hidropónico')) ?>');" 
      >
        <p><i class="fab fa-whatsapp"></i></p><h2>Contáctanos</h2>
    </button>

    <?php include("./php/head.php");?>

    <div class="slider-00">
      <div id="carouselExampleControls" class="carousel carousel-2 slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active ">
            <div class="box-slider">
              <img class="d-block w-100 ban-pc" src="./images/banner/banner_4.jpg">
              <img class="d-block w-100 ban-mobil" src="./images/banner/banner_4_m.jpg">
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="box-01">
      <div class="row">
        <div class="col-md-7">
          <h3>Sistema hidropónico</h3>
          <p>Sistema especializado de retención y circulación de nutrientes de acuedo a tus necesidades.</p>
          <ul>
            <li><i class="fab fa-envira"></i> Estabilidad de las producciones a lo largo del año.</li> 
            <li><i class="fab fa-envira"></i> Ahorro de recursos, fundamentalmente de agua gracias a la reutilización de la misma.</li>
            <li><i class="fab fa-envira"></i> Alimentos más sanos por la ausencia de productos químicos y de riesgos de enfermedades que se producen en la tierra.</li>
            <li><i class="fab fa-envira"></i> Optimiza el gasto de agua y fertilizantes.</li>
          </ul>
        </div>
        <div class="col-md-5">
          <img src="./images/img/hidroponico_1.png" class="hidden-sm" style="right: -27%;">
          <img src="./images/img/invernadero_5.png" class="hidden-md">
        </div>
      </div>
    </div>

    <div class="box-03" style="background: #f1f1f1;">

      <div class="row">

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/distribution.svg">
            <p>Distribución perfecta de agua y nutrientes.</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/smart_2.svg">
            <p>Sistema inteligente y eficiente.</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/precipitation.svg">
            <p>Bajo consumo de agua.</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/rain.svg">
            <p>Sistema Circulatorio.</p>
          </div>
        </div>

      </div>
    </div>


    <div class="box-03">


      <div class="row">
        <div class="col-md-12">
          <h2>Funcionamiento</h2>
        </div>
      </div>

      <div class="row">

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/img/hidroponico_2.png" style="width: 75%;">
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/img/hidroponico_3.png" style="width: 75%;">
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/img/hidroponico_4.png" style="width: 75%;">
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/img/hidroponico_5.png" style="width: 75%;">
          </div>
        </div>

      </div>
    </div>

    <div class="box-05" style="background-image: linear-gradient(180deg, #f1f1f1, white);">
      <div class="row">
        <div class="col-md-12">
          <h2>Aplicaciones</h2>
          <ul>  
            <li data-toggle="modal" data-target="#modal-campo" >
              <span>Agricultura </span>
              <img src="./images/img/greenhouse_3.jpg">
            </li>
            <li data-toggle="modal" data-target="#modal-campo" >
              <span>Forraje</span>
              <img src="./images/img/tanque_2.jpg">
            </li>
            <li data-toggle="modal" data-target="#modal-campo" >
              <span>Hogares</span>
              <img src="./images/img/tanque_3.jpg">
            </li>
            <li data-toggle="modal" data-target="#modal-campo" >
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

        <div class="modal-content">
          
          <i class="far fa-times-circle" data-dismiss="modal" style="display: none;"></i>

          <div class="slider-00">
            <div id="carouselExampleControls_3" class="carousel carousel-2 slide" data-ride="carousel" >
              <div class="carousel-inner">


                <div class="carousel-item active">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/hidroponics/hidro_1.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/hidroponics/hidro_2.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls_3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls_3" role="button" data-slide="next">
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
