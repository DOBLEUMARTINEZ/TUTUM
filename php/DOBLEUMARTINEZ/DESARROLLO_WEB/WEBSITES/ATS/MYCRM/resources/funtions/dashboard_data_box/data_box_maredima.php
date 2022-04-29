<li class="back-<?=$area;?>" style="width: 100%;" >

	<h2 onclick="window.location.href='./#index.php?area=<?=$area;?>';" >
		<?=strtoupper($area)?>	
	</h2>
																
	<ol>

		<li class="bg-color-meta" >
			<h3>Meta mensual</h3>
			<p>$ <?=number_format($goal,2)?></p>
		</li>

		<li class="bg-color-leads">
			<h3>Total de leads</h3>
			<p><?=$tot_lead?></p>
		</li>

		<li class="bg-color-leads">
			<h3>Inversion Google ads</h3>
			<p>$ <?=number_format($ads,2)?></p>
		</li>


		<li class="bg-color-sell">
			<h3>Cotizaciones Google ads</h3>
			<p>$ <?=number_format($quote_google_ads,2)?></p>
		</li>

		<li class="bg-color-billing">
			<h3>Total colocado google</h3>
			<p>$ <?=number_format($google_ads,2)?></p>
		</li>

		<li class="bg-color-sell">
			<h3>Cotizaciones</h3>
			<p>$ <?=number_format($quote,2)?></p>
		</li>

		<li class="bg-color-sell">
			<h3>Clientes frecuentes</h3>
			<p>$ <?=number_format($lead_wallet,2)?></p>
		</li>

		<li class="bg-color-billing">
			<h3>Total colocado</h3>
			<p>$ <?=number_format($billing,2)?></p>
		</li>

		<li class="bg-color-sell">
			<h3>Pendiente</h3>
			<p>$  <?=number_format(($goal-$billing),2)?></p>
		</li>

		<!-- colocación area -->
		<?php
			if(!empty($billing)){

				$cal=$billing/$goal;
				$ave=$cal*100;

				$porcent = $ave;

				$bar_satus_color = "#0000";

				// color status porcent bar
				if ($porcent>=0&&$porcent<=30) {
					$bar_satus_color = "#f44336ab";
				}elseif ($porcent>30&&$porcent<60) {
					$bar_satus_color = "#2196f3ab";
				}elseif ($porcent>=60&&$porcent<=100) {
					$bar_satus_color = "#8bc34acf";
				}elseif($porcent>100){
					$porcent = 100;
					$bar_satus_color = "#8bc34acf";
				}
							    
				?>

				<li class="bg-color-porcent" style="width: <?=$porcent;?>%; background-color: <?=$bar_satus_color;?>;">
					<h3>Colocación </h3>
					<?php echo'<p> '.number_format($porcent,0).'% </p>'?>
				</li>

				<?php
																			
			}else{
				//echo $row['goal']; 
			}
															
		?>

	</ol>

</li>