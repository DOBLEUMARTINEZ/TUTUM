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

      <?php include 'src/contact-box.php'; ?>

    </article>
  </section>

  <?php 

    include 'php/modal.php';

    include 'php/footer.php';

  ?>
  
</body>

</html>