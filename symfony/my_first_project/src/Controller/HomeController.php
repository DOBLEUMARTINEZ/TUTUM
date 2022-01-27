<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Usuario;
use App\Entity\Minuta;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home") 
     */
    public function index(): Response
    {
        $minuta_repo = $this->getDoctrine()->getRepository(Minuta::class);
        $minuta =  $minuta_repo->findAll();

        $usuario_repo = $this->getDoctrine()->getRepository(Usuario::class);
        $usuario =  $usuario_repo->findAll();

        $host= $_SERVER["HTTP_HOST"];
        $url= $_SERVER["REQUEST_URI"];
        $url = "http://" . $host . $url;


        return $this->render('home/index.html.twig', [
            'title' => 'Dashborad',
            'minutas' => $minuta,
            'Usuarios' => $usuario,
            'url_actual'=> $url
        ]);
    }

}
