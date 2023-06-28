<?php
	
	echo "<!DOCTYPE html><html>";

	include('resources/includes/principal/head.php'); // head

	echo "<body>";

		include('resources/includes/principal/nav.php'); // navbar

		if (isset($_GET['seccion'])) {

			switch ($_GET['seccion']) {

				case 'desarrollo-web':
					include('resources/includes/services/inicio.php'); 
					break;

				case 'marketing-digital':
					include('resources/includes/services/marketing-digital.php'); // Marketing digital
					break;

				case 'tattoo':
					include('resources/includes/services/tattoo.php'); // Tatuajes
					break;

				case 'musica':
					include('resources/includes/notice/error-404.php'); // Musica
					break;

				case 'gracias':
					include('resources/includes/notice/gracias-wm.php'); // Gracias
					break;
				
				default:
					include('resources/includes/notice/error-404.php'); // error-404
					break;

			}
		}else{
			include('resources/includes/principal/inicio.php'); // contenido del index
 		}

		include('resources/includes/principal/footer.php'); // footer

	echo "</body></html>";

?>