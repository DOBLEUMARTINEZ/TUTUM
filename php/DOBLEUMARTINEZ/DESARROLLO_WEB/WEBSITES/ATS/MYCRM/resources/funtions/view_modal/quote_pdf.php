
<div class="box-info-modal my-new-pdf-<?php echo $row['id'];?>">

						<h1>Nueva Cotización </h1>
						<form action="./resources/mycot.php" method="POST" enctype="multipart/form-data" class="form-new-lead" >

							<hr>

							<ol>
								<input type="text" name="id" value="<?php echo $row['id'];?>" 
								style="display: none;">
								<input type="text" name="month" value="<?=$_GET['month'];?>" 
								style="display: none;">
								<input type="text" name="area" value="<?php echo $row['area']; ?>"
								style="display: none;">

								<li style="width: 100%;">
								<label>Nombre del cliente</label><br>
								<input type="text" name="cliente" value="<?php echo $row['name'];?>">
								</li>

								<li style="width: 50%;" >
									<label>Dirección</label><br>
									<input type="text" name="direccion" value="<?php echo $row['address']?>">
								</li>

								<li style="width: 50%;" >
									<label>Servicio</label><br>
									<select id="services-limp" name="servicio" >
										<option value="<?php echo $row['msg']?>"><?php echo $row['msg']?></option>
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

								<li style="width: 100%">
									<label>Descripción de principal </label><br>
									<textarea style="height: 80px;" name="description"
									>Atendiendo su solicitud de servicio nos presentamos como la mejor opción para llevar a cabo la limpieza en sus instalaciones.
									</textarea> 
								</li>	

								<li class="other_cot" style="width: 100%; display: block;">
									<label id="check-w"><h3 style="line-height: normal;">El esquemas de trabajo será el siguiente:</h3></label>

									<label id="check-w"><input type="checkbox" name="esquema[]" id="opc-1" value="Retiro de residuos(basura, polvo)"> Retiro de residuos(basura, polvo)</label><br>
									<label id="check-w"><input type="checkbox" name="esquema[]" id="opc-2" value="Limpieza de puertas"> Limpieza de puertas</label><br>
									<label id="check-w"><input type="checkbox" name="esquema[]" id="opc-3" value="Limpieza de muebles"> Limpieza de muebles</label><br>
									<label id="check-w"><input type="checkbox" name="esquema[]" id="opc-4" value="Limpieza de paredes"> Limpieza de paredes</label><br>
									<label id="check-w"><input type="checkbox" name="esquema[]" id="opc-5" value="Limpieza de ventanas (interior no mayor a 2m)"> Limpieza de ventanas (interior no mayor a 2m)</label>
									<br>
								</li>


								<li id="expec-serv" style="width: 100%; display: none;" >
									<label>Especificaciones de servicio</label><br>
									<textarea style="height: 40px;" name="especificaciones" ></textarea>
								</li>
							


							</ol>

							<ol>



								<li style="width: 40%;" >
									<label>Cantidad</label><br>
									<input type="text" name="cantidad">
								</li>
								<li style="width: 10%;" >
								</li>

								<li style="width: 50%;" >
									<label>Unidad</label><br>
									<select name="unidad">
										<option value="SERVICIO"> Servicio</option>
										<option value="SESIÓN"> Sesión</option>
										<option value="EVENTO"> Evento</option>
									</select>
								</li>




								<li style="width: 100%;" >
									<label>Precio Unitario</label><br>
									<input type="text" name="p_unit" value="<?php echo $row['quote'] ?>" style="text-align: end;">
								</li>

								<li style="width: 100%">
									<label>Nota</label><br>
									<textarea style="height: 80px;" name="nota"></textarea> 
								</li>

								<li class="other_cot" style="width: 100%; display: block;">

									<label id="check-w"><h3 style="line-height: normal;">Lugares donde se prestará el servicio integral:</h3></label>
									
									<label id="check-w"><input type="checkbox" name="lugares[]" id="ops-1" value="Sala, recamaras"> Sala, recamaras</label><br>
									<label id="check-w"><input type="checkbox" name="lugares[]" id="ops-2" value="Cocina"> Cocina</label><br>
									<label id="check-w"><input type="checkbox" name="lugares[]" id="ops-3" value="Comedor"> Comedor</label><br>
									<label id="check-w"><input type="checkbox" name="lugares[]" id="ops-4" value="Sanitarios"> Sanitarios</label><br>
									<label id="check-w" ><input type="checkbox" name="lugares[]" id="ops-5" value="Terrazas y centro de labado"> Terrazas y centro de labado</label>

								</li>

							</ol>

							<hr>

							<ul style="justify-content: center;">
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

<script type="text/javascript">
		// SELECT SERVICE LIMPIEZA
	var select_11 = document.getElementById('services-limp');

	select_11.addEventListener('change',function(){

		var selectedOption = this.options[select_11.selectedIndex];
		console.log(selectedOption.value + ': ' + selectedOption.text);

		switch (selectedOption.text) {

			case 'Fumigación':
				$('#expec-serv').css('display','block');
				$('.other_cot').css('display','none');
				break;

			case 'Sanitización':
				$('#expec-serv').css('display','block');
				$('.other_cot').css('display','none');
				break;

			case 'Jardinería':
				$('#expec-serv').css('display','block');
				$('.other_cot').css('display','none');
				break;

			default:
				$('#expec-serv').css('display','none');
				$('.other_cot').css('display','block');
				break;
			}

	});
</script>