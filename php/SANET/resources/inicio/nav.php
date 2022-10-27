<!-- NAV BAR -->
  <div class="nav-bar">

    <!-- NAV BAR DESKTOP -->
    <nav class="container-header">

      <!-- LOGO -->
      <div onclick="window.location.href='<?php echo $url;?>';">
        <?php if(isset($_GET['seccion'])){echo '<img src="images/logo/logo.png">';}else{echo '<img src="images/logo/logo.png" style="opacity:1;" >';}?>
      </div>

      <!-- RUTAS -->

      <ul class="color-font-menu">

        <li class="<?php if(!isset($_GET['seccion'])){echo 'active-section';} ?>" 
          onclick="window.location.href='<?php echo $url;?>';">Inicio</li>

        <li class="<?php if(isset($_GET['seccion'])&&($_GET['seccion'])=='quienes-somos'){echo 'active-section';} ?>">
          <a onclick="window.location.href='<?php echo $url;?>quienes-somos';" >Quiénes somos</a>
        </li>

        <li class="dropdown-menu-ttm <?php if(isset($_GET['seccion'])&&($_GET['seccion'])=='sanet'){echo 'active-section';} ?>">
          <a onclick="window.location.href='<?php echo $url;?>sanet';" >Sanet</a>
          <ol>
            <li onclick="window.location.href='./modulos-his';" >Módulos HIS</li>
            <li onclick="window.location.href='./modulos-his#modulos-administrativos';" >Módulos administrativos</li>
            <li onclick="window.location.href='./modulos-his#modulos-clinicos';" >Módulos clínicos</li>
            <li onclick="window.location.href='./modulos-his#modulos-configuracion';" >Módulos de configuración</li>
          </ol>
        </li>

        <li class="<?php if(isset($_GET['seccion'])&&($_GET['seccion'])=='precios'){echo 'active-section';} ?>">
          <a onclick="window.location.href='<?php echo $url;?>precios';" >Precios</a>
        </li>

        <li class="<?php if(isset($_GET['seccion'])&&($_GET['seccion'])=='contacto'){echo 'active-section';} ?>">
          <a onclick="window.location.href='<?php echo $url;?>contacto';" >Contacto</a>
        </li>

        <li style="border-top: 4px solid #0000!important;">
          <button onclick="modalSanet(1, 'contacto')" >Contáctanos</button>
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

            <li onclick="window.location.href='<?php echo $url;?>';">Inicio</li>

            <li>
              <a onclick="window.location.href='<?php echo $url;?>quienes-somos';" >Sanet</a>
            </li>

            <li>
              <a onclick="window.location.href='<?php echo $url;?>sanet';" >Módulos HIS</a>
            </li>

            <li>
              <a onclick="window.location.href='<?php echo $url;?>contacto';" >Contacto</a>
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

<!-- VALIDAR FORM -->
<script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
      function miFuncion() {

        var response = grecaptcha.getResponse();

        if(response.length == 0){
          $( document ).ready(function() {
            Swal.fire({
                icon: 'error',
                title:'Algo salio mal',
                text: 'Porfavor intenta llenando todos los campos requeridos',
                /*showCloseButton: true,*/
                focusConfirm: false,
                timerProgressBar: true,
                confirmButtonText:'Continuar',
                confirmButtonAriaLabel: 'Send'
            });
          });
        } else {
            document.getElementById("re-capcha").value=1;
            document.getElementById("security-form").value=1;
        }
      }
  </script>
