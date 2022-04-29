<!-- NEW LEAD MODAL -->
<div class="box-info-modal new-cliente">
	<h1>AGREGAR NUEVO CLIENTE</h1>
	<form name="modal_new-lead-limpieza" action="./resources/action.php" method="POST" enctype="multipart/form-data" class="form-new-lead" >

		<input type="text" name="cliente" value="cliente" style="display: none;">
		<input type="text" name="pharner" value="<?=$_SESSION['user'];?>" style="display: none;">
		<input type="text" name="date_l" value="<?=today;?>" style="display: none;">
		<input type="text" name="time_l" value="<?=time_now;?>" style="display: none;">
		<input type="text" name="pay" value="0" style="display: none;">
		<input type="text" name="fac_no" value="0" style="display: none;">
		<input type="text" name="quote" value="0" style="display: none;">

		<hr>

		<ul style="margin-bottom: 10px;">
						 
			<li>
				<label>Tipo de lead</label><br>
				<select name="type">
					<option value="Organico">Organico</option>
					<option value="Google Ads">Google Ads</option>
					<option value="Mailing">Mailing</option>
					<option value="Redes Sociales">Redes Sociales</option>
					<option value="Cliente Frecuente">Cliente Frecuente</option>
					<option value="Otro">Otro</option>
				</select>
			</li>

			<li>
				<label>Tipo de contacto</label><br>
				<select name="from">
					<option value="Pagina web">Pagina web</option>
					<option value="Facebook">Facebook</option>
					<option value="Linkedin">Linkedin</option>
					<option value="LLamada">LLamada</option>
					<option value="Email">Email</option>
					<option value="Otro">Otro</option>
				</select>
			</li>

			<li>
				<label>Estatus de lead</label><br>
				<select name="status" >
					<option value="Por contactar" >Por contactar</option>
					<option value="Contactado" >Contactado</option>
					<option value="Propuesta enviada" >Propuesta enviada</option>
					<option value="Negociacion" >Negociacion</option>
					<option value="Venta Realizada" >Venta Realizada</option>
					<option value="cancelado" >Cancelado</option>
					<option value="Solicitud de trabajo" >Solicitud de trabajo</option>
				</select>
			</li>

			<li >

				<label>Servicio requerido</label><br>
				<select id="service-limpieza" name="msg" >
					<option value="prueba demo" >prueba demo</option>
					<option value="plataforma" >plataforma</option>
				</select>
									
			</li>

		</ul>

		<ol>

			<li style="width: 100%;">
				<label>Nombre de lead</label><br>
				<input type="text" name="name">
			</li>

			<li style="width: 49%;" >
				<label>Teléfono</label><br>
				<input type="text" name="phone">
			</li>

			<li style="width: 49%;" >
				<label>Email</label><br>
				<input type="text" name="email">
			</li>


			<li style="width: 49%;" >
				<label>Empresa</label><br>
				<input type="text" name="empresa">
			</li>

			<li style="width: 49%;" >
				<label>Puesto</label><br>
				<input type="text" name="puesto">
			</li>


			<li style="width: 100%">
				<label>Dirección:</label><br>
				<textarea name="address"></textarea> 
			</li>

			<li style="width: 100%">
				<label>Descripción del servicio</label><br>
				<textarea name="desc_serv"></textarea> 
			</li>
			
		</ol>

		<ol>

			<li style="width: 100%;">
				<label>Comentarios</label><br>
				<textarea style="height: 235%;" name="comments"></textarea>
			</li>

		</ol>

		<hr>

		<ul style="justify-content:center;">

			<li>
				<p onclick="closed_modal_lead();" style="background-color: #F44336;">cancelar</p>
			</li>

			<li>
				<p style="background-color: #007eba;">
					<button type="sumbit" name="btn_action" value="new_lead" >Aceptar</button>
				</p>
			</li>
		</ul>

	</form>

</div>