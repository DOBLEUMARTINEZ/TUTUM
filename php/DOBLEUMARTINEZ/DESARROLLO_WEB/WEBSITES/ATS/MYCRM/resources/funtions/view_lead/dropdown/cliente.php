<div class="dropdown_lead dropdown_lead_<?php echo $id_dropdown; ?>" style="display: none;" >

	<form action="./resources/action.php" method="POST" enctype="multipart/form-data" style="background-color:<?=$div_color?>;">

		<!-- info lead -->
		<div>
			<h3>INFORMACIÓN GENERAL </h3>

			<ul>

				<li>
					<label>ID:</label>
					<input type="text" name="id" value="<?php echo $row['id'];?>">
				</li>

				<li>
					<label>NOMBREE:</label>
					<input type="text" name="name" value="<?php echo $row['name'];?>" >
				</li>

				<li style="width: 98%;">
					<label>DETALLE:</label>
					<input type="text" name="detail" value="<?php echo $row['detail'];?>">
				</li>


			</ul>
		</div>

		<!-- tracing lead -->
		<div>
			
			<h3>IMAGEN</h3>

			<ul>

				<!-- view gallery -->
				<li id="gallery-box"  style="width: 98%; text-align: center;">
					<img width="60%;" src="<?php echo $row['logo'];?>">
					<input type="text" name="logo_1" value="<?php echo $row['logo'];?>">
					<input type="file" name="logo">
				</li>

				<hr>

				<li class="btns-action" >
					<span style="background: #4caf50;" >
						<button name="btn_action" value="blog" >ACTUALIZAR</button>
					</span>
					<input type="text" name="action" value="update">
				</li>

			</ul>
		</div>

		<!-- datos de regreso --> 
		<?php if (isset($_GET['btn_filter'])) {?>

			<input type="text" name="btn_filter" value="<?=$_GET['btn_filter']?>" style="display: none;">
			<input type="text" name="pharner_filter" value="<?=$_GET['pharner']?>" style="display: none;">
			<input type="text" name="status_filter" value="<?=$_GET['status']?>" style="display: none;">
			<input type="text" name="type_lead_filter" value="<?=$_GET['type_lead']?>" style="display: none;">
			<input type="text" name="date_1_filter" value="<?=$_GET['date_1']?>" style="display: none;">
			<input type="text" name="date_2_filter" value="<?=$_GET['date_2']?>" style="display: none;">

		<?php }elseif(isset($_GET['search_bar'])){ ?>

			<input type="text" name="search_bar" value="<?=$_GET['search_bar']?>" style="display: none;">

		<?php } ?>

	</form>

</div>
