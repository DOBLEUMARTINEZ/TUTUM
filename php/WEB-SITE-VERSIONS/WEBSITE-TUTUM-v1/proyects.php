<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TUTUM | Proyectos">
  <meta name="theme-color" content="#111">

  <title>TUTUM | Proyectos </title>

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
  <?php include("php/sliders/slide-section-proyects.php"); ?>

  <section py="5" class="body-back">

    <article>

      <div class="container" >

        <!--- información y titulo---->
        <div class="container-us">
          <div class="row">

            <div class="col-md-6">
              <h2>Proyectos</h2>
              <p>
                 Desarrollamos soluciones integrales de TI con la mas alta calidad.<br>
                 Vamos de la mano con nuestros clientes para conocer y atender sus necesidades.
              </p>
              <br>
              <ol class="buutons-proyects">
                <li onclick="window.location.href='./proyectos-en-operacion.php';">
                  <i class="fas fa-cogs"></i> EN OPERACIÓN
                </li>
                <li onclick="window.location.href='./proyectos-llave-en-mano.php';">
                  <i class="fas fa-key"></i> LLAVE EN MANO
                </li>
                <li onclick="ActiveContent('Hospital llave en mano')">
                  <i class="fas fa-cog"></i> EN DESARROLLO
                </li>
              </ol>
            </div>
            <div class="col-md-6" style="text-align: right;">
              <img src="images/img/proyects.jpg">
            </div>
            
          </div>
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