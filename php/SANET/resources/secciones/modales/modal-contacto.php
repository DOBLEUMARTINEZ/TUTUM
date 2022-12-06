<li id="modulo-contacto" class="modulo-off">

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
        </li>