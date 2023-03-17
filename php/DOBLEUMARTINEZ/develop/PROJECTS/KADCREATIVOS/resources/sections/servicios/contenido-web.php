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
			<h3>PAQUETES WEB HTML</h3>
			<p>Estos paquetes son diseñados y programados desde cero. 100% Personalizados (No plantillas)</p>
			<ol>
				<li>Fácil gestión</li>
				<li>Aún sin experiencia en código, podrás editar fácilmente imágenes o textos</li>
				<li>Uso de plantillas</li>
				<li>Se pueden integrar plugins gratuitos o de pago para mejorar la funcionalidad del sitio</li>
			</ol>
			<button>Ver más</button>
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