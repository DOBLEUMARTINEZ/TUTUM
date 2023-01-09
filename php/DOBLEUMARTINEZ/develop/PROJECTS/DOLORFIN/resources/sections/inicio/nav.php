<!-- NAV BAR -->
<nav class="nav-bar">
  <ul>
    <li onclick="window.location.href='<?php echo $url;?>';" >
      <img width="200" height="67" src="<?php echo $url;?>/resources/images/LOGO-DOLORFIN.png" title="Dolorfin Zona Esperalda" alt="Logotipo dolordin zona ezperalda color blanco png">
    </li>
    <li onclick="window.location.href='mailto:contacto@dolorfinzonaesmeralda.com';" >
    	<i class="fas fa-envelope"></i> <span>contacto@dolorfinzonaesmeralda.com</span>
    </li>
    <li onclick="window.location.href='tel:5529574690';" >
    	<i class="fas fa-phone"></i> <span>55 2957 4690</span>
    </li>
    <li onclick="window.location.href='<?php echo $url;?>#contacto';" class="cta-nav" >
    	Agenda una cita
   	</li>
  </ul>
</nav>

<!-- CTA - WHATSAPP -->
<button class="cta-wha-flotante" onclick="window.open('https://api.whatsapp.com/send?phone=5529574690&text=Me%20interesa%20agendar%20una%20cita%20en%20Dolorfin%20Zona%20Esmeralda');" >
	<i class="fab fa-whatsapp"></i>
</button>