<?php
namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Ouvrier;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class OuvrierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_ouvrier') // champ pour nom_ouvrier
            ->add('competance')
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'Maçon' => 'Maçon',
                    'Coffreur' => 'Coffreur',
                    'Ferrailleur' => 'Ferrailleur',
                    'Terrassier' => 'Terrassier',
                    'Conducteur d’engins' => 'Conducteur d’engins',
                    'Manœuvre de chantier' => 'Manœuvre de chantier',
                    'Grutier' => 'Grutier',
                    'Plombier' => 'Plombier',
                    'Électricien' => 'Électricien',
                    'Peintre en bâtiment' => 'Peintre en bâtiment',
                    'Plâtrier' => 'Plâtrier',
                    'Carreleur' => 'Carreleur',
                    'Menuisier' => 'Menuisier',
                    'Parqueteur' => 'Parqueteur',
                    'Serrurier-métallier' => 'Serrurier-métallier',
                    'Chauffagiste' => 'Chauffagiste',
                    'Enduiseur' => 'Enduiseur',
                    'Vitrificateur' => 'Vitrificateur',
                    'Solier-moquettiste' => 'Solier-moquettiste',
                    'Staffeur-Ornemaniste' => 'Staffeur-Ornemaniste',
                    'Chef d’équipe' => 'Chef d’équipe',
                ],
                'attr' => ['class' => 'form-control'],
                'placeholder' => 'Choisissez un rôle',
            ])
            ->add('planning')
            ->add('equipe', EntityType::class, [
                'class' => Equipe::class,
                'choice_label' => 'id',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ouvrier::class,
        ]);
    }
}

