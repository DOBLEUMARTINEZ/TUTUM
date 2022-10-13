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


class CategoriaType extends AbstractType
{

      public function buildForm(FormBuilderInterface $buider, array $data)
      {

            // TRAER DATOS
            $categoria = $data['data'];
            $secciones_cat = $categoria['secciones_cat'];

            // VALIDAR SI ES NULLO 
            if ($categoria['categoria']->getId() != null) {
                  $nombre = $categoria['categoria']->getNombre();
                  $seccion = $categoria['categoria']->getSeccion()->getId();
                  $orden = $categoria['categoria']->getOrdenCategoria();
                  $color = $categoria['categoria']->getColor();
            }else{
                  $nombre = "";
                  $seccion = 1;
                  $orden = 1;
                  $color = "#fff";
            }
            
            // CONTRUCCION DE FORMULARIO
            $buider->add('nombre', TextType::class, [
                        'label'=>'Categoria',
                        'data' => $nombre,
                        'attr' => ['class' => '']
                  ])

                  ->add('seccion', ChoiceType::class, [
                        'label'=>'Sección',
                        'data' => $seccion,
                        'choices' => $secciones_cat,
                        'attr' => ['class' => '' ]
                  ])

                  ->add('orden_categoria', TextType::class, [
                        'label'=>'Orden categoria',
                        'data' => $orden,
                        'attr' => ['class' => '']
                  ])

                  ->add('color', TextType::class, [
                        'label'=>'Color',
                        'data' => $color,
                        'attr' => ['class' => '']
                  ])

                  ->add('submit', SubmitType::class,[
                        'label'=> 'ACEPTAR',
                        'attr' => ['class' => 'btn btn-success btn-full-width', 'value' => 'categoria' ]
                  ])

            ->getForm();
      }
    
}

?>