<?php

namespace App\Entity;

use App\Repository\EquipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $planning_equipe = null;

    #[ORM\ManyToOne(targetEntity: Ouvrier::class)]
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

    public function getChefEquipe(): ?Ouvrier
    {
        return $this->chef_equipe;
    }

    public function setChefEquipe(?Ouvrier $chef_equipe): static
    {
        $this->chef_equipe = $chef_equipe;

        return $this;
    }

    /**
     * @return Collection<int, Ouvrier>
     */
    public function getOuvriers(): Collection
    {
        return $this->ouvriers;
    }

    public function addOuvrier(Ouvrier $ouvrier): static
    {
        if (!$this->ouvriers->contains($ouvrier)) {
            $this->ouvriers->add($ouvrier);
            $ouvrier->setEquipe($this);
        }

        return $this;
    }

    public function removeOuvrier(Ouvrier $ouvrier): static
    {
        if ($this->ouvriers->removeElement($ouvrier)) {
            // set the owning side to null (unless already changed)
            if ($ouvrier->getEquipe() === $this) {
                $ouvrier->setEquipe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Chantier>
     */
    public function getChantiers(): Collection
    {
        return $this->chantiers;
    }

    public function addChantier(Chantier $chantier): static
    {
        if (!$this->chantiers->contains($chantier)) {
            $this->chantiers->add($chantier);
            $chantier->setEquipe($this);
        }

        return $this;
    }

    public function removeChantier(Chantier $chantier): static
    {
        if ($this->chantiers->removeElement($chantier)) {
            // set the owning side to null (unless already changed)
            if ($chantier->getEquipe() === $this) {
                $chantier->setEquipe(null);
            }
        }

        return $this;
    }
}