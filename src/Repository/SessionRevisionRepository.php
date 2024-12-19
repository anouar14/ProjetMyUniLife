<?php

namespace App\Repository;

use App\Entity\Sessionrevision;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Sessionrevision>
 */
class SessionrevisionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sessionrevision::class);
    }

//    /**
//     * @return Sessionrevision[] Returns an array of Sessionrevision objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Sessionrevision
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

/**
     * Find session revisions filtered by date and duration.
     *
     * @param string|null $dateFrom
     * @param string|null $dateTo
     * @param int|null $minDuration
     * @param int|null $maxDuration
     * @return Sessionrevision[]
     */
    public function findByFilters(
        ?string $dateFrom = null, 
        ?string $dateTo = null, 
        ?int $minDuration = null, 
        ?int $maxDuration = null
    ): array {
        $qb = $this->createQueryBuilder('s');
        
        // Filter by date range if provided
        if ($dateFrom) {
            $qb->andWhere('s.dateDebut >= :dateFrom')
                ->setParameter('dateFrom', $dateFrom);
        }
        if ($dateTo) {
            $qb->andWhere('s.dateDebut <= :dateTo')
                ->setParameter('dateTo', $dateTo);
        }
        
        // Filter by duration range if provided
        if ($minDuration) {
            $qb->andWhere('s.dureeAllouee >= :minDuration')
                ->setParameter('minDuration', $minDuration);
        }
        if ($maxDuration) {
            $qb->andWhere('s.dureeAllouee <= :maxDuration')
                ->setParameter('maxDuration', $maxDuration);
        }

        // Order by date (default ascending) or any other logic you want
        $qb->orderBy('s.dateDebut', 'ASC');

        return $qb->getQuery()->getResult();
    }
}
