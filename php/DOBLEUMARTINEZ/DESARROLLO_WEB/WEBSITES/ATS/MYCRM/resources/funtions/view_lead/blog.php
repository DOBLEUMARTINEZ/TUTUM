<div>

	<ol>

		<!-- NUMERECION  DE FILAS -->
		<li style="width: 5%; background-color:<?=$div_color?>;">
			<p style="text-align: center;"><?=$id_dropdown;?></p>
		</li>

		<li style="width: 5%; background-color:<?=$div_color?>;" >
			<span>IMAGEN:</span><p><img style="width:90%; padding: 5%;" src="<?=$row['img'];?>"></p>
		</li>

		<li style="width: 5%; background-color:<?=$div_color?>;" >
			<span>CLAVE:</span><p><?=$row['id'];?></p>
		</li>

		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>AUTOR:</span><p><?php echo $row['autor'];?></p>
		</li>

		<li style="width: 25%; background-color:<?=$div_color?>;" >
			<span>TITULO:</span>
			<p><?php echo $row['title'];?></p>
		</li>
						
		<li style="width: 10%; background-color:<?=$div_color?>;" >
			<span>CATEGORIA:</span>
			<p><?php echo $row['category'];?></p>
		</li>

		<li style="width: 25%; background-color:<?=$div_color?>;" >
			<span>DESCRIPCIÓN:</span>
			<p><?php echo substr($row['description'], 0, 100);?></p>
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
	
	<?php include('dropdown/blog.php'); ?>
					
</div>