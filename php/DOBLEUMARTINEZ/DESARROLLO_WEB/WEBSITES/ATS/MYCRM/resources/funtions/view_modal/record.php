
<div class="box-info-modal record-<?php echo $row['id'];?>">

	<h1>HISTORICO DE SEGUIMIENTO </h1>

	<hr>

	<textarea disabled style="width: 100%; height: 400px;">
	<?php
								 
		$id_lead = $row['id'];

		$sql_record = "SELECT * FROM record WHERE lead = $id_lead ";
		$result_r = $con->query($sql_record);

		if ($result_r->num_rows > 0) {

		    while($row_r = $result_r->fetch_array()) {
		      	echo "\r\nEjecutivo -> ".$row_r['pharner']." || fecha -> ".$row_r['fecha']." ".$row_r['hora']."\r\n".$row_r['detail']."\r\n-------------------------------------------------------------------------";
			}

		}else{

			echo "sin registros";

		}

	?>					
	</textarea>

</div>

