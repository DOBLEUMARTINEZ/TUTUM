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

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home") 
     */
    public function index(Request $request): Response
    {

        // id minuta default
        $minuta_repo = $this->getDoctrine()->getRepository(Minuta::class);
        $minuta =  $minuta_repo->findOneBy([],['id' => 'desc']);
        $id_minuta = $minuta->getId();

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
            //var_dump($request->get('form'));
            $form_dates = $request->get('form');
            $date = $form_dates['date_serch'];
            //echo  "la fecha inicial es: ".$date;
            $id_minuta_date = $this->getDoctrine()->getRepository(Minuta::class);
            $id_minutas =  $id_minuta_date->findOneBy(['fecha_inicio' => $date.' 08:00:00' ]);
            //var_dump($id_tema_minuta);
            if (!empty($id_minutas)) {
                $id_minuta = $id_minutas->getId();
                //echo "yes";
            }else{
                //echo "none";
                //echo $id_minuta;
            }
        }

        //echo $id_minuta;

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


        // vista
        return $this->render('home/index.html.twig', [
            'title' => 'Minuta correspondiente a reunión del día: ',
            'fecha_minuta' => str_replace(' 08:00:00', '', $minuta->getFechaInicio()) ,
            'MinutaDetalle' => $minuta_detalle,
            'form'=> $form_date->createView()
        ]);

    }

    public function login(Request $request)
    {
        // formulario de login
        $form = $this->createFormBuilder()
            //->setAction($this->generateUrl('validar_usurio'))
             ->setMethod('POST')
                ->add('usuario', TextType::class,[
                    'label'=>'Usuario',
                    'attr'=> ['placeholder'=>'exaple@prodemex.com.mx']
                ])

                ->add('password', PasswordType::class,[
                    'label'=>'Contraseña',
                    'attr'=> ['placeholder'=>'Contraseña']
                ])

                ->add('submit', SubmitType::class,[
                    'label'=>'Aceptar'
                ])

            ->getForm();

        // validar usuario y envio de formulario 
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $form = $request->get('form');

            $user = $form['usuario'];
            $password = $form['password'];

            // busqueda de usuario 
            $usuario_f = $this->getDoctrine()->getRepository(Usuario::class);
            $usuario =  $usuario_f->findOneBy(['user' => $user, 'password' => $password]);

            if (!empty($usuario)) {
                echo "yes";
                return $this->redirectToRoute('index');

            }else{
                echo "no";
                return $this->redirectToRoute('login');
            }
            
        }

        return $this->render('home/login.html.twig', [
            'title' => 'login',
            'form'=> $form->createView()
        ]);   
    }

} 
