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

  // ALERTAS DE CONFIRMACIÓN
  //include('resources/alertas/alertas_01.php'); 

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
            include("resources/servicios/background.php"); // BACKGRAUND 
            include("resources/servicios/menu.php"); // MENU 
            include("resources/servicios/proyectos.php"); // CONTENIDO 
            include("resources/servicios/download-pdf.php"); // PDF
            break;

          case 'operacion':
            include("resources/servicios/background.php"); // BACKGRAUND 
            include("resources/servicios/menu.php"); // MENU 
            include("resources/servicios/operacion.php"); // CONTENIDO 
            include("resources/servicios/download-pdf.php"); // PDF
            break;

          case 'cau':
            include("resources/servicios/background.php"); // BACKGRAUND 
            include("resources/servicios/menu.php"); // MENU 
            include("resources/servicios/cau.php");  // CONTENIDO
            include("resources/servicios/download-pdf.php"); // PDF
            break;

          case 'sap':
            include("resources/servicios/background.php"); // BACKGRAUND 
            include("resources/servicios/menu.php"); // MENU 
            include("resources/servicios/sap.php"); // CONTENIDO
            include("resources/servicios/download-pdf.php"); // PDF
            break;

          case 'hospitales':
            include("resources/servicios/background.php"); // BACKGRAUND 
            include("resources/servicios/menu.php"); // MENU 
            include("resources/servicios/hospitales.php"); // CONTENIDO
            include("resources/servicios/download-pdf.php"); // PDF
            break;

          case 'ciberseguridad':
            include("resources/servicios/background.php"); // BACKGRAUND 
            include("resources/servicios/menu.php"); // MENU 
            include("resources/servicios/ciberseguridad.php");// CONTENIDO
            include("resources/servicios/download-pdf.php"); // PDF
            break;

          case 'fabrica-sw':
            include("resources/servicios/background.php"); // BACKGRAUND 
            include("resources/servicios/menu.php"); // MENU 
            include("resources/servicios/fabrica-sw.php");// CONTENIDO
            include("resources/servicios/download-pdf.php"); // PDF
            break;


          
          default:
            $servicio='menu';
            include("resources/servicios/background.php"); // BACKGROUND 
            include("resources/servicios/menu.php"); // MENU DE SERVICIOS
            break;
        }

      }else {  // SECIONES

        switch ($_GET['seccion']) {

          case 'identidad':
            include("resources/identidad/contenido.php"); // CONTENIDO
            include("resources/servicios/download-pdf.php"); // PDF
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

echo '</body></html>';// FIN CUERPO

?>
