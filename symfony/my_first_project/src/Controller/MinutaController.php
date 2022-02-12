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
use App\Entity\Log;




class MinutaController extends AbstractController
{
    /**
     * @Route("/minuta", name="minuta")
     */
    public function index(): Response
    {   

        $id_minuta = 85;

    	// consulta minuta id
        $minuta_repo = $this->getDoctrine()->getRepository(Minuta::class);
        $minuta =  $minuta_repo->find($id_minuta);

        // estatus minuta
        $estatusMinuta_repo = $this->getDoctrine()->getRepository(EstatusMinuta::class);
        $estatusMinutas =  $estatusMinuta_repo->findAll();
        $estatusMinuta =  $estatusMinuta_repo->find($minuta->getEstatus());
        $estatusMinuta = $estatusMinuta->getNombre();

        // audiencia minuta
        $audiencia_repo = $this->getDoctrine()->getRepository(Audiencia::class);
        $audiencia =  $audiencia_repo->findBy(['id_minuta' => $id_minuta]);

        // usuarios 
        $usuario_repo = $this->getDoctrine()->getRepository(Usuario::class);
        $usuario =  $usuario_repo->findAll();

        // temas de la minuta
        $temaMinuta_repo = $this->getDoctrine()->getRepository(TemaMinuta::class);
        $temaMinuta =  $temaMinuta_repo->findBy(['id_reunion' => $id_minuta]);

        // temas de usuarios
        $temaUsuario_repo = $this->getDoctrine()->getRepository(TemaUsuario::class);
        $temaUsuario =  $temaUsuario_repo->findAll();


        $minuta_detalle = array(
            'id' => $minuta->getId(),
            'objetivo' => $minuta->getObjetivo(),
            'fechaInicio' => $minuta->getFechaInicio(),
            'fechaFin' => $minuta->getFechaFin(),
            'proximaReunion' => $minuta->getProximareunion(),
            'itinerario' => $minuta->getItinerario(),
            'estatus' => $estatusMinuta,
            'estatusMinutas' => $estatusMinutas,
            'autorizacion' => $minuta->getAutorizacion(),
            'audiencia' => $audiencia,
            'usuarios' => $usuario,
            'temasMinuta' => $temaMinuta,
            'temasUsuarios' => $temaUsuario
        );

        
        return $this->render('minuta/index.html.twig', [
            'title' => 'Minuta correspondiente a la junta del: '.$minuta->getFechaInicio(),
            'MinutaDetalle' => $minuta_detalle
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

        $estatusMinuta_repo = $this->getDoctrine()->getRepository(EstatusMinuta::class);
        $estatusMinuta =  $estatusMinuta_repo->findAll();

        $minuta_repo = $this->getDoctrine()->getRepository(Minuta::class);
        $minuta =  $minuta_repo->findAll();

        $categoriaMinuta_repo = $this->getDoctrine()->getRepository(Categoria::class);
        $categoriaMinuta =  $categoriaMinuta_repo->findAll();

        return $this->render('minuta/tema.html.twig', [
            'title' => 'Temas de Minutas',
            'Minutas' => $minuta,
            'TemasMinuta' => $temaMinuta,
            'EstatusMinuta' => $estatusMinuta,
            'CategoriasMinuta' => $categoriaMinuta
        ]);
    }

    public function buscarMinuta($id_minuta)
    {

        // consulta minuta id
        $minuta_repo = $this->getDoctrine()->getRepository(Minuta::class);
        $minuta =  $minuta_repo->find($id_minuta);

        // estatus minuta
        $estatusMinuta_repo = $this->getDoctrine()->getRepository(EstatusMinuta::class);
        $estatusMinutas =  $estatusMinuta_repo->findAll();
        $estatusMinuta =  $estatusMinuta_repo->find($minuta->getEstatus());
        $estatusMinuta = $estatusMinuta->getNombre();

        // audiencia minuta
        $audiencia_repo = $this->getDoctrine()->getRepository(Audiencia::class);
        $audiencia =  $audiencia_repo->findBy(['id_minuta' => $id_minuta]);

        // usuarios 
        $usuario_repo = $this->getDoctrine()->getRepository(Usuario::class);
        $usuario =  $usuario_repo->findAll();

        // temas de la minuta
        $temaMinuta_repo = $this->getDoctrine()->getRepository(TemaMinuta::class);
        $temaMinuta =  $temaMinuta_repo->findBy(['id_reunion' => $id_minuta]);

        // temas de usuarios
        $temaUsuario_repo = $this->getDoctrine()->getRepository(TemaUsuario::class);
        $temaUsuario =  $temaUsuario_repo->findAll();


        $minuta_detalle = array(
            'id' => $minuta->getId(),
            'objetivo' => $minuta->getObjetivo(),
            'fechaInicio' => $minuta->getFechaInicio(),
            'fechaFin' => $minuta->getFechaFin(),
            'proximaReunion' => $minuta->getProximareunion(),
            'itinerario' => $minuta->getItinerario(),
            'estatus' => $estatusMinuta,
            'estatusMinutas' => $estatusMinutas,
            'autorizacion' => $minuta->getAutorizacion(),
            'audiencia' => $audiencia,
            'usuarios' => $usuario,
            'temasMinuta' => $temaMinuta,
            'temasUsuarios' => $temaUsuario
        );

        
        return $this->render('minuta/minuta.html.twig', [
            'title' => 'Minuta correspondiente a la junta del: '.$minuta->getFechaInicio(),
            'MinutaDetalle' => $minuta_detalle
        ]);
    }


}
