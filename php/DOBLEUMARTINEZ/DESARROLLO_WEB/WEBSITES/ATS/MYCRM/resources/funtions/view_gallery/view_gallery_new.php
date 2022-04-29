<?php 

	for ($i=0; $i < 5; $i++) { 

		 if ($i==0) {
		 	?>

			<div id="box-img-gallery-<?=$i?>" >

				<img id="gallery-<?=$i;?>" alt="your image" src="./images/icon/icon-texture.png" />

				<input type="file" name="file-<?=$i;?>" id="file-<?=$i;?>" class="inputfile inputfile-1" data-multiple-caption="{count} archivos seleccionados" multiple onchange="document.getElementById('gallery-<?=$i;?>').src = window.URL.createObjectURL(this.files[0])">

				<label for="file-<?=$i;?>">
				   	<i id="icon-file-add-<?=$i;?>" class="fas fa-plus"></i>
				   	<i id="icon-file-update-<?=$i;?>" class="fas fa-sync-alt" style="display: none;"></i>
				</label>

			</div>

			<?php
		 }else{

		 	?>

			<div id="box-img-gallery-<?=$i?>" style="display: none;" >

				<img id="gallery-<?=$i;?>" alt="your image" src="./images/icon/icon-texture.png" />

				<input type="file" name="file-<?=$i;?>" id="file-<?=$i;?>" class="inputfile inputfile-1" data-multiple-caption="{count} archivos seleccionados" multiple onchange="document.getElementById('gallery-<?=$i;?>').src = window.URL.createObjectURL(this.files[0]);">

				<label for="file-<?=$i;?>">
				   	<i id="icon-file-add-<?=$i;?>" class="fas fa-plus"></i>
				   	<i id="icon-file-update-<?=$i;?>" class="fas fa-sync-alt" style="display: none;"></i>
				</label>

			</div>

			<?php

		 }

		
	}

?>
