<div class="title-dashboard" >
	<h1 >
		<?php 
		if (isset($_GET['origin'])&&!empty($_GET['origin'])) {

			echo '<span> ATS / '.ucwords($_GET['origin']).'</span>';

		}else{

			echo '<span> Dashboard  '.'ATS'.'</span>';
		}

		?>
	</h1>
</div>
