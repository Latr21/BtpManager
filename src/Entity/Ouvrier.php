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
}