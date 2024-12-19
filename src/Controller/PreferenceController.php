<?php

namespace App\Controller;

use App\Entity\Preference;
use App\Form\PreferenceType;
use App\Repository\ActiviteRepository;
use App\Repository\PreferenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/preference')]
final class PreferenceController extends AbstractController
{
    #[Route(name: 'app_preference_index', methods: ['GET'])]
    public function index(PreferenceRepository $preferenceRepository): Response
    {
        return $this->render('preference/index.html.twig', [
            'preferences' => $preferenceRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_preference_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $preference = new Preference();

        // Si la disponibilité n'est pas définie, attribuer la date d'aujourd'hui
        if ($preference->getDisponibiliteAC() === null) {
            $preference->setDisponibiliteAC(new \DateTime()); // Date actuelle
        }

        $form = $this->createForm(PreferenceType::class, $preference);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Pas besoin de réinitialiser la date ici, on la persiste directement
            $entityManager->persist($preference);
            $entityManager->flush();

            return $this->redirectToRoute('app_preference_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('preference/new.html.twig', [
            'preference' => $preference,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/{id}', name: 'app_preference_show', methods: ['GET'])]
    public function show(Preference $preference): Response
    {
        return $this->render('preference/show.html.twig', [
            'preference' => $preference,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_preference_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Preference $preference, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PreferenceType::class, $preference);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_preference_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('preference/edit.html.twig', [
            'preference' => $preference,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_preference_delete', methods: ['POST'])]
    public function delete(Request $request, Preference $preference, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$preference->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($preference);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_preference_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route( name: 'app_preference_index', methods: ['GET'])]
    public function triTacheId(PreferenceRepository $preferenceRepository, Request $request): Response
    {
        $searchTerm = $request->query->get('search', '');

        if ($searchTerm) {
            $preferences = $preferenceRepository->findByNomT($searchTerm); // Assume a method exists for searching by name
        } else {
            $preferences = $preferenceRepository->findAllOrderedById();
        }

        return $this->render('preference/index.html.twig', [
            'preferences' => $preferences,
            'searchTerm' => $searchTerm,
        ]);
    }
}
