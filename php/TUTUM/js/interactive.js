var pathname = window.location.pathname; 

	if (pathname=='/') {
		
		$('.menu-opc-1').addClass('menu-opc-active');
	}

	if (pathname=='/reclutamiento.php') {
		
		$('.menu-opc-2').addClass('menu-opc-active');
	}

	if (pathname=='/estudios.php') {
		
		$('.menu-opc-3').addClass('menu-opc-active');
	}

	if (pathname=='/pruebapsicometrica.php'||pathname=='/pruebaconfianza.php'||pathname=='/pruebacomercial.php') {
		
		$('.menu-opc-4').addClass('menu-opc-active');
	}

	if (pathname=='/blog.php') {
		
		$('.menu-opc-5').addClass('menu-opc-active');
	}

	if (pathname=='/contact.php') {
		
		$('.menu-opc-6').addClass('menu-opc-active');
	}

	if (pathname=='/jobboard.php') {
		
		$('.menu-opc-7').addClass('menu-opc-active');
	}

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