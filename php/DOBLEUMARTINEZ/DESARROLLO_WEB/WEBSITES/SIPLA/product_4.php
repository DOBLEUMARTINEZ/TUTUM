<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sipla - Elementos Constructivos">
  <meta name="author" content="Dimarketing">

  <!-- Favicon -->   
  <link href="./images/icon/icon.png" rel="shortcut icon"/>

  <title>Sipla - Perfiles Especializados</title> 

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
      echo(str_replace(' ', '%20', 'Me interesan Elementos Constructivos')) ?>');" 
      >
        <p><i class="fab fa-whatsapp"></i></p><h2>Estamos en linea</h2>
    </button>

    <?php include("./php/head.php");?>

    <div class="slider-00">
      <div id="carouselExampleControls" class="carousel carousel-2 slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active ">
            <div class="box-slider">
              <img class="d-block w-100 ban-pc" src="./images/banner/banner_10.jpg">
              <img class="d-block w-100 ban-mobil" src="./images/banner/banner_10_m.jpg">
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="box-01">
      <div class="row">
        <div class="col-md-7">
          <h3>Perfiles Especializados</h3>
          <p>Perfiles especializados para todo tipo de invernaderos.</p>
          <ul>
            <li><i class="fab fa-envira"></i> Somos fabricantes.</li> 
            <li><i class="fab fa-envira"></i> Productos patentados.</li>
            <li><i class="fab fa-envira"></i> Adaptable a la forma de sus estructuras.</li> 
            <li><i class="fab fa-envira"></i> Alta calidad en sus materiales y manufactura.</li> 
          </ul>
        </div>
        <div class="col-md-5">
          <img src="./images/img/elements_1.png" class="hidden-sm">
          <img src="./images/img/invernadero_4.png" class="hidden-md">
        </div>
      </div>
    </div>

    <div class="box-03">

      <div class="row">
        <div class="col-md-12">
          <h2>Aplicaciones<br><hr></h2>
        </div>
      </div>

      <div class="row" style="justify-content: space-around;">

        <div class=" box-products-efect">
          <div class="box-products">
            <img src="./images/img/proyect_1.png">
            <h4>Alambre ZIG ZAG</h4>
            <ul>
              <li><i class="fab fa-envira"></i> Galvanizado.</li>
              <li><i class="fab fa-envira"></i> 92 milésimas.</li>
              <li><i class="fab fa-envira"></i> Acerado dureza MB2.</li>
            </ul>
          </div>
        </div>

        <div class=" box-products-efect">
          <div class="box-products">
            <img src="./images/img/proyect_2.png">
            <h4>TUBO EASY-GRAP</h4>
            <ul>
              <li><i class="fab fa-envira"></i> Alta calidad en sus materiales y manufactura (fabricado con lámina galvanizada). </li>
              <li><i class="fab fa-envira"></i> El precio más bajo del mercado.</li>
              <li><i class="fab fa-envira"></i> Dobleces en los bordes para evitar filos que pudieran cortar las películas plásticas o mallas.</li>
              <li><i class="fab fa-envira"></i> Perfil diseñado para largueros perimetrales y para enrollamiento de cortinas.</li>
              <li><i class="fab fa-envira"></i> Fabricado con lámina galvanizada calibre # 20.</li>
            </ul>
          </div>
        </div>

        <div class=" box-products-efect">
          <div class="box-products">
            <img src="./images/img/proyect_3.png">
            <h4>EASY-GRAP</h4>
            <ul>      
              <li><i class="fab fa-envira"></i> Diseño y dimensiones tipo americano base 32 mm ranura 13 mm para el uso de cualquier tipo de herramienta en su instalación (taladro y remachadora).</li>
              <li><i class="fab fa-envira"></i> Admite hasta cuatro capas de polietileno y malla con sus correspondientes resortes con la mayor facilidad.</li>
              <li><i class="fab fa-envira"></i> Es utilizado para sistemas de doble capa logrando un sellado perfecto en la unión o reparación de lienzos.</li>
            </ul>
          </div>
        </div>

        <div class=" box-products-efect">
          <div class="box-products">
            <img src="./images/img/proyect_4.png">
            <h4>CUADRADO EASY-GRAP</h4>
            <ul>
              <li><i class="fab fa-envira"></i> Fabricado en calibre #18 Y #20.</li>
              <li><i class="fab fa-envira"></i> Medidas 1 ½ x 1 ½.</li>
              <li><i class="fab fa-envira"></i> Perfil diseñado para largueros perimetrales, centrales y caballetes.</li>
              <li><i class="fab fa-envira"></i> Alta calidad en el material y manufactura.</li>
            </ul>
          </div>
        </div>

      </div>


    </div>


    <!-- Modal -->
    <div class="modal fade" id="modal-campo" role="dialog">
      <div class="modal-dialog modal-xl">

        <div class="modal-content">
          
          <i class="far fa-times-circle" data-dismiss="modal" style="display: none;"></i>

          <div class="slider-00">
            <div id="carouselExampleControls_5" class="carousel carousel-2 slide" data-ride="carousel" >
              <div class="carousel-inner">


                <div class="carousel-item active">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/elementos/elemento_1.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/elementos/elemento_2.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>


                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/elementos/elemento_4.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/elementos/elemento_3.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/elementos/elemento_5.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/elementos/elemento_6.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/elementos/elemento_7.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/elementos/elemento_8.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="box-slider">
                    <img class="d-block w-100" src="./images/gallery/elementos/elemento_9.jpg" title="Riego y desarrollo de invernaderos" alt="Riego y desarrollo de invernaderos">
                  </div>
                </div>

    

              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls_5" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls_5" role="button" data-slide="next">
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
