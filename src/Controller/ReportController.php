<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response; // Add this line
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Depense;

class ReportController extends AbstractController
{
    #[Route('/report', name: 'app_report')]
    public function index(): Response
    {
        return $this->render('report/index.html.twig', [
            'controller_name' => 'ReportController',
        ]);
    }

    #[Route('/rapport-mensuel', name: 'report_monthly')]
    public function monthlyReport(Request $request, EntityManagerInterface $entityManager): Response
    {
        $month = $request->query->get('month', (new \DateTime())->format('m'));
        $year = $request->query->get('year', (new \DateTime())->format('Y'));

        $startDate = new \DateTime("$year-$month-01");
        $endDate = (clone $startDate)->modify('last day of this month');

        $depenses = $entityManager->getRepository(Depense::class)->createQueryBuilder('d')
            ->where('d.dateDep BETWEEN :startDate AND :endDate')
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->orderBy('d.dateDep', 'ASC')
            ->getQuery()
            ->getResult();

        $totalRevenu = array_sum(array_map(fn($d) => $d->getTypeDep() === 'revenu' ? $d->getMontant() : 0, $depenses));
        $totalDepense = array_sum(array_map(fn($d) => $d->getTypeDep() === 'depense' ? $d->getMontant() : 0, $depenses));
        $difference = $totalRevenu - $totalDepense;

        return $this->render('report/monthly_report.html.twig', [
            'depenses' => $depenses,
            'month' => $month,
            'year' => $year,
            'totalRevenu' => $totalRevenu,
            'totalDepense' => $totalDepense,
            'difference' => $difference,
        ]);
    }

    private $httpClient;
    private $geminiApiKey;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
        $this->geminiApiKey = 'YOUR_GOOGLE_GEMINI_API_KEY'; // Replace with your API key
    }

    #[Route('/report/chat', name: 'report_chat', methods: ['POST'])]
    public function chat(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        // Decode the incoming JSON request
        $data = json_decode($request->getContent(), true);
        $userMessage = $data['message'] ?? '';

        // Step 1: Fetch Monthly Expenses
        $currentDate = new \DateTime();
        $month = $currentDate->format('m');
        $year = $currentDate->format('Y');

        $depenses = $entityManager->getRepository(Depense::class)->createQueryBuilder('d')
            ->where('d.dateDep BETWEEN :startDate AND :endDate')
            ->setParameter('startDate', new \DateTime("$year-$month-01"))
            ->setParameter('endDate', (new \DateTime("$year-$month-01"))->modify('last day of this month'))
            ->getQuery()
            ->getResult();

        // Step 2: Calculate Total Expenses
        $totalDepenses = array_sum(array_map(fn($d) => $d->getMontant(), $depenses));

        // Step 3: Construct Prompt for Gemini
        $prompt = "L'utilisateur a dépensé un total de $totalDepenses € ce mois-ci. Voici sa question : '$userMessage'. Donne un conseil financier clair et utile en français.";

        // Step 4: Call Google Gemini API
        try {
            $response = $this->httpClient->request('POST', 'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent', [
                'query' => ['key' => $this->geminiApiKey],
                'json' => [
                    'contents' => [
                        ['parts' => [['text' => $prompt]]]
                    ]
                ],
            ]);

            $responseData = $response->toArray();
            $message = $responseData['candidates'][0]['content']['parts'][0]['text'] ?? 'Réponse indisponible.';
        } catch (\Exception $e) {
            $message = 'Une erreur est survenue lors de la communication avec Google Gemini.';
        }

        // Step 5: Return JSON Response
        return new JsonResponse(['message' => $message]);
    }
}
