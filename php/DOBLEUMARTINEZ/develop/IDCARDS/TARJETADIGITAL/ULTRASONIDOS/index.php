<!DOCTYPE html>
<html lang="en">
<head>

  <?php include('./php/information.php');?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<? echo $enterprise;?> | <? echo $description;?>">
  <meta name="author" content="dobleumartinez.com">

  <!-- add to desktop -->
  <link rel="manifest" href="manifest.json">

  <!-- Favicon --> 

  <link href="images/icons/<?php echo $icon;?>" rel="shortcut icon"/>

  <link rel="icon" type="images/icons/<?php echo $icon;?>" sizes="32x32" href="<?php echo $url; ?>/images/icons/<?php echo $icon;?>">

  <link rel="icon" type="images/icons/<?php echo $icon;?>" sizes="16x16" href="<?php echo $url; ?>/images/icons/<?php echo $icon;?>">

  <link rel="manifest" href="<?php echo $url; ?>/images/icons/<?php echo $icon;?>">
        
         
  <title><?php echo $name; ?> | <?php echo $job; ?></title>

 
  <!-- description -->
  <meta property="og:title" content="<? echo $name;?>">
  <meta property="og:description" content="<? echo $description;?>">
  <meta property="og:url" content="<?php echo $url; ?>">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="es_MX">
  <meta property="og:site_name" content="$enterprise">

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

      <!-- CONTENEDOR PRINCIPAL-->
      <div class="container-sections">         
        
        <!-- IDIOMA -->
        <div class="active-lang" style="display: none;">
          <span class="lang-esp"><img src="./images/img/flag1.png" style="width: 40px"></span>
          <span class="lang-eng"><img src="./images/img/flag2.png" style="width: 40px"></span>
        </div>
         
        <!-- CUERPO ID --> 
        <div class="body-coontent">

          <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" style="margin: 0%;">

              <div class="body-id">

                <!-- LOGO -->
                <div class="enterprise-logo">
                  <img src="./images/logo/<?php echo $logo;?>">
                </div>
                
                <!-- FOTO DE PERFIL -->
                <div class="picture-id opc-resume">
                  <img src="./images/picture/<?php echo $pick;?>">
                </div>

                <!-- INFO PERFIL-->
                <div class="info-id">
                  <h1><?php echo $name;?></h1>
                  <h2><?php echo $job;?></h2>
                  <h3><?php echo $cedulaProf;?></h3>
                </div>

                <!-- BOTON SERVICIOS -->
                <div class="services-id" > 
                  <button class="opc-services " >
                    <span class="lang-esp">Servicios</span>
                    <span class="lang-eng">Servicios</span>
                  </button>
                </div>

                <!-- CONTACTO -->
                <div class="contact-id" > 
                  <ul>

                    <li onclick="window.location.href='tel:<?php echo $phone;?>';" >
                      <i class="fas fa-phone" style="transform: rotate(90deg);"></i>
                    </li>

                    <li onclick="window.location.href='https://wa.me/<?php echo $phone_2;?>';" >
                      <i class="fab fa-whatsapp"></i>
                    </li>

                    

                    <?php 
                      foreach ($socialMedia as $redsocial => $url_red) {
                        if (!empty($url_red)) {
                          ?>
                            <li  onclick="window.location.href='<?php echo $url_red; ?>';" >
                              <i class="<?php echo $redsocial; ?>"></i>
                            </li>
                          <?php
                        }
                      }
                    ?>

                    <li onclick="window.location.href='mailto:<?php echo $mail;?>';" >
                      <i class="far fa-envelope"></i>
                    </li>

                    <!--<li onclick="window.location.href='<?php echo $url_enterprise;?>';" >
                      <i class="fas fa-globe"></i>
                    </li>

                    <li onclick="window.location.href='./JOSE_MARTINEZ.vcf';" >
                      <i class="fas fa-save"></i>
                    </li>-->


                    <li class="opc-share">
                      <i class="far fa-paper-plane"></i>
                    </li>

                    <li onclick="window.location.href='<?php echo $address;?>';" >
                      <i class="fas fa-map-marker-alt"></i>
                    </li>

                    <li class="opc-share">
                      <i class="fas fa-share-alt"></i>
                    </li>

                  </ul>

                  <!-- social media -->
                  <ul style="display: none;">
                    <?php 
                      foreach ($socialMedia as $redsocial => $url_red) {
                        if (!empty($url_red)) {
                          ?>
                            <li  onclick="window.location.href='<?php echo $url_red; ?>';" >
                              <i class="<?php echo $redsocial; ?>"></i>
                            </li>
                          <?php
                        }
                      }
                    ?>
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

        <!-- CONTENEDORES LATERALES -->
        <div class="body-lateral-content">

          <div class="row-lateral-content">

              <span class="close">
                <i class="fas fa-times "></i>
              </span>

              <!-- INFO PERFIL -->
              <div class="resume-content">
                <div style="margin: auto;" >
                  <h1><?php echo $enterprise;?></h1>
                  <p><?php echo str_replace('+', '</br></br>', $description);?></p>
                  <img class="qr-img" src="./images/qr/<?php echo $qr;?>">
                </div>
              </div>

              <!-- SERVICIOS -->
              <div class="services-content">
                <div style="margin: auto;">
                  <?php 
                    foreach ($services as $key => $value) {
                      ?>
                        <h2 onclick="window.location.href='https://wa.me/<?php echo $phone_2;?>';" >
                          <?php echo $value; ?>
                        </h2>
                      <?php
                    }
                  ?>
                </div>
              </div>

              <!-- SHARE -->
              <div class="share-content">
                <div style="margin: auto;" >
                  <h2 onclick="window.open('whatsapp://send?text=<?php echo $url;?>');" > WhatsApp </h2>
                  <h2 onclick="window.location.href='fb-messenger://share/?link=<?php echo $url; ?>';" > Facebook </h2>
                  <h2 onclick="window.location.href='fb-messenger://share/?link=<?php echo $url; ?>';" > Messenger </h2>
                  <h2 onclick="window.location.href='mailto:?body=<?php echo $url; ?>';" > Email </h2>
                </div>
              </div>

          </div>

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
