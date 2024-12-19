<?php

namespace App\Repository;

use App\Entity\Activite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Activite>
 */
class ActiviteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Activite::class);
    }

    public function find($id, $lockMode = null, $lockVersion = null): ?Activite
    {
        return parent::find($id, $lockMode, $lockVersion);
    }
    public function show(int $id, ActiviteRepository $activiteRepository): Response
    {
        $activite = $activiteRepository->find($id);

        if (!$activite) {
            throw $this->createNotFoundException('Activité non trouvée');
        }

        return $this->render('activite/show.html.twig', [
            'activite' => $activite,
        ]);
    }


    /**
     * Trouve les activités prévues pour demain.
     */
    public function findActivitiesForTomorrow(): array
    {
        $tomorrowStart = new \DateTime('tomorrow midnight'); // 00:00:00 de demain
        $tomorrowEnd = new \DateTime('tomorrow +1 day midnight'); // 23:59:59 de demain

        $qb = $this->createQueryBuilder('a')
            ->where('a.dateAC >= :tomorrowStart')
            ->andWhere('a.dateAC <= :tomorrowEnd')
            ->setParameter('tomorrowStart', $tomorrowStart)
            ->setParameter('tomorrowEnd', $tomorrowEnd);

        return $qb->getQuery()->getResult();
    }
    //    /**
    //     * @return Activite[] Returns an array of Activite objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Activite
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    // TacheRepository.php
    public function findAllOrderedById()
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.id', 'DESC') // Trie par la colonne id dans l'ordre décroissant
            ->getQuery()
            ->getResult();
    }

    public function findAllOrderedByDate()
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.dateAC', 'ASC') // Trie par la colonne dateAC dans l'ordre croissant
            ->getQuery()
            ->getResult();
    }
    public function findByName(string $searchTerm): array
    {
        return $this->createQueryBuilder('a')
            ->where('a.nomAC LIKE :searchTerm') // Assurez-vous que 'nomAC' correspond bien au nom du champ dans votre entité
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->orderBy('a.nomAC', 'ASC') // Optionnel : Tri par ordre alphabétique du nom
            ->getQuery()
            ->getResult();
    }



}
