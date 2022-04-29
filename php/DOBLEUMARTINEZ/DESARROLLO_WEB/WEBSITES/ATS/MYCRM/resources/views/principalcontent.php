<div class="principal-content">
<?php 

	tool_bar_ag();
	title_page();

	include('./resources/views/principal_content/dashboard.php');


	//title page 
	//include('./resources/views/principal_content/title_page.php');
	
	/*if (isset($_GET['area'])&&!empty($_GET['area'])) { // DASHBOARD AREA

		switch ($_GET['area']) {

			case 'prestamos':

				if (isset($_GET['plaza'])) {
					include('./resources/views/principal_content/area.php');
				}else{
					goto dashboard_principal;
				}

				break;
				
			default:

				if (isset($_GET['month'])) {

					include('./resources/views/principal_content/area.php');

				}elseif(isset($_GET['type'])) { // AREA LEADS CONTENT

					include('./resources/views/principal_content/area.php');

				}else{ // DASHBOARD AREA MONTH
					dashboard_area($_GET['area']);
				}
				
				break;
		}

	}else{ // PRINCIPAL DASHBOARD

		dashboard_principal:
		include('./resources/views/principal_content/dashboard.php');

	}*/
 
	?>

</div>