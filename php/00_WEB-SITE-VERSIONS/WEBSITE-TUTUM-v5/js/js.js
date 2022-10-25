/* MENU LATERAL*/

//activando el menu lateral
$('.lateral-background').removeClass('latera-menu-off');


/**/
$(document).ready(function(){ 
  
  irArriba();//Hacia arriba

});

function irArriba(){

  $('.ir-arriba').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });

  $(window).scroll(function(){

    if($(this).scrollTop() > 0){

    $('.ir-arriba').slideDown(600); 
    $('.head').addClass('enable-head');

    }else{

     $('.ir-arriba').slideUp(600); 
      $('.head').removeClass('enable-head');
   }

  });

  $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
}


/* header dropdown menu mobil */
$('.fa-bars').click(function(){
  //alert();
  $('.menu-mobil').toggle('fast');
});
