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




class ResetPasswordType extends AbstractType 
{

    public function buildForm(FormBuilderInterface $buider, array $data)
    {

      // RECUPERAR DATOS
      $usuario = $data['data'];


      // CONTRUCCION DE FORMULARIO
      $buider->add('password', TextType::class, [
              'label'=>'Agrega una nueva contraseña',
              'attr' => ['class' => '']
            ])

            // BOTON DE SUBMIT AUCTUALIZAR TEMA
            ->add('submit', SubmitType::class,[
              'label'=> 'Aceptar',
              'attr' => ['class' => 'btn btn-success btn-full-width', 'value' => 'new_password' ]
            ]);
    }
    
}


?>