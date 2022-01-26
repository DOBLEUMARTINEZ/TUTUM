<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Usuario; 

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home") 
     */
    public function index(): Response
    {
        $users_repo = $this->getDoctrine()->getRepository(Usuario::class);
        $users =  $users_repo->findAll();

        return $this->render('home/index.html.twig', [
            'title' => 'Historico de Minutas',
            'usuarios' => $users
        ]);
    }

}
