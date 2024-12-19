<?php

namespace App\Controller;

use App\Entity\Tache;
use App\Entity\User;
use App\Form\TacheType;
use App\Repository\TacheRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\UserRepository;





#[Route('/tache')]
final class TacheController extends AbstractController
{
     // Déclarer la propriété $tacheRepository
     private TacheRepository $tacheRepository;

     // Injection du TacheRepository via le constructeur
     public function __construct(TacheRepository $tacheRepository)
     {
         // Initialiser la propriété
         $this->tacheRepository = $tacheRepository;
     }
    

     #[Route('/new', name: 'app_tache_new', methods: ['GET', 'POST'])] // Définie la route pour créer une nouvelle tâche
     public function new(Request $request, EntityManagerInterface $entityManager, Security $security, TacheRepository $tacheRepository): Response
     {
         $tache = new Tache(); // Crée une nouvelle instance de l'entité Tache
         $tache->setStatutT(false); // Définit le statut de la tâche à "false" (non terminée)
        
         // Crée le formulaire à partir de la classe TacheType
         $form = $this->createForm(TacheType::class, $tache);
         $form->handleRequest($request); // Traite la requête pour ce formulaire
         $user = $security->getUser(); // Récupère l'utilisateur actuellement connecté
     
         // Vérifie si le formulaire est soumis et valide
         if ($form->isSubmitted() && $form->isValid()) {
             // Vérifie si l'utilisateur est une instance de User
             if ($user instanceof User) {
                 $tache->setUser($user); // Associe l'utilisateur à la tâche
             } else {
                 // Si l'utilisateur n'est pas connecté, affiche un message d'erreur
                 $this->addFlash('error', 'Vous devez être connecté pour créer une tâche.');
                 return $this->redirectToRoute('app_log'); // Redirige vers la page de connexion
             }
     
             $entityManager->persist($tache); // Persiste la tâche dans la base de données
             $entityManager->flush(); // Sauvegarde les changements dans la base de données
     
             // Récupère l'ID de l'utilisateur pour afficher un message de succès
             $userId = $tache->getUser()->getId();
             $this->addFlash('success', 'Tâche créée avec succès pour l\'utilisateur ID: ' . $userId);
             // Récupère toutes les tâches
              $taches = $tacheRepository->findAll();
             // Redirige vers la vue des tâches après la création
             return $this->render('tache/index.html.twig', [
                'taches' => $taches,
        
             ]);
         }
     
         // Si le formulaire n'est pas soumis ou est invalide, on affiche le formulaire
         return $this->render('tache/new.html.twig', [
             'tache' => $tache, // Passe l'objet Tache à la vue
             'form' => $form, // Passe le formulaire à la vue
         ]);
     }
     

    //#[Route('/{id}', name: 'app_tache_show', methods: ['GET'])]
    //public function show(Tache $tache): Response
    //{
      ////  return $this->render('tache/show.html.twig', [
          //  'tache' => $tache,
        //]);
    //}

    #[Route('/{id}/edit', name: 'app_tache_edit', methods: ['GET', 'POST'])] // Définie la route pour modifier une tâche
public function edit(Request $request, Tache $tache, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(TacheType::class, $tache); // Crée le formulaire à partir de la tâche existante
    $form->handleRequest($request); // Traite la requête pour ce formulaire

    // Vérifie si le formulaire est soumis et valide
    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush(); // Enregistre les modifications dans la base de données

        // Redirige vers la liste des tâches après la modification
        return $this->redirectToRoute('app_tache_index', [], Response::HTTP_SEE_OTHER);
    }

    // Affiche le formulaire de modification
    return $this->render('tache/edit.html.twig', [
        'tache' => $tache, // Passe l'objet Tache à la vue
        'form' => $form, // Passe le formulaire à la vue
    ]);
}


#[Route('/{id}', name: 'app_tache_delete', methods: ['POST'])] // Définie la route pour supprimer une tâche
public function delete(Request $request, Tache $tache, EntityManagerInterface $entityManager): Response
{
    // Vérifie la validité du token CSRF pour la suppression
    if ($this->isCsrfTokenValid('delete'.$tache->getId(), $request->getPayload()->getString('_token'))) {
        $entityManager->remove($tache); // Supprime la tâche de la base de données
        $entityManager->flush(); // Sauvegarde les changements
    }

    // Redirige vers la liste des tâches après la suppression
    return $this->redirectToRoute('app_tache_index', [], Response::HTTP_SEE_OTHER);
}

   
#[Route('/tache',name: 'app_tache_index', methods: ['GET', 'POST'])] // Route pour rechercher des tâches
public function rechercheTache(Request $request, TacheRepository $tacheRepository): Response
{
    $searchTerm = $request->query->get('search', ''); // Récupère le terme de recherche de la requête
    $taches = $searchTerm 
        ? $tacheRepository->findByName($searchTerm) // Recherche des tâches par le nom si le terme est fourni
        : $tacheRepository->findAll(); // Affiche toutes les tâches sinon

    // Rend la vue avec les tâches et le terme de recherche
    return $this->render('tache/index.html.twig', [
        'taches' => $taches,
        'searchTerm' => $searchTerm, // Passe le terme de recherche à la vue
    ]);
}

#[Route(name: 'app_tache_index', methods: ['GET'])] // Route pour trier les tâches par ID
public function triTacheId(TacheRepository $tacheRepository, Request $request): Response
{
    $searchTerm = $request->query->get('search', ''); // Récupère le terme de recherche de la requête

    // Si un terme de recherche est fourni, on filtre par nom
    if ($searchTerm) {
        $taches = $tacheRepository->findByNomT($searchTerm); // Recherche des tâches par nom
    } else {
        $taches = $tacheRepository->findAllOrderedById(); // Trie toutes les tâches par ID si aucun terme de recherche
    }

    // Rend la vue avec les tâches et le terme de recherche
    return $this->render('tache/index.html.twig', [
        'taches' => $taches,
        'searchTerm' => $searchTerm, // Passe le terme de recherche à la vue
    ]);
}


#[Route('/durations', name: 'app_tache_durations', methods: ['GET'])] // Route pour afficher la durée des tâches
public function getTaskDurations(TacheRepository $tacheRepository): Response
{
    // Récupère la durée des tâches via le repository
    $durations = $tacheRepository->calculateTaskDurations();

    // Affiche la durée des tâches dans la vue
    return $this->render('tache/durations.html.twig', [
        'durations' => $durations,
    ]);
}


#[Route('/statistics', name: 'app_tache_statistics')] // Route pour afficher les statistiques des tâches
public function statistics(TacheRepository $tacheRepository): Response
{
    // Récupère les statistiques des tâches (par statut)
    $statistics = $tacheRepository->getStatisticsByStatus();

    // Rend la vue avec les statistiques
    return $this->render('tache/statistics.html.twig', [
        'statistics' => $statistics, // Passe les statistiques à

    ]);

}
}
