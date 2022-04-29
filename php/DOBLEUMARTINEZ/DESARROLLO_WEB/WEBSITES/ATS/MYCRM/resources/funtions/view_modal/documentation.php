<div class="box-info-modal info-quote-pdf-<?php echo $row['id'];?>">

						<h1>DOCUMENTACIÓN DE PAGO</h1>
						<div style="width: 100%;display: flex;">
							<p><strong>ID:</strong><br><?php echo $row['id'];?></p>
							<p><strong>Nombre:</strong><br><?php echo $row['name'];?></p>
							<p><strong>Factura:</strong><br><?php echo $row['fac_no'];?></p>
							<p><strong>Fecha:</strong><br><?php echo $row['date_l'];?></p>
						</div>

						<ul class="documents-content">

							<li>
								<h2 onclick="dropdown_quote(<?php echo $row['id'];?>);" >COTIZACIÓN</h2>

								<div class="dropdown_quote_<?php echo $row['id']; ?>" style="text-align: center; display: none; background-color: #0000;" >

									<iframe src="<?php echo $row['quote_pdf'];?>" scrolling="no"></iframe>
						
								</div>

							</li>

							<li>
								<h2 onclick="dropdown_fac_pre(<?php echo $row['id'];?>);">PREFACTURA </h2>

								<div class="dropdown_fac_pre_<?php echo $row['id']; ?>" style="text-align: center; display: none; background-color: #0000;" >

									<iframe src="<?php echo $row['fac_pre'];?>" scrolling="no"></iframe>

								</div>

							</li>

							<li>
								<h2 onclick="dropdown_fac_end(<?php echo $row['id'];?>);">FACTURA </h2>

								<div class="dropdown_fac_end_<?php echo $row['id']; ?>" style="text-align: center; display: none; background-color: #0000;" >

									<iframe src="<?php echo $row['fac_end'];?>" scrolling="no"></iframe>

								</div>

							</li>

							<li>
								<h2 onclick="dropdown_pay(<?php echo $row['id'];?>);" >COMPROBATE DE PAGO </h2>

								<div class="dropdown_pay_<?php echo $row['id']; ?>" style="text-align: center; display: none; background-color: #0000;" >

									<iframe src="<?php echo $row['pay_pdf'];?>" scrolling="no"></iframe>
									
								</div>

							</li>

							<li>
								<h2 onclick="closed_modal_lead();" style="background: #4CAF50;"> ACEPTAR </h2>
							</li>

						</ul>

			</div>