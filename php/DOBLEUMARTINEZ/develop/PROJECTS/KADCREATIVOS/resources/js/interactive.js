/* VALIDADORES DE FORM*/
  function soloLetras(e) {
      var key = e.keyCode || e.which,
        tecla = String.fromCharCode(key).toLowerCase(),
        letras = " ABCDEFGHIJKLMNOPQRSTUVWXYZÁÉÍÓÚabcdefghijklmnopqrstuvwxyzáéíóú",
        especiales = [8, 37, 39, 46],
        tecla_especial = false;

      for (var i in especiales) {
        if (key == especiales[i]) {
          tecla_especial = true;
          break;
        }
      }

      if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
      }
    }

  function soloNumeros(e) {
      var key = e.keyCode || e.which,
        tecla = String.fromCharCode(key).toLowerCase(),
        letras = " 0123456789",
        especiales = [8, 37, 39, 46],
        tecla_especial = false;

      for (var i in especiales) {
        if (key == especiales[i]) {
          tecla_especial = true;
          break;
        }
      }

      if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
      }
    }

/* FLECHA DE IR ARRIBA */
  $(document).ready(function(){ 
    irArriba();//Hacia arriba

  });

function irArriba(){

  $('.ir-arriba').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });

  $(window).scroll(function(){

    if($(this).scrollTop() > 0){

      //ALERT ARRIBA
          //alert('white');

        $('.nav-bar').css('background','#fff');   // box-shadow: #11111185 0px 0px 10px;
        $('.nav-bar').css('box-shadow','#11111185 0px 0px 10px');
        $('.nav-bar').css('border-bottom','#ffc10759 solid 2px');

    }else{

        //ALERT ARRIBA
          //alert('trasparet');

        $('.nav-bar').css('background','#0000'); 
        $('.nav-bar').css('box-shadow','#0000 0px 0px 0px');
        $('.nav-bar').css('border-bottom','#0000 solid 2px');
   }

  });

  $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
}
