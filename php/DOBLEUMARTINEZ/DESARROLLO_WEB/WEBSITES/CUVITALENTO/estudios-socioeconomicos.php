<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Empresa dedicada en brindar soluciones y servicios de estudios socioeconomicos">
  <meta name="author" content="Dobleu Martinez">
  <meta name="theme-color" content="#111">

    
  <title>CUVITALENTO | Estudios socioeconomicos </title>

  <link href="images/logo/icon.png" rel="shortcut icon"/>

  <link rel="manifest" href="https://cuvitalento.com/images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="32x32" href="https://cuvitalento.com/images/logo/icon.png">
  <link rel="icon" type="images/logo/icon.png" sizes="16x16" href="https://cuvitalento.com/images/logo/icon.png">


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

  <?php include("php/head.php");?>

  <?php include("php/slide-nosotros.php");?>  


  <section py="5" class="body-back">

    <article>

      <!-- SERVICIOS  -->
      <div  class="container">

        <div class="container-us">

          <div class="row no-gutters">

            <div class="col-md-12">
              <div class="container-work">

                <h2 style="margin-bottom: 1%;">
                  Estudios Socioeconónicos
                </h2>

              </div>
            </div>

            <div class="col-md-8">
                <h3>¿Qué es?</h3>
                <p>
                  Un estudio socioeconómico es un proceso que nos permite conocer el entorno económico, social,  cultural y laboral de una persona.
                </p> 
              </div>
              <div class="col-md-4">
                <img class="w-img-s1 img-fluid desktop" src="./images/img/nosotros-02.jpg" title="ats" alt="ats">
            </div>

            <div class="col-md-12">
                <h3>
                  Tipos de estudios socioeconómicos
                </h3>
                <ol id="type-perfil">
                  <li>
                    <img src="images/icons/graduation-cap.png"><p>Escolar</p>
                  </li>
                  <li>
                    <img src="images/icons/headhunting.png"><p>Laboral</p>
                  </li>
                  <li>
                    <img src="images/icons/payment.png"><p>Crediticio</p>
                  </li>
                </ol>
            </div>

            <div class="container-services">
                <br><br>
                <h2 style="text-align: center;">Como lo hacemos</h2>
                <div class="slider-principal" style="padding: 5% 0% 0% 0%;border: 2px solid #33333361;border-style: dotted;border-width: 6px; margin-bottom: 2%">
                    
                    <div id="our-service" class="carousel slide" data-ride="carousel">    

                        <div class="carousel-inner">

                          <div class="carousel-item active">

                            <ul>

                              <li data-toggle="modal" data-target="#modal-service -1" >
                                <span></span>
                                <img src="images/icons/home.png" title="Visita Domiciliaria" alt="Visita Domiciliaria">
                                <p>Visita<br>Domiciliaria</p>
                              </li>

                              <li data-toggle="modal" data-target="#modal-service -2" >
                                <span></span>
                                <img src="images/icons/camara.png" title="Fotografías Dentro y Fuera del Domicilio" alt="Fotografías Dentro y Fuera del Domicilio">
                                <p>Fotografías Dentro y<br> Fuera del Domicilio</p>
                              </li>

                              <li data-toggle="modal" data-target="#modal-service -3" >
                                <span></span>
                                <img src="images/icons/location.png" title="Ubicación del Domicilio" alt="Ubicación del Domicilio">
                                <p>Ubicación del<br> Domicilio</p>
                              </li>

                            </ul>

                            <ul>

                              <li data-toggle="modal" data-target="#modal-service -4" >
                                <span></span>
                                <img src="images/icons/data-protection.png" title="Datos Personales" alt="Datos Personales">
                                <p>Datos<br> Personales</p>
                              </li>

                              <li data-toggle="modal" data-target="#modal-service -5" >
                                <span></span>
                                <img src="images/icons/families.png" title="Evaluación del Entorno Social" alt="Evaluación del Entorno Social">
                                <p>Evaluación del <br> Entorno Social</p>
                              </li>

                              <li data-toggle="modal" data-target="#modal-service -6">
                                <span></span>
                                <img src="images/icons/reference.png" title="Referencias Personales y Vecinales">
                                <p>Referencias Personales y<br> Vecinales</p>
                              </li>

                            </ul>

                          </div>

                        </div>

                    </div>
                    
                </div>

              </div>

            <div class="col-md-12">
              <div class="container-work">

                <h2 style="margin-bottom: 1%;">
                  Investigación socioeconomica 
                </h2>
                <br>

                <div class="">
                  <ul class="price-cards">
                    <li>
                      <h3>Básico</h3>
                      <ol>
                        <li><i class="fas fa-check"></i>Visita domiciliaria</li>
                        <li><i class="fas fa-check"></i>Fotografías dentro y fuera del domicilio</li>
                        <li><i class="fas fa-check"></i>Ubicación</li>
                        <li><i class="fas fa-check"></i>Datos personales</li>
                        <li><i class="fas fa-check"></i>Evaluación del entornosocial</li>
                        <li><i class="fas fa-check"></i>Referencias personales y vecinales</li>

                        <li class="price-off" ><i class="fas fa-times"></i>Investigación laboral</li>
                        <li class="price-off" ><i class="fas fa-times"></i>Investigación legal</li>

                      </ol>
                      <h4>$ 449.00 más IVA</h4>
                      <button data-toggle="modal" data-target="#modal-cotizar" class="cta-04">Contactar</button>
                    </li>
                    <li>
                      <h3>Laboral</h3>
                      <ol>
                        <li><i class="fas fa-check"></i>Visita domiciliaria</li>
                        <li><i class="fas fa-check"></i>Fotografías dentro y fuera del domicilio</li>
                        <li><i class="fas fa-check"></i>Ubicación</li>
                        <li><i class="fas fa-check"></i>Datos personales</li>
                        <li><i class="fas fa-check"></i>Evaluación del entornosocial</li>
                        <li><i class="fas fa-check"></i>Referencias personales y vecinales</li>
                        <li><i class="fas fa-check"></i>Investigación laboral</li>

                        <li class="price-off" ><i class="fas fa-times"></i>Investigación legal</li>
                      </ol>
                      <h4>$ 550.00 más IVA</h4>
                      <button data-toggle="modal" data-target="#modal-cotizar" class="cta-04">Contactar</button>
                    </li>
                    <li>
                      <h3>Plus</h3>
                      <ol>
                       <li><i class="fas fa-check"></i>Visita domiciliaria</li>
                        <li><i class="fas fa-check"></i>Fotografías dentro y fuera del domicilio</li>
                        <li><i class="fas fa-check"></i>Ubicación</li>
                        <li><i class="fas fa-check"></i>Datos personales</li>
                        <li><i class="fas fa-check"></i>Evaluación del entornosocial</li>
                        <li><i class="fas fa-check"></i>Referencias personales y vecinales</li>
                        <li><i class="fas fa-check"></i>Investigación laboral</li>
                        <li><i class="fas fa-check"></i>Investigación legal</li>
                      </ol>
                      <h4>$ 629.00 más IVA</h4>
                      <button data-toggle="modal" data-target="#modal-cotizar" class="cta-04">Contactar</button>
                    </li>
                  </ul> 
                </div>

              </div>
            </div>

            <div class="col-md-12">
              <p class="box-notes">
                <strong>Nota: </strong>La entrega del estudio socioeconómico será de 2 a 4 días hábiles, en caso de que el candidato postergue la visita domiciliaria nuestro compromiso de entrega iniciará a partir de la fecha de aplicación del estudio
              </p>
            </div>


          </div>

        </div>

      </div>

      <!-- socios 
      <div class="container-fluid">

        <div class="row no-gutters">
          <div class="col-md-12">
            <div class="container-work">

              <h2>Nuestros Socios</h2>
              <div class="slider-principal">
                <div id="our-work" class="carousel slide" data-ride="carousel">    

                  <div class="carousel-inner">

                    <div class="carousel-item active">

                      <ul class="clientes">

                        <li>
                          <img src="images/img/socios/logo-0.png" title="Polymat" alt="Polymat">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-1.png" title="Olarte y Akle" alt="Olarte y Akle">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-2.png" title="Grupo Gondi" alt="Grupo Gondi">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-3.png" title="Alta Especialidad" alt="Alta Especialidad">
                        </li>

                      </ul>
                      <br><br>
                      <ul class="clientes">

                        <li>
                          <img src="images/img/socios/logo-4.png" title="Funerales Fernandez" alt="Funerales Fernandez">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-5.png" title="Telas Y Tapices Paulino" alt="Telas Y Tapices Paulino">
                        </li>

                        <li>
                          <img src="images/img/socios/logo-6.png" title="Avant Grade" alt="Avant Grade">
                        </li>
                        
                        <li>
                          <img src="images/img/socios/logo-7.png" title="Mitsubishi Mexico" alt="Mitsubishi Mexico">
                        </li>

                      </ul>

                    </div>
              
                  </div>

                </div>  
              </div>
            </div>
          </div>
        </div>

      </div>-->

      <br><br>

      <!-- contacto  -->
      <div class="container-contact">
            <div class="row no-gutters">
              <div class="col-md-7" style="background: #111;">
                <h3>¿Necesitas información de nuestros servicios?</h3>
                <form method="POST" action="./send.php">
                  <label>Nombre *</label>
                  <input type="text" name="name" placeholder="Nombre y Apellidos" required="required"><br>
                  <label>Teléfono *</label>

                  <div style="display: grid; grid-template-rows: 100%;margin: 4% 0%;">
     
                  <input type="tel" name="phone" placeholder=" 55 5555 5555" required="required" pattern="[0-9]{10}" style="margin: 0;">   

                  </div>

                  <label>Correo *</label>
                  <input type="text" name="email" placeholder="ejemplo@gmail.com" required="required">
                  
                  <label>Escribenos tu mensaje</label>
                  <textarea style="margin-top: 15px;" name="service" placeholder="Escribe tu mensaje..." required="required"></textarea> <br>

                  <center><button name="action" value="new_contact">Enviar</button></center>
                </form>           
              </div>
              <div class="col-md-5">

                <iframe class="desktop"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60200.41270676714!2d-99.18829214871735!3d19.43288458508193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8d4f06a3269%3A0xa79656ce3ffc06e5!2sCuauht%C3%A9moc%2C%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1645988061396!5m2!1ses-419!2smx" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

              <div class="container-end">
                <ul>
                  <li  onclick="window.location.href='tel:5546490418';"><i  id="rotate" class="fas fa-phone"></i> 55 4649 0418 </li>
                  <li onclick="window.location.href='mailto:contacto@cuvitalento.com';"><i class="fas fa-envelope" ></i> contacto@cuvitalento.com</li>

                  <li onclick="window.location.href='https://goo.gl/maps/ZCmDQM6jhg3GbkC36';">
                    <i class="fas fa-map-marker-alt"></i>
                    Cuauhtémoc,Ciudad de México, CDMX
                  </li>

                </ul>
              </div>                
              </div>
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