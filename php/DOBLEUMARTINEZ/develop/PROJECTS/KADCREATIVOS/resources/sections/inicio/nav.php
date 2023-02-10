<!-- NAV BAR -->
<nav class="nav-bar">
  <ul>
    <li onclick="window.location.href='<?php echo $url?>';" >
      Inicio
    </li>
    <li onclick="window.location.href='<?php echo $url?>#quienes-somos';" >
      Quienes somos
    </li>
    <li id='drop-down-wm'>
      <a href="<?php echo $url?>#servicios">Servicios</a>
      <ol class='drop-down-list'>
        <li onclick="window.location.href='<?php echo $url?>contenido-web';">Contenido web</li>
        <li onclick="window.location.href='<?php echo $url?>foto-y-video';">Foto y video</li>
        <li onclick="window.location.href='<?php echo $url?>imagen-corporativa';">Imagen corporativa</li>
        <li onclick="window.location.href='<?php echo $url?>impresion-digital';">Impresión digital</li>
        <li onclick="window.location.href='<?php echo $url?>redes-sociales';">Redes sociales</li>
      </ol>
    </li>
    <li id='drop-down-wm-2'>
    	<a href="<?php echo $url?>#otros-servicios">Otros servicios</a>
      <ol class='drop-down-list'>
        <li onclick="window.location.href='<?php echo $url?>impresion';" >Impresión</li>
        <li onclick="window.location.href='<?php echo $url?>stickers';" >Stickers</li>
        <li onclick="window.location.href='<?php echo $url?>banners';" >Banners</li>
        <li onclick="window.location.href='<?php echo $url?>cuadros';" >Cuadros</li>
        <li onclick="window.location.href='<?php echo $url?>tarjetas';" >Tarjetas</li>
        <li onclick="window.location.href='<?php echo $url?>promocionales';" >Promocinales</li>
      </ol>
    </li>
    <li onclick="window.location.href='<?php echo $url?>#contacto';" >
    	Contacto
   	</li>
  </ul>
</nav>

<!-- CTA - WHATSAPP 
<button class="cta-wha-flotante" onclick="window.open('https://api.whatsapp.com/send?phone=5529574690&text=Me%20interesa%20agendar%20una%20cita%20en%20Dolorfin%20Zona%20Esmeralda');" >
	<i class="fab fa-whatsapp"></i>
</button>-->