<?php

/* DATES */

	// SACAR DATO DE FECHA ESPESIFICO
	function date_to_string($date){
		$fechaComoEntero = strtotime($row['date_l']);
				$mes = date("m", $fechaComoEntero);
				switch ($mes) {
					case '01':
						$mes='Enero';
						break;

					case '02':
						$mes='Febrero';
						break;

					case '03':
						$mes='Marzo';
						break;

					case '04':
						$mes='Abril';
						break;

					case '05':
						$mes='Mayo';
						break;

					case '06':
						$mes='Junio';
						break;

					case '07':
						$mes='Julio';
						break;

					case '08':
						$mes='Agosto';
						break;

					case '09':
						$mes='Septiembre';
						break;

					case '10':
						$mes='Octubre';
						break;

					case '11':
						$mes='Noviembre';
						break;

					case '12':
						$mes='Diciembre';
						break;

					
					default:
						# code...
						break;
				}	
	}

	function date_to_num($month){

		$mont = '00';

		switch ($month) {

			case 'Enero':
				$mont = '01';
				break;

			case 'Febrero':
				$mont= '02';
				break;

			case 'Marzo':
				$mont= '03';
				break;

			case 'Abril':
				$mont= '04';
				break;

			case 'Mayo':
				$mont= '05';
				break;

			case 'Junio':
				$mont='06';
				break;

			case 'Julio':
				$mont='07';
				break;

			case 'Agosto':
				$mont='08';
				break;

			case 'Septiembre':
				$mont='09';
				break;

			case 'Octubre':
				$mont='10';
				break;

			case 'Noviembre':
				$mont='11';
				break;

			case 'Diciembre':
				$mont='12';
				break;
			
			default:
				# code...
				break;
		}

		return $mont;
	}

// AREA DASHBOARD

function dashboard_area($area){

	//CONEXION DB
	include('./resources/conexion.php');

	// DASHBOARD PRINCIPAL CONTENT
	include('dashboard_area/view_dashboard.php'); 

}

function lead_month($month,$area){
	//CONEXION DB
	include('./resources/conexion.php');
	$fecha_mes_1 = '2021-01-01';
	$fecha_mes_2 = '2021-12-31';

	$tot_lead = 0;

	$sql = "SELECT * FROM lead WHERE (date_l BETWEEN '$fecha_mes_1' AND '$fecha_mes_2') AND area = '$area' ";
	$result= $con->query($sql);

	if ($result->num_rows > 0) {

		while($row = $result->fetch_array()) {

			// STRING MONTH LEAD
			$fechaComoEntero = strtotime($row['date_l']);
			$mes = date("m", $fechaComoEntero);
			switch ($mes) {
				case '01':
					$mes='Enero';
					break;

				case '02':
					$mes='Febrero';
					break;

				case '03':
					$mes='Marzo';
					break;

				case '04':
					$mes='Abril';
					break;

				case '05':
					$mes='Mayo';
					break;

				case '06':
					$mes='Junio';
					break;

				case '07':
					$mes='Julio';
					break;

				case '08':
					$mes='Agosto';
					break;

				case '09':
					$mes='Septiembre';
					break;

				case '10':
					$mes='Octubre';
					break;

				case '11':
					$mes='Noviembre';
					break;

				case '12':
					$mes='Diciembre';
					break;

				
				default:
					# code...
					break;
			}

			// TOTAL DE LEADS MONTH
			if($month==$mes){
				$tot_lead += 1;
			}else{
				$tot_lead += 0;
			}

		}

	}

	return $tot_lead;
}

// DATA BOX DASHBOARD
function data_area_maredima($area,$goal,$ads){

	//CONEXION DB
	include('./resources/conexion.php');

	//echo 'function_data_area'.$area;

	$fecha_mes_1 = fecha_mes_1;
	$fecha_mes_2 = fecha_mes_2;
	$month = month;

	$data_area_sql = "SELECT * FROM lead WHERE date_l BETWEEN '$fecha_mes_1' AND '$fecha_mes_2' ";

	//print_r($data_area_sql);

	$result_data_area = $con->query($data_area_sql);
	if ($result_data_area->num_rows > 0) {

		// DATA AREA

			// DATA LEADS
				$tot_lead 	= 0;
				$quote 		= 0;
				$billing    = 0;
				$quote_google_ads = 0;
				$google_ads = 0;

				while($row = $result_data_area->fetch_array()) {

					// CONTADOR LEADS
					if (!empty($row['email'])||!empty($row['phone'])) {
						$tot_lead++;
					}
						
					// CONTADOR COTIZACION
					if (!empty($row['email'])||!empty($row['phone'])) {
						$quote+=$row['quote'];
					}

					// CONTADOR FACTURADO
					if ((!empty($row['email'])||!empty($row['phone']))&&$row['status']=='finalizado') {
						$billing+=$row['pay'];
					}

					// CONTADOR COTIZACION GOOGLE ADS
					if ((!empty($row['email'])||!empty($row['phone']))&&$row['type']=='google ads') {
						$quote_google_ads+=$row['quote'];
					}

					// CONTADOR FACTURADO
					if ((!empty($row['email'])||!empty($row['phone']))&&$row['status']=='finalizado'&&$row['type']=='google ads') {
						$google_ads+=$row['pay'];
					}
				}

			// DATA LEADS_WALLET
				$lead_wallet = 0;
				$data_lead_wallet = "SELECT * FROM lead_wallet";
				$result_lead_wallet = $con->query($data_lead_wallet);
				if ($result_lead_wallet->num_rows > 0) {
					while($row = $result_lead_wallet->fetch_array()) {
						if ((!empty($row['email'])||!empty($row['phone']))&&$row['status']=='activo') {
							$lead_wallet += $row['pay'];
						}
					}
				}

			$billing += $lead_wallet;

			//UPDATE DATA BASE TABLE AREA
				$update_table_area = "UPDATE area SET leads = $tot_lead, sell = $quote, billing = $billing WHERE area = '$area' ";
				$result_update_table_area = $con->query($update_table_area);

			//UPDATE DATA BASE TABLE COLOCATION 
				$sql_colocacion = "SELECT * FROM colocacion WHERE (fecha_inicio = '$fecha_mes_1' AND fecha_termino='$fecha_mes_2') AND area = '$area' ";

				$result_colocacion = $con->query($sql_colocacion);

				if ($result_colocacion->num_rows > 0) {
					// update registro colocacion
					$sql = "UPDATE colocacion SET leads = $tot_lead, facturado = $billing  WHERE (fecha_inicio='$fecha_mes_1' AND fecha_termino='$fecha_mes_2') AND area = '$area' ";
					$result = $con->query($sql);

				}else{
					// insert regsiter
					$sql = "INSERT INTO colocacion (area, goal, inversion, leads, facturado, month, fecha_inicio, fecha_termino) VALUES ('$area', '$goal', '$ads', '$tot_lead', '$billing', '$month', '$fecha_mes_1', '$fecha_mes_2');";
						$result = $con->query($sql);
				}

		// DATA BOX MAREDIMA
		include('dashboard_data_box/data_box_maredima.php'); 
		
	}else{
		
	}
	
}

function data_area($area,$goal,$ads){

	//CONEXION DB
	include('./resources/conexion.php');

	//echo 'function_data_area'.$area;

	$fecha_mes_1 = fecha_mes_1;
	$fecha_mes_2 = fecha_mes_2;
	$month = month;

	$data_area_sql = "SELECT * FROM lead WHERE (area = '$area' AND date_l BETWEEN  '$fecha_mes_1' AND '$fecha_mes_2' ) ";

	//print_r($data_area_sql);

	$result_data_area = $con->query($data_area_sql);
	if ($result_data_area->num_rows > 0) {

		// DATA AREA

			// VARIABLES
			$lead_new	= 0;
			$lead_pen	= 0;
			$lead_neg	= 0;
			$tot_lead 	= 0;
			$quote 		= 0;
			$billing    = 0;
 
			while($row = $result_data_area->fetch_array()) {

				// CONTADOR LEADS
				if (!empty($row['email'])||!empty($row['phone'])) {

					$tot_lead++;

					// CONTADOR LEADS NUEVOS
					if ($row['status']=='nuevo') {
						$lead_new++;
					}

					// CONTADOR LEADS PENDIENTE
					if ($row['status']=='pendiente') {
						$lead_pen++;
					}

					// CONTADOR LEADS NEGICIACION
					if ($row['status']=='negociacion') {
						$lead_neg++;
					}

				}
					
				// CONTADOR COTIZACION
				if (!empty($row['email'])||!empty($row['phone'])) {
					$quote+=$row['quote'];
				}

				// CONTADOR FACTURADO
				if ((!empty($row['email'])||!empty($row['phone']))&&$row['status']=='finalizado') {
					$billing+=$row['pay'];
				}

			}

			// DATA LEADS_WALLET
				$lead_wallet = 0;
				$data_lead_wallet = "SELECT * FROM lead_wallet WHERE area = '$area' ";
				$result_lead_wallet = $con->query($data_lead_wallet);
				if ($result_lead_wallet->num_rows > 0) {
					while($row = $result_lead_wallet->fetch_array()) {
						if ((!empty($row['email'])||!empty($row['phone']))&&$row['status']=='activo') {
							$lead_wallet += $row['pay'];
						}
					}
				}

			$billing += $lead_wallet;

			//UPDATE DATA BASE TABLE AREA
			$update_table_area = "UPDATE area SET leads = $tot_lead, sell = $quote, billing = $billing WHERE name = '$area' ";

			$result_update_table_area = $con->query($update_table_area);

			//UPDATE DATA BASE TABLE COLOCATION 
			$sql_colocacion = "SELECT * FROM colocacion WHERE (fecha_inicio = '$fecha_mes_1' AND fecha_termino='$fecha_mes_2') AND area = '$area' ";

			$result_colocacion = $con->query($sql_colocacion);

			if ($result_colocacion->num_rows > 0) {
				// update registro colocacion
				$sql = "UPDATE colocacion SET leads = $tot_lead, facturado = $billing  WHERE (fecha_inicio='$fecha_mes_1' AND fecha_termino='$fecha_mes_2') AND area = '$area' ";
				$result = $con->query($sql);

			}else{
				// insert regsiter
				$sql = "INSERT INTO colocacion (area, goal, inversion, leads, facturado, month, fecha_inicio, fecha_termino) VALUES ('$area', '$goal', '$ads', '$tot_lead', '$billing', '$month', '$fecha_mes_1', '$fecha_mes_2');";
					$result = $con->query($sql);
			}

			if ($area!='banorte') {
				
				include('dashboard_data_box/data_box.php'); // DATA BOX 

				if (area_now!='maredima') {
					include('dashboard_data_box/data_box_notice.php'); // DATA BOX NOTICE
				}

			}else{

			}

			

	}else{

		
	}
	
}

function data_area_prestamos($area,$goal,$ads){

	//CONEXION DB
	include('./resources/conexion.php');

	//echo 'function_data_area_'.$area;
	$fecha_mes_1 = fecha_mes_1;
	$fecha_mes_2 = fecha_mes_2;
	$month = month;

	$data_area_sql = "SELECT * FROM lead_prestamo WHERE (fecha BETWEEN '$fecha_mes_1' AND '$fecha_mes_2') ";

	//print_r($data_area_sql);

	$result_data_area = $con->query($data_area_sql);
	if ($result_data_area->num_rows > 0) {

		// DATA AREA

			// VARIABLES
			$tot_lead = 0;
			$quote = 0;
			$billing = 0;

			while($row = $result_data_area->fetch_array()) {

				$tot_lead+= 1;

				if ($row['status']=='Activo') {
					$quote+=1;
						
				}elseif ($row['status']=='Inactivo') {
					$billing+=1;
				}

			}


			//UPDATE DATA BASE TABLE AREA
			$update_table_area = "UPDATE area SET leads = $tot_lead, sell = $quote, billing = $billing WHERE name = '$area' ";
			$result_update_table_area = $con->query($update_table_area);

			//UPDATE DATA BASE TABLE COLOCATION 
			$sql_colocacion = "SELECT * FROM colocacion WHERE (fecha_inicio = '$fecha_mes_1' AND fecha_termino='$fecha_mes_2') AND area = '$area' ";

			$result_colocacion = $con->query($sql_colocacion);

			if ($result_colocacion->num_rows > 0) {
				// update registro colocacion
				$sql = "UPDATE colocacion SET leads = $tot_lead, facturado = $billing  WHERE (fecha_inicio='$fecha_mes_1' AND fecha_termino='$fecha_mes_2') AND area = '$area' ";
				$result = $con->query($sql);

			}else{
				// insert regsiter
				$sql = "INSERT INTO colocacion (area, goal, inversion, leads, facturado, month, fecha_inicio, fecha_termino) VALUES ('$area', '$goal', '$ads', '$tot_lead', '$billing', '$month', '$fecha_mes_1', '$fecha_mes_2');";
					$result = $con->query($sql);
			}

			include('dashboard_data_box/data_box_prestamo.php'); // DATA BOX PRESTAMO

			if (area_now!='maredima') {
				//include('dashboard_data_box/data_box_notice.php'); // DATA BOX NOTICE
			}
		
	}else{

		
	}
	
}

function dashboard_plaza($plaza,$area){

	//CONEXION DB
	include('./resources/conexion.php');
	$fecha_mes_1 = fecha_mes_1;
	$fecha_mes_2 = fecha_mes_2;
	$month = month;

	// VARIABLES 
		$tot_lead=0;
		$active=0;
		$inactive=0;

	$sql = "SELECT * FROM lead_prestamo WHERE ( fecha BETWEEN '$fecha_mes_1' AND '$fecha_mes_2' ) AND plaza = '$plaza' ";

	$result = $con->query($sql);
	if ($result->num_rows > 0) {

		while($row = $result->fetch_array()) {
			$tot_lead++;

			if($row['status']=='Activo'){
				$active+=1;
			}else{
				$inactive+=1;
			}

		}

		include('dashboard_data_box/data_box_plaza.php'); // DATA BOX PLAZA

	}else{

		include('dashboard_data_box/data_box_plaza.php'); // DATA BOX PLAZA EMPTY

	}

}


function documentation_lead($id,$area){

	//echo "funtion_modal_document_".$id;
	//CONEXION DB
	include('./resources/conexion.php');

	$sql = "SELECT * FROM lead WHERE area='$area' AND id = '$id'";

	$result = $con->query($sql);

	if ($result->num_rows > 0) {

		while($row = $result->fetch_array()) {

			include('view_modal/documentation.php'); // MODAL DOCUMENTS
			include('view_modal/quote_pdf.php'); // MODAL COTIZACION
			include('view_modal/record.php'); // MODAL COTIZACION
		}
	}

}

function modal_pdf($area,$type,$type_area=false){

	// CONEXION
	include('./resources/conexion.php');

	include('view_modal/new_datasheet.php'); // VIEW NEW DATASHEET MODAL

	if (!empty($type_area)) {
		$sql = "SELECT * FROM $type WHERE area = '$type_area' ";
	}else{
		$sql = "SELECT * FROM $type WHERE area = '$area' ";
	}

	$result = $con->query($sql);
	$all_leads = $result->num_rows;

	if ($result->num_rows > 0) {
		while($row = $result->fetch_array()) {
			include('view_modal/modules_pdf.php'); // VIEWS PDF 
		}
	}

}



// EXCEL 

function donwload_xlsx($area,$lead=false){

	if (!empty($lead)) {

		if ( $lead == 'cliente frecuente' ) { // LEAD WALLET

			$sql = './resources/action.php?btn_action=export_xlsx&area='.$area.'&lead_wallet=true';

		}else{ // LEAD PRESTAMO

			$sql = './resources/action.php?btn_action=export_xlsx&area='.$area.'&plaza='.$lead;

		}
		
	}else{
		$sql = './resources/action.php?btn_action=export_xlsx&area='.$area;
	}
	
	return $sql;

}


// LEADS 

function search_lead($area,$word,$plaza,$lead_id=false){

	// CONEXION
	include('./resources/conexion.php');
	$fecha_mes_1 = fecha_mes_1;
	$fecha_mes_2 = fecha_mes_2;
	$month = month;

	//echo "--BARRA DE BUSQUEDA--";

	switch ($area) {

		case 'prestamos':

			if (!empty($lead_id)) {

				$sql = "SELECT * FROM lead_prestamo WHERE ((name LIKE '%$word%' OR nutra LIKE '%$word%' OR phone LIKE '%$word%' OR corto LIKE '%$word%' OR job LIKE '%$word%' OR proyect LIKE '%$word%' OR origen LIKE '%$word%' OR status LIKE '%$word%' OR ejecutivo LIKE '%$word%') AND plaza = '$plaza' AND fecha BETWEEN '$fecha_mes_1' AND '$fecha_mes_2')";

    		$result = $con->query($sql);

    		if ($result->num_rows > 0) {

    			$cont=0;
    			$cont_2=0;
    			$total_leads=$result->num_rows;

    			while($row = $result->fetch_array()) {

    				if ($row['id']==$lead_id) {
    					$cont_2 = $cont++;
    				}else{
    					$cont++;
    				}

    			}

    		}

				$sql = "SELECT * FROM lead_prestamo WHERE ((name LIKE '%$word%' OR nutra LIKE '%$word%' OR phone LIKE '%$word%' OR corto LIKE '%$word%' OR job LIKE '%$word%' OR proyect LIKE '%$word%' OR origen LIKE '%$word%' OR status LIKE '%$word%' OR ejecutivo LIKE '%$word%') AND plaza = '$plaza' AND fecha BETWEEN '$fecha_mes_1' AND '$fecha_mes_2') LIMIT $cont_2, $total_leads";

			}else{

				$sql = "SELECT * FROM lead_prestamo WHERE ((name LIKE '%$word%' OR nutra LIKE '%$word%' OR phone LIKE '%$word%' OR corto LIKE '%$word%' OR job LIKE '%$word%' OR proyect LIKE '%$word%' OR origen LIKE '%$word%' OR status LIKE '%$word%' OR ejecutivo LIKE '%$word%') AND plaza = '$plaza' AND fecha BETWEEN '$fecha_mes_1' AND '$fecha_mes_2')";

			}
			break;

		case 'cliente frecuente':

			if (!empty($lead_id)) {

				$sql = "SELECT * FROM lead_wallet WHERE ( ( id LIKE '%$word%' OR type LIKE '%$word%' OR from_l LIKE '%$word%' OR name LIKE '%$word%' OR phone LIKE '%$word%' OR email LIKE '%$word%' OR pharner LIKE '%$word%' OR status LIKE '%$word%' OR empresa LIKE '%$word%' ) AND area = '$area' AND date_l BETWEEN '$fecha_mes_1' AND '$fecha_mes_2')";

    		$result = $con->query($sql);

    		if ($result->num_rows > 0) {

    			$cont=0;
    			$cont_2=0;
    			$total_leads=$result->num_rows;

    			while($row = $result->fetch_array()) {

    				if ($row['id']==$lead_id) {
    					$cont_2 = $cont++;
    				}else{
    					$cont++;
    				}

    			}

    		}

				$sql = "SELECT * FROM lead_wallet WHERE ( ( id LIKE '%$word%' OR type LIKE '%$word%' OR from_l LIKE '%$word%' OR name LIKE '%$word%' OR phone LIKE '%$word%' OR email LIKE '%$word%' OR pharner LIKE '%$word%' OR status LIKE '%$word%' OR empresa LIKE '%$word%' ) AND area = '$area' AND date_l BETWEEN '$fecha_mes_1' AND '$fecha_mes_2') LIMIT $cont_2, $total_leads";

			}else{

				$sql = "SELECT * FROM lead_wallet WHERE ( ( id LIKE '%$word%' OR type LIKE '%$word%' OR from_l LIKE '%$word%' OR name LIKE '%$word%' OR phone LIKE '%$word%' OR email LIKE '%$word%' OR pharner LIKE '%$word%' OR status LIKE '%$word%' OR empresa LIKE '%$word%' ) AND area = '$area' AND date_l BETWEEN '$fecha_mes_1' AND '$fecha_mes_2')";

			}

			break;
		
		default:

			if (!empty($lead_id)) {

				$sql = "SELECT * FROM lead WHERE ( ( id LIKE '%$word%' OR type LIKE '%$word%' OR from_l LIKE '%$word%' OR name LIKE '%$word%' OR phone LIKE '%$word%' OR email LIKE '%$word%' OR pharner LIKE '%$word%' OR status LIKE '%$word%' OR empresa LIKE '%$word%' ) AND area = '$area' AND date_l BETWEEN '$fecha_mes_1' AND '$fecha_mes_2')";

	    		$result = $con->query($sql);

	    		if ($result->num_rows > 0) {

	    			$cont=0;
	    			$cont_2=0;
	    			$total_leads=$result->num_rows;

	    			while($row = $result->fetch_array()) {

	    				if ($row['id']==$lead_id) {
	    					$cont_2 = $cont++;
	    				}else{
	    					$cont++;
	    				}

	    			}

	    		}

				$sql = "SELECT * FROM lead WHERE ( ( id LIKE '%$word%' OR type LIKE '%$word%' OR from_l LIKE '%$word%' OR name LIKE '%$word%' OR phone LIKE '%$word%' OR email LIKE '%$word%' OR pharner LIKE '%$word%' OR status LIKE '%$word%' OR empresa LIKE '%$word%' ) AND area = '$area' AND date_l BETWEEN '$fecha_mes_1' AND '$fecha_mes_2') LIMIT $cont_2, $total_leads";

			}else{

				if ($area=='limpieza') {

					$sql = "SELECT * FROM lead WHERE ( ( id LIKE '%$word%' OR type LIKE '%$word%' OR from_l LIKE '%$word%' OR name LIKE '%$word%' OR phone LIKE '%$word%' OR email LIKE '%$word%' OR pharner LIKE '%$word%' OR status LIKE '%$word%' OR empresa LIKE '%$word%' OR msg LIKE '%$word%') AND area = '$area' AND date_l BETWEEN '$fecha_mes_1' AND '$fecha_mes_2')";

				}else{
					$sql = "SELECT * FROM lead WHERE ( ( id LIKE '%$word%' OR type LIKE '%$word%' OR from_l LIKE '%$word%' OR name LIKE '%$word%' OR phone LIKE '%$word%' OR email LIKE '%$word%' OR pharner LIKE '%$word%' OR status LIKE '%$word%' OR empresa LIKE '%$word%' ) AND area = '$area' AND date_l BETWEEN '$fecha_mes_1' AND '$fecha_mes_2')";
				}

			}

			break;
	}

	return $sql;

}

function filter_lead($area,$pharner,$status,$type_lead,$date_1,$date_2,$plaza=false,$lead_id=false,$type_serv=false){
	// CONEXION
	include('./resources/conexion.php');
	//$fecha_mes_1 = fecha_mes_1;
	//$fecha_mes_2 = fecha_mes_2;
	//$month = month;

	//echo "-- FILTRO DE BUSQUEDA --<br>";


	if (isset($_GET['lead_id'])) {
		$lead_id = $_GET['lead_id'];
	}

	switch ($area) {

		case 'prestamos':

			if ($pharner=='false'||$status=='false'||empty($date_1)||empty($date_2)) {

				if (!empty($date_1)&&!empty($date_2)) {
					
					if ($pharner!='false'&&$status!='false') {

						$sql = "SELECT * FROM lead_prestamo WHERE ( (ejecutivo = '$pharner' AND status = '$status' ) AND plaza = '$plaza') AND fecha BETWEEN '$date_1' AND '$date_2' ";

					}elseif ($pharner!='false') {

						$sql = "SELECT * FROM lead_prestamo WHERE ( ( ejecutivo = '$pharner' ) AND plaza = '$plaza' ) AND fecha BETWEEN '$date_1' AND '$date_2' ";

					}elseif ($status!='false') {

						$sql = "SELECT * FROM lead_prestamo WHERE ( ( status = '$status' ) AND plaza = '$plaza' ) AND fecha BETWEEN '$date_1' AND '$date_2' ";

					}else{

						$sql = "SELECT * FROM lead_prestamo WHERE plaza = '$plaza' AND fecha BETWEEN '$date_1' AND '$date_2' ";

					}

				}elseif (!empty($date_1)) {

					$date_2 = fecha_mes_2;
					
					if ($pharner!='false'&&$status!='false') {

						$sql = "SELECT * FROM lead_prestamo WHERE ( (ejecutivo = '$pharner' AND status = '$status' ) AND plaza = '$plaza') AND fecha BETWEEN '$date_1' AND '$date_2' ";

					}elseif ($pharner!='false') {

						$sql = "SELECT * FROM lead_prestamo WHERE ( ( ejecutivo = '$pharner' ) AND plaza = '$plaza' ) AND fecha BETWEEN '$date_1' AND '$date_2' ";

					}elseif ($status!='false') {

						$sql = "SELECT * FROM lead_prestamo WHERE ( ( status = '$status' ) AND plaza = '$plaza' ) AND fecha BETWEEN '$date_1' AND '$date_2' ";

					}else{

						$sql = "SELECT * FROM lead_prestamo WHERE plaza = '$plaza' AND fecha BETWEEN '$date_1' AND '$date_2' ";

					}

				}elseif (!empty($date_2)) {
					
					$date_1 = fecha_mes_1;
					
					if ($pharner!='false'&&$status!='false') {

						$sql = "SELECT * FROM lead_prestamo WHERE ( (ejecutivo = '$pharner' AND status = '$status' ) AND plaza = '$plaza') AND fecha BETWEEN '$date_1' AND '$date_2' ";

					}elseif ($pharner!='false') {

						$sql = "SELECT * FROM lead_prestamo WHERE ( ( ejecutivo = '$pharner' ) AND plaza = '$plaza' ) AND fecha BETWEEN '$date_1' AND '$date_2' ";

					}elseif ($status!='false') {

						$sql = "SELECT * FROM lead_prestamo WHERE ( ( status = '$status' ) AND plaza = '$plaza' ) AND fecha BETWEEN '$date_1' AND '$date_2' ";

					}else{

						$sql = "SELECT * FROM lead_prestamo WHERE plaza = '$plaza' AND fecha BETWEEN '$date_1' AND '$date_2' ";

					}

				}else{ // SIN FECHAS

					if ($pharner!='false'&&$status!='false') {

						$sql = "SELECT * FROM lead_prestamo WHERE ( ejecutivo = '$pharner' AND status = '$status' ) AND plaza = '$plaza'";

					}elseif ($pharner!='false') {

						$sql = "SELECT * FROM lead_prestamo WHERE ( ejecutivo = '$pharner' ) AND plaza = '$plaza'";

					}elseif ($status!='false') {

						$sql = "SELECT * FROM lead_prestamo WHERE ( status = '$status' ) AND plaza = '$plaza'";

					}else{

						$sql = "SELECT * FROM lead_prestamo WHERE plaza = '$plaza'";

					}

				}

			}else{

				$sql = "SELECT * FROM lead_prestamo WHERE ( ( ejecutivo = '$pharner' AND status = '$status' ) AND plaza = '$plaza') AND fecha BETWEEN '$date_1' AND '$date_2' ";

			}

			break;

		case 'cliente frecuente':

			$sql = "SELECT * FROM lead_wallet WHERE ( ( id LIKE '%$word%' OR type LIKE '%$word%' OR from_l LIKE '%$word%' OR name LIKE '%$word%' OR phone LIKE '%$word%' OR email LIKE '%$word%' OR pharner LIKE '%$word%' OR status LIKE '%$word%' OR empresa LIKE '%$word%' ) AND area = '$area' AND date_l BETWEEN '$fecha_mes_1' AND '$fecha_mes_2')";

			break;
		
		default:

			// FITRO CON VARIABLES VACIAS
			if ($pharner=='false'||$status=='false'||$type_lead=='false'||empty($date_1)||empty($date_2)) { 

				if (!empty($date_1)&&!empty($date_2)) {  // 2 DATES
					//echo "2 dates";

					if ($pharner!='false') { // PHARNER

						if ($status!='false'&&$type_lead!='false') { 

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($status!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($type_lead!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( (pharner = '$pharner') AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( (pharner = '$pharner') AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( (pharner = '$pharner') AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}
							
					}elseif($status!='false'){ //  STATUS

						if ($pharner!='false'&&$type_lead!='false') { 

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($pharner!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($type_lead!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}
							
						}

					}elseif($type_lead!='false'){ // TYPE LEAD

						if ($pharner!='false'&&$status!='false') { 

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($pharner!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($status!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}
							
						}
						
					}elseif($type_serv!='false'){ // TYPE SERV

						if ($pharner!='false'&&$status!='false') { 

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND msg = '$type_serv' ) AND area = '$area' ";

								$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

				    			$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND msg = '$type_serv' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND msg = '$type_serv' AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' ";

							}

						}elseif($pharner!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND msg = '$type_serv' ) AND area = '$area' ";

								$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

					    		$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND msg = '$type_serv' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND msg = '$type_serv' AND area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2' ";

							}

						}elseif($status!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( status = '$status' AND msg = '$type_serv' ) AND area = '$area' ";

								$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

					    		$sql = "SELECT * FROM lead WHERE ( status = '$status' AND msg = '$type_serv' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( status = '$status' AND  msg = '$type_serv' AND area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE msg = '$type_serv' AND area = '$area' ";

								$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

					    		$sql = "SELECT * FROM lead WHERE msg = '$type_serv' AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( msg = '$type_serv' AND area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2' ";

							}
							
						}
						
					}else{ // GENERAL

						if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE (area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE (area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE (area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

					}

				}elseif (!empty($date_1)) { // DATE 1
					//echo "date 1";

					$date_2 = fecha_mes_2;

					if ($pharner!='false') { // PHARNER

						if ($status!='false'&&$type_lead!='false') { 

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($status!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($type_lead!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( (pharner = '$pharner') AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( (pharner = '$pharner') AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( (pharner = '$pharner') AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}
							
					}elseif($status!='false'){ //  STATUS

						if ($pharner!='false'&&$type_lead!='false') { 

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($pharner!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($type_lead!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}
							
						}

					}elseif($type_lead!='false'){ // TYPE LEAD

						if ($pharner!='false'&&$status!='false') { 

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($pharner!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

							$sql = " ";

						}elseif($status!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE (area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE (area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE (area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2'";

							}
							
						}
						
					}elseif($type_serv!='false'){ // TYPE SERV

						if ($pharner!='false'&&$status!='false') { 

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND msg = '$type_serv' ) AND area = '$area' ";

								$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

				    			$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND msg = '$type_serv' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND msg = '$type_serv' AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' ";

							}

						}elseif($pharner!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND msg = '$type_serv' ) AND area = '$area' ";

								$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

					    		$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND msg = '$type_serv' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND msg = '$type_serv' AND area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2' ";

							}

						}elseif($status!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( status = '$status' AND msg = '$type_serv' ) AND area = '$area' ";

								$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

					    		$sql = "SELECT * FROM lead WHERE ( status = '$status' AND msg = '$type_serv' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( status = '$status' AND  msg = '$type_serv' AND area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE msg = '$type_serv' AND area = '$area' ";

								$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

					    		$sql = "SELECT * FROM lead WHERE msg = '$type_serv' AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( msg = '$type_serv' AND area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2' ";

							}
							
						}
						
					}else{ // GENERAL

						if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE (area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE (area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

						}else{

								$sql = "SELECT * FROM lead WHERE (area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2'";

						}

					}

				}elseif (!empty($date_2)) { // DATE 2
					//echo "date 2";

					$date_1 = fecha_mes_1;

					if ($pharner!='false') { // PHARNER

						if ($status!='false'&&$type_lead!='false') { 

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($status!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($type_lead!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( (pharner = '$pharner') AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( (pharner = '$pharner') AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( (pharner = '$pharner') AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}
							
					}elseif($status!='false'){ //  STATUS

						if ($pharner!='false'&&$type_lead!='false') { 

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($pharner!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($type_lead!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}
							
						}

					}elseif($type_lead!='false'){ // TYPE LEAD

						if ($pharner!='false'&&$status!='false') { 

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' ";

							}

						}elseif($pharner!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}elseif($status!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( ( type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( ( type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( ( type = '$type_lead' ) AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2'";

							}
							
						}
						
					}elseif($type_serv!='false'){ // TYPE SERV

						if ($pharner!='false'&&$status!='false') { 

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND msg = '$type_serv' ) AND area = '$area' ";

								$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

				    			$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND msg = '$type_serv' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND msg = '$type_serv' AND area = '$area' ) AND date_l BETWEEN '$date_1' AND '$date_2' ";

							}

						}elseif($pharner!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND msg = '$type_serv' ) AND area = '$area' ";

								$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

					    		$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND msg = '$type_serv' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND msg = '$type_serv' AND area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2' ";

							}

						}elseif($status!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( status = '$status' AND msg = '$type_serv' ) AND area = '$area' ";

								$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

					    		$sql = "SELECT * FROM lead WHERE ( status = '$status' AND msg = '$type_serv' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( status = '$status' AND  msg = '$type_serv' AND area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2'";

							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE msg = '$type_serv' AND area = '$area' ";

								$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

					    		$sql = "SELECT * FROM lead WHERE msg = '$type_serv' AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( msg = '$type_serv' AND area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2' ";

							}
							
						}
						
					}else{ // GENERAL

						if (!empty($lead_id)) {

							$sql = "SELECT * FROM lead WHERE (area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2'";

							$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE (area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2' LIMIT $cont_2, $total_leads ";

						}else{

							$sql = "SELECT * FROM lead WHERE (area = '$area') AND date_l BETWEEN '$date_1' AND '$date_2'";

						}

					}

				}else{ // SIN FECHAS
					//echo "none dates";

					if ($pharner!='false') { // PHARNER

						if ($status!='false'&&$type_lead!='false') { 

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ";

								$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

					    		$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{
								
								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ";

							}

						}elseif($status!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ";

							}

						}elseif($type_lead!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ";

							}

						}elseif($type_serv!='false'){

							if (!empty($lead_id)) {

									$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ";

									$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

					    		$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND msg = '$type_serv' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND msg = '$type_serv' ) AND area = '$area' ";
							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE pharner = '$pharner' AND area = '$area' ";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE pharner = '$pharner' AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE pharner = '$pharner' AND area = '$area' ";

							}

						}
							
					}elseif($status!='false'){ //  STATUS

						if ($pharner!='false'&&$type_lead!='false') {

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ";

							}

						}elseif($pharner!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' ) AND area = '$area' ";

							}

						}elseif($type_lead!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( status = '$status' AND type = '$type_lead' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ";

							}

						}elseif($type_serv!='false'){

							if (!empty($lead_id)) {

									$sql = "SELECT * FROM lead WHERE ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ";

									$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

					    		$sql = "SELECT * FROM lead WHERE ( status = '$status' AND msg = '$type_serv' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( status = '$status' AND msg = '$type_serv' ) AND area = '$area' ";

							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE status = '$status' AND area = '$area' ";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE status = '$status' AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE status = '$status' AND area = '$area' ";

							}
							
						}

					}elseif($type_lead!='false'){ // TYPE LEAD

						if ($pharner!='false'&&$status!='false') { 

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' ";

							}

						}elseif($pharner!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' ";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND type = '$type_lead' ) AND area = '$area'";

							}

						}elseif($status!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( status = '$status' AND type = '$type_lead' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( status = '$status' AND type = '$type_lead' ) AND area = '$area'";

							}

						}elseif($type_serv!='false'){

							if (!empty($lead_id)) {

									$sql = "SELECT * FROM lead WHERE ( status = '$status' AND type = '$type_lead' ) AND area = '$area' ";

									$result = $con->query($sql);

					    		if ($result->num_rows > 0) {

					    			$cont=0;
					    			$cont_2=0;
					    			$total_leads=$result->num_rows;

					    			while($row = $result->fetch_array()) {

					    				if ($row['id']==$lead_id) {
					    					$cont_2 = $cont++;
					    				}else{
					    					$cont++;
					    				}

					    			}

					    		}

					    		$sql = "SELECT * FROM lead WHERE ( type = '$type_lead' AND msg = '$type_serv' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( type = '$type_lead' AND msg = '$type_serv' ) AND area = '$area' ";

							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE type = '$type_lead' AND area = '$area' ";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE type = '$type_lead' AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE type = '$type_lead' AND area = '$area' ";

							}
							
						}
						
					}elseif($type_serv!='false'){ // TYPE SERV

						if ($pharner!='false'&&$status!='false') { 

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND msg = '$type_serv' ) AND area = '$area' ";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND msg = '$type_serv' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND status = '$status' AND msg = '$type_serv' ) AND area = '$area' ";

							}

						}elseif($pharner!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND msg = '$type_serv' ) AND area = '$area' ";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND msg = '$type_serv' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( pharner = '$pharner' AND msg = '$type_serv' ) AND area = '$area'";

							}

						}elseif($status!='false'){

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE ( status = '$status' AND msg = '$type_serv' ) AND area = '$area' ";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE ( status = '$status' AND msg = '$type_serv' ) AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE ( status = '$status' AND msg = '$type_serv' ) AND area = '$area'";

							}

						}else{

							if (!empty($lead_id)) {

								$sql = "SELECT * FROM lead WHERE msg = '$type_serv' AND area = '$area' ";

								$result = $con->query($sql);

				    		if ($result->num_rows > 0) {

				    			$cont=0;
				    			$cont_2=0;
				    			$total_leads=$result->num_rows;

				    			while($row = $result->fetch_array()) {

				    				if ($row['id']==$lead_id) {
				    					$cont_2 = $cont++;
				    				}else{
				    					$cont++;
				    				}

				    			}

				    		}

				    		$sql = "SELECT * FROM lead WHERE msg = '$type_serv' AND area = '$area' LIMIT $cont_2, $total_leads ";

							}else{

								$sql = "SELECT * FROM lead WHERE msg = '$type_serv' AND area = '$area' ";

							}
							
						}
						
					}else{ // GENERAL

						if (!empty($lead_id)) {

							$sql = "SELECT * FROM lead WHERE area = '$area' ";

							$result = $con->query($sql);

			    		if ($result->num_rows > 0) {

			    			$cont=0;
			    			$cont_2=0;
			    			$total_leads=$result->num_rows;

			    			while($row = $result->fetch_array()) {

			    				if ($row['id']==$lead_id) {
			    					$cont_2 = $cont++;
			    				}else{
			    					$cont++;
			    				}

			    			}

			    		}

			    			$sql = "SELECT * FROM lead WHERE area = '$area' LIMIT $cont_2, $total_leads ";

						}else{

							$sql = "SELECT * FROM lead WHERE area = '$area' ";

						}

					}

				}

			}else{ // TODOS LOS CAMPOS LLENOS

				if (!empty($lead_id)) {

					$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' AND date_l BETWEEN '$date_1' AND '$date_2')";

					$result = $con->query($sql);

	    			if ($result->num_rows > 0) {

		    			$cont=0;
		    			$cont_2=0;
		    			$total_leads=$result->num_rows;

		    			while($row = $result->fetch_array()) {

		    				if ($row['id']==$lead_id) {
		    					$cont_2 = $cont++;
		    				}else{
		    					$cont++;
		    				}

		    			}

	    			}

					$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' AND date_l BETWEEN '$date_1' AND '$date_2') LIMIT $cont_2, $total_leads";

				}else{
					$sql = "SELECT * FROM lead WHERE ( ( pharner = '$pharner' AND status = '$status' AND type = '$type_lead' ) AND area = '$area' AND date_l BETWEEN '$date_1' AND '$date_2')";
				}

			}

			break;
			
	}

	return $sql;

}

function lead($area,$page,$month,$lead_id=false){

	//CONEXION DB
		include('./resources/conexion.php');

	// DATE CONSULT
		$fecha_mes_1 = '2021-'.date_to_num($month).'-01';
		$fecha_mes_2 = '2021-'.date_to_num($month).'-31';

	// STATUS DE LOS INPUTS 
	    if (priv_now=='master'){
	    	$input_status = '';
	    	$input_status_m = 'disabled';
	    	$input_status_css = '';
	    }else{ 
	    	$input_status='disabled';
	    	$input_status_css = 'disabled_input';
	        $input_status_m = '';
	    }

	// FITROS DE BUSQUEDA
	    if(isset($_GET['search_bar'])||isset($_GET['btn_filter'])){

	    	if (isset($_GET['search_bar'])) { // SEARCH BAR LEAD

	    		if (!empty($_GET['lead_id'])) {
	    			$sql = search_lead($area,$_GET['search_bar'],'none',$_GET['lead_id']);
	    		}else{
	    			$sql = search_lead($area,$_GET['search_bar'],'none');
	    		}
	    		

	    	}else{ // FILTER LEAD

	    		if (!empty($_GET['lead_id'])) {
	    			$sql = filter_lead($area,$_GET['pharner'],$_GET['status'],$_GET['type_lead'],$_GET['date_1'],$_GET['date_2'],$lead_id);
	    		}else{

	    			if ($area=='limpieza') {

	    				$sql = filter_lead($area,$_GET['pharner'],$_GET['status'],$_GET['type_lead'],$_GET['date_1'],$_GET['date_2'],'','',$_GET['type_serv']);

	    			}else{
	    				$sql = filter_lead($area,$_GET['pharner'],$_GET['status'],$_GET['type_lead'],$_GET['date_1'],$_GET['date_2']);
	    			}

	    			
	    		}
	    		

	    	}

	    }else{ // BUSQUEDA GENERAL

	    	if (!empty($lead_id)) { // SEARCH SINNCE ID LEAD

	    		$sql = "SELECT * FROM lead WHERE area = '$area' AND date_l BETWEEN '$fecha_mes_1' AND '$fecha_mes_2'  ";

	    		$result = $con->query($sql);

	    		if ($result->num_rows > 0) {

	    			$cont=0;
	    			$cont_2=0;
	    			$total_leads=$result->num_rows;

	    			while($row = $result->fetch_array()) {

	    				if ($row['id']==$lead_id) {
	    					$cont_2 = $cont++;
	    				}else{
	    					$cont++;
	    				}

	    			}

	    		}

	    		$sql = "SELECT * FROM lead WHERE (area = '$area' AND date_l BETWEEN '$fecha_mes_1' AND '$fecha_mes_2' )  LIMIT $cont_2, $total_leads ";

		    }else{

		    	$sql = "SELECT * FROM lead WHERE (area = '$area' AND date_l BETWEEN '$fecha_mes_1' AND '$fecha_mes_2')";

		    }

	    }

	//print_r($sql);

	// RESUTADO SQL
	$result = $con->query($sql);

	$all_leads 		= $result->num_rows;
    $id_dropdown 	= $page+1;
    $div_color 		= '#00000';

	if ($result->num_rows > 0) {

    	while($row = $result->fetch_array()) {

	      // BAGRAUND COLOR DE FILAS 
		      if ($div_color=='#fbbe0863') {
		        $div_color = '#92929236';
		      }else{
		        $div_color = '#fbbe0863';
		      }

	      // DIV INFORMACIÓN LEAD
		      switch ($area) {
		      	case 'limpieza':
		      		include('view_lead/lead_limpieza.php');
		      		break;

		      	case 'rysese':
		      		include('view_lead/lead_rysese.php');
		      		break;

		      	case 'dimarketing':
		      		include('view_lead/lead_dimarketing.php');
		      		break;
		      	
		      	default:
		      		include('view_lead/lead.php');
		      		break;
		      }

	      
	      //CONTADOR DE DROPDOWN
	      	$id_dropdown++;
	    }

	    // PAGINATION LEADS
	    	if(isset($_GET['search_bar'])||isset($_GET['btn_filter'])){
		    	// NONE
		  	}else{
		    	//include('view_pagination/pagination.php');
		  	}

  	}

}

function lead_wallet($area,$page){

	//CONEXION DB
	include('./resources/conexion.php');
	$fecha_mes_1 = fecha_mes_1;
	$fecha_mes_2 = fecha_mes_2;
	$month = month;

	// STATUS DE LOS INPUTS 
    if (priv_now=='master'){
    	$input_status = '';
    	$input_status_m = 'disabled';
    	$input_status_css = '';
    }else{ 
    	$input_status='disabled';
    	$input_status_css = 'disabled_input';
        $input_status_m = '';
    }

	// CONSULT SQL
	if($area=='maredima'){
		$sql = "SELECT * FROM lead_wallet LIMIT $page, 10 ";
	}else{
		$sql = "SELECT * FROM lead_wallet WHERE area = '$area' LIMIT $page, 10 ";
	}

	//print_r($sql);

	$result = $con->query($sql);

	$all_leads 		= $result->num_rows;
    $id_dropdown 	= $page+1;
    $div_color 		= '#0000';

	if ($result->num_rows > 0) {

        while($row = $result->fetch_array()) {

            // BAGRAUND COLOR DE FILAS 
            if ($div_color=='#ffc10763') {
                $div_color = '#0000';
           	}else{
                $div_color = '#ffc10763';
            }

            // DIV INFORMACIÓN LEAD
            include('view_lead/lead.php');
    
            //CONTADOR DE DROPDOWN
            $id_dropdown++;
      	}

      	// PAGINATION LEADS
	        include('view_pagination/pagination.php');

    }

}

function lead_prestamo($area,$plaza,$page){

	//CONEXION DB
	include('./resources/conexion.php');
	$fecha_mes_1 = fecha_mes_1;
	$fecha_mes_2 = fecha_mes_2;
	$month = month;

	// STATUS DE LOS INPUTS 
    if (priv_now=='master'){
    	$input_status = '';
    	$input_status_m = 'disabled';
    	$input_status_css = '';
    }else{ 
    	$input_status='disabled';
    	$input_status_css = 'disabled_input';
        $input_status_m = '';
    }

	// CONSULT SQL

  if(isset($_GET['search_bar'])||isset($_GET['btn_filter'])){

  	if (isset($_GET['search_bar'])) { // SEARCH BAR

  		$sql = search_lead($area,$_GET['search_bar'],$plaza);

  	}else{ // FILTER LEAD 

  		$sql = filter_lead($area,$_GET['pharner'],$_GET['status'],$_GET['type_lead'],$_GET['date_1'],$_GET['date_2'],$plaza);

  	}

  }else{ // BUSQUEDA GENERAL

    $sql = "SELECT * FROM lead_prestamo WHERE ( plaza = '$plaza' AND fecha BETWEEN '$fecha_mes_1' AND '$fecha_mes_2') LIMIT $page, 10 ";
  }

	//print_r($sql);

	$result = $con->query($sql);

	$all_leads 		= $result->num_rows;
  $id_dropdown 	= $page+1;
  $div_color 		= '#0000';

  if ($result->num_rows > 0) {

        while($row = $result->fetch_array()) {

            // BAGRAUND COLOR DE FILAS 
            if ($div_color=='#ffc10763') {
                $div_color = '#0000';
           	}else{
                $div_color = '#ffc10763';
            }

            // DIV INFORMACIÓN LEAD
            include('view_lead/lead_prestamo.php');
            		    
            //CONTADOR DE DROPDOWN
            $id_dropdown++;
      	}

      	// PAGINATION LEADS
      	if (isset($_GET['search_bar'])||isset($_GET['btn_filter'])) {
      		// none
      	}else{
      		include('view_pagination/pagination.php');
      	}
	    	

    }

}

function status_color($area,$status){

	switch ($status) {

		case 'Por contactar':
			$color="#009aff4d";
			break;

		case 'Contactado':
			$color="#ff71008f";
			break;

		case 'Propuesta enviada':
			$color="#9e9e9e4d";
			break;

		case 'Negociacion':
			$color="#4caf509e";
			break;

		case 'Venta Realizada':
			$color="#4caf509e";
			break;

		case 'cancelado':
			$color="#f443368a";
			break;

		default:
			$color="#0000";
			break;

	}

	return $color;
}

function service_color($area,$service){

	if ($area=='limpieza') {

		switch ($service) {

			case 'Sanitización':
			 	$color="#009aff4d";
			 	break;

			case 'Productos de sanitización':
			 	$color="#00b9a857";
			 	break;

			case 'Eventual':
			 	$color="#ff9800bf";
			 	break;

			case 'Doméstico':
			 	$color="#ffeb3bb3";
			 	break;

			case 'Oficinas':
			 	$color="#a7a7a7b5";
			 	break;

			case 'Sillones / Alfombras':
			 	$color="#ff3b3b91";
			 	break;

			case 'Agencia de autos':
			 	$color="#ef44c275";
			 	break;

			case 'Alturas':
			 	$color="#405dffa6";
			 	break;

			case 'Jardinería':
			 	$color="#b9ffbb";
			 	break;

			case 'Fumigación':
			 	$color="#3b903eb3";
			 	break;

			case 'Pulido de pisos':
			 	$color="#7955489e";
			 	break;

			default:
			 	$color="#fff";
			 	break;
		}

	}elseif($area=='rysese'){

		switch ($service) {

			case 'Reclutamiento':
			 	$color="#ff9800bf";
			 	break;

			case 'Ese':
			 	$color="#ffeb3bb3";
			 	break;

			case 'Pruebas de honestidad':
			 	$color="#03a9f45e";
			 	break;

			case 'Pruebas psicométricas':
			 	$color="#8bc34ac2";
			 	break;

			case 'Ejecutivos comerciales':
			 	$color="#ff90fd8a";
			 	break;

			default:
			 	$color="#fff";
			 	break;
		}

	}elseif($area=='dimarketing'){

		switch ($service) {

			case 'Dimarketing':
			 	$color="#2196f354";
			 	break;

			case 'Páginas web':
			 	$color="#8bc34ac2";
			 	break;

			case 'Ecommerce':
			 	$color="#ffc107ba";
			 	break;

			case 'Redes sociales':
			 	$color="#ff9800bf";
			 	break;

			case 'Google ads':
			 	$color="#ff90fd8a";
			 	break;

			case 'Tarjetas digitales':
			 	$color="#3f51b575";
			 	break;

			case 'Invitaciones digitales':
			 	$color="#bd9c49b5";
			 	break;

			 case 'Mi menu digital':
			 	$color="#0490ff96";
			 	break;

			default:
			 	$color="#fff";
			 	break;
		}

	}else{
		$color="#fff";
	}

	return $color;
}

//  MODULOS

function modulos($area,$type){
	//echo 'MODULOS '.$area." / ".$type;

	//CONEXION DB
	include('./resources/conexion.php');

	switch ($type) {
		case 'brochure':
			if ($area=='maredima') {
				include('view_mod/mod_master.php');
			}else{
				include('view_mod/mod_pharner.php');
			}
			break;

		case 'bolsa de trbajo':
			//echo "/ bolsa de trbajo";
			if ($area=='maredima') {

				$page = 0;

				$sql = "SELECT * FROM lead_prospecto ";

				//print_r($sql);

				$result = $con->query($sql);

				$all_leads 		= $result->num_rows;
				$id_dropdown 	= $page+1;
				$div_color 		= '#0000';

				if ($result->num_rows > 0) {

				    while($row = $result->fetch_array()) {

				        // BAGRAUND COLOR DE FILAS 
				       	if ($div_color=='#ffc10763') {
				            $div_color = '#0000';
				        }else{
				            $div_color = '#ffc10763';
				        }

				        // DIV INFORMACIÓN LEAD
				        include('view_lead/lead_prospecto.php');
				    
				        //CONTADOR DE DROPDOWN
				        $id_dropdown++;
				    }

				    // PAGINATION LEADS
					//include('view_pagination/pagination.php');

				}

			}else{
				//include('view_mod/mod_pharner.php');
			}

			break;

		case 'proyectos':
			echo "/ Proyectos";
			break;

		case 'promotion':
			if ($area=='maredima') {
				include('view_mod/mod_master.php');
			}else{
				include('view_mod/mod_pharner.php');
			}
			break;

		case 'data_sheet':
			if ($area=='maredima') {
				include('view_mod/mod_master.php');
			}else{
				include('view_mod/mod_pharner.php');
			}
			break;
		
		default:
			# code...
			break;
	}

}

// TOOLS

function select_pharner($area){
	//CONEXION DB
	include('./resources/conexion.php');

	$sql = "SELECT * FROM user ";

	$result = $con->query($sql);

	if ($result->num_rows > 0) {

		while($row = $result->fetch_array()) {

			if ($row['privilege']!='master') {

				if ($row['emp']==$area) {
					echo '<option>'.$row['name'].'</option>';
				}else{

					if ($area=='maredima') {
						echo '<option>'.$row['name'].'</option>';
					}
					//echo '<option>'.$row['name'].'</option>';
				}

			}else{

			}

		}
	}

}

function select_status($area){

	switch ($area) {
		case 'prestamos':
			echo '
				<option value="Activo" >Activo</option>
				<option value="Inactivo" >Inactivo</option>
				';
			break;
				
		default:
			echo '
				<option value="Por contactar" >Por contactar</option>
				<option value="Contactado" >Contactado</option>
				<option value="Propuesta enviada" >Propuesta enviada</option>
				<option value="Negociacion" >Negociacion</option>
				<option value="Venta Realizada" >Venta Realizada</option>
				<option value="cancelado" >Cancelado</option>
				';
			break;
	}

}

function select_type($area){

	switch ($area) {
		case 'prestamos':
			break;
				
		default:
			echo '
				<option value="Organico">Organico</option>
				<option value="Google Ads">Google Ads</option>
				<option value="Mailing">Mailing</option>
				<option value="Redes Sociales">Redes Sociales</option>
				<option value="Cliente Frecuente">Cliente Frecuente</option>
				<option value="Otro">Otro</option>
				';
			break;
	}

}

function select_service($area){

	switch ($area) {
		case 'limpieza':
			echo '
				<option value="Sanitización" >Sanitización</option>
				<option value="Productos de sanitización" >Productos de sanitización</option>
				<option value="Eventual" >Eventual</option>
				<option value="Doméstico" >Doméstico</option>
				<option value="Oficinas" >Oficinas</option>
				<option value="Sillones / Alfombras" >Sillones / Alfombras</option>
				<option value="Agencia de autos" >Agencia de autos</option>
				<option value="Alturas" >Alturas</option>
				<option value="Jardinería" >Jardinería</option>
				<option value="Fumigación" >Fumigación</option>
				<option value="Pulido de pisos" >Pulido de pisos</option>
				';
			break;
				
		default:
			
			break;
	}

}

function select_month($area){


	echo '
		<option value="Enero" >Enero</option>
		<option value="Febrero" >Febrero</option>
		<option value="Marzo" >Marzo</option>
		<option value="Abril" >Abril</option>
		<option value="Mayo" >Mayo</option>
		<option value="Junio" >Junio</option>
		<option value="Julio" >Julio</option>
		<option value="Agosto" >Agosto</option>
		<option value="Septiembre" >Septiembre</option>
		<option value="Octubre" >Octubre</option>
		<option value="Noviembre" >Noviembre</option>
		<option value="Diciebre" >Diciebre</option>
		';

	
}

function tool_bar($area,$type=false){
	if (!empty($type)) {
		if ($type=='cliente frecuente') { include('view_tools/toolbar.php'); } // VIEW TOOL BAR
	}else{
		include('view_tools/toolbar.php');  // VIEW TOOL BAR
	}
}

?>
