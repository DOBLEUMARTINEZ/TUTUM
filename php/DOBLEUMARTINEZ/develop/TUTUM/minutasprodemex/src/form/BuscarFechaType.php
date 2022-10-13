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




class BuscarFechaType extends AbstractType 
{

    public function buildForm(FormBuilderInterface $buider, array $data)
    {
      
      $buider->add('date_serch', DateType::class,[
                    'label'=>'Búsqueda por fecha: ',
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                ])

                ->add('submit', SubmitType::class,[
                    'label'=>'BUSCAR'
                ])

            ->getForm();
    }
    
}


?>