<!-- VALIDAR FORM -->
<script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
      function miFuncion() {

        var response = grecaptcha.getResponse();

        if(response.length == 0){
          $( document ).ready(function() {
            Swal.fire({
                icon: 'error',
                title:'Algo salio mal',
                text: 'Porfavor intenta llenando todos los campos requeridos',
                /*showCloseButton: true,*/
                focusConfirm: false,
                timerProgressBar: true,
                confirmButtonText:'Continuar',
                confirmButtonAriaLabel: 'Send'
            });
          });
        } else {
            document.getElementById("re-capcha").value=1;
            document.getElementById("security-form").value=1;
        }
      }
</script>

<!-- CONTACTO -->
<div id="modulo-contact-content">

	<div class="bloque-1">

		<img src="images/img/contacto-1.jpg" class="desktop" style="width: 100%;" title="Contacto sanet" alt="Mujer Escribiendo en Laptop en Escritorio Y Teléfono">

  	<ol>
  		<li style="background: #28a745;">
  			Mensaje de WhatsApp <i class="fas fa-chevron-right"></i>
  		</li>
  		<li onclick="modalSanet(1, 'contacto')" >
  			Agenda una reunión <i class="fas fa-chevron-right"></i>
  		</li>
  	</ol>

    <div class="Form-box">
      <form action="./" method="POST" enctype="multipart/form-data" >
            <h2>Contáctanos</h2>
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
                <input type="email" name="email" placeholder="example@sanet.com.mx" required>
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
    </div>

		<ul>
			<li>
				<h2>Dirección</h2>
				<p>México</p>
			</li>
			<li>
				<h2>Contacto</h2>
				<p>
					<a>Email <span></span></a><br>
					<a>Teléfono <span></span></a><br>
					<a>Whatsapp <span></span></a>
				</p>	
			</li>
			<li>
				<h2>Horarios</h2>
				<p>
					Lunes - Viernes <span>8:00</span> am - <span>8:00</span> pm<br>
				</p>	
			</li>
		</ul>

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15007901.526476916!2d-111.63885067671652!3d23.31436337666863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84043a3b88685353%3A0xed64b4be6b099811!2zTcOpeGljbw!5e0!3m2!1ses-419!2smx!4v1666631417536!5m2!1ses-419!2smx" style="border:0; width: 100%; height: 300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

	</div>
  
</div>






