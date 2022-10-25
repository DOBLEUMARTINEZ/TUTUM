const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.navegacion');
const nav_bar = document.querySelector('.wrapper ul.nav-links li a');
const logo = document.querySelector('img');


// hamburger.addEventListener('click', () => {
// 	hamburger.classList.toggle('active');
// 	mobile_menu.classList.toggle('active');
// });

document.addEventListener('scroll', () => {
	const scroll_position = window.scrollY;
	if (scroll_position > 100) {
		header.style.backgroundColor = '#fff';

	} else {
		header.style.backgroundColor = 'rgba(31, 30, 30, 0.5)';

	}
});


menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});


window.addEventListener("scroll", function () {
	const nav_bar = document.querySelector("ul");
	nav_bar.classList.toggle("sticky", window.scrollY > 100);
});


$(function () {
	$(document).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('#logo').attr('src', 'img/logo.png')
		}
		if ($(this).scrollTop() < 1) {
			$('#logo').attr('src', 'img/tutum-logo-blanco-005.png');
		}
	});
});

//video slider
const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".video-slide");
const contents = document.querySelectorAll(".contenido");


var sliderNav = function (manual) {
	btns.forEach((btn) => {
		btn.classList.remove("active")
	});

	slides.forEach((slide) => {
		slide.classList.remove("active")
	});

	contents.forEach((contents) => {
		contents.classList.remove("active")
	});

	btns[manual].classList.add("active");
	slides[manual].classList.add("active");
	contents[manual].classList.add("active");
}
btns.forEach((btn, i) => {
	btn.addEventListener("click", () => {
		sliderNav(i);
	});
});

function toggle() {
	const youtube = document.querySelector(".youtube")
	youtube.classList.toggle("active")

	const iframe = document.querySelector("iframe")
	iframe.classList.toggle("active");

	iframe.currenTime = 0;
}

function toggle1() {
	const youtube = document.querySelector(".youtube_1")
	youtube.classList.toggle("active")

	const iframe = document.querySelector("iframe")
	iframe.classList.toggle("active");

	iframe.currenTime = 0;
}

function toggle2() {
	const youtube = document.querySelector(".youtube_2")
	youtube.classList.toggle("active")

	const iframe = document.querySelector("iframe")
	iframe.classList.toggle("active");

	iframe.currenTime = 0;
}

function toggle3() {
	const youtube = document.querySelector(".youtube_3")
	youtube.classList.toggle("active")

	const iframe = document.querySelector("iframe")
	iframe.classList.toggle("active");

	iframe.currenTime = 0;
}
function toggle4() {
	const youtube = document.querySelector(".youtube_4")
	youtube.classList.toggle("active")

	const iframe = document.querySelector("iframe")
	iframe.classList.toggle("active");

	iframe.currenTime = 0;
}

function toggle5() {
	const youtube = document.querySelector(".youtube_5")
	youtube.classList.toggle("active")

	const iframe = document.querySelector("iframe")
	iframe.classList.toggle("active");

	iframe.currenTime = 0;
}

function toggle6() {
	const youtube = document.querySelector(".youtube_6")
	youtube.classList.toggle("active")

	const iframe = document.querySelector("iframe")
	iframe.classList.toggle("active");

	iframe.currenTime = 0;
}
function toggle7() {
	const youtube = document.querySelector(".youtube_7")
	youtube.classList.toggle("active")

	const iframe = document.querySelector("iframe")
	iframe.classList.toggle("active");

	iframe.currenTime = 0;
}



const loader =	document.querySelector('.loader')



 $(window).load(function() {
     $(".loader").fadeOut(400);
 });


 addEventListener('DOMContentLoaded', () => {
	const contadores = document.querySelectorAll('.contador_cantidad')
	const velocidad = 5000

	const animarContadores = () => {
		for (const contador of contadores) {
			const actualizar_contador = () => {
				let cantidad_maxima = +contador.dataset.cantidadTotal,
					valor_actual = +contador.innerText,
					incremento = cantidad_maxima / velocidad

				if (valor_actual < cantidad_maxima) {
					contador.innerText = Math.ceil(valor_actual + incremento)
					setTimeout(actualizar_contador, 5)
				} else {
					contador.innerText = cantidad_maxima
				}
			}
			actualizar_contador()
		}
		
	}
	//IntersectionObserver

	const mostrarContadores = elementos => {
		elementos.forEach(elemento =>{
			if(elemento.isIntersecting){
				elemento.target.classList.add('animar')
				elemento.target.classList.remove('ocultar')
				setTimeout(animarContadores, 1000)
			}
		});
	}

	const observer = new IntersectionObserver(mostrarContadores, {
		threshold: 0.75
	})
	const elementosHTML = document.querySelectorAll('.contador')
	elementosHTML.forEach(elementoHTML =>{
		observer.observe(elementoHTML)
	})
});


 