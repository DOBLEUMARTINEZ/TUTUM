<?php

namespace App\form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

// EXTESION FORM
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class TopicMinutaType extends AbstractType
{

      public function buildForm(FormBuilderInterface $buider, array $data)
      {

            $temas_data = $data['data'];
            foreach ($temas_data as $key => $value) {
              $temas[$value->getTitulo()] = $value->getId();
            }
           
            // CONTRUCCION DE FORMULARIO
            $buider->add('Temas_minuta', ChoiceType::class, [
            'label' => 'Temas - minuta',
            'choices' => $temas,
            'expanded' => true,
            'multiple' => true,
            'required' => true,
            'attr'=> ['class' => 'responsables']
            ])

                ->add('submit', SubmitType::class,[
                    'label'=>'Aceptar'
                ])

            ->getForm();
      }
    
}

?>