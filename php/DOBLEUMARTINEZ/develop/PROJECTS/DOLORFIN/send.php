<?php

	if (isset($_POST['action'])&&(!empty($_POST['action']))) {
		
		//var_dump($_REQUEST); // Does not contain elements 'foo' or 'bar'
		if(!isset($_POST['nombre']) ||
		    !isset($_POST['apellido']) ||
		    !isset($_POST['telefono']) ||
		    !isset($_POST['correo']) ||
		    !isset($_POST['rango1']) ||
		    !isset($_POST['rango2']) ||
		   	!isset($_POST['mensaje']))
		{
		    die('Lo sentimos pero parece haber un problema con los datos enviados.');
		}

		//$recapcha = '1';
		$recapcha = $_POST['recapcha'];

		if ($recapcha == '1') {

			$email_to = "contacto@dobleumartinez.com";
		    $email_subject = 'Formulario de Pagina Web | DOLORFIN ';
		    $email_message='';

		    $nombre = $_POST['nombre']; 
		    $apellido = $_POST['apellido'];
		    $telefono = $_POST['telefono'];
		    $correo = $_POST['correo'];
		    $rango1 = $_POST['rango1'];
		    $rango2 = $_POST['rango2'];
		    $mensaje = $_POST['mensaje'];
		    $error_message = "";

		    // mensae de error
		    if(strlen($error_message) > 0) {
		        die($error_message);
		    }
		      
		    function clean_string($string) {
		        $bad = array("content-type","bcc:","to:","cc:","href");
		        return str_replace($bad,"",$string);
		    }

		    $email_message .= "Nombre: ".clean_string($nombre)."\n";
		    $email_message .= "Apellido: ".clean_string($apellido)."\n";
		    $email_message .= "Teléfono: ".clean_string($telefono)."\n";
		    $email_message .= "Correo: ".clean_string($correo)."\n";
		    $email_message .= "Indica el nivel de tensión y/o dolor actual: ".clean_string($rango1)."\n";
		    $email_message .= "Del 1 al 10, ¿qué tan importante es tu salud? ".clean_string($rango2)."\n";
		    $email_message .= "Comentarios: ".clean_string($mensaje)."\n";
		             
		    $headers = "From: ventas@dobleumartinez.com". "\r\n" . "CC: jose.atemiz@tutum.com.mx";
		   
		    @mail($email_to, utf8_decode($email_subject), utf8_decode($email_message), $headers);
		    header('location: ./gracias');
		    exit();

		}else{
			header('location: ./');
	    	exit();
		}
	}
	 
?>