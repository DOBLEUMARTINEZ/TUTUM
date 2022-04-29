<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sipla - Nosotros">
  <meta name="author" content="Dimarketing">

  <!-- Favicon -->   
  <link href="./images/icon/icon.png" rel="shortcut icon"/>

  <title>Sipla - Nosotros</title> 

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- STYLE W -->
    <link href="./css/style.css" rel="stylesheet">

  <!-- slider --> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!--icons--->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  <!--jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>


  <!--fonts--->
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

 
</head>


  <body>

    <?php include("./php/head.php");?>

    <div class="slider-00">
      <div id="carouselExampleControls" class="carousel carousel-2 slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active ">
            <div class="box-slider">
              <img class="d-block w-100 ban-pc" src="./images/banner/banner_3.jpg">
              <img class="d-block w-100 ban-mobil" src="./images/banner/banner_3_m.jpg">
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="box-01 box-mobil">
      <div class="row">
        <div class="col-md-12">
          <h2>Acerca de nosotros</h2>
          <p>En Sipla somos expertos en sistemas integrales para la agricultura, con más de 10 años de experiencia en el mercado nos dedicamos al diseño, desarrollo y fabricación de sistemas agrícolas sustentables, orgánicos e hidropónicos.</p>
        </div>
      </div>
    </div>

    <div class="box-03 ">

      <div class="row box-pc">
        <div class="col-md-12">
          <h2>Acerca de nosotros<br><hr></h2>
          <p>En Sipla somos expertos en sistemas integrales para la agricultura, con más de 10 años de experiencia en el mercado nos dedicamos al diseño, desarrollo y fabricación de sistemas agrícolas sustentables, orgánicos e hidropónicos.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <h3>MISIÓN</h3>
          <h4>Innovar, eficientar y economizar; son las premisas básicas que nos guían en el diseño, desarrollo y fabricación de los sistemas, equipos y servicios que ofrecemos a los usuarios de nuestros productos, ya sean productores rurales o urbanos, que les permitan maximizar su producción con calidad e inocuidad con sistemas de cultivos hidropónicos u orgánicos con los enfoques sustentables que las necesidades de los tiempos actuales demandan.</h4>
        </div>
        <div class="col-md-4" style="text-align: center;">
          <img src="./images/img/sipla_1.png">
        </div>
      </div>

      <br><br>

      <div class="row">
        <div class="col-md-8">
          <h3>VISIÓN</h3>
          <h4>Desarrollar proyectos productivos con un enfoque sustentable y con la aplicación de tecnologías accesibles que incentiven la dinámica económica y la generación de empleo con mayor autonomía de gestión incorporando sectores tradicionalmente poco considerados.</h4>
        </div>
        <div class="col-md-4" style="text-align: center;">
          <img src="./images/img/sipla_2.png">
        </div>
      </div>
    </div>

    <div class="box-04">

      <div class="row">

        <div class="col-md-3">
          <div class="box-icon-1" >
            <img src="./images/icon/gestures.svg">
            <h2 class="num">122</h2>
            <p>Clientes</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-1" >
            <img src="./images/icon/sunny.svg">
            <h2 class="num">135</h2>
            <p>Invernaderos</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-1" >
            <img src="./images/icon/smart.svg">
            <h2 class="num">180</h2>
            <p>Contenedores</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-1" >
            <img src="./images/icon/earth.svg">
            <h2 class="num">12500</h2>
            <p>Accesorios</p>
          </div>
        </div>

      </div>
    </div>

    <div class="box-video" style="display: none;">
      <iframe src="https://www.youtube.com/embed/Ny0TQc279aQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <?php include('./php/footer.php'); ?>

    <!-- animations -->
    <?php include('./php/arrowup.php'); ?>

  </body>

  <script type="text/javascript">
    $('.num').counterUp({delay:10,time:1000});
  </script>

  <!-- Bootstrap core JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

  <!-- Main Javascript File -->
    <script src="js/main.js"></script>
</html>
