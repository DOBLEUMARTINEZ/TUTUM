<div class="dropdown_lead_<?php echo $id_dropdown; ?>" style="display: none; background-color: #0000;" >

	<form action="./resources/action.php" method="POST" enctype="multipart/form-data">

		<!-- info lead -->
		<div>
			<h3>INFORMACIÓN PROSPECTO</h3>
			<hr>
			<ul>

				<li>
					<label>NOMBRE:</label><br>
					<input type="text" name="name" value="<?php echo $row['name'];?>">
					<input type="text" name="id" value="<?php echo $row['id'];?>" style="display: none;">
				</li>

				<li>
					<label>TELÉFONO:</label><br>
					<input type="text" name="phone" value="<?php echo $row['phone'];?>" >
				</li>

				<li>
					<label>EMAIL:</label><br>
					<input type="text" name="email" value="<?php echo $row['email'];?>">
				</li>

				<li>
					<label>DIRECCIÓN:</label><br>
					<input type="text" name="address" value="<?php echo $row['address'];?>" >
				</li>

				<li>
					<label>AREA:</label><br>
					<input type="text" name="area" value="<?php echo $row['area'];?>">
				</li>

				<li>
					<label>MENSAJE:</label><br>
					<input type="text" name="msg" value="<?php echo $row['msg'];?>">
				</li>

				<li>
					<label>PAGINA DE ORIGEN:</label><br>
					<input type="text" name="origin"  value="<?php echo $row['origin'];?>">
				</li>

				<li>
					<label>CONTACTO DESDE:</label><br>
					<input type="text" name="from_l"  value="<?php echo $row['from_l'];?>">
				</li>

				<li>
					<label>FECHA:</label><br>
					<input type="date" name="date_l"  value="<?php echo $row['date_l'];?>">
				</li>

				<li>
					<label>HORA:</label><br>
					<input type="time" name="time_l" value="<?php echo $row['time_l'];?>">
				</li>	

			</ul>

		</div>

		<!-- tracing lead -->
		<div>
			<h3>SEGUIMIENTO DE LEAD</h3>
			<hr>

			<ul>

				<li>
					<label>EJECUTIVO:</label><br>
					<input type="text" name="pharner" value="<?php echo $_SESSION["user"]; ?>">
				</li>

				<li>
					<label>ULTIMA ACTUALIZACIÓN:</label><br>
					<input type="text" name="last_update" value="<?php echo $row['pharner']."-> ".$row['last_update']; ?>">
				</li>

				<li>
					<label>ESTATUS</label><br>
					<select name="status" >
						<option value="<?php echo $row['status']; ?>" ><?php echo $row['status']; ?></option>
						<option value="nuevo" >Nuevo</option>
						<option value="activo" >Activo</option>
						<option value="inactivo" >Inactivo</option>
					</select>
				</li>

				<li>
					<label>TIPO DE LEAD</label><br>
					<select name="type_l" >
						<option value="trabajo" >Trabajo</option>
					</select>
				</li>

				<li>

				</li>

				<!-- btns documents -->
				<li style="width:100%;">
					<ol class="btns-files">

						<li style="display:block;">

							<div>
								<span>Resumen</span><br>
								<input type="file" name="resume" />		
							</div>
					
							<label onclick="modal_lead('quote_pdf',<?php echo $row['id'];?>);" > VER DOCUMENTACIÓN</label>

						</li>

					</ol>
				</li>

				<li style="width:100%;">
					<label>OBSERVACIONES:</label><br>
					<textarea name="comments" style="width:95%;"></textarea>
				</li>

			</ul>

		</div>

		<!-- buttons form -->
		<ol>
						<li style="justify-content: flex-start; ">
							<p onclick="modal_lead('mynewpdf',<?php echo $row['id'];?>);" style="background-color: #4CAF50;" >Nueva cotizacion</p>
						</li>
						<li style="justify-content: flex-end;">
							<p style="background-color: #F44336;" onclick="dropdown_lead(<?php echo $row['id'].','.$all_leads;?>)" >CANCELAR</p>
							<p style="background-color: #007eba;" ><button name="btn_action" value="update_lead" >ACTUALIZAR</button></p>
						</li>
		</ol>

	</form>

</div>