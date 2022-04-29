<div class="box-info-modal info-<?=str_replace('_', '-', $type)?>-<?php echo $row['id'];?>">

	<h1><?php echo $row['name'];?></h1>
	<div style="width: 100%;display: flex;">
		<p><strong>ID:</strong><br><?php echo $row['id'];?></p>
		<p><strong>Nombre:</strong><br><?php echo $row['name'];?></p>
		<p><strong>Area:</strong><br><?php echo $row['area'];?></p>
	</div>

	<iframe src="<?php echo $row['pdf'];?>" scrolling="no" style="width: 100%; height: 550px;" ></iframe>

</div>
