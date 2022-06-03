<?php
	$images = array(
		'proyectos' => 'images/img/serv.jpg',
		'operacion' => 'images/img/operacion.jpg',
		'cau' => 'images/img/cau.jpg',
		'sap' => 'images/img/sap.jpg',
		'hospitales' => 'images/img/hospitales.jpg',
		'ciberseguridad' => 'images/img/ciberseguridad.jpg',
		'fabrica-sw' => 'images/img/fabrica-sw.jpg',
		'menu' => 'images/img/Foto para inicio de servicios.jpg'
	);
?>

	<!-- FONDO DE SECCION -->
	<div id="square-banner-index">

		<!-- IMAGEN DE FONDO -->
		<img class="video-slide bann-fixed" src="<?php echo $url.$images[$servicio];?>">
  		<img class="video-slide" src="<?php echo $url.$images[$servicio];?>" style="opacity: 0;">

	  	<!-- CUADRO DE TEXTO -->
	  	<div class="square-logo-big" >
		    <img src="<?php echo $url;?>images/logo/LOGO-WHITE.png" onclick="window.location.href='./';">
		    <h2><?php echo  strtoupper($service); ?></h2>
		    <i class="fas fa-chevron-down arrow-down" onclick="window.location.href='#start'"></i>
	  	</div>

	  	<!-- barra negra -->
	  	<span class="barra-negra"></span>

	</div>
	
	<?php if ($service=='menu') { echo "<a id='start'></a>";} ?>
	