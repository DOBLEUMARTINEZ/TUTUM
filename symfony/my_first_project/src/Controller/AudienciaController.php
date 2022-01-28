<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Audiencia;

class AudienciaController extends AbstractController
{
    /**
     * @Route("/audiencia", name="audiencia")
     */
    public function index(): Response
    {
        return $this->render('audiencia/index.html.twig', [
            'controller_name' => 'AudienciaController',
        ]);
    }
}
