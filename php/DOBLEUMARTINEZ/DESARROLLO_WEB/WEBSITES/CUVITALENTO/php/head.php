<!-- alert confirm -->
  <?php if(isset($_GET['id'])){?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {
      Swal.fire({
          icon: 'success',
          title:'Gracias por contactarnos',
          text: 'Un ejecutivo se comunicará contigo lo antes posible.',
          /*showCloseButton: true,*/
          focusConfirm: false,
          timerProgressBar: true,
          confirmButtonText:
          'Continuar',
          confirmButtonAriaLabel: 'Send'
        });
        });
    </script>
  <?php }?>

<!-- HEADER MOBIL -->
 <div class="head mobil">
    <nav class="container-header">
      <ul>
        <li style="width: 70%;" >
          <img style="margin: 0px 0px 0px 0px;padding: 5px 0px 5px 10px;" src="images/logo/logo.png"/ onclick="window.location.href='./';">
        </li>
        <li data-toggle="modal" data-target="#modal-0" style="width: 30%; display: flex;" >
          <i style="margin: auto;font-size: 1.6em;color: #495057;" class="fas fa-bars"></i>
        </li>
      </ul>
    </nav>
  </div>

<!-- HEADER 1 -->
  <div  id="inicio" class="head-0 desktop">
    <ul style="justify-content: flex-start;">
    </ul>
    <ul >
      <li onclick="window.open('https://www.facebook.com/Cuvi-Talento-103037528969349');">
        <i class="fab fa-facebook-f" title="Facebook" alt="Facebook"></i>
      </li>

      <li onclick="window.open('https://www.instagram.com/cuvitalento/?fbclid=IwAR3GTWzHFqdhmLPsxDAjqGGLx7MEoVZYtg4rqfkMLuo9ugFpaG-5iL94rSc');">
        <i class="fab fa-instagram" title="Instagram" alt="Instagram" ></i>
      </li>

      <li onclick="window.open('mailto: contacto@cuvitalento.com');" >
        <i class="fas fa-envelope" title="Correo" alt="Correo"></i>
      </li>

      <!-- usuer
      <li data-toggle="modal" data-target="#modal-login">
        
        <?php
            if(isset($_SESSION['user'])){
                echo '<i style="color:#28a745;" class="fas fa-user" title="Usuario" alt="Usuario"></i>';
            }else{
                echo '<i class="fas fa-user" title="Usuario" alt="Usuario"></i>';
            }    
        ?>
      </li>

      <li data-toggle="modal" data-target="#modal-shoppingcart" style="display:none">
        <i class="fas fa-shopping-cart" title="Shopping cart" alt="Shopping cart"></i>
      </li>-->

    </ul>
  </div>

<!-- HEADER 2 -->
  <div class="head desktop">
    <nav class="container-header">
      <img src="images/logo/logo.png"/ onclick="window.location.href='./';">
      <ul>
        <li onclick="window.location.href='./';">Inicio</li>

        <li onclick="window.location.href='./nosotros.php';" >Nosotros</li>

        <li>
          Servicios
          <ol>
            <li onclick="window.location.href='./reclutamiento.php';" >Reclutamiento</li>
            <li onclick="window.location.href='./estudios-socioeconomicos.php';" >Estudios Socioeconómicos</li>
            <li onclick="window.location.href='./pruebas-psicometricas.php';" >Pruebas Psicométricas</li>
          </ol>
        </li>

        <li onclick="window.location.href='./contacto.php';">Contacto</li>

        <li style="width: 16%;" class="pulsin gButton">
          <button data-toggle="modal" data-target="#modal-1" >
            <div id="call-to-button" class="carousel vert slide" data-ride="carousel" data-interval="3000">
             <div class="carousel-inner">
              <div class="carousel-item active">
                Contáctanos             
              </div>
              <!--<div class="carousel-item">
                Demostración
              </div>--->
             </div>
            </div>
          </button>
        </li>
        
      </ul>
    </nav>
  </div>
  
  <button onclick="window.open('https://api.whatsapp.com/send?phone=5215529575302&text=Estoy%20Interesado%20en%20los%20servicios');" class="btn-whatsapp pulsingButton">
      <i class="fab fa-whatsapp"></i>
  </button>

  <style type="text/css">
  
    .btn-whatsapp{
        position: fixed;
        bottom: 7%;
        right: 2%;
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