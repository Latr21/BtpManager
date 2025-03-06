<?php

namespace App\Tests\Controller;

use App\Entity\Equipe;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EquipeControllerTest extends WebTestCase
{
    public function testCreateEquipe()
    {
        // Créer un client pour effectuer des requêtes HTTP
        $client = static::createClient();

        // Accéder à la page de création d'équipe (GET)
        $crawler = $client->request('GET', '/equipe/new');

        // Vérifier que la page de création d'équipe a bien été chargée
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Create new Equipe');

        // Soumettre le formulaire de création d'équipe avec des données valides
        $form = $crawler->selectButton('Save')->form([
            'equipe[nom_equipe]' => 'Equipe Test',
            'equipe[competance_equipe]' => 'Compétence Test',
            'equipe[nombre]' => 5,
            'equipe[chef_equipe]' => 1,
        ]);

        // Soumettre le formulaire
        $client->submit($form);


        // Suivre la redirection
        $client->followRedirect();

    }
}
