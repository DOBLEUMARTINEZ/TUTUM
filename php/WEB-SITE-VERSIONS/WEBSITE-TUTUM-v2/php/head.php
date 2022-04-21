
<?php
include('alertas/alertas_01.php'); // ALERTA CONFIRM
?>

<!-- CABECERA -->
  <div class="head ">

    <nav class="container-header-mobil" >
      <ol>
        <li style="width: 30%" ><img src="images/logo/logo2.png" onclick="window.location.href='./';"></li>
        <li style="width: 60%" >
          <ul>
            <li><i class="fab fa-facebook-square"></i></li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-linkedin"></i></li>
            <li><i class="fab fa-twitter-square"></i></li>
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
            <li onclick="window.location.href='./proyectos.php';">
              PROYECTOS
            </li>
            <li onclick="window.location.href='./proyectos.php';">
              PRENSA
            </li>
            <li onclick="window.location.href='./contacto.php';">
              CONTACTO
            </li>
          </ol>
        </li>
      </ol>
    </nav>

    <nav class="container-header">

      <div>
        <img src="images/logo/logo2.png" class="img-logo-front" onclick="window.location.href='./';">
        <img src="images/logo/logo2.png" class="img-logo-back" onclick="window.location.href='./';">

        <?php if(isset($_GET['seccion'])){ }else{?>
        <ol>
          <li><i class="fab fa-facebook-square"></i></li>
          <li><i class="fab fa-instagram"></i></li>
          <li><i class="fab fa-linkedin"></i></li>
          <li><i class="fab fa-twitter-square"></i></li>
        </ol>
        <?php }?>

      </div>

      <ul class="color-font-menu">
        <li onclick="window.location.href='./';">Inicio</li>

        <li class="dropdown-menu-ttm">
          <a onclick="window.location.href='./identidad.php';" >Identidad</a>
          <ol>
            <li onclick="window.location.href='./identidad.php?seccion=us';">
              ¿Quiénes somos?
            </li>
            <li onclick="window.location.href='./identidad.php?seccion=vision-mision';">
              Misión y vision
            </li>
            <li onclick="window.location.href='./identidad.php?seccion=experiencia';">
              Nuestra experiencia
            </li>
            <li onclick="window.location.href='./identidad.php?seccion=clientes';">
              Nuetros clientes
            </li>
            <li onclick="window.location.href='./identidad.php?seccion=socios';">
              Socios de negocio
            </li>
          </ol>

        </li>

        <li class="dropdown-menu-ttm">
          <a onclick="window.location.href='./servicios.php';" >Servicios</a>

          <ol>
            <li onclick="window.location.href='./servicios.php?seccion=proyectos';">
              PROYECTOS INTEGRALES TI
            </li>
            <li onclick="window.location.href='./servicios.php?seccion=operacion';">
              OPERACIÓN DE PROYECTOS​
            </li>
            <li onclick="window.location.href='./servicios.php?seccion=cau';">
              CENTRO DE ATENCIÓN A USUARIOS​
            </li>
            <li onclick="window.location.href='./servicios.php?seccion=sap';">
              CONSULTORÍA E IMPLEMENTACIÓN SA​P
            </li>
            <li onclick="window.location.href='./servicios.php?seccion=hospitales';">
              SOLUCIONES HOSPITALARIAS​
            </li>
            <li onclick="window.location.href='./servicios.php?seccion=ciberseguridad';">
              CIBERSEGURIDAD
            </li>
            <li onclick="window.location.href='./servicios.php?seccion=fabrica';" >
              Fabrica de software
            </li>
          </ol>

        </li>

        <li class="dropdown-menu-ttm">
          <a onclick="window.location.href='./proyects.php';" >Proyectos</a>
          <ol>
            <li onclick="window.location.href='./proyectos-en-operacion.php';" >
              En operación
            </li>
            <li onclick="window.location.href='./proyectos-llave-en-mano.php';">
              Llave en mano
            </li>
            <li>
              En desarrollo
            </li>
          </ol>
        </li>

        <li class="dropdown-menu-ttm">
          <a onclick="window.location.href='./proyects.php';" >Prensa </a>
          <ol>
            <li onclick="window.location.href='./proyectos-en-operacion.php';" >
              Blog
            </li>
            <li onclick="window.location.href='./proyectos-llave-en-mano.php';">
              por definir
            </li>
          </ol>
        </li>

        <li class="dropdown-menu-ttm">
          <a onclick="window.location.href='./proyects.php';" >Contacto</a>
          <ol>
            <li onclick="window.location.href='./proyectos-en-operacion.php';" >
              Servicios
            </li>
            <li onclick="window.location.href='./proyectos-llave-en-mano.php';">
              bolsa de trabajo
            </li>
            <li onclick="window.location.href='./proyectos-llave-en-mano.php';">
              clientes cau
            </li>
          </ol>
        </li>
      </ul>

    </nav>

    <!-- ir-arriba -->
    <div class="ir-arriba" >
      <i class="fas fa-chevron-up"></i>
    </div>

  </div>


