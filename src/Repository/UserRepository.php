<?php

namespace App\Repository; // Déclare le namespace pour organiser les classes dans le projet.

use App\Entity\User; // Import de l'entité User pour interagir avec la table User dans la base de données.
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository; // Fournit des fonctionnalités de base pour les repositories.
use Doctrine\Persistence\ManagerRegistry; // Gère les connexions à la base de données.

/**
 * @extends ServiceEntityRepository<User>
 * Classe repository dédiée à l'entité User, pour interagir avec la table des utilisateurs.
 */
class UserRepository extends ServiceEntityRepository
{
    /**
     * Constructeur de la classe UserRepository.
     * @param ManagerRegistry $registry Instance permettant de récupérer les métadonnées de l'entité et de gérer la base de données.
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class); // Initialise la classe parent avec l'entité User.
    }

    // Méthodes générées automatiquement par Symfony (commentées ici pour référence).

    // /**
    //  * @return User[] Returns an array of User objects
    //  * Exemple de méthode pour trouver des utilisateurs par un champ spécifique.
    //  */
    // public function findByExampleField($value): array
    // {
    //     return $this->createQueryBuilder('u') // Initialise le query builder avec un alias 'u' pour l'entité User.
    //         ->andWhere('u.exampleField = :val') // Ajoute une condition sur le champ "exampleField".
    //         ->setParameter('val', $value) // Définit la valeur du paramètre :val.
    //         ->orderBy('u.id', 'ASC') // Trie les résultats par ID de manière ascendante.
    //         ->setMaxResults(10) // Limite les résultats à 10 utilisateurs.
    //         ->getQuery() // Prépare la requête.
    //         ->getResult() // Exécute la requête et retourne les résultats sous forme de tableau.
    //     ;
    // }

    // /**
    //  * Exemple de méthode pour trouver un utilisateur par un champ spécifique.
    //  * @return User|null Retourne un utilisateur ou null s'il n'y a pas de correspondance.
    //  */
    // public function findOneBySomeField($value): ?User
    // {
    //     return $this->createQueryBuilder('u') // Initialise le query builder avec un alias 'u'.
    //         ->andWhere('u.exampleField = :val') // Ajoute une condition sur le champ "exampleField".
    //         ->setParameter('val', $value) // Définit la valeur du paramètre :val.
    //         ->getQuery() // Prépare la requête.
    //         ->getOneOrNullResult() // Exécute la requête et retourne un seul résultat ou null.
    //     ;
    // }

    /**
     * Méthode pour trouver un utilisateur par son email.
     * @param string $email Email de l'utilisateur à rechercher.
     * @return User|null Retourne l'utilisateur correspondant ou null s'il n'est pas trouvé.
     */
    
    //SELECT u FROM User u WHERE u.email = :email

    public function findOneByEmail(string $email): ?User
    {
        return $this->createQueryBuilder('u') // Initialise le query builder avec un alias 'u' pour l'entité User.
            ->andWhere('u.email = :email') // Ajoute une condition pour vérifier que l'email correspond.
            ->setParameter('email', $email) // Définit la valeur du paramètre :email.
            ->getQuery() // Prépare la requête.
            ->getOneOrNullResult(); // Exécute la requête et retourne un seul utilisateur ou null.
    }
}
