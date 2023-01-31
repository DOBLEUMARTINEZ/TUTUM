<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/Exception.php';
	require 'phpmailer/PHPMailer.php';
	require 'phpmailer/SMTP.php';

	if ( (isset($_POST['action'])) && ($_POST['recapcha']==true) ) {

		// FUNCIONES DE VALIDACION DE BLACK LIST
		function checkblacklist($name_form) {

			if ( ($name_form == 'Crytosurdy') || ($name_form == 'surdy') ){

				$result_serch = false;
 			
			}else{

				$result_serch = true;
				throw new Exception("EL NOMBRE DE FORM ES VALIDO ");

			}

		  	return $result_serch;
		}

		//trigger exception in a "try" block
		try {

		  	checkblacklist($_POST['nombre']);

		  	//If the exception is thrown, this text will not be shown
		  	echo "ES SPAM";
		    //session_destroy();
		    header('location: ./');
		    exit();
		}

		//catch exception
		catch(Exception $e) {
		  echo 'Message: ' .$e->getMessage();
		}

	    // CONTINUA Y GENARA NUEVO CORREO DE MAIL
	    if ($_POST['action']=='new_contact') {

	    	// DATA POST
				$nombre = $_POST['nombre'];
				$email = $_POST['email'];
				$telefono = $_POST['telefono'];
				$empresa = $_POST['empresa'];
				$ciudad = $_POST['ciudad'];
				$servicio = $_POST['servicio'];
				$contacto = $_POST['contacto'];
				$comentarios = $_POST['comentarios'];
				$mensaje ='
							<html>
							<head>
							  <title>FORULARIO DE CONTACTO TUTUM</title>
							</head>
							<body>
							  <table style="width:80%;margin-left:10%;font-size:15px;text-align:left;">
							  	<tr>
							  		<th colspan="2" style="background:#000;color:#fff;font-size:25px;padding:10px;" > SOLICITUD DE SERVICIOS </th>
							  	</tr>
							    <tr>
							      <td style="padding:10px;" >NOMBRE </td>
							      <td style="padding:10px;" >'.$nombre.'</td>
							    </tr>
							    <tr>
							      <td style="padding:10px;">EMAIL </td>
							      <td style="padding:10px;">'.$email.'</td>
							    </tr>
							    <tr>
							      <td style="padding:10px;">TELÉFONO </td>
							      <td style="padding:10px;">'.$telefono.'</td>
							    </tr>
							    <tr>
							      <td style="padding:10px;">EMPRESA </td>
							      <td style="padding:10px;">'.$empresa.'</td>
							    </tr>
							    <tr>
							      <td style="padding:10px;">CIUDAD </td>
							      <td style="padding:10px;">'.$ciudad.'</td>
							    </tr>
							    <tr>
							      <td style="padding:10px;">SERVICIO </td>
							      <td style="padding:10px;">'.$servicio.'</td>
							    </tr>
							    <tr>
							      <td style="padding:10px;">MEDIO DE CONTACTO</td>
							      <td style="padding:10px;">'.$contacto.'</td>
							    </tr>
							    <tr>
							      <td style="padding:10px;">COMENTARIOS</td>
							      <td style="padding:10px;">'.$comentarios.'</td>
							    </tr>
							    <tr>
							    	<td colspan="2" style="background:#000;color:#fff;font-size:15px;text-align:center;padding:10px;" >Copyright © 2022 tutum.com.mx, Todos los derechos reservados.</td>
							    </tr>
							  </table>
							</body>
							</html>
							';
			    
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
					//$mail->addAddress('mario.isla@tutum.com.mx', 'Contacto');     //Add a recipient
					$mail->addAddress('jose.atemiz@tutum.com.mx', 'Contacto');     //Add a recipient

				//Content
					$mail->isHTML(true);                                  //Set email format to HTML
					$mail->Subject = 'Formulario de Página Web | TUTUM ';
					//$subject = "=?UTF-8?B?".base64_decode($subject)."=?=";
					//$body = "=?UTF-8?B?".base64_decode($body)."=?=";
					$mail->Body    = $mensaje;
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

					$mail->send();

					header('location: gracias');
		    		exit();

			} catch (Exception $e) {

				header('location: ./');
		    	exit();
			}

		}else{ // BOLSA DE TRABAJO

			//  DATOS  FORMULARIO BOLSA DE TRABAJO
				$nombre = $_POST['nombre'];
				$email = $_POST['email'];
				$telefono = $_POST['telefono'];
				$especialidad = $_POST['especialidad'];

			    if (!empty($_FILES['cv']['name'])) {

			    		$name_file  = $_FILES['cv']['name'];
			            $file       = $_FILES['cv']['tmp_name'];
			            $type       = $_FILES['cv']['type'];
			            $size       = $_FILES['cv']['size'];

			            $uploads_dir = 'uploads';
			            $upload_file = move_uploaded_file($file,"$uploads_dir/$name_file");
			            $uploads_dir = 'uploads/'.$name_file;
			            $img = $uploads_dir;
			    }

			    $mensaje = '
						<html>
						<head>
						  <title>FORULARIO DE BOLSA DE TRABAJO</title>
						</head>
						<body>
						  <table style="width:80%;margin-left:10%;font-size:15px;text-align:left;">
						  	<tr>
						  		<th colspan="2" style="background:#000;color:#fff;font-size:25px;padding:10px;" > INFORMACIÓN DEL INTERESADO </th>
						  	</tr>
						    <tr>
						      <td style="padding:10px;" >NOMBRE </td>
						      <td style="padding:10px;" >'.$nombre.'</td>
						    </tr>
						    <tr>
						      <td style="padding:10px;">EMAIL </td>
						      <td style="padding:10px;">'.$email.'</td>
						    </tr>
						    <tr>
						      <td style="padding:10px;">TELÉFONO </td>
						      <td style="padding:10px;">'.$telefono.'</td>
						    </tr>
						    <tr>
						      <td style="padding:10px;">ESPECIALIDAD </td>
						      <td style="padding:10px;">'.$especialidad.'</td>
						    </tr>
						    <tr>
						    	<td colspan="2" style="background:#000;color:#fff;font-size:15px;text-align:center;padding:10px;" >Copyright © 2022 tutum.com.mx, Todos los derechos reservados.</td>
						    </tr>
						  </table>
						</body>
						</html>
						';

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
					$mail->addAddress('hugo.galicia@tutum.com.mx', 'Contacto'); //Add a recipient
					//$mail->addAddress('jose.atemiz@tutum.com.mx', 'Contacto');     //Add a recipient

					//Content
					$mail->isHTML(true);                                  //Set email format to HTML
					$mail->Subject = 'Formulario de Página Web | TUTUM ';
					//$subject = "=?UTF-8?B?".base64_decode($subject)."=?=";
					//$body = "=?UTF-8?B?".base64_decode($body)."=?=";
					$mail->Body    = $mensaje;
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

					if (!empty($_FILES['cv']['name'])) {
					 $mail->AddAttachment($img,$name_file);
					}

					$mail->send();

					header('location: gracias');
		    		exit();

				} catch (Exception $e) {

					header('location: ./');
		    		exit();

				}

		}
			
	}
?>