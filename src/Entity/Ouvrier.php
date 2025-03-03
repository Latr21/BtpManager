<?php

namespace App\Entity;

use App\Repository\OuvrierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OuvrierRepository::class)]
class Ouvrier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nom_ouvrier = null;

    #[ORM\Column(length: 100)]
    private ?string $competance = null;

    #[ORM\Column(length: 100)]
    private ?string $role = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $planning = null;

    #[ORM\Column(nullable: true)]
    private ?bool $disponibilite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $id_equipe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomOuvrier(): ?string
    {
        return $this->nom_ouvrier;
    }

    public function setNomOuvrier(string $nom_ouvrier): static
    {
        $this->nom_ouvrier = $nom_ouvrier;

        return $this;
    }

    public function getCompetance(): ?string
    {
        return $this->competance;
    }

    public function setCompetance(string $competance): static
    {
        $this->competance = $competance;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getPlanning(): ?string
    {
        return $this->planning;
    }

    public function setPlanning(?string $planning): static
    {
        $this->planning = $planning;

        return $this;
    }

    public function isDisponibilite(): ?bool
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(?bool $disponibilite): static
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getIdEquipe(): ?string
    {
        return $this->id_equipe;
    }

    public function setIdEquipe(?string $id_equipe): static
    {
        $this->id_equipe = $id_equipe;

        return $this;
    }
}
