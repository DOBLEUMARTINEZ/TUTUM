<div class="modal-lead">
	<div class="content-modal-lead">

		<span onclick="closed_modal_lead();" class="closed_modal_lead">
			<i class="fas fa-times"></i>
		</span>

		<?php 
			if (isset($_GET['origin'])) {
				modal_new_lead($_GET['origin']); // MODAL NUEVO REGISTRO CON CATEGORIA
			}else{
				modal_new_lead(); // MODAL NUEVO REGISTRO
			}
			
		?>

	</div>
</div>

<script type="text/javascript">


	// SELECT SERVICE LIMPIEZA
	var select = document.getElementById('service-limpieza');

	select.addEventListener('change',function(){

		var selectedOption = this.options[select.selectedIndex];
		console.log(selectedOption.value + ': ' + selectedOption.text);

		switch (selectedOption.text) {

			case 'Productos':
				$('#product-lipieza').css('display','block');
				$('#gallery-box').css('display','none');
				break;

			default:
				$('#product-lipieza').css('display','none');
				$('#gallery-box').css('display','block');
				break;
			}

	});

	
	// GALLELRY NEW MODAL LIMPIEZA
	
		var select_0 = document.getElementById('file-0');
		var select_1 = document.getElementById('file-1');
		var select_2 = document.getElementById('file-2');
		var select_3 = document.getElementById('file-3');

		select_0.addEventListener('change',function(){

			var file = document.getElementById("file-0");

			file_src = file.value;

			//alert(file_src);

			$('#label-file-0').css('background','#0000');
			$('#icon-file-update-0').css('display','block');
			$('#icon-file-add-0').css('display','none');

			$('#box-img-gallery-1').css('display','flex');


		});

		select_1.addEventListener('change',function(){

			var file = document.getElementById("file-1");

			file_src = file.value;

			//alert(file_src);

			$('#label-file-1').css('background','#0000');
			$('#icon-file-update-1').css('display','block');
			$('#icon-file-add-1').css('display','none');

			$('#box-img-gallery-2').css('display','flex');

		});

		select_2.addEventListener('change',function(){

			var file = document.getElementById("file-2");

			file_src = file.value;

			//alert(file_src);

			$('#label-file-2').css('background','#0000');
			$('#icon-file-update-2').css('display','block');
			$('#icon-file-add-2').css('display','none');

			$('#box-img-gallery-3').css('display','flex');

		});

		select_3.addEventListener('change',function(){

			var file = document.getElementById("file-3");

			file_src = file.value;

			//alert(file_src);

			$('#label-file-3').css('background','#0000');
			$('#icon-file-update-3').css('display','block');
			$('#icon-file-add-3').css('display','none');

			$('#box-img-gallery-4').css('display','flex');

		});

</script>