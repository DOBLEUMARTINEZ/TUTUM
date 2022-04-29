<!-- lead info -->
<div class="lead-content">
	
	<?php

    date_default_timezone_set('America/Mexico_City');
    setlocale(LC_TIME, 'es_MX.UTF-8');

    $crm_date_start = '2020-01-01';
    $date_actual = strftime("%Y-%m-%d");

    $area = $_GET['area']; 

    // TOOL BAR
      if (isset($_GET['type'])) {
        tool_bar($_GET['area'],$_GET['type']);    
      }else{
        tool_bar($_GET['area']);
      }

    // VARIABLES DE LIMITES DE PAGINATION
      $page_end=10;

      if (isset($_GET['num_page'])) {
        
        if ($_GET['num_page']<=1) {
          $page_start=0;
        }else{

          $sql = "SELECT * FROM lead WHERE area='$area' AND date_l BETWEEN '$fecha_mes_1' AND '$fecha_mes_2' ";
          $result = $con->query($sql);
          $num_leads = $result->num_rows;
    
          if ($result->num_rows > 0) {
            $num = $result->num_rows;
            $pages = ceil($num/10);
          }

          $page_start=($_GET['num_page']*10)-10;

        }

      }else{
        
        $page_start=0;
      }

    // MENU SECTIONS
      if (isset($_GET['area'])||isset($_GET['type'])) {

        if (empty($_GET['type'])) { // LEAD SECTION

          if(isset($_GET['plaza'])){ // LEAD PRESTAMO

            //echo "LEAD_PRESTAMOS<br>";
            lead_prestamo($_GET['area'],$_GET['plaza'],$page_start);

          }else{ // LEADS AREAS

            if ($_GET['area']=='limpieza') {

              //echo "LEAD<br>";
              lead($_GET['area'],$page_start,$_GET['month']);

            }else{

              if (isset($_GET['lead_id'])) {

                lead($_GET['area'],$page_start,$_GET['month'],$_GET['lead_id']);

              }else{

                //echo "LEAD<br>";
                lead($_GET['area'],$page_start,$_GET['month']);

              }

            }

          }

        }else{ // OTRAS SECCIONES

          $area = $_GET['area'];

          switch ($_GET['type']) {

            case 'cliente frecuente':
              //echo "CLIENTE FRECUENTE<br>";
              lead_wallet($_GET['area'],$page_start);
              break;

            default:
             //echo "DEFAULT</br>";
              // TIPO DE SECCION
                if (isset($_GET['type'])&&!empty($_GET['type'])) {

                  //echo "<br>";
                  modulos($_GET['area'],$_GET['type']);

                }else{

                  echo "<h5 class='error-message'; >UPS !!.... Intenta buscar nuevamente. </h5>";

                }
                break;

          }

        }
         
      } 

	?>

</div>