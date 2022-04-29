<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sipla - Sistemas de Riego">
  <meta name="author" content="Dimarketing">

  <!-- Favicon -->   
  <link href="./images/icon/icon.png" rel="shortcut icon"/>

  <title>Sipla - Sistemas de Riego</title> 

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
      echo(str_replace(' ', '%20', 'Me interesa un Sistema de Riego')) ?>');" 
      >
        <p><i class="fab fa-whatsapp"></i></p><h2>Comienza tu ahorro</h2>
    </button>

    <?php include("./php/head.php");?>

    <div class="slider-00">
      <div id="carouselExampleControls" class="carousel carousel-2 slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active ">
            <div class="box-slider">
              <img class="d-block w-100 ban-pc" src="./images/banner/banner_7.jpg">
              <img class="d-block w-100 ban-mobil" src="./images/banner/banner_7_m.jpg">
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="box-01 box-mobil">
      <div class="row">
        <div class="col-md-12">
          <h2>Sistema de riego</h2>
          <p>Un sistema de riego es un conjunto de estructuras que interactúan entre sí para abastecer del agua necesaria a una determinada área cultivada. Existe una gran variedad en sistemas de riego para invernaderos: micro aspersores, difusores, los de tipo subterráneo, por manguera y por goteo.</p>
        </div>
      </div>
    </div>

    <div class="box-03">

      <div class="row box-pc">
        <div class="col-md-12">
          <h2>Sistema de riego<br><hr></h2>
          <p>Un sistema de riego es un conjunto de estructuras que interactúan entre sí para abastecer del agua necesaria a una determinada área cultivada. Existe una gran variedad en sistemas de riego para invernaderos: micro aspersores, difusores, los de tipo subterráneo, por manguera y por goteo.</p>
        </div>
      </div>

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
            <p>Tasas de <br>precipitación bajas.</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/rain.svg">
            <p>Distribución que simula la lluvia.</p>
          </div>
        </div>

      </div>
    </div>

    <div class="box-03" style="background: #f1f1f1; display: none;">

      <div class="row" style="justify-content: center;">
        
        <div class="col-md-5" style="text-align: center;">
          <h5>Invernaderos de Campo</h5>
          <div class="box-greenhouse-type" data-toggle="modal" data-target="#modal-campo">
            <span><i class="fas fa-search"></i></span>
            <img src="./images/img/sipla_2.png">
          </div>
        </div>

        <div class="col-md-5" style="text-align: center;">
          <h5>Invernaderos Urbanos</h5>
          <div class="box-greenhouse-type" data-toggle="modal" data-target="#modal-campo">
            <span><i class="fas fa-search"></i></span>
            <img src="./images/img/sipla_2.png">
          </div>
        </div>

      </div>
    </div>

    <div class="box-03">

      <div class="row">
        <div class="col-md-12">
          <h2>Aplicaciones<br><hr></h2>
        </div>
      </div>

      <div class="row" style="justify-content: space-around;">

        <div class=" box-products-efect">
          <div class="box-products">
            <img src="./images/img/campo.png">
            <h4>Cultivos de campo y vegetales</h4>
            <ul>
              <li><i class="fab fa-envira"></i> Germinación.</li>
              <li><i class="fab fa-envira"></i> Riego de vegetales como papas, zanahoria, cebolla, ajo, etc.</li>
            </ul>
          </div>
        </div>

        <div class=" box-products-efect">
          <div class="box-products">
            <img src="./images/img/huertos.png">
            <h4>Huertos</h4>
            <ul>      
              <li><i class="fab fa-envira"></i> Riego bajo árboles.</li>
              <li><i class="fab fa-envira"></i> Riego por asperción.</li>
              <li><i class="fab fa-envira"></i> Enfriamiento.</li>
              <li><i class="fab fa-envira"></i> Humidificación de huertos y hojas.</li>
              <li><i class="fab fa-envira"></i> Limpieza de polvo.</li>
            </ul>
          </div>
        </div>

        <div class=" box-products-efect">
          <div class="box-products">
            <img src="./images/img/huertos-protegidos.png">
            <h4>Cultivos protegidos</h4>
            <ul>
              <li><i class="fab fa-envira"></i> Nebulización.</li>
              <li><i class="fab fa-envira"></i> Germinación.</li>
              <li><i class="fab fa-envira"></i> Enfriamiento.</li>
              <li><i class="fab fa-envira"></i> Humidificación.</li>
              <li><i class="fab fa-envira"></i> Enraizamiento.</li>
            </ul>
          </div>
        </div>

      </div>


    </div>


    <!-- Modal -->
    <div class="modal fade" id="modal-campo" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <i class="far fa-times-circle" data-dismiss="modal"></i>
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
