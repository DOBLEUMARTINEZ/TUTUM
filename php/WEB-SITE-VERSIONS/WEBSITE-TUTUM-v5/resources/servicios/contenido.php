<!-- BACKGROUND SECTION -->
<div class="body-content">

    <span class="background-section-darkness"></span>

    <!-- BACK IMAGE - ICON  -->
    <img class="icon-float" src="images/icons/dispositivo.png">
    <span class="background-section" style="background: url('images/img/FOTO 07.jpg');"></span>

    <!-- DESCARGA DE PRESENTACION -->
	<div class="download-pdf-contenido">
		<i class="fas fa-info-circle"></i>
		<ol>
			<li>
			  <p>PROYECTOS<br>INTEGRALES​</p>
			  <img src="images/icons/download.png">
			</li>
		</ol>
	</div>
	
	<!-- CONTENIDO LATERAL -->
	<div class="lateral-content">
	<?php 
		// VALIDAR SERVICIO
		if (strpos($_GET['seccion'], 'proyectos')===false){}else{
        	include("resources/servicios/proyectos.php"); // CONTENIDO PROYECTOS
        }
	?>
	</div>

</div>