<?php

// FIN Borrar en caso de no ser requerido
include "csrf.php"; 
  if ($_SESSION["autorizado"] != 1)
  {
    header('Location: hablemos.html');
  }

  if (isset($_GET['email'], $_GET['token']) && csrf::checkTokenCSRF($_GET['token']))
  {
    
  }
// FIN Borrar en caso de no ser requerido




define("RECAPTCHA_V3_SECRET_KEY", '6LdS4ekcAAAAAPthvDEE24uapvamn9JlKtpkH1pH');
 
if (isset($_POST['email']) && $_POST['email'] && $_POST['nombre'] && $_POST['apellido'] && $_POST['telefono'] && $_POST['empresa'] && $_POST['puesto'] && $_POST['lugar'] && $_POST['asunto'] && $_POST['mensaje']) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
} else {
    // set error message and redirect back to form...
    header('location: hablemos.html');
    exit;
}
 
$token = $_POST['token'];
$action = $_POST['action'];
 
// call curl to POST request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);
 
// verify the response
if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
    // valid submission
    // go ahead and do necessary stuff
    echo 'Correcto';
} else {
    // spam submission
    // show error message
}

         $nombre = $_POST['nombre'];
         $apellido = $_POST['apellido'];
         $email  = $_POST['email'];
         $telefono  = $_POST['telefono'];
         $empresa  = $_POST['empresa'];
         $puesto  = $_POST['puesto'];
         $lugar  = $_POST['lugar'];
         $asunto  = $_POST['asunto'];
       $mensaje  = $_POST['mensaje'];

 $body = "Nombre:" . $nombre . "<br> Apellido: ". $apellido . "<br>Correo: ". $email . "<br>Teléfono: ". $telefono  
. "<br>Empresa: ". $empresa . "<br>Puesto: ". $puesto . "<br>País o Ciudad: ". $lugar . "<br>Asunto: ". $asunto . "<br>Mensaje: ". $mensaje ;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

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
    $mail->setFrom('no-reply@tutum.com.mx', $asunto);
    $mail->addAddress('comercial@tutum.com.mx', $nombre);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Formulario de Página Web | TUTUM ';
    //$subject = "=?UTF-8?B?".base64_decode($subject)."=?=";
    //$body = "=?UTF-8?B?".base64_decode($body)."=?=";
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script> alert ("Correo enviado correctamente") </script>';
} catch (Exception $e) {
    echo '<script> alert ("Lo sentimos, algo ocurrio") </script>';
}
header ("Location:hablemos.html");
?>
