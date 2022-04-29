<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sipla - Invernaderos">
  <meta name="author" content="Dimarketing">

  <!-- Favicon -->   
  <link href="./images/icon/icon.png" rel="shortcut icon"/>

  <title>Sipla - Invernaderos</title> 

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- STYLE W -->
    <link href="./css/style.css" rel="stylesheet">

  <!-- slider --> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!--icons--->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  <!--jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!--fonts--->
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  
</head>

  <body>

    <!-- bitton whatsApp-->
    <button class="button-whatsapp" 
      onclick="window.open('https://wa.me/525540602956?text=<?php 
      echo(str_replace(' ', '%20', 'Me interesa un Invernadero')) ?>');" 
      >
        <p><i class="fab fa-whatsapp"></i></p><h2>Cotiza tu invernadero</h2>
    </button>

    <?php include("./php/head.php");?>

    <div class="slider-00">
      <div id="carouselExampleControls" class="carousel carousel-2 slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active ">
            <div class="box-slider">
              <img class="d-block w-100 ban-pc" src="./images/banner/banner_5.jpg">
              <img class="d-block w-100 ban-mobil" src="./images/banner/banner_5_m.jpg">
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="box-01">
      <div class="row">
        <div class="col-md-7">

          <h2>Invernaderos</h2>
          <p>Diseñamos y configuramos nuestros invernaderos con diversas soluciones en estructuras, recubrimientos, automatismos y equipamientos en función de la aplicación deseada.</p>
          <ul>
            <li><i class="fab fa-envira"></i> Fabricados a la medida.</li> 
            <li><i class="fab fa-envira"></i> Herrajes de ensamble, totalmente desarmables.</li>
            <li><i class="fab fa-envira"></i> Diseñados con un sistema modular.</li>
            <li><i class="fab fa-envira"></i> Alta calidad en materias y manufactura</li> 
            <li><i class="fab fa-envira"></i> Resistencia de hasta 50 kilos por metro cuadrado.</li>
            <li><i class="fab fa-envira"></i> Materiales galvanizados bajo la norma g90.</li>
          </ul>
        </div>

        <div class="col-md-5">
          <img src="./images/img/sipla_3.png" class="hidden-sm" title="sipla, Sistemas integrales para la agricultura" alt="sipla, Sistemas integrales para la agricultura">
          <img src="./images/img/invernadero_4.png" class="hidden-md" title="sipla, Sistemas integrales para la agricultura" alt="sipla, Sistemas integrales para la agricultura">
        </div>

      </div>
    </div>

    <div class="box-03">

      <div class="row">

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/safe.svg">
            <p>Protege las especies más delicadas.</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/cosecha.svg">
            <p>Obtienes cosecha durante todo el año.</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/cosecha_2.svg">
            <p>Disfrutar de tus cosechas sin depender de la estacionalidad.</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="box-icon-2" >
            <img src="./images/icon/simulate.svg">
            <p>Simula distintos tipos de clima.</p>
          </div>
        </div>

      </div>
    </div>

    <div class="box-06" style="background: #f1f1f1;">

      <div class="row">
        <div class="col-md-12">
          <h2>Incluye</h2>
        </div>
      </div>

      <div class="row" style="justify-content:center;">
        <div class="col-md-3">
          <ul class="txt-rgt">
            <li onclick="window.location.href='./product_2.php';"><p>Bancos hidropónicos <i class="fas fa-water"></i></p></li>
            <li onclick="window.location.href='./product_1.php';"><p>Sistema de Riego <i class="fas fa-tint"></i></p></li>
            <li onclick="window.location.href='./#';"><p style="border: none;">Semillas <i class="fas fa-seedling"></i></p></li>
          </ul>
        </div>
        <div class="col-md-4">
          <img src="./images/img/invernadero.png">
        </div>
        <div class="col-md-3">
          <ul class="txt-lft">
            <li onclick="window.location.href='./#';"><p>Sustratos <i class="fas fa-leaf"></i></p></li>
            
            <li onclick="window.location.href='./#';"><p>Nutrientes <i class="fas fa-seedling"></i></p></li>
            
            <li><p style="border: none;"></p></li>
          </ul>
        </div>
      </div>

    </div>

    <div class="box-05">
      <div class="row">
        <div class="col-md-12">
          <h2>Aplicaciones</h2>
          <ul>  
            <li data-toggle="modal" data-target="#modal-campo" >
              <span>Horticultura </span>
              <img src="./images/img/greenhouse_3.jpg">
            </li>
            <li data-toggle="modal" data-target="#modal-campo" >
              <span>Floricultura</span>
              <img src="./images/img/greenhouse_4.jpg">
            </li>
            <li data-toggle="modal" data-target="#modal-campo" >
              <span>Viveros</span>
              <img src="./images/img/greenhouse_5.jpg">
            </li>
            <li data-toggle="modal" data-target="#modal-campo" >
              <span>Ganadería</span>
              <img src="./images/img/greenhouse_6.jpg">
            </li>
            <li data-toggle="modal" data-target="#modal-campo" >
              <span>Garden</span>
              <img src="./images/img/greenhouse_7.jpg"> 
            </li>
            <li data-toggle="modal" data-target="#modal-campo">
              <span>Galería</span>
              <img src="./images/img/gallery_1.jpg"> 
            </li>
          </ul>
        </div>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modal-campo" role="dialog">
      <div class="modal-dialog modal-xl">

        <div class="modal-content">
          
          <i class="far fa-times-circle" data-dismiss="modal" style="display: none;"></i>

          <div class="slider-00">
            <div id="carouselExampleControls_2" class="carousel carousel-2 slide" data-ride="carousel" >
              <div class="carousel-inner">

              <!-- GREENHOUSE_GALLERY
                <div class="carousel-item ">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/greenhouse_1.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/greenhouse_2.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>


                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/greenhouse_4.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/greenhouse_3.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/greenhouse_5.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/greenhouse_6.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>
              -->

                <div class="carousel-item active">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/gallery_12.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>    

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/gallery_3.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>  

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/gallery_8.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/gallery_1.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div> 

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/gallery_7.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div> 

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/gallery_2.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/gallery_10.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div> 

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/gallery_16.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div> 

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/gallery_4.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/gallery_6.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div> 

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/gallery_5.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div> 

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/greenhouse/gallery_15.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div> 


              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls_2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls_2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

        </div>

      </div>
    </div>



    <?php include('./php/footer.php'); ?>

    <!-- animations -->
    <?php include('./php/arrowup.php'); ?>

  </body>

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

  <!-- Main Javascript File -->
    <script src="js/main.js"></script>
</html>
