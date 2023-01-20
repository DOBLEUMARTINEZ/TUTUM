<!-- MODAL LOGIN - REGISTER -->
  <div class="modal fade" id="modal-login" >
    <div class="modal-dialog" style="margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          <div class="col-md-12">

            <?php

             if (isset($_SESSION["user"])) {

                include('conexion.php'); ;

                $sql = "SELECT * FROM user WHERE email ='".$_SESSION["user"]."' ";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_array()) {
                    ?>
                    <div class="user-content">

                      <h2>Mi perfil</h2>

                      <ul>
                        <li style="width: 30%;" ><img src="<? echo $row['picture']; ?>"></li>
                        <li style="width: 70%;" >
                          <p><? echo $row['name']; ?></p>
                          <p><? echo $row['type_user']; ?></p>
                          <p><? echo $row['email']; ?></p>
                          <p><? echo $row['empresa']; ?></p>
                        </li>
                      </ul>

                      <h3>Carrito de compras</h3>

                      <ol>
                        <li>
                          
                        </li>
                      </ol>

                      <div>
                        <button onclick="window.location.href='./send.php';" >Cerrar sesión</button>
                      </div>
                    
                    </div>
                    <?php                    
                  }
                }

              }else{ ?>
              <div class="login-content">
                <ul>
                  <li id="btn-login" class="login-btn-active">Iniciar sesión</li>
                  <li id="btn-register" class="">Registrarse</li>
                </ul>
                <ol>
                  <li id="login" class="active-form">
                    <form method="POST" name="formulario" action="./send.php">

                      <h3>Iniciar sesión</h3>

                      <label>Correo electrónico</label>
                      <input type="email" name="email" placeholder="ejemplo@gmail.com" required>

                      <label>Contraseña</label>
                      <input type="password" name="password" placeholder="Contraseña" required>

                      <button name="action" value="login" >
                        Aceptar
                      </button>

                    </form>
                  </li>
                  <li id="register" class="">
                    <form method="POST" name="formulario" action="./send.php">

                      <h3>Registrarse</h3>

                      <label>Nombre</label>
                      <input type="text" name="nombre" placeholder="Escribe tu nombre">

                      <label>Teléfono</label>
                      <input type="tel" name="phone" placeholder="55 5555 5555">

                      <label>Correo electrónico</label>
                      <input type="email" name="email" placeholder="ejemplo@gmail.com">

                      <label>Contraseña</label>
                      <input type="password" name="password" placeholder="Contraseña">

                      <button name="action" value="register" >
                        Aceptar
                      </button>

                    </form>
                  </li>
                </ol>
              </div>
            <?php } ?>

          </div>
        </div>
          
      </div>
    </div>
  </div>

<!-- MODAL SHOPPING CART -->
  <div class="modal fade" id="modal-shoppingcart" >
    <div class="modal-dialog" style="margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          <div class="col-md-12"> 

            <div class="modal-shopping-cart">

              
              
            </div>

          </div>
        </div>
          
      </div>
    </div>
  </div>

<!-- MODAL MENU -->
  <div class="modal fade" id="modal-0" >
    <div class="modal-dialog" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          <div class="col-md-12">

            <h2 onclick="window.location.href='./';"  class="menu-header">
              <i class="fas fa-angle-right"></i> Inicio <i class="fas fa-angle-left"></i>
            </h2>

            <h2 onclick="window.location.href='./nosotros.php';" class="menu-header"><i class="fas fa-angle-right"></i> Nosotros <i class="fas fa-angle-left"></i></h2>

            <h2 class="menu-header">
              <i class="fas fa-angle-right"></i> Servicios <i class="fas fa-angle-left"></i>
              <ol>
                <li onclick="window.location.href='./reclutamiento.php';" >Reclutamiento</li>
                <li onclick="window.location.href='./estudios-socioeconomicos.php';" >Estudios Socioeconómicos</li>
                <li onclick="window.location.href='./pruebas-psicometricas.php';" >Pruebas Psicométricas</li>
              </ol>
            </h2>

            <h2 onclick="window.location.href='./contacto.php';" class="menu-header"><i class="fas fa-angle-right"></i> Contacto <i class="fas fa-angle-left"></i></h2>
          </div>
        </div>
          
      </div>
    </div>
  </div>

<!-- MODAL COTIZAR -->
  <div class="modal fade" id="modal-cotizar" >
    <div class="modal-dialog" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content" style="background:#0000!important;">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          
          <div class="col-md-12">
            <form method="POST" name="formulario" action="./send.php">

              <h3>Llena el formulario de contacto para cotizar alguna de nuetras soluciones</h3>

              <label>Nombre</label>
              <input type="text" name="name" placeholder="Nombre" required>

              <label>Teléfono</label>
              <input type="tel" name="phone" placeholder="55 555 555" required>

              <label>Correo Electrónico</label>
              <input type="email" name="email" placeholder="ejemplo@gmail.com" required>

              <label>Servicio</label>
              <select name="service">
                <option value="Reclutamiento">Reclutamiento</option>
                <option value="Estudios Socioeconómicos">Estudios Socioeconómicos</option>
                <option value="Pruebas Psicométricas">Pruebas Psicométricas</option>
              </select>
              
              <button name="action" value="new_contact" >
                Enviar
              </button>

            </form>
          </div>

        </div>
          
      </div>
    </div>
  </div>
  
<!-- MODAL SERVICIOS -->
  <div class="modal fade" id="modal-service-1" >
    <div class="modal-dialog" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content" style="background:#d9dce4!important;">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          
          <div class="col-md-12">
              <h3>Desarrollo Organizacional</h3>
              <p>
                  Ayudamos a que las organizaciones creen una cultura organizacional fuerte y ágil.<br><br>
                  Nuestra plataforma digital te permite dar el primer paso hacia mejorar la experiencia de tus colaboradores, su compromiso y la productividad de tu organización.<br><br>
                  La experiencia de cada colaborador es única.<br>
                  No gestiones procesos: bríndales experiencias que aumenten su compromiso y promuevan la agilidad para adaptarse a los cambios con nuestra plataforma.
              </p>
          </div>

        </div>
          
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="modal-service-2" >
    <div class="modal-dialog" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content" style="background:#d9dce4!important;">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          
          <div class="col-md-12">
              <h3>Evaluaciones 360°</h3>
              <p>
                  La evaluación de 360 grados o evaluación integral es una herramienta que consiste en una evaluación integral la cual se utiliza para medir las competencias de los colaboradores en una empresa.<br><br>
                  Este reporte se obtiene a partir de la evaluación que hacen de él sus compañeros, subordinados, supervisores, jefes directos, clientes internos y clientes externos.
              </p>
          </div>

        </div>
          
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="modal-service-3" >
    <div class="modal-dialog" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content" style="background:#d9dce4!important;">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          
          <div class="col-md-12">
              <h3>Encuestas NOM 035</h3>
              <p>
                La NOM-035 tiene como objetivo establecer los elementos para identificar, analizar y prevenir los factores de riesgo psicosocial, así como para promover un entorno organizacional favorable en los centros de trabajo.<br><br>
                Nuestra plataforma permite asignar administrar, dar seguimiento con resultados precisos y descargables con validez ente las autoridades correpondientes.
              </p>
          </div>

        </div>
          
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="modal-service-4" >
    <div class="modal-dialog" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content" style="background:#d9dce4!important;">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          
            <div class="col-md-12">
                <h3>Programas de Bienestar</h3>
                <p>
                  Cuando hablamos sobre programas de bienestar, nos referimos a programas estructurados donde buscamos ofrecer beneficios que impacten de manera positiva en la salud de todos los colaboradores.<br><br>
                  Esto puede ir desde programas alimenticios para una dieta más sana hasta esquemas de actividad física que puedan incentivar a nuestro equipo a adoptar una vida más plena y saludable.
                </p>
            </div>

        </div>
          
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="modal-service-5" >
    <div class="modal-dialog" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content" style="background:#d9dce4!important;">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          
          <div class="col-md-12">
              <h3>Buzón Digital</h3>
              <p>
                Es un módulo independiente con una plena escalabilidad, diseñada para el registro y gestión de tickets de violencia laboral o agresión, Acoso u hostigamiento y riesgo en centro de trabajo.<br><br>
                Optimizando el tiempo invertido por los supervisores y/o gerentes de la empresa.
              </p>
          </div>

        </div>
          
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="modal-service-6" >
    <div class="modal-dialog" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content" style="background:#d9dce4!important;">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          
          <div class="col-md-12">
              <h3>Cursos y Capacitaciones</h3>
              <p>
                  Es un modelo de enseñanza que promueve el acceso al conocimiento a través de plataformas o entornos digitales.<br><br>
                  <i class="fas fa-angle-right" ></i> Formatos flexibles<br>
                  <i class="fas fa-angle-right" ></i> Actualización constante<br>
                  <i class="fas fa-angle-right" ></i> Educación sin fronteras<br>
                  <i class="fas fa-angle-right" ></i> Mejor gestión del tiempo<br>
                  <i class="fas fa-angle-right" ></i> Ahorro de recursos<br>
              </p>
          </div>

        </div>
          
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="modal-service-7" >
    <div class="modal-dialog" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content" style="background:#d9dce4!important;">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          
          <div class="col-md-12">
              <h3>Material de Apoyo</h3>
              <p>
                Nuetro modulo de documentación permite tener a disposicion cualquier tipo de documento utilizado por el area de RH listo para su descarga en distintos tipos de formato.
              </p>
          </div>

        </div>
          
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="modal-service-8" >
    <div class="modal-dialog" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content" style="background:#d9dce4!important;">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          
          <div class="col-md-12">
              <h3>Línea de Ayuda 24 / 7</h3>
              <p>
                  Si algun colaborador dentro de tu organizción necesita algun tipo de atención nutricional, medica, psicológica y no sabe a donde acudir, aquí encontrara alternativas útiles para poder atender alguna de estas sitiaciones total mente gratis.
              </p>
          </div>

        </div>
          
      </div>
    </div>
  </div>

<!-- MODAL FORMULARIO -->
  <div class="modal fade" id="modal-1" >
    <div class="modal-dialog modal-md" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content" style="background:#0000!important;">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          <div class="col-md-12">
            
            <form method="POST" name="formulario" action="./send.php">

              <h3>Llena el formulario de contacto para cotizar alguna de nuetras soluciones</h3>

              <label>Nombre</label>
              <input type="text" name="name" placeholder="Nombre" required>

              <label>Teléfono</label>
              <input type="tel" name="phone" placeholder="55 555 555" required>

              <label>Correo Electrónico</label>
              <input type="email" name="email" placeholder="ejemplo@gmail.com" required>

              <label>Servicio</label>
              <select name="service">
                <option value="Reclutamiento">Reclutamiento</option>
                <option value="Estudios Socioeconómicos">Estudios Socioeconómicos</option>
                <option value="Pruebas Psicométricas">Pruebas Psicométricas</option>
              </select>

              <br><br>
              <button name="action" value="new_contact" >
                Enviar
              </button>

            </form>

          </div>
        </div>
          
      </div>
    </div>
  </div>

<!-- NUESTRO EQUIPO -->
  <div class="modal fade" id="modal-2" >
    <div class="modal-dialog modal-lg" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          <div class="col-md-5">
            <img src="images/img/team-01.jpg" title="Avant Talent Solutions" alt="Avant Talent Solutions">
          </div>
          <div class="col-md-7">
            <div class="team-info">
              <h2>Francisco Aguirre</h2>
              <ul>
                <li>
                  <i class="fas fa-angle-right"></i>
                  Títulado de Administración de Empresas de la Universidad LA SALLE y tiene un MBA de ITESM.
                </li>
                <li>
                  <i class="fas fa-angle-right"></i>
                  Tiene capacitación ejecutiva en marketing y servicio al cliente en Kellogg Graduate School of Management.
                </li>
                <li>
                  <i class="fas fa-angle-right"></i>
                  Francisco ha ocupado cargos ejecutivos en Ford Motor Company, Sandoz, Pharmacia & Upjohn y Aero México.
                </li>
                <li>
                  <i class="fas fa-angle-right"></i> 
                  Desde noviembre de 2001, inició AvantGarde Human Capital Consultants y se convirtió en Director General y Presidente Ejecutivo de la firma. 
                </li>
              </ul>
            </div>
          </div>
        </div>
          
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-3" >
    <div class="modal-dialog modal-lg" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          <div class="col-md-5">
            <img src="images/img/team-02.jpg" title="Avant Talent Solutions" alt="Avant Talent Solutions">
          </div>
          <div class="col-md-7">
            <div class="team-info">
              <h2>Javier Calleja</h2>
              <ul>
                <li>
                  <i class="fas fa-angle-right"></i>
                  Titulado en Relaciones Industriales de la Universidad Iberoamericana y tiene una Maestría en Ingeniería Industrial de la Universidad Anáhuac.
                </li>
                <li>
                  <i class="fas fa-angle-right"></i>
                  Tiene una capacitación en Innovación y Liderazgo en el Instituto de Tecnología de Massachusetts.
                </li>
                <li>
                  <i class="fas fa-angle-right"></i>
                  Javier tiene experiencia en BBVA Next Technologies, Kio Networks, Making Talent, Nadro, Chedraui.
                </li>
                <li>
                  <i class="fas fa-angle-right"></i> 
                  Desde octubre de 2019, dirige la Dirección Comercial de Avant Talent Solutions.
                </li>
              </ul>
            </div>
          </div>
        </div>
          
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-4" >
    <div class="modal-dialog modal-lg" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          <div class="col-md-5">
            <img src="images/img/team-04.jpg" title="Avant Talent Solutions" alt="Avant Talent Solutions">
          </div>
          <div class="col-md-7">
            <div class="team-info">
              <h2>Claudia Ganem</h2>
              <ul>
                <li>
                  <i class="fas fa-angle-right"></i>
                  Egresada de la carrera de Licenciado en Ciencias de Computación Administrativa por el ITESM.
                </li>
                <li>
                  <i class="fas fa-angle-right"></i>
                   Cuenta con una Maestría en Sensibilización Educativa con enfoque Gestalt. Psicoterapeuta y specialista en Manejo de Grupos por el Instituto Humanista de Psicoterapia Gestalt de México.
                </li>
                <li>
                  <i class="fas fa-angle-right"></i>
                  Cuenta con estudios de Desarrollo Humano en el ITAM; PNL por la UNAM y formación en Coaching por IDEMAP.
                </li>
                <li>
                  <i class="fas fa-angle-right"></i> 
                  Ha colaborado con Kansas City Southern de México, Grupo TMM y Prosa Carnet.
                </li>
              </ul>
            </div>
          </div>
        </div>
          
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-5" >
    <div class="modal-dialog modal-lg" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          <div class="col-md-5">
            <img src="images/img/team-03.jpg" title="Avant Talent Solutions" alt="Avant Talent Solutions">
          </div>
          <div class="col-md-7">
            <div class="team-info">
              <h2>Antonio Moreno</h2>
              <ul>
                <li>
                  <i class="fas fa-angle-right"></i>
                  Cuenta con Licenciatura en Administración de Empresas por la Universidad La Salle, y Posgrados en IPADE y en ITAM.
                </li>
                <li>
                  <i class="fas fa-angle-right"></i>
                   Nos aporta su experiencia de más de 25 años, con una trayectoria excepcional, posee una visión global que provoca la generación de ideas para crear y liderar planes estratégicos para nuestros socios comerciales. 
                </li>
                <li>
                  <i class="fas fa-angle-right"></i>
                  Ha colaborado con importantes empresas como Multipack, ADO, Sealed Air, Tajín, Canon, Merck, Chep, Grupo Axo, Grupo Ormazabal.
                </li>
              </ul>
            </div>
          </div>
        </div>
          
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-6" >
    <div class="modal-dialog modal-lg" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          <div class="col-md-5">
            <img src="images/img/team-06.jpg" title="Avant Talent Solutions" alt="Avant Talent Solutions">
          </div>
          <div class="col-md-7">
            <div class="team-info">
              <h2>Eduardo Rojas</h2>
              <ul>
                <li>
                  <i class="fas fa-angle-right"></i>
                  Licenciado en Ciencias de Computación Administrativa por el ITESM.
                </li>
                <li>
                  <i class="fas fa-angle-right"></i>
                   Cuenta con una Maestría en Sensibilización Educativa con enfoque Gestalt. Psicoterapeuta y specialista en Manejo de Grupos por el Instituto Humanista de Psicoterapia Gestalt de México.
                </li>
                <li>
                  <i class="fas fa-angle-right"></i>
                  Cuenta con estudios de Desarrollo Humano en el ITAM; PNL por la UNAM y formación en Coaching por IDEMAP.
                </li>
                <li>
                  <i class="fas fa-angle-right"></i> 
                  Ha colaborado con Kansas City Southern de México, Grupo TMM y Prosa Carnet.
                </li>
              </ul>
            </div>
          </div>
        </div>
          
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-7" >
    <div class="modal-dialog modal-lg" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          <div class="col-md-5">
            <img src="images/img/team-05.jpg" title="Avant Talent Solutions" alt="Avant Talent Solutions">
          </div>
          <div class="col-md-7">
            <div class="team-info">
              <h2>Mauricio Topete</h2>
              <ul>
                <li>
                  <i class="fas fa-angle-right"></i>
                  Ingeniero industrial I.P.N. UPIICSA
                </li>
                <li>
                  <i class="fas fa-angle-right"></i>
                  Colaborar y desarrollarme en el área Comercial y Relaciones Públicas de la Empresa, con alta productividad y calidad aportando los conocimientos y experiencia adquirida para el logro de los objetivos de la misma.
                </li>
              </ul>
            </div>
          </div>
        </div>
          
      </div>
    </div>
  </div>

<!--Blog--->

  <div class="modal fade" id="modal-8" >
    <div class="modal-dialog modal-lg" style=" margin: auto; top: 7%;">
      <!-- Modal content-->
      <div class="modal-content">

        <button class="close" data-dismiss="modal"><i class="fas fa-times-circle"></i></button>
        
        <div class="row">
          <div class="col-md-12">
            <div class="team-info">
              <h2 style="padding-left: 5%; padding-bottom: 2.5%;">Salud mental durante el COVID-19</h2>
              <p>
                De acuerdo a la situación que hoy vive el mundo y en especial la población mexicana con la aparición del COVID-19 o Coronavirus, se han dado recomendaciones para evitar la propagación del Virus como son: permanecer en casa y evitar salidas innecesarias a lugares públicos, limpiar y sanitizar zonas de convivencia, cuidar la forma en que estornudamos como es cubrir la boca con el ante codo, evitar el saludo físico, lavarnos las manos de forma constante y mantener distancia física con otras personas.
              </p>
              <div style="background: url(./images/img/blog/salud-mental.jpg);"></div>
              <p>
                Éstas son algunas recomendaciones dispuestas por el Sector Salud. Sin embargo, después de unos días de estar en casa realizando cuarentena (ya sea haciendo home office o descansando) empiezas a vivir una serie de sentimientos o emociones de forma continua y persistente que te hacen sentir: agitación o tensión, pensamientos de peligro irracional, no te dejan concentrarte en tus actividades cotidianas o de trabajo, te dan ganas de comer algo todo el tiempo, el estar con tu familia no te genera tranquilidad y por ende disfrutarlos se vuelve imposible. Esto es señal de que algo está pasando a nivel psicológico o mental y es tiempo de tomar cartas sobre el asunto. Por tal situación a lo largo de diversos blogs te daremos algunas recomendaciones para poder sobrevivir de forma sana el aislamiento por el COVID-19.
              </p>
            </div>
          </div>
        </div>
          
      </div>
    </div>
  </div>