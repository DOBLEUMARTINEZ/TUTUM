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




class UsuarioType extends AbstractType 
{

    public function buildForm(FormBuilderInterface $buider, array $data)
    {

      // RECUPERAR DATOS
      $usuario = $data['data'];
      $roles = $usuario['roles'];
      $usuario = $usuario['usuario'];

      // VALIDAR ROL
      if ($usuario->getRol() != null) {
        $rol = $usuario->getRol()->getIdRoles();
      }else{
        $rol = 4;
      }

      // VALIDAR CONTRASEÑA
      if ($usuario->getPassword()!=null) {
        $password = $usuario->getPassword();
      }else{
        $password = 'minutasprodemex2022';
      }

      // CATALOGO DE ROLES
      foreach ($roles as $key => $value) {
        if ($value->getIdRoles()!= 1) {
          $roles_cat[$value->getRol()] = $value->getIdRoles();
        }
      }

      // CONTRUCCION DE FORMULARIO
      $buider->add('nombre', TextType::class, [
            'label'=>'Nombre',
            'data' => $usuario->getNombre(),
            'attr' => ['class' => '']
            ])

            ->add('apellido', TextType::class, [
              'label'=>'Apellido',
              'data' => $usuario->getApellido(),
              'attr' => ['class' => '']
            ])

            ->add('email', TextType::class, [
              'label'=>'Email',
              'data' => $usuario->getEmail(),
              'attr' => ['class' => '']
            ])

            ->add('user', TextType::class, [
              'label'=>'Usuario',
              'data' => $usuario->getUser(),
              'attr' => ['class' => '']
            ])

            ->add('password', TextType::class, [
              'label'=>'Contraseña',
              'data' => $password,
              'attr' => ['class' => '']
            ])

            ->add('area', TextType::class, [
              'label'=>'Area',
              'data' => $usuario->getArea(),
              'attr' => ['class' => '']
            ])

            ->add('rol', ChoiceType::class, [
              'label'=>'Rol',
              'data' => $rol,
              'choices' => $roles_cat,
              'attr' => ['class' => '']
            ])

            ->add('iniciales', TextType::class, [
              'label'=>'Iniciales',
              'data' => $usuario->getIniciales(),
              'attr' => ['class' => '']
            ])

            // BOTON DE SUBMIT AUCTUALIZAR TEMA
            ->add('submit', SubmitType::class,[
              'label'=> 'Aceptar',
              'attr' => ['class' => 'btn btn-success btn-full-width', 'value' => 'user' ]
            ]);
    }
    
}


?>