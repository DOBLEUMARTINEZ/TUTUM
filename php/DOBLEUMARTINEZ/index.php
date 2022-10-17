<?php
	
	echo "<!DOCTYPE html><html>";

	include('resources/includes/principal/head.php'); // head

	echo "<body>";

		include('resources/includes/principal/nav.php'); // navbar

		if (isset($_GET['seccion'])) {
			switch ($_GET['seccion']) {
				case 'musica':
					# code...
					break;

				case 'desarrollo-web':
					include('resources/includes/desarrollo-web/desarrollo-web.php'); 
					break;

				case 'gracias':
					include('resources/includes/notice/gracias-wm.php'); // error-404
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