<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TUTUM | Centro de atencion a usuarios">
  <meta name="theme-color" content="#111">

  <title>TUTUM | Centro de atencion a usuarios </title>

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
  <?php include("php/sliders/slide-section-cau.php"); ?>

  <section py="5" class="body-back">

    <article>

      <div class="container" >

        <div class="container-us">
          <div class="row">

            <div class="col-md-6">
              <h2>Centro de atencion a usuarios</h2>
              <p>
                 Nos volvemos el principal y único punto de contacto (SPOC) para nuestros clientes en cuanto a la atención de incidencias, cambios, mantenimientos y problemas.​
              </p>
              <br>
              <p>
                Atendiendo con esto el ciclo de vida del servicio apegados a las mejores prácticas de ITIL, y gestionando todos los tickects de atención con la solución líder en la industria BMC-Remedy
              </p>

              
            </div>

            <div class="col-md-6">
              <ol class="square-operacion">
                <li>
                  <h3>+<a class="counter" data-count="20">0</a></h3>
                  <p>Especialistas dan soporte a nuestros clientes 24/7</p>
                </li>
                <li>
                  <h3>Soporte</h3>
                  <p>Técnico Data center, Seguridad perimetral vía Remedy Service Desk</p>
                </li>
              </ol>
            </div>
            
          </div>

        </div>
      </div>

      <div class="container container-services-01">
        <h2>¿Cómo lo hacemos?</h2>
        <p style="margin-bottom: 2%;">Operamos el ciclo de vida del servicio bajo el marco de mejores prácticas de ITIL, y definiendo en conjunto con nuestros clientes:</p>

        <div style="justify-content: center;">
          
          <ol style="width: 30%">
            <li style="display: block; margin:5%; "><img style="width: 40%; margin-left: 30%;" src="images/icons/customer-service.png">
              <h4 style="width: 100%;text-align: center;">Catálogo de Servicios</h4>
              <p style="text-align: center;" style="text-align: center;">(alcance de la operación)</p>
            </li>
          </ol>

          <ol style="width: 30%">
            <li style="display: block; margin:5%; "><img style="width: 40%; margin-left: 30%;" src="images/icons/success.png">
              <h4 style="width: 100%;text-align: center;">Niveles de Servicio</h4>
              <p style="text-align: center;">Establecemos niveles de servicio que permitan garantizar la satisfacción de nuestros clientes</p>
            </li>
          </ol>

          <ol style="width: 30%">
            <li style="display: block; margin:5%; "><img style="width: 40%; margin-left: 30%;" src="images/icons/promotion.png">
              <h4 style="width: 100%;text-align: center;">Niveles de Soporte N1,N2, N3</h4>
              <p style="text-align: center;"> Según cada escenario establecido con nuestros clientes</p>
            </li>
          </ol>

        </div>

      </div>

      <div id="box-style-01">
        <ul>
          <li>
            <img  src="images/img/cau-2.jpg">
            <div>
              <h2>¿A quién va dirigido?​</h2>
              <ol>
                <li><i class="fa fa-angle-right" style="color: #ffc107c2;"></i> C-Levels</li>
                <li><i class="fa fa-angle-right" style="color: #ffc107c2;"></i> Responsables de áreas tecnológicas</li>
              </ol>
              <button>
                Más información <i class="fa fa-angle-right"></i>
              </button>
            </div>
            
          </li>
          <li>
            <img  src="images/img/cau-3.jpg">
            <div>
              <h2>¿Cómo se entrega?</h2>
              <ol>
                <li><i class="fa fa-angle-right" style="color: #ffc107c2;"></i> Dashboars de cumplimento vs SLA’s establecidos</li>
                <li><i class="fa fa-angle-right" style="color: #ffc107c2;"></i> Metricas de atención de folios </li>
                <li><i class="fa fa-angle-right" style="color: #ffc107c2;"></i> Ciclo de vida de atención tickets</li>
              </ol>
              <button>
                Más información <i class="fa fa-angle-right"></i>
              </button>
            </div>
          </li>
        </ul>
      </div>

    </article>

  </section>

  <?php 

    include 'php/modal.php';
    include 'php/footer.php';

  ?>
  
</body>
</html>