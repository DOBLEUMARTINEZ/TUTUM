<?php
echo '<!DOCTYPE html><html lang="es">';

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
    
    // SECCIONES
    if (isset($_GET['seccion'])) {  

        switch ($_GET['seccion']) {
          case 'identidad':
            include("resources/identidad/contenido.php"); // CONTENIDO
            break;

          case 'proyectos':
            include("resources/servicios/proyectos.php"); // CONTENIDO
            break;

          case 'operacion':
            include("resources/servicios/operacion-de-proyectos.php"); // CONTENIDO
            break;

          case 'cau':
            dd($_GET['seccion']);
            include("resources/servicios/cau.php"); // CONTENIDO
            break;
          
          default:
            include("resources/error.php");
            exit();
            break;
        }

    }else{

      // CONTRENEDOR DEL CUERPO DEL INDEX
      include("resources/inicio/contenido.php"); 
    }

  // PIE DE PAGINA
  include 'resources/inicio/footer.php'; 
echo '</body></html>';// FIN CUERPO

?>
