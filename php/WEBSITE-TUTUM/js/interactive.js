/* TUTUM */
function Proyects(a,b) {

    switch (a) {
    //CEFERESOS  
      case 'ceferesos':
        if (b==1) {
            //active button
            $( "#btn-ceferesos-1" ).addClass( "active-button" );
            $( "#btn-ceferesos-2" ).removeClass( "active-button" );

            // active contenedor
            $("#ceferesos-1").css("display", "block");
            $("#ceferesos-2").css("display", "none");

            //icon arrow active
            $("#icon-cef-1").css("display", "block");
            $("#icon-cef-2").css("display", "none");

        }else{
            //active button
            $( "#btn-ceferesos-2" ).addClass( "active-button" );
            $( "#btn-ceferesos-1" ).removeClass( "active-button" );

            // active contenedor
            $("#ceferesos-2").css("display", "block");
            $("#ceferesos-1").css("display", "none");

            //icon arrow active
            $("#icon-cef-2").css("display", "block");
            $("#icon-cef-1").css("display", "none");
        }
        break;

    // HOSTPTAL APPS    
      case 'Hospital apps':
        if (b==1) {

            //active button
            $( "#btn-apps-1" ).addClass( "active-button" );
            $( "#btn-apps-2,#btn-apps-3" ).removeClass( "active-button" );

            // active contenedor
            $("#hospital-apps-1").css("display", "block");
            $("#hospital-apps-2, #hospital-apps-3").css("display", "none");

        }else if(b==2){

            //active button
            $( "#btn-apps-2" ).addClass( "active-button" );
            $( "#btn-apps-1,#btn-apps-3" ).removeClass( "active-button" );

            // active contenedor
            $("#hospital-apps-2").css("display", "block");
            $("#hospital-apps-1, #hospital-apps-3").css("display", "none");

        }else{

            //active button
            $( "#btn-apps-3" ).addClass( "active-button" );
            $( "#btn-apps-2,#btn-apps-1" ).removeClass( "active-button" );

            // active contenedor
            $("#hospital-apps-3").css("display", "block");
            $("#hospital-apps-1, #hospital-apps-2").css("display", "none");

        }
        break;

    //HOSPITAL LLAVE EN MANO
      case 'Hospital llave en mano':
        if (b==1) {

            //active button
            $( "#btn-llave-1" ).addClass( "active-button" );
            $( "#btn-llave-2, #btn-llave-3 , #btn-llave-4 , #btn-llave-5 , #btn-llave-6 , #btn-llave-7 , #btn-llave-8 , #btn-llave-9" ).removeClass( "active-button" );

            // active contenedor
            $("#hospital-llave-1").css("display", "block");
            $("#hospital-llave-2,#hospital-llave-3,#hospital-llave-4,#hospital-llave-5,#hospital-llave-6,#hospital-llave-7,#hospital-llave-8,#hospital-llave-9").css("display", "none");
        }else if(b==2){

            //active button
            $( "#btn-llave-2" ).addClass( "active-button" );
            $( "#btn-llave-1, #btn-llave-3 , #btn-llave-4 , #btn-llave-5 , #btn-llave-6 , #btn-llave-7 , #btn-llave-8 , #btn-llave-9" ).removeClass( "active-button" );

            // active contenedor
            $("#hospital-llave-2").css("display", "block");
            $("#hospital-llave-1,#hospital-llave-3,#hospital-llave-4,#hospital-llave-5,#hospital-llave-6,#hospital-llave-7,#hospital-llave-8,#hospital-llave-9").css("display", "none");
        }else if(b==3){

            //active button
            $( "#btn-llave-3" ).addClass( "active-button" );
            $( "#btn-llave-2, #btn-llave-1 , #btn-llave-4 , #btn-llave-5 , #btn-llave-6 , #btn-llave-7 , #btn-llave-8 , #btn-llave-9" ).removeClass( "active-button" );

            // active contenedor
            $("#hospital-llave-3").css("display", "block");
            $("#hospital-llave-2,#hospital-llave-1,#hospital-llave-4,#hospital-llave-5,#hospital-llave-6,#hospital-llave-7,#hospital-llave-8,#hospital-llave-9").css("display", "none");
        }else if(b==4){

            //active button
            $( "#btn-llave-4" ).addClass( "active-button" );
            $( "#btn-llave-2, #btn-llave-3 , #btn-llave-1 , #btn-llave-5 , #btn-llave-6 , #btn-llave-7 , #btn-llave-8 , #btn-llave-9" ).removeClass( "active-button" );

            // active contenedor
            $("#hospital-llave-4").css("display", "block");
            $("#hospital-llave-2,#hospital-llave-3,#hospital-llave-1,#hospital-llave-5,#hospital-llave-6,#hospital-llave-7,#hospital-llave-8,#hospital-llave-9").css("display", "none");
        }else if(b==5){

            //active button
            $( "#btn-llave-5" ).addClass( "active-button" );
            $( "#btn-llave-2, #btn-llave-3 , #btn-llave-4 , #btn-llave-1 , #btn-llave-6 , #btn-llave-7 , #btn-llave-8 , #btn-llave-9" ).removeClass( "active-button" );

            // active contenedor
            $("#hospital-llave-5").css("display", "block");
            $("#hospital-llave-2,#hospital-llave-3,#hospital-llave-4,#hospital-llave-1,#hospital-llave-6,#hospital-llave-7,#hospital-llave-8,#hospital-llave-9").css("display", "none");
        }else if(b==6){

            //active button
            $( "#btn-llave-6" ).addClass( "active-button" );
            $( "#btn-llave-2, #btn-llave-3 , #btn-llave-4 , #btn-llave-5 , #btn-llave-1 , #btn-llave-7 , #btn-llave-8 , #btn-llave-9" ).removeClass( "active-button" );

            // active contenedor
            $("#hospital-llave-6").css("display", "block");
            $("#hospital-llave-2,#hospital-llave-3,#hospital-llave-4,#hospital-llave-5,#hospital-llave-1,#hospital-llave-7,#hospital-llave-8,#hospital-llave-9").css("display", "none");
        }else if(b==7){

            //active button
            $( "#btn-llave-7" ).addClass( "active-button" );
            $( "#btn-llave-2, #btn-llave-3 , #btn-llave-4 , #btn-llave-5 , #btn-llave-6 , #btn-llave-1 , #btn-llave-8 , #btn-llave-9" ).removeClass( "active-button" );

            // active contenedor
            $("#hospital-llave-7").css("display", "block");
            $("#hospital-llave-2,#hospital-llave-3,#hospital-llave-4,#hospital-llave-5,#hospital-llave-6,#hospital-llave-1,#hospital-llave-8,#hospital-llave-9").css("display", "none");
        }else if(b==8){

            //active button
            $( "#btn-llave-8" ).addClass( "active-button" );
            $( "#btn-llave-2, #btn-llave-3 , #btn-llave-4 , #btn-llave-5 , #btn-llave-6 , #btn-llave-7 , #btn-llave-1 , #btn-llave-9" ).removeClass( "active-button" );

            // active contenedor
            $("#hospital-llave-8").css("display", "block");
            $("#hospital-llave-2,#hospital-llave-3,#hospital-llave-4,#hospital-llave-5,#hospital-llave-6,#hospital-llave-7,#hospital-llave-1,#hospital-llave-9").css("display", "none");
        }else{

            //active button
            $( "#btn-llave-9" ).addClass( "active-button" );
            $( "#btn-llave-2, #btn-llave-3 , #btn-llave-4 , #btn-llave-5 , #btn-llave-6 , #btn-llave-7 , #btn-llave-8 , #btn-llave-1" ).removeClass( "active-button" );

            // active contenedor
            $("#hospital-llave-9").css("display", "block");
            $("#hospital-llave-2,#hospital-llave-3,#hospital-llave-4,#hospital-llave-5,#hospital-llave-6,#hospital-llave-7,#hospital-llave-8,#hospital-llave-1").css("display", "none");
        }

        break;
      default:
        console.log('none');
    }
}

function  ActiveContent(a) {

    $('.info-proyects').css('background','#0000');

    switch (a) {
      case 'ceferesos':
      
            $("#btn-ceferesos-1").addClass( "active-button" );

            $("#ceferesos-1").css("display", "block");

            $("#ceferesos-content").css("display", "block");
            $("#hospital-apps-content, #hospital-llave-content").css("display", "none");
        break;

      case 'Hospital apps':
            $( "#btn-apps-1" ).addClass( "active-button" );

            $("#hospital-apps-1").css("display", "block");
            $("#hospital-apps-content").css("display", "block");

            $("#ceferesos-content, #hospital-llave-content").css("display", "none");
        break;

      case 'Hospital llave en mano':
            $( "#btn-llave-1" ).addClass( "active-button" );

            $("#hospital-llave-1").css("display", "block");
            $("#hospital-llave-content").css("display", "block");
            $("#hospital-apps-content, #hospital-ceferesos-content").css("display", "none");
        break;

      default:
        console.log('none');
    }
}

function SecurityServ(a) {
    
    for (var i = 1; i < 9; i++) {

        if (i == a) {
            // active button
            $( "#opc-security-"+a ).addClass( "opc-security-active" );

            // active content
            $("#content-security-serv-"+a).removeClass("opc-serv-off");
            $("#content-security-serv-"+a).addClass("opc-serv-on");

        }else{
            // none active button
            $( "#opc-security-"+i ).removeClass( "opc-security-active" );

            // none active content
            $("#content-security-serv-"+i).addClass("opc-serv-off");
            
        }
    }
}

/* GALERIA DE FOTOS */
function caruselProyectos(name) {
    
    switch (name) {
      case 'llave':
        $(".carrousel-wm").addClass('wm-active');
        break;

      default:
        alert('none');
    }

}

function caruselProyectosClose(name) {
    
    switch (name) {
      case 'llave':
        $(".carrousel-wm").removeClass('wm-active');
        break;

      default:
        alert('none');
    }

}



/**/

$( "#btn-login" ).click(function() {

	$("#btn-login").addClass("login-btn-active");
	$("#btn-register").removeClass("login-btn-active");

	$("#login").addClass("active-form");
	$("#register").removeClass("active-form");

});

$( "#btn-register" ).click(function() {

	$("#btn-register").addClass("login-btn-active");
	$("#btn-login").removeClass("login-btn-active");

	$("#register").addClass("active-form");
	$("#login").removeClass("active-form");

});

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