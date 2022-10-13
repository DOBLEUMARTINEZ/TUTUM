<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Usuario;
use App\Entity\Roles;
use App\Entity\Log;
use App\Entity\Posiciones; 

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use App\form\UsuarioType;
use App\form\TemaType;


class UsuarioController extends AbstractController
{

    public function index(Request $request, $id_user): Response
    {
        $usuarios = $this->getDoctrine()->getRepository(Usuario::class);
        $posiciones = $this->getDoctrine()->getRepository(Posiciones::class)->findBy(array(), array('posicion' => 'ASC'));

        // TRAER VARIABLE DE ALERTA SATISFACTORIA
            if (isset($_GET['alerta'])) {
                $alerta = $_GET['alerta'];
            }else{
                $alerta = 'none';
            }

        // ROL Y USUARIO
            $log = $this->getDoctrine()->getRepository(Log::class);
            $usuario = $log->findOneBy( array(), array('id' => 'DESC') )->getUsuario();
            $rol = $usuarios->findOneBy(['id' => $usuario])->getRol()->getIdRoles();
            $user_id = $usuarios->findOneBy(['id' => $usuario])->getId();
            $user = $usuarios->findOneBy(['id' => $usuario])->getUser();

        // CONSULTA USUARIOS
        $usuarios = $this->getDoctrine()->getRepository(Usuario::class)->findBy( array('rol' => 3, 'status' => 1), array('id' => 'ASC') );
        $titulo = 'Todos los usuarios';

        // FORMULARIO DE BUSQUEDA  
            $form_search_user = $this->createFormBuilder()
                //->setAction($this->generateUrl('validar_usurio'))
                ->setMethod('POST')

                    ->add('nombre', TextType::class,[
                        'label'=>'Busqueda por nombre:',
                        'required'=> false
                    ])

                    ->add('submit', SubmitType::class,[
                        'label'=>'BUSCAR'
                    ])

                ->getForm();

        // VALIDAR ENVIO DE FORMULARIO 
            $form_search_user->handleRequest($request);
            if ($form_search_user->isSubmitted()) {

                // DATOS DE FORMULARIO
                $form_search = $request->get('form');
                $nombre_search = $form_search['nombre'];

                $usuarios = $this->getDoctrine()->getRepository(Usuario::class)->findBy(['nombre'=>$nombre_search]);

                // VALIDANDO BUESQUEDA
                if (!empty($usuarios)) {
                    $titulo = 'Busqueda exitosa';
                }else{
                    $titulo = 'Ningun resultado relacionado';
                    $usuarios = $this->getDoctrine()->getRepository(Usuario::class)->findAll();
                }

            }

        // VISTA
        return $this->render('usuario/index.html.twig', [
            'title' => $titulo,
            'Usuarios' => $usuarios,
            'alerta' => $alerta,
            'form'=> $form_search_user->createView(),
            'rol' => $rol,
            'user'=> $user,
            'posiciones'=> $posiciones
        ]);

    }

    public function guardar(): Response // guardar nuevo usuario en la base de datos
    {	
    	// Permite trabajar con entidades y guardadr en la bd
    	$entityManager = $this->getDoctrine()->getManager(); 

    	// crea el objeto y asignarle valores
    	$usuario = new Usuario();
    	$usuario->setNombre('Walter');
        $usuario->setApellido('White');
    	$usuario->setUser('Heisenberg');
        $usuario->setEmail('breakingbad@fox.com');
        $usuario->setPassword('azul100');
        $usuario->setRol('Admin');
        $usuario->setArea('FS');
        $usuario->setIniciales('WW');
        $usuario->setEstatus('activo');

    	// guardar temporalmemte los datos 
    	$entityManager->persist($usuario);

    	// insertar todos los datos en la base de datos
    	$entityManager->flush();

        return $this->redirect('usuario');

    }

    public function usuario($id) // consultar regitros en la base de datos
    {	
    	// crear un repositorio -> nos permitira hcaer las consultas con doctrine.
    	$user_repo = $this->getDoctrine()->getRepository(Usuario::class);

    	//crear consulta 
    	$user =  $user_repo->find($id);

    	// comprobando la respuesta 

    	if (!$user) {
    		$mensaje = 'no hay datos';
    	}else{
    		$mensaje = 'El usuario elegido es: '.$user->getNombre().' '.$user->getUser();
    	}


    	return $this->render('usuario/index.html.twig', [
            'title' => $mensaje
        ]);
    }


    

}
