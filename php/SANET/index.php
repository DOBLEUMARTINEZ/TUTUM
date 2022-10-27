<?php

echo '<!DOCTYPE html><html lang="es">';

  // URL
    //$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $url = './';

  // VALIDAR SECCION - TITULO DE SECCION
    if (isset($_GET['seccion'])){ 
      $name_seccion = $_GET['seccion'].' | SANET';
      $desc="Sistema de Información Hospitalaria SANET diseñado para administrar y controlar todas las áreas que componen un hospital o clínica desde un solo lugar.";
      $canonical_name = $url.$_GET['seccion'];
    }else{ 
      $name_seccion = 'Sistema de Información Hospitalaria | SANET ';
      $desc="Sistema de Información Hospitalaria SANET diseñado para administrar y controlar todas las áreas que componen un hospital o clínica desde un solo lugar.";
      $canonical_name = $url; 
    }
  
  // HEAD
    include("resources/inicio/head.php");

  // EMAIL
    include("send.php");   

echo '<body>'; // INICIO CUERPO

  include("resources/inicio/nav.php"); // BARRRA DE NAVEGACIÓN

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

        case 'modulos-his':
          include("resources/secciones/modulos-sih.php"); // MODULOS SIH
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
      include("resources/inicio/contenido.php"); // INDEX
    }

  include 'resources/inicio/footer.php'; // PIE DE PAGINA

echo "</body></html>";





  


