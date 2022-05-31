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
	<div style="position: relative;">

		<!-- IMAGEN DE FONDO -->
		<img src="<?php echo $url.$images[$servicio];?>" style="position: fixed; width: 100%; height: 100%; z-index: -99;">
  		<img src="<?php echo $url.$images[$servicio];?>" style=" width: 100%; opacity: 0;">

	  	<!-- CUADRO DE TEXTO -->
	  	<div class="square-logo-big" >
		    <img src="<?php echo $url;?>images/logo/LOGO-WHITE.png" onclick="window.location.href='./';">
		    <h2>SERVICIOS</h2>
		    <i class="fas fa-chevron-down arrow-down" onclick="window.location.href='#start'"></i>
	  	</div>

	  	<!-- barra negra -->
	  	<span class="barra-negra"></span>

	</div>
	<a id="start"></a>