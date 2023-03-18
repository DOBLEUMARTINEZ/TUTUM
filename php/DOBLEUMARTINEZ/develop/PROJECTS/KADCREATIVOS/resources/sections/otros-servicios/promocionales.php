<!-- Bootstrap core CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

<div class="box-slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="box-shadow: 0px 0px 10px 2px #7f3f98ab;">
	  	<div class="carousel-inner">
		    <div class="carousel-item active breadcrum-content">
		      	<img class="d-block w-100" src="resources/images/banner-seccion.jpg" title="Impresion" alt="Impresion">
		      	<h1>
		      		Promocinales <br>
		      		<a href="<?php echo $url;?>">inicio > </a>
		      		<a href="<?php echo $url;?>#otros-servicios">otros servicios > </a>
		      		<a href="<?php echo $url;?>promocionales">promocionales</a> 
		      	</h1>
		    </div>
	  	</div>
	</div>
</div>

<!-- BOX SERVICES -->
<div class="box-services-second">
	<h2>
		El promocional perfecto para tu marca.
	</h2>
	<div>
		<div>
			<h3>Nosotros te ofrecemos:</h3>
			<ol>
				<li>Playeras</li>
				<li>Tazas</li>
				<li>Agendas</li>
				<li>Plumas</li>
				<li>Sublimación</li>
				<li>Gorras</li>
			</ol>
			<button>Ver más</button>
		</div>
		<div class="slide-center-jm">
			<div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">

			  	<div class="carousel-inner">

				    <div class="carousel-item active">
				      	<img class="d-block w-100" src="./resources/images/promo-1.jpg" title="Contenido web" alt="Contenido web" onclick="window.location.href='<?php echo $url?>contenido-web';">
				    </div>

				    <div class="carousel-item">
				      	<img class="d-block w-100" src="./resources/images/promo-2.jpg" title="Foto y video" alt="Foto y video" onclick="window.location.href='<?php echo $url?>foto-y-video';">
				    </div>

				    <div class="carousel-item">
				      	<img class="d-block w-100" src="./resources/images/promo-3.jpg" title="Foto y video" alt="Foto y video" onclick="window.location.href='<?php echo $url?>foto-y-video';">
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






