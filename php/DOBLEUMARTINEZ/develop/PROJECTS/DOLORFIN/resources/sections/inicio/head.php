<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $description_tag;?>">
  <link rel="canonical" href="<?php echo $canonical_tag;?>"> 
  <meta name="author" content="Jose Martinez">
  <meta name="theme-color" content="#111">

  <title><?php echo $title_tag;?></title>

  <link href="<?php echo $url;?>resources/images/icon.png" rel="shortcut icon"/>

  <link rel="manifest" href="<?php echo $url;?>resources/images/icon.png">
  <link rel="icon" type="resources/images/icon.png" sizes="32x32" href="<?php echo $url;?>resources/images/icon.png">
  <link rel="icon" type="resources/images/icon.png" sizes="16x16" href="<?php echo $url;?>resources/images/icon.png">

  <meta property="og:title" content="Dolorfin especialista Quiropráctico, Fisioterapeuta y Masajista">
  <meta property="og:site_name" content="Dolorfin Zona Esmeralda">
  <meta property="og:url" content="https://dolorfinesmeralda.com"/>
  <meta property="og:description" content="Dolor Fin especialista quiropráctico, fisioterapeuta, masajista en tratamientos y rehabilitación 100% personalizados, eliminamos el dolor de tu vida.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://dolorfinesmeralda.com/resources/images/icon.png">

  <!-- css -->
  <link rel="stylesheet" href="<?php echo $url;?>resources/css/styles.css"/>
  <link rel="stylesheet" href="<?php echo $url;?>resources/css/fontawesome-free-5.7.0-web/css/all.css">

  <!--jquery
  <script src="<?php echo $url;?>/resources/js/jquery.min.js"></script> -->

  <!-- Recapcha 
   <script src="https://www.google.com/recaptcha/api.js"></script>
   <script>
     function onSubmit(token) {
       document.getElementById("demo-form").submit();
     }
   </script>-->

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NDH57KDJ3H"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-NDH57KDJ3H');
  </script>
  
  <!-- cookies -->
    <link rel="stylesheet" href="<?php echo $url;?>resources/js/pdcc.min.css">
    <script charset="utf-8" src="<?php echo $url;?>resources/js/pdcc.min.js"></script>
    <script type="text/javascript">
      PDCookieConsent.config({
      "defaultLang" : "es",
      "brand": {
      "dev" : false,
      "name": "Dolorfin Zona Esmeralda",
      "url" : "https://dolorfinesmeralda.com/",
      "websiteOwner" : "Dolorfin Zona Esmeralda"
      },
      "cookiePolicyLink": "https://dolorfinesmeralda.com/aviso-de-privacidad",
      "hideModalIn": ["https://dolorfinesmeralda.com/aviso-de-privacidad"],
      "styles": {
      "primaryButton": {
      "bgColor" : "#111",
      "txtColor": "#fff"
      },
      "secondaryButton": {
      "bgColor" : "#EEEEEE",
      "txtColor": "#333333"
      }
      }
      });
    </script>
</head>