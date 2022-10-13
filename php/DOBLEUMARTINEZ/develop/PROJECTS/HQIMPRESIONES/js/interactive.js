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