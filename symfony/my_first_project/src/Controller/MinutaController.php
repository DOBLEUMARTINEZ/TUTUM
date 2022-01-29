<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Minuta;
use App\Entity\Audiencia;
use App\Entity\Usuario;
use App\Entity\SeccionMinuta;
use App\Entity\RegistroMinuta;
use App\Entity\Categoria;
use App\Entity\EstatusMinuta;
use App\Entity\TemaUsuario;
use App\Entity\TemaMinuta;




class MinutaController extends AbstractController
{
    /**
     * @Route("/minuta", name="minuta")
     */
    public function index(): Response
    {

    	$minuta_repo = $this->getDoctrine()->getRepository(Minuta::class);
        $minuta =  $minuta_repo->findAll();

        $estatus_minuta_repo = $this->getDoctrine()->getRepository(EstatusMinuta::class);
        $estatus_minuta =  $estatus_minuta_repo->findAll();

        return $this->render('minuta/index.html.twig', [
            'title' => 'Minutas',
            'minutas' => $minuta,
            'Estatus' => $estatus_minuta
        ]);
    }

    public function audienciaMinuta(): Response
    {
        $audiencia_repo = $this->getDoctrine()->getRepository(Audiencia::class);
        $audiencia =  $audiencia_repo->findAll();

        $usuario_repo = $this->getDoctrine()->getRepository(Usuario::class);
        $usuario =  $usuario_repo->findAll();

        $minuta_repo = $this->getDoctrine()->getRepository(Minuta::class);
        $minuta =  $minuta_repo->findAll();

        return $this->render('minuta/audiencia-minuta.html.twig', [
            'title' => 'Audiencias',
            'Audiencias' => $audiencia,
            'Usuarios' => $usuario,
            'Minutas' => $minuta
        ]);

    }

    public function seccionMinuta(): Response
    {

        $seccionMinuta_repo = $this->getDoctrine()->getRepository(seccionMinuta::class);
        $seccionMinuta =  $seccionMinuta_repo->findAll();

        return $this->render('minuta/seccion-minuta.html.twig', [
            'title' => 'Secciones de la Minuta',
            'Secciones' => $seccionMinuta
        ]);
    }

    public function registroMinuta(): Response
    {

        $registroMinuta_repo = $this->getDoctrine()->getRepository(RegistroMinuta::class);
        $registroMinuta =  $registroMinuta_repo->findAll();

        return $this->render('minuta/registro-minuta.html.twig', [
            'title' => 'Estatus disponibles en firma de minutas',
            'RegistroMinutas' => $registroMinuta
        ]);
    }

    public function categoriaMinuta(): Response
    {

        $categoriaMinuta_repo = $this->getDoctrine()->getRepository(Categoria::class);
        $categoriaMinuta =  $categoriaMinuta_repo->findAll();

        $seccionMinuta_repo = $this->getDoctrine()->getRepository(seccionMinuta::class);
        $seccionMinuta =  $seccionMinuta_repo->findAll();

        return $this->render('minuta/categoria-minuta.html.twig', [
            'title' => 'Categorias',
            'Categorias' => $categoriaMinuta,
            'Secciones' => $seccionMinuta
        ]);
    }

    public function estatusMinuta(): Response
    {

        $estatusMinuta_repo = $this->getDoctrine()->getRepository(EstatusMinuta::class);
        $estatusMinuta =  $estatusMinuta_repo->findAll();

        return $this->render('minuta/estatus-minuta.html.twig', [
            'title' => 'Estatus de de minuta',
            'Estatus' => $estatusMinuta
        ]);
    }

    public function temaUsuario(): Response
    {

        $temaUsuario_repo = $this->getDoctrine()->getRepository(TemaUsuario::class);
        $temaUsuario =  $temaUsuario_repo->findAll();

        $usuario_repo = $this->getDoctrine()->getRepository(Usuario::class);
        $usuario =  $usuario_repo->findAll();

        return $this->render('minuta/tema-usuario.html.twig', [
            'title' => 'Temas de usuarios',
            'TemasUsuarios' => $temaUsuario,
            'Usuarios' => $usuario
        ]);
    }

    public function temaMinuta(): Response
    {

        $temaMinuta_repo = $this->getDoctrine()->getRepository(TemaMinuta::class);
        $temaMinuta =  $temaMinuta_repo->findAll();

        $usuario_repo = $this->getDoctrine()->getRepository(Usuario::class);
        $usuario =  $usuario_repo->findAll();

        return $this->render('minuta/tema.html.twig', [
            'title' => 'Temas de Minutas',
            'TemasMinuta' => $temaMinuta,
            'Usuarios' => $usuario
        ]);
    }


}
