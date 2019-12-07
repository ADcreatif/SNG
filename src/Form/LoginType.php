<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label' => 'username.label',
                'required' => true,
                'translation_domain' => 'messages',
            ])
            ->add('password', PasswordType::class, [
                'required' => true,
                "label" =>"password.label",
                'translation_domain' => 'messages'
            ])
            ->add('login', SubmitType::class,[
                'label' => 'login.submit.label',
                "translation_domain" => "messages",
                'attr' => [
                    'class' => 'btn btn-success float-right'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
