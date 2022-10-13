<!DOCTYPE html>
<html lang="es">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Desarrollo organizacional y gestion del capital humano webinars gratuitos.">
  <meta name="author" content="Dobleu Martinez">
  <meta name="theme-color" content="#111">

    
  <title>ATS | Webinars </title>

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

  <?php include("php/slide-webinar.php");?>  

  <section py="5" >

    <article>

      <div style="background: #111;" id="contacto">
        <div class="container-fluid" style="margin-top: 0; padding: 0;" >
          <div class="container-contact">
            <div class="row no-gutters">

              <div class="col-md-6" style="background: #111;">
                <h3>Inscríbete a nuestros Webinars informativos.</h3>
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
                    <!--<option value="none">-- Selecciona --</option>
                    <option value="asesoria">Acesoria por Exertos</option>
                    <option value="plataforma">Prueba Demo</option>
                    <option value="demostración">Demostración de Plataforma</option>-->
                    <option value="webinar">Webinar</option>
                  </select>
                  
                  <label>Escribenos tu mensaje</label>
                  <textarea style="margin-top: 15px;" name="msg" placeholder="Escribe tu mensaje..." required="required"></textarea> <br>

                  <center><button name="action" value="new_contact">Enviar</button></center>
                </form>            
              </div>

              <div class="col-md-6">

                <img style="width: 90%; padding: 5% 0%; margin: 0% 5%; " src="./images/img/nosotros-03.jpg"> 

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