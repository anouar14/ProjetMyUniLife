<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Form\ActiviteType;
use App\Repository\ActiviteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
#[Route('/activite')]
final class ActiviteController extends AbstractController
{
    private ActiviteRepository $activiteRepository;
    private MailerInterface $mailer;

// Déclaration du constructeur au début de la classe
    public function __construct(ActiviteRepository $activiteRepository, MailerInterface $mailer)
    {
        $this->activiteRepository = $activiteRepository;
        $this->mailer = $mailer;
    }

    #[Route(name: 'app_activite_index', methods: ['GET'])]
    public function index(ActiviteRepository $activiteRepository): Response
    {
        return $this->render('activite/index.html.twig', [
            'activites' => $activiteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_activite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $activite = new Activite();
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        // Set default date BEFORE checking form submission
        if ($form->isSubmitted() && $form->isValid()) {
            $activite = $form->getData();
            if ($activite->getDateAC() === null) {
                $activite->setDateAC(new \DateTime()); // Set current date if null
            }
            if ($activite->getHeureAC() === null) {
                $activite->setHeureAC(new \DateTime);
            }

            else if ($form->isValid()) {
                $entityManager->persist($activite);
                $entityManager->flush();

                return $this->redirectToRoute('app_activite_index');
            }
        }

        return $this->render('activite/new.html.twig', [
            'activite' => $activite,
            'form' => $form->createView(),
        ]);



        $activite = new Activite();
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        // Vérification si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Si `dateAC` ou `HeureAC` est null, définir une valeur par défaut
            if ($form->get('dateAC')->getData() === null) {
                $activite->setDateAC(new \DateTime());
            }

            if ($form->get('HeureAC')->getData() === null) {
                $activite->setHeureAC(new \DateTime());
            }

            // Persister et enregistrer l'activité en base de données
            $entityManager->persist($activite);
            $entityManager->flush();

            // Redirection vers la page d'accueil ou liste des activités
            return $this->redirectToRoute('app_activite_index'); // Remplacez par votre route d'accueil
        }

        return $this->render('activite/new.html.twig', [
            'activite' => $activite,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_activite_show', methods: ['GET'])]
    public function show(Activite $activite): Response
    {
        // Assurez-vous que $activite est une instance valide
        if (!$activite) {
            throw $this->createNotFoundException('Activité non trouvée');
        }

        return $this->render('activite/show.html.twig', [
            'activite' => $activite,
        ]);
    }


    #[Route('/{id}/edit', name: 'app_activite_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Activite $activite, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        // Validation du formulaire
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Activité modifiée avec succès');

            return $this->redirectToRoute('app_activite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('activite/edit.html.twig', [
            'activite' => $activite,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/activite/{id}/delete', name: 'app_activite_delete', methods: ['POST'])]
    public function delete(Request $request, Activite $activite, EntityManagerInterface $entityManager): Response
    {
        // Vérification du token CSRF
        $csrfToken = $request->request->get('_token');
        if ($this->isCsrfTokenValid('delete' . $activite->getId(), $csrfToken)) {
            $entityManager->remove($activite);
            $entityManager->flush();
            $this->addFlash('success', 'Activité supprimée avec succès');

        }

        return $this->redirectToRoute('app_activite_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/send-activity-reminder', name: 'send_activity_reminder', methods: ['POST'])]
    public function sendActivityReminder(): Response
    {
        // Récupérer les activités pour demai
        //n
        $activities = $this->activiteRepository->findActivitiesForTomorrow();
        dump($activities);  // Log pour vérifier les données récupérées

        foreach ($activities as $activity) {
            if ($activity->getUser()) {
                $user = $activity->getUser();

                // Créer l'email de notification
                $email = (new Email())
                    ->from('Rappel@myUniLife.com')
                    ->to($user->getEmail())
                    ->subject('Rappel : Activité demain')
                    ->html('<p>Cher(e) ' . $user->getPrenom() . ',<br>Nous vous rappelons que vous avez une activité prévue demain : <strong>' . $activity->getNomAC() . '</strong> à ' . $activity->getHeureAC()->format('H:i') . '.</p>');
            }
        }
        try {
            $this->mailer->send($email);
        } catch (\Exception $e) {
            return new Response('Erreur lors de l\'envoi des emails: ' . $e->getMessage());
        }
        return new Response('Rappels envoyés avec succès!');
    }
    #[Route(name: 'app_activite_index', methods: ['GET', 'POST'])]
    public function triEtRecherche(ActiviteRepository $activiteRepository, Request $request): Response
    {
        // Récupération des paramètres de requête
        $searchTerm = $request->query->get('search', ''); // Terme de recherche (par défaut vide)
        $sortOption = $request->query->get('sort', 'date');

        // Récupération des activités
        if (!empty($searchTerm)) {
            // Si un terme de recherche est fourni, effectuer une recherche par nom
            $activites = $activiteRepository->findByName($searchTerm);
        } else {
            // Si aucun terme de recherche, trier les activités
            if ($sortOption === 'date') {
                $activites = $activiteRepository->findAllOrderedByDate();
            } elseif ($sortOption === 'id') {
                $activites = $activiteRepository->findAllOrderedById();
            } else {
                $activites = $activiteRepository->findAll(); // Par défaut, retourner toutes les activités
            }
        }

        // Retourne la vue avec les données
        return $this->render('activite/index.html.twig', [
            'activites' => $activites,
            'searchTerm' => $searchTerm,
            'sortOption' => $sortOption,
        ]);
    }



}
