<div class="footer">

  <ol>
    <li>
      <h3><span>|</span> Menu</h3>
      <ul>
        <li>
          Inicio
        </li>
        <li>
          Quiénes somos
        </li>
        <li>
          Sanet
        </li>
        <li>
          Contacto
        </li>
      </ul>
    </li>
    <li>
      <h3><span>|</span> Soluciónes</h3>
      <ul>
        <li>
          Sanet
        </li>
        <li>
          Módulos administrativos
        </li>
        <li>
          Módulos clínicos
        </li>
        <li>
          Módulos de configuración
        </li>
      </ul>
    </li>
    <li>
      <h3><span>|</span> Contacto</h3>
      <ul>
        <li>
          Email
        </li>
        <li>
          Teléfono
        </li>
        <li>
          Whatsapp
        </li>      </ul>
    </li>
    <li>
      <h3><span>|</span> Ubicación</h3>
      <ul>
        <li>
          México
        </li>
      </ul>
    </li>
    <li>
      <img src="images/logo/logo-white.png">
      <ol>
        <li>
          <i class="fab fa-facebook-square"></i>
        </li>
        <li>
          <i class="fab fa-linkedin"></i>
        </li>
        <li>
          <i class="fab fa-twitter-square"></i>
        </li>
      </ol>
    </li>
  </ol>

	<p class="copyrigt">
		Copyright © <span>2022</span> <a onclick="window.open('http://www.tutum.com.mx/')">sanet.com.mx</a>, Todos los derechos reservados.<a>Términos y Condiciones.</a> <a>Aviso de Privacidad</a>.
	</p>
</div>

<div id="modales-content">

  <div class="modal-sanet">
    <span></span>

    <div>

      <span onclick="modalSanet(0 , 1)" ><i class="fas fa-times"></i></span>

      <ol>
        
        <li id="modulo-contacto">
          <form action="./" method="POST" enctype="multipart/form-data" >
            <h3>Contáctanos</h3>
          <p>
            Llena el formulario de contacto para conocer más de alguna de nuestras soluciones.
          </p>
            <ul>
              <li>
                <label>Nombre</label><br>
                <input type="text" name="nombre" placeholder="Escribe tu nombre" required maxlength="30" onkeypress="return soloLetras(event)">
              </li>
              <li>
                <label>Teléfono</label><br>
                <input type="phone" name="telefono" placeholder="5523654965" required maxlength="10" onkeypress="return soloNumeros(event)" >
              </li>
              <li>
                <label>Email</label><br>
                <input type="email" name="email" placeholder="example@tutum.com.mx" required>
              </li>
              <li>
                <label>Escribe tu mensaje</label><br>
                <textarea name="comentarios" placeholder="Escribe tus comentarios adicionales"></textarea>
              </li>
              <li>
                <div class="g-recaptcha" data-sitekey="6LfDOY8iAAAAAOkh2mDFH80NQ7DTcbEkW3jnEJeC" data-callback="verifyCaptcha" ></div>
          <input id="re-capcha" name="recapcha" value="0" type="hidden">
          <input id="security-form" type="text" name="security" required style="opacity: 0;">
              </li> 
              <li>
                <button name="action" value="new_contact" onclick ="miFuncion()">Aceptar</button> 
              </li>
          </ul>
          </form>
        </li>

        <?php 
        	if (isset($_GET['seccion']) && $_GET['seccion']=='sanet' ){
        		include("resources/secciones/modales/modales-sanet.php"); // MODALES - SANET
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

