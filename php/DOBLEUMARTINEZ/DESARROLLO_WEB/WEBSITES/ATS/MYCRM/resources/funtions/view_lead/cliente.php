<div>

	<ol>

		<!-- NUMERECION  DE FILAS -->
		<li style="width: 5%; background-color:<?=$div_color?>;">
			<p style="text-align: center;"><?=$id_dropdown;?></p>
		</li>

		<li style="width: 5%; background-color:<?=$div_color?>;" >
			<span>LOGO:</span><p><img style="width:90%; padding: 5%;" src="<?=$row['logo'];?>"></p>
		</li>

		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>CLAVE:</span><p><?=$row['id'];?></p>
		</li>

		<li style="width: 25%; background-color:<?=$div_color?>;" >
			<span>NOMBRE:</span><p><?php echo $row['name'];?></p>
		</li>

		<li style="width: 20%; background-color:<?=$div_color?>;" >
			<span>DETALLE:</span>
			<p><?php echo $row['detail'];?></p>
		</li>

		<li style="width: 20%; background-color:<?=$div_color?>;" >
			<span>DETALLE:</span>
			<p><?php //echo $row['detail'];?></p>
		</li>

		<!-- lead tools -->		
		<?php
			// master tools
			if (priv_now=='master') {

				//echo $privilege;
				?>

				<li style="width: 5%; text-align: center; background-color:<?=$div_color?>;" >
					<p><i onclick="dropdown_lead(<?php echo $id_dropdown.','.$all_leads;?>)" class="fas fa-eye"></i></p>
				</li>

				<li style="width: 5%; text-align: center; background-color:<?=$div_color?>;" >
					<p><i onclick="dropdown_lead(<?php echo $id_dropdown.','.$all_leads;?>)" class="fas fa-pencil-alt"></i></p>
				</li>

				<li style="width: 5%; text-align: center;border:none; background-color:<?=$div_color?>;" >
					<p><i onclick="
						window.location.href='./resources/action.php?btn_action=blog&action=delete&id=<?php echo $row['id']?>';" class="fas fa-trash-alt"></i></p>
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
	
	<?php include('dropdown/cliente.php'); ?>
					
</div>