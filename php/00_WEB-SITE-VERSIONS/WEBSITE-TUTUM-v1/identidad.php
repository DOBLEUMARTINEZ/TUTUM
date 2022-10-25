<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TUTUM | Acerca de Nosotros">
  <meta name="theme-color" content="#111">

  <title>TUTUM | Acerca de Nosotros </title>

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
  <?php include("php/sliders/slide-section.php"); ?>

  <section py="5" class="body-back">

    <article>
      <!-- servicios -->
      <div class="container container-services-01">

        <h2>TUTUM</h2>

        <p>
          Somos una empresa, dinámica, innovadora y 100% mexicana; dedicada a brindar servicios de consultoría tecnológica y soluciones integrales de TI. Estamos comprometidos con el desarrollo económico y social del país, así como con nuestros clientes, socios y colaboradores.
        </p>

        <br><br>

        <div style="justify-content: center;">
          
          <ol style="width: 35%">
            <li style="display: block; margin:5%; ">
              <img style="width: 40%; margin-left: 30%;" src="images/icons/mision.png">
              <h3 style="width: 100%;text-align: center;">Misión</h3>
              <p style="padding: 0% 5% 2% 5%;">Generar valor a nuestros clientes a través de una oferta diferenciada que comprende​ Servicios​, Infraestructura , Tecnología​.</p>
            </li>
          </ol>

          <ol style="width: 35%">
            <li style="display: block; margin:5%; ">
              <img style="width: 40%; margin-left: 30%;" src="images/icons/vision.png">
              <h3 style="width: 100%;text-align: center;">Visión</h3>
              <p style="padding: 0% 5% 2% 5%;">Ser la empresa líder en soluciones tecnológicas integrales, eficientes y orientadas a empresas con una alta dependencia tecnológica.</p>
            </li>
          </ol>

        </div>

      </div>

      <br><br>

    </article>

  </section>

  <?php 

    include 'php/modal.php';
    include 'php/footer.php';

  ?>
  
</body>
</html>