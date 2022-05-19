<?php
echo '<!DOCTYPE html><html lang="es">';

  // URL
    //$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    //$url = '/';
    $url = 'http://localhost/wm_server/php/WEBSITE-TUTUM/';

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

// INICIO CUERPO
echo '<body>';
  
  // BARRRA DE NAVEGACIÓN
  include("resources/inicio/nav.php"); 
    
    // CONTENIDO DE PAGINA
    if (isset($_GET['seccion'])) {  

      $seccion = $_GET['seccion'];
      $findme   = 'servicios';
      $pos = strpos($seccion, $findme);

      if ($pos !== false) { // SERVICIOS

        //echo "MENU DE SERVICIOS";

        $servicio =  str_replace('servicios-', '', $seccion);

        switch ($servicio) {
          case 'proyectos':
            include("resources/servicios/proyectos.php"); 
            break;

          case 'operacion':
            include("resources/servicios/operacion-de-proyectos.php"); 
            break;

          case 'cau':
            include("resources/servicios/cau.php"); 
            break;
          
          default:
            include("resources/servicios/index.php"); // MENU DE SERVICIOS
            break;
        }

      } else {  // SECIONES

        //echo "SECCION NORMAL";

        switch ($_GET['seccion']) {

          case 'identidad':
            include("resources/identidad/contenido.php"); // CONTENIDO
            break;
                
          default:
            include("resources/error.php");
            exit();
            break;
        }
      }
    
    }else{

      // INDEX
      include("resources/inicio/contenido.php"); 
    }

  // PIE DE PAGINA
  include 'resources/inicio/footer.php'; 
echo '</body></html>';// FIN CUERPO

?>
