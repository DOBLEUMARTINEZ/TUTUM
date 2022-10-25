<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TUTUM | Proyectos llave en mano">
  <meta name="theme-color" content="#111">

  <title>TUTUM | Proyectos llave en mano </title>

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
  <?php include("php/sliders/slide-section-proyects-llave.php"); ?>

  <section py="5" class="body-back">

    <article>

      <div class="container" >

        <!--- información y titulo---->
        <div class="container-us">
          <div class="row">

            <div class="col-md-6">
              <h2>LLave en mano</h2>
              <p>
                 Desarrollamos soluciones integrales de TI con la mas alta calidad.<br>
                 Vamos de la mano con nuestros clientes para conocer y atender sus necesidades.
              </p>
              <br>
              <ol class="buutons-proyects">
                <li onclick="ActiveContent('Hospital llave en mano')">
                  <i class="fas fa-eye"></i> PROYECTOS LLAVE EN MANO
                </li>
              </ol>
            </div>
            <div class="col-md-6" style="text-align: right;">
              <img src="images/img/proyects.jpg">
            </div>
            
          </div>
        </div>

        <!--- proyectos --->

          <div class="info-proyects">

            <?php 

              include('./php/proyects/hospitales-llave.php'); /// CONTENIDO HOSPITAL LLAVE EN MANO

            ?>

          </div>

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