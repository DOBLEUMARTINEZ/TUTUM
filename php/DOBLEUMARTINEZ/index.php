<?php
	
	echo "<!DOCTYPE html><html>";

	include('resources/includes/head.php'); // head

	echo "<body>";

		include('resources/includes/nav.php'); // navbar

		if (isset($_GET['seccion'])) {
			switch ($_GET['seccion']) {
				case 'musica':
					# code...
					break;

				case 'desarrollo-web':
					include('resources/includes/desarrollo-web/desarrollo-web.php'); 
					break;
				
				default:
					include('resources/includes/error-404.php'); // error-404
					break;
			}
		}else{
			include('resources/includes/inicio.php'); // contenido del index
 		}

		include('resources/includes/footer.php'); // footer

	echo "</body></html>";

?>