<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sipla - Elementos Constructivos">
  <meta name="author" content="Dimarketing">

  <!-- Favicon -->   
  <link href="./images/icon/icon.png" rel="shortcut icon"/>

  <title>Sipla - Blog</title> 

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- STYLE W -->
    <link href="./css/style.css" rel="stylesheet">

  <!-- slider --> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!--icons--->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  <!--jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!--fonts--->
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  
</head>

  <body>

    <!-- bitton whatsApp-->
    <button class="button-whatsapp" 
      onclick="window.open('https://wa.me/525540602956?text=<?php 
      echo(str_replace(' ', '%20', 'Me interesan Elementos Constructivos')) ?>');" 
      >
        <p><i class="fab fa-whatsapp"></i></p><h2>Cotiza ahora</h2>
    </button>

    <?php include("./php/head.php");?>


    <div class="frame-blog">
      <img src="./images/img/work-1.jpg" style="width: 40%; margin: 5% 30%;">
    </div>


    <?php include('./php/footer.php'); ?>

    <!-- animations -->
    <?php include('./php/arrowup.php'); ?>

  </body>

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

  <!-- Main Javascript File -->
    <script src="js/main.js"></script>
</html>
