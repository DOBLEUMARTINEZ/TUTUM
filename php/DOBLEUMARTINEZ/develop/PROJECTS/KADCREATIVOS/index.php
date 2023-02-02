<?php

echo '<!DOCTYPE html><html lang="es">';

  // URL
    //$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $url = './';

  // VALIDAR SECCION - TITULO DE SECCION 
    $title_tag = 'Agencia especialista en la fusión de estrategia y diseño digital para tu marca | @kadcreativos';
    $description_tag = "Agencia especialista en la fusión de estrategia y diseño digital para tu marca";
    $canonical_tag = $url; 
  
  // HEAD
    include("resources/sections/inicio/head.php");

echo '<body>'; // INICIO CUERPO
  
  // BARRRA DE NAVEGACIÓN
  include("resources/sections/inicio/nav.php");

  // CONTENIDO
  if ( isset($_GET['seccion']) && !empty($_GET['seccion'])) {

    switch ($_GET['seccion']){

      case 'impresion':
        include("resources/sections/inicio/impresion.php");
        break;

      default:
        // CONTENIDO
        include("resources/sections/inicio/contenido.php");
        break;
    }

  }else{

    // CONTENIDO
    include("resources/sections/inicio/contenido.php");
  
  }

  // PIE DE PAGINA
  include 'resources/sections/inicio/footer.php'; 

echo "</body></html>";





  


