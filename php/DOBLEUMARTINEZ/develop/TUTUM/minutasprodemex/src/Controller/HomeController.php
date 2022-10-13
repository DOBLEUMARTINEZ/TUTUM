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
use App\Entity\ResponsableTema;
use App\Entity\TemaMinuta;
use App\Entity\Log;
use App\Entity\FirmaMinuta;
use App\Entity\Posiciones;

// EXTESION FORM
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


// FORMULARIOS
use App\form\LoginType;
use App\form\LogFirmaType;
use App\form\ResetPasswordType;

class HomeController extends AbstractController
{
    
    public function index(Request $request): Response
    {   
        // CONEXION CON DATABESE
            $minprod_db = $this->getDoctrine()->getManager();

        // TRAER VARIABLE DE ALERTA 
            if (isset($_GET['alerta'])) {
                $alerta = $_GET['alerta'];
            }else{
                $alerta = 'none';
            }

        // CONEXION CON BASE DE DATOS
            $minutas = $this->getDoctrine()->getRepository(Minuta::class);
            $usuarios = $this->getDoctrine()->getRepository(Usuario::class);
            $categorias = $this->getDoctrine()->getRepository(Categoria::class);
            $estatus = $this->getDoctrine()->getRepository(EstatusMinuta::class);
            $audiencia = $this->getDoctrine()->getRepository(Audiencia::class);
            $temas = $this->getDoctrine()->getRepository(TemaMinuta::class);
            $temasUsuarios = $this->getDoctrine()->getRepository(TemaUsuario::class);
            $responsablesTemas = $this->getDoctrine()->getRepository(ResponsableTema::class);
            $posiciones = $this->getDoctrine()->getRepository(Posiciones::class)->findBy( array(), array('posicion' => 'ASC'));

        // ROL Y USUARIO
            $log = $this->getDoctrine()->getRepository(Log::class);
            $usuario = $log->findOneBy( array(), array('id' => 'DESC') )->getUsuario();
            $rol = $usuarios->findOneBy(['id' => $usuario])->getRol()->getIdRoles();
            $user_id = $usuarios->findOneBy(['id' => $usuario])->getId();
            $user = $usuarios->findOneBy(['id' => $usuario])->getUser();

        // MINUTA
            if ($rol==3) {
                $minuta = $minutas->findOneBy(['estatus' => 1],['id' => 'DESC']);
            }else{
                $minuta = $minutas->findOneBy([],['id' => 'DESC']); 
            }

            $id_minuta = $minuta->getId();

        // CATALOGO DE CATEGORIA
            $cat_categorias_minuta =  $categorias->findAll();

        // CATALOGO ESTATUS
            $cat_estatus_minuta = $estatus->findAll();

        // AUDUENCIA ACTUALIZAR ESTATUS A 1 = ENTRO Y LA VIO
            if ($rol > 2 ) {

                $audiencia_id_reg = $this->getDoctrine()->getRepository(Audiencia::class)->findOneBy(['idMinuta'=>$id_minuta,'idUsuario'=>$user_id]);
                $estatus_audiencia = $this->getDoctrine()->getRepository(RegistroMinuta::class)->findOneBy(['id'=>1]);

                if (!empty($audiencia_id_reg)) {

                    if ($audiencia_id_reg->getEstatus()==null) {

                        // UPDATE AUDIENCIA
                            $em = $this->getDoctrine()->getManager();
                            $audiencia_up1 = $em->getRepository(Audiencia::class)->find($audiencia_id_reg);
                            $audiencia_up1->setEstatus($estatus_audiencia);
                            $em->persist($audiencia_up1);
                            $em->flush();
                    }

                }else{
                    // REDIRIGIR Y ALERTA
                    return $this->redirectToRoute('login', array('alerta' => 'error'));
                }
            }

        // CREACION DE FORMULARIOS

            // FIRMA
                $form_mail = $this->createFormBuilder()
                  ->setMethod('POST')

                      ->add('firmar', SubmitType::class,[
                          'label'=>'FIRMAR',
                           'attr' => ['class' => 'btn btn-success btn-full-width', 'value' => 2 ]
                      ])

                      ->add('rechazar', SubmitType::class,[
                          'label'=>'RECHAZAR',
                           'attr' => ['class' => 'btn btn-danger btn-full-width', 'value' => 3]
                      ])

                      ->add('comentarios', TextareaType::class,[
                          'label'=>'Comentarios',
                          'required' => false,
                      ])

                  ->getForm();

            // PUBLICAR MINUTA
                $form_publicar = $this->createFormBuilder()
                    ->setMethod('POST')

                      ->add('aceptarbtn', SubmitType::class,[
                          'label'=>'ACEPTAR',
                           'attr' => ['class' => 'btn btn-success btn-full-width', 'value' => 1]
                      ])

                    ->getForm();

        // VALIADAR ENVIO DE FORMULARIOS

            // FIRMA  
            $form_mail->handleRequest($request);
            if ($form_mail->isSubmitted()) {
                
                $data_form = $request->get('form');

                if (isset($data_form['aceptarbtn'])) { // PUBLICAR

                    // ACTUALIZAR 
                    $minuta = $minprod_db->getRepository(Minuta::class)->find($id_minuta);
                    $minuta->setEstatus($data_form['aceptarbtn']);
                    $minprod_db->persist($minuta);
                    $minprod_db->flush();

                    return $this->redirectToRoute('index', array('alerta' => 'public-success')); 

                }else{ // FIRMA MINUTA

                    $comentarios = null;

                    if ( isset($data_form['firmar']) ) {
                        $firma_id = 2;
                    }elseif(isset($data_form['rechazar'])){
                        
                        if (!empty($data_form['comentarios'])) {
                            $firma_id = 4;
                            $comentarios = $data_form['comentarios'];
                        }else{
                          $firma_id = 3;  
                        }
                    }

                    $firma = $this->getDoctrine()->getRepository(RegistroMinuta::class)->findOneBy(['id'=>$firma_id]);
                    $audiencia_id = $this->getDoctrine()->getRepository(Audiencia::class)->findOneBy(['idMinuta'=>$id_minuta,'idUsuario'=>$user_id])->getId();

                    // UPDATE AUDIENCIA
                    $em = $this->getDoctrine()->getManager();
                    $audiencia_up = $em->getRepository(Audiencia::class)->find($audiencia_id);
                    $audiencia_up->setEstatus($firma);
                    $audiencia_up->setObservacion($comentarios);
                    $em->persist($audiencia_up);
                    $em->flush();

                    return $this->redirectToRoute('index', array('alerta' => 'firma-success')); 
                }

            }

        // CONSUTA DE MINUTA PARA MOSTRAR EN INICIO
            $minuta =  $minutas->findOneBy(['id' => $id_minuta]);
            $estatus = $minuta->getEstatus();

            $audiencia = $audiencia->findBy(array('idMinuta' => $id_minuta), array('posicion' => 'ASC')); 
            $temas_minuta =  $temas->findBy(['idReunion' => $id_minuta]);
            $usuarios_cat =  $usuarios->findBy(['rol' => 3]);

            $temasUsuarios = $this->getDoctrine()->getRepository(TemaUsuario::class)->findAll();
            $expositores_temas =  $responsablesTemas->findAll();

            // RESPUESTA
            $minuta_detalle = array(
                'id' => $id_minuta,
                'objetivo' => $minuta->getObjetivo(),
                'fechaInicio' => $minuta->getFechaInicio(),
                'fechaFin' => $minuta->getFechaFin(),
                'proximaReunion' => $minuta->getProximareunion(),
                'itinerario' => $minuta->getItinerario(),
                'estatus' => $minuta->getEstatus(),
                'estatusMinutas' =>  $cat_estatus_minuta,
                'autorizacion' => $minuta->isAutorizacion(),
                'audiencia' => $audiencia,
                'usuarios' => $usuarios_cat,
                'temasMinuta' => $temas_minuta,
                'temasUsuarios' => $temasUsuarios
            ); 
                 
        // VISTA DE DASHBOARD - INICIO
            return $this->render('home/index.html.twig', [
                'title' => 'Minuta',
                'userid' => $user_id,
                'rol' => $rol,
                'user' => $user,
                'fecha_minuta' => $minuta->getFechaInicio(),
                'MinutaDetalle' => $minuta_detalle,
                'Categorias' => $cat_categorias_minuta,
                'Estatus' => $cat_estatus_minuta,
                'alerta' => $alerta,
                'logFirmaFormMail' => $form_mail->createView(),
                'publicarMinuta' => $form_publicar->createView(),
                'Posiciones' => $posiciones
            ]);
            exit();    
    }

    public function resetpassword(Request $request): Response
    {     

        // DATOS DE BASE DE DATOS
        $usuarios = $this->getDoctrine()->getRepository(Usuario::class); 

        $log = $this->getDoctrine()->getRepository(Log::class);
        $usuario = $log->findOneBy( array(), array('id' => 'DESC') )->getUsuario();
        $user_id = $usuarios->findOneBy(['id' => $usuario])->getId();

        // DATOS DE BASE DE DATOS
        $usuario = $this->getDoctrine()->getRepository(Usuario::class)->findOneBy(['id'=>intval($user_id)]);

        // FORMULARIO DE LOGIN
        $form = $this->createForm(ResetPasswordType::class,$usuario);
            
        // VALIDAR EL ENVIO DE FORMULARIO
        $form->handleRequest($request);
        if ($form->isSubmitted()) {

            $form = $request->get('reset_password');
            $password = $form['password'];

            // ACTUALIZAR 
            $em = $this->getDoctrine()->getManager(); 
            $usuario = $em->getRepository(Usuario::class)->find($user_id);
            $usuario->setPassword($password);
            $em->persist($usuario);
            $em->flush();

            // INICIO - DASHBOARD     
            return $this->redirectToRoute('index', array('alerta' => 'success'));
            exit();
        }else{

             // VISTA DEL RESET PASSWORD
            return $this->render('home/resetpass.html.twig', [
                'title' => 'Restablecer contraseña',
                'form'=> $form->createView()
            ]);

        }

    }

    public function login(Request $request, $alerta=null)
    {

        // DATOS DE BASE DE DATOS
        $usuarios = $this->getDoctrine()->getRepository(Usuario::class);

        // FORMULARIO DE LOGIN
        $form = $this->createForm(LoginType::class,$usuarios->findAll());
            
        // VALIDAR EL ENVIO DE FORMULARIO
        $form->handleRequest($request);
        if ($form->isSubmitted()) {

            $form = $request->get('login');
            $user = $form['usuario'];
            $password = $form['password'];

            // BUSCAR EN BASE DE DATOS
            $usuario =  $usuarios->findOneBy(['user' => $user, 'password' => $password]);

            // VALIDAR SI EXISTE EL USUARIO
            if (!empty($usuario)&&$usuario->isStatus()==true) {
                date_default_timezone_set('America/Mexico_City'); 
                $entityManager = $this->getDoctrine()->getManager();

                // CREAR OBJETO Y ASIGNAR VALORES;  
                $log = new Log();
                $log->setUsuario($usuario);
                $log->setRegistroId(1);
                $log->setFecha(date("d-m-Y H:i:s"));

                // GUARDAR EN BD
                $entityManager->persist($log);
                $entityManager->flush();

                // RESET PASWORD
                if ($password == 'minutasprodemex2022') {    
                    return $this->redirectToRoute('resetpassword');
                    exit();
                }
                
                // INICIO - DASHBOARD     
                return $this->redirectToRoute('index', array('alerta' => 'success')); 

            }else{
                // REDIRIGIR Y ALERTA
                return $this->redirectToRoute('login', array('alerta' => 'error'));
            }
            
        }else{

        }

        // VISTA DEL LOGIN
        return $this->render('home/login.html.twig', [
            'title' => 'login',
            'alerta' => $alerta,
            'form'=> $form->createView()
        ]);   
    }

} 
