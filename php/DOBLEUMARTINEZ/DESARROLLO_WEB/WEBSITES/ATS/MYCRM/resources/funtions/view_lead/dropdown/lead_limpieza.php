<div class="dropdown_lead dropdown_lead_<?php echo $id_dropdown; ?>" style="display: none;" >

	<form action="./resources/action.php" method="POST" enctype="multipart/form-data" style="background-color:<?=$div_color?>;">

		<!-- info lead -->
		<div>
			<h3>INFORMACIÓN GENERAL </h3>

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
					<input type="text" name="name" value="<?php echo $row['name'];?>">
				</li>

				<li>
					<label>TELÉFONO:</label>
					<input type="text" name="phone" value="<?php echo $row['phone'];?>" >
				</li>

				<li>
					<label>EMAIL:</label>
					<input type="text" name="email" value="<?php echo $row['email'];?>">
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

				<?php
				// INPUT SERVICE OR PRODUCT 
					if ($row['msg']=='Cubrebocas'||$row['msg']=='Guantes'||$row['msg']=='Caretas'||$row['msg']=='Sanitizante'||$row['msg']=='Gel antibacterial'||$row['msg']=='Paquetes') {

						?>

						<li>

							<label>SERVICIO:</label>
							<select name="msg" >
								<option value="Productos" >Productos</option>
							</select>

						</li>

						<li>

							<label>PRODUCTO:</label>
							<select  name="msg-2">
								<option value="<?=$row['msg']?>"><?=$row['msg']?></option>
								<option value="Cubrebocas" >Cubrebocas</option>
								<option value="Guantes" >Guantes</option>
								<option value="Caretas" >Caretas</option>
								<option value="Sanitizante" >Sanitizante</option>
								<option value="Gel antibacterial" >Gel antibacterial</option>
								<option value="Paquetes" >Paquetes</option>
								<option value="Otros" >Otros</option>
							</select>

						</li>


						<?php

					}else{

						?>

						<li>

							<label>SERVICIO:</label>
							<select name="msg" >
								<option value="<?php echo $row['msg'];?>" ><?php echo $row['msg'];?></option>
								<option value="Sanitización" >Sanitización</option>
								<option value="Eventual" >Eventual</option>
								<option value="Doméstico" >Doméstico</option>
								<option value="Oficinas" >Oficinas</option>
								<option value="Sillones / Alfombras" >Sillones / Alfombras</option>
								<option value="Agencia de autos" >Agencia de autos</option>
								<option value="Alturas" >Alturas</option>
								<option value="Jardinería" >Jardinería</option>
								<option value="Fumigación" >Fumigación</option>
								<option value="Pulido de pisos" >Pulido de pisos</option>			
								<option value="otro" >otro</option>
							</select>

						</li>

						<li></li>

						<?php

					}

				?>

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

				<!-- gallery new lead -->
				<li id="gallery-box"  style="width: 98%">
					<label>FOTOGRAFIAS DEL LUGAR:</label>
					<div class="gallery-place" style="margin-top: 5px;">
						<?=gallery_place($_GET['area']);?>
					</div>
				</li>

				<!-- btns documents -->
				<li style="width:98%; display: none;">
								<ol class="btns-files">

									<li style="display:block;">

										<div>
											<span>Cotización</span><br>
											<input type="file" name="quote_pdf" id="quote_pdf" class="btns -files-input" />
											<input type="text" name="quote_pdf_b" value="<?php echo $row['quote_pdf']; ?>" class="btns-files-input" />
										</div>

										<div>
											<span>Prefactura</span><br>
											<input type="file" name="fac_pre" id="fac_pre" class="btns -files-input" />
											<input type="text" name="fac_pre_b" value="<?php echo $row['fac_pre']; ?>" class="btns-files-input" />
										</div>

										<div>
											<span>Factura</span><br>
											<input type="file" name="fac_end" id="fac_end" class="btns -files-input" />
											<input type="text" name="fac_end_b" value="<?php echo $row['fac_end']; ?>" class="btns-files-input" />
										</div>

										<div>
											<span>Comprobante de pago</span><br>
											<input type="file" name="pay_pdf" id="pay_pdf" class="btns -files-input" />
											<input type="text" name="pay_b"  value="<?php echo $row['pay_pdf']; ?>" class="btns-files-input" />
										</div>
														
										<label onclick="modal_lead('quote_pdf',<?php echo $row['id'];?>);" > VER DOCUMENTACIÓN </label>

									</li>

								</ol>
				</li>


				<li style="width:98%;">
					<label>COMENTARIOS:</label>
					<textarea name="record" style="height: 80px;" ></textarea>
				</li>

				<li class="btns-action" >
					<span onclick="modal_lead('record',<?php echo $row['id'];?>);">HISTORIAL</span>
					<span onclick="modal_lead('mynewpdf',<?php echo $row['id'];?>);">COTIZACION</span>
					<span style="background: #4caf50;" ><button name="btn_action" value="update_lead" >ACTUALIZAR</button></span>
				</li>

			</ul>
		</div>

		<!-- datos de regreso --> 
		<?php

						if (isset($_GET['btn_filter'])) {

							?>
								<input type="text" name="btn_filter" value="<?=$_GET['btn_filter']?>" style="display: none;">
								<input type="text" name="pharner_filter" value="<?=$_GET['pharner']?>" style="display: none;">
								<input type="text" name="status_filter" value="<?=$_GET['status']?>" style="display: none;">
								<input type="text" name="type_lead_filter" value="<?=$_GET['type_lead']?>" style="display: none;">
								<input type="text" name="date_1_filter" value="<?=$_GET['date_1']?>" style="display: none;">
								<input type="text" name="date_2_filter" value="<?=$_GET['date_2']?>" style="display: none;">

							<?php

						}elseif(isset($_GET['search_bar'])){

							?>

								<input type="text" name="search_bar" value="<?=$_GET['search_bar']?>" style="display: none;">

							<?php

						}
   
					?>

	</form>

</div>
