	// HEAD MOBIL

	$( ".menu-open" ).click(function() {
	  $('.menu-mobil').addClass('menu-mobil-active');
	});

	$( ".menu-close" ).click(function() {
	  $('.menu-mobil').removeClass('menu-mobil-active');
	});

	// ghghghg

	var slideIndex = 0;
	
	showSlides();

	function showSlides() {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  for (i = 0; i < slides.length; i++) {
	    slides[i].style.display = "none";  
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}    
	  for (i = 0; i < dots.length; i++) {
	    dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	  setTimeout(showSlides, 1000); // Change image every 2 seconds
	}


	// HEDER ACTIVATE

	var pathname = window.location.pathname; 
	

	if (pathname=='/') {
		
		$('.opc-1').addClass('opc-active');
	}

	if (pathname=='/about.php') {
		
		$('.opc-2').addClass('opc-active');
	}

	if (pathname=='/tank.php') {
		
		$('.opc-3').addClass('opc-active');
	}

	if (pathname=='/greenhouse.php') {
		
		$('.opc-4').addClass('opc-active');
	}

	if (pathname=='/products.php') {
		
		$('.opc-5').addClass('opc-active');
	}

	if (pathname=='/contact.php') {
		
		$('.opc-6').addClass('opc-active');
	}

	if (pathname=='/product_1.php') {
		
		$('.opc-7,.opc-5').addClass('opc-active');
	}

	if (pathname=='/product_2.php') {
		
		$('.opc-8,.opc-5').addClass('opc-active');
	}

	if (pathname=='/product_3.php') {
		
		$('.opc-9,.opc-5').addClass('opc-active');
	}

	if (pathname=='/product_4.php') {
		
		$('.opc-10,.opc-5').addClass('opc-active');
	}

	if (pathname=='/proyects.php') {
		
		$('.opc-11,.opc-5').addClass('opc-active');
	}

	if (pathname=='/blog.php') {
		
		$('.opc-blog').addClass('opc-active');
	}

	// validation recapcha

    window.onload = function() {
      var recaptcha = document.forms["formulario"]["g-recaptcha-response"];
      recaptcha.required = true;
      recaptcha.oninvalid = function(e) {
        // si la función es null abrir alert
        alert("Completa el filtro reCAPTCHA");
      }
    }


	$(document).ready(function(){ //Hacia arriba
		  irArriba();
	});

	function irArriba(){

		$('.ir-arriba').click(function(){

	   		$('body,html').animate({ scrollTop:'0px' },1000); 

		});

	  	$(window).scroll(function(){

	    	if($(this).scrollTop() > 0){

	    		$('.ir-arriba').slideDown(600);

	    		$('.box-logo').addClass('box-logo-down');

	    		$('.button-whatsapp').addClass('button-whatsapp-ative');

	    	}else{ 

	    		$('.ir-arriba').slideUp(600);

	    		$('.box-logo').removeClass('box-logo-down');

	    		$('.button-whatsapp').removeClass('button-whatsapp-ative');
	    	}

	  	});

	  	$('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
	};



  