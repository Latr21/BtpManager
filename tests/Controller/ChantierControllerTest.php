<?php
namespace App\Tests\Controller;

use App\Entity\Chantier;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ChantierControllerTest extends WebTestCase
{
    public function testCreateChantier()
    {
        // Créer un client pour effectuer des requêtes HTTP
        $client = static::createClient();

        // Accéder à la page de création de chantier (GET)
        $crawler = $client->request('GET', '/chantier/new');

        // Vérifier que la page de création de chantier a bien été chargée
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h2', 'Ajouter un Nouveau Chantier');

        // Soumettre le formulaire de création de chantier avec des données valides
        $form = $crawler->selectButton('Créer')->form([
            'chantier[nom]' => 'Chantier Test',
            'chantier[effectif_requis]' => 10,
            'chantier[date_debut]' => (new \DateTime())->format('Y-m-d'),
            'chantier[date_fin]' => (new \DateTime())->add(new \DateInterval('P1D'))->format('Y-m-d'),
        ]);

        // Soumettre le formulaire
        $client->submit($form);

        // Vérifier que la requête a redirigé vers la page d'index des chantiers après la création
        $this->assertResponseRedirects('/chantier/', 302); 

        // Suivre la redirection
        $client->followRedirect();


        // Vérifier que le chantier a bien été ajouté à la base de données
        $entityManager = self::getContainer()->get('doctrine')->getManager();
        $chantierRepository = $entityManager->getRepository(Chantier::class);
        $chantierCreated = $chantierRepository->findOneBy(['nom' => 'Chantier Test']);
        $this->assertNotNull($chantierCreated);
        $this->assertEquals('Chantier Test', $chantierCreated->getNom());
    }
}