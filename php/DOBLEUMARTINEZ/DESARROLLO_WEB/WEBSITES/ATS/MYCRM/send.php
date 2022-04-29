<?php
//echo "new_lead_externo</br>";

if(isset($_GET['btn_sesypro'])){

        $name     = 'joe_doe';
        $from_l   = 'Whatsapp';
        $type     = 'Google Ads';
        $origin   = 'sesypro.com.mx';
        $phone    = '';
        $email    = '';
        $address  = '';
        $area     = 'sesypro';
        $msg      = 'servicio general';
        $puesto   = '';
        $empresa  = '';

        date_default_timezone_set('America/Mexico_City');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $date_l=strftime("%Y-%m-%d");
        $time_l=strftime("%H:%M:%S");

        include('./resources/conexion.php');
        $sql = "INSERT INTO lead (from_l, type, origin, name, phone, email, address, area, msg, empresa, puesto, date_l, time_l, status) VALUES ('$from_l', '$type', '$origin', '$name', '$phone', '$email', '$address', '$area', '$msg', '$empresa', '$puesto', '$date_l', '$time_l'
          ,'Por contactar');";

        $result = $con->query($sql);

        exit();
        echo "<script>window.location.href=''https://api.whatsapp.com/send?phone=525548772293&text=Hola%2C%20quiero%20m%C3%A1s%20informaci%C3%B3n.%20';</script>";

}elseif(isset($_GET['btn_new_lead_externo'])) {

  if ($_GET['btn_new_lead_externo']=='form') {
        
        $name     = $_GET['name'];
        $from_l   = $_GET['from_l'];
        $type     = $_GET['type'];
        $origin   = $_GET['origin'];
        $phone    = $_GET['phone'];
        $email    = $_GET['email'];
        $address  = $_GET['address'];
        $area     = $_GET['area'];
        $msg      = $_GET['msg'];
        $puesto   = $_GET['puesto'];
        $empresa  = $_GET['empresa'];


        date_default_timezone_set('America/Mexico_City');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $date_l=strftime("%Y-%m-%d");
        $time_l=strftime("%H:%M:%S");

        // VALIDAR_LEAD & INSTER_DATA_BASE
        //include('./resources/funtions/f_leads.php');
        //new_lead($name,$from_l,$type,$origin,$phone,$email,$address,$area,$msg,$puesto,$empresa); 


        include('./resources/conexion.php');
        $sql = "INSERT INTO lead (from_l, type, origin, name, phone, email, address, area, msg, empresa, puesto, date_l, time_l, status) VALUES ('$from_l', '$type', '$origin', '$name', '$phone', '$email', '$address', '$area', '$msg', '$empresa', '$puesto', '$date_l', '$time_l'
          ,'Por contactar');";

        $result = $con->query($sql);

        // send mail
        if ($area == 'limpieza') {

            $email_to  = "ventas@maredima.com.mx".",";
            $email_to .= "christian.olvera@maredima.com.mx".",";
            $email_to .= "mvictoria@maredima.com.mx".",";
            $email_to .= "lrazo@maredima.com.mx";

            $email_subject = "DIMA | Landing Limpieza";

            function died($error) {
         
                echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";
                echo "Detalle de los errores.<br /><br />";
                echo $error."<br /><br />";
                echo "Porfavor corrija estos errores e inténtelo de nuevo.<br /><br />";
                die();
            }
         
            if(!isset($_GET['name']) ||
              !isset($_GET['email']) ||
              !isset($_GET['phone']) ||
              !isset($_GET['origin']) ||
              !isset($_GET['address']) ||
              !isset($_GET['msg'])) {
         
              die('Lo sentimos pero parece haber un problema con los datos enviados.');
              }
         
              $first_name   = $_GET['name']; 
              $email_from   = $_GET['email']; 
              $phone        = $_GET['phone']; 
              $address      = $_GET['address']; 
              $origin       = $_GET['origin'];
              $msg          = $_GET['msg']; 
              $error_message = "";

            /*
              $string_exp = "/^[A-Za-z .'-_]+$/";
            if(!preg_match($string_exp,$first_name)) {

              $error_message .= 'El formato del nombre no es válido<br />';
           
              }
            */
         
            if(strlen($error_message) > 0) {
              die($error_message);
           
            }

         
            $email_message = "Contenido del Mensaje.\n\n";
         

            function clean_string($string) {
              $bad = array("content-type","bcc:","to:","cc:","href");
              return str_replace($bad,"",$string);
            }
         
         
            $email_message .= "Nombre: ".clean_string($first_name)."\n";
            $email_message .= "Email: ".clean_string($email_from)."\n";
            $email_message .= "Teléfono: ".clean_string($phone)."\n";
            $email_message .= "Dirección: ".clean_string($address)."\n";
            $email_message .= "Mensaje: ".clean_string($msg)."\n";
            $email_message .= "Página Web: ".clean_string($origin)."\n";
         
         
             
            $headers = 'From: '.$email_from."\r\n".
             
            'Reply-To: '.$email_from."\r\n" .
             
            'X-Mailer: PHP/' . phpversion();
             
            @mail($email_to, $email_subject, utf8_decode($email_message), $headers);

            echo "<script>window.location.href='http://".$origin."?id=open#contacto';</script>";
            exit();
        }

        if ($area == 'dimarketing') {

            $email_to = "contacto@dimarketing.com.mx".",";
            $email_to .= "rmendoza@maredima.com.mx";

            $email_subject = "Dimarketing | Landing Page";

            function died($error) {
         
                echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";
                echo "Detalle de los errores.<br /><br />";
                echo $error."<br /><br />";
                echo "Porfavor corrija estos errores e inténtelo de nuevo.<br /><br />";
                die();
            }
         
            if(!isset($_GET['name']) ||
              !isset($_GET['email']) ||
              !isset($_GET['phone']) ||
              !isset($_GET['origin']) ||
              !isset($_GET['address']) ||
              !isset($_GET['msg'])) {
         
              die('Lo sentimos pero parece haber un problema con los datos enviados.');
              }
         
              $first_name   = $_GET['name']; 
              $email_from   = $_GET['email']; 
              $phone        = $_GET['phone']; 
              $address      = $_GET['address']; 
              $origin       = $_GET['origin'];
              $msg          = $_GET['msg']; 
              $error_message = "";

            /*
              $string_exp = "/^[A-Za-z .'-_]+$/";
            if(!preg_match($string_exp,$first_name)) {

              $error_message .= 'El formato del nombre no es válido<br />';
           
              }
            */
         
            if(strlen($error_message) > 0) {
              die($error_message);
           
            }

         
            $email_message = "Contenido del Mensaje.\n\n";
         

            function clean_string($string) {
              $bad = array("content-type","bcc:","to:","cc:","href");
              return str_replace($bad,"",$string);
            }
         
         
            $email_message .= "Nombre: ".clean_string($first_name)."\n";
            $email_message .= "Email: ".clean_string($email_from)."\n";
            $email_message .= "Teléfono: ".clean_string($phone)."\n";
            $email_message .= "Dirección: ".clean_string($address)."\n";
            $email_message .= "Mensaje: ".clean_string($msg)."\n";
            $email_message .= "Página Web: ".clean_string($origin)."\n";
         
         
             
            $headers = 'From: '.$email_from."\r\n".
             
            'Reply-To: '.$email_from."\r\n" .
             
            'X-Mailer: PHP/' . phpversion();
             
            @mail($email_to, $email_subject, utf8_decode($email_message), $headers);


            echo "<script>window.location.href='http://".$origin."?id=open#contacto';</script>";
            exit();
        }

        if ($area == 'rysese') {

            $email_to  = "christian.olvera@maredima.com.mx".",";
            $email_to .= "lrazo@maredima.com.mx".",";
            $email_to .= "reclutamiento@maredima.com.mx";

            $email_subject = "DIMA | Landing Estudios Socioeconómicos";

            function died($error) {
         
                echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";
                echo "Detalle de los errores.<br /><br />";
                echo $error."<br /><br />";
                echo "Porfavor corrija estos errores e inténtelo de nuevo.<br /><br />";
                die();
            }
         
            if(!isset($_GET['name']) ||
              !isset($_GET['email']) ||
              !isset($_GET['phone']) ||
              !isset($_GET['origin']) ||
              !isset($_GET['empresa']) ||
              !isset($_GET['puesto'])) {
         
              die('Lo sentimos pero parece haber un problema con los datos enviados.');
              }
         
              $first_name   = $_GET['name']; 
              $email_from   = $_GET['email']; 
              $phone        = $_GET['phone']; 
              $empresa      = $_GET['empresa']; 
              $origin       = $_GET['origin'];
              $puesto          = $_GET['puesto']; 
              $error_message = "";

            /*
              $string_exp = "/^[A-Za-z .'-_]+$/";
            if(!preg_match($string_exp,$first_name)) {

              $error_message .= 'El formato del nombre no es válido<br />';
           
              }
            */
         
            if(strlen($error_message) > 0) {
              die($error_message);
           
            }

         
            $email_message = "Contenido del Mensaje.\n\n";
         

            function clean_string($string) {
              $bad = array("content-type","bcc:","to:","cc:","href");
              return str_replace($bad,"",$string);
            }
         
         
            $email_message .= "Nombre: ".clean_string($first_name)."\n";
            $email_message .= "Email: ".clean_string($email_from)."\n";
            $email_message .= "Teléfono: ".clean_string($phone)."\n";
            $email_message .= "Empresa: ".clean_string($empresa)."\n";
            $email_message .= "Puesto: ".clean_string($puesto)."\n";
            $email_message .= "Página Web: ".clean_string($origin)."\n";
         
         
             
            $headers = 'From: '.$email_from."\r\n".
             
            'Reply-To: '.$email_from."\r\n" .
             
            'X-Mailer: PHP/' . phpversion();
             
            @mail($email_to, $email_subject, utf8_decode($email_message), $headers);

            echo "<script>window.location.href='http://".$origin."?id=open#contacto';</script>";
            exit();
        }

  }else{

        $from_l   = 'whatsapp';

        $type     = $_GET['type'];
        $origin   = $_GET['origin'];
        $area     = $_GET['area'];
        $modo     = $_GET['modo'];
        $service  = $_GET['service'];

        date_default_timezone_set('America/Mexico_City');
        setlocale(LC_TIME, 'es_MX.UTF-8');
        $date_l=strftime("%Y-%m-%d");
        $time_l=strftime("%H:%M:%S");

        include('./resources/conexion.php');

        //$sql = "INSERT INTO lead (from_l, type, origin, area, date_l, time_l) VALUES ('$from_l', '$type', '$origin', '$area', '$date_l', '$time_l');";
        //$result = $con->query($sql);

        //send whatsapp
        if ($area == 'limpieza') {
        
          switch ($modo) {
            case 'desktop':
              /*echo "<script>window.location.href='https://web.whatsapp.com/send?phone=525540430749&text=','_blank';</script>";*/
              $service = str_replace('_', ' ', $service);
              $message = str_replace(' ', '%20', 'Me interesa cotizar: '.$service);
              echo "<script>window.location.href='https://web.whatsapp.com/send?phone=525540430749&text=".$message."','_blank';</script>";

              exit();
              break;

            case 'mobil':
              $service = str_replace('_', ' ', $service);
              $message = str_replace(' ', '%20', 'Me interesa cotizar: '.$service);
              echo "<script>window.location.href='https://wa.me/525540430749?&text=".$message."','_blank';</script>";
              exit();
              break;

            default:
              # code...
              break;
          }


          /*
          echo "<script>window.location.href='https://wa.me/525540430749?&text=','_blank';</script>";
          exit();
          */
        }

        if ($area == 'dimarketing') {

          switch ($modo) {
            case 'desktop':
              /*echo "<script>window.location.href='https://web.whatsapp.com/send?phone=525540430749&text=','_blank';</script>";*/
              $service = str_replace('_', ' ', $service);
              $message = str_replace(' ', '%20', 'Me interesa cotizar: '.$service);
              echo "<script>window.location.href='https://web.whatsapp.com/send?phone=525548704644&text=".$message."','_blank';</script>";

              exit();
              break;

            case 'mobil':
              $service = str_replace('_', ' ', $service);
              $message = str_replace(' ', '%20', 'Me interesa cotizar: '.$service);
              echo "<script>window.location.href='https://wa.me/525548704644?&text=".$message."','_blank';</script>";
              exit();
              break;

            default:
              # code...
              break;
            //echo "<script>window.location.href='https://wa.me/525548704644?&text=','_blank';</script>";
            //exit();
          }
        }

        if ($area == 'rysese') {
            echo "<script>window.location.href='https://wa.me/525526998373?&text=','_blank';</script>";
            exit();
        }

  }

}else{

  echo "<script>window.location.href='https://maredima.com.mx/';</script>";
  exit(); 
}

?>