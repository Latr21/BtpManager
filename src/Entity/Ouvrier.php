<?php

namespace App\Entity;

use App\Repository\OuvrierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\ManyToOne(targetEntity: Equipe::class, inversedBy: "ouvriers")]
    #[ORM\JoinColumn(onDelete: "SET NULL")]
    private ?Equipe $equipe = null;

    #[ORM\OneToMany(mappedBy: 'ouvrier', targetEntity: Affectation::class, orphanRemoval: true)]
    private Collection $affectations;

    public function __construct()
    {
        $this->affectations = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }
    public function getNomOuvrier(): ?string { return $this->nom_ouvrier; }

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

    public function getEquipe(): ?Equipe
    {
        return $this->equipe;
    }

    public function setEquipe(?Equipe $equipe): static
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * @return Collection<int, Affectation>
     */
    public function getAffectations(): Collection
    {
        return $this->affectations;
    }

    public function addAffectation(Affectation $affectation): static
    {
        if (!$this->affectations->contains($affectation)) {
            $this->affectations->add($affectation);
            $affectation->setOuvrier($this);
        }

        return $this;
    }

    public function removeAffectation(Affectation $affectation): static
    {
        if ($this->affectations->removeElement($affectation)) {
            // set the owning side to null (unless already changed)
            if ($affectation->getOuvrier() === $this) {
                $affectation->setOuvrier(null);
            }
        }

        return $this;
    }
}