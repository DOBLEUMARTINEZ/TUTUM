<!-- UPLOAD EXCEL --->
			<div class="box-info-modal new-lead-excel">
							<h1>EXPORTAR EXCEL</h1>
							<form action="./resources/action.php" method="POST" enctype="multipart/form-data" class="form-new-lead" >
								<hr>

								<ol>

									<li style="width: 100%;">
										<input type="file" name="new_excel">
										<input type="text" name="area" value="<?=$_GET['area']?>" style="display: none;" >
									</li>
									
								</ol>

								<hr>

								<ul style="justify-content: center;">
									<li>
										<p onclick="closed_modal_lead();" style="background-color: #F44336;">cancelar</p>
									</li>
									<li>
										<p style="background-color: #007eba;">
											<button type="sumbit" name="btn_action" value="upload_excel" >Aceptar</button>
										</p>
									</li>
								</ul>
							</form>
			</div>