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


/* header dropdown menu mobil */
$('.fa-bars').click(function(){
  //alert();
  $('.menu-mobil').toggle('fast');
});
