<?php

namespace App\Tests\Entity;

use App\Entity\Affectation;
use App\Entity\Equipe;
use App\Entity\Chantier;
use PHPUnit\Framework\TestCase;

class AffectationTest extends TestCase
{
    public function testAffectationCreation(): void
    {
        $affectation = new Affectation();
        $equipe = new Equipe();
        $chantier = new Chantier();

        $dateDebut = new \DateTime('2025-01-01');
        $dateFin = new \DateTime('2025-06-01');
        $nom = "Affectation Test";

        $affectation->setEquipe($equipe);
        $affectation->setChantier($chantier);
        $affectation->setDateDebut($dateDebut);
        $affectation->setDateFin($dateFin);
        $affectation->setNom($nom);

        // Vérifications
        $this->assertSame($equipe, $affectation->getEquipe());
        $this->assertSame($chantier, $affectation->getChantier());
        $this->assertSame($dateDebut, $affectation->getDateDebut());
        $this->assertSame($dateFin, $affectation->getDateFin());
        $this->assertSame($nom, $affectation->getNom());
    }
}