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


class SeccionMinutaType extends AbstractType
{

    public function buildForm(FormBuilderInterface $buider, array $data)
    {

      // TRAER DATOS
      $nombre = $data['data'];

      // VALIDAR SI ES NULLO 
      if ($nombre->getNombre()!= null) {
            $nombre = $nombre->getNombre();
      }else{
            $nombre = "";
      }
      
      // CONTRUCCION DE FORMULARIO
      $buider->add('nombre', TextType::class, [
                  'label'=>'Sección',
                  'data' => $nombre,
                  'attr' => ['class' => '']
            ])

            ->add('submit', SubmitType::class,[
                  'label'=> 'ACEPTAR',
                  'attr' => ['class' => 'btn btn-success btn-full-width', 'value' => 'seccion' ]
            ])

            ->getForm();
    }
    
}


?>