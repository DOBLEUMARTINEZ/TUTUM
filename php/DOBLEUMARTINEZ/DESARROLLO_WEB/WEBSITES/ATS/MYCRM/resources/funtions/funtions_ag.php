<?php

function tool_bar_ag(){
	//echo "toolbar";
	include('RESOURCES_AG/tool_bar/toolbar_v1.php');
}

function title_page(){
	//echo "title_page";
	include('RESOURCES_AG/title_bar/title_bar.php');
}

function dashboard($origin=false){

	//CONEXION DB
	include('./resources/conexion.php');

	if (!empty($origin)) {

		if(isset($_GET['origin'])){ 

			echo '<div class="lead-content">';

			switch ($origin) {

				case 'blog':
				    $sql = "SELECT * FROM blog";
					$result= $con->query($sql);

					$all_leads 		= $result->num_rows;
				    $id_dropdown 	= 1;
				    $div_color 		= '#00000';

		
						if ($result->num_rows > 0) {

							while($row = $result->fetch_array()) {

								// BAGRAUND COLOR DE FILAS 
					            if ($div_color=='#4ca1ed4d') {
					                $div_color = '#0000';
					           	}else{
					                $div_color = '#4ca1ed4d';
					            }

								include('view_lead/blog.php'); // VACIO DE REGISTROS PRINCIPAL

								$id_dropdown++;

							}
						}

					break;


				case 'clientes':
				    $sql = "SELECT * FROM cliente";
					$result= $con->query($sql);

					$all_leads 		= $result->num_rows;
				    $id_dropdown 	= 1;
				    $div_color 		= '#00000';

		
						if ($result->num_rows > 0) {

							while($row = $result->fetch_array()) {

								// BAGRAUND COLOR DE FILAS 
					            if ($div_color=='#4ca1ed4d') {
					                $div_color = '#0000';
					           	}else{
					                $div_color = '#4ca1ed4d';
					            }

								include('view_lead/cliente.php'); // VACIO DE REGISTROS PRINCIPAL

								$id_dropdown++;

							}
						}

					break;

				case 'usuarios':
					$category = $_GET['category'];
				    $sql = "SELECT * FROM user";
					$result= $con->query($sql);

					$all_leads 		= $result->num_rows;
				    $id_dropdown 	= 1;
				    $div_color 		= '#00000';

						if ($result->num_rows > 0) {

							while($row = $result->fetch_array()) {

								// BAGRAUND COLOR DE FILAS 
					            if ($div_color=='#4ca1ed4d') {
					                $div_color = '#0000';
					           	}else{
					                $div_color = '#4ca1ed4d';
					            }

								include('view_lead/ag_user.php'); // VACIO DE REGISTROS PRINCIPAL

							}
						}
					break;
				
				default:
					# code...
					break;
			}

			echo '</div>';	

		}else{ // DASHBOARD PRINCIPAL TABLES

			echo '<ul class="dashboard-blocks">'; // 

				$sql = "SELECT * FROM category WHERE ref = '$origin' ";
				$result= $con->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_array()) {
						include('dashboard_area/bloque_category.php'); // BLOQUE CATEGORIA
					}
				}

			echo '</ul>';

		}

	}else{
		// DASHBOARD PRINCIPAL 
		echo '<ul class="dashboard-blocks">'; // 

			//include('dashboard_area/bloque_product.php');// BLOQUE PRODUCTOS

			//include('dashboard_area/bloque_lead.php');// BLOQUE LEADS

			include('dashboard_area/bloque_cliente.php');// BLOQUE CLIENTES

			include('dashboard_area/bloque_users.php');// BLOQUE USUARIOS

			//include('dashboard_area/view_dashboard.php');// BLOQUE ORDENES

		echo '</ul>'; 
	}

}

// img perfil
function img_user($a){

	//CONEXION DB
	include('./resources/conexion.php');

	$sql = "SELECT * FROM user WHERE email = '$a'; ";
	$result= $con->query($sql);



	if ($result->num_rows > 0) {

		while($row = $result->fetch_array()) {
			$a = $row['picture'];
		}

	}else{

		$a ='images/user/user.png';
	}

	return $a;

	/*

	return $pick;*/
}

// consultas

function product_category($category,$id=false){

	//CONEXION DB
	include('./resources/conexion.php');

	$n_prod = 0;

	$sql = "SELECT * FROM lead_ats ";
	$result= $con->query($sql);

	if ($result->num_rows > 0) {

		while($row = $result->fetch_array()) {
			$n_prod+=1;
		}
	}

	return $n_prod;
}

function gallery_product(){

	include('view_gallery/view_gallery_new.php');

}

function gallery_place($origin,$opc=false){

	//echo "string";

	if (!empty($opc)) {

		switch ($opc) {
			case 'view':
				include('view_gallery/view_gallery.php');
				break;
			
			default:
				include('view_gallery/view_gallery_new.php');
				break;
		}	
	
	}else{

		echo'update gallery place';

		switch ($origin) {

			case 'limpieza':
				echo "gallery_update_limpieza";
				//include('view_gallery/view_gallery_limpieza.php');
				break;
			
			default:
				# code...
				break;
		}

	}
	
}

// VIEWS MODALS

function modal_new_lead($origin=false){

	if(!empty($origin)){

		switch ($origin) {
			case 'leads':
				include('view_modal/new_lead.php'); // MODAL NEW LEAD
				break;

			case 'clientes':
				include('view_modal/new_cliente.php'); // MODAL NEW CLIENTE
				break;

			case 'usuarios':
				include('view_modal/new_user.php'); // MODAL NEW USUARIOS
				break;

			case 'blog':
				include('view_modal/new_blog.php'); // MODAL NEW BLOG
				break;
			
			default:
				# code...
				break;
		}

	}else{
		//include('view_modal/new_product.php'); // MODAL NEW PRODUCT
		include('view_modal/new_lead.php'); // MODAL NEW LEAD
		include('view_modal/new_cliente.php'); // MODAL NEW CLIENTE
		include('view_modal/new_user.php'); // MODAL NEW USUARIOS
		include('view_modal/new_blog.php'); // MODAL NEW BLOG
	}

}

?>
