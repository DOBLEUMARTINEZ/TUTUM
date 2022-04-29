<div class="dropdown_lead dropdown_lead_<?php echo $id_dropdown; ?>" style="display: none;" >

	<form action="./resources/action.php" method="POST" enctype="multipart/form-data" style="background-color:<?=$div_color?>;">

		<!-- info lead -->
		<div>
			<h3>INFORMACIÓN GENERAL </h3>

			<!--<input type="text" name="id" value="<?php echo $row['id'];?>" style="display: none;">
			<input type="text" name="month" value="<?=date('F')?>" style="display: none;">
			<input type="text" name="area" value="<?php echo $row['area'];?>" style="display: none;">
			<input type="date" name="date_l"  value="<?php echo $row['date_l'];?>" style="display: none;">
			<input type="time" name="time_l" value="<?php echo $row['time_l'];?>" style="display: none;">
			<input type="text" name="origin"  value="<?php echo $row['origin'];?>" style="display: none;">
			<input type="text" name="from_l"  value="<?php echo $row['from_l'];?>" style="display: none;">
			<input type="text" name="fac_no" value="<?php echo $row['fac_no']; ?>" style="display: none;">
			<input type="text" name="pharner" value="<?php echo $row['pharner']; ?>" style="display: none;">-->

			<ul>

				<li>
					<label>ID:</label>
					<input type="text" name="id" value="<?php echo $row['id'];?>">
				</li>

				<li>
					<label>AUTOR:</label>
					<input type="text" name="autor" value="<?php echo $row['autor'];?>" >
				</li>

				<li style="width: 98%;">
					<label>TITULO:</label>
					<input type="text" name="title" value="<?php echo $row['title'];?>">
				</li>

				<li style="width: 98%;">
					<label>SUBTITULO:</label>
					<input type="text" name="sub_title" value="<?php echo $row['sub_title'];?>">
				</li>

				<li></li>

				

				<li style="width: 98%;">
					<label>CONTENIDO:</label>
					<textarea  name="description" style="height: 80px;"><?php echo $row['description'];?></textarea>
				</li>

			</ul>
		</div>

		<!-- tracing lead -->
		<div>
			
			<h3>IMAGEN</h3>

			<ul>

				<!-- view gallery -->
				<li id="gallery-box"  style="width: 98%; text-align: center;">
					<img width="60%;" src="<?php echo $row['img'];?>">
					<input type="text" name="img_1" value="<?php echo $row['img'];?>">
					<input type="file" name="image">
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
