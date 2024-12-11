<?php

namespace App\Repository; // Namespace pour organiser les fichiers dans le projet.

use App\Entity\Tache; // Import de l'entité Tache, qui correspond à la table Tache dans la base de données.
use App\Entity\User; // Import de l'entité User (peut être utilisé pour lier des utilisateurs aux tâches).
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository; // Fournit des fonctionnalités pour travailler avec une entité dans la base de données.
use Doctrine\Persistence\ManagerRegistry; // Gère les connexions à la base de données.

/**
 * @extends ServiceEntityRepository<Tache>
 * Classe de repository pour l'entité Tache.
 */
class TacheRepository extends ServiceEntityRepository
{
    // Constructeur pour initialiser le repository avec Doctrine.
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tache::class); // Initialise avec l'entité Tache.
    }

    // Exemple de fonction commentée pour récupérer des tâches selon un champ donné.
    // /**
    //  * @return Tache[] Returns an array of Tache objects
    //  */
    // public function findByExampleField($value): array
    // {
    //     return $this->createQueryBuilder('t') // Construction de la requête avec un alias 't' pour l'entité Tache.
    //         ->andWhere('t.exampleField = :val') // Filtre les résultats selon la valeur donnée.
    //         ->setParameter('val', $value) // Définit le paramètre :val.
    //         ->orderBy('t.id', 'ASC') // Trie les résultats par ID de manière ascendante.
    //         ->setMaxResults(10) // Limite à 10 résultats.
    //         ->getQuery() // Prépare la requête.
    //         ->getResult(); // Exécute la requête et retourne les résultats.
    // }

    // Exemple de fonction commentée pour récupérer une seule tâche selon un champ donné.
    // public function findOneBySomeField($value): ?Tache
    // {
    //     return $this->createQueryBuilder('t')
    //         ->andWhere('t.exampleField = :val')
    //         ->setParameter('val', $value)
    //         ->getQuery()
    //         ->getOneOrNullResult(); // Retourne un seul résultat ou null s'il n'y a rien.
    // }

    // Fonction pour rechercher des tâches par nom.
    public function findByName(string $searchTerm): array
    {
        return $this->createQueryBuilder('t') // Construction de la requête.
            ->where('t.nomT LIKE :searchTerm') // Recherche par nom partiel.
            ->setParameter('searchTerm', '%' . $searchTerm . '%') // Définit le paramètre de recherche avec des caractères joker.
            ->getQuery() // Prépare la requête.
            ->getResult(); // Exécute la requête et retourne les résultats.
    }

    // Fonction pour récupérer toutes les tâches triées par ID.
    public function findAllOrderedById()
    {
        return $this->createQueryBuilder('t') // Construction de la requête.
            ->orderBy('t.dateDebut', 'ASC') // Trie les tâches par ID de manière ascendante.
            ->getQuery() // Prépare la requête.
            ->getResult(); // Exécute la requête et retourne les résultats.
    }

    // Fonction pour calculer la durée des tâches.
    public function calculateTaskDurations()
    {
        // DQL pour récupérer les champs nécessaires des tâches.
        $dql = "
            SELECT t.id, 
                   t.nomT, 
                   t.dateDebut, 
                   t.dateFin
            FROM App\Entity\Tache t
        ";

        $query = $this->getEntityManager()->createQuery($dql); // Création de la requête DQL.

        $taches = $query->getResult(); // Exécution de la requête et récupération des tâches.

        $result = []; // Tableau pour stocker les résultats.

        foreach ($taches as $tache) { // Parcourt chaque tâche récupérée.
            $dateDebut = $tache['dateDebut']; // Date de début de la tâche.
            $dateFin = $tache['dateFin']; // Date de fin de la tâche.

            if ($dateDebut && $dateFin) { // Si les deux dates sont disponibles.
                $interval = $dateDebut->diff($dateFin); // Calcule la différence entre les deux dates.
                $duration = $interval->days; // Extrait le nombre de jours de la durée.
            } else {
                $duration = null; // Si une des dates est manquante, la durée est nulle.
            }

            // Ajoute les informations au tableau de résultats.
            $result[] = [
                'id' => $tache['id'],
                'nomT' => $tache['nomT'],
                'duration' => $duration,
            ];
        }

        return $result; // Retourne le tableau des durées.
    }

    // Fonction pour obtenir des statistiques sur les statuts des tâches.
    public function getStatisticsByStatus()
    {
        // DQL pour compter les tâches selon leur statut.
        $dql = "
            SELECT t.statutT, COUNT(t.id) 
            FROM App\Entity\Tache t 
            GROUP BY t.statutT
        ";

        $query = $this->getEntityManager()->createQuery($dql); // Création de la requête.

        try {
            $result = $query->getResult(); // Exécution de la requête et récupération des résultats.

            $statistics = []; // Tableau pour stocker les statistiques.

            foreach ($result as $row) { // Parcourt chaque ligne des résultats.
                $status = $row['statutT']; // Statut de la tâche.
                $count = $row[1]; // Nombre de tâches avec ce statut.

                $statistics[$status] = $count; // Enregistre le résultat dans le tableau associatif.
            }

            return $statistics; // Retourne les statistiques.

        } catch (\Exception $e) { // Gère les erreurs en cas d'échec.
            return []; // Retourne un tableau vide en cas d'erreur.
        }
    }
}
