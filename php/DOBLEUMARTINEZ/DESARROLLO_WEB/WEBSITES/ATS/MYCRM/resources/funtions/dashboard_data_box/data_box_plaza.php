<li class="back-<?=$area?>" onclick="window.location.href='./index.php?area=<?=$area?>&plaza=<?=$plaza?>';">

			<h2><?php echo ucfirst($plaza);?></h2>
																		
			<ol>

				<li class="bg-color-leads">
					<h3>Total de empleados</h3>
					<p><?=$tot_lead?></p>
				</li>

				<li class="bg-color-leads">
					<h3>Empleados activos</h3>
					<p><?=$active?></p>
				</li>

				<li class="bg-color-leads">
					<h3>Empleados inactivos</h3>
					<p><?=$inactive?></p>
				</li>


				<!-- Empleados area -->
				<?php
				if($tot_lead>0){

					$cal=$active/$tot_lead;
					$ave=$cal*100;
					$porcent = $ave;

					$cal_2=$inactive/$tot_lead;
					$ave_2=$cal_2*100;
					$porcent_2 = $ave_2;

					$bar_satus_color = "#8bc34acf";
					$bar_satus_color_2 = "#f44336ab";
					?>

					<li class="bg-color-porcent" style="width: <?=$porcent;?>%; background-color: <?=$bar_satus_color;?>;">
						<h3>Activos</h3>
						<?php echo'<p> '.number_format($porcent,0).'% </p>'?>
					</li>

					<li class="bg-color-porcent" style="width: <?=$porcent_2;?>%; background-color: <?=$bar_satus_color_2;?>;">
						<h3>Inactivos</h3>
						<?php echo'<p> '.number_format($porcent_2,0).'% </p>'?>
					</li>

					<?php												
				}else{
					//echo $row['goal']; 

				}
				?>

			</ol>

		</li>