<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sipla - Contacto">
  <meta name="author" content="Dimarketing">

  <!-- Favicon -->   
  <link href="./images/icon/icon.png" rel="shortcut icon"/>

  <title>Sipla - Contacto</title>

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

    <?php include("./php/head.php");?>



    <div class="box-03">

      <br><br><br>

      <div class="row">
        <div class="col-md-12">
          <h2>Contáctanos<br><hr></h2>
          <p></p>
        </div>
      </div>

      <div class="row box-form ">
        <div class="col-md-6">
          <form action="./mail.php" method="POST" name="formulario">
            <input type="text" name="name" placeholder="Nombre">
            <input type="tel" name="phone" placeholder="Teléfono">
            <select type="text" name="service">
              <option value="contactame"> --- Selecciona el servicio --- </option>
              <option value="Tanques de Almacenamiento">
              	Tanques de Almacenamiento
              </option>
              <option value="Instalación Tanques de Almacenamiento">
              	Instalación de Tanques de Almacenamiento
              </option>
              <option value="Tanque de Almacenamiento e Instalación">
              	Tanque de Almacenamiento e Instalación
              </option>
              <option value="Invernadero a la Medida">
              	Invernadero a la Medida
              </option>
              <option value="Sistema de Riego">
              	Sistema de Riego
              </option>
              <option value="Sistema de Hidroponico">
              	Sistemas de Hidropónicos
              </option>
              <option value="Sistema de Climatización">
              	Sistemas de Climatización
              </option>
              <option value="Gestión de proyectos">
              	Gestión de proyectos
              </option>
              <option value="Otro">
              	Otro
              </option>
              
            </select>
            <input type="mail" name="mail" placeholder="Correo electrónico">
            <textarea style="display: none;" type="text" name="message" placeholder="Escribe tu mensaje"></textarea>
            <br><br>
            <!--
            <center>
              <div class="g-recaptcha" data-sitekey="6Ldar6EUAAAAAIxqUUFFXgkb59qX-Grs73y96XSg"></div>
            </center>-->
            <br><br>
            <button><i class="fas fa-paper-plane"></i> Enviar</button>
          </form>
        </div>

        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.6052167335956!2d-99.04511028509249!3d19.256029751292807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce036464aaa2c1%3A0x63b8762136218745!2sAv.%20Belisario%20Dom%C3%ADnguez%20122%2C%20San%20Gregorio%20Atlapulco%2C%20Xochimilco%2C%2016600%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1589381873681!5m2!1ses-419!2smx" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>

  <!-- Main Javascript File -->
    <script src="js/main.js"></script>
</html>
