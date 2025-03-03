<?php

namespace App\Entity;

use App\Repository\AffectationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AffectationRepository::class)]
class Affectation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $id_ouvrier = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $id_chantier = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_affectation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdOuvrier(): ?string
    {
        return $this->id_ouvrier;
    }

    public function setIdOuvrier(?string $id_ouvrier): static
    {
        $this->id_ouvrier = $id_ouvrier;

        return $this;
    }

    public function getIdChantier(): ?string
    {
        return $this->id_chantier;
    }

    public function setIdChantier(?string $id_chantier): static
    {
        $this->id_chantier = $id_chantier;

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
