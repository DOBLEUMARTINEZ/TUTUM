
<?php
include('alertas/alertas_01.php'); // ALERTA CONFIRM
?>

<!-- CABECERA -->
  <div class="head ">

    <!-- CABECERA MOVIL -->
    <nav class="container-header-mobil" >
      <ol>
        <li style="width: 30%" ><img src="images/logo/logo2.png" onclick="window.location.href='./';"></li>
        <li style="width: 60%" >
          <ul>
            <li onclick="window.open('https://www.facebook.com/Tutum-Tech-515010355546588');"><i class="fab fa-facebook-square"></i></li>
            <li onclick="window.open('https://www.instagram.com/tutumtech/');"><i class="fab fa-instagram"></i></li>
            <li onclick="window.open('https://www.linkedin.com/company/tutum-tech/mycompany/verification/');"><i class="fab fa-linkedin"></i></li>
            <li onclick="window.open('https://twitter.com/TutumTech');"><i class="fab fa-twitter-square"></i></li>
          </ul>
        </li>
        <li style="width: 10%" >
          <i class="fas fa-bars"></i><br>
          <ol class="menu-mobil">
            <li onclick="window.location.href='./identidad.php';">
              IDENTIDAD
            </li>
            <li onclick="window.location.href='./servicios.php';">
              SERVICIOS
            </li>
            <li onclick="window.location.href='./';">
              PROYECTOS
            </li>
            <li onclick="window.location.href='./';">
              PRENSA
            </li>
            <li onclick="window.location.href='./';">
              CONTACTO
            </li>
            <li onclick="window.location.href='./';">
              <i class="fas fa-user"></i> LOGIN
            </li>
          </ol>
        </li>
      </ol>
    </nav>

    <!-- CABECERA DESKTOP -->
    <nav class="container-header">

      <!-- LOGO - SOCIAL MEDIA -->
      <div>
        <img src="images/logo/logo2.png" class="img-logo-front" onclick="window.location.href='./';">
        <img src="images/logo/logo2.png" class="img-logo-back" onclick="window.location.href='./';">

        <?php if(isset($_GET['seccion'])){ }else{?>
        <ol>
          <li onclick="window.open('https://www.facebook.com/Tutum-Tech-515010355546588');" ><i class="fab fa-facebook-square"></i></li>
          <li onclick="window.open('https://www.instagram.com/tutumtech/');" ><i class="fab fa-instagram"></i></li>
          <li onclick="window.open('https://www.linkedin.com/company/tutum-tech/mycompany/verification/');" ><i class="fab fa-linkedin"></i></li>
          <li onclick="window.open('https://twitter.com/TutumTech');" ><i class="fab fa-twitter-square"></i></li>
        </ol>
        <?php }?>

      </div>

      <!-- RUTAS -->
      <ul class="color-font-menu">
        <li onclick="window.location.href='./';">Inicio</li>

        <li class="dropdown-menu-ttm">
          <a onclick="window.location.href='./identidad.php';" >Identidad</a>
          <ol>
            <li onclick="window.location.href='./identidad.php?seccion=true#us';">
              ??Qui??nes somos?
            </li>
            <li onclick="window.location.href='./identidad.php?seccion=true#vision-mision';">
              Misi??n y vision
            </li>
            <li onclick="window.location.href='./identidad.php?seccion=true#experiencia';">
              Nuestra experiencia
            </li>
            <li onclick="window.location.href='./identidad.php?seccion=true#clientes';">
              Nuetros clientes
            </li>
            <li onclick="window.location.href='./identidad.php?seccion=true#socios';">
              Socios de negocio
            </li>
          </ol>

        </li>

        <li class="dropdown-menu-ttm">
          <a onclick="window.location.href='./servicios.php';" >Servicios</a>

          <ol>
            <li onclick="window.location.href='./servicios.php?seccion=true#proyectos';">
              PROYECTOS INTEGRALES TI
            </li>
            <li onclick="window.location.href='./servicios.php?seccion=true#operacion';">
              OPERACI??N DE PROYECTOS???
            </li>
            <li onclick="window.location.href='./servicios.php?seccion=true#cau';">
              CENTRO DE ATENCI??N A USUARIOS???
            </li>
            <li onclick="window.location.href='./servicios.php?seccion=true#sap';">
              CONSULTOR??A E IMPLEMENTACI??N SA???P
            </li>
            <li onclick="window.location.href='./servicios.php?seccion=true#hospitales';">
              SOLUCIONES HOSPITALARIAS???
            </li>
            <li onclick="window.location.href='./servicios.php?seccion=true#ciberseguridad';">
              CIBERSEGURIDAD
            </li>
            <li onclick="window.location.href='./servicios.php?seccion=true#fabrica';" >
              Fabrica de software
            </li>
          </ol>

        </li>

        <li class="dropdown-menu-ttm">
          <a onclick="window.location.href='./';" >Proyectos</a>
          <ol>
            <li onclick="window.location.href='./';" >
              En operaci??n
            </li>
            <li onclick="window.location.href='./';">
              Llave en mano
            </li>
            <li>
              En desarrollo
            </li>
          </ol>
        </li>

        <li class="dropdown-menu-ttm">
          <a onclick="window.location.href='./';" >Prensa </a>
          <ol>
            <li onclick="window.location.href='./';" >
              Blog
            </li>
            <li onclick="window.location.href='./';">
              por definir
            </li>
          </ol>
        </li>

        <li class="dropdown-menu-ttm">
          <a onclick="window.location.href='./';" >Contacto</a>
          <ol>
            <li onclick="window.location.href='./';" >
              Servicios
            </li>
            <li onclick="window.location.href='./';">
              bolsa de trabajo
            </li>
            <li onclick="window.location.href='./';">
              clientes cau
            </li>
          </ol>
        </li>

        <li onclick="window.location.href='./';">
          <i class="fas fa-user"></i> LOGIN
        </li>

      </ul>

    </nav>

    <!-- ir-arriba -->
    <div class="ir-arriba" >
      <i class="fas fa-chevron-up"></i>
    </div>

  </div>


