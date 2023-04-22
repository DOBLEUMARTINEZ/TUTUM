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
				$name = "DRA. YESENIA";
				$apellido = "SALMORAN TREJO";
				$job = "Médico General";
				$cedulaProf = "CED.PROF. 12386373-UNACH";
				$phone 	= "5219612445121";
				$phone_2 = "5219612445121";
				$telegram = "https://t.me/+529612445121";
				$mail 	= "yesi.82@outlook.es";
				$address = 'Calle Corregidora & Leona Vicario, Ganadera, 86992 Emiliano Zapata, Tab.';
				$url_address = 'https://goo.gl/maps/WcRPbHPbGU8TLkY17';

				// MULTIMEDIA
				$pick = "foto-doctora.jpg";
				$icon = "icon-ultrasonidos.png";
				$logo = "electro.jpg";
				$qr = "qr-code-DraYesenia.png";

				// SERVICIOS
				$services = array(
					'1' => 'Consulta medica',
					'2' => 'Toma de glisemia capilar',
					'3' => 'Toma de presión arterial',
					'4' => 'Certificados Medicos',
					'5' => 'Peso y talla',
					'6' => 'Retiro de implante DIU',
					'7' => 'Inyecciones',
					'8' => 'Nebulizaciones',
					'9' => 'Curaciones de heridas',
					'10' => 'Sutura y retiro de puntos',
					'11' => 'Control de niño sano',
					'12' => 'Control diabetes',
					'13' => 'Mellitus',
					'14' => 'Hipertensión arterial',
					'15' => 'Control prenatal',
					'16' => 'Planificación familiar',
					'17' => 'Aplicación de sueros Vitaminados',
					'18' => 'Cambio y colocación de sondas',
					'19' => 'Lavado de oidos',
					'20' => 'Toma de papanicolaou',
					'21' => 'Examen de mamas',
				);

				// REDES SOCIALES
				$facebook = "https://www.facebook.com/profile.php?id=100089422906747";
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
				$name = "DR. ANTONIO F.";
				$apellido = "QUIÑONES";
				$job = "Médico Ultrasonografista";
				$cedulaProf = "CED.PROF1880913.DEPAS0631D133-2008/17DAP0";
				$phone 	= "529341351167";
				$phone_2 = "529341351167";
				$telegram = "";
				$mail 	= "fernandezquinoneza@gmail.com";
				$address = 'Calle Corregidora & Leona Vicario, Ganadera, 86992 Emiliano Zapata, Tab.';
				$url_address = 'https://goo.gl/maps/WcRPbHPbGU8TLkY17';

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
				$facebook = "https://www.facebook.com/profile.php?id=100089422906747";
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
		$apellido="";
		$job = "EJECUTIVO DE VENTAS";
		$cedulaProf = "";
		$phone 	= "525585488532";
		$phone_2 = "525585488532";
		$mail 	= "ventas@dobleumartinez.com";
		$address = 'Calle Corregidora & Leona Vicario, Ganadera, 86992 Emiliano Zapata, Tab.';
		$url_address = 'https://goo.gl/maps/WcRPbHPbGU8TLkY17';

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