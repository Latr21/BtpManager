<?php

namespace App\Form;

use App\Entity\Affectation;
use App\Entity\Chantier;
use App\Entity\Ouvrier;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AffectationType extends AbstractType
{
// Dans votre formulaire AffectationType
public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('date_affectation', null, [
            'widget' => 'single_text',
        ])
        ->add('chantier', EntityType::class, [
            'class' => Chantier::class,
            'choice_label' => 'nom',  // Assurez-vous de choisir un attribut qui représente bien le nom du chantier
        ])
        ->add('equipe', EntityType::class, [
            'class' => Equipe::class,
            'choice_label' => 'nomEquipe', // Remplacer par le nom de l'attribut de l'Equipe que vous souhaitez afficher
        ]);
}


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Affectation::class,
        ]);
    }
}
