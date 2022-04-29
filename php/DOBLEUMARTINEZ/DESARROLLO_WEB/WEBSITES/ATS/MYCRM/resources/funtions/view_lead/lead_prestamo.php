<div>

	<ol>
		<!-- color numeración -->
		<li style="width: 3%; background-color:<?=$div_color?>;" >
			<p style="text-align: center;"><?php echo $id_dropdown;?></p>
		</li>

		<li style="width: 5%; background-color:<?=$div_color?>;" >
			<span>NUTRA</span>
			<p><?php echo $row['nutra'];?></p>
		</li>

		<li style="width: 22%; background-color:<?=$div_color?>;" >
			<span>NOMBRE</span><p><?php echo $row['name'];?></p>
		</li>
						
		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>TELÉFONO:</span>
			<p><?php echo $row['phone'];?></p>
		</li>

		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>PLAZA:</span>
			<p><?php echo $row['plaza'];?></p>
		</li>

		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>ANTIGUEDAD:</span>
			<p><?php echo $row['antique'];?></p>
		</li>

		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>PUESTO:</span>
			<p><?php echo $row['job'];?><p>
		</li>

		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>ARRENDAMIENTO:</span>
			<p><?php echo $row['arren'];?><p>
		</li>

		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>FECHA:</span>
			<p><?php echo $row['fecha'];?><p>
		</li>

		<!-- status lead -->
			<?php
				$color_status="#0000";
		 	 	if (isset($row['status'])&&!empty($row['status'])) {
		 	 		switch ($row['status']) {
		 	 			case 'Activo':
		 	 				$color_status="#4caf509e";
		 	 				break;
		 	 			case 'Inactivo':
		 	 				$color_status="#f443368a";
		 	 				break;
		 	 			
		 	 			default:
		 	 				$color_status="#0000";
		 	 				break;
		 	 		}
		 	 }else{
		 	 	$color_status="#0000";
		 	 }
			?>
			<li style="width: 5%; background-color:<?=$color_status?>;">
				<span>STATUS</span>
				<p><?php echo $row['status'];?></p>
			</li>

		<!-- lead tools -->		
		<?php
			// master tools
			if (priv_now=='master') {

				//echo $privilege;
				?>

				<li style="width: 2.5%; text-align: center; background-color:<?=$div_color?>;" >
					<p><i onclick="dropdown_lead(<?php echo $id_dropdown.','.$all_leads;?>)" class="fas fa-pencil-alt"></i></p>
				</li>

				<li style="width: 2.5%; text-align: center;border:none; background-color:<?=$div_color?>;" >
					<p><i onclick="window.location.href='./resources/action.php?area=<?php echo $_GET['area']; ?>&btn_action=delete_lead_prestamo&id=<?php echo $row['id']?>&plaza=<?=$_GET['plaza']?>';" class="fas fa-trash-alt"></i></p>
				</li>

				<?php

			}else{

				?>

				<li style="width: 2.5%; text-align: center;border:none; background-color:<?=$div_color?>;" >
					<p><i onclick="dropdown_lead(<?php echo $id_dropdown.','.$all_leads;?>);" class="fas fa-eye"></i></p>
				</li>

				<?php
			}
		?>

	</ol>
					
	<div class="dropdown_lead_<?php echo $id_dropdown; ?>" style="display: none; background-color: #0000;" >

		<form  action="./resources/action.php" method="POST" enctype="multipart/form-data">

			<!-- info lead -->
			<div>
				<h3>INFORMACIÓN DE LEAD PRESTAMO </h3>
				<hr>
				<ul>

					<li>
						<label>NOMBRE:</label><br>
						<input type="text" name="name" value="<?php echo $row['name'];?>">
						<input type="text" name="id" value="<?php echo $row['id'];?>" style="display: none;">
					</li>

					<li>
						<label>NUTRA:</label><br>
						<input type="text" name="nutra" value="<?php echo $row['nutra'];?>">
					</li>

					<li style="display: flex; flex-wrap: wrap;">
						<label>TELÉFONO Y CORTO</label><br>
						<input style="width: 60%;" type="text" name="phone" value="<?php echo $row['phone'];?>" >
						<input style="width: 20%;" type="text" name="corto" value="<?php echo $row['corto'];?>" >
					</li>

					<!-- PLAZAS PRESTAMOS -->
					<li>
						<label>PLAZA:</label><br>

						<select name="plaza">
							<option value="<?=$row['plaza']?>" > <?=$row['plaza']?> </option>
							<option value="GUADALAJARA" > GUADALAJARA </option>
							<option value="MERIDA" > MERIDA </option>
							<option value="TUXTLA" > TUXTLA </option>
							<option value="SAN LUIS POTOSI" > SAN LUIS POTOSI </option>
							<option value="ZONA METRO" > ZONA METRO </option>
							<option value="PUEBLA" > PUEBLA </option>
							<option value="QUERETARO" > QUERETARO </option>
							<option value="MONTERREY" > MONTERREY </option>
							<option value="TLAXCALA" > TLAXCALA </option>
						</select>

					</li>

					<!-- antiguedad -->
					<li>
						<label>ANTIGUEDAD:</label><br>
						<select name="antique">
							<option value="<?=$row['antique']?>" > <?=$row['antique']?> </option>
							<option value="menos de 5 meses">menos de 5 meses</option>
							<option value="6 meses a 1 año">6 meses a 1 año</option>	
							<option value="2 años a 3 años">2 años a 3 años</option>
							<option value="4 a 5 años">4 a 5 años</option>
							<option value="más de 6 años">más de 6 años</option>
						</select>
					</li>

					<li>
						<label>PUESTO:</label><br>
						<input type="text" name="job" value="<?php echo $row['job'];?>">
					</li>

					<!-- RECORDS -->
					<li style="width:100%;">
						<label>HISTORIAL:</label><br>
						<textarea disabled  style="width:95%;" ><?php
						 
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

							?></textarea>
					</li>

				</ul>
			</div>

			<!-- tracing lead -->
			<div >
				<h3 style="color: #0000;" >PRESTAMOS</h3>
				<hr>

				<ul>

					<li>
						<label>PROYECTO:</label><br>
						<input type="text" name="proyect"  value="<?php echo $row['proyect'];?>">
					</li>

					<!-- input arrendamientos -->
					<li>
						<label>ARRENDAMIENTOS</label><br>
						<select style="width: 35%;" name="arren">
							<option value="<?=$row['arren']?>" > <?=$row['arren']?> </option>
							<?php

								if($row['arren']=='Si'){
									?>
									<option value="No">No</option>
									<?php
								}else{
									?>
									<option value="Si">Si</option>
									<?php
								}

							?>
						</select>
					</li>

					<li>
						<label>FECHA:</label><br>
						<input type="date" name="fecha"  value="<?php echo $row['fecha'];?>" class="<?php echo $input_status_css; ?>" <?php echo $input_status; ?> >
						<input type="date" name="fecha" value="<?php echo $row['fecha'];?>" <?php echo $input_status_m;?> style=" display: none;" >
					</li>

					<li>
						<label>METODO DE PROSPECCIÓN</label><br>
						<input type="text" name="origen"  value="<?php echo $row['origen'];?>">					
					</li>

					<li>
						<label>ESTATUS</label><br>
						<select name="status">
							<option value="<?=$row['status']?>" > <?=$row['status']?> </option>
							<?php

								if($row['status']=='Activo'){
									?>
									<option value="Inactivo">Inactivo</option>
									<?php
								}else{
									?>
									<option value="Activo">Activo</option>
									<?php
								}

							?>
						</select>				
					</li>

					<li>
						<label>EJECUTIVO</label><br>
						<input type="text" name="ejecutivo"  value="<?php echo $row['ejecutivo'];?>">					
					</li>

					<li style="width: 100%;">
						<label>OBSERVACIONES:</label><br>
						<textarea name="observacion" style="width:95%;"></textarea>
					</li>

				</ul>
			</div>

			<!-- buttons form -->
			<ol>
				<li style="justify-content: flex-start; ">
				</li>
				<li style="justify-content: flex-end;">
					<p style="background-color: #F44336;" onclick="dropdown_lead(<?php echo $row['id'].','.$all_leads;?>)" >
						CANCELAR
					</p>
					<p style="background-color: #007eba;" >
						<button name="btn_action" value="update_lead_prestamo" >ACTUALIZAR</button>
					</p>
				</li>
			</ol>

		</form>

	</div>
					
</div>