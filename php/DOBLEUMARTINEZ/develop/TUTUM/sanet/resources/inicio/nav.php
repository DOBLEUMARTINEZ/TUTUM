<!-- NAV BAR -->
  <div class="nav-bar">

    <!-- NAV BAR DESKTOP -->
    <nav class="container-header">

      <!-- LOGO -->
      <div>
        <?php if(isset($_GET['seccion'])){echo '<img src="images/logo/logo.png">';}else{echo '<img src="images/logo/logo.png" style="opacity:0;" >';}?>
      </div>

      <!-- RUTAS -->

      <ul class="color-font-menu">

        <li class="<?php if(!isset($_GET['seccion'])){echo 'active-section';} ?>" 
          onclick="window.location.href='<?php echo $url;?>';">Inicio</li>

        <li class="<?php if(isset($_GET['seccion'])&&($_GET['seccion'])=='quienes-somos'){echo 'active-section';} ?>">
          <a onclick="window.location.href='<?php echo $url;?>quienes-somos';" >Quiénes somos</a>
        </li>

        <li class="<?php if(isset($_GET['seccion'])&&($_GET['seccion'])=='sanet'){echo 'active-section';} ?>">
          <a onclick="window.location.href='<?php echo $url;?>sanet';" >Sanet</a>
        </li>

        <li class="dropdown-menu-ttm <?php if(isset($_GET['seccion'])&&($_GET['seccion'])=='modulos-sih'){echo 'active-section';} ?>">
          <a onclick="window.location.href='<?php echo $url;?>modulos-sih';" >Módulos SIH</a>
          <ol>
            <li>Administrativos</li>
            <li>Clínicos</li>
            <li>Configuraciones</li>
          </ol>
        </li>

        <li class="<?php if(isset($_GET['seccion'])&&($_GET['seccion'])=='contacto'){echo 'active-section';} ?>">
          <a onclick="window.location.href='<?php echo $url;?>contacto';" >Contacto</a>
        </li>

        <li>
          <a onclick="window.location.href='<?php echo $url;?>login';" >Iniciar sesión</a>
        </li>

      </ul>

    </nav>

    <!-- NAV BAR MOVIL -->
    <nav class="container-header-mobil">
      <ol>

        <li><img src="<?php echo $url;?>images/logo/logo.png" onclick="window.location.href='<?php echo $url;?>';"></li>

        <li style="position: relative;" >

          <i class="fas fa-bars" ></i>  

          <ul class="menu-mobil">

            <li onclick="window.location.href='<?php echo $url;?>';">Home</li>

            <li>
              <a onclick="window.location.href='<?php echo $url;?>quienes-somos';" >Quienes Somos</a>
            </li>

            <li>
              <a onclick="window.location.href='<?php echo $url;?>sanet';" >Sanet</a>
            </li>

            <li>
              <a onclick="window.location.href='<?php echo $url;?>nuestra-experiencia';" >Nuestra Experiencia</a>
            </li>

            <li>
              <a onclick="window.location.href='<?php echo $url;?>modulos-sih';" >Modulos SIH</a>
            </li>

            <li>
              <a onclick="window.location.href='<?php echo $url;?>contacto';" >Contacto</a>
            </li>

            <li>
              <a onclick="window.location.href='<?php echo $url;?>login';" >Log in</a>
            </li>
          </ul>

        </li>

      </ol>
    </nav>

    <!-- ir-arriba -->
    <div class="ir-arriba" >
      <i class="fas fa-chevron-up"></i>
    </div>

  </div>


