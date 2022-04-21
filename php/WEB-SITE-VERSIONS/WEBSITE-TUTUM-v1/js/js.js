$(document).ready(function(){ //Hacia arriba
  irArriba();
});

function irArriba(){
  $('.ir-arriba').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });



  $(window).scroll(function(){

    if($(this).scrollTop() > 0){

     $('.ir-arriba').slideDown(600); 

      $('.dinamic-wha').addClass('dinamic-wha-active');
      $('.a-wha').removeClass('a-desactive');

      $('.head').addClass('enable-head');

      $('.img-logo-front').css('opacity', '1');
      $('.img-logo-back').css('opacity', '0');

      $('.color-font-menu').css('color', '#111');
      //$('.size-0').addClass('size');

      //$('.colors').addClass('add-colors');

    }else{

     $('.ir-arriba').slideUp(600); 

      $('.dinamic-wha').removeClass('dinamic-wha-active');
      $('.a-wha').addClass('a-desactive');

      $('.head').removeClass('enable-head');

      $('.img-logo-front').css('opacity', '0');
      $('.img-logo-back').css('opacity', '1');

      $('.color-font-menu').css('color', '#fff');

      //$('.size-0').removeClass('size');

      //$('.colors').removeClass('add-colors');
   }

  });


  $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
}

    // Wrap every letter in a span
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