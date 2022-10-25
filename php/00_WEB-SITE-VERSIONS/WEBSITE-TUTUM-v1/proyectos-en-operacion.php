<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TUTUM | En operación">
  <meta name="theme-color" content="#111">

  <title>TUTUM | En operación</title>

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
  <?php include("php/sliders/slide-section-operations.php"); ?>

  <section py="5" class="body-back">

    <article>

      <div class="container" >

        <div class="container-us">
          <div class="row">

            <div class="col-md-6">
              <h2>Proyectos en operación</h2>
              <p>
                Contamos con desarrolladores expertos, y con vasta experiencia en industrias específicas, con desarrollos apegados a las mejores prácticas de seguridad, desarrollo ágil entre otras.
              </p>
              <br>
              <ol class="buutons-proyects">
                <li onclick="ActiveContent('ceferesos')">
                  <i class="fas fa-eye"></i> CEFERESOS
                </li>
                <li onclick="ActiveContent('Hospital apps')">
                  <i class="fas fa-eye"></i> HOSPITALES APP'S
                </li>
              </ol>
            </div>
            <div class="col-md-6">
              <img src="images/img/en-operacion.jpg">
            </div>
            
          </div>
        </div>

        <br>

        <!--- proyectos --->

          <div class="info-proyects">

            <?php 

              include('./php/proyects/ceferesos.php'); /// CONTENIDO CEFERESOS

              include('./php/proyects/hospitales-apps.php'); /// CONTENIDO HOSPITAL APPS

            ?>

          </div>

      </div>

    </article>

  </section>

  <?php 

    include 'php/modal.php';
    include 'php/footer.php';

  ?>
  
</body>
</html>