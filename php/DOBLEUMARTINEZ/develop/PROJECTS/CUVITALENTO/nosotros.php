<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Empresa dedicada en brindar soluciones y servicios de recursos humanos, consultoría administrativa, contable y de marketing">
  <meta name="author" content="Dobleu Martinez">
  <meta name="theme-color" content="#111">

    
  <title>CUVITALENTO | Nosotros </title>

  <link href="images/logo/icon.png" rel="shortcut icon"/>

  <link rel="manifest" href="https://atsonline.com.mx/images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="32x32" href="https://atsonline.com.mx/images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="16x16" href="https://atsonline.com.mx/images/logo/icon.png">


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

  <?php //include("php/slide.php");?> 

  <?php include("php/slide-nosotros.php");?>  


  <section py="5" class="body-back">

    <article>

      <!-- CONTAINER -US -->
      <div  class="container">
        <div class="container-us">

          <div class="row no-gutters">
            
            <div class="col-md-6" style="margin: auto;">
              <h2>
                CUVI TALENTO
              </h2>
                <p>
                Somos una empresa de nuevo talento que surge gracias a la detección de oportunidades existentes en el mercado de administración de personal. Nuestro objetivo es  brindar al mercado una nueva alternativa con procesos más eficaces, precios competitivos y el uso de herramientas que permitan proporcionar un servicio de calidad a nuestros cliente.<br>
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

          <br><br>

          <div class="row no-gutters">
            
            <div class="col-md-6" style="margin: auto;">
              <h2>
                Misión
              </h2>
              <p>
                Somos una empresa dedicada en brindar soluciones y servicios de administración de personal y consultoría administrativa, proporcionando las herramientas, procesos y personal de confianza a nuestros clientes.
              </p>

            </div>

            <div class="col-md-6" style="margin: auto;">
              <h2>
                Visión
              </h2>
              <p>
                Ser una empresa reconocida por su calidad y rapidez con la que responde a sus clientes de la misma forma en la que brindamos a nuestros colaboradores un lugar agradable, sano, con sentido de pertenencia, permitiéndoles desarrollar sus habilidades y su crecimiento laboral. 
              </p>

            </div>

          </div>

        </div>
      </div>

       
      <div class="container-fluid">

        <div class="row no-gutters">
          <div class="col-md-12">
            <div class="container-work">

              <h2>Valores</h2>
              <div class="slider-principal">
                <div id="our-work" class="carousel slide" data-ride="carousel">    

                  <div class="carousel-inner">

                    <div class="carousel-item active">

                      <ul class="clientes">

                        <li>
                          <img src="images/icons/honesty.png" title="Polymat" alt="Polymat">
                          <p>Honestidad</p>
                        </li>

                        <li>
                          <img src="images/icons/friendship.png" title="Polymat" alt="Polymat">
                          <p>Respeto</p>
                        </li>

                        <li>
                          <img src="images/icons/equilibrio.png" title="Polymat" alt="Polymat">
                          <p>Equidad</p>
                        </li>

                        <li>
                          <img src="images/icons/unido.png" title="Polymat" alt="Polymat">
                          <p>Inclusión</p>
                        </li>

                        <li>
                          <img src="images/icons/responsibility.png" title="Polymat" alt="Polymat">
                          <p>Responsabilidad</p>
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