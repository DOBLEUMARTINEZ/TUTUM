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
      <li onclick="window.open('https://www.facebook.com/Productivity-GO-112803200451668');">
        <i class="fab fa-facebook-f" title="Facebook" alt="Facebook"></i>
      </li>

      <li onclick="window.open('https://www.instagram.com/productivity.go/');">
        <i class="fab fa-instagram" title="Instagram" alt="Instagram" ></i>
      </li>

      <li onclick="window.open('https://twitter.com/ProductivityGo1');">
        <i class="fab fa-twitter" title="Twitter" alt="Twitter" ></i>
      </li>

      <li onclick="window.open('https://www.linkedin.com/in/productivity-go/');">
        <i class="fab fa-linkedin" title="Linkedin" alt="Linkedin" ></i>
      </li>

      <li onclick="window.open('https://youtu.be/LU_XFvmkO3Q');">
        <i class="fab fa-youtube" title="Youtube" alt="Youtube" ></i>
      </li>

      <li onclick="window.open('mailto:contacto@atsonline.com.mx');" >
        <i class="fas fa-envelope" title="Correo" alt="Correo"></i>
      </li>

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
      </li>

    </ul>
  </div>

<!-- HEADER 2 -->
  <div class="head desktop">
    <nav class="container-header">
      <img src="images/logo/logo.png"/ onclick="window.location.href='./';">
      <ul>
        <li onclick="window.location.href='./';">Inicio<span></span></li>

        <li onclick="window.location.href='./nosotros.php';" >Nosotros<span></span></li>

        <li onclick="window.location.href='./productivity-go.php';" >Servicios<span></span></li>

        <li onclick="window.location.href='./blog.php';">Blog<span></span></li>

        <li onclick="window.location.href='./contacto.php';">Contacto<span></span></li>

        <li style="width: 16%;" class="pulsin gButton">
          <button data-toggle="modal" data-target="#modal-1" >
            <div id="call-to-button" class="carousel vert slide" data-ride="carousel" data-interval="3000">
             <div class="carousel-inner">
              <div class="carousel-item active">
                Contáctanos
              </div>
              <div class="carousel-item">
                Demostración
              </div>
             </div>
            </div>
          </button>
        </li>

      </ul>
    </nav>
  </div>

  <button onclick="window.open('https://api.whatsapp.com/send?phone=+5592269489&text=Quiero%20m%C3%A1s%20informaci%C3%B3n%20');" class="btn-whatsapp pulsingButton">
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
