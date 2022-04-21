<?php



	$user 		= "root";

	$pw 		= "";

	$server	 	= "localhost";

	$database 	= "atsonlin_crm";



	$con = mysqli_connect($server,$user,$pw) or die ("No se ha podido conectar al servidor de Base de datos");



	$db = mysqli_select_db( $con, $database ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );



	if ($con->connect_error) {



    die("Connection failed: " . $con->connect_error);



	}





?>

