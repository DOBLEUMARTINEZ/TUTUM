<!-- Bootstrap core CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

<div class="box-slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="box-shadow: 0px 0px 10px 2px #7f3f98ab;">
	  	<div class="carousel-inner">
		    <div class="carousel-item active breadcrum-content">
		      	<img class="d-block w-100" src="resources/images/banner-seccion.jpg" title="Impresion" alt="Impresion">
		      	<h1>
		      		Banners <br>
		      		<a href="<?php echo $url;?>">inicio > </a>
		      		<a href="<?php echo $url;?>#otros-servicios">otros servicios > </a>
		      		<a href="<?php echo $url;?>banners">banners</a> 
		      	</h1>
		    </div>
	  	</div>
	</div>
</div>

<!-- BOX SERVICES -->
<div class="box-services-second">
	<h2>
		Banners promocionales
	</h2>
	<div>
		<div>
			<h3>Diseño e impresión.</h3>
			<ol>
				<li>Lonas</li>
				<li>Espectaculares</li>
				<li>Banderines</li>
			</ol>
			<h3>Estructuras para montar tus banners</h3>
			<ol>
				<li>Arañas</li>
				<li>Rollup</li>
				<li>Demostands</li>
			</ol>
			<button>Ver más</button>
		</div>
		<div class="slide-center-jm">
			<div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">

			  	<div class="carousel-inner">

				    <div class="carousel-item active">
				      	<img class="d-block w-100" src="./resources/images/banners-1.jpg" title="Contenido web" alt="Contenido web" onclick="window.location.href='<?php echo $url?>contenido-web';">
				    </div>

				    <div class="carousel-item">
				      	<img class="d-block w-100" src="./resources/images/banners-2.jpg" title="Foto y video" alt="Foto y video" onclick="window.location.href='<?php echo $url?>foto-y-video';">
				    </div>

				    <div class="carousel-item">
				      	<img class="d-block w-100" src="./resources/images/banners-3.jpg" title="Imagen corporiativa" alt="Imagen corporiativa" onclick="window.location.href='<?php echo $url?>imagen-corporativa';">
				    </div>

				    <div class="carousel-item">
				      	<img class="d-block w-100" src="./resources/images/banners-4.jpg" title="Impresion" alt="Impresion" onclick="window.location.href='<?php echo $url?>impresion';">
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






