<?php

echo '<!DOCTYPE html><html lang="es">';

  // URL
    //$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $url = './';

  // VALIDAR SECCION - TITULO DE SECCION 
    $title_tag = 'Dolorfin especialista Quiropráctico, Fisioterapeuta y Masajista';
    $description_tag = "Dolor Fin especialista quiropráctico, fisioterapeuta, masajista en tratamientos y rehabilitación 100% personalizados, eliminamos el dolor de tu vida.";
    $canonical_tag = $url; 
  
  // HEAD
    include("resources/sections/inicio/head.php");

  // EMAIL
    include("send.php");

echo '<body>'; // INICIO CUERPO
  
  // BARRRA DE NAVEGACIÓN
  include("resources/sections/inicio/nav.php");

  // CONTENIDO
  if (isset($_GET['seccion'])) {
    // GRACIAS
    include("resources/sections/inicio/gracias.php");
  }else{
    // CONTENIDO
    include("resources/sections/inicio/contenido.php");
  }

  // PIE DE PAGINA
  include 'resources/sections/inicio/footer.php'; 

echo "</body></html>";





  


