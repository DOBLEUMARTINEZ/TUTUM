<h1 class="title-dashboard" >
	<?php 
	if (isset($_GET['area'])&&!empty($_GET['area'])) {

		if(isset($_GET['type'])){

			echo '<span>'.strtoupper($_GET['type']).'</span>';

		}else{

			if (isset($_GET['month'])) {

				echo '<span>'.strtoupper($_GET['area']).' / '.strtoupper($_GET['month']).' / 2021</span>';

			}else{

				echo '<span>'.strtoupper($_GET['area']).' 2021</span>';

			}
			
		}
			
	}else{

		echo '<span> DASHBOARD '.strtoupper(area_now).' 2021</span>';
	}

	?>
</h1>