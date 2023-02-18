<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $descripcion;?>">
  <meta name="theme-color" content="#111">

  <title><?php echo $name_seccion;?></title>

  <link rel="canonical" href="https://www.tutum.com.mx/<?php echo $canonical_name; ?>"> 

  <link href="images/logo/icon.png" rel="shortcut icon"/>
  <link rel="manifest" href="https://www.tutum.com.mx/images/logo/icon.png">
  <link rel="icon" type="icon" sizes="32x32" href="https://www.tutum.com.mx/images/logo/icon.png">
  <link rel="icon" type="icon" sizes="16x16" href="https://www.tutum.com.mx/images/logo/icon.png">

  <!-- css -->
  <link rel="stylesheet" href="<?php echo $url;?>css/styles.css"/>

  <!-- icons color solid -->
  <link rel="stylesheet" href="<?php echo $url;?>css/fontawesome-free-5.7.0-web/css/all.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-187877163-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-187877163-1');
    </script>
    
  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2SVY5SCEG4"></script>
    <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());

     gtag('config', 'G-2SVY5SCEG4');
    </script>


  <!-- cookies -->
    <link rel="stylesheet" href="<?php echo $url;?>js/pdcc.min.css">
    <script charset="utf-8" src="<?php echo $url;?>js/pdcc.min.js"></script>
    <script type="text/javascript">
      PDCookieConsent.config({
      "defaultLang" : "es",
      "brand": {
      "dev" : false,
      "name": "TUTUM TECH",
      "url" : "https://www.tutum.com.mx/",
      "websiteOwner" : "TUTUM S. A. de C. V"
      },
      "cookiePolicyLink": "https://www.tutum.com.mx/aviso-de-privacidad",
      "hideModalIn": ["https://www.tutum.com.mx/aviso-de-privacidad"],
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