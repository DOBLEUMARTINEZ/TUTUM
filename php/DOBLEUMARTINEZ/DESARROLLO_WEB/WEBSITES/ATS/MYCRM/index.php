<?php
session_start();

echo "<!DOCTYPE html><html>";

	include('./resources/conexion.php');
	include('./resources/head.php');

	if (isset($_SESSION["user"])&&isset($_SESSION["privilege"])&&isset($_SESSION["business"])) {

		include('./resources/body.php');  // INCLIDE BODY
		include('./resources/views/principal_content/modal.php'); // INCLUDE MODALS
		
	}else{

		include('./resources/login.php'); // INCLUDE LOGIN

	}

echo "</html>";

?>

