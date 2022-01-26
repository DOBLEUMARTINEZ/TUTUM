<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Minuta; 

class MinutaController extends AbstractController
{
    /**
     * @Route("/minuta", name="minuta")
     */
    public function index(): Response
    {

    	$minuta_repo = $this->getDoctrine()->getRepository(Minuta::class);
        $minuta =  $minuta_repo->findAll();

        return $this->render('minuta/index.html.twig', [
            'title' => 'Minutas',
            'minutas' => $minuta
        ]);
    }
}
