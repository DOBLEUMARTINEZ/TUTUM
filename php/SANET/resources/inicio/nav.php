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
          <a onclick="window.location.href='./sanet';" >Sanet</a>
          <ol>
            <li onclick="window.location.href='./modulos-sih';" >Módulos SIH</li>
            <li onclick="window.location.href='./modulos-sih#modulos-administrativos';" >Módulos administrativos</li>
            <li onclick="window.location.href='./modulos-sih#modulos-clinicos';" >Módulos clínicos</li>
            <li onclick="window.location.href='./modulos-sih#modulos-configuracion';" >Módulos de configuración</li>
          </ol>
        </li>

        <li class="<?php if(isset($_GET['seccion'])&&($_GET['seccion'])=='licencias'){echo 'active-section';} ?>">
          <a href="licencias" >Licencias</a>
        </li>

        <li class="<?php if(isset($_GET['seccion'])&&($_GET['seccion'])=='contacto'){echo 'active-section';} ?>">
          <a href="contacto" >Contacto</a>
        </li>

        <li style="border-top: 4px solid #0000!important; padding: 0%;">
          <button onclick="window.location.href='./contacto';" ><i class="fab fa-whatsapp" ></i> Whatsapp</button>
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

            <li onclick="window.location.href='./modulos-sih#modulos-administrativos';" >
              Módulos administrativos
            </li>

            <li onclick="window.location.href='./modulos-sih#modulos-clinicos';" >
              Módulos clínicos
            </li>

            <li onclick="window.location.href='./modulos-sih#modulos-configuracion';" >
              Módulos de configuración
            </li>

            <li>
              <a href="icencias" >Licencias</a>
            </li>

            <li>
              <a href="contacto"2>Contacto</a>
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
