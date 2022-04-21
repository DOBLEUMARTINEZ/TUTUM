<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TUTUM | Acerca de Nosotros">
  <meta name="theme-color" content="#111">

  <title>TUTUM | Acerca de Nosotros </title>

  <link href="images/logo/icon.png" rel="shortcut icon"/>

  <link rel="manifest" href="images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="32x32" href="images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="16x16" href="images/logo/icon.png">


  <link rel="stylesheet" href="css/styles.css"/>
  <link rel="stylesheet" href="css/main.css"/>

  <!-- icons CDN -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!--jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

  <?php

    include("php/second-head.php");// CABECERA

    // CUERPO - FONDO NEGRO - BARRA LATERAL
    echo '
    <div class="body-content">
    <span class="background-section-darkness" >
    </span><span class="lateral-background latera-menu-off">
    </span>
    ';

      if (isset($_GET['seccion'])) { // CONTENIDOS

        include("php/identidad/us.php");

        /*switch ($_GET['seccion']) {
          case 'us':
            include("php/identidad/us.php");
            break;
          case 'vision-mision':
            include("php/identidad/vision-mision.php");
            break;
          case 'experiencia':
            include("php/identidad/experiencia.php");
            break;
          case 'clientes':
            include("php/identidad/clientes.php");
            break;
          case 'socios':
            include("php/identidad/socios.php");
            break;
          default:
            echo "none";
            break;
        }*/

      }else{
        include("php/identidad/menu-identidad.php"); // MENU IDENTIDAD
      }

    echo '</div>';

    include 'php/modal.php';// MODALES
    include 'php/footer.php';// PIE DE PAGINA

  ?>
  
</body>
</html>