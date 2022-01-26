<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MinutaController extends AbstractController
{
    /**
     * @Route("/minuta", name="minuta")
     */
    public function index(): Response
    {
        return $this->render('minuta/index.html.twig', [
            'title' => 'Minutas',
        ]);
    }
}
