<!-- Recaptcha -->
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

<!-- FONDO DE SECCION -->
    <div id="square-banner-index">

    	<!-- IMAGEN DE FONDO -->
    	<img class="video-slide bann-fixed" src="images/img/contacto.jpg">
      	<img class="video-slide" src="images/img/contacto.jpg" style="opacity: 0;">

      	<!-- CUADRO DE TEXTO -->
      	<div class="square-logo-big" >
    	    <img src="images/logo/LOGO-WHITE.png" onclick="window.location.href='./';">
    	    <h2>CONTACTO</h2>
    	    <i class="fas fa-chevron-down arrow-down " onclick="window.location.href='#start'"></i>
      	</div>

    </div>

<a id="start"></a>

<!-- FORMULARIO -->
<form action="./" method="POST" enctype="multipart/form-data">
    <div class="square-contact-03">
        <ul>
            <li class="li-1">
                <img src="images/icons/contacto/contacto/correo.png">
                <h2>CONTACTO </h2> 
            </li>
            <li class="li-2">
                <ol>
                    <li>
                        <label>NOMBRE*</label>
                        <input type="text" name="nombre" placeholder="Escribe tu nombre" required maxlength="30" onkeypress="return soloLetras(event)">
                        <label>CORREO ELECTRONICO*</label>
                        <input type="email" name="email" placeholder="example@tutum.com.mx" required>
                        <label>TELEFONO* ​</label>
                        <input type="phone" name="telefono" placeholder="5523654965" required maxlength="10" onkeypress="return soloNumeros(event)">
                        <label>EMPRESA*</label>
                        <input type="text" name="empresa" placeholder="Empresa" required maxlength="20" onkeypress="return soloLetras(event)">
                        <label>CIUDAD* </label>
                        <select name="ciudad">
                            <option value ="nada">-- SELECCIONA --</option>
                            <option value="Aguascalientes">Aguascalientes</option>
                            <option value="Baja California">Baja California</option>
                            <option value="Baja California Sur">Baja California Sur</option>
                            <option value="Campeche">Campeche</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="CDMX">Ciudad de México</option>
                            <option value="Coahuila">Coahuila</option>
                            <option value="Colima">Colima</option>
                            <option value="Durango">Durango</option>
                            <option value="Estado de México">Estado de México</option>
                            <option value="Guanajuato">Guanajuato</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Hidalgo">Hidalgo</option>
                            <option value="Jalisco">Jalisco</option>
                            <option value="Michoacán">Michoacán</option>
                            <option value="Morelos">Morelos</option>
                            <option value="Nayarit">Nayarit</option>
                            <option value="Nuevo León">Nuevo León</option>
                            <option value="Oaxaca">Oaxaca</option>
                            <option value="Puebla">Puebla</option>
                            <option value="Querétaro">Querétaro</option>
                            <option value="Quintana Roo">Quintana Roo</option>
                            <option value="San Luis Potosí">San Luis Potosí</option>
                            <option value="Sinaloa">Sinaloa</option>
                            <option value="Sonora">Sonora</option>
                            <option value="Tabasco">Tabasco</option>
                            <option value="Tamaulipas">Tamaulipas</option>
                            <option value="Tlaxcala">Tlaxcala</option>
                            <option value="Veracruz">Veracruz</option>
                            <option value="Yucatán">Yucatán</option>
                            <option value="Zacatecas">Zacatecas</option>
                        </select>
                    </li>
                    <li>
                        <label>SERVICIO* </label>
                        <select name="servicio">
                            <option value="none" >-- SELECCIONA --</option>
                            <option value="DESARROLLO DE PROYECTOS" >DESARROLLO DE PROYECTOS</option>
                            <option value="OPERACION DE PROYECTOS" >OPERACION DE PROYECTOS</option>
                            <option value="CAU" >CAU</option>
                            <option value="SAP" >SAP</option>
                            <option value="CIBERSEGURIDAD" >CIBERSEGURIDAD</option>
                            <option value="HOSPITALES" >HOSPITALES</option>
                            <option value="FABRICA DE SOFTWARE" >FABRICA DE SOFTWARE</option>
                        </select>
                        <label>¿MEDIO DE CONTACTO?</label><br>
                        <select name="contacto">
                            <option value="none">-- SELECCIONA --</option>
                            <option value="MAIL">MAIL</option>
                            <option value="TELÉFONO">TELÉFONO</option>
                            <option value="WHATSAPP">WHATSAPP</option>
                        </select>
                        <label>COMENTARIOS</label>
                        <textarea name="comentarios" placeholder="Escribe tus comentarios adicionales" ></textarea>
                    </li>
                </ol>
            </li>
            <li class="li-3" >
                <img src="images/logo/LOGO TUTUM-FULL COLOR-RGB-03.png"><br>    

                <div class="g-recaptcha" data-sitekey="6Lfac-QjAAAAAHia0JzxA2rddjdllDlOsCmETaUD" data-callback="verifyCaptcha"   ></div>

                <input id="re-capcha" name="recapcha" value="0" type="hidden">
                <input id="security-form" type="text" name="security" required style="opacity: 0;">

                <button name="action" value="new_contact" onclick ="miFuncion()" >ENVIAR</button>
            </li>
        </ul>
    </div>
</form>

<!-- UBICACION -->
<div class="square-contact-01">
    <img src="images/icons/contacto/contacto/marcador-de-posicion.png">
    <h2>UBICACION</h2>
</div>
<div class="square-contact-02">
    <center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15057.159107917738!2d-99.1847676!3d19.3566015!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb8cb7dd5f0cfd095!2sTUTUM%20TECH%2C%20S.A.%20DE%20C.V.!5e0!3m2!1ses-419!2smx!4v1654112849588!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </center>
    <ul>
        <li><i class="fas fa-map-marker-alt"></i> Av. de los Insurgentes Sur 1811-piso 5,Guadalupe Inn,<br>  Álvaro Obregón, 01020 Ciudad de México, CDMX</li>
        <li><i class="fas fa-phone"></i> Of. +52 (55) 55 86 23 06 60</li>
        <li>​<i class="fab fa-whatsapp"></i> Whatsapp 55 79 59 1149</li>
    </ul>
</div>

<script type="text/javascript">

    function soloLetras(e) {
        var key = e.keyCode || e.which,
          tecla = String.fromCharCode(key).toLowerCase(),
          letras = " ABCDEFGHIJKLMNOPQRSTUVWXYZÁÉÍÓÚabcdefghijklmnopqrstuvwxyzáéíóú",
          especiales = [8, 37, 39, 46],
          tecla_especial = false;

        for (var i in especiales) {
          if (key == especiales[i]) {
            tecla_especial = true;
            break;
          }
        }

        if (letras.indexOf(tecla) == -1 && !tecla_especial) {
          return false;
        }

      }

    function soloNumeros(e) {
        var key = e.keyCode || e.which,
          tecla = String.fromCharCode(key).toLowerCase(),
          letras = " 0123456789",
          especiales = [8, 37, 39, 46],
          tecla_especial = false;

        for (var i in especiales) {
          if (key == especiales[i]) {
            tecla_especial = true;
            break;
          }
        }

        if (letras.indexOf(tecla) == -1 && !tecla_especial) {
          return false;
        }

      }
</script>

<script src="js/sweetalert2.js"></script>
<script src="js/sweetalert.min.js"></script>

<hr class="barra-colores-01">
