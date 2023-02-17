<?php

echo '<!DOCTYPE html><html lang="es">';

  // URL
    //$url = 'https://kadcreativos.com/';
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
  if ( isset($_GET['seccion']) && !empty($_GET['seccion']) ) {

    switch ($_GET['seccion']) {
      case 'impresion':
        include("resources/sections/otros-servicios/impresion.php");
        break;

      case 'stickers':
        include("resources/sections/otros-servicios/stickers.php");
        break;

      case 'banners':
        include("resources/sections/otros-servicios/banners.php");
        break;

      case 'cuadros':
        include("resources/sections/otros-servicios/cuadros.php");
        break;

      case 'tarjetas':
        include("resources/sections/otros-servicios/tarjetas.php");
        break;

      case 'promocionales':
        include("resources/sections/otros-servicios/promocionales.php");
        break;

      case 'impresion-digital':
        include("resources/sections/servicios/impresion-digital.php");
        break;

      case 'contenido-web':
        include("resources/sections/servicios/contenido-web.php");
        break;

      case 'foto-y-video':
        include("resources/sections/servicios/foto-y-video.php");
        break;

      case 'imagen-corporativa':
        include("resources/sections/servicios/imagen-corporativa.php");
        break;

      case 'redes-sociales':
        include("resources/sections/servicios/redes-sociales.php");
        break;
      
      default:
        include("resources/sections/inicio/not-found.php");
        break;
    }
    
  }else{

    // CONTENIDO
    include("resources/sections/inicio/contenido.php");
  
  }

  // PIE DE PAGINA
  include 'resources/sections/inicio/footer.php'; 

echo "</body></html>";





  


