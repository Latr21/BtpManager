<?php

namespace App\Form;

use App\Entity\Affectation;
use App\Entity\Chantier;
use App\Entity\Equipe;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AffectationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
            'label' => 'Nom affectation',
            'attr' => ['class' => 'form-control']
        ])
            ->add('date_debut', DateType::class, [
                'label' => 'Date de Début',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control']
            ])
            ->add('date_fin', DateType::class, [
                'label' => 'Date de fin',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control']
            ])
            ->add('chantier', EntityType::class, [
                'class' => Chantier::class,
                'choice_label' => 'nom',
                'attr' => ['class' => 'form-control'],
                'disabled' => true,
            ])
            ->add('equipe', EntityType::class, [
                'class' => Equipe::class,
                'choice_label' => function(Equipe $equipe) {
                    return $equipe->getNomEquipe() . ' - ' . "\n" . 'Compétence : ' . $equipe->getCompetanceEquipe() . "\n" . ' - Nombre : ' . $equipe->getNombre();
                },
                'multiple' => false,
                'expanded' => true,
            ])
            
        ;
    }
    

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Affectation::class,
        ]);
    }
}
