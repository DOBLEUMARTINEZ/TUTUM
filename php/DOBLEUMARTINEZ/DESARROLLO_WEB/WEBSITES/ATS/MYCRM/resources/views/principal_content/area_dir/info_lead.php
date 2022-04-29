<div>

	<!-- ACTION DROPDOWN -->
	<ol>

		<!-- NUMERECION  DE FILAS -->
		<li style="width: 3%; background-color:<?=$div_color?>;" >
			<p style="text-align: center;">
				<?php 
					echo $id_dropdown;
				?>
			</p>
		</li>

		<li style="width: 5%; background-color:<?=$div_color?>;" >
			<span>CLAVE</span><p><?php echo $row['id'];?></p>
		</li>

		<li style="width: 22%; background-color:<?=$div_color?>;" >
			<span>NOMBRE</span><p><?php echo $row['name'];?></p>
		</li>
						
		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>FECHA:</span>
			<p><?php echo $row['date_l'];?></p>
		</li>

		<li style="width: 5%; background-color:<?=$div_color?>;" >
			<span>HORA:</span>
			<p><?php echo $row['time_l'];?></p>
		</li>

		<!-- status lead -->
		<?php

			$color_status="#0000";

		 	if (isset($row['status'])&&!empty($row['status'])) {

		 	 	switch ($row['status']) {

		 	 		case 'nuevo':
		 	 			$color_status="#009aff4d";
		 	 			break;
		 	 		case 'pendiente':
		 	 			$color_status="#ff71008f";
		 	 			break;
		 	 		case 'negociacion':
		 	 			$color_status="#9e9e9e4d";
		 	 			break;
		 	 		case 'finalizado':
		 	 			$color_status="#4caf509e";
		 	 			break;
		 	 		case 'cancelado':
		 	 			$color_status="#f443368a";
		 	 			break;
		 	 			
		 	 		default:
		 	 			$color_status="#0000";
		 	 			break;
		 	 	}

		 	}else{
		 	 	$color_status="#0000";
		 	}
		?>
		<li style="width: 10%; background-color:<?=$color_status?>;">
			<span>STATUS</span>
			<p><?php echo $row['status'];?></p>
		</li>

		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>AREA:</span>
			<p><?php echo $row['area'];?></p>
		</li>

		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>EJECUTIVO:</span>
			<p><?php echo $row['pharner'];?></p>
		</li>

		<li style="width: 30%; background-color:<?=$div_color?>;" >
			<span>PAGINA DE ORIGEN:</span>
			<p><?php echo $row['origin'];?><p>
		</li>

		<!-- lead tools -->		
		<?php
			// master tools
			if (!empty($privilege)&&$privilege=='master') {

				//echo $privilege;
				?>

				<li style="width: 2.5%; text-align: center; background-color:<?=$div_color?>;" >
					<p><i onclick="dropdown_lead(<?php echo $id_dropdown.','.$all_leads;?>)" class="fas fa-pencil-alt"></i></p>
				</li>

				<li style="width: 2.5%; text-align: center;border:none; background-color:<?=$div_color?>;" >
					<p><i onclick="window.location.href='./resources/action.php?area=<?php echo $_GET['area']; ?>&btn_action=delete_lead&id=<?php echo $row['id']?>';" class="fas fa-trash-alt"></i></p>
				</li>

				<?php

			}else{

				?>

				<li style="width: 2.5%; text-align: center;border:none; background-color:<?=$div_color?>;" >
					<p><i onclick="dropdown_lead(<?php echo $id_dropdown.','.$all_leads;?>);" class="fas fa-eye"></i></p>
				</li>

				<?php
			}
		?>

	</ol>

	<?php
		if ($area == 'rysese') {		
			// DIV INFO LEAD DROPDOWN RYSESE
        	include('info_lead_dropdown/lead_dropdown_rysese.php');
		}
		elseif ($area == 'autos') {
        	include('info_lead_dropdown/lead_dropdown_autos.php');
		}
		else{
			// DIV INFO LEAD DROPDOWN 
        include('info_lead_dropdown/lead_dropdown.php');
		}
	?>
					
</div>