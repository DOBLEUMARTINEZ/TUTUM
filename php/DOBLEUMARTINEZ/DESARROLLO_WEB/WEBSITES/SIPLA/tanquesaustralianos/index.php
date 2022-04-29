<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Global site tag (gtag.js) - Google Ads: 639214444 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-639214444"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-639214444');
  </script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="SIPLA | Tanques Australianos">
  <meta name="author" content="Dobleu Martinez">
  <meta name="theme-color" content="#111">

  <title>SIPLA | Tanques Australianos</title>

  <link href="images/logo/icon.png" rel="shortcut icon"/>

  <link rel="manifest" href="http://sipla.com.mx/tanquesaustranianos/images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="32x32" href="http://sipla.com.mx/tanquesaustranianos/images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="16x16" href="http://sipla.com.mx/tanquesaustranianos/images/logo/icon.png">


  <link rel="stylesheet" href="css/styles.css"/>
  <link rel="stylesheet" href="css/main.css"/>

  <!-- icons CDN -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!--jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body style="background: #1f4b69;">

  <?php include("php/head.php"); ?> 
  <?php include("php/slide.php"); ?>

  <script defer src="https://widget.tochat.be/bundle.js?key=e2dfb8b9-b7df-482c-81a0-ef4fee3e95de"></script>

  <section py="5" class="body-back">

    <article>
      <!-- servicios -->
      <div class="container-services-01">
        <div class="row">
              <div class="col-md-7">
                <h2>Soluciones a tu medida</h2>
                <p>
                  Fabricamos tanques de almacenamiento de agua con nuestro sistema constructivo a base de herrajes de ensambles atornillables.<br>Instálalo fácil, seguro y rápido.
                </p>
                <img src="images/img/desmantelamiento.jpg">       
              </div>

              <div class="col-md-5">
                <h3>Solicita tu tanque personalizado. Soluciones precisas para cada necesidad.</h3>
                <form method="POST" action="./send.php">
                  <input type="text" name="name" placeholder="Nombre" required="required"><br>
                  <input type="tel" name="phone" placeholder=" 55 5555 5555" required="required" pattern="[0-9]{10}" style="margin: 0;">   
                  <input type="text" name="email" placeholder="ejemplo@gmail.com" required="required">
                  <textarea name="service" placeholder="Dejanos un mensaje"></textarea>
                  <center><button name="action" value="new_contact">Enviar</button></center>
                </form>             
              </div>
        </div>
      </div>

      <br><br>

      <div class="container-black">
        <div class="row">

          <div class="col-md-6">

            <ol>
              <li><i class="fab fa-envira"></i> Solución integral para tu sistema de almacenamiento.</li>
              <li><i class="fab fa-envira"></i> Membrana de alta duración certificada bajo la norma NSF para la contención agua potable.</li>
              <li><i class="fab fa-envira"></i> Hechos a la medida de cada uno de nuestros clientes.</li>
              <li><i class="fab fa-envira"></i> Una alternativa sustentable y de alta duración.</li>
              <li><i class="fab fa-envira"></i> Capacidad desde 12,000 lts. Hasta 1,000,000 lts.</li>
              <li><i class="fab fa-envira"></i> Cumplimos con los requerimientos técnicos y tecnológicos para brindarte el servicio de calidad desde la fabricación hasta la instalación.</li>
              <li><i class="fab fa-envira"></i> y mucho más!</li>
            </ol>
                     
          </div>

          <div class="col-md-5">
            <img src="images/img/tanque_1.png" width="40%">           
          </div>

        </div>
      </div>

      <div class="container container-services-01">

        <h2>¿Sabías qué nuetros tanques de agua se pueden usar en...</h2>

        <ul>
          <li>
            <img src="images/img/greenhouse_3.jpg">
            <h3>Agricultura</h3>
            <p></p>
          </li>
          <li>
            <img src="images/img/tanque_2.jpg">
            <h3>Ganadería</h3>
            <p></p>
          </li>
          <li>
            <img src="images/img/tanque_3.jpg">
            <h3>Hogares</h3>
            <p></p>
          </li>
          <li>
            <img src="images/img/tanque_4.jpg">
            <h3>Industria</h3>
            <p></p>
          </li>
        </ul>

        <h2>Hemos resuelto necesidades distintas con cada uno de nuestros clientes:</h2>

        <ol class="list-logos">
          <li><img src="images/img/socios/logo-1.jpg"></li>
          <li><img src="images/img/socios/logo-2.jpg"></li>
          <li><img src="images/img/socios/logo-3.jpg"></li>
          <li><img src="images/img/socios/logo-4.jpg"></li>
          <li><img src="images/img/socios/logo-5.jpg"></li>
          <li><img src="images/img/socios/logo-6.jpg"></li>
          <li><img src="images/img/socios/logo-7.jpg"></li>
          <li><img src="images/img/socios/logo-8.jpg"></li>
        </ol> 

      </div>

    </article>
  </section>

  <?php 

    include 'php/modal.php';
    include 'php/footer.php';

  ?>
  
</body>
</html>