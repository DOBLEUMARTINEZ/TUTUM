<?php

namespace App\form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;




class BuscarTemaType extends AbstractType 
{

    public function buildForm(FormBuilderInterface $buider, array $data)
    {

        $buider->add('titulo', TextType::class,[
                    'label'=>'Búsqueda por titulo: ',
                    'required'=> false
                ])

                ->add('submit', SubmitType::class,[
                    'label'=>'BUSCAR'
                ])

        ->getForm();
    }
    
}


?>