<?php

namespace App\Tests\Entity;

use App\Entity\Ouvrier;
use App\Entity\Equipe;
use App\Entity\Affectation;
use PHPUnit\Framework\TestCase;

class OuvrierTest extends TestCase
{
    public function testOuvrierCreation(): void
    {
        $ouvrier = new Ouvrier();
        $ouvrier->setNomOuvrier("Jean Dupont");
        $ouvrier->setCompetences(["Maçonnerie", "Peinture"]);
        $ouvrier->setRole("Chef d'équipe");

        $this->assertSame("Jean Dupont", $ouvrier->getNomOuvrier());
        $this->assertSame(["Maçonnerie", "Peinture"], $ouvrier->getCompetences());
        $this->assertSame("Chef d'équipe", $ouvrier->getRole());
    }

    public function testEquipeAssignment(): void
    {
        $ouvrier = new Ouvrier();
        $equipe = new Equipe();

        $ouvrier->setEquipe($equipe);
        $this->assertSame($equipe, $ouvrier->getEquipe());
    }

    public function testAddAndRemoveAffectation(): void
    {
        $ouvrier = new Ouvrier();
        $affectation = new Affectation();

        $ouvrier->addAffectation($affectation);
        $this->assertCount(1, $ouvrier->getAffectations());
        $this->assertSame($ouvrier, $affectation->getOuvrier());

        $ouvrier->removeAffectation($affectation);
        $this->assertCount(0, $ouvrier->getAffectations());
        $this->assertNull($affectation->getOuvrier());
    }
}