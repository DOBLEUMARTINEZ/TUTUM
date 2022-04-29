<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Empresa dedicada y especializada en la venta de equipos portátiles paraexposiciones, puntos de venta y publicidad interna.">
  <meta name="author" content="Dobleu Martinez">
  <meta name="theme-color" content="#111">

  <title>HQ IMPRESIONES | BANNERS Y STANDS</title>

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
  <?php include("php/slide.php"); ?>

  <section py="5" class="body-back">

    <article>
      <!-- servicios -->
      <div class="container container-services-01">
        <h2>Impresiones de alta resolución y de excelente calidad</h2>
        <ul>
          <li>
            <img src="images/img/rigidos.jpg">
            <h3>Rígidos</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </li>
          <li>
            <img src="images/img/flexibles.jpg">
            <h3>Flexibles</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </li>
          <li>
            <img src="images/img/textiles.jpg">
            <h3>Textiles</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </li>
        </ul>

        <h2>Stands modulares alta calidad y resistencia</h2>
        <ul>
          <li>
            <img src="images/img/diseno.jpg">
            <h3>Diseño</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </li>
          <li>
            <img src="images/img/produccion.jpg">
            <h3>Producción</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </li>
          <li>
            <img src="images/img/fabricacion.jpg">
            <h3>Fabricación</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </li>
        </ul>

      </div>

      <!-- cta  -->
      <div class="container-black" style="padding: 4% 5% 0% 5%;">
        <span style="background: #000f1fcc;"></span>

          <div class="row">

            <div class="col-md-12" >
              <h2 id="colors">
                <center>Trabajamos con equipo altamente calificado y <br>de excelente calidad</center>
              </h2>
              <center>
                <button data-toggle="modal" data-target="#modal-1" class="cta-03">
                  Contáctanos
                </button><br><br>
              </center>
              
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

      <!-- contacto  
      <div class="container-contact">
            <div class="row no-gutters">
              <div class="col-md-7" style="background: #111;">
                <h3>¿Necesitas información de nuestros servicios?</h3>
                <form method="POST" action="./send.php">
                  <label>Nombre *</label>
                  <input type="text" name="name" placeholder="Nombre y Apellidos" required="required"><br>
                  <label>Teléfono *</label>

                  <div style="display: grid; grid-template-rows: 100%;margin: 4% 0%;">
     
                  <input type="tel" name="phone" placeholder=" 55 5555 5555" required="required" pattern="[0-9]{10}" style="margin: 0;">   

                  </div>

                  <label>Correo *</label>
                  <input type="text" name="email" placeholder="ejemplo@gmail.com" required="required">

                  <label>Servicio</label>
                  <select name="service">
                    <option value="none">-- Selecciona --</option>
                    <option value="nom 035">NOM 035</option>
                    <option value="evaluacion 360">Evaluación 360°</option>
                    <option value="asesoria">Asesoría por Expertos</option>
                    <option value="plataforma">Prueba Demo</option>
                    <option value="demostración">Demostración de Plataforma</option>
                    <option value="webinar">Webinar</option>
                    <option value="otro">Otro</option>
                  </select>
                  
                  <label>Consultor</label>
                  <select name="consultor">
                    <option value="Mauricio Topete">Mauricio Topete</option>
                    <option value="Javier Calleja">Javier Calleja</option>
                  </select>
                  
                  <label>Escribenos tu mensaje</label>
                  <textarea style="margin-top: 15px;" name="msg" placeholder="Escribe tu mensaje..." required="required"></textarea> <br>

                  <center><button name="action" value="new_contact">Enviar</button></center>
                </form>           
              </div>
              <div class="col-md-5">

                <iframe class="desktop"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.4884793976016!2d-99.18798398578156!3d19.434495145657635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8abbd455555%3A0x9afac92db9fe774!2sATS!5e0!3m2!1ses-419!2smx!4v1623283153396!5m2!1ses-419!2smx" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

              <div class="container-end">
                <ul>
                  <li  onclick="window.location.href='tel:';"><i  id="rotate" class="fas fa-phone"></i> 55 3640 - 0551 </li>
                  <li  onclick="window.location.href='tel:';"><i  id="rotate" class="fas fa-phone"></i> 55 3640 - 0552 </li>
                  <li onclick="window.location.href='mailto:contacto@atsonline.com.mx';"><i class="fas fa-envelope" ></i> contacto@atsonline.com.mx</li>

                  <li onclick="window.location.href='https://goo.gl/maps/f6hTZf6ZRiv6o1rs9';">
                    <i class="fas fa-map-marker-alt"></i>
                    Petrarca 223, 901 Chapultepec Morales 11550 Ciudad de México, CDMX
                  </li>

                </ul>
              </div>                
              </div>
            </div>
      </div>-->

    </article>
  </section>

  <?php 

    include 'php/modal.php';
    include 'php/footer.php';

  ?>
  
</body>
</html>