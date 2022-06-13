
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

/* CONTADOR DE NUMEROS */
$(document).ready(function($) {

    //Check if an element was in a screen
    function isScrolledIntoView(elem){
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();
        return ((elemBottom <= docViewBottom));
    }

    //Count up code
    function countUp() {
        $('.counter').each(function() {
          var $this = $(this), // <- Don't touch this variable. It's pure magic.
              countTo = $this.attr('data-count');
              ended = $this.attr('ended');

        if ( ended != "true" && isScrolledIntoView($this) ) {
            $({ countNum: $this.text()}).animate({
            countNum: countTo
          },
          {
            duration: 2500, //duration of counting
            easing: 'swing',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
            }
          });
        $this.attr('ended', 'true');
        }
        });
    }

    //Start animation on page-load
    if ( isScrolledIntoView(".counter") ) {
        countUp();
    }

    //Start animation on screen
    $(document).scroll(function() {
        if ( isScrolledIntoView(".counter") ) {
            countUp();
        }
    });
});

/* FLECHA DE IR ARRIBA */
$(document).ready(function(){ 
  irArriba();//Hacia arriba
});

function irArriba(){

  $('.ir-arriba').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });

  $(window).scroll(function(){

    if($(this).scrollTop() > 0){

    $('.ir-arriba').slideDown(600);
    $('.head').addClass('enable-head');

    //INCONS FLOAT
    $('#social-media-icons').addClass('hidden-icons');

    // ACTIVE LI NAV
    $('.dropdown-menu-ttm').addClass('active-li-nav');

    }else{

     $('.ir-arriba').slideUp(600); 
      $('.head').removeClass('enable-head');

      //INCONS FLOAT
    $('#social-media-icons').removeClass('hidden-icons');

    // DESACTIVE LI NAV
    $('.dropdown-menu-ttm').removeClass('active-li-nav');

   }

  });

  $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
}