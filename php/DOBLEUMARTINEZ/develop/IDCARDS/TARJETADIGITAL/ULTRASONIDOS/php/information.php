<?php

	if (isset($_GET['name'])&&!empty($_GET['name'])) {

		switch ($_GET['name']) {
			case 'DRA.YESENIA':
				// DATA
				$url 			= "https://ultrasonidos.dobleumartinez.com/DRA.YESENIA";
				$enterprise 	= "MEDICINA GENERAL";
				$description 	= "MEDICINA GENERAL DESC";
				$url_enterprise = "https://ultrasonidos.dobleumartinez.com/DRA.YESENIA";

				// DATA PERSONAL
				$name = "YESENIA SALMORAL TREJO";
				$job = "Médico General";
				$phone 	= "5219612445121";
				$phone_2 = "5219612445121";
				$mail 	= "ultrasonidos@gmail.com";
				$address = 'c. corregidora entre allende y aldama Palenque Chiapas, Palenque, Mexico, 29960';

				// MULTIMEDIA
				$pick = "foto-doctora.jpg";
				$icon = "icon-ultrasonidos.png";
				$logo = "blank.jpg";
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
				$enterprise 	= "ULTRASONIDOS";
				$description 	= "ULTRASONIDOS DESC";
				$url_enterprise = "https://ultrasonidos.dobleumartinez.com/DR.ANTONIO";

				// DATA PERSONAL
				$name = "DR. ANTONIO FERNANDEZ QUIÑONES";
				$job = "Médico Ultrasonografista";
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
		$name = "ARACELI MORALES CORTES";
		$job = "EJECUTIVO DE VENTAS";
		$phone 	= "525585488532";
		$phone_2 = "525585488532";
		$mail 	= "ventas@dobleumartinez.com";

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