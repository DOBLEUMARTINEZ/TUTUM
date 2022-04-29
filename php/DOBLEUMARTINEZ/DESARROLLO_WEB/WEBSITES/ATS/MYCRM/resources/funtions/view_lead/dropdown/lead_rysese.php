<div class="dropdown_lead dropdown_lead_<?php echo $id_dropdown; ?>" style="display: none; background-color: #0000;" >
	<form action="./resources/action.php" method="POST" enctype="multipart/form-data" style="background-color:<?=$div_color?>;">

		<!-- info lead -->
		<div>

			<h3>INFORMACIÓN GENERAL</h3>

			<input type="text" name="id" value="<?php echo $row['id'];?>" style="display: none;">
			<input type="text" name="month" value="<?php echo $_GET['month'];?>" style="display: none;">
			<input type="text" name="area" value="<?php echo $row['area'];?>" style="display: none;">
			<input type="date" name="date_l"  value="<?php echo $row['date_l'];?>" style="display: none;">
			<input type="time" name="time_l" value="<?php echo $row['time_l'];?>" style="display: none;">
			<input type="text" name="origin"  value="<?php echo $row['origin'];?>" style="display: none;">
			<input type="text" name="from_l"  value="<?php echo $row['from_l'];?>" style="display: none;">
			<input type="text" name="fac_no" value="<?php echo $row['fac_no']; ?>" style="display: none;">
			<input type="text" name="pharner" value="<?php echo $row['pharner']; ?>" style="display: none;">

			<ul>

				<li>
					<label>NOMBRE:</label>
					<input type="text" name="name" value="<?=$row['name'];?>">	
				</li>

				<li>
					<label>TELÉFONO:</label><br>
					<input type="text" name="phone" value="<?=$row['phone'];?>" >
				</li>

				<li>
					<label>EMAIL:</label><br>
					<input type="text" name="email" value="<?=$row['email'];?>">
				</li>

				<li></li>


				<li style="width: 98%;">
					<label>DIRECCIÓN:</label>
					<textarea  name="address" style="height: 50px;" ><?php echo $row['address'];?></textarea>
				</li>

				<li>
					<label>EMPRESA</label>
					<input type="text" name="empresa" value="<?=$row['empresa']?>">
				</li>

				<li>
					<label>PUESTO</label>
					<input type="text" name="puesto" value="<?=$row['puesto']?>">
				</li>	

				<hr>

				<li>
					<label>SERVICIO:</label>
					<select id="service-limpieza" name="msg" >
						<option value="<?=$row['msg']?>" ><?=$row['msg']?></option>
						<option value="Reclutamiento" >Reclutamiento</option>
						<option value="Ese" >Ese</option>
						<option value="Pruebas de honestidad" >Pruebas de honestidad</option>
						<option value="Pruebas psicométricas" >Pruebas psicométricas</option>
						<option value="Ejecutivos comerciales" >Ejecutivos comerciales</option>
					</select>
				</li>

				<li></li>

				<li style="width: 98%;">
					<label>DESCRIPCIÓN DEL SERVICIO:</label>
					<textarea  name="comments" style="height: 80px;"><?php echo $row['comments'];?></textarea>
				</li>


			</ul>

		</div>

		<!-- tracing lead -->
		<div>

			<h3>SEGUIMIENTO DE LEAD</h3>

			<ul>

				<li>
					<label>TIPO DE LEAD:</label>
					<select name="type_l" >
						<option value="<?php echo $row['type']; ?>" ><?php echo $row['type']; ?></option>
						<option value="Organico">Organico</option>
						<option value="Google Ads">Google Ads</option>
						<option value="Mailing">Mailing</option>
						<option value="Redes Sociales">Redes Sociales</option>
						<option value="Cliente Frecuente">Cliente Frecuente</option>
						<option value="Otro">Otro</option>
					</select>
				</li> 

				<li>
					<label>CONTACTO DESDE:</label>
					<select name="from" >
					<option value="<?php echo $row['from_l']; ?>" ><?php echo $row['from_l']; ?></option>
					<option value="Pagina web">Pagina web</option>
					<option value="WhatsApp">WhatsApp</option>
					<option value="LLamada">LLamada</option>
					<option value="Email">Email</option>
					<option value="Tidio">Tidio</option>
					<option value="Otro">Otro</option>
					</select>
				</li>

				<li>
					<label>ESTATUS:</label>
					<select name="status" >
						<option value="<?php echo $row['status']; ?>" ><?php echo $row['status']; ?></option>
						<option value="Por contactar" >Por contactar</option>
						<option value="Contactado" >Contactado</option>
						<option value="Propuesta enviada" >Propuesta enviada</option>
						<option value="Negociacion" >Negociacion</option>
						<option value="Venta Realizada" >Venta Realizada</option>
						<option value="cancelado" >Cancelado</option>
						<option value="Solicitud de trabajo" >Solicitud de trabajo</option>
					</select>
				</li>

				<li>
					<label>ULTIMA ACTUALIZACIÓN:</label><br>
					<input type="text" name="last_update" value="<?php echo $row['last_update'];?>" >
				</li>

				<hr>

				<li>
					<label>PRECIO COTIZADO:</label><br>
					<input type="num" name="quote" value="<?php echo $row['quote']; ?>">
				</li>

				<li>
					<label>PRECIO FACTURADO:</label><br>
					<input type="text" name="pay" value="<?php echo $row['pay']; ?>">
				</li>

				<!-- gallery UPDATE lead -->
				<li id="gallery-box"  style="width: 98%">
					<label>DOCUMENTACION:</label>
					<div class="gallery-place" style="margin-top: 5px;">
						<?=gallery_place($_GET['area']);?>
					</div>
				</li>

				<li style="width:98%;">
					<label>COMENTARIOS:</label>
					<textarea name="record" style="height: 80px;" ></textarea>
				</li>

				<li class="btns-action" >
					<span onclick="modal_lead('record',<?php echo $row['id'];?>);">HISTORIAL</span>
					<span style="background: #4caf50;" ><button name="btn_action" value="update_lead" >ACTUALIZAR</button></span>
				</li>

			</ul>

		</div>

	</form>
</div>