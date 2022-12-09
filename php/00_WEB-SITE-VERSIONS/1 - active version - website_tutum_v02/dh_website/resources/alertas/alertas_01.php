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