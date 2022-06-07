<?php

	if (isset($_POST['action'])) {

	    if ($_POST['action']=='new_contact') {
	    	//echo "new contact";

	    	//$email_to_tutum = "mario.isla@tutum.com.mx, julio.milla@tutum.com.mx";
	    	$email_to_tutum = "jose.atemiz@tutum.com.mx";

	    	$subject = "CONTACTO DESDE WEBSITE";

	    	function died($error) {  
			    echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";
			    echo "Detalle de los errores.<br /><br />";
			    echo $error."<br /><br />";
			    echo "Porfavor corrija estos errores e inténtelo de nuevo.<br /><br />";
			   	die();
			}

			if(!isset($_POST['nombre']) || 
		    	!isset($_POST['email']) || 
		    	!isset($_POST['telefono']) || 
		    	!isset($_POST['empresa']) ||
		    	!isset($_POST['ciudad']) ||
		    	!isset($_POST['servicio']) ||
		    	!isset($_POST['contacto']) ||
		    	!isset($_POST['comentarios']))
		    {
		    	die('Lo sentimos pero parece haber un problema con los datos enviados.');
		    }

		    $nombre  		= $_POST['nombre']; 
	    	$email 			= $_POST['email']; 
	    	$telefono       = $_POST['telefono'];
	    	$empresa      	= $_POST['empresa'];
	    	$ciudad   		= $_POST['ciudad']; 
	    	$servicio   	= $_POST['servicio']; 
	    	$contacto       = $_POST['contacto'];
	    	$comentarios    = $_POST['comentarios'];
	    	$error_message 	= "";

	    	// mensae de error
		    if(strlen($error_message) > 0) {
		        die($error_message);
		    }

		    // envio de email 
		    $email_message = "Contenido del Mensaje.\n\n";
		      
		    function clean_string($string) {
		        $bad = array("content-type","bcc:","to:","cc:","href");
		        return str_replace($bad,"",$string);
		    }

		    $email_message .= "Nombre: ".clean_string($nombre)."\n";
		    $email_message .= "Email: ".clean_string($email)."\n";
		    $email_message .= "Teléfono: ".clean_string($telefono)."\n";
		    $email_message .= "Empresa: ".clean_string($empresa)."\n";
		    $email_message .= "Ciudad: ".clean_string($ciudad)."\n";
		    $email_message .= "Servicio: ".clean_string($servicio)."\n";
		    $email_message .= "contacto: ".clean_string($contacto)."\n";
		    $email_message .= "comentarios: ".clean_string($comentarios)."\n";
		         
		    $headers = 'From: '.$email."\r\n".'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion();
		             
		    @mail($email_to, $subject, utf8_decode($email_message), $headers);

	    }else{
	    	//echo "bolsa de trabajo";

	    	$email_to_tutum = "jose.atemiz@tutum.com.mx";
	    	//$email_to_rh = "guadalupe.chavarria@tutum.com.mx, hugo.galicia@tutum.com.mx";
	    	$subject = "CONTACTO DESDE WEBSITE";

	    	function died($error) {  
			    echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";
			    echo "Detalle de los errores.<br /><br />";
			    echo $error."<br /><br />";
			    echo "Porfavor corrija estos errores e inténtelo de nuevo.<br /><br />";
			   	die();
			}

			if(!isset($_POST['nombre']) || 
		    	!isset($_POST['email']) || 
		    	!isset($_POST['telefono']) || 
		    	!isset($_POST['especialidad']))
		    {
		    	die('Lo sentimos pero parece haber un problema con los datos enviados.');
		    }

		    $nombre   = $_POST['nombre']; 
	    	$email   = $_POST['email']; 
	    	$telefono        = $_POST['telefono'];
	    	$especialidad      = $_POST['especialidad']; 
	    	$error_message = "";

	    	// mensae de error
		    if(strlen($error_message) > 0) {
		        die($error_message);
		    }

		    // envio de email 
		    $email_message = "Contenido del Mensaje.\n\n";
		      
		    function clean_string($string) {
		        $bad = array("content-type","bcc:","to:","cc:","href");
		        return str_replace($bad,"",$string);
		    }

		    $email_message .= "Nombre: ".clean_string($nombre)."\n";
		    $email_message .= "Email: ".clean_string($email)."\n";
		    $email_message .= "Teléfono: ".clean_string($telefono)."\n";
		    $email_message .= "Especialidad: ".clean_string($especialidad)."\n";
		         
		    $headers = 'From: '.$email."\r\n".'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion();
		             
		    @mail($email_to, $subject, utf8_decode($email_message), $headers);
	    }

	}
	 
?>