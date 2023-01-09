// EL INPUT RANGO 1 
  var elInput3 = document.querySelector('#input3');

  if (elInput3) {
    var w = parseInt(window.getComputedStyle(elInput3, null).getPropertyValue('width'));

    // LA ETIQUETA 
    var etq = document.querySelector('.etiqueta');

    if (etq) {
      // el valor de la etiqueta (el tooltip) 
      etq.innerHTML = elInput3.value;

      elInput3.addEventListener('input', function() {

        // cambia el valor de la etiqueta (el tooltip) 
        etq.innerHTML = elInput3.value;

      }, false);
    }
  }

// EL INPUT RANGO 2 
  var elInput4 = document.querySelector('#input4');

  if (elInput4) {
    var w = parseInt(window.getComputedStyle(elInput4, null).getPropertyValue('width'));

    // LA ETIQUETA 
    var etq4 = document.querySelector('.etiqueta4');

    if (etq4) {
          // el valor de la etiqueta (el tooltip) 
      etq4.innerHTML = elInput4.value;

      elInput4.addEventListener('input', function() {

        // cambia el valor de la etiqueta (el tooltip) 
        etq4.innerHTML = elInput4.value;

      }, false);
    }
  }

/**/
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

        $('.nav-bar').css('background','#fff');

    }else{

        //ALERT ARRIBA
          //alert('trasparet');

        $('.nav-bar').css('background','#0000'); 
   }

  });

  $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
}
