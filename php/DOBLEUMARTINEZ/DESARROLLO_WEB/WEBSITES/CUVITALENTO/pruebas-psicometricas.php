<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Empresa dedicada en brindar soluciones y servicios de pruebas psicometricas">
  <meta name="author" content="Dobleu Martinez">
  <meta name="theme-color" content="#111">

    
  <title>CUVITALENTO | Pruebas psicometricas </title>

  <link href="images/logo/icon.png" rel="shortcut icon"/>

  <link rel="manifest" href="https://cuvitalento.com/images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="32x32" href="https://cuvitalento.com/images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="16x16" href="https://cuvitalento.com/images/logo/icon.png">


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

  <?php include("php/head.php");?>

  <?php include("php/slide-nosotros.php");?>  


  <section py="5" class="body-back">

    <article>

      <!-- SERVICIOS  -->
      <div  class="container">

        <div class="container-us">

          <div class="row no-gutters">

            <div class="col-md-12">
              <div class="container-work">

                <h2 style="margin-bottom: 1%;">
                  Pruebas psicométricas 
                </h2>

              </div>
            </div>

            <div class="col-md-8">
                <h3>¿Qué es?</h3>
                <p>
                  Son una herramienta que permite a los empleadores realizar una aproximación a los rasgos de los potenciales trabajadores.
                </p> 
              </div>
              <div class="col-md-4">
                <img class="w-img-s1 img-fluid desktop" src="./images/img/nosotros-02.jpg" title="ats" alt="ats">
            </div>

            <div class="col-md-12">
                <h3>
                  Tipos de pruebas
                </h3>
                <ol id="type-perfil">
                  <li id="pruebas-psico" >
                    <img src="images/icons/skills.png"><p style="padding-left: 0.5em;">Competencias</p>
                  </li>
                  <li id="pruebas-psico" >
                    <img src="images/icons/honesty.png"><p style="padding-left: 0.5em;">Honestidad</p>
                  </li>
                  <li id="pruebas-psico" >
                    <img src="images/icons/thinking.png"><p style="padding-left: 0.5em;">Inteligencia</p>
                  </li>
                  <li id="pruebas-psico" >
                    <img src="images/icons/personality-disorder.png"><p style="padding-left: 0.5em;">Personalidad</p>
                  </li>
                </ol>
            </div>

          </div>

        </div>

      </div>

      <!-- socios 
      <div class="container-fluid">

        <div class="row no-gutters">
          <div class="col-md-12">
            <div class="container-work">

              <h2>Nuestros Socios</h2>
              <div class="slider-principal">
                <div id="our-work" class="carousel slide" data-ride="carousel">    

                  <div class="carousel-inner">

                    <div class="carousel-item active">

                      <ul class="clientes">

                        <li>
                          <img src="images/img/socios/logo-0.png" title="Polymat" alt="Polymat">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-1.png" title="Olarte y Akle" alt="Olarte y Akle">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-2.png" title="Grupo Gondi" alt="Grupo Gondi">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-3.png" title="Alta Especialidad" alt="Alta Especialidad">
                        </li>

                      </ul>
                      <br><br>
                      <ul class="clientes">

                        <li>
                          <img src="images/img/socios/logo-4.png" title="Funerales Fernandez" alt="Funerales Fernandez">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-5.png" title="Telas Y Tapices Paulino" alt="Telas Y Tapices Paulino">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-6.png" title="Avant Grade" alt="Avant Grade">
                        </li>
                        
                        <li>
                          <img src="images/img/socios/logo-7.png" title="Mitsubishi Mexico" alt="Mitsubishi Mexico">
                        </li>

                      </ul>

                    </div>
              
                  </div>

                </div>  
              </div>
            </div>
          </div>
        </div>

      </div>-->

      <br><br>

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
                  
                  <label>Escribenos tu mensaje</label>
                  <textarea style="margin-top: 15px;" name="service" placeholder="Escribe tu mensaje..." required="required"></textarea> <br>

                  <center><button name="action" value="new_contact">Enviar</button></center>
                </form>           
              </div>
              <div class="col-md-5">

                <iframe class="desktop"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60200.41270676714!2d-99.18829214871735!3d19.43288458508193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8d4f06a3269%3A0xa79656ce3ffc06e5!2sCuauht%C3%A9moc%2C%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1645988061396!5m2!1ses-419!2smx" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

              <div class="container-end">
                <ul>
                  <li  onclick="window.location.href='tel:5546490418';"><i  id="rotate" class="fas fa-phone"></i> 55 4649 0418 </li>
                  <li onclick="window.location.href='mailto:contacto@cuvitalento.com';"><i class="fas fa-envelope" ></i> contacto@cuvitalento.com</li>

                  <li onclick="window.location.href='https://goo.gl/maps/ZCmDQM6jhg3GbkC36';">
                    <i class="fas fa-map-marker-alt"></i>
                    Cuauhtémoc,Ciudad de México, CDMX
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
  
</body>

</html>