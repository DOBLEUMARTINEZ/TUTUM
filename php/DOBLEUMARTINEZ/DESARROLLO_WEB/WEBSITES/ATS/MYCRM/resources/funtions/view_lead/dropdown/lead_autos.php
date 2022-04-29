<div class="dropdown_lead_<?php echo $id_dropdown; ?>" style="display: none; background-color: #0000;" >

				<form action="./resources/action.php" method="POST" enctype="multipart/form-data">

					<!-- info lead -->
					<div>
						<h3>INFORMACIÓN DE LEAD AUTOS</h3>
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
							<?php
							 if(empty($row['address'])){

							?>
							<li>
								<label>PLAZA:</label><br>
								<input type="text" name="address" value="<?php echo $row['plaza'];?>">
							</li>

							<?php
							}elseif (empty($row['plaza'])) {
							?>
							<li>
								<label>DIRECCIÓN:</label><br>
								<input type="text" name="address" value="<?php echo $row['address'];?>" >
							</li>
							<?php
							}else{
							?>
								<li>
								<label>DIRECCIÓN:</label><br>
								<input type="text" name="address" value="<?php echo $row['address'];?>" >
							</li>
							<?php
							}
							?>
							<li>
								<label>AREA:</label><br>
								<input type="text" name="area" value="<?php echo $row['area'];?>" class="<?php echo $input_status_css; ?>"  <?php echo $input_status; ?> >
								<input type="text" name="area" value="<?php echo $row['area'];?>" <?php echo $input_status_m;?> style=" display: none;">
							</li>
							<li>
								<label>PAGINA DE ORIGEN:</label><br>
								<input type="text" name="origin"  value="<?php echo $row['origin'];?>" class="<?php echo $input_status_css; ?>" <?php echo $input_status; ?> >
								<input type="text" name="origin" value="<?php echo $row['origin'];?>" <?php echo $input_status_m;?> style=" display: none;" >
							</li>

							<li>
								<label>CONTACTO DESDE:</label><br>
								<input type="text" name="from_l"  value="<?php echo $row['from_l'];?>" class="<?php echo $input_status_css; ?>" <?php echo $input_status; ?> >
								<input type="text" name="from_l" value="<?php echo $row['from_l'];?>" <?php echo $input_status_m;?> style=" display: none;" >
							</li>

							<li>
								<label>FECHA:</label><br>
								<input type="date" name="date_l"  value="<?php echo $row['date_l'];?>" class="<?php echo $input_status_css; ?>" <?php echo $input_status; ?> >
								<input type="date" name="date_l" value="<?php echo $row['date_l'];?>" <?php echo $input_status_m;?> style=" display: none;" >
							</li>

							<li>
								<label>HORA:</label><br>
								<input type="time" name="time_l" value="<?php echo $row['time_l'];?>" class="<?php echo $input_status_css; ?>" <?php echo $input_status; ?> >
								<input type="time" name="time_l" value="<?php echo $row['time_l'];?>" <?php echo $input_status_m;?> style=" display: none;" >
							</li>	

							<li style="width:100%;">
								<label>ORDEN:</label><br>
								<input type="text" name="msg" value="<?php echo $row['msg'];?>" style="width: 95%;">
							</li>

							<!-- RECORDS -->
							<li style="width:100%;">
								<label>HISTORIAL:</label><br>
								<textarea disabled  style="width:95%; height: 400%;" ><?php
								 
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
					<div>
						<h3>SEGUIMIENTO DE LEAD RYSESE</h3>
						<hr>

						<ul>

							<li>
								<label>EJECUTIVO:</label><br>
								<input type="text" name="pharner" value="<?php echo $row['pharner']; ?>" class="<?php echo $input_status_css; ?>" <?php echo $input_status; ?>>
									<input type="text" name="pharner" value="<?php echo $row['pharner']; ?>" <?php echo $input_status_m;?> style=" display: none;" >
							</li>

							<li>
								<label>ULTIMA ACTUALIZACIÓN:</label><br>
								<input type="text" name="last_update" value="<?php echo $row['pharner']."-> ".$row['last_update']; ?>" class="<?php echo $input_status_css; ?>" <?php echo $input_status; ?>>
								<input type="text" name="last_update" value="<?php echo $row['last_update']; ?>" <?php echo $input_status_m;?> style=" display: none;" >
							</li>

							<li>
								<label>ESTATUS</label><br>
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
								<label>TIPO DE LEAD</label><br>
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
								<label>PRECIO DE COTIZACIÓN:</label><br>
								<input type="text" name="quote" value="<?php echo $row['quote']; ?>">
							</li>

							<li>
								<label>PRECIO FINAL:</label><br>
								<input type="text" name="pay" value="<?php echo $row['pay']; ?>">
							</li>

							<li>
								<label>NUMERO DE FACTURA:</label><br>
								<input type="text" name="fac_no" value="<?php echo $row['fac_no']; ?>">
							</li>

							<li>
							</li>

							<!-- btns documents -->
							<li style="width:100%;">
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