<?php

	if (isset($_GET['name'])&&!empty($_GET['name'])) {

		switch ($_GET['name']) {
			case 'DRA.YESENIA':
				// DATA
				$url 			= "https://ultrasonidos.dobleumartinez.com/DRA.YESENIA";
				$enterprise 	= "Centro de Diagnóstico Integral De Los Rios Unidad Palenque";
				$description 	= "Médicina General<br>CED.PROF. 12386373-UNACH";
				$url_enterprise = "https://ultrasonidos.dobleumartinez.com/DRA.YESENIA";

				// DATA PERSONAL
				$name = "YESENIA SALMORAN TREJO";
				$job = "Médico General";
				$cedulaProf = "CED.PROF. 12386373-UNACH";
				$phone 	= "5219612445121";
				$phone_2 = "5219612445121";
				$mail 	= "ultrasonidos@gmail.com";
				$address = 'c. corregidora entre allende y aldama Palenque Chiapas, Palenque, Mexico, 29960';

				// MULTIMEDIA
				$pick = "foto-doctora.jpg";
				$icon = "icon-ultrasonidos.png";
				$logo = "electro.jpg";
				$qr = "qr-code-DraYesenia.png";

				// SERVICIOS
				$services = array(
					'1' => 'Abdominal',
					'2' => 'Control parental',
					'3' => 'Renal',
					'4' => 'Prostatico',
					'5' => 'Útero y ovarios',
					'6' => 'Obsetrico',
					'7' => 'Mama'
				);

				// REDES SOCIALES
				$socialMedia = array(
					'fab fa-facebook-f' => 'https://www.facebook.com/profile.php?id=100089422906747',
					'fab fa-instagram' => '',
					'fab fa-linkedin-in' => '',
					'fab fa-youtube' => '',
					'fab fa-behance' => ''
				);
				break;

			case 'DR.ANTONIO':
				// DATA
				$url 			= "https://ultrasonidos.dobleumartinez.com/DR.ANTONIO";
				$enterprise 	= "Centro de Diagnóstico Integral De Los Rios Unidad Palenque";
				$description 	= "Médico Ultrasonografista<br>CED. PROF1880913.DEPAS0631D133-2008/17DAP0";
				$url_enterprise = "https://ultrasonidos.dobleumartinez.com/DR.ANTONIO";

				// DATA PERSONAL
				$name = "DR. ANTONIO F. QUIÑONES";
				$job = "Médico Ultrasonografista";
				$cedulaProf = "CED. PROF1880913.DEPAS0631D133-2008/17DAP0";
				$phone 	= "529341351167";
				$phone_2 = "529341351167";
				$mail 	= "ultrasonidos@gmail.com";
				$address = 'c. corregidora entre allende y aldama Palenque Chiapas, Palenque, Mexico, 29960';

				// MULTIMEDIA
				$pick = "foto-user.jpg";
				$icon = "icon-ultrasonidos.png";
				$logo = "ultrasonidos.jpg";
				$qr = "qr-code-DrAntonio.png";

				// SERVICIOS
				$services = array(
					'1' => 'Abdominal',
					'2' => 'Control parental',
					'3' => 'Renal',
					'4' => 'Prostatico',
					'5' => 'Útero y ovarios',
					'6' => 'Obsetrico 4D - 5D',
					'7' => 'Mama'
				);

				// REDES SOCIALES
				$socialMedia = array(
					'fab fa-facebook-f' => 'https://www.facebook.com/profile.php?id=100089422906747',
					'fab fa-instagram' => '',
					'fab fa-linkedin-in' => '',
					'fab fa-youtube' => '',
					'fab fa-behance' => ''
				);	
				break;
			
			default:
				# code...
				break;
		}

	}else{

		// DATA
		$url 			= "https://ultrasonidos.dobleumartinez.com/";
		$enterprise 	= "ULTRASONIDOS";
		$description 	= "ULTRASONIDOS";
		$url_enterprise = "https://dobleumartinez.com/";

		// DATA PERSONAL
		$name = "ING. ARACELI MORALES";
		$job = "EJECUTIVO DE VENTAS";
		$cedulaProf = "";
		$phone 	= "525585488532";
		$phone_2 = "525585488532";
		$mail 	= "ventas@dobleumartinez.com";
		$address = 'cdmx';

		// MULTIMEDIA
		$pick = "dobleu-2.jpg";
		$icon = "icon-wm.png";
		$logo = "blank.jpg";
		$qr = "qr-code-ultrasonidos.png";

		// SERVICIOS
		$services = array(
			'1' => 'Abdominal',
			'2' => 'Control parental',
			'3' => 'Renal',
			'4' => 'Prostatico',
			'5' => 'Útero y ovarios',
			'6' => 'Obsetrico',
			'7' => 'Mama'
		);

		// REDES SOCIALES
		$socialMedia = array(
			'fab fa-facebook-f' => 'https://www.facebook.com/profile.php?id=100089422906747',
			'fab fa-instagram' => '',
			'fab fa-linkedin-in' => '',
			'fab fa-youtube' => '',
			'fab fa-behance' => ''
		);

	}

?>