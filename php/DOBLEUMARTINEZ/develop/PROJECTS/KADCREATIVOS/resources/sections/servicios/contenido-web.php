<!-- Bootstrap core CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

<!-- BANNER -->
<div class="box-slider">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="box-shadow: 0px 0px 10px 2px #7f3f98ab;">

	  	<div class="carousel-inner">

		    <div class="carousel-item active breadcrum-content">
		      	<img class="d-block w-100" src="resources/images/banner-seccion.jpg" title="Impresion" alt="Impresion">
		      	<h1>
		      		Contenido web<br>
		      		<a href="<?php echo $url;?>">inicio > </a>
		      		<a href="<?php echo $url;?>#servicios">servicios > </a>
		      		<a href="<?php echo $url;?>contenido-web">contenido web</a> 
		      	</h1>
		    </div>

	  	</div>

	</div>

</div>

<!-- BOX SERVICES -->
<div class="box-services-second">
	<h2>
		¿CUÁL ES EL PAQUETE IDEAL PARA MÍ?
	</h2>
	<div>
		<div>
			<h3>Paquetes Wordpress</h3>
			<ol>
				<li>Fácil gestión</li>
				<li>Aún sin experiencia en código, podrás editar fácilmente imágenes o textos</li>
				<li>Uso de plantillas</li>
				<li>Se pueden integrar plugins gratuitos o de pago para mejorar la funcionalidad del sitio</li>
			</ol>
			<button class="cta-1">Contactanos via Whatsapp</button>
		</div>
		<div>
			<div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">

			  	<div class="carousel-inner">

				    <div class="carousel-item active">
				      	<img class="d-block w-100" src="./resources/images/stickers-1.jpg" title="Contenido web" alt="Contenido web" onclick="window.location.href='<?php echo $url?>contenido-web';">
				    </div>

				    <div class="carousel-item">
				      	<img class="d-block w-100" src="./resources/images/stickers-2.jpg" title="Foto y video" alt="Foto y video" onclick="window.location.href='<?php echo $url?>foto-y-video';">
				    </div>

				    <div class="carousel-item">
				      	<img class="d-block w-100" src="./resources/images/stickers-3.jpg" title="Imagen corporiativa" alt="Imagen corporiativa" onclick="window.location.href='<?php echo $url?>imagen-corporativa';">
				    </div>

				    <div class="carousel-item">
				      	<img class="d-block w-100" src="./resources/images/stickers-4.jpg" title="Impresion" alt="Impresion" onclick="window.location.href='<?php echo $url?>impresion';">
				    </div>

			  	</div>

			  	<a class="carousel-control-prev" href="#carouselExampleControls-2" role="button" data-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
			  	</a>

			  	<a class="carousel-control-next" href="#carouselExampleControls-2" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
			  	</a>

			</div>
		</div>
	</div>
</div>

<!-- CONTENIDO WEB 
<div class="box-services-2" >
	<div>
		<h3>Paquetes Wordpress</h3>
		<ul>
			<li>fdgdf</li>
			<li>fdgdf</li>
		</ul>
		
	</div>
	<div style="display: flex;justify-content: center;">
		<ol class="gallery-wm">
			<li class="img-1" style="background-image: url('./resources/images/stickers-1.jpg');"><span>1</span></li>
			<li class="img-2" style="background-image: url('./resources/images/stickers-2.jpg');"><span>2</span></li>
			<li class="img-3" style="background-image: url('./resources/images/stickers-3.jpg');"><span>3</span></li>
			<li class="img-4" style="background-image: url('./resources/images/stickers-4.jpg');"><span>4</span></li>
		</ol>
	</div>
</div>-->

<hr>

<div class="box-services-2" >
	<div>
		<h3>Otros servicios de @kadcreativos que pueden interesarte:</h3>
		<button onclick="window.location.href='<?php echo $url?>contenido-web';">Contenido web</button><br>
        <button onclick="window.location.href='<?php echo $url?>foto-y-video';">Foto y video</button><br>
        <button onclick="window.location.href='<?php echo $url?>imagen-corporativa';">Imagen corporativa</button><br>
        <button onclick="window.location.href='<?php echo $url?>impresion-digital';">Impresión digital</button><br>
        <button onclick="window.location.href='<?php echo $url?>redes-sociales';">Redes sociales</button><br>
	</div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>