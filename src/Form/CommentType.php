<?php

namespace App\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $options['user'];

        $builder
            ->add(
                'title',
                TextType::class,
                [
                'label' => 'titre'
                ]
            )
            ->add(
                'comment',
                TextareaType::class,
                [
                'label' => 'commentaire'
                ]
            )

            ->add(
                'note',
                ChoiceType::class,
                [
                'choices' => [
                    '0' => 0,
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                ],
                ]
            )
            
            ->add(
                'submit',
                SubmitType::class,
                [
                'label' => 'Valider ma commande',
                'attr' => [
                    'class' => 'btn btn-success btn-block'
                ]
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
            'user' => array()
            ]
        );
    }
}
