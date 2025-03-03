<?php

namespace App\Entity;

use App\Repository\EquipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipeRepository::class)]
class Equipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_equipe = null;

    #[ORM\Column(length: 255)]
    private ?string $competance_equipe = null;

    #[ORM\Column]
    private ?int $nombre = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $planning_equipe = null;

    #[ORM\OneToOne(targetEntity: Ouvrier::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?Ouvrier $chef_equipe = null;

    #[ORM\OneToMany(targetEntity: Ouvrier::class, mappedBy: 'equipe')]
    private Collection $ouvriers;

    #[ORM\OneToMany(targetEntity: Chantier::class, mappedBy: 'equipe')]
    private Collection $chantiers;

    public function __construct()
    {
        $this->ouvriers = new ArrayCollection();
        $this->chantiers = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }
    public function getNomEquipe(): ?string { return $this->nom_equipe; }
    public function setNomEquipe(string $nom_equipe): static { $this->nom_equipe = $nom_equipe; return $this; }
}