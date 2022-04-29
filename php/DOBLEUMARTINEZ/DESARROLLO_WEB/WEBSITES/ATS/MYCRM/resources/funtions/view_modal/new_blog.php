<!-- NEW LEAD MODAL -->
<div class="box-info-modal new-blog">
	<h1>AGREGAR NUEVA ENTRADA DEL BLOG</h1>
	<form name="modal_new-lead-limpieza" action="./resources/action.php" method="POST" enctype="multipart/form-data" class="form-new-lead" >

		<input type="text" name="cliente" value="cliente" style="display: none;">
		<input type="text" name="pharner" value="<?=$_SESSION['user'];?>" style="display: none;">
		<input type="text" name="date_l" value="<?=today;?>" style="display: none;">
		<input type="text" name="time_l" value="<?=time_now;?>" style="display: none;">
		<input type="text" name="pay" value="0" style="display: none;">
		<input type="text" name="fac_no" value="0" style="display: none;">
		<input type="text" name="quote" value="0" style="display: none;">

		<hr>

		<ol>

			<li style="width: 100%;">
				<label>Autor</label><br>
				<input type="text" name="autor" value="<?=$_SESSION['name_u'];?>">
			</li>

			<li style="width: 100%;" >
				<label>Titulo de entrada</label><br>
				<input type="text" name="title_entrada">
			</li>

			<li style="width: 100%;" >
				<label>Subtitulo</label><br>
				<input type="text" name="subtitle">
			</li>

			<li style="width: 100%;" >
				<label>Descripción del articulo</label><br>
				<textarea name="decription"></textarea>
			</li>
			
		</ol>

		<ol>

			<li style="width: 100%;">
				<label>Imagen</label><br>
				<input type="file" name="img_entrada">
			</li>

		</ol>

		<hr>

		<ul style="justify-content:center;">

			<li>
				<p onclick="closed_modal_lead();" style="background-color: #F44336;">cancelar</p>
			</li>

			<li>
				<p style="background-color: #007eba;">
					<button type="sumbit" name="btn_action" value="blog" >Aceptar</button>
				</p>
			</li>
		</ul>

	</form>

</div>