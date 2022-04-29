<?php

	$url = "http://issu.dobleumartinez.com/";
	$enterprise 	= "ISSU";
	$description = "LA MEJOR SOLUCIÓN CREATIVA.+ Profesionales en Diseño 3D, Montaje y Publicidad a nivel Nacional.+ Ofrecemos a nuestros socios de negocio, proyectos altamente competitivos, en costo y producción.";
	$url_enterprise = "https://issudecor.com/";


	if (isset($_GET['name'])&&!empty($_GET['name'])) {

		switch ($_GET['name']) {
			case 'karina':
				$name = "KARINA GUERRERO ";
				$job = "Dirección General";
				$phone 	= "5215534006470";
				$phone_2 = "5215534006470";
				$mail 	= "direccion02@issudecor.com";
				break;

			case 'francia':
				$name = "FRANCIA CASTILLO ";
				$job = "Dirección General";
				$phone 	= "5213329235337";
				$phone_2 = "5213329235337";
				$mail 	= "direccion01@issudecor.com";
				break;
			
			default:
				# code...
				break;
		}

	}else{

		$name = "FRANCIA CASTILLO ";
		$job = "Dirección General";
		$phone 	= "5213329235337";
		$phone_2 = "5213329235337";
		$mail 	= "direccion01@issudecor.com";

	}


?>