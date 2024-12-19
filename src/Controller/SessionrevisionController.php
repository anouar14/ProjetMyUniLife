<?php

namespace App\Controller;

use App\Entity\Sessionrevision;
use App\Form\SessionRevisionType;
use App\Repository\SessionrevisionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/sessionrevision')]
final class SessionrevisionController extends AbstractController{
    #[Route(name: 'app_sessionrevision_index', methods: ['GET'])]
    public function index(Request $request, SessionrevisionRepository $sessionrevisionRepository): Response
    {
        $qb = $sessionrevisionRepository->createQueryBuilder('s');
            // Récupérer les paramètres de filtre de la requête
    $dateFrom = $request->query->get('date_from');
    $dateTo = $request->query->get('date_to');
    $minDuration = $request->query->get('min_duration');
    $maxDuration = $request->query->get('max_duration');

    $maxDuration = is_numeric($maxDuration) ? (int)$maxDuration : null;
    $minDuration = is_numeric($minDuration) ? (int)$minDuration : null;

    // Si aucun filtre n'est passé, récupérer toutes les sessions
    if (!$dateFrom && !$dateTo && !$minDuration && !$maxDuration) {
        $sessionrevisions = $sessionrevisionRepository->findAll();
    } else {
        // Sinon, récupérer les sessions filtrées
        $sessionrevisions = $sessionrevisionRepository->findByFilters($dateFrom, $dateTo, $minDuration, $maxDuration);
    }
    return $this->render('sessionrevision/index.html.twig', [
        'sessionrevisions' => $sessionrevisions,
    ]);
    }

    #[Route('/new', name: 'app_sessionrevision_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sessionrevision = new Sessionrevision();
        $form = $this->createForm(SessionRevisionType::class, $sessionrevision);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($sessionrevision);
            $entityManager->flush();

            return $this->redirectToRoute('app_sessionrevision_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sessionrevision/new.html.twig', [
            'sessionrevision' => $sessionrevision,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sessionrevision_show', methods: ['GET'])]
    public function show(Sessionrevision $sessionrevision): Response
    {
        return $this->render('sessionrevision/show.html.twig', [
            'sessionrevision' => $sessionrevision,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_sessionrevision_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Sessionrevision $sessionrevision, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SessionRevisionType::class, $sessionrevision);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_sessionrevision_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sessionrevision/edit.html.twig', [
            'sessionrevision' => $sessionrevision,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sessionrevision_delete', methods: ['POST'])]
    public function delete(Request $request, Sessionrevision $sessionrevision, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $sessionrevision->getId(), $request->request->get('_token'))) {
            $entityManager->remove($sessionrevision);
            $entityManager->flush();
        }
        // Redirige vers la page d'index après la suppression
        return $this->redirectToRoute('app_sessionrevision_index', [], Response::HTTP_SEE_OTHER);
    }
}
