<?php
echo '<!DOCTYPE html><html lang="es">';

  // 
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

        switch ($_GET['seccion']) {

          case 'identidad':
            if (isset($_GET['menu'])) {
              include("resources/identidad/menu.php"); // MENU IDENTIDAD
            }else{
              include("resources/identidad/contenido.php"); // CONTENIDO
            }
            break;

          case 'servicios':
            if (isset($_GET['menu'])) {
              include("resources/servicios/menu.php"); // MENU SERVICIOS
            }else{
              include("resources/servicios/contenido.php"); // CONTENIDO
            }
            break;
          
          default:
            echo "none";
            break;
        }

    }else{
       include("resources/inicio/contenido.php"); // CONTRENEDOR DEL CUERPO DEL INDEX
    }

    include 'resources/inicio/footer.php'; // PIE DE PAGINA

echo '</body></html>';// FIN CUERPO

?>
