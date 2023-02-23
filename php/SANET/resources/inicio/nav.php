<!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PWNN66M');</script>
<!-- End Google Tag Manager -->

<!-- NAV BAR -->
  <div class="nav-bar">

    <!-- NAV BAR DESKTOP -->
    <nav class="container-header">

      <!-- LOGO -->
      <div onclick="window.location.href='<?php echo $url;?>';">
        <img src="images/logo/logo.png" title="Sistema de Información Hospitalaria sanet logo" alt="Sistema de Información Hospitalaria sanet logo" >
      </div>

      <!-- RUTAS -->
      <ul class="color-font-menu">

        <li class="<?php if(!isset($_GET['seccion'])){echo 'active-section';} ?>" 
          onclick="window.location.href='./';">Inicio</li>

        <li class="<?php if(isset($_GET['seccion'])&&($_GET['seccion'])=='quienes-somos'){echo 'active-section';} ?>">
          <a href="quienes-somos" >Quiénes somos</a>
        </li>

        <li class="dropdown-menu-ttm <?php if(isset($_GET['seccion'])&&($_GET['seccion'])=='sanet'){echo 'active-section';} ?>">
          <a href="sanet" >Sanet</a>
          <ol>
            <li onclick="window.location.href='./modulos-sih';" >Módulos SIH</li>
            <li onclick="window.location.href='https://sanet.com.mx/modulos-sih#modulos-administrativos';" >Módulos administrativos</li>
            <li onclick="window.location.href='https://sanet.com.mx/modulos-sih#modulos-clinicos';" >Módulos clínicos</li>
            <li onclick="window.location.href='https://sanet.com.mx/modulos-sih#modulos-configuracion';" >Módulos de configuración</li>
          </ol>
        </li>

        <li class="<?php if(isset($_GET['seccion'])&&($_GET['seccion'])=='licencias'){echo 'active-section';} ?>">
          <a href="licencias" >Licencias</a>
        </li>

        <li class="<?php if(isset($_GET['seccion'])&&($_GET['seccion'])=='contacto'){echo 'active-section';} ?>">
          <a href="contacto" >Contacto</a>
        </li>

        <li style="border-top: 4px solid #0000!important; padding: 0%;">
          <button class="cta-whatsapp" onclick="window.open('https://api.whatsapp.com/send?phone=525579285696&text=Estoy%20interesado%20en%20conocer%20mas%20sobre%20sanet');" ><i class="fab fa-whatsapp" ></i> Whatsapp</button>
        </li>

      </ul>

    </nav>

    <!-- NAV BAR MOVIL -->
    <nav class="container-header-mobil">
      <ol>

        <li><img src="<?php echo $url;?>images/logo/logo.png" onclick="window.location.href='./';" title="logo sanet" alt="Logo Sanet png"></li>

        <li style="position: relative;" >

          <i class="fas fa-bars" ></i>  

          <ul class="menu-mobil">

            <li onclick="window.location.href='./';">Inicio</li>

            <li>
              <a href="quienes-somos" >Quiénes somos</a>
            </li>

            <li>
              <a href="sanet">Sanet</a>
            </li>

            <li>
              <a href="modulos-sih" >Módulos sih</a>
            </li>

            <li onclick="window.location.href='modulos-sih#modulos-administrativos';" >
              Módulos administrativos
            </li>

            <li onclick="window.location.href='modulos-sih#modulos-clinicos';" >
              Módulos clínicos
            </li>

            <li onclick="window.location.href='modulos-sih#modulos-configuracion';" >
              Módulos de configuración
            </li>

            <li>
              <a href="licencias" >Licencias</a>
            </li>

            <li>
              <a href="contacto" >Contacto</a>
            </li>
          </ul>

        </li>

      </ol>
    </nav>

    <!-- ir-arriba -->
    <div class="ir-arriba" >
      <i class="flecha fas fa-chevron-circle-up"></i>
    </div>

  </div>
