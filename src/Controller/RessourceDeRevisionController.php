<?php

namespace App\Controller;

use App\Entity\RessourceDeRevision;
use App\Form\RessourceDeRevisionType;
use App\Repository\RessourceDeRevisionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/ressource/de/revision')]
final class RessourceDeRevisionController extends AbstractController{
    #[Route(name: 'app_ressource_de_revision_index', methods: ['GET'])]
    public function index(RessourceDeRevisionRepository $ressourceDeRevisionRepository): Response
    {
        return $this->render('ressource_de_revision/index.html.twig', [
            'ressources' => $ressourceDeRevisionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_ressource_de_revision_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ressourceDeRevision = new RessourceDeRevision();
        $form = $this->createForm(RessourceDeRevisionType::class, $ressourceDeRevision);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($ressourceDeRevision);
            $entityManager->flush();

            return $this->redirectToRoute('app_ressource_de_revision_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('ressource_de_revision/new.html.twig', [
            'ressource_de_revision' => $ressourceDeRevision,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ressource_de_revision_show', methods: ['GET'])]
    public function show(RessourceDeRevision $ressourceDeRevision): Response
    {
        return $this->render('ressource_de_revision/show.html.twig', [
            'ressource_de_revision' => $ressourceDeRevision,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_ressource_de_revision_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, RessourceDeRevision $ressourceDeRevision, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RessourceDeRevisionType::class, $ressourceDeRevision);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_ressource_de_revision_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('ressource_de_revision/edit.html.twig', [
            'ressource_de_revision' => $ressourceDeRevision,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ressource_de_revision_delete', methods: ['POST'])]
    public function delete(Request $request, RessourceDeRevision $ressourceDeRevision, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ressourceDeRevision->getId(), $request->request->get('_token'))) {
            $entityManager->remove($ressourceDeRevision);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_ressource_de_revision_index', [], Response::HTTP_SEE_OTHER);
    }
}
