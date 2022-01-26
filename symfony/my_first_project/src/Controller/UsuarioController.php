<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Usuario; 

class UsuarioController extends AbstractController
{

    public function index(): Response
    {
        $users_repo = $this->getDoctrine()->getRepository(Usuario::class);
        $users =  $users_repo->findAll();

        return $this->render('usuario/index.html.twig', [
            'title' => 'Usuarios',
            'Usuarios' => $users
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
