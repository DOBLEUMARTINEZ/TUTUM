<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/Exception.php';
	require 'phpmailer/PHPMailer.php';
	require 'phpmailer/SMTP.php';

	if (isset($_POST['action'])) {

	    if ($_POST['action']=='new_contact') {
	    
		
			//Create an instance; passing `true` enables exceptions
			$mail = new PHPMailer(true);
			try {
			    //Server settings
			    $mail->SMTPDebug = 0;                      //Enable verbose debug output
			    $mail->isSMTP(true);
			    $mail-> CharSet = 'UTF-8';                                           //Send using SMTP
			    $mail->Encoding = 'base64';
			    $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
			    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			    $mail->Username   = 'no-reply@tutum.com.mx';                     //SMTP username
			    $mail->Password   = 'FqW9#dX07u1yKjLp0p2';                               //SMTP password
			    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
			    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

			    //Recipients
			    $mail->setFrom('no-reply@tutum.com.mx', 'website');
			    $mail->addAddress('jose.atemiz@tutum.com.mx', 'jose');     //Add a recipient

			    //Content
			    $mail->isHTML(true);                                  //Set email format to HTML
			    $mail->Subject = 'Formulario de Página Web | TUTUM ';
			    //$subject = "=?UTF-8?B?".base64_decode($subject)."=?=";
			    //$body = "=?UTF-8?B?".base64_decode($body)."=?=";
			    $mail->Body    = ' cuerpo de email';
			    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			    $mail->send();
			    echo '<script> alert ("Correo enviado correctamente") </script>';

			} catch (Exception $e) {

			    echo '<script> alert ("Lo sentimos, algo ocurrio") </script>';

			}

			///echo "string";

	    }else{
	    	//echo "bolsa de trabajo";

	    	$email_to = "jose.atemiz@tutum.com.mx";
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
		         
		    //$headers = 'From: '.$email."\r\n".'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion();
		             
		    ///@mail($email_to, $subject, utf8_decode($email_message), $headers);


		     //Create a new PHPMailer instance
			$mail = new PHPMailer();
			$mail->IsSMTP();
			 
			//Configuracion servidor mail
			$mail->From = "jose.atemiz@tutum.com.mx"; //remitente
			$mail-> CharSet = 'UTF-8';
			$mail->Encoding = 'base64';
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'tls'; //seguridad
			$mail->Host = "smtp.office365.com"; // servidor smtp
			$mail->Port = 587; //puerto
			$mail->Username ='no-reply@tutum.com.mx'; //nombre usuario
			$mail->Password = 'FqW9#dX07u1yKjLp0p2'; //contraseña
			 
			//Agregar destinatario
			$mail->AddAddress($email);
			$mail->Subject = 'CONTACTO DESDE WEBSITE';
			$mail->Body = $email_message;
			 
			//Avisar si fue enviado o no y dirigir al index
			if ($mail->Send()) {
			    echo'<script type="text/javascript">
			           alert("Enviado Correctamente");
			        </script>';
			} else {
			    echo'<script type="text/javascript">
			           alert("NO ENVIADO, intentar de nuevo");
			           window.location.href = "./";
			        </script>';
			}

	    }

	}
	 
?>