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
        <li onclick="window.location.href='./licencias';">
          Licencias
        </li>
        <li onclick="window.location.href='./contacto';">
          Contacto
        </li>
      </ul>
    </li>
    <li>
      <h3><span>|</span> Soluciones</h3>
      <ul>
        <li onclick="window.location.href='./sanet';">
          Sanet
        </li>
        <li onclick="window.location.href='./modulos-sih';">
          Módulos HIS
        </li>
        <li onclick="window.location.href='./modulos-sih#modulos-administrativos';">
          Módulos administrativos
        </li>
        <li onclick="window.location.href='./modulos-sih#modulos-clinicos';">
          Módulos clínicos
        </li>
        <li onclick="window.location.href='./modulos-sih#modulos-configuracion';">
          Módulos de configuración
        </li>
      </ul>
    </li>
    <li>
      <h3><span>|</span> Contacto</h3>
      <ul>
        <li onclick="window.location.href='mailto:contacto@sanet.com.mx';" >
          <i class="fas fa-envelope"></i> contacto<span style="font-family: 'Eight One';font-weight: lighter;font-size: 25px;">@</span>sanet.com.mx
        </li>
        <li onclick="window.location.href='tel:525579285696';" >
          <span style="font-family: 'arial';font-weight: lighter;font-size: 20px;"><i class="fas fa-phone"></i> 55 7928 5696</span>
        </li>
        <li onclick="window.location.href='https://api.whatsapp.com/send?phone=525579285696&text=Estoy%20interesado%20en%20conocer%20mas%20sobre%20sanet';" >
          <i class="fab fa-whatsapp"></i> Whatsapp
        </li>
        <li onclick="window.location.href='./contacto';">
          <i class="far fa-paper-plane"></i> Formulario de contacto
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
      <img src="images/logo/logo-white.png" title="logo sanet blanco " alt="Logo blanco Sanet png">
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
		Copyright © <span>2022</span> <a href="./" >sanet.com.mx</a>, Todos los derechos reservados.<a href="./">Términos y Condiciones.</a> <a href="./">Aviso de Privacidad</a>.
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

