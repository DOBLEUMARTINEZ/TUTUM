<!-- NAV BAR -->
  <div class="head ">

    <!-- NAV BAR DESKTOP -->
    <nav class="container-header">

      <!-- LOGO - SOCIAL MEDIA -->
      <div>
        <ol id="social-media-icons">
          <li onclick="window.open('https://www.facebook.com/Tutum-Tech-515010355546588');" ><i class="fab fa-facebook-square"></i></li>
          <li onclick="window.open('https://www.instagram.com/tutum.tech/');" ><i class="fab fa-instagram"></i></li>
          <li onclick="window.open('https://www.linkedin.com/company/tutum-tech/mycompany/verification/');" ><i class="fab fa-linkedin"></i></li>
          <li onclick="window.open('https://twitter.com/TutumTech');" ><i class="fab fa-twitter-square"></i></li>
        </ol>
      </div>

      <!-- RUTAS -->
      <ul class="color-font-menu">

        <li  class="dropdown-menu-ttm" onclick="window.location.href='<?php echo $url;?>';">Inicio</li>

        <li  class="dropdown-menu-ttm">
          <a onclick="window.location.href='<?php echo $url;?>identidad#start';" >Identidad</a>
        </li>

        <li  class="dropdown-menu-ttm">
          <a onclick="window.location.href='<?php echo $url;?>servicios#start';" >Servicios</a>

          <ol >
            <li onclick="window.location.href='<?php echo $url;?>servicios-proyectos#start';">
              DESARROLLO DE PROYECTOS TI
            </li>
            <li onclick="window.location.href='<?php echo $url;?>servicios-operacion#start';">
              OPERACIÓN DE PROYECTOS​
            </li>
            <li onclick="window.location.href='<?php echo $url;?>servicios-cau#start';">
              CENTRO DE ATENCIÓN A USUARIOS​
            </li>
            <li onclick="window.location.href='<?php echo $url;?>servicios-sap#start';">
              SA​P
            </li>
            <li onclick="window.location.href='<?php echo $url;?>servicios-hospitales#start';">
              SOLUCIONES HOSPITALARIAS​
            </li>
            <li onclick="window.location.href='<?php echo $url;?>servicios-ciberseguridad#start';">
              CIBERSEGURIDAD
            </li>
            <li onclick="window.location.href='<?php echo $url;?>servicios-fabrica-sw#start';" >
              Fábrica de software
            </li>
          </ol>
        </li>

        <li  class="dropdown-menu-ttm">
          <a onclick="window.location.href='<?php echo $url;?>prensa#start';" >Prensa </a>
        </li>

        <li  class="dropdown-menu-ttm">
          <a onclick="window.location.href='<?php echo $url;?>contacto#start';" >Contacto</a>
           <ol >
            <li onclick="window.location.href='<?php echo $url;?>contactar#start';">
              CONTACTO
            </li>
            <li onclick="window.location.href='<?php echo $url;?>bolsa-de-trabajo#start';">
              BOLSA DE TRABAJO
            </li>
            <li onclick="window.location.href='https://cau.tutum.com.mx/dwp/app/#/account/login?returnUrl=%2F';">
              CAU
            </li>
            <li style="display: none;"> onclick="window.location.href='<?php echo $url;?>';">
              INTRANET
            </li>
          </ol>
        </li>

      </ul>

    </nav>

    <!-- NAV BAR MOVIL -->
    <nav class="container-header-mobil" >
      <ol>
        <li style="width: 30%" ><img src="<?php echo $url;?>images/logo/LOGO-TUTUM.png" onclick="window.location.href='<?php echo $url;?>';"></li>
        <li style="width: 60%" >
          <ul >
            <li onclick="window.open('https://www.facebook.com/Tutum-Tech-515010355546588');" ><i class="fab fa-facebook-square"></i></li>
            <li onclick="window.open('https://www.instagram.com/tutum.tech/');" ><i class="fab fa-instagram"></i></li>
            <li onclick="window.open('https://www.linkedin.com/company/tutum-tech/mycompany/verification/');" ><i class="fab fa-linkedin"></i></li>
            <li onclick="window.open('https://twitter.com/TutumTech');" ><i class="fab fa-twitter-square"></i></li>
          </ul>
        </li>
        <li style="width: 10%" >
          <i class="fas fa-bars" ></i><br>
          <ol class="menu-mobil" >
             <li onclick="window.location.href='<?php echo $url;?>';">
              INICIO
            </li>
            <li onclick="window.location.href='<?php echo $url;?>identidad#start';">
              IDENTIDAD
            </li>
            <li onclick="window.location.href='<?php echo $url;?>servicios#start';">
              SERVICIOS
            </li>
            <li onclick="window.location.href='<?php echo $url;?>prensa#start';" >
              PRENSA
            </li>
            <li onclick="window.location.href='<?php echo $url;?>contacto#start';">
              CONTACTO
            </li>
          </ol>
        </li>
      </ol>
    </nav>

    <!-- ir-arriba -->
    <div class="ir-arriba" >
      <i class="fas fa-chevron-up"></i>
    </div>

  </div>


