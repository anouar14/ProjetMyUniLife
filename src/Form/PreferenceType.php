<?php

namespace App\Form;

use App\Entity\Preference;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
class PreferenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('typePr')
            ->add('disponibiliteAC', DateTimeType::class, [
                'widget' => 'single_text',
                'data' => new \DateTime('now'),  // Par défaut, la date et l'heure actuelles
                'required' => false, // Permet à la valeur d'être nulle
                'constraints' => [
                    new GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => "La date et l'heure ne peuvent pas être dans le passé."
                    ])
                    ]
                ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Preference::class,
        ]);
    }
}
