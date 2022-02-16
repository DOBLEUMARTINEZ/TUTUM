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
      <li onclick="window.location.href='mailto:resicladosindustriales.22@gmail.com';" ><i class="fab fa-facebook-f incon-social"><span></span></i></li>
      <li onclick="window.location.href='mailto:resicladosindustriales.22@gmail.com';" ><i class="fab fa-instagram incon-social"></i></li>
      <li onclick="window.location.href='mailto:resicladosindustriales.22@gmail.com';" ><i class="fab fa-linkedin-in incon-social"></i></li>
      <li onclick="window.location.href='mailto:resicladosindustriales.22@gmail.com';" ><i class="fab fa-twitter incon-social"></i></li>
    </ul>

    <ul>
      <li onclick="window.location.href='tel:5521651341';"> <i class="fas fa-phone" title="Teléfono" alt="Teléfono"></i> 55 2165 1341</li>
      <li onclick="window.location.href='mailto:resicladosindustriales.22@gmail.com';" > <i class="fas fa-envelope" title="Correo" alt="Correo"></i> contacto@tutum.com.mx</li>
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
        <li onclick="window.location.href='./us';">Identidad</li>

        <li class="dropdown-menu-ttm">
          Servicios <i class="fas fa-angle-down"></i>
          <ol>
            <li>
              Desarrollo e implementacion
            </li>
            <li>
              Operación
            </li>
            <li>
              Centro de atención a usuarios
            </li>
            <li>
              Ciberseguridad
            </li>
            <li>
              SAP
            </li>
            <li onclick="window.location.href='./factory';" >
              Fabrica de software
            </li>
          </ol>
        </li>

        <li onclick="window.location.href='./';" class="dropdown-menu-ttm">
          Proyectos <i class="fas fa-angle-down"></i>
          <ol>
            <li>
              En operación
            </li>
            <li>
              Llave en mano
            </li>
            <li>
              En desarrollo
            </li>
          </ol>
        </li>

        <li onclick="window.location.href='./';">Contacto</li>
      </ul>

    </nav>

  </div>
  
  <button style="display: none;" onclick="window.open('https://api.whatsapp.com/send?phone=5215534865908&text=Estoy%20Interesado%20en%20la%20plataforma');" class="btn-whatsapp pulsingButton">
      <i class="fab fa-whatsapp"></i>
  </button>

  <style type="text/css">
  
    .btn-whatsapp{
        position: fixed;
        bottom: 7%;
        left: 2%;
        z-index: 9;
        background: #28a745;
        outline: none!important;
        border: none;
        border-radius: 50%;
        font-size: 3em;
        line-height: 0px;
        padding: 10px 14px;
        color: #fff;
        display: flex;
        justify-content: center;
    }

    .vert .carousel-item-next.carousel-item-left,
    .vert .carousel-item-prev.carousel-item-right {
        -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
    }

    .vert .carousel-item-next,
    .vert .active.carousel-item-right {
        -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100% 0);
    }

    .vert .carousel-item-prev,
    .vert .active.carousel-item-left {
    -webkit-transform: translate3d(0,-100%, 0);
            transform: translate3d(0,-100%, 0);
    }
  </style>