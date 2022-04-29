<div>

	<!-- ACTION DROPDOWN -->
	<ol>

		<!-- NUMERECION  DE FILAS -->
		<li style="width: 5%; background-color:<?=$div_color?>;" >
			<p style="text-align: center;"><?=$id_dropdown;?></p>
		</li>

		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>CLAVE</span><p><?=$row['id'];?></p>
		</li>

		<li style="width: 25%; background-color:<?=$div_color?>;" >
			<span>NOMBRE</span><p><?php echo $row['name'];?></p>
		</li>

		<li style="width: 20%; background-color:<?=service_color($row['area'],$row['msg'])?>;" >
			<span>SERVICIO:</span>
			<p><?php echo $row['msg'];?></p>
		</li>
						
		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>FECHA:</span>
			<p><?php echo $row['date_l'];?></p>
		</li>

		<li style="width: 15%; background-color:<?=$div_color?>;" >
			<span>EJECUTIVO:</span>
			<p><?php echo $row['pharner'];?></p>
		</li>

		<li style="width: 10%; background-color:<?=status_color($row['area'],$row['status'])?>;">
			<span>STATUS</span>
			<p><?php echo $row['status'];?></p>
		</li>

		<!-- lead tools -->		
		<?php
			// master tools
			if (priv_now=='master') {

				//echo $privilege;
				?>

				<li style="width: 2.5%; text-align: center; background-color:<?=$div_color?>;" >
					<p><i onclick="dropdown_lead(<?php echo $id_dropdown.','.$all_leads;?>)" class="fas fa-pencil-alt"></i></p>
				</li>

				<li style="width: 2.5%; text-align: center;border:none; background-color:<?=$div_color?>;" >
					<p><i onclick="window.location.href='./resources/action.php?area=<?php echo $_GET['area']; ?>&month=<?=$_GET['month']?>&btn_action=delete_lead&id=<?php echo $row['id']?>';" class="fas fa-trash-alt"></i></p>
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

	<?php include('dropdown/lead_rysese.php'); // DIV INFO LEAD RYSESE DROPDOWN ?>
					
</div>