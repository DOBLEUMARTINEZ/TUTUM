<?php

namespace App\form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class FirmaMinutaType extends AbstractType
{

      public function buildForm(FormBuilderInterface $buider, array $data)
      {
            // TRAER DATOS
            $firmaminuta = $data['data'];

            // VALIDAR SI ES NULLO 
            if ($firmaminuta->getId() != null) {
                  $opcion = $firmaminuta->getOpcion();
                  $respuesta = $firmaminuta->getRespuesta();
            }else{
                  $opcion = '';
                  $respuesta = '';
            }
            
            // CONTRUCCION DE FORMULARIO
            $buider->add('opcion', TextType::class, [
                            'label'=>'Opción',
                            'data' => $opcion,
                            'attr' => ['class' => '']
                        ])
                        ->add('respuesta', TextType::class, [
                            'label'=>'Respuesta',
                            'data' => $respuesta,
                            'attr' => ['class' => '']
                        ])
                        ->add('submit', SubmitType::class,[
                          'label'=> 'ACEPTAR',
                          'attr' => ['class' => 'btn btn-success btn-full-width', 'value' => 'estatusfirma' ]
                        ])
                    ->getForm();
      }
    
}

?>