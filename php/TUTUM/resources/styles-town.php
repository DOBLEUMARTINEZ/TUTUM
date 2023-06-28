<style type="text/css">
	
body{
		background:#9d968e;
	}

	/* KEYFRAME */

	/* CAMION DE CARGA */

	@keyframes satelite{
			0% {
			    transform: translate(900px,0px);
			}
			100% {
			    transform: translate(0px, 300px);
			}
		}

		@keyframes vuelo{
			0% {
			    transform: translate(-100px,-100px);
			}

			100% {
			    transform: translate(800px, 800px);
			}
		}

		@keyframes nubes{
			0% {
			    transform: translate(-300px,100px);
			}

			100% {
			    transform: translate(500px, 800px);
			}
		}

		@keyframes nubesdos{
			0% {
			    transform: translate(100px,0px);
			}

			100% {
			    transform: translate(1000px,500px);
			}
		}

	/* CAMION DE CARGA */ 
		@keyframes carga{
			from {
			transform: translate(230px,150px);
			}	

			to {
				transform: translate(530px,250px );
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

	/******************/

	/* satelite */
		#satelite{
			position: absolute;
			top: 0;
			left: 0;
			animation: satelite;
			animation-duration: 60s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
			display: flex;
	    	align-items: center;
	    	justify-content: center;
	    	z-index: 9;
		}

		#satelite > img {
			cursor: pointer;
		}

		#satelite > span{
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

		#satelite:hover span{
			opacity: 1;
			top: 90px;
		}

	/* nubes */
		#nubes{
			position: absolute;
			top: 0;
			left: 0;
			animation: nubes;
			animation-duration:30s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
			display: flex;
	    	align-items: center;
	    	justify-content: center;
	    	z-index: 8;
		}

		#nubesdos{
			position: absolute;
			top: 0;
			left: 0;
			animation: nubesdos;
			animation-duration: 60s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
			display: flex;
	    	align-items: center;
	    	justify-content: center;
	    	z-index: 8;
		}

		#nubes > img {
			cursor: pointer;
		}

		#nubes > span{
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

		#nubes:hover span{
			opacity: 1;
			top: 90px;
		}

		#nubesdos > img {
			cursor: pointer;
		}

		#nubesdos > span{
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

		#nubesdos:hover span{
			opacity: 1;
			top: 90px;
		}

	/* avion	 */
		#avion{
			position: absolute;
			top: 0;
			left: 0;
			animation: vuelo;
			animation-duration: 15s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
			display: flex;
	    	align-items: center;
	    	justify-content: center;
	    	z-index: 7;
		}

		#avion > img {
			cursor: pointer;
		}

		#avion > span{
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

		#avion:hover span{
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
			z-index: 1;
		}

	/* tutum */

		#tutum-edificio{
			position: absolute;
		    top: 239px;
		    left: 314px;
		    width: 225px;
		    height: 352px;
		    animation-timing-function: linear;
		    display: flex;
		    align-items: center;
		    justify-content: center;
		    cursor: pointer;
		}

		#tutum-edificio > span{
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

		#tutum-edificio > span::before{
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

		#tutum-edificio > span::after{
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

		#tutum-edificio:hover span {
			top: 40px;
			opacity: 1;
			z-index: 99;
			animation: slide1 1s ease-in-out infinite;
		}

		#tutum-edificio > ul{
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

		#tutum-edificio:hover ul {
			top: 1%;
			opacity: 1;
			z-index: 99;
		}

	/* hospital */

		#hospital{
			position: absolute;
		    top: 397px;
		    left: 619px;
		    width: 242px;
		    height: 337px;
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
			animation: slide1 1s ease-in-out infinite;
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

	/* Corporativo */

		#Corporativo{
			position: absolute;
		    top: 547px;
		    left: 30px;
		    width: 220px;
		    height: 266px;
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
		    top: -100px;
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
			top: -75px;
			opacity: 1;
			z-index: 99;
			animation: slide1 1s ease-in-out infinite;
		}

	/* residencial */

		#residencial{
			position: absolute;
		    top: 153px;
		    left: 62px;
		    width: 220px;
		    height: 337px;
		    animation-timing-function: linear;
		    display: flex;
		    align-items: center;
		    justify-content: center;
		    cursor: pointer;
		}

		#residencial> span{
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

		#residencial > span::before{
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

		#residencial > span::after{
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

		#residencial:hover span {
			top: 40px;
			opacity: 1;
			z-index: 99;
			animation: slide1 1s ease-in-out infinite;
		}

	/* seguridad */

		#seguridad{
			position: absolute;
		    top: 132px;
		    left: 530px;
		    width: 341px;
		    height: 260px;
		    animation-timing-function: linear;
		    display: flex;
		    align-items: center;
		    justify-content: center;
		    cursor: pointer;
		}

		#seguridad> span{
			position: absolute;
		    background: #4dbed4;
		    color: #ffffff;
		    padding: 5px 10px;
		    border-radius: 50px;
		    font-weight: bold;
		    letter-spacing: 1px;
		    top: -70px;
		    transition: 0.3s;
		    opacity: 0;
		    width: 150px;
		    height: 40px;
		    display: flex;
		    align-items: center;
		    justify-content: center;
		}

		#seguridad > span::before{
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

		#seguridad > span::after{
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

		#seguridad:hover span {
			top: -45px;
			opacity: 1;
			z-index: 99;
			animation: slide1 1s ease-in-out infinite;
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
			    background: #16343ed9!important;
			    width: 80%;
			    height: 100%;
			    display: flex;
			    align-items: center;
			    left: -80%;
			    transition: 0.5s;
			    z-index: 1;
			    box-shadow: #4dbed499 2px 0px 0px 2px;	
			}

			#modal-city > span{
				position: absolute;
			    right: 2%;
			    top: 1%;
			    font-size: 40px;
			    font-weight: bold;
			    color: #eb0101;
			    cursor: pointer;
			    z-index: 99;
			}

			#modal-city > span:hover{
				color: #cbf41c;
    			background: #333;
			}

		/* Lateral content modal*/
			#modalLatralContent{
				width: 85%;
			    height: 102%;
			    padding: 2%;
			    margin: 2%;
			    background: #16343ef7;
			    box-shadow: #cbf41c9c 2px 0px 0px 2px;
			    position: absolute;
			    z-index: 9;
			    top: -4%;
			    left: -190%;
			    border-radius: 5px;
			    transition: 0.6s;
			}

			#modalLatralContent > span{
				position: absolute;
			    right: 2%;
			    top: 1%;
			    font-size: 30px;
			    font-weight: bold;
			    color: #cbf41cd6;
			    cursor: pointer;
			    z-index: 99;
			}

			#modalLatralContent > ul{
				width: 100%;
			    height: 100%;
			    margin: 0;
			    padding: 0;
			    list-style: none;
			    display: none;
			    justify-content: center;
			    align-items: center;
			}

			#modalLatralContent > ul > li{
				width: 50%;
			}

			#modalLatralContent > ul > li img{
				width: 90%;
			}


			#modalLatralContent > ul > li > h3{
				color: #cbf41cd6;
			    letter-spacing: 1px;
			    font-size: 32px;
			}

			#modalLatralContent > ul > li > p{
				font-size: 18px;
			    color: #fff;
			    letter-spacing: 0.5px;
			    padding-right: 5%;
			}

			.modalLatralContent-active{
				 left: -2%!important;
				 transition: 0.6s;
			}

		/**/
		.cont-info-01{
			position: relative;
			display: none;
		}

		/* ul locations circle */
			.cont-info-01 > ul{
				position: absolute;
				width: 50%;
				height: 100%;
				margin: 0;
				list-style: none;
				padding: 0;
			}

			.cont-info-01 > ul > li {
				position: absolute;
				font-size: 12px;
				width: 100px;
				height: 100px;
				border-radius: 100px;
				display: flex;
				align-items: center;
				flex-direction: column;
				justify-content: center;
				color: #0000;
				transition: 0.3s;
				text-align: center;
			}

			.cont-info-01 > ul > li:hover {
				background: #16343ef7;
				color: #cbf41c;
			}

			.cont-info-01 > ul > li > i {
				font-size: 3em;
				color: #ff0707;	
				opacity: 1;
			}

			.cont-info-01 > ul > li:hover i {
				color: #cbf41c;
			}

		/* imagen interior de edifico */
			.cont-info-01 > img {
				width: 50%;
			}

		/* div info */
			.cont-info-01 > div{
				width: 50%;
		    	padding: 2%;
			    margin: 2%;
			    background: #eeeeee;
			    box-shadow: #4dbed4 10px 15px 0px 0px;
			    border-radius: 5px;
			    height: fit-content;
		    }

			.cont-info-01 > div > h2{
				font-family: 'Roboto', sans-serif!important;
				font-size: 40px;
				font-weight: 900;
			}

			.cont-info-01 > div > p{
				font-family: 'Montserrat', sans-serif!important;
				font-size: 18px;
			}

			.cont-info-01 > div > ol{
				list-style: none;
				line-height: 25px;
			}

			.cont-info-01 > div > ol > li {
				cursor: pointer;
				font-size: 16px;
				font-weight: bold;
				color: #333333;
				letter-spacing: 0.5px;
				padding: 0 10px;
			}

			.cont-info-01 > div > ol > li:hover {
				background: #4dbed4;
    			color: #fff;
			}

			.cont-info-01 > div > ol > li:hover i{
    			color: #fff;
			}


			.cont-info-01 > div > ol > li > i{
				font-size: 10px;
    			color: #4dbed4;
			}

			.cont-info-01 > div > button{
				font-family: 'Montserrat', sans-serif!important;
				padding: 2% 3%;
				font-size: 18px;
				border: none;
				background: #4bbed3;
				color: #ffffff;
				font-weight: bold;
			}

		/* locationes */
			#sanet, #solucionesTI, #solucionesTI, #sumistroEquipamento, #implementacionSistemas, #capacitacionUsuario, #desarrllodeproyectos, #operaciondeproyectos, #cau, #fsw, #ciberseguridad, #sap, #solucionesTI-corp, #sumistroEquipamento-corp, #erp-corp, #implementacionSistemas-corp {
				transition: 0.5s;
				opacity:1;
				cursor: pointer;
				animation: slide1 1s ease-in-out infinite;
				cursor: pointer;
			}

			#sanet {
				left: 8%;
    			top: 30%;
			}

			#solucionesTI {
				left: 50%;
    			top: 15%;
			}

			#sumistroEquipamento{
				left: 50%;
    			top: 65%;
			}

			#implementacionSistemas{
				left: 65%;
				top: 5%;
			}
					
			#capacitacionUsuario{
				left: 10%;
    			top: 5%;
			}

			#impresora {
				left: 75%;
				top: 0%;
			}

			#phone {
				left: 56%;
    			top: 24%;
			}

			#desarrllodeproyectos {
				left: 35%;
    			top: 15%;
    		}

			#operaciondeproyectos {
				left: 57%;
    			top: 27%;
			}

			#cau {
				left: 63%;
    			top: 0%;
			}	

			#fsw {
				left: 58%;
    			top: 50%;
			}

			#ciberseguridad {
				left: 75%;
    			top: 75%;
			}

			#sap {
				left: 25%;
    			top: 60%;
    		}

    		#solucionesTI-corp{
    			left: 40%;
    			top: 75%;
    		}

    		#sumistroEquipamento-corp {
    			left: 12%	;
    			top: 40%;
			}

			#implementacionSistemas-corp {
				left: 50%;
    			top: 65%;
    		}

			#erp-corp{
				left: 71%;
    			top: 52%;
			}
    
	
</style>