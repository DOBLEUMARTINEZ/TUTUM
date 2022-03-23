<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

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
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;;


class MinutaController extends AbstractController
{
    /**
     * @Route("/minuta", name="minuta")
     */
    public function index(Request $request): Response
    {   

        $title = 'Todas las minutas';
        $fecha_minuta = '';
        $minuta_detalle = '';
        $minutas = '';

        // id minuta default
        $minuta_repo = $this->getDoctrine()->getRepository(Minuta::class);
        $minutas =  $minuta_repo->findAll();

        // formulario busqueda por fecha
        $form_date = $this->createFormBuilder()
            //->setAction($this->generateUrl('validar_usurio'))
            ->setMethod('POST')
                ->add('date_serch', DateType::class,[
                    'label'=>'Busqueda por fecha: ',
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                ])

                ->add('submit', SubmitType::class,[
                    'label'=>'BUSCAR'
                ])

            ->getForm();

        // validar envio de formulario de fecha 
        $form_date->handleRequest($request);
        if ($form_date->isSubmitted()) {

            $form_dates = $request->get('form');
            $date = $form_dates['date_serch'];

            $id_minuta_date = $this->getDoctrine()->getRepository(Minuta::class);
            $id_minutas =  $id_minuta_date->findOneBy(['fecha_inicio' => $date.' 08:00:00' ]);
            
            if (!empty($id_minutas)) {
                $title = 'Minuta correspondiente a reunión del día: ';
                $fecha_minuta = str_replace(' 08:00:00', '', $id_minutas->getFechaInicio());
                $id_minuta = $id_minutas->getId();

                // colsulta final minuta 

                    $minuta_repo = $this->getDoctrine()->getRepository(Minuta::class);
                    $minuta =  $minuta_repo->findOneBy(['id' => $id_minuta]);

                    // estatus minuta
                        $estatusMinuta_repo = $this->getDoctrine()->getRepository(EstatusMinuta::class);
                        $estatusMinutas =  $estatusMinuta_repo->findAll();
                        $estatusMinuta =  $estatusMinuta_repo->find($minuta->getEstatus());

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

                    // RESPUESTA
                        $minuta_detalle = array(
                            'id' => $id_minuta,
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

            }

        }

        // vista
        return $this->render('minuta/index.html.twig', [
            'title' => $title,
            'fecha_minuta' => $fecha_minuta,
            'MinutaDetalle' => $minuta_detalle,
            'Minutas'=> $minutas,
            'form'=> $form_date->createView()
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
