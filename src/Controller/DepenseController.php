<?php

namespace App\Controller;

use App\Entity\Depense;
use App\Form\DepenseType;
use App\Repository\DepenseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/depense')]
final class DepenseController extends AbstractController
{
    #[Route(name: 'app_depense_index', methods: ['GET'])]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
    $sort = $request->query->get('sort', 'typeDep'); 
    $direction = $request->query->get('direction', 'asc'); 

    $allowedSortFields = ['id', 'categorie', 'typeDep', 'montant', 'dateDep'];
    if (!in_array($sort, $allowedSortFields)) {
        $sort = 'typeDep';
    }

    // Récupérer le repository pour les dépenses
    $repository = $entityManager->getRepository(Depense::class);

    // Utiliser le repository pour récupérer les dépenses avec tri
    $depenses = $repository->findBy([], [$sort => $direction]);

    $totalRevenu = $entityManager->createQueryBuilder()
        ->select('SUM(d.montant)')
        ->from(Depense::class, 'd')
        ->where('d.typeDep = :type')
        ->setParameter('type', 'revenu')
        ->getQuery()
        ->getSingleScalarResult();
    $totalDepense = $entityManager->createQueryBuilder()
        ->select('SUM(d.montant)')
        ->from(Depense::class, 'd')
        ->where('d.typeDep = :type')
        ->setParameter('type', 'depense')
        ->getQuery()
        ->getSingleScalarResult();

    
    $difference = $totalRevenu - $totalDepense;

    return $this->render('depense/index.html.twig', [
        'depenses' => $depenses,
        'difference' => $difference,
    ]);
    }

    #[Route('/new', name: 'app_depense_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $depense = new Depense();
        $form = $this->createForm(DepenseType::class, $depense);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($depense);
            $entityManager->flush();

            return $this->redirectToRoute('app_depense_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('depense/new.html.twig', [
            'depense' => $depense,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_depense_show', methods: ['GET'])]
    public function show(Depense $depense): Response
    {
        return $this->render('depense/show.html.twig', [
            'depense' => $depense,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_depense_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Depense $depense, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DepenseType::class, $depense);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_depense_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('depense/edit.html.twig', [
            'depense' => $depense,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_depense_delete', methods: ['POST'])]
    public function delete(Request $request, Depense $depense, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$depense->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($depense);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_depense_index', [], Response::HTTP_SEE_OTHER);
    }
}
