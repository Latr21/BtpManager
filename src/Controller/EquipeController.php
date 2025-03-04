<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Form\EquipeType;
use App\Repository\EquipeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/equipe')]
final class EquipeController extends AbstractController
{
    #[Route(name: 'app_equipe_index', methods: ['GET'])]
    public function index(EquipeRepository $equipeRepository): Response
    {
        return $this->render('equipe/index.html.twig', [
            'equipes' => $equipeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_equipe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $equipe = new Equipe();
        $form = $this->createForm(EquipeType::class, $equipe);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer les ouvriers sélectionnés
            $ouvriers = $form->get('ouvriers')->getData();
    
            // Mettre à jour le nombre d'ouvriers dans l'entité
            $equipe->setNombre(count($ouvriers));  // Compter les ouvriers sélectionnés
    
            // Persister l'équipe (pour avoir un ID valide)
            $entityManager->persist($equipe);
            $entityManager->flush();
    
            // Mettre à jour l'equipe_id des ouvriers sélectionnés
            foreach ($ouvriers as $ouvrier) {
                $ouvrier->setEquipe($equipe); // Associer l'ouvrier à l'équipe
                $entityManager->persist($ouvrier); // Persister chaque ouvrier modifié
            }
    
            // Sauvegarder les changements pour les ouvriers
            $entityManager->flush();
    
            return $this->redirectToRoute('app_equipe_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('equipe/new.html.twig', [
            'equipe' => $equipe,
            'form' => $form->createView(), // Assurez-vous de passer la vue du formulaire ici
        ]);
    }

    #[Route('/{id}', name: 'app_equipe_show', methods: ['GET'])]
    public function show(Equipe $equipe): Response
    {
        // Afficher les ouvriers associés à cette équipe
        return $this->render('equipe/show.html.twig', [
            'equipe' => $equipe,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_equipe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Equipe $equipe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EquipeType::class, $equipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Mettre à jour le nombre d'ouvriers dans l'entité (au cas où la sélection change)
            $ouvriers = $form->get('ouvriers')->getData();
            $equipe->setNombre(count($ouvriers));

            $entityManager->flush();

            return $this->redirectToRoute('app_equipe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('equipe/edit.html.twig', [
            'equipe' => $equipe,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_equipe_delete', methods: ['POST'])]
    public function delete(Request $request, Equipe $equipe, EntityManagerInterface $entityManager): Response
    {
        // Vérifier le token CSRF
        if ($this->isCsrfTokenValid('delete'.$equipe->getId(), $request->request->get('_token'))) {
            $entityManager->remove($equipe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_equipe_index', [], Response::HTTP_SEE_OTHER);
    }
}
