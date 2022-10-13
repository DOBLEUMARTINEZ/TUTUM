<?php

namespace App\form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class MinutaType extends AbstractType 
{
  public function buildForm(FormBuilderInterface $buider, array $data)
    {
      
      $minuta_data = $data['data'];
      $minuta = $minuta_data['minuta'];
      $temas_data = $minuta_data['temas'];

      // ULTIMOS TEMAS VISTOS
      foreach ($temas_data as $key => $value) {
        $temas[$value->getTitulo()] = $value->getId();
      }

      // USUARIOS
        $usuarios = $minuta_data['usuarios'];
        foreach ($usuarios as $key => $value) {
          $asistentes[$value->getNombre()." ".$value->getApellido()] = $value->getId();
        }

      //VALIDANDO VALORES NULL TEXTAREA
      if ($minuta->getItinerario()==null) {
        $itinerario = '';
      }else{
        $itinerario = $minuta->getItinerario();
      }

      $buider->add('objetivo', TextType::class, [
            'label'=>'Objetivo',
            'data' => 'Propuesta y solución a temas relacionados con Construcción y Áreas Transversales',
            'attr' => ['class' => '']
            ])

            ->add('fecha_inicio', DateTimeType::class, [
              'date_label' => 'Fecha inicio',
              'data' => $minuta->getFechaInicio(),
              'widget' => 'single_text'
            ])

            ->add('fecha_fin', DateTimeType::class,[
              'label'=> 'Fecha fin',
              'data' => $minuta->getFechaFin(),
              'widget' => 'single_text'
            ])

            ->add('proxima_reunion', DateTimeType::class,[
              'label'=> 'Proxima reunion',
              'data' => $minuta->getProximaReunion(),
              'widget' => 'single_text'
            ])

            ->add('itinerario', TextareaType::class, [
            'label'=>'Itinerario',
            'data' => $itinerario,
            'required' => false,
            'attr' => ['class' => '']
            ])

            ->add('asistentes', ChoiceType::class, [
            'label' => 'Asistentes',
            'choices' => $asistentes,
            'expanded' => true,
            'multiple' => true,
            'required' => true,
            'attr'=> ['class' => 'responsables']
            ])

            ->add('Temas_minuta', ChoiceType::class, [
            'label' => 'Temas - minuta',
            'choices' => $temas,
            'expanded' => true,
            'multiple' => true,
            'required' => true,
            'attr'=> ['class' => '']
            ])

            // BOTON DE SUBMIT AUCTUALIZAR TEMA
            ->add('submit', SubmitType::class,[
              'label'=> 'Aceptar',
              'attr' => ['class' => 'btn btn-success btn-full-width', 'value' => 'minuta' ]
            ]);
    }
    
}


?>