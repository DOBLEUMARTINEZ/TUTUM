<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

// COMPONETE DE RUTAS
use Symfony\Component\Routing\Annotation\Route;

// ENTIDADES
use App\Entity\Minuta;
use App\Entity\Audiencia;
use App\Entity\Usuario;
use App\Entity\SeccionMinuta;
use App\Entity\RegistroMinuta;
use App\Entity\Categoria;
use App\Entity\EstatusMinuta;
use App\Entity\TemaUsuario;
use App\Entity\TemaMinuta;
use App\Entity\Log;
use App\Entity\Roles;
use App\Entity\ResponsableTema;
use App\Entity\Posiciones;

// EXTESION FORM
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

// FORMULARIOS
use App\form\UsuarioType;
use App\form\TemaType;
use App\form\MinutaType;
use App\form\BuscarFechaType;
use App\form\BuscarTemaType;
use App\form\SeccionMinutaType;
use App\form\CategoriaType; 
use App\form\EstatusMinutaType;
use App\form\FirmaMinutaType;
use App\form\TopicMinutaType; 


class MinutaController extends AbstractController
{   
    // SECCION MINUTAS
    public function index(Request $request): Response
    { 

        // TRAER VARIABLE DE ALERTA SATISFACTORIA
            if (isset($_GET['alerta'])) {
                $alerta = $_GET['alerta'];
            }else{
                $alerta = 'none';
            }

        // CONEXION CON BASE DE DATOS
            $minutas = $this->getDoctrine()->getRepository(Minuta::class);
            $usuarios = $this->getDoctrine()->getRepository(Usuario::class);
            $categorias = $this->getDoctrine()->getRepository(Categoria::class);
            $bloques = $this->getDoctrine()->getRepository(SeccionMinuta::class);
            $estatus = $this->getDoctrine()->getRepository(EstatusMinuta::class);
            $audiencia = $this->getDoctrine()->getRepository(Audiencia::class);
            $temas = $this->getDoctrine()->getRepository(TemaMinuta::class);
            $temasUsuarios = $this->getDoctrine()->getRepository(TemaUsuario::class);
            $posiciones = $this->getDoctrine()->getRepository(Posiciones::class)->findBy( array(), array('posicion' => 'ASC'));

        // ROL
            $log = $this->getDoctrine()->getRepository(Log::class);
            $usuario = $log->findBy( array(), array('id' => 'DESC') );
            $usuario = $usuario[0]->getUsuario();
            $rol = $usuarios->findOneBy(['id' => $usuario])->getRol()->getIdRoles();
            $user = $usuarios->findOneBy(['id' => $usuario])->getUser();

        // MINUTAS ORDENADAS
            $minutas =  $minutas->findBy( array(), array('id' => 'DESC') );

        // CATALOGO DE CATEGORIA
            $cat_categorias_minuta =  $categorias->findAll();

        // CATALOGO ESTATUS
            $cat_estatus_minuta =  $estatus->findAll();

        // FORMULARIO DE BUSQUEDA 
            $form_date = $this->createForm(BuscarFechaType::class,$minutas);

        // VALIDAR ENVIO DE FORMULARIO 
            $form_date->handleRequest($request);
            if ($form_date->isSubmitted()) {

                // DATOS DE FORMULARIO
                $form_dates = $request->get('buscar_fecha');
                $fecha_busqueda = $form_dates['date_serch'];

                // BUQUEDA DE MINUTA POR FECHA
                $minutas = $this->getDoctrine()->getRepository(Minuta::class);
                foreach ($minutas->findAll() as $minuta) {
                    $fecha_minuta = date_format($minuta->getFechaInicio(), 'Y-m-d');
                    if ($fecha_busqueda == $fecha_minuta) {
                        $id_minuta_found = $minuta->getId();
                    }
                }
                
                // VALIDANDO BUESQUEDA
                if (isset($id_minuta_found)) {

                    $id_minuta = $id_minuta_found;
                    $minutas = $minutas->findBy(['id'=>1]);

                    // VISTA - INICIO - RESPUESSTA BUSUQUEDA MINUTA 
                    return $this->render('minuta/index.html.twig', [
                        'title' => 'Minutas encontradas ',
                        'Minutas'=> $minutas,
                        'Categorias' => $cat_categorias_minuta,
                        'cat_bloques' => $bloques,
                        'Estatus' => $cat_estatus_minuta,
                        'form'=> $form_date->createView(),
                        'rol' => $rol,
                        'user' => $user
                    ]);

                }else{

                    // VISTA - INICIO - MINUTAS 
                    return $this->render('minuta/index.html.twig', [
                        'title' => 'No se encontro minuta',
                        'Minutas'=> $minutas,
                        'Categorias' => $cat_categorias_minuta,
                        'cat_bloques' => $bloques,
                        'Estatus' => $cat_estatus_minuta,
                        'form'=> $form_date->createView(),
                        'rol' => $rol,
                        'user' => $user
                    ]);
                }

            }else{

                // VISTA - INICIO - MINUTAS 
                return $this->render('minuta/index.html.twig', [
                    'title' => 'Todas las minutas',
                    'Minutas'=> $minutas,
                    'Categorias' => $cat_categorias_minuta,
                    'cat_bloques' => $bloques,
                    'Estatus' => $cat_estatus_minuta,
                    'alerta' =>$alerta,
                    'form'=> $form_date->createView(),
                    'rol' => $rol,
                    'user' => $user,
                    'Posiciones' => $posiciones
                ]);

            } 
    }

    // SECCION TEMAS
    public function tema(Request $request, $busqueda, $id_registro): Response
    {   
        // TRAER VARIABLE DE ALERTA SATISFACTORIA
            if (isset($_GET['alerta'])) {
                $alerta = $_GET['alerta'];
            }else{
                $alerta = 'none';
            }
        
        // CONSULTA DE DATOS
            $usuarios = $this->getDoctrine()->getRepository(Usuario::class)->findBy(['rol'=>3]);
            $minutas = $this->getDoctrine()->getRepository(Minuta::class)->findAll();

            $temas = $this->getDoctrine()->getRepository(TemaMinuta::class)->findBy(array(), array('id' => 'DESC'));
            $temasUsuarios = $this->getDoctrine()->getRepository(ResponsableTema::class)->findAll();

            $cat_estatus_minuta = $this->getDoctrine()->getRepository(EstatusMinuta::class)->findAll();
            $cat_categorias_minuta = $this->getDoctrine()->getRepository(Categoria::class)->findAll();

            $titulo = 'Todos los temas';

        // ROL
            $log = $this->getDoctrine()->getRepository(Log::class);
            $usuario = $log->findBy( array(), array('id' => 'DESC') );
            $usuario = $usuario[0]->getUsuario();
            $rol = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['id' => $usuario])->getRol()->getIdRoles();
            $user = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['id' => $usuario])->getUser(); 

        // FORMULARIO BUSQUEDA TEMA  
            $form_topic_search = $this->createForm(BuscarTemaType::class,$temas);

        // VALIDAR ENVIO DE FORMULARIO 
            $form_topic_search->handleRequest($request);
            if($form_topic_search->isSubmitted()) {

                // DATOS DE FORMULARIO
                $form_dates = $request->get('buscar_tema');
                $title_busqueda = $form_dates['titulo'];

                $temas = $this->getDoctrine()->getRepository(TemaMinuta::class)->findBy(['titulo'=>$title_busqueda]);

                // VALIDANDO BUESQUEDA
                if (!empty($temas)) {
                    $titulo = 'Busqueda exitosa';
                }else{
                    $titulo = 'Ningun resultado relacionado';
                    $temas = $this->getDoctrine()->getRepository(TemaMinuta::class)->findAll();
                }

            }

        // DEVUELVE LAS VISTAS 
            return $this->render('minuta/temas/index.html.twig', [
                'title' => $titulo,
                'Minutas' => $minutas,
                'Usuarios' => $usuarios,
                'TemasMinutas' => $temas,
                'EstatusMinuta' => $cat_estatus_minuta,
                'CategoriasMinuta' => $cat_categorias_minuta,
                'TemasUsuarios' => $temasUsuarios,
                'alerta' => $alerta,
                'form'=> $form_topic_search->createView(),
                'rol' => $rol,
                'user' => $user
            ]);

    }

    // SECCION CONFIGURACIONES
    public function configuraciones(Request $request): Response
    {  
        // TRAER VARIABLE DE ALERTA SATISFACTORIA
            if (isset($_GET['alerta'])) {
                $alerta = $_GET['alerta'];
            }else{
                $alerta = 'none';
            }


        // SECCIONES
        $seccionesMinuta = $this->getDoctrine()->getRepository(seccionMinuta::class)->findAll();

        // ESTATUS FIRMAS MINUTA
        $estatusFirma = $this->getDoctrine()->getRepository(RegistroMinuta::class)->findAll();

        // ESTATUS MINUTA
        $estatusMinuta = $this->getDoctrine()->getRepository(EstatusMinuta::class)->findAll();

        // CATEGORIAS
        $categoriasMinuta = $this->getDoctrine()->getRepository(Categoria::class)->findAll();

        // ROL
            $log = $this->getDoctrine()->getRepository(Log::class);
            $usuario = $log->findBy( array(), array('id' => 'DESC') );
            $usuario = $usuario[0]->getUsuario();
            $rol = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['id' => $usuario])->getRol()->getIdRoles();
            $user = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['id' => $usuario])->getUser(); 

        return $this->render('minuta/configuraciones/index.html.twig', [
            'title' => 'Configuraciones de minuta',
            'Secciones' => $seccionesMinuta,
            'EstatusFirma' => $estatusFirma,
            'EstatusMinuta' => $estatusMinuta,
            'Categorias' => $categoriasMinuta,
            'alerta' => $alerta,
            'rol' => $rol,
            'user'=> $user
        ]);
    }

    // SECCION MINUTAS
    public function huella(Request $request): Response
    {

        $huellas = $this->getDoctrine()->getRepository(Log::class)->findBy(array(), array('id' => 'DESC'));
        $usuarios = $this->getDoctrine()->getRepository(Usuario::class);

        // ROL
            $log = $this->getDoctrine()->getRepository(Log::class);
            $usuario = $log->findBy( array(), array('id' => 'DESC') );
            $usuario = $usuario[0]->getUsuario();
            $rol = $usuarios->findOneBy(['id' => $usuario])->getRol()->getIdRoles();
            $user = $usuarios->findOneBy(['id' => $usuario])->getUser();

        // VISTA QUE DEVUELVE
        return $this->render('minuta/huella/index.html.twig', [
            'title' => 'Huella digital',
            'Huellas' => $huellas,
            'Usuarios' => $usuarios->findAll(),
            'rol' => $rol,
            'user'=> $user
        ]);

    }

    // CONSULTA DE REGISTROS
    public function ver(Request $request,$tabla, $id_minuta, $id_registro): Response
    {
        // CONSULTA DATOS
            $minutas = $this->getDoctrine()->getRepository(Minuta::class);
            $usuarios = $this->getDoctrine()->getRepository(Usuario::class);
            $temas = $this->getDoctrine()->getRepository(TemaMinuta::class);
            $estatus = $this->getDoctrine()->getRepository(EstatusMinuta::class)->findAll();
            $categorias = $this->getDoctrine()->getRepository(Categoria::class)->findAll();
            $responsablesTemas = $this->getDoctrine()->getRepository(TemaUsuario::class);
            $posiciones = $this->getDoctrine()->getRepository(Posiciones::class)->findBy( array(), array('posicion' => 'ASC'));

        // ROL
            $log = $this->getDoctrine()->getRepository(Log::class);
            $usuario = $log->findBy( array(), array('id' => 'DESC') );
            $usuario = $usuario[0]->getUsuario();
            $rol = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['id' => $usuario])->getRol()->getIdRoles();
            $user = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['id' => $usuario])->getUser();  

        // SELECCION DE TABLA
        switch ($tabla) {
            case 'usuario':
                return $this->render('usuario/detail-user.html.twig', [
                    'title' => 'Detalle usuario',
                    'Usuario' => $usuarios->findBy(['id' => $id_registro]),
                    'rol' => $rol,
                    'user'=> $user
                ]);
                break;

            case 'minuta':
                // CONSULTA DE MINUTA
                    $minuta = $this->getDoctrine()->getRepository(Minuta::class)->find($id_minuta);
                // CONSULTA AUDIENCIA
                    $audiencia = $this->getDoctrine()->getRepository(Audiencia::class)->findBy(array('idMinuta' => $id_minuta), array('posicion' => 'ASC'));
                // CONSUTA DE TEMAS 
                    $temasMinuta = $this->getDoctrine()->getRepository(TemaMinuta::class)->findBy(['idReunion' => $id_minuta]);
                // CONSULTA DE TEMAS ASIGNADOS DEL USUARIO
                    $temasUsuario = $responsablesTemas->findAll();

                // DETALLE MINUTA
                    $minuta_detalle = array(
                        'id' => $minuta->getId(),
                        'objetivo' => $minuta->getObjetivo(),
                        'fechaInicio' => $minuta->getFechaInicio(),
                        'fechaFin' => $minuta->getFechaFin(),
                        'proximaReunion' => $minuta->getProximareunion(),
                        'itinerario' => $minuta->getItinerario(),
                        'estatus' => $minuta->getEstatus(),
                        'autorizacion' => $minuta->isAutorizacion(),
                        'audiencia' => $audiencia,
                        'usuarios' => $usuarios->findBy(['rol' => 3]),
                        'temasMinuta' => $temasMinuta,
                        'temasUsuarios' => $temasUsuario
                    );

                // VISTA QUE DEVUELVE
                return $this->render('minuta/minutas/detail-minuta.html.twig', [
                    'title' => 'Minuta : ',
                    'Fecha_minuta' => $minuta->getFechaInicio(),
                    'MinutaDetalle' => $minuta_detalle,
                    'Categorias' => $categorias,
                    'Estatus' => $estatus,
                    'rol' => $rol,
                    'user'=> $user,
                    'Posiciones' => $posiciones
                ]);

                break;

            case 'tema':
                $tema = $temas->findOneBy(['id' => (int)$id_registro]);
                return $this->render('minuta/temas/detail-tema.html.twig', [
                    'title' => 'Nuevo',
                    'Tema' => $tema,
                    'CatEstatus' => $estatus,
                    'CatCategorias' => $categorias,
                    'rol' => $rol,
                    'user'=> $user
                ]);
                break;

            case 'audiencia':

                // DATOS DB
                $audiencia = $this->getDoctrine()->getRepository(Audiencia::class)->findBy(array('idMinuta' => $id_minuta),array('posicion' => 'ASC'));

                // DEVUELVE LAS VISTAS 
                return $this->render('minuta/audiencia/index.html.twig', [
                    'title' => 'Audiencia',
                    'rol' => $rol,
                    'user'=> $user,
                    'audiencia' => $audiencia
                ]);
                break;

            case 'temas-minuta':

                $temas_minuta = $temas->findBy(['idReunion' => $id_minuta]);

                if (!empty($temas_minuta)) {
                    $temas_minuta = $temas->findBy(['idReunion' => $id_minuta]);
                }else{
                    $last_minuta = $minutas->findBy(array('estatus' => 1), array('id' => 'DESC'))[0];
                    $temas_minuta = $temas->findBy(['idReunion' => $last_minuta ]); 
                }

                // FORMULARIO DE BUSQUEDA 
                    $temas_now = $this->createForm(TopicMinutaType::class,$temas_minuta);

                // VALIDAR ENVIO DE FORMULARIO 
                    $temas_now->handleRequest($request);
                    if ($temas_now->isSubmitted()) {

                    }

                return $this->render('minuta/temas/temas-minuta.html.twig', [
                    'title' => 'Temas de minuta '.$id_minuta,
                    'TemasMinutas' => $temas_minuta,
                    'CatEstatus' => $estatus,
                    'CatCategorias' => $categorias,
                    'rol' => $rol,
                    'user'=> $user,
                    'form'=> $temas_now->createView(),
                ]);

                break;

            default:
                dd($tabla);
                break;
        }
    }

    // NUEVO REGISTRO
    public function nuevo(Request $request,$tabla): Response
    {

        // CONSULTA DE DATOS EN DB 
            $usuarios = $this->getDoctrine()->getRepository(Usuario::class);
            $minutas = $this->getDoctrine()->getRepository(Minuta::class);
            $estatusminutas = $this->getDoctrine()->getRepository(EstatusMinuta::class);
            $temas = $this->getDoctrine()->getRepository(TemaMinuta::class);
            $secciones = $this->getDoctrine()->getRepository(SeccionMinuta::class);
            $categorias = $this->getDoctrine()->getRepository(Categoria::class);
            $estatusfirmas = $this->getDoctrine()->getRepository(RegistroMinuta::class);
            $roles = $this->getDoctrine()->getRepository(Roles::class);
            $posiciones = $this->getDoctrine()->getRepository(Posiciones::class);

        // ROL
            $log = $this->getDoctrine()->getRepository(Log::class);
            $log = $log->findBy( array(), array('id' => 'DESC') );
            $log = $log[0]->getUsuario();
            $rol_log = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['id' => $log])->getRol()->getIdRoles();
            $user_session = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['id' => $log])->getUser(); 

        switch ($tabla) {

            case 'usuario':

                $new_user = new Usuario();
                $user = array( 'usuario' => $new_user, 'roles' => $roles->findAll() );

                // FORMULARIO
                $new_user = $this->createForm(UsuarioType::class,$user);
                $new_user->handleRequest($request);

                // VALIDAR ENVIO DE DATOS
                if ($new_user->isSubmitted()) {

                    $new_user = $request->get('usuario');

                    // AÑADIR ROLES
                    $roles = $this->getDoctrine()->getRepository(Roles::class)->find(intval($new_user['rol']));
                    $rol = new Roles();
                    $rol = $roles;
                    
                    $entityManager = $this->getDoctrine()->getManager(); 

                    // CREAR OBJETO Y ASIGNAR VALORES
                    $usuario = new Usuario();
                    $usuario->setNombre($new_user['nombre']);
                    $usuario->setApellido($new_user['apellido']);
                    $usuario->setUser($new_user['user']);
                    $usuario->setEmail($new_user['email']);
                    $usuario->setPassword($new_user['password']);
                    $usuario->setRol($rol);
                    $usuario->setArea($new_user['area']);
                    $usuario->setIniciales($new_user['iniciales']);
                    $usuario->setStatus('1');

                    // GUARDAR EN BD
                    $entityManager->persist($usuario);
                    $entityManager->persist($rol);
                    $entityManager->flush();

                    // ACTUALIZAR POCICIONES
                    $new_posicion = $posiciones->findOneBy(array(), array('posicion' => 'DESC'))->getPosicion()+1;
                    $new_user = $usuarios->findOneBy(array(), array('id' => 'DESC'));

                    // CREAR OBJETO Y ASIGNAR VALORES
                    $estatus_firma = new Posiciones();
                    $estatus_firma->setIdUsuario($new_user);
                    $estatus_firma->setPosicion($new_posicion);

                    // GUARDAR EN BD
                    $entityManager->persist($estatus_firma);
                    $entityManager->flush();  

                    return $this->redirectToRoute('usuario' , array('alerta' => 'new-success'));

                }else{

                    return $this->render('usuario/update-user.html.twig', [
                        'title' => 'Nuevo',
                        'form'=> $new_user->createView(), 
                        'rol' => $rol_log,
                        'user' => $user_session
                    ]);

                }
                break;

            case 'minuta':

                // NUEVA MINUTA
                $minuta = new Minuta();
                $usuarios = $usuarios->findBy(['rol' => 3, 'status' => 3 ]);

                // UTIMOS TEMAS DE ULTIMA MINUTA
                $last_minuta = $minutas->findBy(array('estatus' => 1), array('id' => 'DESC'))[0];
                $temas_minuta = $temas->findBy(['idReunion' => $last_minuta->getId()]);

                $data_minuta = ['usuarios' => $usuarios, 'minuta' => $minuta, 'temas' => $temas_minuta];

                // FORMULARIO
                $new_minuta = $this->createForm(MinutaType::class,$data_minuta);
                $new_minuta->handleRequest($request);

                // VALIDAR ENVIO DE DATOS
                if ($new_minuta->isSubmitted()) {

                    $form_data = $request->get('minuta');

                    // CONEXION
                    $em = $this->getDoctrine()->getManager();

                    // FORMATO DE FECHA
                    $fechaInicio = new \DateTime('@'.strtotime($form_data['fecha_inicio']));
                    $fechaFin = new \DateTime('@'.strtotime($form_data['fecha_fin']));
                    $proximaReunion = new \DateTime('@'.strtotime($form_data['proxima_reunion']));

                    // CREAR OBJETO Y ASIGNAR VALORES
                    $minuta = new Minuta();
                    $minuta->setObjetivo($form_data['objetivo']);
                    $minuta->setFechaInicio($fechaInicio);
                    $minuta->setFechaFin($fechaFin);
                    $minuta->setProximaReunion($proximaReunion);
                    $minuta->setItinerario($form_data['itinerario']);
                    $minuta->setEstatus(0);

                    // GUARDAR EN DB
                    $em->persist($minuta);
                    $em->flush();

                    // LLENAR AUDIENCIA DE LA MINUTA
                    $minuta = $minutas->findOneBy([],['id' => 'DESC'])->getId();
                    $usuarios = $this->getDoctrine()->getRepository(Usuario::class)->findBy(['rol' => 3]);
                    $usuario = $this->getDoctrine()->getRepository(Usuario::class);
                    $posiciones = $this->getDoctrine()->getRepository(Posiciones::class)->findAll();
                    foreach ($posiciones as $posicion => $valor) {

                        $audiencia = new Audiencia();
                        $audiencia->setIdUsuario($usuario->findOneBy(['id' => $valor->getIdUsuario()->getId()]));
                        $audiencia->setIdMinuta($minuta);
                        $audiencia->setPosicion($posicion);

                        foreach ($form_data['asistentes'] as $key => $value ) {
                            if ($usuario->findOneBy(['id' => $valor->getIdUsuario()])->getId() == intval($value)) {
                                $audiencia->setAsistencia(1);
                            }
                        }

                        // GUARDAR EN DB
                        $em->persist($audiencia);
                        $em->flush();

                    }

                    // TEMAS RECUERRENTES
                    if (!empty($form_data['Temas_minuta'])) {

                        $id_new_minuta = $minutas->findOneBy(array(), array('id' => 'DESC'));
                        foreach ($form_data['Temas_minuta'] as $key => $value) {
                            $topic = $temas->findOneBy(['id' => intval($value)]);
                            $tema = new TemaMinuta();
                            $tema->setTitulo($topic->getTitulo());
                            $tema->setCompromisoInicio($topic->getCompromisoInicio());
                            $tema->setCompromisoFin($topic->getCompromisoFin());
                            $tema->setRequerimiento($topic->getRequerimiento());
                            $tema->setLineaGuia($topic->getLineaGuia());
                            $tema->setCompromisoAccion($topic->getCompromisoAccion());
                            $tema->setCompromiso($topic->getCompromiso());
                            $tema->setObservacion($topic->getObservacion());
                            $tema->setIdEstatus($topic->getIdEstatus()); 
                            $tema->setIdReunion($id_new_minuta);
                            $tema->setIdCategoria($topic->getIdCategoria());
                            $tema->setBloque($topic->getBloque());
                            // GUARDAR EN BD
                            $em->persist($tema);
                            $em->flush(); 
                        }
                    }

                    return $this->redirectToRoute('minuta' , array('alerta' => 'new-success'));

                }else{

                    return $this->render('minuta/minutas/update-minuta.html.twig', [
                        'title' => 'Nueva',
                        'form'=> $new_minuta->createView(), 
                        'rol' => $rol_log,
                        'user' => $user_session
                    ]);

                }
                break;

            case 'tema':

                // NUEVO TEMA
                $tema = new TemaMinuta();

                $tema = array( 
                    'tema' => $tema,
                    'estatus' => $estatusminutas->findAll(),
                    'categorias' => $categorias->findAll(),
                    'secciones' => $secciones->findAll(),
                    'minutas' => $minutas->findBy(array(), array('id' => 'DESC')),
                    'usuarios' => $usuarios->findBy(['rol' => 3, 'status' => 3 ]),
                    'formulario' => 'new' 
                );

                // FORMULARIO
                $new_tema = $this->createForm(TemaType::class,$tema);

                // RECUPERANDO RESPUESTA DE FORMS
                $new_tema->handleRequest($request);

                // VALIDAR ENVIO DE DATOS
                if ($new_tema->isSubmitted()) {

                    $new_tema = $request->get('tema');

                    // CONEXION
                    $entityManager = $this->getDoctrine()->getManager(); 


                    // NUEVO TEMA DE PRICIPALES ACURDOS
                    if ($new_tema['seccion']=='1') {

                        $id_reunion = intval($new_tema['id_reunion']);
                        $minuta = $minutas->findOneBy(['id'=>$id_reunion]);

                        $tema = new TemaMinuta();   
                        $tema->setTitulo('Principales acuerdos de la reunión');
                        $tema->setIdReunion($minutas->findOneBy(['id'=>$new_tema['id_reunion']]));
                        $tema->setBloque($secciones->findOneBy(['id' => intval($new_tema['seccion'])])->getId());
                        $tema->setObservacion($new_tema['observacion']);

                        // GUARDAR EN BD
                        $entityManager->persist($tema);
                        $entityManager->flush();

                    }elseif($new_tema['seccion']=='3'){
                    // REVISON DE TEMAS

                        $id_reunion = intval($new_tema['id_reunion']);
                        $minuta = $minutas->findOneBy(['id'=>$id_reunion]);

                        $tema = new TemaMinuta();   
                        $tema->setTitulo($new_tema['titulo']);
                        $tema->setIdReunion($minutas->findOneBy(['id'=>$new_tema['id_reunion']]));
                        $tema->setObservacion($new_tema['observacion']);
                        $tema->setBloque($secciones->findOneBy(['id' => intval($new_tema['seccion'])])->getId());

                        // GUARDAR EN BD
                        $entityManager->persist($tema);
                        $entityManager->flush();

                    }else{

                        // VALIDANDO EL ESTATUS SI ES O NO SEMANAL
                        if ($new_tema['id_estatus'] == 5 ) {
                            $compromisoInicio = new \DateTime('@'.strtotime($new_tema['compromiso_inicio']));
                            $compromisoFin = null;
                        }else{
                            $compromisoInicio = new \DateTime('@'.strtotime($new_tema['compromiso_inicio']));
                            $compromisoFin = new \DateTime('@'.strtotime($new_tema['compromiso_fin']));
                        }

                        // CREAR OBJETO Y ASIGNAR VALORES TEMA
                        $tema = new TemaMinuta();
                        $tema->setTitulo($new_tema['titulo']);
                        $tema->setCompromisoInicio($compromisoInicio);
                        $tema->setCompromisoFin($compromisoFin);
                        $tema->setRequerimiento($new_tema['requerimiento']);
                        $tema->setLineaGuia($new_tema['linea_guia']);
                        $tema->setCompromisoAccion($new_tema['compromiso_accion']);
                        $tema->setCompromiso($new_tema['compromiso']);
                        $tema->setObservacion($new_tema['observacion']);
                        $tema->setIdEstatus($estatusminutas->findOneBy(['id'=>$new_tema['id_estatus']]));
                        $tema->setIdReunion($minutas->findOneBy(['id'=>$new_tema['id_reunion']]));
                        $tema->setIdCategoria($categorias->findOneBy(['id' =>$new_tema['id_categoria']]));
                        $tema->setBloque($secciones->findOneBy(['id' => intval($new_tema['seccion'])])->getId());

                        // GUARDAR EN BD
                        $entityManager->persist($tema);
                        $entityManager->flush();

                        // RECUPERAR ID DEl ULTIMO TEMA REGISTRADO
                        $id_new_tema = $temas->findOneBy(array(), array('id' => 'DESC'));

                        // CREAR OBJETO Y ASIGNAR TEMAS A USUARIOS
                        foreach ($new_tema['usuario'] as $key ) {
                            $temausuario = new TemaUsuario();
                            $temausuario->setIdTema($id_new_tema);
                            $temausuario->setIdUsuario($usuarios->findOneBy(['id'=>$key]));
                            $entityManager->persist($temausuario);
                            $entityManager->flush();
                        }

                    }
                    
                    return $this->redirectToRoute('tema' , array('alerta' => 'new-success'));

                }else{

                    return $this->render('minuta/temas/update.html.twig', [
                        'title' => 'Nuevo',
                        'form'=> $new_tema->createView(), 
                        'rol' => $rol_log,
                        'user' => $user_session
                    ]);

                }

                break;  

            case 'seccion':

                // NEW SECCION
                $seccion = new seccionMinuta();

                // FORMULARIO
                $new_seccion = $this->createForm(SeccionMinutaType::class,$seccion);

                // RECUPERANDO RESPUESTA DE FORMS
                 $new_seccion->handleRequest($request);
                if ($new_seccion->isSubmitted()) {

                    $new_seccion = $request->get('seccion_minuta');
                    $entityManager = $this->getDoctrine()->getManager(); 

                    // CREAR OBJETO Y ASIGNAR VALORES
                    $seccion = new SeccionMinuta();
                    $seccion->setNombre($new_seccion['nombre']);

                    // GUARDAR EN BD
                    $entityManager->persist($seccion);
                    $entityManager->flush();
                    return $this->redirectToRoute('configuraciones' , array('alerta' => 'new-success'));

                }else{
                    return $this->render('configuracion/update-seccion.html.twig', [
                        'title' => 'Nueva',
                        'form'=> $new_seccion->createView(), 
                        'rol' => $rol_log,
                        'user' => $user_session
                    ]);
                }
                break; 

            case 'categoria':

                // CATALOGO DE SECCIONES
                $seccionesMinuta = $this->getDoctrine()->getRepository(seccionMinuta::class)->findAll();
                foreach ($seccionesMinuta as $key => $value) {
                    $secciones_cat[$value->getNombre()] = $value->getId();
                }

                // NEW CATEGORIA
                $categoria = new Categoria();
                $categoria = array('categoria' => $categoria, 'secciones_cat' => $secciones_cat );

                // FORMULARIO
                $new_categoria = $this->createForm(CategoriaType::class,$categoria);

                // RECUPERANDO RESPUESTA DE FORMS
                 $new_categoria->handleRequest($request);
                if ($new_categoria->isSubmitted()) {

                    $new_categoria = $request->get('categoria');
                    $entityManager = $this->getDoctrine()->getManager();

                    $secciones = $this->getDoctrine()->getRepository(SeccionMinuta::class)->find(intval($new_categoria['seccion']));
                    $seccion = new SeccionMinuta();
                    $seccion = $secciones;

                    $orden_cat = intval($new_categoria['orden_categoria']);

                    // CREAR OBJETO Y ASIGNAR VALORES
                    $categoria = new Categoria();
                    $categoria->setNombre($new_categoria['nombre']);
                    $categoria->setSeccion($seccion);
                    $categoria->setOrdenCategoria($orden_cat);
                    $categoria->setColor($new_categoria['color']);

                    // GUARDAR EN BD
                    $entityManager->persist($categoria);
                    $entityManager->persist($seccion);
                    $entityManager->flush();

                    return $this->redirectToRoute('configuraciones' , array('alerta' => 'new-success'));

                }else{
                    return $this->render('configuracion/update-categoria.html.twig', [
                        'title' => 'Nueva',
                        'form'=> $new_categoria->createView(), 
                        'rol' => $rol_log,
                        'user' => $user_session
                    ]);
                }
                break; 

            case 'estatusminuta':

                // NEW ESTATUS MINUTA
                $estatus_minuta = new EstatusMinuta();
                
                // FORMULARIO
                $new_estatusminuta = $this->createForm(EstatusMinutaType::class,$estatus_minuta);
                        
                // RECUPERANDO RESPUESTA DE FORMS
                 $new_estatusminuta->handleRequest($request);
                if ($new_estatusminuta->isSubmitted()) {

                    $new_estatusminuta = $request->get('estatus_minuta');
                    $entityManager = $this->getDoctrine()->getManager(); 

                    // CREAR OBJETO Y ASIGNAR VALORES
                    $estatus_min = new EstatusMinuta();
                    $estatus_min->setNombre($new_estatusminuta['nombre']);
                    $estatus_min->setColor($new_estatusminuta['color']);

                    // GUARDAR EN BD
                    $entityManager->persist($estatus_min);
                    $entityManager->flush();
                    return $this->redirectToRoute('configuraciones' , array('alerta' => 'new-success'));

                }else{
                    return $this->render('configuracion/update-estatusminuta.html.twig', [
                        'title' => 'Nuevo',
                        'form'=> $new_estatusminuta->createView(), 
                        'rol' => $rol_log,
                        'user' => $user_session
                    ]);
                }
                break;

            case 'firma':

                // NEW FIRMA
                $firma_minuta = new RegistroMinuta();
                
                // FORMULARIO
                $new_firma = $this->createForm(FirmaMinutaType::class, $firma_minuta);

                // RECUPERANDO RESPUESTA DE FORMS
                $new_firma->handleRequest($request);

                if ($new_firma->isSubmitted()) {

                    $new_firma = $request->get('firma_minuta');
                    $entityManager = $this->getDoctrine()->getManager(); 

                    // CREAR OBJETO Y ASIGNAR VALORES
                    $estatus_firma = new RegistroMinuta();
                    $estatus_firma->setOpcion($new_firma['opcion']);
                    $estatus_firma->setRespuesta($new_firma['respuesta']);

                    // GUARDAR EN BD
                    $entityManager->persist($estatus_firma);
                    $entityManager->flush();
                    return $this->redirectToRoute('configuraciones' , array('alerta' => 'new-success'));

                }else{
                    return $this->render('configuracion/update-estatusfirma.html.twig', [
                        'title' => 'Nuevo',
                        'form'=> $new_firma->createView(), 
                        'rol' => $rol_log,
                        'user' => $user_session
                    ]);
                }
                break;

            default:
                
                break;
        }   
    }

    // ACTUALIZAR REGISTROS
    public function actualizar(Request $request,$tabla, $id_minuta, $id_registro): Response
    {

        // CONSULTA DE DATOS EN DB 
            $usuarios = $this->getDoctrine()->getRepository(Usuario::class);
            $minutas = $this->getDoctrine()->getRepository(Minuta::class);
            $estatusminutas = $this->getDoctrine()->getRepository(EstatusMinuta::class);
            $temas = $this->getDoctrine()->getRepository(TemaMinuta::class);
            $secciones = $this->getDoctrine()->getRepository(SeccionMinuta::class);
            $categorias = $this->getDoctrine()->getRepository(Categoria::class);
            $estatusfirmas = $this->getDoctrine()->getRepository(RegistroMinuta::class);
            $roles = $this->getDoctrine()->getRepository(Roles::class);
            $responsablestemas = $this->getDoctrine()->getRepository(ResponsableTema::class);
            $tema_ususrio = $this->getDoctrine()->getRepository(TemaUsuario::class);

        // ROL
            $log = $this->getDoctrine()->getRepository(Log::class);
            $log = $log->findBy( array(), array('id' => 'DESC') );
            $log = $log[0]->getUsuario();
            $rol_log = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['id' => $log])->getRol()->getIdRoles(); 
            $user = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['id' => $log])->getUser(); 

        switch ($tabla) {

            case 'minuta':

                // CONSULTA DE MINUTA EN DB
                $minuta = $minutas->findOneBy(['id' => $id_minuta]);
                
                // COLSUTA DE USUARIOS
                $usuarios = $usuarios->findBy(['rol' => 3,'status' => 1]);

                // UTIMOS TEMAS DE ULTIMA MINUTA
                if (!empty($temas->findBy(['idReunion' => $id_minuta]))) {
                    $temas_minuta = $temas->findBy(['idReunion' => $id_minuta]);
                }else{
                    $last_minuta = $minutas->findBy(array('estatus' => 1), array('id' => 'DESC'))[0];
                    $temas_minuta = $temas->findBy(['idReunion' => $last_minuta->getId()]);
                }

                // COLSUTA DE AUDIENCIA
                $audiencia = $this->getDoctrine()->getRepository(Audiencia::class)->findBy(['idMinuta' => $id_minuta]);
                $data_minuta = ['minuta' => $minuta , 'usuarios' => $usuarios, 'audiencia' => $audiencia,'temas' => $temas_minuta ]; 

                // FORMULARIO
                $update_minuta = $this->createForm(MinutaType::class,$data_minuta);
                $update_minuta->handleRequest($request);

                // VALIDAR ENVIO DE DATOS
                if ($update_minuta->isSubmitted()) {

                    $form_data = $request->get('minuta');

                    // FORMATO DE FECHA
                    $fechaInicio = new \DateTime('@'.strtotime($form_data['fecha_inicio']));
                    $fechaFin = new \DateTime('@'.strtotime($form_data['fecha_fin']));
                    $proximaReunion = new \DateTime('@'.strtotime($form_data['proxima_reunion']));

                    // ACTUALIZAR 
                    $em = $this->getDoctrine()->getManager(); 
                    $minuta = $em->getRepository(Minuta::class)->find($id_minuta);

                    $minuta->setObjetivo($form_data['objetivo']);
                    $minuta->setFechaInicio($fechaInicio);
                    $minuta->setFechaFin($fechaFin);
                    $minuta->setProximaReunion($proximaReunion);
                    $minuta->setItinerario($form_data['itinerario']);

                    $em->persist($minuta);
                    $em->flush();

                    // UPDATE ASISTENTES
                    $audiencia = $this->getDoctrine()->getRepository(Audiencia::class);
                    $audiencia = $audiencia->findBy(['idMinuta'=> $id_minuta]);   

                    if (!empty($audiencia)) {

                        if (!empty($form_data['asistentes'])) {

                            //BORRAR AUDIENCIA 
                            foreach ($audiencia as $key => $value) {
                                $entityManager = $this->getDoctrine()->getManager();
                                $articulo = $entityManager->getRepository(Audiencia::class)->find($value->getId());
                                $entityManager->remove($articulo);
                                $flush = $entityManager->flush();
                            }

                            // CREAR NUEVA AUDIENCIA
                            $usuarios = $this->getDoctrine()->getRepository(Usuario::class);
                            $position = $this->getDoctrine()->getRepository(Posiciones::class);
                            $posiciones = $this->getDoctrine()->getRepository(Posiciones::class)->findAll();

                            foreach ($posiciones as $posicion => $valor) {

                                $audiencia = new Audiencia();
                                $audiencia->setIdUsuario($usuarios->findOneBy(['id' => $valor->getIdUsuario()->getId()]));
                                $audiencia->setIdMinuta($id_minuta);
                                $audiencia->setPosicion($position->findOneBy(['idUsuario'=>$valor->getIdUsuario()->getId()])->getPosicion());

                                foreach ($form_data['asistentes'] as $key => $value ) {
                                    if ($usuarios->findOneBy(['id' => $valor->getIdUsuario()])->getId() == intval($value)) {
                                        $audiencia->setAsistencia(1);
                                    }
                                }

                                // GUARDAR EN DB
                                $em->persist($audiencia);
                                $em->flush();
                            }
                        }

                    }else{

                        // LLENAR AUDIENCIA DE LA MINUTA
                        $minuta = $minutas->findOneBy([],['id' => 'DESC'])->getId();
                        $usuarios = $this->getDoctrine()->getRepository(Usuario::class)->findBy(['rol' => 3]);
                        $position = $this->getDoctrine()->getRepository(Posiciones::class);

                        foreach ($usuarios as $key2 => $value2) {

                            $key2=$key2+1;

                            $usuario = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['id' => $value2->getId() ]);

                            $audiencia = new Audiencia();
                            $audiencia->setIdUsuario($usuario);
                            $audiencia->setIdMinuta($minuta);

                            foreach ($form_data['asistentes'] as $key => $value ) {
                                if ($value2->getId()== $value) {
                                    $audiencia->setAsistencia(1);
                                }
                            }

                            $audiencia->setPosicion($position->findOneBy(['idUsuario'=>$value2->getIdUsuario()->getId()])->getPosicion());

                            // GUARDAR EN DB
                            $em->persist($audiencia);
                            $em->flush();

                        }

                    }

                    // UPDATE TEMAS DE MINUTA
                    if (!empty($form_data['Temas_minuta'])) {

                        // actualizar registros
                        if (!empty($temas->findBy(['idReunion' => $id_minuta]))) {
                        
                            //echo 'actualizar temas relacionados con la minuta<br>';
                            $delete = false;
                            foreach ($temas->findBy(['idReunion' => $id_minuta]) as $llave => $valor){

                                foreach ($form_data['Temas_minuta'] as $key => $value){
                                    if ($valor->getId()==$value) {
                                         $delete = true;
                                    }else{
                                        $delete = false;
                                    }
                                }

                                if ($delete == true) {
                                    //echo '<br>se mantinee--->'.$delete.'='.$valor->getId();
                                }else{
                                    //echo "<br>se borra";
                                    $articulo = $em->getRepository(TemaMinuta::class)->find($valor->getId());
                                    $em->remove($articulo);
                                    $flush = $em->flush();
                                }
                                    
                            }

                        }else{// nuevos registros

                            $id_new_minuta = $minutas->findOneBy(['id' => $id_minuta]);
                            foreach ($form_data['Temas_minuta'] as $key => $value) {

                                $topic = $temas->findOneBy(['id' => intval($value)]);
                                $tema = new TemaMinuta();
                                $tema->setTitulo($topic->getTitulo());
                                $tema->setCompromisoInicio($topic->getCompromisoInicio());
                                $tema->setCompromisoFin($topic->getCompromisoFin());
                                $tema->setRequerimiento($topic->getRequerimiento());
                                $tema->setLineaGuia($topic->getLineaGuia());
                                $tema->setCompromisoAccion($topic->getCompromisoAccion());
                                $tema->setCompromiso($topic->getCompromiso());
                                $tema->setObservacion($topic->getObservacion());
                                $tema->setIdEstatus($topic->getIdEstatus()); 
                                $tema->setIdReunion($id_new_minuta);
                                $tema->setIdCategoria($topic->getIdCategoria());
                                $tema->setBloque($topic->getBloque());

                                // GUARDAR EN BD
                                $em->persist($tema);
                                $em->flush(); 
                            }

                        }
                    }

                    return $this->redirectToRoute('minuta' , array('alerta' => 'update-success'));

                }else{

                    return $this->render('minuta/minutas/update-minuta.html.twig', [
                        'title' => 'Actualizar',
                        'form'=> $update_minuta->createView(),
                        'rol' => $rol_log,
                        'user'=> $user
                    ]);

                }

                break;

            case 'usuario':

                $usuario_user = $user;

                // CONSUTA DE USUARIO POR ID
                $usuario = $usuarios->findOneBy(['id' => $id_registro]);
                $user = array( 'usuario' => $usuario, 'roles' => $roles->findAll() );

                // FORMULARIO
                $update_user = $this->createForm(UsuarioType::class,$user);
                $update_user->handleRequest($request);

                // VALIDAR ENVIO DE DATOS
                if ($update_user->isSubmitted()) {

                    $form_data = $request->get('usuario');
                    $roles = $roles->find(intval($form_data['rol']));
                    $rol = new Roles();
                    $rol = $roles;  

                    // ACTUALIZAR 
                    $em = $this->getDoctrine()->getManager(); 
                    $usuario = $em->getRepository(Usuario::class)->find($id_registro);

                    $usuario->setNombre($form_data['nombre']);
                    $usuario->setApellido($form_data['apellido']);
                    $usuario->setEmail($form_data['email']);
                    $usuario->setUser($form_data['user']);
                    $usuario->setPassword($form_data['password']);
                    $usuario->setArea($form_data['area']);
                    $usuario->setRol($rol);
                    $usuario->setIniciales($form_data['iniciales']);

                    $em->persist($usuario);
                    $em->flush();

                    return $this->redirectToRoute('usuario' , array('alerta' => 'update-success'));

                }else{

                    return $this->render('usuario/update-user.html.twig', [
                        'title' => 'Actualizar usuario',
                        'Usuario' => $usuarios->findOneBy(['id' => $id_registro]),
                        'form'=> $update_user->createView(),
                        'rol' => $rol_log,
                        'user'=> $usuario_user
                    ]);

                }

                break;

            case 'tema':

                // CONSUTA DE USUARIO POR ID
                $tema = $temas->findOneBy(['id' => $id_registro]);

                $tema = array( 
                    'tema' => $tema,
                    'estatus' => $estatusminutas->findAll(),
                    'categorias' => $categorias->findBy(['seccion'=> '2']),
                    'secciones' => $secciones->findAll(),
                    'minutas' => $minutas->findBy(array(), array('id' => 'DESC')),
                    'usuarios' => $usuarios->findBy(['rol'=>3]),
                    'formulario' => 'update',
                    'rol' => $rol_log,
                    'user'=> $user 
                );

                // FORMULARIO
                $update_tema = $this->createForm(TemaType::class,$tema);

                // RECUPERANDO RESPUESTA DE FORMS
                $update_tema->handleRequest($request);

                // VALIDAR ENVIO DE DATOS
                if ($update_tema->isSubmitted()) {

                    $form_data = $request->get('tema');

                    if ($form_data['seccion']=='1') {

                        $minuta_pa = $this->getDoctrine()->getRepository(Minuta::class)->findOneBy(['id'=>$form_data['id_reunion']]);
                        
                        // ACTUALIZAR 
                        $em = $this->getDoctrine()->getManager(); 
                        $tema = $em->getRepository(TemaMinuta::class)->find($id_registro);

                        $tema->setObservacion($form_data['observacion']);
                        $tema->setIdReunion($minuta_pa);

                        $em->persist($tema);
                        $em->flush();

                    }elseif($form_data['seccion']=='3'){

                        $minuta_pa = $this->getDoctrine()->getRepository(Minuta::class)->findOneBy(['id'=>$form_data['id_reunion']]);
                        
                        // ACTUALIZAR 
                        $em = $this->getDoctrine()->getManager(); 
                        $tema = $em->getRepository(TemaMinuta::class)->find($id_registro);

                        $tema->setObservacion($form_data['observacion']);
                        $tema->setIdReunion($minuta_pa);

                        $em->persist($tema);
                        $em->flush();

                    }else{

                        if ($form_data['id_estatus'] == 5 ) {
                            // FORMATO DE FECHA
                            $compromisoInicio = new \DateTime('@'.strtotime($form_data['compromiso_inicio']));
                            $compromisoFin = null;
                        }else{
                            // FORMATO DE FECHA
                            $compromisoInicio = new \DateTime('@'.strtotime($form_data['compromiso_inicio']));
                            $compromisoFin = new \DateTime('@'.strtotime($form_data['compromiso_fin']));
                        }

                        //estatus
                        $estatusminutas = $this->getDoctrine()->getRepository(EstatusMinuta::class);
                        $id_estatus = $estatusminutas->findOneBy(['id'=>$form_data['id_estatus']]);

                        $id_minutas_tema = $this->getDoctrine()->getRepository(Minuta::class)->findOneBy(['id'=>$form_data['id_reunion']]);
                        $id_categorias_tema = $this->getDoctrine()->getRepository(Categoria::class)->findOneBy(['id'=>$form_data['id_categoria']]);

                        // ACTUALIZAR 
                        $em = $this->getDoctrine()->getManager(); 
                        $tema = $em->getRepository(TemaMinuta::class)->find($id_registro);

                        $tema->setTitulo($form_data['titulo']);
                        $tema->setCompromisoInicio($compromisoInicio);
                        $tema->setCompromisoFin($compromisoFin);
                        $tema->setRequerimiento($form_data['requerimiento']);
                        $tema->setLineaGuia($form_data['linea_guia']);
                        $tema->setCompromisoAccion($form_data['compromiso_accion']);
                        $tema->setCompromiso($form_data['compromiso']);
                        $tema->setObservacion($form_data['observacion']);
                        $tema->setIdEstatus($id_estatus);
                        $tema->setIdReunion($id_minutas_tema);
                        $tema->setIdCategoria($id_categorias_tema);
                        $tema->setBloque(intval($form_data['seccion']));

                        $em->persist($tema);
                        $em->flush();

                        // NUEVOS USUARIOS SELECCIONADOS EN EL FORM
                        if (!empty($form_data['usuario'])) {

                            // RECUPERANDO REGISTROS RESPONSABLES DEL TEMA ACTUAL
                            $responsablestema = $tema_ususrio->findBy(['idTema' => intval($id_registro)]);
                            $id_tema = $id_registro;
                            $users = array();

                            // ELIMINAR A LOS RESPONSABLES DEL TEMA ACTUAL CON LOS DATOS RECUPERADOS
                            foreach ($responsablestema as $key => $valores ) {
                                $articulo = $em->getRepository(TemaUsuario::class)->find($valores->getId());
                                $em->remove($articulo);
                                $em->flush();
                            }

                            // CREAR Y ASIGNAR NUEVOS RESPONSABLES DE TEMAS
                            foreach ($form_data['usuario'] as $keyUser ) {
                                $temausuario = new TemaUsuario();
                                $temausuario->setIdTema($temas->findOneBy(['id'=>$id_tema]));
                                $temausuario->setIdUsuario($usuarios->findOneBy(['id'=>$keyUser]));
                                $em->persist($temausuario);
                                $em->flush();
                            }

                        }

                    }

                    return $this->redirectToRoute('tema' , array('alerta' => 'update-success'));

                }else{

                   return $this->render('minuta/temas/update.html.twig', [
                        'title' => 'Actualizar',
                        'form'=> $update_tema->createView(),
                        'rol' => $rol_log,
                        'user'=> $user
                    ]);

                }

                break;

            case 'seccion':

                // CONSULTA DATOS DB
                $seccion = $secciones->findOneBy(['id' => $id_registro]);

                // FORMULARIO
                $update_form = $this->createForm(SeccionMinutaType::class,$seccion);
                $update_form->handleRequest($request);

                // VALIDAR ENVIO DE DATOS
                if ($update_form->isSubmitted()) {

                    // DATOS DE FORMULARIO
                    $form_data = $request->get('seccion_minuta');
                    $seccion_name = $form_data['nombre'];

                    // ACTUALIZAR 
                    $em = $this->getDoctrine()->getManager(); 
                    $seccion_update = $em->getRepository(SeccionMinuta::class)->find($id_registro);
                    $seccion_update->setNombre($seccion_name);
                    $em->persist($seccion_update);
                    $em->flush();
                    return $this->redirectToRoute('configuraciones' , array('alerta' => 'update-success'));

                }else{

                    return $this->render('configuracion/update-seccion.html.twig', [
                        'title' => 'Actualizar',
                        'Seccion' => $seccion,
                        'form'=> $update_form->createView(),
                        'rol' => $rol_log,
                        'user'=> $user 
                    ]);

                }

                break;

            case 'categoria':
                // CONSULTA DATOS DB
                $categoria = $categorias->findOneBy(['id' => $id_registro]);

                // CONSULA SECCIONES 
                $seccionesMinuta = $secciones->findAll();
                foreach ($seccionesMinuta as $key => $value) {
                    $secciones_cat[$value->getNombre()] = $value->getId();
                }

                $categoria = array('categoria' => $categoria, 'secciones_cat' => $secciones_cat );

                // FORMULARIO
                $update_form = $this->createForm(CategoriaType::class,$categoria);
                $update_form->handleRequest($request);

                // VALIDAR ENVIO DE DATOS
                if ($update_form->isSubmitted()) {

                    // DATOS DE FORMULARIO
                    $form_data = $request->get('categoria');
                    $new_nombre = $form_data['nombre'];
                    $new_seccion = $form_data['seccion'];
                    $new_orden = $form_data['orden_categoria'];
                    $new_color = $form_data['color'];

                    $secciones = $this->getDoctrine()->getRepository(SeccionMinuta::class)->find(intval($new_seccion));
                    $seccion = new SeccionMinuta();
                    $new_seccion = $secciones;

                    // ACTUALIZAR 
                    $em = $this->getDoctrine()->getManager(); 
                    $categoria_up = $em->getRepository(Categoria::class)->find($id_registro);

                    $categoria_up->setNombre($new_nombre);
                    $categoria_up->setSeccion($new_seccion);
                    $categoria_up->setOrdenCategoria($new_orden);
                    $categoria_up->setColor($new_color);

                    $em->persist($categoria_up);
                    $em->flush();

                    return $this->redirectToRoute('configuraciones' , array('alerta' => 'update-success'));

                }else{

                    return $this->render('configuracion/update-categoria.html.twig', [
                        'title' => 'Actualizar',
                        'Categoria' => $categoria,
                        'form'=> $update_form->createView(), 
                        'rol' => $rol_log,
                        'user'=> $user 
                    ]);

                }
                break;

            case 'estatusminuta':

                // CONSULTA DATOS DB
                $estatus_minuta = $estatusminutas->findOneBy(['id' => $id_registro]);

                // FORMULARIO
                $update_form = $this->createForm(EstatusMinutaType::class,$estatus_minuta);
                $update_form->handleRequest($request);

                // VALIDAR ENVIO DE DATOS
                if ($update_form->isSubmitted()) {

                    // DATOS DE FORMULARIO
                    $form_data = $request->get('estatus_minuta');
                    $new_name = $form_data['nombre'];
                    $new_color = $form_data['color'];

                    // ACTUALIZAR 
                    $em = $this->getDoctrine()->getManager(); 
                    $estatusminuta_up = $em->getRepository(EstatusMinuta::class)->find($id_registro);
                    $estatusminuta_up->setNombre($new_name);
                    $estatusminuta_up->setColor($new_color);
                    $em->persist($estatusminuta_up);
                    $em->flush();
                    return $this->redirectToRoute('configuraciones' , array('alerta' => 'update-success'));

                }else{

                    return $this->render('configuracion/update-estatusminuta.html.twig', [
                        'title' => 'Actualizar',
                        'form'=> $update_form->createView(),
                        'rol' => $rol_log,
                        'user'=> $user 
                    ]);

                }
                break;

            case 'firma':

                // CONSULTA DATOS DB
                $firma_minuta = $estatusfirmas->findOneBy(['id' => $id_registro]);

                // FORMULARIO
                $update_form = $this->createForm(FirmaMinutaType::class, $firma_minuta); 
                $update_form->handleRequest($request);

                // VALIDAR ENVIO DE DATOS
                if ($update_form->isSubmitted()) {

                    // DATOS DE FORMULARIO
                    $form_data = $request->get('firma_minuta');
                    $new_opcion = $form_data['opcion'];
                    $new_respuesta = $form_data['respuesta'];

                    // ACTUALIZAR 
                    $em = $this->getDoctrine()->getManager(); 
                    $estatusfirma_up = $em->getRepository(RegistroMinuta::class)->find($id_registro);
                    $estatusfirma_up->setOpcion($new_opcion);
                    $estatusfirma_up->setRespuesta($new_respuesta);
                    $em->persist($estatusfirma_up);
                    $em->flush();
                    return $this->redirectToRoute('configuraciones' , array('alerta' => 'update-success'));

                }else{

                    return $this->render('configuracion/update-estatusfirma.html.twig', [
                        'title' => 'Actualizar',
                        'form'=> $update_form->createView(), 
                        'rol' => $rol_log,
                        'user'=> $user
                    ]);
                }
                break;

            default:
                dd($tabla);
                break;
        }
    }

    // BORRAR REGISTROS
    public function borrar(Request $request,$tabla, $id_minuta, $id_registro): Response
    {

        switch ($tabla) {

            case 'usuario':

                // BORRAR POCICION
                $em = $this->getDoctrine()->getManager(); 
                $posicion_delete = $em->getRepository(Posiciones::class)->findOneBy(['idUsuario'=>$id_registro]);
                $em->remove($posicion_delete);
                $flush = $em->flush();

                $em = $this->getDoctrine()->getManager(); 
                $usuario = $em->getRepository(Usuario::class)->find($id_registro);

                $usuario->setStatus(0);

                $em->persist($usuario);
                $em->flush();

                return $this->redirectToRoute('usuario' , array('alerta' => 'delete-success'));
                break;

            case 'minuta':
                $entityManager = $this->getDoctrine()->getManager();
                $articulo = $entityManager->getRepository(Minuta::class)->find($id_minuta);
                $entityManager->remove($articulo);
                $flush = $entityManager->flush();
                return $this->redirectToRoute('minuta', array('alerta' => 'delete-success'));
                break;

            case 'tema':
                $entityManager = $this->getDoctrine()->getManager();
                $articulo = $entityManager->getRepository(TemaMinuta::class)->find($id_registro);
                $entityManager->remove($articulo);
                $flush = $entityManager->flush();
                return $this->redirectToRoute('tema', array('alerta' => 'delete-success'));
                break;

            case 'seccion':
                $entityManager = $this->getDoctrine()->getManager();
                $articulo = $entityManager->getRepository(SeccionMinuta::class)->find($id_registro);
                $entityManager->remove($articulo);
                $flush = $entityManager->flush();
                return $this->redirectToRoute('configuraciones', array('alerta' => 'delete-success'));
                break;

            case 'categoria':
                $entityManager = $this->getDoctrine()->getManager();
                $articulo = $entityManager->getRepository(Categoria::class)->find($id_registro);
                $entityManager->remove($articulo);
                $flush = $entityManager->flush();
                return $this->redirectToRoute('configuraciones', array('alerta' => 'delete-success'));
                break;

            case 'estatusminuta':
                $entityManager = $this->getDoctrine()->getManager();
                $articulo = $entityManager->getRepository(EstatusMinuta::class)->find($id_registro);
                $entityManager->remove($articulo);
                $flush = $entityManager->flush();
                return $this->redirectToRoute('configuraciones', array('alerta' => 'delete-success'));
                break;

            case 'firma':
                $entityManager = $this->getDoctrine()->getManager();
                $articulo = $entityManager->getRepository(RegistroMinuta::class)->find($id_registro);
                $entityManager->remove($articulo);
                $flush = $entityManager->flush();
                return $this->redirectToRoute('configuraciones', array('alerta' => 'delete-success'));
                break;

            default:
                dd($tabla);
                break;
        }
        
    }

    public function updatepos(Request $request)
    {

        $data = $request->get('newpos');
        $data = explode(',', $data);

        $usuarios = $this->getDoctrine()->getRepository(Usuario::class);
        $posiciones = $this->getDoctrine()->getRepository(Posiciones::class);
        $audiencia = $this->getDoctrine()->getRepository(Audiencia::class);

        // ROL
            $log = $this->getDoctrine()->getRepository(Log::class);
            $log = $log->findOneBy( array(), array('id' => 'DESC') );
            $log = $log->getUsuario();
            $rol = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['id' => $log])->getRol()->getIdRoles(); 
            $user = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['id' => $log])->getUser();

        // ACTUALIZAR POCICIONES    
        if ($request->get('audi') == true) {
            $em = $this->getDoctrine()->getManager(); 
            $conter = 1;
            foreach ($data as $key => $value) {
                //echo 'id regitro->'.$value.' | new pos -> '.$conter.'<br>--------<br>';

                $posicion_adiencia = $em->getRepository(Audiencia::class)->find($value);
                $posicion_adiencia->setPosicion($conter);
                $em->persist($posicion_adiencia);
                $em->flush();  

                $conter++;
            }

            return $this->redirectToRoute('minuta' , array('alerta' => 'update-success'));
            exit();

        }elseif(!empty($posiciones->findAll())){

            $em = $this->getDoctrine()->getManager(); 

            $conter = 1;

            foreach ($data as $key => $value) {
                echo 'id regitro'.$conter.' | new user ->'.$value.' | new pos -> '.$key.'<br>--------<br>';

                $estatusfirma_up = $em->getRepository(Posiciones::class)->findOneBy(['idUsuario'=>$value]);
                $estatusfirma_up->setIdUsuario($usuarios->findOneBy(['id'=>$value]));
                $estatusfirma_up->setPosicion($key);
                $em->persist($estatusfirma_up);
                $em->flush();     
                
                $conter++;
            }

            return $this->redirectToRoute('usuario' , array('alerta' => 'update-success'));
            exit();

        }else{

            $em = $this->getDoctrine()->getManager();

            foreach ($data as $key => $value) {

                $key+1;

                $users = $usuarios->findOneBy(['id'=>$value]);

                if ($users->getId()!=1 ){
                
                    // CREAR OBJETO Y ASIGNAR VALORES
                    $estatus_firma = new Posiciones();
                    $estatus_firma->setIdUsuario($usuarios->findOneBy(['id'=>$value]));
                    $estatus_firma->setPosicion($key);

                    // GUARDAR EN BD
                    $em->persist($estatus_firma);
                    $em->flush();;

                }
                
            }

            return $this->redirectToRoute('usuario' , array('alerta' => 'update-success'));
            exit();
        }
    }

}
