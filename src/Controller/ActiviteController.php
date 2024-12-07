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

#[Route('/activite')]
final class ActiviteController extends AbstractController
{
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

    #[Route('/{id}', name: 'app_activite_delete', methods: ['POST'])]
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
}
