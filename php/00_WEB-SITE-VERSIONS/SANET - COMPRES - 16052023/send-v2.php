<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/Exception.php';
	require 'phpmailer/PHPMailer.php';
	require 'phpmailer/SMTP.php';

	if (isset($_POST['action'])) {

		$recapcha = $_POST['recapcha'];

	    if ($recapcha==1) {

	    	if ($_POST['action']=='new_contact') {

		    	$nombre = $_POST['nombre'];
		    	$email = $_POST['email'];
		    	$telefono = $_POST['telefono'];
		    	$comentarios = $_POST['comentarios'];

		    	
		    	$mensaje = '
					<html>
					<head>
					  <title>FORULARIO DE CONTACTO SANET</title>
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
					      <td style="padding:10px;">COMENTARIOS</td>
					      <td style="padding:10px;">'.$comentarios.'</td>
					    </tr>
					    <tr>
					    	<td colspan="2" style="background:#000;color:#fff;font-size:15px;text-align:center;padding:10px;" >Copyright © 2022 SANET.com, Todos los derechos reservados.</td>
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
				    $mail->setFrom('no-reply@sanet.com', 'website');
				    //$mail->addAddress('mario.isla@tutum.com.mx', 'Contacto');     //Add a recipient
				    $mail->addAddress('jose.atemiz@tutum.com.mx', 'Contacto');     //Add a recipient

				    //Content
				    $mail->isHTML(true);                                  //Set email format to HTML
				    $mail->Subject = 'Formulario de Página Web | SANET ';
				    //$subject = "=?UTF-8?B?".base64_decode($subject)."=?=";
				    //$body = "=?UTF-8?B?".base64_decode($body)."=?=";
				    $mail->Body    = $mensaje;
				    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				    $mail->send();
				    ?>
					  <script type="text/javascript">
					      $( document ).ready(function() {
					      Swal.fire({
					          icon: 'success',
					          title:'Gracias por contactarnos',
					          text: 'Un ejecutivo se comunicará contigo lo antes posible.',
					          /*showCloseButton: true,*/
					          focusConfirm: false,
					          timerProgressBar: true,
					          confirmButtonText:
					          'Continuar',
					          confirmButtonAriaLabel: 'Send'
					        });
					        });
					    </script>
					<?php

				} catch (Exception $e) {

				    ?>
					  <script type="text/javascript">
					      $( document ).ready(function() {
					      Swal.fire({
					          icon: 'error',
					          title:'Algo salio mal',
					          text: 'Porfavor vuelve a intentarlo',
					          /*showCloseButton: true,*/
					          focusConfirm: false,
					          timerProgressBar: true,
					          confirmButtonText:
					          'Continuar',
					          confirmButtonAriaLabel: 'Send'
					        });
					        });
					      window.location.href='./gracias';
					    </script>
					<?php

				}

		    }

	    }else{
	    	// ALERTA DE ERROR
	    	?>
	    	<script type="text/javascript">
				window.location.href='./contacto';
			</script>
	    	<?php
	    }
	}
	 
?>