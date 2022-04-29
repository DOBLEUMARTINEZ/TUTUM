<div>

	<!-- ACTION DROPDOWN -->
	<ol>

		<!-- NUMERECION  DE FILAS -->
		<li style="width: 5%; background-color:<?=$div_color?>;" >
			<p style="text-align: center;"><?=$id_dropdown;?></p>
		</li>

		<li style="width: 5%; background-color:<?=$div_color?>;" >
			<span>CLAVE</span><p><?=$row['id'];?></p>
		</li>

		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>IMAGEN</span><p><?=$row['picture'];?></p>
		</li>

		<li style="width: 25%; background-color:<?=$div_color?>;" >
			<span>NOMBRE</span><p><?php echo $row['name'];?></p>
		</li>

		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>TELÉFONO</span><p><?=$row['phone'];?></p>
		</li>

		<li style="width: 20%; background-color:<?=$div_color?>;" >
			<span>EMAIL</span><p><?=$row['email'];?></p>
		</li>


		<li style="width: 15%; background-color:<?=$div_color?>;" >
			<span>PRIVILEGIO</span><p><?php echo $row['type_user'];?></p>
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
					<p><i onclick="window.location.href='./resources/action.php?" class="fas fa-trash-alt"></i></p>
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
		/*if ($area == 'rysese') {		
			// DIV INFO LEAD RYSESE DROPDOWN 
        	//include('dropdown/lead_rysese.php');
		}
		elseif ($area == 'autos') {
        	// DIV INFO LEAD AUTOS DROPDOWN 
        	//include('dropdown/lead_autos.php');
		}
		else{
			// DIV INFO LEAD DROPDOWN 
        	//include('dropdown/lead.php');
		}*/
	?>
					
</div>