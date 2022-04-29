<!DOCTYPE html>
<html lang="es">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Empresa de apoyo digital y RH para la gestión del talento en las organizaciones">
  <meta name="author" content="Dobleu Martinez">
  <meta name="theme-color" content="#111">
  <?php include('functions.php');?>

    
  <title>ATS | Blog </title>

  <link href="images/logo/icon.png" rel="shortcut icon"/>

<!--
  <meta data-rh="true" property="og:site_name" content="Dimarketing">
  <meta data-rh="true" property="og:image" content="https://bursamerica.dimarketing.com.mx/images/slide/banner-1.jpg">
  <meta data-rh="true" property="og:image:alt" content="Dimarketing">
  <meta data-rh="true" property="og:url" content="https://bursamerica.dimarketing.com.mx/">
-->

  <link rel="stylesheet" href="css/styles.css"/>
  <link rel="stylesheet" href="css/main.css"/>

  <!-- icons CDN -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!--jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>


<body>

  <?php 

    include("php/head.php");

  ?>

  <?php //include("php/slide.php");?> 

  <?php include("php/slide-blog.php");?>  


  <section py="5" class="body-back" style="background-size: 100%;">

    <article>

      <!-- CONTAINER -US -->
      <div  class="container">
        <div class="container-us">

          <?php
            include('conexion.php');

            $sql = "SELECT * FROM blog ;";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {

              while($row = $result->fetch_array()) {
                ?>
                <article class="row no-gutters content-blog" style="align-items: center;">
  

                  <div class="col-md-5 desktop">
                    <img 
                    class="w-img-s1 img-fluid desktop" 
                    src="../MYCRM/<?php echo $row['img'];?>" 
                    title="<?php echo name_img($row['img']);?>" 
                    alt="<?php echo name_img($row['img']);?>">
                  </div> 

                  <div class="col-md-6 mobil">
                    <img 
                    class="w-img-s1 img-fluid mobil" 
                    src="../MYCRM/<?php echo $row['img'];?>" 
                    title="<?php echo name_img($row['img']);?>" 
                    alt="<?php echo name_img($row['img']);?>">
                  </div> 

                  <div class="col-md-7" >

                    <h2>
                      <a href="./entrada.php?titulo=<?php echo str_replace(' ', '-',$row['title']);?>&id_entrada=<?php echo $row['id'];?>">
                        <?php echo $row['title'];?>   
                      </a>
                    </h2>

                    <p>
                      <span><?php echo $row['category'];?></span><br><br>
                      <?php 
                        $description = substr($row['description'], 0, 500);
                        $description .= "...";
                        echo $description;
                      ?>
                    </p>

                  </div>

                </article>

                <hr>
                <?php
              }

            }

          ?>

        </div>
      </div>

    </article>
  </section>

  <?php 

    include 'php/modal.php';

    include 'php/footer.php';

  ?>
</body>

</html>