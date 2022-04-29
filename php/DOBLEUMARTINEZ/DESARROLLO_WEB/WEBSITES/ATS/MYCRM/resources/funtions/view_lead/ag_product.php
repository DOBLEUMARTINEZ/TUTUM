<div>

	<!-- ACTION DROPDOWN -->
	<ol>

		<!-- NUMERECION  DE FILAS -->
		<li style="width: 5%; background-color:<?=$div_color?>;" >
			<p style="text-align: center;"><?=$id_dropdown;?></p>
		</li>

		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>IMAGEN</span><p><?=$row['id'];?></p>
		</li>

		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>CLAVE</span><p><?=$row['id'];?></p>
		</li>

		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>CODIGO</span><p><?=$row['code'];?></p>
		</li>

		<li style="width: 25%; background-color:<?=$div_color?>;" >
			<span>ARTICULO</span><p><?php echo $row['name'];?></p>
		</li>

		<li style="width: 15%; background-color:<?=$div_color?>;" >
			<span>CATEGORIA</span><p><?php echo $row['category'];?></p>
		</li>

		<li style="width: 15%; background-color:<?=$div_color?>;" >
			<span>PRECIO</span><p><?php echo $row['price'];?></p>
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
		if ($_GET['origin'] == 'productos') {		
			// DROPDOWN INFORMACION DE PRODUCTO 
        	include('dropdown/product.php');
		}
		elseif ($_GET['origin'] == 'usuarios') {
        	// DROPDOWN INFORMACION DE USUARIO
        	//include('dropdown/product.php');
		}
		else{
			// DIV INFO LEAD DROPDOWN 
        	//include('dropdown/lead.php');
		}
	?>
					
</div>