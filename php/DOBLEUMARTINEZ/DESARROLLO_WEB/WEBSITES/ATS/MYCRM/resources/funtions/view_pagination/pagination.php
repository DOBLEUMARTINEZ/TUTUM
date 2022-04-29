<div class="pagination-content">

	<!-- ARROW LEFT-->
	<?php
		if(isset($_GET['area'])){

	 		if (isset($_GET['num_page'])&&!empty($_GET['num_page'])) {

	 			if (isset($_GET['type'])&&!empty($_GET['type'])&&$_GET['type']='cliente frecuente') {

	 				if ($_GET['num_page']<=1) {

		 				?>
		 					<p onclick="window.location.href='index.php?area=<?=$_GET['area']?>&type=<?=$_GET['type']?>&num_page=1';"><i class="fas fa-caret-left"></i></p>
		 				<?php

		 			}else{

		 				?>
		 					<p onclick="window.location.href='index.php?area=<?=$_GET['area']?>&type=<?=$_GET['type']?>&num_page=<?=$_GET['num_page']-1?>';"><i class="fas fa-caret-left"></i></p>
		 				<?php

		 			}

	 			}else{

	 				if ($_GET['num_page']<=1) {

		 				?>
		 					<p onclick="window.location.href='index.php?area=<?=$_GET['area']?>&num_page=<?=$_GET['num_page']?>';"><i class="fas fa-caret-left"></i></p>
		 				<?php

		 			}else{

		 				?>
		 					<p onclick="window.location.href='index.php?area=<?=$_GET['area']?>&num_page=<?=$_GET['num_page']-1?>';"><i class="fas fa-caret-left"></i></p>
		 				<?php

		 			}

	 			}

	 		}else{

	 			if (isset($_GET['type'])&&!empty($_GET['type'])&&$_GET['type']='cliente frecuente') {
	 				?><p onclick="window.location.href='index.php?area=<?=$_GET['area']?>&type=<?=$_GET['type']?>';"><i class="fas fa-caret-left"></i></p><?php
	 			}else{
	 				?><p onclick="window.location.href='index.php?area=<?=$_GET['area']?>';"><i class="fas fa-caret-left"></i></p><?php
	 			}

	 		}

	 	}else{

	 	}
	?> 
	 	
	<!-- NUMERACION  -->
	<ul>
		<?php
			
			if ($_GET['area']=='prestamos') {
				//echo 'prestamos';

				$plaza = $_GET['plaza'];

				$sql = "SELECT * FROM lead_prestamo WHERE plaza = '$plaza' AND fecha BETWEEN '$fecha_mes_1' AND '$fecha_mes_2' ";
				$result = $con->query($sql);
				$num_leads = $result->num_rows;
  
				if ($result->num_rows > 0) {

					$num = $result->num_rows;
					$pages = ceil($num/10)+1;

					for ($i = 1; $i < $pages; $i++) {

						// NUMERO DE PAGINA ACTIVE
						if (isset($_GET['num_page'])) {

							if ($_GET['num_page']==$i) {

								$class_active = 'active_page';

							}else{
								$class_active = '';
							}

							?>

							<li class="<?=$class_active?>" onclick="window.location.href='index.php?area=<?=$_GET['area'];?>&plaza=<?=$plaza?>&num_page=<?=$i?>';" ><span><?=$i?></span>
							</li>

							<?php

						}else{

							if ($i==1) {
								$class_active = 'active_page';
							}else{
								$class_active = '';
							}

							?>

							<li class="<?=$class_active?>" onclick="window.location.href='index.php?area=<?=$_GET['area'];?>&plaza=<?=$plaza?>&num_page=<?=$i?>';" ><span><?=$i?></span></li>

							<?php

						}
						
					}
          			
        		}

			}else{

				// PAGINATION LEAD WALLET
				if (isset($_GET['type'])&&!empty($_GET['type'])&&$_GET['type']='cliente frecuente') {

					$sql = "SELECT * FROM lead_wallet ";

					$result = $con->query($sql);
					$num_leads = $result->num_rows;
	  
					if ($result->num_rows > 0) {

						$num = $result->num_rows;
						$pages = ceil($num/10);

						for ($i = 1; $i <= $pages; $i++) { 

							// NUMERO DE PAGINA
							if (isset($_GET['num_page'])) {

								if ($_GET['num_page']==$i) {

									$class_active = 'active_page';

								}else{
									$class_active = '';
								}

								?>

								<li class="<?=$class_active?>" onclick="window.location.href='index.php?area=<?=$_GET['area'];?>&type=<?=$_GET['type']?>&num_page=<?=$i?>';" ><span><?=$i?></span></li>

								<?php

							}else{

								if ($i==1) {
									$class_active = 'active_page';
								}else{
									$class_active = '';
								}

								?>

								<li class="<?=$class_active?>" onclick="window.location.href='index.php?area=<?=$_GET['area'];?>&type=<?=$_GET['type']?>&num_page=<?=$i?>';" ><span><?=$i?></span></li>

								<?php

							}

						} 	

	        }

				}else{

					// PAGINATION LEAD 
					$sql = "SELECT * FROM lead WHERE area='$area' AND date_l BETWEEN '$fecha_mes_1' AND '$fecha_mes_2' ";

					$result = $con->query($sql);
					$num_leads = $result->num_rows;
	  
					if ($result->num_rows > 0) {

						$num = $result->num_rows;
						$pages = ceil($num/10);

						for ($i = 1; $i <= $pages; $i++) { 

							// NUMERO DE PAGINA
							if (isset($_GET['num_page'])) {

								if ($_GET['num_page']==$i) {

									$class_active = 'active_page';

								}else{
									$class_active = '';
								}

								?>

								<li class="<?=$class_active?>" onclick="window.location.href='index.php?area=<?=$_GET['area'];?>&num_page=<?=$i?>';" ><span><?=$i?></span></li>

								<?php

							}else{

								if ($i==1) {
									$class_active = 'active_page';
								}else{
									$class_active = '';
								}

								?>

								<li class="<?=$class_active?>" onclick="window.location.href='index.php?area=<?=$_GET['area'];?>&num_page=<?=$i?>';" ><span><?=$i?></span></li>

								<?php

							}

						}	
	        		}

				}
				
			}

		?>
	</ul>

	<!-- ARROW RIGTH -->
	<?php
		if(isset($_GET['area'])){

	 		if (isset($_GET['num_page'])&&!empty($_GET['num_page'])) {

	 			if (isset($_GET['type'])&&!empty($_GET['type'])&&$_GET['type']='cliente frecuente') {

	 				if ($_GET['num_page']<=1) {

		 				?>
		 					<p onclick="window.location.href='index.php?area=<?=$_GET['area']?>&type=<?=$_GET['type']?>&num_page=2';"><i class="fas fa-caret-right"></i></p>
		 				<?php

		 			}else{

		 				?>
		 					<p onclick="window.location.href='index.php?area=<?=$_GET['area']?>&type=<?=$_GET['type']?>&num_page=<?=$_GET['num_page']+1?>';"><i class="fas fa-caret-right"></i></p>
		 				<?php

		 			}

	 			}else{

	 				if ($_GET['num_page']<=1) {

		 				?>
		 					<p onclick="window.location.href='index.php?area=<?=$_GET['area']?>&num_page=2';"><i class="fas fa-caret-right"></i></p>
		 				<?php

		 			}else{

		 				?>
		 					<p onclick="window.location.href='index.php?area=<?=$_GET['area']?>&num_page=<?=$_GET['num_page']+1?>';"><i class="fas fa-caret-right"></i></p>
		 				<?php

		 			}

	 			}

	 		}else{

	 			if (isset($_GET['type'])&&!empty($_GET['type'])&&$_GET['type']='cliente frecuente') {
	 				?><p onclick="window.location.href='index.php?area=<?=$_GET['area']?>&type=<?=$_GET['type']?>&num_page=2';"><i class="fas fa-caret-right"></i></p><?php
	 			}else{
	 				?><p onclick="window.location.href='index.php?area=<?=$_GET['area']?>&num_page=2';"><i class="fas fa-caret-right"></i></p><?php
	 			}

	 		}

	 	}else{

	 	}
	?>

</div>