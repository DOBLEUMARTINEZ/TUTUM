<!-- contennedor de canvas -->
<div id="jm-canvas-content">

	<div id="tutum-edificio" onclick="openModal('tutum-edificio');">
		<span>TUTUM TECH</span>
	</div>

	<div id="hospital" onclick="openModal('Hospitales');">
		<span>HOSPITALES</span>
	</div>

	<div id="Corporativo" onclick="openModal('Corporativo');">
		<span>CORPORATIVOS</span>
	</div>

	<div id="residencial" onclick="openModal('Residencial');">
		<span>RESIDENCIAL</span>
	</div>


	<div id="seguridad" onclick="openModal('Seguridad');">
		<span>SEGURIDAD</span>
	</div>

	<div id="satelite">
		<img  src="images/town-resources/satelite.png" height="270" width="270">
	</div>

	<div id="nubes">
		<img  src="images/town-resources/nubes.png" height="250" width="250">
	</div>

	<div id="nubesdos">
		<img  src="images/town-resources/nubesdos.png" height="200" width="200">
	</div>

	<div id="avion">
		<img  src="images/town-resources/plane.png" height="250" width="250">
	</div>


	<div id="truck" >
		<img src="images/town-resources/truck.png" height="50" width="50">
	</div>

	<div id="taxi">
		<img src="images/town-resources/taxi2.png" height="40" width="40">
	</div>

    <canvas id="lienzo" width="1000" height="950"></canvas>

</div>

<!-- modales -->
<div id="modales">

    <div id="modal-city" class="modal-content">
    	<span onclick="colseModal('1');"><i class="fas fa-times"></i></span>

    	<!-- modal lateral -->
	    <?php include("resources/smart-city/second-layer-modal.php"); ?>
	    		
    	<!-- tutum Content <--></-->
    	<div id="tutumContent" class="cont-info-01">

    		<!-- locaciones de isometrics -->
    		<ul>
	    		<li id="desarrllodeproyectos" onclick="openLateralContent('onLateralContent','desarrllodeproyectos');" >
	    			<i class="fas fa-map-marker-alt"></i>Desarrollo de Proyectos
	    		</li>
	    		<li id="operaciondeproyectos" onclick="openLateralContent('onLateralContent','operaciondeproyectos');" >
	    			<i class="fas fa-map-marker-alt"></i>Operación de Proyectos
	    		</li>
	    		<li id="cau" onclick="openLateralContent('onLateralContent','cau');" >
	    			<i class="fas fa-map-marker-alt"></i>CAU
	    		</li>
	    		<li id="fsw" onclick="openLateralContent('onLateralContent','fsw');" >
	    			<i class="fas fa-map-marker-alt"></i>Fabrca de Software
	    		</li>
	    		<li id="ciberseguridad" onclick="openLateralContent('onLateralContent','ciberseguridad');" >
	    			<i class="fas fa-map-marker-alt"></i>Ciberseguridad
	    		</li>
	    		<li id="sap" onclick="openLateralContent('onLateralContent','sap');" >
	    			<i class="fas fa-map-marker-alt"></i>SAP
	    		</li>
    		</ul>
			<img src="images/town-resources/TUTUM-INTERIOR.png">
			<!-- contenido edificio tutum -->
    		<div>
    			<h2>TUTUM TECH</h2>
    			<p>Somos una empresa dinámica, innovadora y 100% mexicana; dedicada a brindar servicios de consultoría tecnológica y soluciones integrales de TI.</p>
    			<ol>
    				<li onclick="openLateralContent('onLateralContent','desarrllodeproyectos');" ><i class="fas fa-circle"></i> DESARROLLO DE PROYECTOS TI</li>
    				<li onclick="openLateralContent('onLateralContent','operaciondeproyectos');" ><i class="fas fa-circle"></i> OPERACIÓN DE PROYECTOS​</li>
    				<li onclick="openLateralContent('onLateralContent','cau');" ><i class="fas fa-circle"></i> CENTRO DE ATENCIÓN A USUARIOS​</li>
    				<li onclick="openLateralContent('onLateralContent','sap');" ><i class="fas fa-circle"></i> SAP​</li>
    				<li onclick="openLateralContent('onLateralContent','sih');" ><i class="fas fa-circle"></i> SOLUCIONES HOSPITALARIAS</li>
    				<li onclick="openLateralContent('onLateralContent','ciberseguridad');" ><i class="fas fa-circle"></i> CIBERSEGURIDAD</li>
    				<li onclick="openLateralContent('onLateralContent','fsw');" ><i class="fas fa-circle"></i> FÁBRICA DE SOFTWARE​</li>
    			</ol>
    			<br>
    			<button>Quiero saber más</button>
    		</div>
    	</div>

    	<!-- Hospital Content -->
    	<div id="hospitalContent" class="cont-info-01">
    		<ul>
    			<li id="sanet" onclick="openLateralContent('onLateralContent','sanet');">
    				<i class="fas fa-map-marker-alt"></i> SIH
    			</li>
    			<li id="solucionesTI" onclick="openLateralContent('onLateralContent','solucionesTI');">
    				<i class="fas fa-map-marker-alt"></i> Soluciones en<br> TI
    			</li>
    			<li id="sumistroEquipamento" onclick="openLateralContent('onLateralContent','sumistroEquipamento');">
    				<i class="fas fa-map-marker-alt"></i> Suministro de ​equipamiento
    			</li>
    			<li id="implementacionSistemas" onclick="openLateralContent('onLateralContent','implementacionSistemas');">
    				<i class="fas fa-map-marker-alt"></i>Implementación de ​sistemas​
    			</li>
    			<li id="capacitacionUsuario" onclick="openLateralContent('onLateralContent','capacitacionUsuario');">
    				<i class="fas fa-map-marker-alt"></i>Capacitación ​usuario final
    			</li>
    		</ul>
			<img src="images/town-resources/CLINICA_INTERIOR_01.png">
    		<div>
    			<h2>Hospitales</h2>
    			<p>Tenemos experiencia en los sectores de salud pública y privada gestionando hospitales a nivel nacional, contamos con una cobertura de centros de atención a usuarios y distribución en seis regiones estratégicamente ubicadas en la república mexicana.</p>
    			<ol>
    				<li onclick="openLateralContent('onLateralContent','sanet');" ><i class="fas fa-circle"></i> Sistemas de Información Hospitalaria(HIS)​</li>
    				<li onclick="openLateralContent('onLateralContent','solucionesTI');" ><i class="fas fa-circle"></i> Soluciones ​integrales en TI​</li>
    				<li onclick="openLateralContent('onLateralContent','sumistroEquipamento');" ><i class="fas fa-circle"></i> Suministro de ​equipamiento</li>
    				<li onclick="openLateralContent('onLateralContent','implementacionSistemas');" ><i class="fas fa-circle"></i> Implementación de ​sistemas​</li>
    				<li onclick="openLateralContent('onLateralContent','capacitacionUsuario');" ><i class="fas fa-circle"></i> Capacitación ​usuario final</li>
    			</ol>
    			<br>
    			<button>Quiero saber más</button>
    		</div>
    	</div>

    	<!-- Corporativo -->
    	<div id="CorporativoContent" class="cont-info-01">
    		<ul>
    			<li id="solucionesTI-corp" onclick="openLateralContent('onLateralContent','solucionesTI');">
    				<i class="fas fa-map-marker-alt"></i>Soluciones ​integrales en TI
    			</li>
    			<li id="sumistroEquipamento-corp" onclick="openLateralContent('onLateralContent','sumistroEquipamento');">
    				<i class="fas fa-map-marker-alt"></i> Suministro de ​equipamiento
    			</li>
    			<li id="implementacionSistemas-corp" onclick="openLateralContent('onLateralContent','implementacionSistemas');">
    				<i class="fas fa-map-marker-alt"></i> Implementación de ​sistemas​
    			</li>
    			<li id="erp-corp" onclick="openLateralContent('onLateralContent','ERP');">
    				<i class="fas fa-map-marker-alt"></i> ERP
    			</li>
    		</ul>
			<img src="images/town-resources/CORPORATIVO_INTERIOR_01.png">
    		<div>
    			<h2>Corporativo</h2>
    			<p>Ofrecemos servicios de diseño e implementación de soluciones tecnológicas y modernas, tanto de hardware como de software, lo cual nos permite implementar sistemas que mejoran la operación.</p>
    			<ol>
    				<li onclick="openLateralContent('onLateralContent','solucionesTI');"><i class="fas fa-circle"></i> Soluciones ​integrales en TI</li>
    				<li onclick="openLateralContent('onLateralContent','sumistroEquipamento');"><i class="fas fa-circle"></i> Suministro de ​equipamiento</li>
    				<li onclick="openLateralContent('onLateralContent','implementacionSistemas');"	><i class="fas fa-circle"></i> Implementación de ​sistemas​</li>
    				<li onclick="openLateralContent('onLateralContent','ERP');"><i class="fas fa-circle"></i> Planificación De Recursos Empresariales(ERP)​</li>
    				<li onclick="openLateralContent('onLateralContent','ciberseguridad');"><i class="fas fa-circle"></i> Ciberseguridad(SOC)</li>
    				<li onclick="openLateralContent('onLateralContent','poliza');"><i class="fas fa-circle"></i> Pólizas</li>
    				<li onclick="openLateralContent('onLateralContent','cableado');"><i class="fas fa-circle"></i> Cableado Estructurado​</li>
					<li onclick="openLateralContent('onLateralContent','telefono');"><i class="fas fa-circle"></i> Telefonía e Informática​</li>
					<li onclick="openLateralContent('onLateralContent','impresora');"><i class="fas fa-circle"></i> Cómputo e Impresión​</li>
					<li onclick="openLateralContent('onLateralContent','redes');"><i class="fas fa-circle"></i> Sistema de Redes Y Wifi</li>
					<li onclick="openLateralContent('onLateralContent','incendios');"><i class="fas fa-circle"></i> Detección de Incendios​</li>
					<li onclick="openLateralContent('onLateralContent','controlAcceso');"><i class="fas fa-circle"></i> Control de Acceso​</li>
					<li onclick="openLateralContent('onLateralContent','videoconferencia');"><i class="fas fa-circle"></i> Videoconferencias​</li>
    			</ol>
    			<button>Quiero saber más</button>
    		</div>
    	</div>

    	<!-- Residencial -->
    	<div id="ResidencialContent" class="cont-info-01">
    		<ul>
    			<li id="impresora" ><i class="fas fa-map-marker-alt"></i></li>
    			<li id="phone" ><i class="fas fa-map-marker-alt"></i></li>
    		</ul>
			<img src="images/town-resources/RECIDENCIA_INTERIOR_01.png">
    		<div>
    			<h2>Residencial</h2>
    			<p>Ofrecemos servicios de diseño e implementación de soluciones tecnológicas y modernas, tanto de hardware como de software, lo cual nos permite implementar sistemas que mejoran la operación.</p>
    			<ol>
					<li onclick="openLateralContent('onLateralContent','redes');"><i class="fas fa-circle"></i> Sistema de Redes Y Wifi​</li>
					<li onclick="openLateralContent('onLateralContent','CircuitosCerrado');"><i class="fas fa-circle"></i> Circuito Cerrado De Televisión​</li>
					<li onclick="openLateralContent('onLateralContent','incendios');"><i class="fas fa-circle"></i> Detección de Incendios​</li>
					<li onclick="openLateralContent('onLateralContent','controlAcceso');"><i class="fas fa-circle"></i> Control de Acceso​</li>
					<li onclick="openLateralContent('onLateralContent','voceo');"><i class="fas fa-circle"></i> Voceo y Sonorización​</li>
					<li onclick="openLateralContent('onLateralContent','intercomunicacion');"><i class="fas fa-circle"></i> Intercomunicación</li>
					<li onclick="openLateralContent('onLateralContent','sensores');"><i class="fas fa-circle"></i> Sensores Perimetrales​</li>
					<li onclick="openLateralContent('onLateralContent','ciberseguridad');"><i class="fas fa-circle"></i> Ciberseguridad(SOC)</li>
    			</ol>
    			<button>Quiero saber más</button>
    		</div>
    	</div>

    	<!-- Seguridad -->
    	<div id="SeguridadContent" class="cont-info-01">
    		<ul>
    			<li id="impresora" ><i class="fas fa-map-marker-alt"></i></li>
    			<li id="phone" ><i class="fas fa-map-marker-alt"></i></li>
    		</ul>
			<img src="images/town-resources/recidencia_interior.png">
    		<div>
    			<h2>Seguridad</h2>
    			<p>Ofrecemos servicios de diseño e implementación de soluciones tecnológicas y modernas, tanto de hardware como de software, lo cual nos permite implementar sistemas que mejoran la operación.</p>
    			<ol>
    				<li onclick="openLateralContent('onLateralContent','solucionesTI');"><i class="fas fa-circle"></i> Soluciones ​integrales en TI​</li>
					<li onclick="openLateralContent('onLateralContent','desarrllodeING');"><i class="fas fa-circle"></i> Desarrollo de ​ingenierías</li>
					<li onclick="openLateralContent('onLateralContent','sumistroEquipamento');"><i class="fas fa-circle"></i> Suministro de ​equipamiento</li>
					<li onclick="openLateralContent('onLateralContent','implementacionSistemas');"><i class="fas fa-circle"></i> Implementación de ​sistemas​</li>
					<li onclick="openLateralContent('onLateralContent','CircuitosCerrado');"><i class="fas fa-circle"></i> Circuito Cerrado De Televisión​</li>
					<li onclick="openLateralContent('onLateralContent','incendios');"><i class="fas fa-circle"></i> Detección de Incendios​</li>
					<li onclick="openLateralContent('onLateralContent','controlAcceso');"><i class="fas fa-circle"></i> Control de Acceso​</li>
					<li onclick="openLateralContent('onLateralContent','voceo');"><i class="fas fa-circle"></i> Voceo y Sonorización​</li>
					<li onclick="openLateralContent('onLateralContent','intercomunicacion');"><i class="fas fa-circle"></i> Intercomunicación</li>
					<li onclick="openLateralContent('onLateralContent','voceoIP');"><i class="fas fa-circle"></i> Voceo IP​</li>
					<li onclick="openLateralContent('onLateralContent','sustancias');"><i class="fas fa-circle"></i> Detección De Sustancias Y Objetos​</li>
					<li onclick="openLateralContent('onLateralContent','sensores');"><i class="fas fa-circle"></i> Sensores Perimetrales​</li>
					<li onclick="openLateralContent('onLateralContent','videoconferencia');"><i class="fas fa-circle"></i> Videoconferencias​</li>
					<li onclick="openLateralContent('onLateralContent','sanet');"><i class="fas fa-circle"></i> Inhibición Celular​</li>
					<li onclick="openLateralContent('onLateralContent','sanet');"><i class="fas fa-circle"></i> Control, Y Monitoreo (BMS)​</li>
					<li onclick="openLateralContent('onLateralContent','sanet');"><i class="fas fa-circle"></i> Integración De Sistemas ​</li>
					<li onclick="openLateralContent('onLateralContent','sanet');"><i class="fas fa-circle"></i> Radiocomunicación Segura</li>
					<li onclick="openLateralContent('onLateralContent','ciberseguridad');"><i class="fas fa-circle"></i> Ciberseguridad(SOC)</li>
    			</ol>
    			<button>Quiero saber más</button>
    		</div>
    	</div>

    </div>
    	
</div>

