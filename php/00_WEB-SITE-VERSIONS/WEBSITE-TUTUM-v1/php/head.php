<?php include('alertas/alertas_01.php');?>

<!-- HEADER MOBIL -->
 <div class="head mobil" style="background: #fff!important;">

    <nav class="container-header">

      <ul style="width: 100%; justify-content: space-between;">

        <li style="width: 70%;" >
          <img style="margin: 0px 0px 0px 0px;padding: 5px 0px 5px 10px;" src="images/logo/logo.png"/ onclick="window.location.href='./';">
        </li>

        <li data-toggle="modal" data-target="#modal-0" style="width: 30%; display: flex;" >
          <i style="margin: auto;font-size: 1.6em;color: #28a745;" class="fas fa-bars"></i>
        </li>

      </ul>

    </nav>

  </div>

<!-- HEADER 1 -->
  <div  id="inicio" class="head-0 desktop">

    <ul style="justify-content: flex-start;">
      <li onclick="window.location.href='mailto:contacto@tutum.com';" ><i class="fab fa-facebook-f incon-social"><span></span></i></li>
      <li onclick="window.location.href='mailto:contacto@tutum.com';" ><i class="fab fa-instagram incon-social"></i></li>
      <li onclick="window.location.href='mailto:contacto@tutum.com';" ><i class="fab fa-linkedin-in incon-social"></i></li>
      <li onclick="window.location.href='mailto:contacto@tutum.com';" ><i class="fab fa-twitter incon-social"></i></li>
    </ul>

    <ul>
      <li onclick="window.location.href='tel:5521651341';"> <i class="fas fa-phone" title="Teléfono" alt="Teléfono"></i> 55 2165 1341</li>
      <li onclick="window.location.href='mailto:contacto@tutum.com';" > <i class="fas fa-envelope" title="Correo" alt="Correo"></i> contacto@tutum.com.mx</li>
    </ul>

  </div>

<!-- HEADER 2 -->
  <div class="head desktop">

    <nav class="container-header">
      <div>
        <img src="images/logo/logo.png" class="img-logo-front" onclick="window.location.href='./';">
        <img src="images/logo/logo2.png" class="img-logo-back" onclick="window.location.href='./';">
      </div>

      <ul class="color-font-menu">
        <li onclick="window.location.href='./';">Inicio</li>
        <li onclick="window.location.href='./identidad.php';">Identidad</li>

        <li class="dropdown-menu-ttm">
          Servicios <i class="fas fa-angle-down"></i>
          <ol>
            <li onclick="window.location.href='./desarrollo-e-implementacion.php';">
              Desarrollo e implementacion
            </li>
            <li onclick="window.location.href='./operacion.php';">
              Operación
            </li>
            <li onclick="window.location.href='./centro-de-atencion-a-usuarios.php';">
              Centro de atención a usuarios
            </li>
            <li onclick="window.location.href='./cibersecurity.php';">
              Ciberseguridad​
            </li>
            <li onclick="window.location.href='./sap.php';">
              SAP
            </li>
            <li onclick="window.location.href='./factory.php';" >
              Fabrica de software
            </li>
          </ol>
        </li>

        <li class="dropdown-menu-ttm">
          <a onclick="window.location.href='./proyects.php';" >Proyectos <i class="fas fa-angle-down"></i></a>
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

        <li onclick="window.location.href='./contacto.php';">Contacto</li>
      </ul>

    </nav>

  </div>