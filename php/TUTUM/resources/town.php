
<style type="text/css">
	body{
		background:#9d968e;
	}

	@keyframes vuelo{
		0% {
		transform: translate(900px,900px);
		}	

		100% {
			transform: translate(-200px, -200px);
		}
	}

	@keyframes carga{
		from {
		transform: translate(240px,441px);
		}	

		to {
			transform: translate(839px,784px );
		}
	}

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

		40% {
			transform: scaleX(1);
		}

		49% {
			transform: scaleX(-1);
		}

		57% {
			transform: scaleX(-1);
		}

		60% {
			transform: scaleX(1);
		}

		100% {
			transform: scaleX(1);
		}
	}





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


	

</style>

<!-- contennedor de canvas -->
<div id="jm-canvas-content">

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

<!-- SCRIPT CANVAS -->
<script type="text/javascript">
	
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