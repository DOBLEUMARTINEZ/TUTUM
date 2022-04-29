<!DOCTYPE html>
<html lang="es">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Empresa de apoyo digital y RH para la gestión del talento en las organizaciones">
  <meta name="author" content="Dobleu Martinez">
  <meta name="theme-color" content="#111">

    
  <title>ATS | Contacto</title>

  <link href="images/logo/icon.png" rel="shortcut icon"/>

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

  <?php include("php/slide-contacto.php");?>  

  <section py="5" >

    <article>

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