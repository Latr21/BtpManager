<?php

namespace App\Entity;

use App\Repository\EquipeRepository;
use Doctrine\DBAL\Types\Types;
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

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $planning_equipe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $id_chef_equipe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEquipe(): ?string
    {
        return $this->nom_equipe;
    }

    public function setNomEquipe(string $nom_equipe): static
    {
        $this->nom_equipe = $nom_equipe;

        return $this;
    }

    public function getCompetanceEquipe(): ?string
    {
        return $this->competance_equipe;
    }

    public function setCompetanceEquipe(string $competance_equipe): static
    {
        $this->competance_equipe = $competance_equipe;

        return $this;
    }

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(int $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getPlanningEquipe(): ?string
    {
        return $this->planning_equipe;
    }

    public function setPlanningEquipe(?string $planning_equipe): static
    {
        $this->planning_equipe = $planning_equipe;

        return $this;
    }

    public function getIdChefEquipe(): ?string
    {
        return $this->id_chef_equipe;
    }

    public function setIdChefEquipe(?string $id_chef_equipe): static
    {
        $this->id_chef_equipe = $id_chef_equipe;

        return $this;
    }
}
