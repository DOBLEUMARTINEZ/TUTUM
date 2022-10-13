<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo strtoupper($name_seccion);?>">
  <meta name="theme-color" content="#111">

  <title><?php echo strtoupper($name_seccion);?></title>

  <link href="<?php echo $url;?>images/logo/icon.png" rel="shortcut icon"/>

  <link rel="manifest" href="<?php echo $url;?>images/logo/icon.png">
  <link rel="icon" type="<?php echo $url;?>images/logo/icon.png" sizes="32x32" href="<?php echo $url;?>images/logo/icon.png">
  <link rel="icon" type="<?php echo $url;?>images/logo/icon.png" sizes="16x16" href="<?php echo $url;?>images/logo/icon.png">

  <!-- css -->
  <link rel="stylesheet" href="<?php echo $url;?>css/styles.css"/>

  <!-- icons CDN -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!--jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Google Analytics -->
    
  <!-- Recaptcha -->
  <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
      function miFuncion() {

        var response = grecaptcha.getResponse();

        if(response.length == 0){
          //alert('Algo salio mal');
        } else {
            //alert('correto');
            document.getElementById("re-capcha").value=1;
        }
      }
  </script>
  
</head>