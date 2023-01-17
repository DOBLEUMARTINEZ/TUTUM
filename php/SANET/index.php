<?php

echo '<!DOCTYPE html><html lang="es">';

  // URL
    //$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $url = './';

  // VALIDAR SECCION - TITULO DE SECCION
    if (isset($_GET['seccion'])){ 
      $name_seccion = ucfirst(str_replace('-', ' ', $_GET['seccion'])).' | SANET';
      $desc = "Sistema Integral de Información Hospitalaria diseñado para Administrar y Controlar todas las áreas que componen un Hospital o Clínica."; 
      $canonical_name = 'https://sanet.com.mx/'.$_GET['seccion'];
    }else{ 
      $name_seccion = 'Sistema Integral de Información Hospitalaria (SIH) | SANET';
      $desc = "SANET es el Sistema Integral de Información Hospitalaria diseñado para Administrar y Controlar todas las áreas que componen un Hospital o Clínica.";
      $canonical_name = 'https://sanet.com.mx/'; 
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

        case 'terminos-y-condiciones':
          include("resources/terminos-y-condiciones.php"); // TERMINOS Y CONDICIONES
          break;

        case 'aviso-de-privacidad':
          include("resources/aviso-de-privacidad.php"); // AVISO DE PRIVACIDAD
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





  


