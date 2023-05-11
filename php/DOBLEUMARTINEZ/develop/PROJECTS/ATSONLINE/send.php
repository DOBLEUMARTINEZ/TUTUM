<?php

if ($_POST['action']=='new_contact') { // new contact
    echo "new contact";
    //exit();
    
    $email_to = "contacto@atsonline.com.mx";
    $email_subject = 'Formulario de Pagina Web | ATSONLINE ';

        
      function died($error) {  
        echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";
        echo "Detalle de los errores.<br /><br />";
        echo $error."<br /><br />";
        echo "Porfavor corrija estos errores e inténtelo de nuevo.<br /><br />";
        die();
      }
      
      if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['msg']) ||
         !isset($_POST['consultor']) ||
        !isset($_POST['service']))
      {
        die('Lo sentimos pero parece haber un problema con los datos enviados.');
      }

      $nombre = $_POST['name']; 
      $email = $_POST['email'];
      $telefono = $_POST['phone'];
      $comentarios = $_POST['msg']; 
      $consultor = $_POST['consultor']; 
      $service       = $_POST['service'];
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
            $email_message .= "Consultor: ".clean_string($colsultor)."\n";
           $email_message .= "Comentarios: ".clean_string($comentarios)."\n";
             
            $headers = 'From: '.$email."\r\n".
             
            'Reply-To: '.$email."\r\n" .
             
            'X-Mailer: PHP/' . phpversion();
             
            @mail($email_to, utf8_decode($email_subject), utf8_decode($email_message), $headers);

            echo "<script>window.location.href='./?id=gracias';</script>";
            exit();
   
    }else{
        
        echo "modal cotizar";
        $email_to = "contacto@atsonline.com.mx";
        $email_subject = 'Formulario de Pagina Web | ATSONLINE ';
    
            
          function died($error) {  
            echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";
            echo "Detalle de los errores.<br /><br />";
            echo $error."<br /><br />";
            echo "Porfavor corrija estos errores e inténtelo de nuevo.<br /><br />";
            die();
          }
          
          if(!isset($_POST['name']) ||
            !isset($_POST['email']) ||
            !isset($_POST['phone']) ||
            !isset($_POST['empresa']) ||
            !isset($_POST['service']))
          {
            die('Lo sentimos pero parece haber un problema con los datos enviados.');
          }
    
          $nombre = $_POST['name']; 
          $email = $_POST['email'];
          $telefono = $_POST['phone'];
          $comentarios = $_POST['empresa'];
          $service       = $_POST['service'];
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
                $email_message .= "Metodo de contacto: ".clean_string($service)."\n";
               $email_message .= "Empresa: ".clean_string($comentarios)."\n";
                 
                $headers = 'From: '.$email."\r\n".
                 
                'Reply-To: '.$email."\r\n" .
                 
                'X-Mailer: PHP/' . phpversion();
                 
                @mail($email_to, utf8_decode($email_subject), utf8_decode($email_message), $headers);
    
                echo "<script>window.location.href='./?id=gracias';</script>";
                
            exit();
  }
  
 ?>