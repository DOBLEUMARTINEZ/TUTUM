<!-- dashboard -->
<div class="container-dashboard">
	<?php 
		if (isset($_GET['origin'])) {
			//echo "ORIGIN=TRUE";
			dashboard($_GET['origin']); // CONTENT ORIGIN
		}else{
			//echo "ORIGIN=FALSE";
			dashboard(); // PRINCIPAL CONTENT
		}
	?>
</div class="container-dashboard"> 
