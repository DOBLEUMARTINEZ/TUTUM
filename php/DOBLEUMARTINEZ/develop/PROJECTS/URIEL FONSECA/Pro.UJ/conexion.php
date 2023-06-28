<?php
	// conexion con base de datos
		$user 		= "root";
		$pw 		= "";
		$server	 	= "localhost";
		$database 	= "biblioteca_db";

		$con = mysqli_connect($server,$user,$pw) or die ("No se ha podido conectar al servidor de Base de datos");
		$db = mysqli_select_db( $con, $database ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// validar si la conexion fue bien	
	if ($con->connect_error) {
		// si hubo un fallo
    	die("Connection failed: " . $con->connect_error);
	}else{
		// Todo marcha bien
		//echo "yes";

			// asignando valires a variables
			$nombre_alumno = $_POST['name'];
        	$titulo = $_POST['title'];
        	$autor = $_POST['autor'];
        	$genero = $_POST['genero'];
        	$fecha_prestamo = $_POST['horayfechalocal'];

        	// creando el query para guardar en base de datos
        	$sql = "INSERT INTO prestamos (nombre_alumno, titulo, autor, genero, fecha_prestamo) VALUES ('$nombre_alumno','$titulo', '$autor', '$genero', '$fecha_prestamo');";
        	// en esta linea se manda el query y se guarda en base de datos
        	$result = $con->query($sql);

        	$sql = "SELECT * FROM prestamos"; 
        	$result = $con->query($sql);
        	var_dump($result);

        	foreach ($result as $valor) {
			   	echo $valor['id'].'<br>';
			}

        	exit();

        	/*foreach ($array as $clave => $valor) {
			     $array[3] se actualizará con cada valor de $array...
			    echo "{$clave} => {$valor} ";
			    print_r($array);
			}*/	

       // aleta de exito 	
        echo '<script> confirm("REGITRO GUARDADO CON EXITO!!, DA CLIC EN ACEPTAR PARA CONTINUAR"); window.location.href="./";</script>';


        //header('location: ./');
		exit();
	}







?>

