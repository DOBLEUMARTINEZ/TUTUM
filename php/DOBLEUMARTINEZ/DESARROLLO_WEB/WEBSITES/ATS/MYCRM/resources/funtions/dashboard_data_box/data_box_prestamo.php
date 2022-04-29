<li class="back-<?=$area;?>" style="width:<?php if(area_now=='prestamos'){echo '100%';}else{echo '';}?>;" >

	<h2 onclick="window.location.href='./index.php?area=<?=$area;?>';" >
		<?=strtoupper($area)?>	
	</h2>
																	
	<ol>

		<li class="bg-color-meta" >
			<h3>Meta mensual</h3>
			<p>$ <?=number_format($goal,2)?> </p>
		</li>

		<li class="bg-color-leads">
			<h3>Total de empleados</h3>
			<p><?=$tot_lead?></p>
		</li>

		<li class="bg-color-leads">
			<h3>Empleados Activos</h3>
			<p><?=$quote?></p>
		</li>

		<li class="bg-color-leads">
			<h3>Empleados inactivos</h3>
			<p><?=$billing?></p>
		</li>

		<!-- colocación area -->
		<?php
		if(!empty($billing)||!empty($quote)){

			$cal=$quote/$tot_lead;
			$ave=$cal*100;

			$cal_2=$billing/$tot_lead;
			$ave_2=$cal_2*100;

			$porcent = $ave;
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