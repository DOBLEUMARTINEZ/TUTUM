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

  include("resources/sections/inicio/nav.php"); // BARRRA DE NAVEGACIÓN
   
  // CONTENIDO
    if (isset($_GET['seccion'])) {

      switch ($_GET['seccion']) {

        case 'quienes-somos':
            include("resources/secciones/quienes-somos.php"); // QUIENES SOMOS
          break;

        case 'sanet':
            include("resources/secciones/sanet.php"); // SANET
          break;

        case 'nuestra-experiencia':
            include("resources/secciones/nuestra-experiencia.php"); // NUESTRA EXPERIENCIA
          break;  

        case 'modulos-sih':
          include("resources/secciones/modulos-sih.php"); // MODULOS SIH
          break;

        case 'licencias':
          include("resources/secciones/licencias.php"); // LICENCIAS
          break;
   
        case 'contacto':
          include("resources/secciones/contacto.php"); // CONTACTO
          break;

        case 'gracias':
          include("resources/secciones/gracias.php"); // GRACIAS
          break;
        
        default:
          include("resources/secciones/not-found.php"); // ERROR 404
          break;
      }

    }else{
      include("resources/sections/inicio/contenido.php"); // INDEX
    }

  //include 'resources/inicio/footer.php'; // PIE DE PAGINA

echo "</body></html>";





  


