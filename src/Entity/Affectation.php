<?php

namespace App\Entity;

use App\Repository\AffectationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Equipe;
use App\Entity\Chantier;

#[ORM\Entity(repositoryClass: AffectationRepository::class)]
class Affectation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Equipe::class, inversedBy: "affectations")]
    #[ORM\JoinColumn(nullable: false, onDelete: "CASCADE")]
    private ?Equipe $equipe = null;

    #[ORM\ManyToOne(targetEntity: Chantier::class, inversedBy: "affectations")]
    #[ORM\JoinColumn(nullable: false, onDelete: "CASCADE")]
    private ?Chantier $chantier = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_affectation = null;

    public function getId(): ?int 
    { 
        return $this->id; 
    }

    public function getEquipe(): ?Equipe 
    { 
        return $this->equipe; 
    }

    public function setEquipe(?Equipe $equipe): static 
    { 
        $this->equipe = $equipe; 
        return $this; 
    }

    public function getChantier(): ?Chantier 
    { 
        return $this->chantier; 
    }

    public function setChantier(?Chantier $chantier): static 
    { 
        $this->chantier = $chantier; 
        return $this; 
    }

    public function getDateAffectation(): ?\DateTimeInterface 
    { 
        return $this->date_affectation; 
    }

    public function setDateAffectation(\DateTimeInterface $date_affectation): static 
    { 
        $this->date_affectation = $date_affectation; 
        return $this; 
    }
}