<?php

echo '<!DOCTYPE html><html lang="es">';

  // URL
    //$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $url = './';

  // VALIDAR SECCION - TITULO DE SECCION
    if (isset($_GET['seccion'])){ 
      $name_seccion = 'TUTUM | '.$_GET['seccion'];  
    }else{ 
      $name_seccion = 'TUTUM | Consultoría tecnológica y soluciones integrales de TI'; 
    }
  
  // HEAD
    include("resources/inicio/head.php");

<<<<<<< HEAD
  //EMAIL
    include("send.php"); 
=======
  // PHP MAIL
  include("send.php"); 
>>>>>>> e92a485d81a85f8cc376027bca1f71ab0b78203b

echo '<body>'; // INICIO CUERPO

  include("resources/inicio/nav.php"); // BARRRA DE NAVEGACIÓN
    
    if (isset($_GET['seccion'])) { //CONTENIDO DE PAGINA 

      $seccion = $_GET['seccion'];
      $findme   = 'servicios';
      $pos = strpos($seccion, $findme);

      if ($pos !== false) { // SERVICIOS

        //echo "MENU DE SERVICIOS";

        $servicio =  str_replace('servicios-', '', $seccion);

        switch ($servicio) {
          case 'proyectos':
            $service = 'DESARROLLO DE PROYECTOS TI';
            include("resources/servicios/background.php"); // BACKGRAUND 
            include("resources/servicios/menu.php"); // MENU 
            include("resources/servicios/proyectos.php"); // CONTENIDO 
            include("resources/servicios/download-pdf.php"); // PDF
            break;

          case 'operacion':
            $service = 'OPERACIÓN DE PROYECTOS';
            include("resources/servicios/background.php"); // BACKGRAUND 
            include("resources/servicios/menu.php"); // MENU 
            include("resources/servicios/operacion.php"); // CONTENIDO 
            include("resources/servicios/download-pdf.php"); // PDF
            break;

          case 'cau':
            $service = 'CENTRO DE ATENCIÓN A USUARIOS​';
            include("resources/servicios/background.php"); // BACKGRAUND 
            include("resources/servicios/menu.php"); // MENU 
            include("resources/servicios/cau.php");  // CONTENIDO
            include("resources/servicios/download-pdf.php"); // PDF
            break;

          case 'sap':
            $service = 'SAP';
            include("resources/servicios/background.php"); // BACKGRAUND 
            include("resources/servicios/menu.php"); // MENU 
            include("resources/servicios/sap.php"); // CONTENIDO
            include("resources/servicios/download-pdf.php"); // PDF
            break;

          case 'hospitales':
            $service = 'SOLUCIONES HOSPITALARIAS​';
            include("resources/servicios/background.php"); // BACKGRAUND 
            include("resources/servicios/menu.php"); // MENU 
            include("resources/servicios/hospitales.php"); // CONTENIDO
            include("resources/servicios/download-pdf.php"); // PDF
            break;

          case 'ciberseguridad':
            $service = 'CIBERSEGURIDAD';
            include("resources/servicios/background.php"); // BACKGRAUND 
            include("resources/servicios/menu.php"); // MENU 
            include("resources/servicios/ciberseguridad.php");// CONTENIDO
            include("resources/servicios/download-pdf.php"); // PDF
            break;

          case 'fabrica-sw':
            $service = 'FABRICA DE SOFTWARE​';
            include("resources/servicios/background.php"); // BACKGRAUND 
            include("resources/servicios/menu.php"); // MENU 
            include("resources/servicios/fabrica-sw.php");// CONTENIDO
            include("resources/servicios/download-pdf.php"); // PDF
            break;

          
          default:
            $servicio='menu';
            $service='menu';
            include("resources/servicios/background.php"); // BACKGROUND 
            include("resources/servicios/menu.php"); // MENU DE SERVICIOS
            break;
        }

      }else {  // SECIONES

        switch ($_GET['seccion']) {

          case 'identidad':
            include("resources/identidad/contenido.php"); // CONTENIDO
            include("resources/identidad/download-pdf.php"); // PDF
            break;

          case 'prensa':
            include("resources/prensa/contenido.php"); // CONTENIDO
            include("resources/prensa/social-media.php"); 
            break;

          case 'contacto':
            include("resources/contacto/menu.php"); // CONTENIDO 
            break;

          case 'contactar':
            include("resources/contacto/contenido.php"); // CONTENIDO 
            break;

          case 'bolsa-de-trabajo':
            include("resources/contacto/bolsa.php"); // CONTENIDO 
            break;
                
          default:
            include("resources/error.php");
            exit();
            break;
        }
      }
    
    }else{
      include("resources/inicio/contenido.php"); // INDEX
    }

  include 'resources/inicio/footer.php'; // PIE DE PAGINA

?>
</body>

</html>

  


