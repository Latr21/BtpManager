<?php

namespace App\Entity;

use App\Repository\ChantierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChantierRepository::class)]
class Chantier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $chantier_prerequis = null;

    #[ORM\Column]
    private ?int $effectif_requis = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_debut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_fin = null;

    #[ORM\ManyToOne(targetEntity: Ouvrier::class)]
    #[ORM\JoinColumn(onDelete: "SET NULL")]
    private ?Ouvrier $chef_chantier = null;

    #[ORM\ManyToOne(targetEntity: Equipe::class, inversedBy: "chantiers")]
    #[ORM\JoinColumn(onDelete: "SET NULL")]
    private ?Equipe $equipe = null;

    #[ORM\OneToMany(mappedBy: 'chantier', targetEntity: Affectation::class, orphanRemoval: true)]
    private Collection $affectations;

    public function __construct() { $this->affectations = new ArrayCollection(); }

    public function getId(): ?int { return $this->id; }
    public function getNom(): ?string { return $this->nom; }
    public function setNom(string $nom): static { $this->nom = $nom; return $this; }
}