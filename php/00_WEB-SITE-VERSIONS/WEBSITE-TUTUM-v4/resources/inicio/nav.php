<!-- NAV BAR -->
  <div class="head ">

    <!-- NAV BAR MOVIL -->
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
            <li onclick="window.location.href='./menu-identidad';">
              IDENTIDAD
            </li>
            <li onclick="window.location.href='./menu-servicios';">
              SERVICIOS
            </li>
            <li onclick="window.location.href='./proyectos';">
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

    <!-- NAV BAR DESKTOP -->
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
          <a onclick="window.location.href='./menu-identidad';" >Identidad</a>
          <ol>
            <li onclick="window.location.href='./identidad#us';">
              ¿Quiénes somos?
            </li>
            <li onclick="window.location.href='./identidad#vision-mision';">
              Misión y vision
            </li>
            <li onclick="window.location.href='./identidad#experiencia';">
              Nuestra experiencia
            </li>
            <li onclick="window.location.href='./identidad#clientes';">
              Nuetros clientes
            </li>
            <li onclick="window.location.href='./identidad#socios';">
              Socios de negocio
            </li>
          </ol>

        </li>

        <li class="dropdown-menu-ttm">
          <a onclick="window.location.href='./menu-servicios';" >Servicios</a>

          <ol>
            <li onclick="window.location.href='./servicios#proyectos';">
              PROYECTOS INTEGRALES TI
            </li>
            <li onclick="window.location.href='./servicios#operacion';">
              OPERACIÓN DE PROYECTOS​
            </li>
            <li onclick="window.location.href='./servicios#cau';">
              CENTRO DE ATENCIÓN A USUARIOS​
            </li>
            <li onclick="window.location.href='./servicios#sap';">
              CONSULTORÍA E IMPLEMENTACIÓN SA​P
            </li>
            <li onclick="window.location.href='./servicios#hospitales';">
              SOLUCIONES HOSPITALARIAS​
            </li>
            <li onclick="window.location.href='./servicios#ciberseguridad';">
              CIBERSEGURIDAD
            </li>
            <li onclick="window.location.href='./servicios#fabrica';" >
              Fabrica de software
            </li>
          </ol>

        </li>

        <li class="dropdown-menu-ttm">
          <a onclick="window.location.href='./menu-proyectos';" >Proyectos</a>
          <ol>
            <li onclick="window.location.href='./proyectos#en-operacion';" >
              En operación
            </li>
            <li onclick="window.location.href='./proyectos#llave-en-mano';">
              Llave en mano
            </li>
            <li onclick="window.location.href='./proyectos#en-desarrollo';" >
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


