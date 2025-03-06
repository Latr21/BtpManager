<?php

namespace App\Tests\Entity;

use App\Entity\Chantier;
use App\Entity\Ouvrier;
use App\Entity\Affectation;
use PHPUnit\Framework\TestCase;

class ChantierTest extends TestCase
{
    public function testChantierSettersAndGetters(): void
    {
        $chantier = new Chantier();

        $chantier->setNom('Chantier A');
        $chantier->setChantierPrerequis('Niveau 1 requis');
        $chantier->setEffectifRequis(10);
        $chantier->setDateDebut(new \DateTime('2025-04-01'));
        $chantier->setDateFin(new \DateTime('2025-06-01'));
        $chantier->setImage('image.jpg');

        $ouvrier = new Ouvrier();
        $chantier->setChefChantier($ouvrier);

        $this->assertEquals('Chantier A', $chantier->getNom());
        $this->assertEquals('Niveau 1 requis', $chantier->getChantierPrerequis());
        $this->assertEquals(10, $chantier->getEffectifRequis());
        $this->assertEquals(new \DateTime('2025-04-01'), $chantier->getDateDebut());
        $this->assertEquals(new \DateTime('2025-06-01'), $chantier->getDateFin());
        $this->assertEquals('image.jpg', $chantier->getImage());
        $this->assertSame($ouvrier, $chantier->getChefChantier());
    }

    public function testAddAndRemoveAffectation(): void
    {
        $chantier = new Chantier();
        $affectation = new Affectation();

        $chantier->addAffectation($affectation);

        $this->assertCount(1, $chantier->getAffectations());
        $this->assertSame($chantier, $affectation->getChantier());

        $chantier->removeAffectation($affectation);

        $this->assertCount(0, $chantier->getAffectations());
        $this->assertNull($affectation->getChantier());
    }
}