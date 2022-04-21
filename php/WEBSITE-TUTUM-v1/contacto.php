<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TUTUM | Contacto">
  <meta name="theme-color" content="#111">

  <title>TUTUM | Contacto </title>

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
  <?php include("php/sliders/slide-section-contacto.php"); ?>

  <section py="5" class="body-back">

    <article>

      <div class="container-default">
        <div class="row">

          <div class="col-md-6">
            <h2>Soluciones Integrales de TI</h2>
            <p>
              Somos una empresa, dinámica, innovadora y 100% mexicana; dedicada a brindar servicios de consultoría tecnológica y soluciones integrales de TI.
            </p>
            <br>
            <ol>
              
              <li><i class="fas fa-envelope"></i> contacto@tutum.com.mx</li>
              <li><i class="fas fa-phone"></i>55 4172 7180</li>
              <li><i class="fas fa-clock"></i> lunes a viernes de 10:00 am a 07:00 pm </li>
              <li>
                <i class="fas fa-map-marker-alt"></i>
                Av. de los Insurgentes Sur 1811-piso 5, Guadalupe Inn, Álvaro Obregón, 01020 Ciudad de México, CDMX
              </li>
            </ol>
          </div>

          <div class="col-md-6">
            <form>
              <h3>Escribenos y en breve uno de nuestros especialistas te contactarán lo antes posible</h3>
              <input type="text" name="name" placeholder="Nombre">
              <input type="text" name="phone" placeholder="Teléfono">
              <input type="text" name="email" placeholder="E-mail">
              <select name="service">
                <option value="none">-- Seclecciona el servicio --</option>
                <option value="sap">SAP</option>
              </select>
              <textarea name="comments" placeholder="Escribe tu mensaje"></textarea>
              <button name="btn-submit" value="new" type="submit">Enviar <i class="fas fa-paper-plane"></i></button>
            </form>
          </div>

        </div>

      </div>

      <div class="container-us">
          <div class="row">

            <div class="col-md-12">

              <ol class="square-operacion-2">

                <li>
                  <span>1</span>
                  <h3>Fabrica de software</h3>
                </li>

                <li>
                  <span>2</span>
                  <h3>Desarrollo e implementacion</h3>
                </li>

                <li>
                  <span>3</span>
                  <h3>Ciberseguridad​</h3>
                </li>

                <li>
                  <span>4</span>
                  <h3>Operación</h3>
                </li>

                <li>
                  <span>5</span>
                  <h3>Centro de atención a usuarios</h3>
                </li>

                <li>
                  <span>6</span>
                  <h3>SAP</h3>
                </li>

              </ol>
            </div>
            
          </div>
        </div>

      <div>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.2896604665757!2d-99.18695628461334!3d19.35660654812098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fff47a33022d%3A0xb8cb7dd5f0cfd095!2sTUTUM%20TECH%2C%20S.A.%20DE%20C.V.!5e0!3m2!1ses-419!2smx!4v1647449296251!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
      </div>

    </article>

  </section>

  <?php 

    include 'php/modal.php';
    include 'php/footer.php';

  ?>
  
</body>
</html>