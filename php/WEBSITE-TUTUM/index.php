<?php
echo '<!DOCTYPE html><html lang="es">';

  // VALIDAR SECCION
  if (isset($_GET['seccion'])) {
    $name_seccion = $_GET['seccion'];
  }else{
    $name_seccion = 'TUTUM | Consultoría tecnológica y soluciones integrales de TI';
  }

  include("resources/inicio/head.php"); // HEAD

  include('resources/alertas/alertas_01.php'); // ALERTA CONFIRM

echo '<body>'; // INICIO CUERPO

  include("resources/inicio/nav.php"); // BARRRA DE NAVEGACIÓN

    if (isset($_GET['seccion'])) {  // SECCIONES

        if(strpos($_GET['seccion'], 'menu')===false){

          // IDENTIDAD 
          if (strpos($_GET['seccion'], 'identidad')===false){}else{
            include("resources/identidad/contenido.php"); // CONTENIDO
          }

          // SERVICIOS
          if (strpos($_GET['seccion'], 'servicios')===false){}else{
            include("resources/servicios/contenido.php"); // CONTENIDO
          }

          // SERVICIOS
          if (strpos($_GET['seccion'], 'proyectos')===false){}else{
            include("resources/servicios/proyectos.php"); // CONTENIDO
          }


        }else{ // MENU
          $seccion = str_replace('menu-', '', $_GET['seccion']);
          switch ($seccion) {
            case 'identidad':
              include("resources/identidad/menu.php"); // MENU IDENTIDAD
              break;
            case 'servicios':
              include("resources/servicios/menu.php"); // MENU SERVICIOS
              break;
            case 'proyectos':
                include("resources/servicios/proyectos.php"); // MENU SERVICIOS
              break;
            default:
              include("resources/error.php"); // ERROR NOT FOUND
              break;
          }
        }

    }else{
       include("resources/inicio/contenido.php"); // CONTRENEDOR DEL CUERPO DEL INDEX
    }

  include 'resources/inicio/footer.php'; // PIE DE PAGINA

echo '</body></html>';// FIN CUERPO

?>
