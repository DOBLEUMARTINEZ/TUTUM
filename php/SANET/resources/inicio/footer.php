<div class="footer">

  <ol>
    <li>
      <h3><span>|</span> Menu</h3>
      <ul>
        <li onclick="window.location.href='./';">
          Inicio
        </li>
        <li onclick="window.location.href='./quienes-somos';" >
          Quiénes somos
        </li>
        <li onclick="window.location.href='./sanet';">
          Sanet
        </li>
        <li onclick="window.location.href='./contacto';">
          Contacto
        </li>
      </ul>
    </li>
    <li>
      <h3><span>|</span> Soluciónes</h3>
      <ul>
        <li onclick="window.location.href='./sanet';">
          Sanet
        </li>
        <li onclick="window.location.href='./modulos-his';">
          Módulos HIS
        </li>
        <li onclick="window.location.href='./modulos-his#modulos-administrativos';">
          Módulos administrativos
        </li>
        <li onclick="window.location.href='./modulos-his#modulos-clinicos';">
          Módulos clínicos
        </li>
        <li onclick="window.location.href='./modulos-his#modulos-configuracion';">
          Módulos de configuración
        </li>
      </ul>
    </li>
    <li>
      <h3><span>|</span> Contacto</h3>
      <ul>
        <li onclick="window.location.href='./';" >
          Email
        </li>
        <li onclick="window.location.href='./';" >
          Teléfono
        </li>
        <li onclick="window.location.href='./';" >
          Whatsapp
        </li>
        <li onclick="modalSanet(1, 'contacto')">
          Formulario de contacto
        </li>
      </ul>
    </li>
    <li>
      <h3><span>|</span> Ubicación</h3>
      <ul>
        <li onclick="window.location.href='./';">
          México
        </li>
      </ul>
    </li>
    <li>
      <img src="images/logo/logo-white.png">
      <ol>
        <li onclick="window.location.href='./';">
          <i class="fab fa-facebook-square"></i>
        </li>
        <li onclick="window.location.href='./';">
          <i class="fab fa-linkedin"></i>
        </li>
        <li onclick="window.location.href='./';">
          <i class="fab fa-twitter-square"></i>
        </li>
      </ol>
    </li>
  </ol>

	<p class="copyrigt">
		Copyright © <span>2022</span> <a onclick="window.location.href='./';" >sanet.com.mx</a>, Todos los derechos reservados.<a>Términos y Condiciones.</a> <a>Aviso de Privacidad</a>.
	</p>
</div>

<div id="modales-content">

  <div class="modal-sanet">
    <span></span>

    <div>

      <span onclick="modalSanet(0 , 1)" ><i class="fas fa-times"></i></span>

      <ol>
        <?php

        	if (isset($_GET['seccion']) && $_GET['seccion']=='modulos-his'){

        		include("resources/secciones/modales/modales-sanet.php"); // MODALES - SANET

        	}elseif (isset($_GET['seccion']) && $_GET['seccion']=='contacto') {

            include("resources/secciones/modales/modal-contacto.php"); // MODAL - CONTACTO
            
          }

        ?>
      </ol>

    </div>
    
  </div>
  
</div>

<!-- JS -->  
<script src="js/interactive.js"></script>
<script src="js/sweetalert2.js"></script>
<script src="js/sweetalert.min.js"></script>

