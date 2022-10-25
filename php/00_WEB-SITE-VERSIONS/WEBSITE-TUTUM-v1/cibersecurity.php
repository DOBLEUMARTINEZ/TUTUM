<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TUTUM | Ciberseguridad​">
  <meta name="theme-color" content="#111">

  <title>TUTUM | Ciberseguridad​ </title>

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
  <?php include("php/sliders/slide-section-ciberseguridad​.php"); ?>

  <section py="5" class="body-back">

    <article>

      <div class="container" >
        <div class="container-us">
          <div class="row">

            <div class="col-md-6">
              <h2>Servicios de ciberseguridad</h2>
              <p>
                Somos una empresa mexicana, integrada por un equipo de especialistas con más de 20 años de experiencia en servicios de Ciberseguridad, Ciberinteligencia y Tecnologías de la información de alcance global.​
              </p><br>
              <p>
                Nuestro objetivo  es apoyar a nuestros clientes a resolver problemas complejos y protegerlos del cibercrimen cada vez más creciente.​
              </p>
              <button class="cta-01">
                Contactanos
              </button>
            </div>
            <div class="col-md-6">
              <img  style="box-shadow: none; width: 100%; margin: 0;" src="images/img/ciberseguridad.png">
            </div>
            
          </div>
        </div>
      </div>

      <br>

      <div id="box-style-01">
        <ul>
          <li>
            <img  src="images/img/ciberseguridad-2.jpg">
            <div>
              <h2>Diseñados para ayudar a afrontar:​</h2>
              <ol>
                <li><i class="fa fa-angle-right" style="color: #ffc107c2;"></i> Ataques ​</li>
                <li><i class="fa fa-angle-right" style="color: #ffc107c2;"></i> Amenazas complejas y sofisticadas</li>
                <li><i class="fa fa-angle-right" style="color: #ffc107c2;"></i> Gestionar su infraestructura de seguridad ​</li>
                <li><i class="fa fa-angle-right" style="color: #ffc107c2;"></i> Prevenir riesgos en el ciberespacio</li>

              </ol>
              <button>
                Más información <i class="fa fa-angle-right"></i>
              </button>
            </div>
            
          </li>
          <li>
            <img  src="images/img/ciberseguridad-3.jpg">
            <div>
              <h2>¿Cómo lo hacemos?</h2>
              <ol>
                <li><i class="fa fa-angle-right" style="color: #ffc107c2;"></i> Adopción de estrategias de Gobierno</li>
                <li><i class="fa fa-angle-right" style="color: #ffc107c2;"></i> Mejores Prácticas </li>
                <li><i class="fa fa-angle-right" style="color: #ffc107c2;"></i> Alineamiento a normas, estándares y leyes</li>
                <li><i class="fa fa-angle-right" style="color: #ffc107c2;"></i> Uso de Big Data y Servicios de interpretación de Inteligencia e investigación</li>
              </ol>
              <button>
                Más información <i class="fa fa-angle-right"></i>
              </button>
            </div>
          </li>
        </ul>
      </div>

      <br>

      <div class="container container-services-01">
        <h2>Nuestras Soluciónes</h2>
      </div>

      <div id="box-style-02">

        <ol>
          <li id="opc-security-1" class="opc-security-active" onclick="SecurityServ(1)">Managed Security Service <i class="fas fa-angle-right"></i> </li>
          <li id="opc-security-2" onclick="SecurityServ(2)">Intell SOC <i class="fas fa-angle-right"></i> </li>
          <li id="opc-security-3" onclick="SecurityServ(3)">Red Team TEST <i class="fas fa-angle-right"></i> </li>
          <li id="opc-security-4" onclick="SecurityServ(4)">GAP Analysis <i class="fas fa-angle-right"></i> </li>
          <li id="opc-security-5" onclick="SecurityServ(5)">CISO aaS <i class="fas fa-angle-right"></i> </li>
          <li id="opc-security-6" onclick="SecurityServ(6)">Threat Intelligence y Cyber Intelligence​ <i class="fas fa-angle-right"></i> </li>
          <li id="opc-security-7" onclick="SecurityServ(7)">Vigilancia Digital <i class="fas fa-angle-right"></i> </li>
          <li id="opc-security-8" onclick="SecurityServ(8)">WorkShop Ciberseguridad (Awareness) <i class="fas fa-angle-right"></i> </li>
        </ol>

        <!-- DESCRIPCION DE SERVICIOS -->
        <?php include('php/ciberseguridad/services-security.php'); ?>
      </div>

      <div class="container container-services-01">

        <h2>Socios tecnológicos de ciberseguridad​</h2>

      </div>

      <div class="container-fluid">

        <div class="row no-gutters">
          <div class="col-md-12">
            <div class="container-work">

              <div class="slider-principal">
                <div id="alianzas" class="carousel slide" data-ride="carousel">    

                  <div class="carousel-inner">

                    <div class="carousel-item active">

                      <ul class="clientes">

                        <li>
                          <img src="images/img/socios/logo-0.png">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-1.png">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-2.png">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-3.png">
                        </li>


                      </ul>

                    </div>

                    <div class="carousel-item">

                      <ul class="clientes">

                        <li>
                          <img src="images/img/socios/logo-4.png">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-5.png">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-6.png">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-7.png">
                        </li>

                      </ul>

                    </div>

                    <a class="carousel-control-prev" href="#alianzas" role="button" data-slide="prev">
                      <i style="font-size: 2em;color: #26cfe0;" class="fas fa-angle-left"></i>
                    </a>

                    <a class="carousel-control-next" href="#alianzas" role="button" data-slide="next">
                        <i style="font-size: 2em;color: #26cfe0;" class="fas fa-angle-right"></i>
                    </a>
              
                  </div>

                </div>  
              </div>
            </div>
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