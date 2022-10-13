<?php

namespace App\form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

// EXTESION FORM
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class LoginType extends AbstractType
{

      public function buildForm(FormBuilderInterface $buider, array $data)
      {
           
            // CONTRUCCION DE FORMULARIO
            $buider->add('usuario', TextType::class,[
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
      }
    
}

?>