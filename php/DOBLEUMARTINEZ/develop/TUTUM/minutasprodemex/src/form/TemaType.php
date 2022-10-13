<?php

namespace App\form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class TemaType extends AbstractType
{

    public function buildForm(FormBuilderInterface $buider, array $data)
    {

      // RECUPERANDO DATOS
            $data = $data['data'];
            $tema = $data['tema'];

      //TEMA 
            if ($tema->getIdCategoria()==null) {
                  $tema_categoria = 1;
            }else{
                  $tema_categoria = $tema->getIdCategoria()->getId();
            }

      //USUARIOS
            $usuarios = $data['usuarios'];
            foreach ($usuarios as $key => $value) {
                  $usuarios_cat[$value->getNombre()." ".$value->getApellido()] = $value->getId();
            }

      // MINUTAS
            $minutas = $data['minutas'];
            foreach ($minutas as $key => $value) {
                  $minutas_cat[$value->getId().' | '.$value->getObjetivo()] = $value->getId();
            }

            if ($tema->getIdReunion()==null) {
                  $tema_reunion = 0;
            }else{
                  if ($tema->getIdCategoria() != null ) {
                       $tema_reunion = $tema->getIdReunion()->getId();
                  }else{
                        $tema_reunion = 0;
                  }     
            }

      // ESTATUS
            $estatus = $data['estatus'];
            foreach ($estatus as $key => $value) {
                $estatus_cat[$value->getNombre()] = $value->getId();
            }

            if ($tema->getIdEstatus()==null) {
                  $tema_estatus = 0;
            }else{
                  $tema_estatus = $tema->getIdEstatus()->getId();
            }

      //CATEGORIA
            $categorias = $data['categorias'];
            foreach ($categorias as $key => $value) {
                $categorias_cat[$value->getNombre()] = $value->getId();
            }

      //SECCIONES DE MINUTA
            $secciones = $data['secciones'];
            foreach ($secciones as $key => $value) {
                $secciones_cat[$value->getNombre()] = $value->getId();
            }

      // VALIDANDO VALORES NULL EN TEXTAREA
            if ($data['formulario'] != 'new') {
                  $requerimiento= $tema->getRequerimiento();
                  $lineamientos = $tema->getLineaGuia();
                  $acciones = $tema->getCompromisoAccion();
                  $acuerdos = $tema->getCompromiso();
                  $comentarios = $tema->getObservacion();
            }else{
                  $requerimiento    = '';
                  $lineamientos     = '';
                  $acciones         = '';
                  $acuerdos         = '';
                  $comentarios      = ''; 
            }

      // VALIDANDO TITULO
            if ($tema->getTitulo()!=null) {
                  $titulo = $tema->getTitulo();
            }else{
                  $titulo = 'Principales acuerdos de la reunión';
            }  
            
      $buider->add('titulo', TextType::class, [
            'label'=>'Titulo',
            'data' => $titulo,
            'attr' => ['class' => ''],
            'required' => false,
            ])

            ->add('compromiso_inicio', DateTimeType::class, [
            'label'=>'Compromiso inicio',
            'data' => $tema->getCompromisoInicio(),
            'widget' => 'single_text',
            'required' => false,
            ])

            ->add('compromiso_fin', DateTimeType::class, [
            'label'=>'compromiso fin',
            'data' => $tema->getCompromisoFin(),
            'widget' => 'single_text',
            'required' => false,
            ])

            ->add('requerimiento', TextareaType::class, [
            'label'=>'requerimiento',
            'data' => $requerimiento,
            'attr' => ['class' => ''],
            'required' => false,
            ])

            ->add('linea_guia', TextareaType::class, [
            'label'=>'linea guia',
            'data' => $lineamientos,
            'attr' => ['class' => ''],
            'required' => false,
            ])

            ->add('compromiso_accion', TextareaType::class, [
            'label'=>'compromiso accion',
            'data' => $acciones,
            'attr' => ['class' => ''],
            'required' => false,
            ])

            ->add('compromiso', TextareaType::class, [
            'label'=>'compromiso',
            'data' => $acuerdos,
            'attr' => ['class' => ''],
            'required' => false,
            ])

            ->add('observacion', TextareaType::class, [
            'label'=>'observacion',
            'data' => $comentarios,
            'attr' => ['class' => ''],
            'required' => false,
            ])

            ->add('id_estatus', ChoiceType::class, [
            'label'=>'Estatus',
            'data' => $tema_estatus,
            'choices' => $estatus_cat,
            'required' => false,
            ])

            ->add('seccion', ChoiceType::class, [
            'label'=>'Seccion minuta',
            'data' => $tema->getBloque(),
            'choices' => $secciones_cat
            ])

            ->add('id_reunion', ChoiceType::class, [
            'label'=>'id reunion',
            'data' => $tema_reunion,
            'choices' => $minutas_cat,
            'attr' => ['class' => '']
            ])

            ->add('id_categoria', ChoiceType::class, [
            'label'=>'id categoria',
            'data' => $tema_categoria,
            'choices' => $categorias_cat,
            'required' => false,
            ])

            ->add('usuario', ChoiceType::class, [
            'label' => 'usuarios',
            'choices' => $usuarios_cat,
            'expanded' => true,
            'multiple' => true,
            'required' => true,
            'attr'=> ['class' => 'responsables'],
            'required' => false,
            ])

            // BOTON DE SUBMIT 
            ->add('submit', SubmitType::class,[
              'label'=> 'ACEPTAR',
              'attr' => ['class' => 'btn btn-success btn-full-width', 'value' => 'tema' ]
            ]);
    }
    
}


?>