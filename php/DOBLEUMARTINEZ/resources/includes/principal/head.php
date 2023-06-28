<?php
 if (isset($_GET['seccion'])) {

  $title_page = "Dobleu Martinez ".$_GET['seccion'];
  $page_description = "Dobleu Martinez ".$_GET['seccion'];

 }else{
  $title_page = "Agencia de Marketing Digital";
  $page_description = "Agencia de Marketing Digital especializada en Estrategias Digitales, Paginas web, Landig Pages, Google Ads, Diseño Grafico y mucho más";
 }

?>
<head>

	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $page_description;?> | Dobleu Martinez">
  <meta name="author" content="Dobleu Martinez">
  <meta name="theme-color" content="#111">
  <link rel="canonical" href="dobleumartinez.com"> 
  
  <title><?php echo $title_page;?> | Dobleu Martinez </title>

  <!-- ICONS -->
	<link rel="shortcut icon" href="https://dobleumartinez.com/resources/images/wm-icon.png"/>
	<link rel="manifest" href="https://dobleumartinez.com/resources/images/wm-icon.png">
	<link rel="icon" type="https://dobleumartinez.com/resources/images/wm-icon.png" sizes="32x32" href="https://dobleumartinez.com/resources/images/wm-icon.png">
	<link rel="icon" type="https://dobleumartinez.com/resources/images/wm-icon.png" izes="16x16" href="https://dobleumartinez.com/resources/images/wm-icon.png">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="resources/css/style.css">
  <link rel='stylesheet' href='resources/css/fontawesome-free-5.7.0-web/css/all.css'>

  <!-- JS -->
  <script src="resources/js/jquery.min.js"></script>
	
  <!-- Google tag (gtag.js) -->
  
  	
  	
</head>