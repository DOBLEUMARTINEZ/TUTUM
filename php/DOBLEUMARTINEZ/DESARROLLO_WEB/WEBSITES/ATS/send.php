<?php

session_start();

if (isset($_POST['action'])||isset($_GET['action'])) {

  if ($_POST['action']=='new_contact') { // new contact

    //echo "new contact";
    
    $email_to = "contacto@atsonline.com.mx";
        
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
        !isset($_POST['service']))
      {
        die('Lo sentimos pero parece haber un problema con los datos enviados.');
      }
         
      $first_name   = $_POST['name']; 
      $email_from   = $_POST['email']; 
      $phone        = $_POST['phone'];
      $service      = $_POST['service']; 
      $error_message = "";

      //

        include('conexion.php');   

        $nombre = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $service = $_POST['service'];

        // fecha y hora
          date_default_timezone_set('America/Mexico_City');
          setlocale(LC_TIME, 'es_MX.UTF-8');
          $date = date("Y-m-d H:i:s"); 
          $time = date("Y-m-d H:i:s"); 

        // variables lead 
            $from_l   = 'atsonline';
            $name     = $_POST['name'];
            $type_l   = 'organico';
            $phone    = $_POST['phone'];
            $email    = $_POST['email'];
            $plaza    = 'CDMX';
            $address  = 'ADDRESS';
            $origin   = 'atsonline.com.mx';
            $date_l   = $date;
            $time_l   = $time;
            $pharner  = 'JOE DOE';
            $status   = 'nuevo';
            $quote    = 0;
            $fac_no   = 'NONE';
            $pay      = 0;
            $empresa  = 'NONE';
            $puesto   = 'NONE';
            $gallery  = 'NONE';
            $msg      = $_POST['service'];
            $desc_serv = $_POST['service'];
            $comments = $_POST['service'];

            // ULTIMA ACTUALIZCION
              $last_update = date("Y-m-d H:i:s"); 

            // DOCUMENTACION
              $quote_pdf  = 'NONE';
              $fac_pre    = 'NONE';
              $fac_end    = 'NONE';
              $pay_pdf    = 'NONE';
              $gallery    = 'NONE';

          // query inserción d un neuvo lead
            $sql = "INSERT INTO lead_ats (from_l,type, origin, name, phone, email, plaza, address, area, msg, date_l, time_l, pharner, status, quote, quote_pdf, fac_no, fac_pre, fac_end, pay, pay_pdf, last_update, comments, empresa, puesto, gallery) VALUES ('$from_l','$type_l', '$origin', '$name', '$phone', '$email', '$plaza', '$address', '$origin', '$msg', '$date_l', '$time_l', '$pharner', '$status', '$quote', '$quote_pdf', '$fac_no', '$fac_pre', '$fac_end', '$pay', '$pay_pdf', '$last_update','$desc_serv', '$empresa', '$puesto','$gallery');";

            $result = $con->query($sql);
        
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

          // envio de email 
            $email_message = "Contenido del Mensaje.\n\n";
      
            function clean_string($string) {
              $bad = array("content-type","bcc:","to:","cc:","href");
              return str_replace($bad,"",$string);
            }

            $email_message .= "Nombre: ".clean_string($first_name)."\n";
            $email_message .= "Email: ".clean_string($email_from)."\n";
            $email_message .= "Teléfono: ".clean_string($phone)."\n";
            $email_message .= "Servicio: ".clean_string($service)."\n";
         
             
            $headers = 'From: '.$email_from."\r\n".
             
            'Reply-To: '.$email_from."\r\n" .
             
            'X-Mailer: PHP/' . phpversion();
             
            @mail($email_to, $email_subject, utf8_decode($email_message), $headers);

            //header('./?id=true');
            
            //exit();

            echo "<script>window.location.href='./?id=true';</script>";

  }else{ // login y registro
    //echo 'login y resgistro';
    if ($_POST['action']=='login') {
        
        //echo 'login';
        include('conexion.php'); 
        
        $email = $_POST['email'];
        $password  = $_POST['password'];

        $sql = "SELECT * FROM user WHERE email ='$email' and password ='$password'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {

          while($row = $result->fetch_array()) {
            $user     = $row['email'];
            $privilege  = $row['type_user'];
            $business   = 'ATS';
          }

          $_SESSION["user"]     = $user;
          $_SESSION["privilege"]  = $privilege;
          $_SESSION["business"]   = $business;

          if ($_SESSION["privilege"]=='master'|| $_SESSION["privilege"]=='admin' ) {
            echo "<script>window.location.href='http://crm.atsonline.com.mx/';</script>";
          }else{
            echo "<script>window.location.href='./';</script>";
          }  

        }else{
          echo "<script>window.location.href='./';</script>";
          //header("location: http://www.crm.atsonline.com.mx/");
        }
      
    }else{ 
        
      //echo 'register';
      include('conexion.php');   

      $name = $_POST['nombre'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "INSERT INTO user ( `name`, `phone`, `email`, `address`, `password`, `type_user`, `empresa`, `picture`) VALUES ( '$name', '$phone', '$email', 'none', '$password','user', 'ATS', 'images/user.png');";

      //print_r($sql);
      
      $result = $con->query($sql);
      $_SESSION["user"] = $email;
      $_SESSION["privilege"]  = 'user';
      $_SESSION["business"]   = 'ATS';

      //header('./?id=success ');
      echo "<script>window.location.href='./?id=success';</script>";

      exit();

    }
    
  }

}else{
  session_destroy();
  echo "<script>window.location.href='./';</script>";
  exit();
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Contacto</title>
</head>
<body>

</body>
</html>