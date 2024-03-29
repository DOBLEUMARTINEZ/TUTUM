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
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class MinutaController extends AbstractController
{
    /**
     * @Route("/minuta", name="minuta")
     */
    public function index(Request $request): Response
    {   

        // id minuta default
        $minuta_repo = $this->getDoctrine()->getRepository(Minuta::class);
        $minutas =  $minuta_repo->findAll();

        // creacion el formulario para busqueda por fecha
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
                            'estatus' => $estatusMinuta->getNombre(),
                            'estatusMinutas' => $estatusMinutas,
                            'autorizacion' => $minuta->getAutorizacion(),
                            'audiencia' => $audiencia,
                            'usuarios' => $usuario,
                            'temasMinuta' => $temaMinuta,
                            'temasUsuarios' => $temaUsuario
                        );

                // vista
                return $this->render('minuta/index.html.twig', [
                    'title' => 'Minuta correspondiente a reunión del día: ',
                    'fecha_minuta' => $fecha_minuta,
                    'MinutaDetalle' => $minuta_detalle,
                    'form'=> $form_date->createView()
                ]);
            }else{
                // return vista
                return $this->render('minuta/index.html.twig', [
                    'title' => 'No hay minutas relacionadas',
                    'Minutas'=> $minutas,
                    'form'=> $form_date->createView()
                ]);
            }

        }else{

            // return vista
            return $this->render('minuta/index.html.twig', [
                'title' => 'Todas las minutas',
                'Minutas'=> $minutas,
                'form'=> $form_date->createView()
            ]);

        }
        
    }

    public function update(Request $request, $id_minuta, $tema): Response
    {
        
        // MINUTA
        $minuta_repo = $this->getDoctrine()->getRepository(Minuta::class);
        $minuta =  $minuta_repo->findOneBy(['id'=>$id_minuta]);
        $fecha_minuta = str_replace(' 08:00:00', '', $minuta->getFechaInicio());

        // USUARIOS
        $usuario_repo = $this->getDoctrine()->getRepository(Usuario::class);
        $usuarios =  $usuario_repo->findBy(['rol' => 'USER']);
        $users  = array();
        $users2  = array();

        foreach($usuarios as $row) 
        { 
            $users += array($row->getUser() => $row->getId());
        }

        // TEMAS 
        $temaMinuta_repo = $this->getDoctrine()->getRepository(TemaMinuta::class);
        $temaMinuta =  $temaMinuta_repo->findOneBy(['id_reunion' => $id_minuta, 'titulo' => 'Principales acuerdos de la reunión']);
        $temasMinutas =  $temaMinuta_repo->findBy(['id_reunion' => $id_minuta]);

        // ESTATUS
        $estatusMinuta_repo = $this->getDoctrine()->getRepository(EstatusMinuta::class);
        $estatusMinutas =  $estatusMinuta_repo->findAll();
        $estatusMinuta =  $estatusMinuta_repo->find($minuta->getEstatus());
        $catalogo_estatus= array();
        foreach($estatusMinutas as $row) 
        { 
            $catalogo_estatus += array($row->getNombre() => $row->getId());
        }

        // CATEGORIA 
        $Categorias_repo = $this->getDoctrine()->getRepository(Categoria::class);
        $Categorias_all =  $Categorias_repo->findAll();
        $Categorias = array();
        foreach($Categorias_all as $row) 
        { 
            $Categorias += array($row->getNombre() => $row->getId());
        }


        // creacion el formulario minuta
        $minuta_form = $this->createFormBuilder()

            ->setMethod('POST')

                ->add('objetivo',
                    TextType::class, 
                    [
                    'label'=>'Objetivo',
                    'data'=> $minuta->getObjetivo(),
                    'attr' => ['class' => '']
                    ]
                )

                ->add('estatus', ChoiceType::class,[
                    'label'=>'Estatus',
                    'choices' => $catalogo_estatus,
                    'attr' => ['class' => '']
                ])

                ->add('fecha_inicio_1', TextType::class,[
                    'label'=>'Fecha inicio',
                    'data'=> $minuta->getFechaInicio(),
                    'attr' => ['class' => '', 'disabled' => 'disabled']
                ])

                ->add('fecha_inicio_2', DateType::class,[
                    'label'=>'Nueva fecha',
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                    'attr' => ['class' => '']
                ])

                ->add('fecha_fin_1', TextType::class,[
                    'label'=>'Fecha fin',
                    'data'=> $minuta->getFechaFin(),
                    'attr' => ['class' => '', 'disabled' => 'disabled']
                ])

                ->add('fecha_fin_2', DateType::class,[
                    'label'=>'Nueva fecha',
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                    'attr' => ['class' => '']
                ])

                ->add('proxima_reunion_1', TextType::class,[
                    'label'=>'Fecha proxima reunion',
                    'data'=> $minuta->getProximareunion(),
                    'attr' => ['class' => '', 'disabled' => 'disabled']
                ])

                ->add('proxima_reunion_2', DateType::class,[
                    'label'=>'Nueva fecha',
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                    'attr' => ['class' => '']
                ])

                ->add('autorizacion', ChoiceType::class,[
                    'label'=>'Autorizacion',
                    'choices' => [ 'Si' => true, 'No' => false ],
                    'attr' => ['class' => '']
                ])


                ->add('itinerario', TextareaType::class,[
                    'label'=>'Itinerario',
                    'data'=> $minuta->getItinerario(),
                    'attr' => ['class' => 'tiny']

                ])

                // INPUT AUDIENCIA
                ->add('audiencia', ChoiceType::class, [
                        'expanded' => true,
                        'multiple' => true,
                        'label'=> $users,
                        'choices' => $users,
                        'data'=> $users
                    ])
                
                // BOTON DE SUBMIT
                ->add('submit', SubmitType::class,[
                    'label'=>'Actualizar',
                    'attr' => ['class' => 'btn btn-success btn-full-width','value' => 'minuta']
                ])

            ->getForm();

        // creacion el formulario tema_minuta
        $tema_form = $this->createFormBuilder()

            ->setMethod('POST')

                ->add('titulo',
                    TextType::class, 
                    [
                    'label'=>'titulo',
                    'attr' => ['class' => '']
                    ]
                )

                ->add('categoria',
                    ChoiceType::class, 
                    [
                    'label'=>'categoria',
                    'choices' => $Categorias,
                    'attr' => ['class' => '']
                    ]
                )

                ->add('estatus', ChoiceType::class,[
                    'label'=>'Estatus',
                    'choices' => $catalogo_estatus,
                    'attr' => ['class' => '']
                ])

                ->add('responsables',
                    ChoiceType::class, 
                    [
                    'expanded' => false,
                    'multiple' => false,
                    'label'=> $users,
                    'choices' => $users,
                    ]
                )

                ->add('fecha_inicio', DateType::class,[
                    'label'=>'Fecha inicio',
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                    'attr' => ['class' => '']
                ])

                ->add('fecha_fin', DateType::class,[
                    'label'=>'Fecha fin',
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                    'attr' => ['class' => '']
                ])

                // BOTON DE SUBMIT TEMA
                ->add('submit', SubmitType::class,[
                    'label'=> 'Añadir tema',
                    'attr' => ['class' => 'btn btn-success btn-full-width', 'value' => 'new_tema' ]
                ])

            ->getForm();

        // creacion el formulario update Tema minuta
        $update_tema_form = $this->createFormBuilder()

            ->setMethod('POST')

                ->add('titulo_tema',
                    TextType::class, 
                    [
                    'label'=>'titulo',
                    'data' => $temaMinuta->getTitulo(),
                    'attr' => ['class' => '']
                    ]
                )

                // BOTON DE SUBMIT AUCTUALIZAR TEMA
                ->add('submit', SubmitType::class,[
                    'label'=> 'actualizar',
                    'attr' => ['class' => 'btn btn-success btn-full-width', 'value' => 'update_tema' ]
                ])

            ->getForm();


        // validar envio de formulario 
        $minuta_form->handleRequest($request);
        $tema_form->handleRequest($request);
        $update_tema_form->handleRequest($request);

        if ($minuta_form->isSubmitted()) {

            $form_update = $request->get('form');

            switch ($form_update['submit']) {

                case 'minuta':
                    //echo "minuta";
                    var_dump($form_update['submit']);

                    break;

                case 'new_tema':
                    //echo "tema";

                    // Permite trabajar con entidades y guardadr en la bd
                    $entityManager = $this->getDoctrine()->getManager(); 

                    // crea el objeto y asignarle valores
                    $tema = new TemaMinuta();
                    $tema->setTitulo($form_update['titulo']);
                    $tema->setCompromisoInicio($form_update['fecha_inicio']);
                    $tema->setCompromisoFin($form_update['fecha_fin']);
                    $tema->setRequerimiento('White');
                    $tema->setLineaGuia('White');
                    $tema->setCompromisoAccion('White');
                    $tema->setCompromiso('White');
                    $tema->setObservacion('White');
                    $tema->setIdEstatus($form_update['estatus']);
                    $tema->setIdReunion($id_minuta);
                    $tema->setIdCategoria($form_update['categoria']);
                    $tema->setUltimoTemaIngresado('White');
                    $tema->setUltimaModificacion('White');
                    $tema->setPadre('White');
                    $tema->setUltimoRoot('White');
                    $tema->setBloque('White');

                    // guardar temporalmemte los datos 
                    $entityManager->persist($tema);

                    // insertar todos los datos en la base de datos
                    $entityManager->flush();

                    return $this->redirect($id_minuta);

                    break;
                
                case 'update_tema':
                    //echo "minuta";
                    var_dump($form_update['submit']);
                    break;

                default:
                    # code...
                    break;
            }

            //dd($form_update);

        }else{

            /* TEMA *******************************************************************/
            if (!empty($tema)) {

                $id_tema = str_replace('@','',strstr($tema, '@'));

                // TEMAS 
                $temaMinuta_repo = $this->getDoctrine()->getRepository(TemaMinuta::class);
                $temaMinuta =  $temaMinuta_repo->findOneBy(['id' => $id_tema, 'id_reunion' => $id_minuta]);

                // ESTATUS TEMA
                $estatusMinuta_repo = $this->getDoctrine()->getRepository(EstatusMinuta::class);
                $EstatusMinutas =  $estatusMinuta_repo->findAll();
                $estatusMinuta =  $estatusMinuta_repo->find($minuta->getEstatus());
                
                return $this->render('minuta/tema.html.twig', [
                    'title' => $temaMinuta->getTitulo(),
                    'TemasMinutas' => $temasMinutas,
                    'EstatusMinuta' => $EstatusMinutas
                ]);

                
                exit();
            }

            /***********************************************************************/

            // vista
            return $this->render('minuta/minuta.html.twig', [
                'title' => 'Actualizar minuta del día: ',
                'fecha_minuta' => $fecha_minuta,
                'usuarios'=> $usuarios,
                'TemasMinutas' => $temasMinutas,
                'CatalogoEstatus' => $estatusMinutas,
                'CatalgoCategorias' => $Categorias_all,
                'form'=> $minuta_form->createView(),
                'form_tema'=> $tema_form->createView(),
                'form_tema_update'=> $update_tema_form->createView()
            ]);

            
        }   

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
        $fecha_minuta = str_replace(' 08:00:00', '', $minuta->getFechaInicio());

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
            'title' => 'Minuta correspondiente a la junta del: ',
            'fecha_minuta' => $fecha_minuta,
            'MinutaDetalle' => $minuta_detalle
        ]);
    }


}
