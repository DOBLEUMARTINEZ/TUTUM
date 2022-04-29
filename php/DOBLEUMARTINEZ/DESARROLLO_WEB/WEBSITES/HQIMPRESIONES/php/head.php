<?php include('alertas/alertas_01.php');?>

<!-- HEADER MOBIL -->
 <div class="head mobil">
    <nav class="container-header">
      <ul>
        <li style="width: 70%;" >
          <img style="margin: 0px 0px 0px 0px;padding: 5px 0px 5px 10px;" src="images/logo/logo.png"/ onclick="window.location.href='./';">
        </li>
        <li data-toggle="modal" data-target="#modal-0" style="width: 30%; display: flex;" >
          <i style="margin: auto;font-size: 1.6em;color: #ffffffc7;
" class="fas fa-bars"></i>
        </li>
      </ul>
    </nav>
  </div>

<!-- HEADER 1 -->
  <div  id="inicio" class="head-0 desktop">
    <ul style="justify-content: flex-start;">
      <li onclick="window.location.href='mailto:contacto@hqimpresiones.com.mx';" >contacto@hqimpresiones.com.mx</li>
      <li onclick="window.location.href='tel:5585416183';">55 8541 6183</li>
    </ul>
    <ul>
      
      <li onclick="window.open('mailto:contacto@atsonline.com.mx');" >
        <i class="fas fa-envelope" title="Correo" alt="Correo"></i>
      </li>

      <li onclick="window.location.href='tel:5585416183';" >
        <i class="fas fa-phone" title="Teléfono" alt="Teléfono"></i>
      </li>

      <li data-toggle="modal" data-target="#modal-login">
        
        <?php
            if(isset($_SESSION['user'])){
                echo '<i style="color:#28a745;" class="fas fa-user" title="Usuario" alt="Usuario"></i>';
            }else{
                echo '<i class="fas fa-user" title="Iniciar sesion" alt="Iniciar sesion"></i>';
            }    
        ?>
      </li>

      <li data-toggle="modal" data-target="#modal-shoppingcart" style="display:none">
        <i class="fas fa-shopping-cart" title="Shopping cart" alt="Shopping cart"></i>
      </li>

    </ul>
  </div>

<!-- HEADER 2 -->
  <div class="head desktop">

    <nav class="container-header">

      <ul style="text-align: center;">
        <li style="width: 20%;">Catalogo Digital</li>
        <li style="width: 30%;"><img src="images/logo/logo.png" onclick="window.location.href='./';"></li>
        <li style="width: 20%;">Busqueda</li>
      </ul>

      <ul>
        <li onclick="window.location.href='./';">Inicio</li>

        <li onclick="window.location.href='./nosotros.php';" >Nosotros</li>

        <li>
          Servicios
          <ol>
            <li>
              Impresion
              <ul class="dropdown-menu-1">
                <li onclick="window.location.href='./servicios.php';" >kaakm</li>
                <li>kaakm</li>
                <li>kaakm</li>
              </ul>
            </li>
            <li>
              Stands
              <ul class="dropdown-menu-2">
                <li onclick="window.location.href='./servicios.php';" >kaakm</li>
                <li>kaakm</li>
                <li>kaakm</li>
              </ul>
            </li>
          </ol>
        </li>

        <li onclick="window.location.href='./contacto.php';">Contacto</li>
        
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