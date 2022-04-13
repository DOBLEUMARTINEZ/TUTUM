<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TUTUM | Operación">
  <meta name="theme-color" content="#111">

  <title>TUTUM | Operación </title>

  <link href="images/logo/icon.png" rel="shortcut icon"/>

  <link rel="manifest" href="images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="32x32" href="images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="16x16" href="images/logo/icon.png">


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
<body>

  <?php include("php/head.php"); ?> 
  <?php include("php/sliders/slide-section-operacion.php"); ?>

  <section py="5" class="body-back">

    <article>

      <div class="container" >

        <div class="container-us">
          <div class="row">

            <div class="col-md-6">
              <h2>Servicios de operación</h2>
              <p>
                 Contamos con desarrolladores expertos, y con vasta experiencia en industrias específicas, con desarrollos apegados a las mejores prácticas de seguridad, desarrollo ágil entre otras.
              </p>

              <ol class="square-operacion">
                <li>
                  <h3>+<a class="counter" data-count="150">0</a></h3>
                  <p>Especialistas operan nuestros sistemas todos los días</p>
                </li>
                <li>
                  <p>Soportados por</p>
                  <h3>nuestro</h3>
                  <p>Centro de Atención al Usuario 24/7</p>
                </li>
              </ol>
            </div>

            <div class="col-md-6">
              <img src="images/img/operacion.jpg">
            </div>
            
          </div>
        </div>

        <br>

        <div id="content-operacion">

          <ul>
            <li>
              <p>CEFERESO # 17 <br>Michoacán</p>
              <h3><a class="counter" data-count="10257">0</a></h3>
              <p>Dispositivos  monitoreados</p>
            </li>
            <li>
              <p>CEFERESO # 14<br> Durango</p>
              <h3><a class="counter" data-count="12500">0</a></h3>
              <p>Dispositivos  monitoreados</p>
            </li>
            <li>
              <p>IMSS, <br>Tapachula</p>
              <h3><a class="counter" data-count="6206">0</a></h3>
              <p>Equipos Monitoreados</p>
            </li>
            <li>
              <p>IMSS, <br>Bahía banderas</p>
              <h3><a class="counter" data-count="7142">0</a></h3>
              <p>Equipos Monitoreados</p>
            </li>
            <li>
              <p>ISSSTE, <br>Villahermosa</p>
              <h3><a class="counter" data-count="4059">0</a></h3>
              <p>Equipos Monitoreados</p>
            </li>  
          </ul>
          
        </div>

        <br>

      </div>

    </article>

  </section>

  <?php 

    include 'php/modal.php';
    include 'php/footer.php';

  ?>
  
</body>
</html>