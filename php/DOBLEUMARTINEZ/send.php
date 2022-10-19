<?php

if (isset($_POST['action'])||isset($_GET['action'])) {

  if ($_POST['action']=='new_contact') { // new contact

    echo "new contact";
    
    $email_to = "contacto@dobleumartinez.com";
    $email_subject = 'Formulario de Pagina Web | DOBLEU MARTINEZ ';

        
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
        !isset($_POST['comentarios']) ||
        !isset($_POST['servicios']))
      {
        die('Lo sentimos pero parece haber un problema con los datos enviados.');
      }

      $nombre = $_POST['nombre']; 
      $email = $_POST['email'];
      $telefono = $_POST['telefono'];
      $comentarios = $_POST['comentarios']; 
      $service       = $_POST['servicios'];
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
            $email_message .= "Servicio: ".clean_string($service)."\n";
            $email_message .= "Comentarios: ".clean_string($comentarios)."\n";
             
            $headers = 'From: '.$email."\r\n".
             
            'Reply-To: '.$email."\r\n" .
             
            'X-Mailer: PHP/' . phpversion();
             
            @mail($email_to, utf8_decode($email_subject), utf8_decode($email_message), $headers);

            echo "<script>window.location.href='./gracias';</script>";
            exit();
  }else{
      if(!isset($_POST['nombre']) ||
          !isset($_POST['email']) ||
          !isset($_POST['telefono']) ||
          !isset($_POST['comentarios']) ||
          !isset($_POST['servicios']))
        {
          die('Lo sentimos pero parece haber un problema con los datos enviados.');
        }

        $nombre = $_POST['nombre']; 
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $comentarios = $_POST['comentarios']; 
        $service       = $_POST['servicios'];
        $message = "Hola, mi nombre es ".$nombre." mi correo es ".$email." y estoy interesado en el servicio de ".$service.". Nota:".$comentarios;

        $mensaje = str_replace(' ', '%20', $message);

        echo "<script>window.location.href='https://api.whatsapp.com/send?phone=+525541422177&text=".$mensaje."';</script>";
        
        echo $mensaje;
        exit();
  }

}else{
  echo "<script>window.location.href='./';</script>";
  exit();
}

?>
