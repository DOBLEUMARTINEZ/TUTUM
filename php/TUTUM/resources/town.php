
<style type="text/css">
	body{
		background:#9d968e;
	}

	/* KEYFRAME */

	/* CAMION DE CARGA */

		@keyframes vuelo{
			0% {
			transform: translate(900px,900px);
			}	

			100% {
				transform: translate(-200px, -200px);
			}
		}

	/* CAMION DE CARGA */ 
		@keyframes carga{
			from {
			transform: translate(240px,441px);
			}	

			to {
				transform: translate(839px,784px );
			}
		}

	/* TAXI */  
		@keyframes taxi{
			0% {
				transform: translate(780px,436px);
			}	

			45% {
				transform: translate(508px, 600px);
			}

			60% {
				transform: translate(536px, 640px);
			}

			100% {
				transform: translate(305px, 783px);
			}
		}

		@keyframes taxi-rotate{
			0% {
				
			}	
			20% {
				transform: scaleX(1);
			}

			42% {
				transform: scaleX(1);
			}

			42.1% {
				transform: scaleX(-1);
			}

			56% {
				transform: scaleX(-1);
			}

			56.1% {
				transform: scaleX(1);
			}

			100% {
				transform: scaleX(1);
			}
		}

	/* HOSPITAL   
		@keyframes hospital{
			0% {
				transform: translate(780px,436px);
			}	

			
			100% {
				transform: translate(305px, 783px);
			}
		}*/

	/******************/

	/* plane */
		#plane{
			position: absolute;
			top: 0;
			left: 0;
			animation: vuelo;
			animation-duration: 10s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
			display: flex;
	    	align-items: center;
	    	justify-content: center;z-index: 1;
		}

		#plane > img {
			cursor: pointer;
		}

		#plane > span{
			opacity: 0;
		    position: absolute;
		    background: #4bbed3;
		    color: #fff;
		    font-size: 22px;
		    font-weight: bold;
		    width: 35px;
		    height: 35px;
		    display: flex;
		    justify-content: center;
		    align-items: center;
		    border-radius: 50%;
		    top: 0px;
		    left: 125px;
		    transition: 0.3s;
		    cursor: pointer;
		}

		#plane:hover span{
			opacity: 1;
			top: 90px;
		}

	/* truck */
		#truck{
			position: absolute;
			top: 0;
			left: 0;
			animation: carga;
			animation-duration: 15s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
			display: flex;
	    	align-items: center;
	    	justify-content: center;
		}

		#truck > img {
			cursor: pointer;
		}

		#truck > span{
			opacity: 0;
		    position: absolute;
		    background: #4bbed3;
		    color: #fff;
		    font-size: 22px;
		    font-weight: bold;
		    width: 35px;
		    height: 35px;
		    display: flex;
		    justify-content: center;
		    align-items: center;
		    border-radius: 50%;
		    top: 0px;
		    left: 0px;
		    transition: 0.3s;
		    cursor: pointer;
		}

		#truck:hover span{
			opacity: 1;
			top: 5px;
		}

	/* taxi */
		#taxi{
			position: absolute;
			top: 0;
			left: 0;
			animation: taxi;
			animation-duration: 8s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
			display: flex;
	    	align-items: center;
	    	justify-content: center;
		}

		#taxi > img{
			animation: taxi-rotate;
			animation-duration: 8s;
			animation-iteration-count: infinite;
			cursor: pointer;
			transition:0.2s;
		}


		#taxi > span{
			opacity: 0;
		    position: absolute;
		    background: #4bbed3;
		    color: #fff;
		    font-size: 22px;
		    font-weight: bold;
		    width: 35px;
		    height: 35px;
		    display: flex;
		    justify-content: center;
		    align-items: center;
		    border-radius: 50%;
		    top: 0px;
		    left: 0px;
		    transition: 0.3s;
		    cursor: pointer;
		}

		#taxi:hover span{
			opacity: 1;
			top: 5px;
		}

	/* hospital */

		#hospital{
			position: absolute;
		    top: 508px;
    		left: 619px;
		    animation-timing-function: linear;
		    display: flex;
		    align-items: center;
		    justify-content: center;
		    cursor: pointer;
		}

		#hospital > span{
			position: absolute;
		    background: #4dbed4;
		    color: #ffffff;
		    padding: 5px 10px;
		    border-radius: 50px;
		    font-weight: bold;
		    letter-spacing: 1px;
		    top: 0;
		    transition: 0.3s;
		    opacity: 0;
		    width: 150px;
		    height: 40px;
		    display: flex;
		    align-items: center;
		    justify-content: center;
		}

		#hospital > span::before{
			content: ".";
		    color: #0000;
		    position: absolute;
		    width: 0;
		    height: 0;
		    border-right: 63px solid transparent;
		    border-top: 63px solid transparent;
		    border-left: 63px solid transparent;
		    border-bottom: 50px solid #ffc107;
		    transform: rotate(180deg);
		    bottom: -111px;
		}

		#hospital > span::after{
			content: "Entrar";
		    position: absolute;
		    background: #ffc107;
		    width: 70px;
		    text-align: center;
		    font-size: 12px;
		    color: #333;
		    bottom: -19px;
		    left: 40px;
		    font-weight: bold;
		}

		#hospital:hover span {
			top: 40px;
			opacity: 1;
			z-index: 99;
		}

		#hospital > ul{
			position: absolute;
		    right: -60%;
		    top: -35%;
		    background: #fcfcfb;
		    padding: 5px 10px 5px 30px;
		    margin: 0;
		    opacity: 0;
		    transition: 0.3s;
		    z-index: -1;
		}

		#hospital:hover ul {
			top: 1%;
			opacity: 1;
			z-index: 99;
		}

	/* residencial */

		#Corporativo{
			position: absolute;
		    top: 290px;
		    left: 62px;
		    animation-timing-function: linear;
		    display: flex;
		    align-items: center;
		    justify-content: center;
		    cursor: pointer;
		}

		#Corporativo > span{
			position: absolute;
		    background: #4dbed4;
		    color: #ffffff;
		    padding: 5px 10px;
		    border-radius: 50px;
		    font-weight: bold;
		    letter-spacing: 1px;
		    top: 0;
		    transition: 0.3s;
		    opacity: 0;
		    width: 150px;
		    height: 40px;
		    display: flex;
		    align-items: center;
		    justify-content: center;
		}

		#Corporativo > span::before{
			content: ".";
		    color: #0000;
		    position: absolute;
		    width: 0;
		    height: 0;
		    border-right: 63px solid transparent;
		    border-top: 63px solid transparent;
		    border-left: 63px solid transparent;
		    border-bottom: 50px solid #ffc107;
		    transform: rotate(180deg);
		    bottom: -111px;
		}

		#Corporativo > span::after{
			content: "Entrar";
		    position: absolute;
		    background: #ffc107;
		    width: 70px;
		    text-align: center;
		    font-size: 12px;
		    color: #333;
		    bottom: -19px;
		    left: 40px;
		    font-weight: bold;
		}

		#Corporativo:hover span {
			top: 40px;
			opacity: 1;
			z-index: 99;
		}

	/* modales */

		/* Controls */

			.active-modal{
				transition: 0.5s;
				z-index:999!important;
				opacity: 1!important;
			}

			.close-modal{
				transition: 0.5s;
				z-index:0!important;
				opacity: 1!important;
			}

			.active-modal-city {
				transition: 0.6s;
				left: 0%!important;
			}

		/* Content */

			#modales {
			    position: fixed;
			    width: 100%;
			    height: 100%;
			    background: #33333387;
			    z-index: -9;
			    top: 0;
			    transition: 0.5s;
			    opacity: 0;
			}

			#modal-city {
				position: absolute;
			    background: #fff;
			    width: 80%;
			    height: 100%;
			    display: flex;
			    align-items: center;
			    left: -80%;
			    transition: 0.5s;
			}

			#modal-city > span{
				position: absolute;
			    right: 5%;
			    top: 3%;
			    font-size: 22px;
			    font-weight: bold;
			    color: #eb0101;
			    cursor: pointer;
			}


			/* Hospital Content */

				#hospitalContent{
					list-style: none;
					width: 100%;
					display: none;;
					justify-content: center;
					margin:0;
					padding: 0;	
				}

				#hospitalContent li {
					width: 50%;
				}

				#hospitalContent li > h2{
					font-family: 'Roboto', sans-serif!important;
				    font-size: 40px;
				    font-weight: 900;
				}

				#hospitalContent li > p{
					font-family: 'Montserrat', sans-serif!important;
				    font-size: 18px;
				}

				#hospitalContent li > button{
					padding: 2% 3%;
				    font-size: 18px;
				    border: none;
				    background: #4bbed3;
				    color: #ffffff;
				}

			/* Corporativo Content */

				#CorporativoContent{
						
				}

				.impresoraImage{
				}

				#CorporativoContent > img{
					width: 50%;
				}

				#CorporativoContent > div{
					padding: 2%;
				    margin: 2%;
				    background: #eeeeee;
				    box-shadow: #5e5e5e 10px 10px 5px 0px;
				}

				#CorporativoContent > div > h2{
					font-family: 'Roboto', sans-serif!important;
				    font-size: 40px;
				    font-weight: 900;
				}

				#CorporativoContent > div > p{
					font-family: 'Montserrat', sans-serif!important;
				    font-size: 18px;
				}

				#CorporativoContent > div > button{
					padding: 2% 3%;
				    font-size: 18px;
				    border: none;
				    background: #4bbed3;
				    color: #ffffff;
				}

				

</style>

<!-- contennedor de canvas -->
<div id="jm-canvas-content">

	<div id="hospital" onclick="openModal('Hospitales');">
		<span>Hospital</span>
		<ul>
			<li>Soluciones ​integrales en TI​</li>
			<li>Implementación ​HIS</li>
			<li>Capacitación ​usuario final</li>
		</ul>
		<img src="images/town-resources/hospital.png" height="206" width="310">
	</div>

	<div id="Corporativo" onclick="openModal('Corporativo');">
		<span>Corporativo</span>
		<img src="images/town-resources/residencial.png" height="auto" width="190">
	</div>

	<div id="plane">
		<span>1</span>
		<img  src="images/town-resources/plane.png" height="250" width="250">
	</div>

	<div id="truck" >
		<span>2</span>
		<img src="images/town-resources/truck.png" height="50" width="50">
	</div>

	<div id="taxi">
		<span>3</span>
		<img src="images/town-resources/taxi2.png" height="40" width="40">
	</div>

    <canvas id="lienzo" width="1000" height="950"></canvas>

</div>

<div id="modales">

    <div id="modal-city" class="modal-content">
    	<span onclick="colseModal();"><i class="fas fa-times"></i></span>

    	<!-- Hospital Content -->
    	<ol id="hospitalContent">
    		<li><img src="images/town-resources/hospital.png" height="auto" width="100%"></li>
    		<li>
    			<h2>Hospitales</h2>
    			<p>Tenemos experiencia en los sectores de salud pública y privada gestionando hospitales a nivel nacional, contamos con una cobertura de centros de atención a usuarios y distribución en seis regiones estratégicamente ubicadas en la república mexicana.</p>
    			<button>Quiero saber más</button>
    		</li>
    	</ol>

    	<!-- Corporativo -->
    	<div id="CorporativoContent">
    		<img src="images/town-resources/recidencia_interior.jpg">
    		<div>
    			<h2>Corporativo</h2>
    			<p>Ofrecemos servicios de diseño e implementación de soluciones tecnológicas y modernas, tanto de hardware como de software, lo cual nos permite implementar sistemas que mejoran la operación.</p>
    			<ol>
    				<li>Soluciones ​integrales en TI</li>
    				<li>Suministro de ​equipamiento</li>
    				<li>Implementación de ​sistemas​</li>
    				<li>Implementación ​SAP</li>
    			</ol>
    			<button>Quiero saber más</button>
    		</div>
    	</div>

    	<!-- Recidencial 
    	<ol id="residencialContent">
    		<li><img src="images/town-resources/residencial.png" height="auto" width="40%" style="margin-left: 30%; "></li>
    		<li>
    			<h2>Residencial</h2>
    			<p>Tenemos experiencia en los sectores de salud pública y privada gestionando hospitales a nivel nacional, contamos con una cobertura de centros de atención a usuarios y distribución en seis regiones estratégicamente ubicadas en la república mexicana.</p>
    			<button>Quiero saber más</button>
    		</li>
    	</ol>-->

    </div>
    	
</div>

<!-- SCRIPT CANVAS -->
<script type="text/javascript">

    function openModal(a){

    	var modalBack = document.getElementById("modales");
  		modalBack.classList.add("active-modal");

  		var modalContent = document.getElementById("modal-city");
  		modalContent.classList.add("active-modal-city");


  		switch (a) {
		  case 'Hospitales':
		    var openContent = document.getElementById("hospitalContent");
		    openContent.style.display = "flex";
		    break;

		  case 'Corporativo':
		    var openContent = document.getElementById("CorporativoContent");
		    openContent.style.display = "flex";
		    break;
		 
		  default:
		    alert('none');
		    break
		}

	}

    function colseModal(){


    	// Contents

    	var openContent = document.getElementById("hospitalContent");
		    openContent.style.display = "none";

		var openContent = document.getElementById("CorporativoContent");
		    openContent.style.display = "none";

		// Modal
    	var modalBack = document.getElementById("modales");
  		modalBack.classList.remove("active-modal");

    	var modalContent = document.getElementById("modal-city");
  		modalContent.classList.remove("active-modal-city");
    }
  
	//console.log("ctx",ctx);

	/*// RECTANGULOS
		ctx.fillStyle = "cyan";
		//ctx.fillRect(x1, y1, x2, y2 );
		ctx.fillRect(235, 480, 10, 10);

	 CONTORNO
		ctx.linewidth=5;
		ctx.strokeStyle="rgb(51 51 51)";
		ctx.rect(10,10,100,100);
		ctx.stroke();

	// CIRCULO
		ctx.beginPath();
		//ctx.arc(x1,y1,r,starAngle,endAngle);
		ctx.arc(500,500,80,0,2*Math.PI);

		// RELLENO CIRCILO
		ctx.fillStyle="green";
		ctx.fill();

	// LINEAS

		ctx.beginPath();
		// ctx.moveTo(x1,y1);
		// ctx.lineTo(200,200);

		ctx.moveTo(35,425);
		ctx.lineTo(210,528);
		ctx.lineTo(600,300);



		ctx.lineWidth = 10;
		ctx.strokeStyle="yellow";
		ctx.stroke();

		ctx.fillStyle = "red";
		ctx.fill();

	// CURVAS
		ctx.beginPath();
		ctx.moveTo(0,500);	
		//bezierCurveTo(cp1x, cp1y, cp2x, cp2y, x, y)
		ctx.bezierCurveTo(100,100,800,800,500,500);

		ctx.lineWidth = 10;
		ctx.strokeStyle="blue";
		ctx.stroke();

	// DEGRADADOS
		//createLinearGradient(x0, y0, x1, y1)
		var grd = ctx.createLinearGradient(0,0,120,120);
		grd.addColorStop(0,"red");
		grd.addColorStop(1,"green");
		ctx.fillStyle=grd;
		ctx.fillRect(0,0,100,100);
		
		var pos_x=600, pos_y= 400;
		var imgPlane = new Image();
		imgPlane.src="images/town-resources/plane.png";

		function animPlane(){
			ctx.clearRect(0,0,1000,750);
			ctx.drawImage(imgPlane, pos_x, pos_y, 250, 250);
			pos_x-=10;
			pos_y-=10;
			setTimeout(animPlane,50);
			if (pos_x==-250) {
				pos_x=600;
				pos_y=400;
			}

		}
		animPlane();

		// hospital
	var pos_x = 600, pos_y = 400;
	var imghos = new Image();
	imghos.src="images/town-resources/hospital.jpg";

	imghos.onload = function(){
		ctx.drawImage(imghos, 500, 500, 250, 250);
	}

	
	// IMAGES png o jpg

	var canvas = document.querySelector('#lienzo');
	var ctx = canvas.getContext("2d");
	var botones;


	function cargarBotones(){
		for(i=0; i < botones.length; i++){
			ctx.fillStyle = botones[i].color;
			ctx.fillRect(botones[i].x, botones[i].y,botones[i].width,botones[i].height);
		}
	}


	window.onload = function(){
		botones = [];
		botones.push({
			x:1, y:0,
			width:100,height:100,
			color:'#f00'
		});

		cargarBotones();

		canvas.addEventListener("click",(evt)=>{
		  raton = oMousePos(canvas, evt)
		  ctx.beginPath();
		  // este es un rectángulo alrededor del texto. Por favor observa que no hay stroke
		  ctx.rect(dondePongoElTexto.x,(dondePongoElTexto.y -fontSize),anchuraTexto,fontSize*1.2);
		  if (ctx.isPointInPath(raton.x, raton.y)) {
		    alert("has hecho click\ny ahora puedes hacer lo que quieres")
		  }
		});

	}

*/

</script>