<script type="text/javascript">

    function openModal(a){

    	var modalBack = document.getElementById("modales");
  		modalBack.classList.add("active-modal");

  		var modalContent = document.getElementById("modal-city");
  		modalContent.classList.add("active-modal-city");


  		switch (a) {

  			case 'tutum-edificio':
			    var openContent = document.getElementById("tutumContent");
			    openContent.style.display = "flex";
			    break;

		 	case 'Hospitales':
			    var openContent = document.getElementById("hospitalContent");
			    openContent.style.display = "flex";
			    break;

			case 'Corporativo':
			    var openContent = document.getElementById("CorporativoContent");
			    openContent.style.display = "flex";
			    break;

			case 'Residencial':
			    var openContent = document.getElementById("ResidencialContent");
			    openContent.style.display = "flex";
			    break;

			case 'Seguridad':
			    var openContent = document.getElementById("SeguridadContent");
			    openContent.style.display = "flex";
			    break;
		 
			default:
		    	alert('none');
		    	break
		}

	}

	function openLateralContent(a,b){

		var modalLatralContent = document.getElementById("modalLatralContent");
		modalLatralContent.classList.add('modalLatralContent-active');

		switch (b){
			case 'desarrllodeproyectos':
				var contentmodal = document.getElementById("desarrllodeproyectos-content");
				contentmodal.style.display="flex";
				break;
			case 'operaciondeproyectos':
				var contentmodal = document.getElementById("operaciondeproyectos-content");
				contentmodal.style.display="flex";
				break;
			case 'cau':
				var contentmodal = document.getElementById("cau-content");
				contentmodal.style.display="flex";
				break;
			case 'sap':
				var contentmodal = document.getElementById("sap-content");
				contentmodal.style.display="flex";
				break;
			case 'sih':
				var contentmodal = document.getElementById("sih-content");
				contentmodal.style.display="flex";
				break;
			case 'ciberseguridad':
				var contentmodal = document.getElementById("ciberseguridad-content");
				contentmodal.style.display="flex";
				break;
			case 'fsw':
				var contentmodal = document.getElementById("fsw-content");
				contentmodal.style.display="flex";
				break;
			case 'sanet':
				var contentmodal = document.getElementById("sanet-content");
				contentmodal.style.display="flex";
				break;
			case 'solucionesTI':
				var contentmodal = document.getElementById("solucionesTI-content");
				contentmodal.style.display="flex";
				break;

			case 'sumistroEquipamento':
				var contentmodal = document.getElementById("sumistroEquipamento-content");
				contentmodal.style.display="flex";
				break;

			case 'implementacionSistemas':
				var contentmodal = document.getElementById("implementacionSistemas-content");
				contentmodal.style.display="flex";
				break;

			case 'capacitacionUsuario':
				var contentmodal = document.getElementById("capacitacionUsuario-content");
				contentmodal.style.display="flex";
				break;

			case 'desarrllodeING':
				var contentmodal = document.getElementById("desarrllodeING-content");
				contentmodal.style.display="flex";
				break;

			case 'ERP':
				var contentmodal = document.getElementById("ERP-content");
				contentmodal.style.display="flex";
				break;

			case 'poliza':
				var contentmodal = document.getElementById("poliza-content");
				contentmodal.style.display="flex";
				break;

			case 'cableado':
				var contentmodal = document.getElementById("cableado-content");
				contentmodal.style.display="flex";
				break;

			case 'telefono':
				var contentmodal = document.getElementById("telefono-content");
				contentmodal.style.display="flex";
				break;

			case 'impresora':
				var contentmodal = document.getElementById("impresora-content");
				contentmodal.style.display="flex";
				break;

			case 'redes':
				var contentmodal = document.getElementById("redes-content");
				contentmodal.style.display="flex";
				break;

			case 'incendios':
				var contentmodal = document.getElementById("incendios-content");
				contentmodal.style.display="flex";
				break;

			case 'controlAcceso':
				var contentmodal = document.getElementById("controlAcceso-content");
				contentmodal.style.display="flex";
				break;

			case 'videoconferencia':
				var contentmodal = document.getElementById("videoconferencia-content");
				contentmodal.style.display="flex";
				break;

			case 'CircuitosCerrado':
				var contentmodal = document.getElementById("CircuitosCerrado-content");
				contentmodal.style.display="flex";
				break;

			case 'voceo':
				var contentmodal = document.getElementById("voceo-content");
				contentmodal.style.display="flex";
				break;

			case 'intercomunicacion':
				var contentmodal = document.getElementById("intercomunicacion-content");
				contentmodal.style.display="flex";
				break;

			case 'sensores':
				var contentmodal = document.getElementById("sensores-content");
				contentmodal.style.display="flex";
				break;

			case 'voceoIP':
				var contentmodal = document.getElementById("voceoIP-content");
				contentmodal.style.display="flex";
				break;

			case 'sustancias':
				var contentmodal = document.getElementById("sustancias-content");
				contentmodal.style.display="flex";
				break;

			default:
				break;
		}

	}

    function colseModal(a){

    	if (a == 1) {

    		// Contents
	    	var openContent = document.getElementById("hospitalContent");
			    openContent.style.display = "none";

			var openContent = document.getElementById("CorporativoContent");
			    openContent.style.display = "none";

			var openContent = document.getElementById("tutumContent");
			    openContent.style.display = "none";

			var openContent = document.getElementById("ResidencialContent");
			    openContent.style.display = "none";

			var openContent = document.getElementById("SeguridadContent");
			    openContent.style.display = "none";

			// Modal
	    	var modalBack = document.getElementById("modales");
	  		modalBack.classList.remove("active-modal");

	    	var modalContent = document.getElementById("modal-city");
	  		modalContent.classList.remove("active-modal-city");

    	}else{

    		var modalLateral = document.getElementById("modalLatralContent").classList.remove("modalLatralContent-active");

			var contentmodal = document.getElementById("desarrllodeproyectos-content").style.display="none";
			var contentmodal = document.getElementById("operaciondeproyectos-content").style.display="none";
			var contentmodal = document.getElementById("cau-content").style.display="none";
			var contentmodal = document.getElementById("sap-content").style.display="none";
			var contentmodal = document.getElementById("sih-content").style.display="none";
			var contentmodal = document.getElementById("ciberseguridad-content").style.display="none";
			var contentmodal = document.getElementById("fsw-content").style.display="none";
			var contentmodal = document.getElementById("sanet-content").style.display="none";
			var contentmodal = document.getElementById("solucionesTI-content").style.display="none";
			var contentmodal = document.getElementById("sumistroEquipamento-content").style.display="none";
			var contentmodal = document.getElementById("implementacionSistemas-content").style.display="none";
			var contentmodal = document.getElementById("capacitacionUsuario-content").style.display="none";
			var contentmodal = document.getElementById("desarrllodeING-content").style.display="none";
			var contentmodal = document.getElementById("ERP-content").style.display="none";
			var contentmodal = document.getElementById("poliza-content").style.display="none";
			var contentmodal = document.getElementById("cableado-content").style.display="none";
			var contentmodal = document.getElementById("telefono-content").style.display="none";
			var contentmodal = document.getElementById("impresora-content").style.display="none";
			var contentmodal = document.getElementById("redes-content").style.display="none";
			var contentmodal = document.getElementById("incendios-content").style.display="none";
			var contentmodal = document.getElementById("controlAcceso-content").style.display="none";
			var contentmodal = document.getElementById("videoconferencia-content").style.display="none";
			var contentmodal = document.getElementById("CircuitosCerrado-content").style.display="none";
			var contentmodal = document.getElementById("voceo-content").style.display="none";
			var contentmodal = document.getElementById("intercomunicacion-content").style.display="none";
			var contentmodal = document.getElementById("sensores-content").style.display="none";
			var contentmodal = document.getElementById("sustancias-content").style.display="none";
		
    	}
    }

	/* active sttuf */
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