<div style="position: relative;">
	<!-- -->
	<img src="images/img/ANTONIO_SENALA.jpg" style="position: fixed; width: 100%; z-index: -99">
  	<img class="video-slide" src="images/img/ANTONIO_SENALA.jpg" style="opacity: 0;">

  	<!-- -->
  	<div class="square-logo-big" >
	    <img src="images/logo/LOGO-WHITE.png" onclick="window.location.href='./';">
	    <h2>CONTACTO</h2>
	    <i class="fas fa-chevron-down arrow-down " onclick="window.location.href='#start'"></i>
  	</div>

  	<!-- barra negra -->
      <span class="barra-negra"></span>

</div>

<!-- MENU -->
<div class="square-07">
     <ul style="justify-content: center;">
        <li style="margin: 0 2%;" id="proyectos-active" class="service-menu-color service-active" onclick="window.location.href='contactar';">
            <img src="<?php echo $url ?>images/icons/contacto/menu/telefono.gif" class="icon-menu-black" style="opacity: 0;">
            <img src="<?php echo $url ?>images/icons/contacto/menu/telefono.png" class="icon-menu-white" >
            <h2>CONTACTO</h2>
        </li>
        <li style="margin: 0 2%;" id="proyectos-active" class="service-menu-color" onclick="window.location.href='bolsa-de-trabajo';">
            <img class="fondos fondo-proyectos" src="<?php echo $url ?>images/img/PERSONAL_9.jpg">
            <img src="<?php echo $url ?>images/icons/contacto/menu/maletin.gif" class="icon-menu-black">
            <img src="<?php echo $url;?>images/icons/contacto/menu/maletin.png" class="icon-menu-white">
            <h2>BOLSA DE TRABAJO</h2>
        </li>
        <li style="margin: 0 2%;" id="proyectos-active" class="service-menu-color" onclick="window.location.href='https://cau.tutum.com.mx/dwp/app/#/account/login?returnUrl=%2F';">
            <img src="<?php echo $url ?>images/icons/contacto/menu/apoyo-tecnico.gif" class="icon-menu-black">
            <img src="<?php echo $url;?>images/icons/contacto/menu/apoyo-tecnico.png" class="icon-menu-white" >
            <h2>CAU</h2>
        </li>
        <li style="margin: 0 2%;" id="proyectos-active" class="service-menu-color" onclick="window.location.href='./';" >
            <img src="<?php echo $url ?>images/icons/contacto/menu/acceso.gif" class="icon-menu-black">
            <img src="<?php echo $url;?>images/icons/contacto/menu/acceso.png" class="icon-menu-white" >
            <h2>INTRANET</h2>
        </li>
    </ul>
</div>
<a id="start"></a>
<hr class="barra-colores-01">

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
        <li><i class="fas fa-phone"></i> Of. +52 (55) 55 79 59 11 77</li>
        <li>​<i class="fab fa-whatsapp"></i> Whatsapp 55 79 59 1149</li>
    </ul>
</div>

<!-- FORMULARIO -->
<form>
    <div class="square-contact-03">
        <ul>
            <li style="width: 20%;">
                <img src="images/icons/contacto/contacto/correo.png">
                <h2>CONTACTO </h2> 
            </li>
            <li style="width: 60%;">
                <ol>
                    <li>
                        <label>NOMBRE*</label>
                        <input type="text" name="nombre" placeholder="Escribe tu nombre">
                        <label>CORREO ELECTRONICO*</label>
                        <input type="email" name="email" placeholder="example@tutum.com.mx">
                        <label>TELEFONO* ​</label>
                        <input type="phone" name="telefono" placeholder="5523654965">
                        <label>EMPRESA*</label>
                        <input type="text" name="empresa" placeholder="Empresa">
                        <label>CIUDAD* </label>
                        <select>
                            <option>-- SELECCIONA --</option>
                            <option>CDMX</option>
                            <option>EDOMEX</option>
                        </select>
                    </li>
                    <li>
                        <label>SERVICIO* </label>
                        <select>
                            <option>-- SELECCIONA --</option>
                            <option>DESARROLLO DE PROYECTOS</option>
                            <option>OPERACION DE PROYECTOS</option>
                            <option>CAU</option>
                            <option>SAP</option>
                            <option>CIBERSEGURIDAD</option>
                            <option>HOSPITALES</option>
                            <option>FABRICA DE SOFTWARE</option>
                        </select>
                        <label>COMENTARIOS</label>
                        <textarea placeholder="Escribe tus comentarios adicionales"></textarea>
                        <label>¿MEDIO DE CONTACTO?</label>
                        <input style="width: 3vw;" type="radio" name="fav_language" value="HTML">MAIL
                        <input style="width: 3vw;" type="radio" name="fav_language" value="HTML">TELÉFONO
                        <input style="width: 3vw;" type="radio" name="fav_language" value="HTML">WHATSAPP 
                    </li>
                </ol>
            </li>
            <li style="width: 20%;" >
                <img style="width: 80%;" src="images/logo/logo.png"><br>
                <button>ENVIAR</button>
            </li>
        </ul>
    </div>
</form>
<hr class="barra-colores-01">
