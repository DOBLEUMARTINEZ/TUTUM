<?php

	if (isset($_POST['action'])) {

		$recapcha = $_POST['recapcha'];

	    if ($recapcha==1) {

	    	$email_to = "contacto@dobleumartinez.com";
		    $email_subject = 'Formulario de Pagina Web | DOLORFIN ';

		        
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
		        !isset($_POST['comentarios']))
		      {
		        die('Lo sentimos pero parece haber un problema con los datos enviados.');
		      }

		      $nombre = $_POST['nombre']; 
		      $email = $_POST['email'];
		      $telefono = $_POST['telefono'];
		      $comentarios = $_POST['comentarios'];
		      $error_message = "";

		      //

		            /*
		                $string_exp = "/^[A-Za-z .'-_]+$/";
		              if(!preg_match($string_exp,$first_name)) {

		                $error_message .= 'El formato del nombre no es válido<br />';
		             
		                }
		              */
		          
		          // mensae de error
		            if(strlen($error_message) > 0) {
		              die($error_message);
		            }
		      
		            function clean_string($string) {
		              $bad = array("content-type","bcc:","to:","cc:","href");
		              return str_replace($bad,"",$string);
		            }

		            $email_message .= "Nombre: ".clean_string($nombre)."\n";
		            $email_message .= "Email: ".clean_string($email)."\n";
		            $email_message .= "Teléfono: ".clean_string($telefono )."\n";
		            $email_message .= "Comentarios: ".clean_string($comentarios)."\n";
		             
		            $headers = "From: ventas@dobleumartinez.com". "\r\n" . "CC: jose.atemiz@tutum.com.mx";
		             
		            @mail($email_to, utf8_decode($email_subject), utf8_decode($email_message), $headers);

		            echo "<script>window.location.href='./gracias';</script>";
		            exit();

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