<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="RECUPERADORA DE RECICLAJES INDUSTRIALES DEL MONTE">
  <meta name="author" content="Dobleu Martinez">
  <meta name="theme-color" content="#111">

  <title>RECUPERADORA DE RECICLAJES INDUSTRIALES DEL MONTE </title>

  <link href="images/logo/icon.png" rel="shortcut icon"/>

  <link rel="manifest" href="http://recicladosdelmonte.com/images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="32x32" href="http://recicladosdelmonte.com/images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="16x16" href="http://recicladosdelmonte.com/images/logo/icon.png">


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
        <h2>Los residuos que recolectamos son</h2>
        <ul>
          <li>
            <img src="images/img/techno.jpg">
            <h3>Tecnología y activos</h3>
            <p>Recolección de tecnología, mobiliario de oficina y activos que estén por retirar de sus sedes de trabajo.</p>
          </li>
          
          <li>
            <img src="images/img/tarimas.jpg">
            <h3>Tarimas</h3>
            <p></p>
          </li>
          
          <li>
            <img src="images/img/chatarra.jpg">
            <h3>Chatarra</h3>
            <p></p>
          </li>
        </ul>
        <ul>

          <li>
            <img src="images/img/plastico.jpg">
            <h3>Plástico</h3>
            <p>Pet y Playo</p>
          </li>
          
          <li>
            <img src="images/img/metales.jpg">
            <h3>Metales</h3>
            <p>Cobre, bronce, aluminio y más</p>
          </li>

          <li>
            <img src="images/img/unicel.jpg">
            <h3>Unicel</h3>
            <p></p>
          </li>

          <li>
            <img src="images/img/carton.jpg">
            <h3>Cartón</h3>
            <p></p>
          </li>

        </ul>

        <h2>Compramos tu equipo de transporte y trabajo:<br>
          <span style="font-weight: normal;font-size: 0.7em;">
            Montacargas, unidades móviles y maquinaria para destrucción
          </span>
        </h2>

      </div>

      <!-- cta  -->
      <div class="container-black" style="padding: 5% 5% 5% 5%; background-image: url(./images/img/work2.jpg);" >
        <span style="background: #000f1fcc;"></span>

          <div class="row">

            <div class="col-md-12" >
              <h2 id="colors" style="font-weight: bold; letter-spacing: 1px;">
                <center>
                  Contamos con equipo roll off, patines y contenedores móviles.
                  <br>
                  <a style="font-weight: normal;font-size: 0.7em;" >
                    "Equipos de trabajo a su disposición"
                  </a>
                </center>
              </h2>
              <center>
                <button data-toggle="modal" data-target="#modal-1" class="cta-03">
                  Contáctanos
                </button><br><br>
              </center>
              
            </div>

          </div>

      </div>

      <div class="container container-services-01">

        <h2>Desmantelamiento especializdo</h2>

        <ul>
          <li>
            <img src="images/img/desmantelamiento.jpg">
            <h3>Naves industriales y maquinaria</h3>
            <p></p>
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

              <h2>Nuestro servicio incluye</h2>
              <div class="slider-principal">
                <div id="our-work" class="carousel slide" data-ride="carousel">    

                  <div class="carousel-inner">

                    <div class="carousel-item active">

                      <ul class="clientes">

                        <li>
                          <img src="images/icons/group.png" >
                          <h4>Personal capacitado</h4>
                        </li>

                        <li>
                          <img src="images/icons/24-hours.png" >
                          <h4>24/7</h4>
                        </li>

                        <li>
                          <img src="images/icons/positive-vote.png" >
                          <h4>Excelente servicio</h4>
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

      <!-- contacto  -->
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
                  <select name="service" required>
                    <option value="Seleccióna">-- Selecciona --</option>
                    <option value="Tecnología y activos">Tecnología y activos</option>
                    <option value="Desmantelamiento especializdo">Desmantelamiento especializdo</option>
                    <option value="Plástico">Plástico</option>
                    <option value="Tarimas">Tarimas</option>
                    <option value="Polipropileno">Polipropileno</option>
                    <option value="Polietileno">Polietileno</option>
                    <option value="Cartón">Cartón</option>
                    <option value="Chatarra">Chatarra</option>
                  </select> <br>

                  <center><button name="action" value="new_contact">Enviar</button></center>
                </form>           
              </div>
              <div class="col-md-5">

                <iframe class="desktop"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3758.679058170779!2d-99.26929738558653!3d19.598245840442473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21c11fd1b940f%3A0xbec25e37c5db3e6!2sCda.%20Montealban%2027%2C%20Lomas%20de%20Monte%20Maria%2C%2052918%20Cd%20L%C3%B3pez%20Mateos%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1645247067252!5m2!1ses-419!2smx" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

              <div class="container-end">
                <ul>
                  <li  onclick="window.location.href='tel:5583686664';"><i  id="rotate" class="fas fa-phone"></i> 55 8368 6664 </li>
                  <li  onclick="window.location.href='tel:5561437730';"><i  id="rotate" class="fas fa-phone"></i> 55 6143 7730 </li>
                  <li onclick="window.location.href='mailto:resicladosindustriales.22@gmail.com';"><i class="fas fa-envelope" ></i> resicladosindustriales.22@gmail.com</li>

                  <li onclick="window.location.href='https://goo.gl/maps/f6hTZf6ZRiv6o1rs9';">
                    <i class="fas fa-map-marker-alt"></i>
                    MONTE ALBÁN NO. 27 LOMAS DE MONTE MARÍA ATIZAPÁN DE ZARAGOZA ESTADO DE MÉXICO C.P. 52918
                  </li>

                </ul>
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

  <script defer src="https://widget.tochat.be/bundle.js?key=7833085e-d203-464c-a16b-6ebcfe34a3af"></script>
  
</body>
</html>