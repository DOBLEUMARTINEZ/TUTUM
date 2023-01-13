// BOTTON MENU 
  $('.fa-bars').click(function(){
      $('.menu-mobil').toggle();
  });

// LETTERING MOVING
  var textWrapper = document.querySelector('.ml11 .letters');
  textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

  anime.timeline({loop: true})
    .add({
      targets: '.ml11 .line',
      scaleY: [0,1],
      opacity: [0.5,1],
      easing: "easeOutExpo",
      duration: 700
    })
    .add({
      targets: '.ml11 .line',
      translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
      easing: "easeOutExpo",
      duration: 700,
      delay: 100
    }).add({
      targets: '.ml11 .letter',
      opacity: [0,1],
      easing: "easeOutExpo",
      duration: 600,
      offset: '-=775',
      delay: (el, i) => 34 * (i+1)
    }).add({
      targets: '.ml11',
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1000
    });

/* VALIDADORES DE INPUT  */
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

      $('.ir-arriba').slideDown(600);


      }else{

       $('.ir-arriba').slideUp(600); 

     }

    });

    $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
  }