<div class="dropdown_lead dropdown_lead_<?php echo $id_dropdown; ?>" style="display: none; background-color: #0000;" >

	<form action="./resources/action.php" method="POST" enctype="multipart/form-data">

		<!-- info lead -->
		<div>
			<h3>INFORMACIÓN DE PRODUCTO</h3>
			<ul>

				<li>
					<label>CLAVE:</label><br>
					<input type="text" name="id" value="<?php echo $row['id'];?>" style="display: none;" >
					<input type="text" value="<?php echo $row['id'];?>" disabled>
				</li>

				<li>
					<label>CODIGO:</label><br>
					<input type="text" name="phone" value="<?php echo $row['code'];?>" >
				</li>

				<li style="width: 98%;">
					<label>NOMBRE:</label><br>
					<input type="text" name="name" value="<?php echo $row['name'];?>">
				</li>

				<li>
					<label>CATEGORIA:</label><br>
					<input type="text" name="category" value="<?php echo strtoupper($row['category']);?>">
				</li>

				<li>
					<label>PRECIO:</label><br>
					<input type="text" name="category" value="<?php echo strtoupper($row['price']);?>">
				</li>

				<li style="width: 98%;">
					<label>DETALLES:</label>
					<textarea  name="comments" style="height: 80px;"><?php echo $row['detail'];?></textarea>
				</li>

			</ul>

		</div>

		<div>
			<h3>GALERIA</h3>
			<ul>
				<!-- GALLERIA DE PRODUCTO -->
				<li id="gallery-box"  style="width: 98%">
					<div class="gallery-place" style="margin-top: 5px;">
						
					</div>
				</li>

				<li style="width: 98%;">
					<label>NUEVO COMENTARIO:</label>
					<textarea  name="comments" style="height: 80px;"></textarea>
				</li>

				<li class="btns-action" >
					<span onclick="modal_lead('record',<?php echo $row['id'];?>);">COMENTARIOS</span>
					<span style="display: none;" onclick="modal_lead('mynewpdf',<?php echo $row['id'];?>);">COTIZACION</span>
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