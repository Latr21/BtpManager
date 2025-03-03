<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Ouvrier;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;

class EquipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_equipe')
            ->add('competance_equipe')
            ->add('ouvriers', EntityType::class, [
                'class' => Ouvrier::class,
                'choice_label' => 'nom_ouvrier',  
                'multiple' => true,               
                'expanded' => true,               
            ])
            ->add('chef_equipe', EntityType::class, [
                'class' => Ouvrier::class,
                'choice_label' => 'nom_ouvrier',  
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('o')
                        ->where('o.role = :role')
                        ->setParameter('role', 'Chef');
                },
                'placeholder' => 'Sélectionnez un chef d\'équipe',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipe::class,
        ]);
    }
}
