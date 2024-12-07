<?php

namespace App\Form;
use Symfony\Component\Validator\Constraints\NotBlank;
use App\Entity\Activite;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Validator\Constraints\Time;


class ActiviteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomAC', TextType::class, [
                'label' => 'Nom de l\'activité',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('dateAC', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'data' => new \DateTime(), // Provides a default value
            ])
            ->add('HeureAC', TimeType::class, [
                'widget' => 'single_text',
                'data' => new \DateTime(), // Provides a default value
            ])
            ->add('typeAC', TextType::class, [
                'label' => 'Type d\'activité',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('typeAC')
            ->add('RappelAC', CollectionType::class, [
                'entry_type' => TextType::class,   // Entry type is TextType, as it's an array of strings
                'entry_options' => ['attr' => ['class' => 'form-control']],
                'allow_add' => true,  // Allows adding new entries dynamically (if needed)
                'allow_delete' => true, // Allows removing entries dynamically (if needed)
                'by_reference' => false, // Ensures the array is updated correctly
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
                'label' => 'Utilisateur',
                'attr' => ['class' => 'form-control'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Activite::class,
        ]);
    }
}
