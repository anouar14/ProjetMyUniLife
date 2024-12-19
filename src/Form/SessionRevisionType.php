<?php

namespace App\Form;

use App\Entity\Matiere;
use App\Entity\Sessionrevision;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class SessionRevisionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateDebut', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Date de début',
                'required' => true,
            ])
            ->add('dureeAllouee', IntegerType::class, [
                'label' => 'Durée allouée (Heur)',
                'required' => true,
            ])
            ->add('dureeReelle', IntegerType::class, [
                'label' => 'Durée réelle (Heur)',
                'required' => false,
            ])
            ->add('objectifAtteint', CheckboxType::class, [
                'label' => 'Objectif atteint',
                'required' => false,
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'nom', // Affiche le nom de l'utilisateur
                'label' => 'Utilisateur associé',
                'placeholder' => 'Sélectionnez un utilisateur',
            ])
            ->add('matiere', EntityType::class, [
                'class' => Matiere::class,
                'choice_label' => 'nom', // Affiche le nom de la matière
                'label' => 'Matière associée',
                'placeholder' => 'Sélectionnez une matière',
            ])
            ->add('type', TextType::class, [
                'label' => 'Type de ressource',
                'required' => true,
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sessionrevision::class,
        ]);
    }
}
