<div class="tools-menu">

	<br>
	<br>

	<ol>
		
		<!-- search bar content -->
			<li>
				<form class="search-bar" method="GET" action="./index.php" >
					<input type="text" name="area" value="<?=$_GET['area'];?>" style="display: none;">

					<?php 

					if (isset($_GET['plaza'])) {
						?>
						<input type="text" name="plaza" value="<?=$_GET['plaza'];?>" style="display: none;">
						<?php
					}

					?>
					
					<input type="text" name="search_bar" placeholder="Busca">
					<button><i class="fas fa-search"></i></button>
				</form>
			</li>

		<!-- button filters -->
			<li>
				<button onclick="filter_menu();">
					Filtrar
				</button>
			</li>

		<!-- new lead -->
			<?php 

				if ((isset($_GET['area'])&&!empty($_GET['area']))&&$_GET['area']=='prestamos') 
				{
					$modal_lead = 'new_lead_pres';
				}elseif ((isset($_GET['area'])&&!empty($_GET['area']))&&$_GET['area']=='autos') {

					$modal_lead = 'new_lead_autos';
				}
				else{
					$modal_lead = 'new_lead';
				}

			?>
			<li>
				<button onclick="modal_lead('<?=$modal_lead;?>',1);">
					Agregar nuevo lead
				</button>
			</li>

		<!-- upload excel -->
			<li style="display: none;">
				<button onclick="modal_lead('new-lead-excel',1);">
					Subir Excel <i class="far fa-file-excel"></i>
				</button>
			</li>

		<!-- download excel -->
			<li style="display: none;">
				<button onclick="window.location.href=
					'<?php

					if (isset($_GET['plaza'])) {
						echo donwload_xlsx($_GET['area'],$_GET['plaza']);
					}elseif(isset($_GET['type'])){
						echo donwload_xlsx($_GET['area'],$_GET['type']);
					}else{
						echo donwload_xlsx($_GET['area']);
					}

					?>';">
					Descargar excel <i class="far fa-file-excel"></i>
				</button>
			</li>


	</ol>

	<br>

	<span class="filter-menu" style="display: none;">
		<ol class="filter_menu">
			<li>
				<form method="GET" action="./index.php" >
					<ul>

						<li >

							<label>Ejecutivo</label>

							<input type="text" name="area" value="<?=$_GET['area']?>" style="display: none;">

							<?php
							if (isset($_GET['plaza'])) {
								?>
								<input type="text" name="plaza" value="<?=$_GET['plaza']?>" style="display: none;">
								<?php
							}
							?>

							<select name="pharner" >
								<option value="false">-- selecciona --</option>
								<?php select_pharner($_GET['area']); ?>
							</select>

						</li>

						<li >
							<label>Status</label>
							<select name="status">
								<option value="false">-- selecciona --</option>
								<?php select_status($_GET['area']); ?>
							</select>
						</li>

						<li>
							<label>Tipo de lead</label>
							<select name="type_lead">
								<option value="false">-- selecciona --</option>
								<?php select_type($_GET['area']); ?>
							</select>
						</li>

						<li>
						<?php // SERVICIO LIMPIEZA

							if ($_GET['area']=='limpieza') {

								?>
								
									<label>Servicio</label>
									<select name="type_serv">
										<option value="false">-- selecciona--</option>
										<?php select_service($_GET['area']);?>
									</select>
								
								<?php
								
							}

						?>
						</li>

						<li >
							<label>Mes</label>
							<input type="date" name="date_1" style="display: none;">

							<select name="type_serv">
								<option value="false">-- selecciona--</option>
								<?php select_month($_GET['area']);?>
							</select>

						</li>

						<li>
							<label>Hasta que fecha</label>
							<input type="date" name="date_2">
						</li >


					</ul>

					<button type="submit" name="btn_filter" value="true"><i class="fas fa-search"></i></button>

				</form>
			</li>
		</ol>
		<br>
	</span>
	
</div>
