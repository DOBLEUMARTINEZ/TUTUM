<!-- BACKGROUND SECTION -->
<div class="body-content">
    <span class="background-section-darkness"></span>
    <span class="lateral-background latera-menu-off"></span>

	<!-- CONTENIDO LATERAL -->
	<div class="lateral-content">
	<?php

		// LLAVE EN MANO 
          if (strpos($_GET['seccion'], 'llave-en-mano')===false){}else{
            include("resources/proyectos/projects/llave-en-mano.php"); //CONTENIDO LLAVE EN MANO
          }

        // EN OPERACIÓN 
          if (strpos($_GET['seccion'], 'en-operacion')===false){}else{
            include("resources/proyectos/projects/en-operacion.php"); //CONTENIDO EN OPERACIÓN
          }

        // EN DESARROLLO 
          if (strpos($_GET['seccion'], 'en-desarrollo')===false){}else{
            include("resources/proyectos/projects/en-desarrollo.php"); //CONTENIDO EN DESARROLLO
          }

        include("resources/error.php"); // ERROR NOT FOUND
        
	?>
	</div>
	
</div>

