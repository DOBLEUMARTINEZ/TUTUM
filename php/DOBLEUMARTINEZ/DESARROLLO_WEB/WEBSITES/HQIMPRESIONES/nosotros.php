<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Empresa dedicada y especializada en la venta de equipos portátiles paraexposiciones, puntos de venta y publicidad interna.">
  <meta name="author" content="Dobleu Martinez">
  <meta name="theme-color" content="#111">

  <title>HQ IMPRESIONES | NONSOROS </title>

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

  <?php include("php/slide-nosotros.php");?>  

  <section py="5" class="body-back">

    <article>

      <!-- CONTAINER -US -->
      <div  class="container">
        <div class="container-us">

          <div class="row no-gutters">
            
            <div class="col-md-6" style="margin: auto;">
              <h2>
                ¿Quiénes somos?
              </h2>
              <p>
                Somos una empresa dedicada y especializada en la venta de equipos portátiles para exposiciones, puntos de venta y publicidad interna. Trabajamos con equipo altamente calificado y de excelente calidad, garantizando una experiencia de servicio totalmente exclusiva, ajustándonos siempre a las necesidades de nuestros socios de negocio.
                <br>
                <button data-toggle="modal" data-target="#modal-1" class="cta-02">Contáctanos</button>
              </p>

            </div>

            <div class="col-md-6 desktop">
              <img class="w-img-s1 img-fluid desktop" src="./images/img/nosotros-02.jpg" title="ats" alt="ats">
            </div> 

            <div class="col-md-6 mobil">
              <img class="w-img-s1 img-fluid mobil" src="./images/img/nosotros-02.jpg" title="ats" alt="ats">
            </div> 

          </div>

          <div class="row no-gutters">

            <div class="col-md-6" style="margin: auto;">
              <h2>
                Visión
              </h2>
              <p>
                Nuestra VISIÓN es, ser la empresa número 1 en impresión, fabricación y distribución de nuestro producto, ofreciendo siempre el mejor servicio y experiencia a nuestros socios de negocio. 
              </p>

            </div>
            
            <div class="col-md-6" style="margin: auto;">
              <h2>
                Misión
              </h2>
              <p>
                Nuestra MISIÓN es, ser una de las empresas Mexicanas compremetidas con su servicio y calidad, caracterizándonos por nuestra entrega en tiempo y forma, cuidando el medio ambiente, asegurándonos de tener el menor desperdicio de materiales en cada una de nuestras producciones.
              </p>

            </div>

            <div class="col-md-12" style="margin: auto;">
              <h2>
                Valores
              </h2>
              <p>
                Nuestros VALORES se caracterizan por ser una empresa regida por trabajar en equipo, con respeto, honestidad, compromiso, seguridad, puntualidad y sobre todo cuidando siempre el medio ambiente.
              </p>

            </div>

          </div>

        </div>
      </div>

      <!-- socios -->
      <div class="container-fluid">

        <div class="row no-gutters">
          <div class="col-md-12">
            <div class="container-work">

              <h2>Nuestros clientes</h2>
              <div class="slider-principal">
                <div id="our-work" class="carousel slide" data-ride="carousel">    

                  <div class="carousel-inner">

                    <div class="carousel-item active">

                      <ul class="clientes">

                        <li>
                          <img src="images/img/socios/logo-0.png" title="Zoetis" alt="Zoetis">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-1.png" title="Tornel" alt="Tornel">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-2.png" title="Richmond" alt="Richmond">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-3.png" title="Emajada de España en México" alt="Emajada de España en México">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-4.png" title="Nikon" alt="Nikon">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-10.png" title="Esteripharma" alt="Esteripharma">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-12.png" title="Espamex" alt="Espamex">
                        </li>

                      </ul>
                      <br><br>
                      <ul class="clientes">

                        <li>
                          <img src="images/img/socios/logo-5.png" title="Servier" alt="Servier">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-6.png" title="Santillana" alt="Santillana">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-7.png" title="GrupoMéxico" alt="GrupoMéxico">
                        </li>
                        
                        <li>
                          <img src="images/img/socios/logo-8.png" title="Licon" alt="Licon">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-9.png" title="Sodexo" alt="Sodexo">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-11.png" title="Banco Finterra" alt="Banco Finterra">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-8.png" title="Leo" alt="Leo">
                        </li>

                      </ul>

                    </div>
              
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