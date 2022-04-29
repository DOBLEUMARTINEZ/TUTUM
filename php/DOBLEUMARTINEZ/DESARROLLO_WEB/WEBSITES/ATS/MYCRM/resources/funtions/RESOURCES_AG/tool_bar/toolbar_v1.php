<div class="toolbar_v1" >
	<!--<div>
		<h2>tool</h2>
		<ol>
			<li>opc tool</li>
			<li>opc tool</li>
		</ol>
	</div>-->

	<div>
		<h2>Añadir nuevo</h2>
		<ol>
		<?php
			if (isset($_GET['origin'])) {

				switch ($_GET['origin']) {

					case 'leads':
						?>
						<li onclick="modal_lead('leads',1);" >Lead</li>
						<?php
						break;

					case 'clientes':
						?>
						<li onclick="modal_lead('clientes',1);" >Cliente</li>
						<?php
						break;

					case 'usuarios':
						?>
						<li onclick="modal_lead('usuarios',1);" >Usuario</li>
						<?php
						break;

					case 'blog':
						?>
						<li onclick="modal_lead('blog',1);" >Blog</li>
						<?php
						break;
					
					default:
						# code...
						break;
				}
				
			}else{

				?>
				<li onclick="modal_lead('leads',1);" >Lead</li>
				<li onclick="modal_lead('clientes',1);" >Cliente</li>
				<li onclick="modal_lead('usuarios',1);" >Usuario</li>
				<li onclick="modal_lead('blog',1);" >Blog</li>
				<?php

			}
		?>
		</ol>
	</div>

</div>