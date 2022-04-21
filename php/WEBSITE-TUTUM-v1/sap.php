<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TUTUM | SAP">
  <meta name="theme-color" content="#111">

  <title>TUTUM | SAP </title>

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
  <?php include("php/sliders/slide-section-sap.php"); ?>

  <section py="5" class="body-back">

    <article>

      <div class="container" >
        <div class="container-us">
          <div class="row">

            <div class="col-md-6">
              <h2>Consultoría e implementación SAP</h2>
              <p>
                Ofrecemos soluciones para la planificación de recursos empresariales, que ayuda a ejecutar procesos centrales en un único sistema para departamentos como finanzas, fabricación, RR. HH., cadena de suministro, servicios, compras y otros. Nuestras soluciones de ERP utilizan tecnologías inteligentes para ayudar a nuestros clientes a transformar los procesos de misión crítica y adaptarse rápidamente al cambio sin importar el tamaño de su negocio.
              </p>
              <ol class="square-operacion">
                <li>
                  <p>METODOLOGÍAS DE IMPLEMENTACIÓN</p>
                </li>
                <li>
                  <p>
                    PMI​
                    <br>
                    COSO​
                    <br>
                    KANBAN​
                    <br>
                    SPRINT​
                    <br>
                    KOTTER​
                    <br>
                    SAP ACTIVATE
                  </p>
                </li>
              </ol>
            </div>
            <div class="col-md-6">
              <img  style="box-shadow: none; width: 100%; margin: 0;" src="images/img/sap.jpg">
            </div>
            
          </div>
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