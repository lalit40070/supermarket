<?php

namespace App\Form;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('first_name', TextType::class, [
                'attr' => [
                      'placeholder' => 'enter firstname here',
                       'class' => 'custom_class'
                ] 
            ])
            ->add('last_name', TextType::class, [
                'attr' => [
                      'placeholder' => 'enter last tname here',
                ] 
            ])
            ->add('email', TextType::class, [
                'attr' => [
                      'placeholder' => 'enter Email here',                      
                ] 
            ])
            ->add('password', TextType::class, [
                'attr' => [
                      'placeholder' => 'enter password here',
                ] 
            ])
            ->add ('submit', SubmitType:: class, [
                'attr' => [
                'class' => 'btn btn-success'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
