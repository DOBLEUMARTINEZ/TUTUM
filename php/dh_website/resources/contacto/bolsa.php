<!-- FONDO DE SECCION -->
    <div id="square-banner-index">

    	<!-- IMAGEN DE FONDO -->
    	<img class="video-slide bann-fixed" src="images/img/bolsa-de-trbajo.jpg">
      	<img class="video-slide" src="images/img/bolsa-de-trbajo.jpg" style="opacity: 0;">

      	<!-- CUADRO DE TEXTO -->
      	<div class="square-logo-big" >
    	    <img src="images/logo/LOGO-WHITE.png" onclick="window.location.href='./';">
    	    <h2>BOLSA DE TRABAJO</h2>
    	    
    	    <i class="fas fa-chevron-down arrow-down " onclick="window.location.href='#start'"></i>
      	</div>

      	<!-- barra negra -->
          <span class="barra-negra"></span>

    </div>

<!-- MENU -->
<div class="square-07">
     <ul style="justify-content: center;">
        <li id="proyectos-active" class="service-menu-color" onclick="window.location.href='contactar#start';">
            <img class="fondos fondo-proyectos" src="<?php echo $url ?>images/img/ANTONIO_SENALA.jpg">
            <img src="<?php echo $url ?>images/icons/contacto/menu/telefono.gif" class="icon-menu-black">
            <img src="<?php echo $url ?>images/icons/contacto/menu/telefono.png" class="icon-menu-white" >
            <h2>CONTACTO</h2>
        </li>
        <li id="proyectos-active" class="service-menu-color service-active" onclick="window.location.href='bolsa-de-trabajo#start';">
            <img src="<?php echo $url ?>images/icons/contacto/menu/maletin.gif" class="icon-menu-black" style="opacity: 0;">
            <img src="<?php echo $url;?>images/icons/contacto/menu/maletin.png" class="icon-menu-white">
            <h2>BOLSA DE TRABAJO</h2>
        </li>
       
        <li id="proyectos-active" class="service-menu-color" onclick="window.location.href='https://cau.tutum.com.mx/dwp/app/#/account/login?returnUrl=%2F';">
            <img src="<?php echo $url ?>images/icons/contacto/menu/apoyo-tecnico.gif" class="icon-menu-black">
            <img src="<?php echo $url;?>images/icons/contacto/menu/apoyo-tecnico.png" class="icon-menu-white" >
            <h2>CAU</h2>
        </li> <!--
        <li id="proyectos-active" class="service-menu-color" onclick="window.location.href='./';" >
            <img src="<?php echo $url ?>images/icons/contacto/menu/acceso.gif" class="icon-menu-black">
            <img src="<?php echo $url;?>images/icons/contacto/menu/acceso.png" class="icon-menu-white" >
            <h2>INTRANET</h2>
        </li>-->
    </ul>
</div>


<a id="start"></a>

<!-- UBICACION 
<div class="square-contact-01">
    <img src="images/icons/contacto/bolsa-de-trabajo/busqueda-de-trabajo.png">
    <h2>VACANTES ​</h2>
</div>
<div class="square-contact-02">
    <center>
        <iframe src="https://www.occ.com.mx/" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </center>
    <ul>
        <li><i class="fas fa-phone"></i> Of. +52 (55) 55 79 59 11 77</li>
    </ul>
</div>-->

<!-- FORMULARIO -->
<form action="./" method="POST" enctype="multipart/form-data" onsubmit="miFuncion()">
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
                    </li>
                    <li style="position: relative;">
                        <label>ESPECIALIDAD* </label>
                        <select name="especialidad">
                            <option value="none" >-- SELECCIONA --</option>
                            <option value="DESARROLLO DE PROYECTOS" >DESARROLLO DE PROYECTOS</option>
                            <option value="OPERACION DE PROYECTOS" >OPERACION DE PROYECTOS</option>
                            <option value="CAU" >CAU</option>
                            <option value="SAP" >SAP</option>
                            <option value="CIBERSEGURIDAD" >CIBERSEGURIDAD</option>
                            <option value="HOSPITALES" >HOSPITALES</option>
                            <option value="FABRICA DE SOFTWARE" >FABRICA DE SOFTWARE</option>
                        </select>
                        <br><br>
                        <input  type="file" name="cv" id="cv" class="inputfile" data-multiple-caption="{count} files selected" multiple>
                        <label  for="cv" > <img style="width: 2vw;position: absolute;left: -4vw;" src="images/icons/contacto/bolsa-de-trabajo/clip-de-papel.png"> ADJUNTAR CV</label>
                    </li>
                </ol>
            </li>
            <li class="li-3" >
                <img src="images/logo/LOGO TUTUM-FULL COLOR-RGB-03.png"><br>
                <div class="g-recaptcha" data-sitekey="6LdfL14gAAAAAEuvne6SqZUsgDxEpo02_znAUzNj" data-callback="verifyCaptcha"></div>
                <input id="re-capcha" name="recapcha" value="0" type="hidden" >
                <button name="action" value="bolsa" onclick ="miFuncion()" >ENVIAR</button>
            </li>
        </ul>
    </div>
</form>
<hr class="barra-colores-01">
