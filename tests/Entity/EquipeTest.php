<?php

namespace App\Tests\Entity;

use App\Entity\Equipe;
use App\Entity\Ouvrier;
use App\Entity\Chantier;
use PHPUnit\Framework\TestCase;

class EquipeTest extends TestCase
{
    public function testEquipeSettersAndGetters(): void
    {
        $equipe = new Equipe();

        $equipe->setNomEquipe('Equipe Alpha');
        $equipe->setCompetanceEquipe('Maçonnerie');
        $equipe->setNombre(5);

        $ouvrier = new Ouvrier();
        $equipe->setChefEquipe($ouvrier);

        $this->assertEquals('Equipe Alpha', $equipe->getNomEquipe());
        $this->assertEquals('Maçonnerie', $equipe->getCompetanceEquipe());
        $this->assertEquals(5, $equipe->getNombre());
        $this->assertSame($ouvrier, $equipe->getChefEquipe());
    }

    public function testAddAndRemoveOuvrier(): void
    {
        $equipe = new Equipe();
        $ouvrier = new Ouvrier();

        $equipe->addOuvrier($ouvrier);

        $this->assertCount(1, $equipe->getOuvriers());
        $this->assertSame($equipe, $ouvrier->getEquipe());

        $equipe->removeOuvrier($ouvrier);

        $this->assertCount(0, $equipe->getOuvriers());
        $this->assertNull($ouvrier->getEquipe());
    }

    public function testAddAndRemoveChantier(): void
    {
        $equipe = new Equipe();
        $chantier = new Chantier();

        $equipe->addChantier($chantier);

        $this->assertCount(1, $equipe->getChantiers());
        $this->assertSame($equipe, $chantier->getEquipe());

        $equipe->removeChantier($chantier);

        $this->assertCount(0, $equipe->getChantiers());
        $this->assertNull($chantier->getEquipe());
    }
}