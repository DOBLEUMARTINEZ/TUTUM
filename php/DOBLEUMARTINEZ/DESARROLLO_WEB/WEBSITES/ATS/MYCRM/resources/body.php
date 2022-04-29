<?php
echo "<body><div class='body00' >";

// variables de fecha y hora

date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');
define('today', $date_l=strftime("%Y-%m-%d"));
define('time_now', $time_l=strftime("%H:%M"));

// constantes globales  privilegio, area, y usuario.
	$name_u = $_SESSION["name_u"];
	$user = $_SESSION["user"];
	$business = $_SESSION["business"];
	$privilege = $_SESSION["privilege"];

	define('name_now', $_SESSION['name_u']);
	define('user_now', $_SESSION['user']);
	define('area_now', $_SESSION['business']);
	define('priv_now', $_SESSION['privilege']);

// FECHA PARA DELIMITAR COLOCACION POR MES

	define('fecha_mes_1', '2021-03-01');
	define('fecha_mes_2', '2021-03-31');
	define('month', 'Marzo');

	$fecha_mes_1 = fecha_mes_1;
	$fecha_mes_2 = fecha_mes_2;
	$month = month;

include('./resources/funtions/funtions.php'); // functions 
include('./resources/funtions/funtions_ag.php'); // functions AG


include('./resources/views/lateralmenu.php'); // lateral menu
include('./resources/views/principalcontent.php'); // principal content

echo "</div></body>";
?>



