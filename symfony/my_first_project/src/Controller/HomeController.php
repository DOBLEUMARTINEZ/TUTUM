<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Rquest;
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

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home") 
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

        return $this->render('home/index.html.twig', [
            'title' => 'Minuta correspondiente a la junta del: '.$minuta->getFechaInicio(),
            'MinutaDetalle' => $minuta_detalle
        ]);

    }

    public function login()
    {


        $form = $this->createFormBuilder()
                     ->setAction($this->generateUrl('validar_usurio'))
                     ->setMethod('POST')
                        ->add('Usuario', TextType::class)
                        ->add('Password', TextType::class)
                        ->add('Submit', SubmitType::class)
                     ->getForm();


        return $this->render('home/login.html.twig', [
            'title' => 'login',
            'form'=> $form->createView()
        ]);   
    }

}
