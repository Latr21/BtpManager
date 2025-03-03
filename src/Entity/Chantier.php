<?php

namespace App\Entity;

use App\Repository\ChantierRepository;
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

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chef_chantier = null;

    #[ORM\Column(length: 255)]
    private ?string $id_equipe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getChantierPrerequis(): ?string
    {
        return $this->chantier_prerequis;
    }

    public function setChantierPrerequis(?string $chantier_prerequis): static
    {
        $this->chantier_prerequis = $chantier_prerequis;

        return $this;
    }

    public function getEffectifRequis(): ?int
    {
        return $this->effectif_requis;
    }

    public function setEffectifRequis(int $effectif_requis): static
    {
        $this->effectif_requis = $effectif_requis;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): static
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): static
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getChefChantier(): ?string
    {
        return $this->chef_chantier;
    }

    public function setChefChantier(?string $chef_chantier): static
    {
        $this->chef_chantier = $chef_chantier;

        return $this;
    }

    public function getIdEquipe(): ?string
    {
        return $this->id_equipe;
    }

    public function setIdEquipe(string $id_equipe): static
    {
        $this->id_equipe = $id_equipe;

        return $this;
    }
}
