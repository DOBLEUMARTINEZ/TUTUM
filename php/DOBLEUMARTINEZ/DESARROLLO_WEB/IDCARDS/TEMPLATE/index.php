<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- information -->
  <?php include('./php/information.php');?>

  <!-- add to desktop -->
  <link rel="manifest" href="manifest.json">

  <!-- Favicon --> 

  <link href="images/icons/icon-caprichos.png" rel="shortcut icon"/>

  <link rel="icon" type="images/icons/icon-caprichos.png" sizes="32x32" href="<?php echo $url; ?>/images/icons/icon-caprichos.png">

  <link rel="icon" type="images/icons/icon-caprichos.png" sizes="16x16" href="<?php echo $url; ?>/images/icons/icon-caprichos.png">

  <link rel="manifest" href="<?php echo $url; ?>/images/icons/icon-caprichos.png">
        
         
  <title><?php echo $name; ?> - <?php echo $job; ?> - <?php echo $enterprise; ?> </title>

 
  <!-- description -->
  <meta property="og:title" content="">
  <meta property="og:description" content="<?php echo $job; ?>">
  <meta property="og:url" content="<?php echo $url; ?>">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="es_MX">
  <meta property="og:site_name" content="">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- STYLE W -->
    <link href="css/style.css" rel="stylesheet">

  <!--icons--->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  <!--fonts--->
  <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">

  <!--jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!--traslate -->
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</head>

  <body>

      <!--inicio-->
      <div class="container-sections">         
        
        <div class="active-lang" style="display: none;">
          <span class="lang-esp"><img src="./images/img/flag1.png" style="width: 40px"></span>
          <span class="lang-eng"><img src="./images/img/flag2.png" style="width: 40px"></span>
        </div>
         
        <div class="body-coontent">

          <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" style="margin: 0%;">

              <div class="body-id">

                <div class="enterprise-logo">
                  
                </div>
                
                <div class="picture-id opc-resume">
                  <img src="./images/picture/dobleu-2.jpg">
                </div>

                <div class="info-id">
                  <h1><?php echo $name;?></h1>
                  <h2><?php echo $job;?></h2>
                </div>

                <div class="services-id" > 
                  <button class="opc-services " >
                    <span class="lang-esp">Servicios</span>
                    <span class="lang-eng">Servicios</span>
                  </button>
                  <button class="opc-services2" style="margin-top: 0%; display: none;">
                    <span class="lang-esp">Cristales</span>
                    <span class="lang-eng">Crystals</span>
                  </button>
                </div>

                <div class="contact-id" > 
                  <ul>
                    <li onclick="window.location.href='tel:<?php echo $phone;?>';" >
                      <i class="fas fa-phone" style="transform: rotate(90deg);"></i>
                    </li>
                    <li onclick="window.location.href='https://wa.me/<?php echo $phone_2;?>';" >
                      <i class="fab fa-whatsapp"></i>
                    </li>
                    <li onclick="window.location.href='mailto:<?php echo $mail;?>';" >
                      <i class="far fa-envelope"></i>
                    </li>
                    <li  onclick="window.location.href='https://www.facebook.com/caprichos_impresos-580482725940218';" >
                      <i class="fab fa-facebook-f"></i>
                    </li>
                    <li  onclick="window.location.href='https://www.instagram.com/caprichos_impresos/?hl=es-la';" >
                      <i class="fab fa-instagram"></i>
                    </li>
                    <li class="opc-share" >
                      <i class="far fa-paper-plane"></i>
                    </li>
                  </ul>
                </div>

                <!-- add to desktop -->
                <div class="add-to" style="width: 100%; text-align: center; margin: 5% 0% 0% 0%; background-color: #0000;">
                  <button class="add-to-btn" style="background-color: #0000; border:none; outline: none; color: #ffffff70; font-family: 'Questrial', sans-serif; letter-spacing: 1px;">Instalar</button>
                </div>

              </div>

            </div>
          </div>
        </div>

        <div class="body-lateral-content">

          <div class="row-lateral-content">

              <span class="close">
                <i class="fas fa-times "></i>
              </span>

              <div class="resume-content">
                <div style="margin: auto;" >
                  <h1>CAPRICHOS IMPRESOS</h1>
                  <h2><?php echo $job;?></h2>
                  <p>
                    EMPRESA DEDICADA A LA PUBLICIDAD EN GRAN FORMATO.
                    <br><br>
                  </p>
                </div>
              </div>


              <div class="services-content">
                <div style="margin: auto; display: none;" >

                  <ul class="gallery">
                    <li><img class="gallery-active-1" src="./images/img/gallery_1.jpg"></li>
                    <li><img class="gallery-active-2" src="./images/img/gallery_2.jpg"></li>
                    <li><img class="gallery-active-3"  src="./images/img/gallery_3.jpg"></li>
                    <li><img class="gallery-active-4"  src="./images/img/gallery_4.jpg"></li>
                    <li><img class="gallery-active-5"  src="./images/img/gallery_5.jpg"></li>
                    <li><img class="gallery-active-6"  src="./images/img/gallery_6.jpg"></li>
                  </ul>

                  <button onclick="window.location.href='https://wa.me/<?php echo $phone_2;?>';">
                    <i class="fab fa-whatsapp"></i>
                    <span class="lang-esp">Cotizar</span>
                    <span class="lang-eng">Quote</span>
                  </button>


                  <div class="gallery-active gall-1" style="display: none;">
                    <img src="./images/img/gallery_1.jpg" width="100%"></li>
                  </div>

                  <div class="gallery-active gall-2" style="display: none;">
                    <img src="./images/img/gallery_2.jpg" width="100%"></li>
                  </div>

                  <div class="gallery-active gall-3" style="display: none;">
                    <img src="./images/img/gallery_3.jpg" width="100%"></li>
                  </div>

                  <div class="gallery-active gall-4" style="display: none;">
                    <img src="./images/img/gallery_4.jpg" width="100%"></li>
                  </div>

                  <div class="gallery-active gall-5" style="display: none;">
                    <img src="./images/img/gallery_5.jpg" width="100%"></li>
                  </div>

                  <div class="gallery-active gall-6" style="display: none;">
                    <img src="./images/img/gallery_6.jpg" width="100%"></li>
                  </div>


                </div>

                <div style="margin: auto;">
                  <h2>Impresión a gran formato.</h2>
                  <h2>Diseño Gráfico.</h2>
                  <h2>Redes sociales.</h2>
                  <h2>Consultoría digital.</h2>
                  <button onclick="window.location.href='https://wa.me/<?php echo $phone_2;?>';" >COTIZA AHORA </button>
                </div>

              </div>

              <div class="services2-content">
                <div style="margin: auto;" >

                  <ul class="gallery">
                    <li><img class="gallery-active-1" src="./images/img/gallery_1.jpg"></li>
                    <li><img class="gallery-active-2" src="./images/img/gallery_2.jpg"></li>
                    <li><img class="gallery-active-3"  src="./images/img/gallery_3.jpg"></li>
                    <li><img class="gallery-active-4"  src="./images/img/gallery_4.jpg"></li>
                    <li><img class="gallery-active-5"  src="./images/img/gallery_5.jpg"></li>
                    <li><img class="gallery-active-6"  src="./images/img/gallery_6.jpg"></li>
                  </ul>

                  <button onclick="window.location.href='https://wa.me/<?php echo $phone_2;?>';">
                    <i class="fab fa-whatsapp"></i>
                    <span class="lang-esp">Cotizar</span>
                    <span class="lang-eng">Quote</span>
                  </button>


                  <div class="gallery-active gall-1" style="display: none;">
                    <img src="./images/img/gallery_1.jpg" width="100%"></li>
                  </div>

                  <div class="gallery-active gall-2" style="display: none;">
                    <img src="./images/img/gallery_2.jpg" width="100%"></li>
                  </div>

                  <div class="gallery-active gall-3" style="display: none;">
                    <img src="./images/img/gallery_3.jpg" width="100%"></li>
                  </div>

                  <div class="gallery-active gall-4" style="display: none;">
                    <img src="./images/img/gallery_4.jpg" width="100%"></li>
                  </div>

                  <div class="gallery-active gall-5" style="display: none;">
                    <img src="./images/img/gallery_5.jpg" width="100%"></li>
                  </div>

                  <div class="gallery-active gall-6" style="display: none;">
                    <img src="./images/img/gallery_6.jpg" width="100%"></li>
                  </div>

                </div>
              </div>


              <div class="share-content">
                <div style="margin: auto;" >
                  <h2 onclick="window.open('whatsapp://send?text=<?php echo $url; ?>');" > WhatsApp </h2>
                  <h2 onclick="window.location.href='fb-messenger://share/?link=<?php echo $url; ?>';" > Facebook </h2>
                  <h2 onclick="window.location.href='fb-messenger://share/?link=<?php echo $url; ?>';" > Messenger </h2>
                  <h2 onclick="window.location.href='mailto:?body=<?php echo $url; ?>';" > Email </h2>
                </div>
              </div>

          </div>

        </div>

        <div class="dicard-logo" onclick="window.open('https://www.dicard.com.mx/');">
          Dicard® v1.2 
        </div>        
      </div>


      <!-- add to desktop -->
      <script type="text/javascript">
        if ('serviceWorker' in navigator) {
          window.addEventListener('load', function() {

            navigator.serviceWorker.register('sw.js').then(function(registration) {

                // Registration was successful
                console.log('ServiceWorker registration successful with scope: ', registration.scope);
              }, function(err) {

                // registration failed :(
                console.log('ServiceWorker registration failed: ', err);
              });

            });
        }

        let deferredPrompt;
        var div = document.querySelector('.add-to');
        var button = document.querySelector('.add-to-btn');
        div.style.display = 'none';

        window.addEventListener('beforeinstallprompt', (e) => {
          // Prevent Chrome 67 and earlier from automatically showing the prompt
          e.preventDefault();
          // Stash the event so it can be triggered later.
          deferredPrompt = e;
          div.style.display = 'block';

          button.addEventListener('click', (e) => {
            // hide our user interface that shows our A2HS button
            div.style.display = 'none';
            // Show the prompt
            deferredPrompt.prompt();
            // Wait for the user to respond to the prompt
            deferredPrompt.userChoice
            
              .then((choiceResult) => {
                if (choiceResult.outcome === 'accepted') {
                  console.log('User accepted the A2HS prompt');
                } else {
                  console.log('User dismissed the A2HS prompt');
                }
                deferredPrompt = null;
              });

            });

        });

      </script>


      <!-- Bootstrap core JavaScript -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

      <!-- Template Main Javascript File -->
      <script src="js/js.js"></script>

  </body>
</html>
