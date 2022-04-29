<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sipla - Gestion de proyectos">
  <meta name="author" content="Dimarketing">

  <!-- Favicon -->   
  <link href="./images/icon/icon.png" rel="shortcut icon"/>

  <title>Sipla - Gestion de proyectos</title>

  <!-- reCAPTCHA -->
  <script src='https://www.google.com/recaptcha/api.js'></script>

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
      echo(str_replace(' ', '%20', 'Me interesa gestionar un proyecto')) ?>');" 
      >
        <p><i class="fab fa-whatsapp"></i></p><h2>Cotizar ahora</h2>
    </button>

    <script>
      window.onload = function() {
        var recaptcha = document.forms["formulario"]["g-recaptcha-response"];
        recaptcha.required = true;
        recaptcha.oninvalid = function(e) {
          // si la función es null abrir alert
          alert("Completa el filtro reCAPTCHA");
        }
      }
    </script>

    <?php include("./php/head.php");?>

    <div class="slider-00">
      <div id="carouselExampleControls" class="carousel carousel-2 slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active ">
            <div class="box-slider">
              <img class="d-block w-100 ban-pc" src="./images/banner/banner_8.jpg">
              <img class="d-block w-100 ban-mobil" src="./images/banner/banner_8_m.jpg">
            </div>
          </div>

        </div>
      </div>
    </div>


     <div class="box-01">
      <div class="row">
        <div class="col-md-7 hidden-sm">
          <h3>Gestion de proyectos</h3>
          <p>Somos un grupo especializados en distintos tópicos, apoyamos a los agricultores en la elaboración de sus proyectos y en la gestión ante las instancias de gobierno.</p>
        </div>
        <div class="col-md-5 hidden-sm">
        </div>

        <div class="col-md-12 hidden-md">
          <h3>Gestion de proyectos</h3>
          <p>Somos un grupo especializados en distintos tópicos, apoyamos a los agricultores en la elaboración de sus proyectos y en la gestión ante las instancias de gobierno.</p>
        </div>          
        </div>

      </div>
    </div>

  <!--
    <div class="box-03" style="background-image: url(./images/img/product.jpg);background-position: center;background-size: cover;">

      <h2 style="margin: 0%;">Acércate con nosotros</h2>
    </div>
  -->

  <div class="box-03" style="padding: 2% 10% 0% 10%;">
    <h2 style="text-align: left;">Si requieres ayuda</h2>
  <div class="row box-form ">
        <div class="col-md-6">
          <form action="./mail.php" method="POST" name="formulario" required>
            <input type="text" name="name" placeholder="Nombre" required>
            <input type="tel" name="phone" placeholder="Teléfono" required>
            <select type="text" name="service">
              <option value="contactame"> --- Selecciona el servicio --- </option>
              <option value="Tanques de Almacenamiento "> Tanques de Almacenamiento </option>
              <option value="Invernaderos"> Invernaderos </option>
              <option value="Sistemas de Riego"> Sistemas de Riego</option>
              <option value="Sistemas de Hidroponicos"> Sistemas de Hidroponicos</option>
              <option value="Sistemas de Climatización"> Sistemas de Climatización</option>
              <option value="Elementos Constructivoso"> Elementos Constructivoso</option>
              <option value="Gestion de Proyectos"> Gestion de Proyectos</option>
            </select>
            <input type="mail" name="mail" placeholder="Correo electrónico" required>
            <textarea type="text" name="message" placeholder="Escribe tu mensaje"></textarea>
            <br><br>
            <center>
              <div class="g-recaptcha" data-sitekey="6Ldar6EUAAAAAIxqUUFFXgkb59qX-Grs73y96XSg"></div>
            </center>
            <br><br>
            <button><i class="fas fa-paper-plane"></i> Enviar</button>
          </form>
        </div>

        <div class="col-md-6">
          <div class="img-proyects">

            <img src="./images/img/sipla_3.png" class="hidden-sm" title="sipla, Sistemas integrales para la agricultura" alt="sipla, Sistemas integrales para la agricultura">
            
            <img src="./images/img/invernadero_4.png" class="hidden-md" title="sipla, Sistemas integrales para la agricultura" alt="sipla, Sistemas integrales para la agricultura">

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

    <!--



    -->



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
