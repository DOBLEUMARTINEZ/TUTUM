<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $description_tag;?>">
  <link rel="canonical" href="<?php echo $canonical_tag;?>"> 
  <meta name="theme-color" content="#111">

  <title><?php echo $title_tag;?></title>

  <link href="<?php echo $url;?>/resources/images/icon.png" rel="shortcut icon"/>

  <link rel="manifest" href="<?php echo $url;?>/resources/images/icon.png">
  <link rel="icon" type="resources/images/icon.png" sizes="32x32" href="<?php echo $url;?>/resources/images/icon.png">
  <link rel="icon" type="resources/images/icon.png" sizes="16x16" href="<?php echo $url;?>/resources/images/icon.png">

  <!-- css -->
  <link rel="stylesheet" href="<?php echo $url;?>/resources/css/styles.css"/>
  <link rel="stylesheet" href="<?php echo $url;?>/resources/css/fontawesome-free-5.7.0-web/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--jquery-->
  <script src="<?php echo $url;?>/resources/js/jquery.min.js"></script> 

  <!-- Recapcha -->
   <script src="https://www.google.com/recaptcha/api.js"></script>
   <script>
     function onSubmit(token) {
       document.getElementById("demo-form").submit();
     }
   </script>
  
  <!-- Google Analytics -->
  
  
</head>