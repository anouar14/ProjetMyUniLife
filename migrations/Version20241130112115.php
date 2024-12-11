<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241130112115 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        
        // this up() migration is auto-generated, please modify it to your needs
        //$this->addSql('CREATE TABLE activite (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom_ac VARCHAR(255) NOT NULL, date_ac DATE NOT NULL, heure_ac TIME NOT NULL, type_ac VARCHAR(255) NOT NULL, rappel_ac LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', INDEX IDX_B8755515A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        //$this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom_cat VARCHAR(255) NOT NULL, montan_max DOUBLE PRECISION NOT NULL, montant_cat DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       // $this->addSql('CREATE TABLE depense (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, type_dep VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, date_dep DATE NOT NULL, INDEX IDX_34059757BCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       // $this->addSql('CREATE TABLE matiere (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, session_rev LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ressources LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       // $this->addSql('CREATE TABLE notification (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, message VARCHAR(255) NOT NULL, date_notif DATE NOT NULL, INDEX IDX_BF5476CAA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        //$this->addSql('CREATE TABLE preference (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, type_pr VARCHAR(255) NOT NULL, disponibilite_ac DATETIME NOT NULL, INDEX IDX_5D69B053A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        //$this->addSql('CREATE TABLE ressources_rev (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        //$this->addSql('CREATE TABLE session_revision (id INT AUTO_INCREMENT NOT NULL, date_debut DATE NOT NULL, duree_allouee INT NOT NULL, duree_reelle INT NOT NULL, objectif_atteint TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        //$this->addSql('CREATE TABLE tache (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom_t VARCHAR(255) NOT NULL, des_t VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, time_on TIME NOT NULL, time_out TIME NOT NULL, statut_t TINYINT(1) NOT NULL, INDEX IDX_93872075A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       // $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, solde_m DOUBLE PRECISION NOT NULL, age INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       // $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       // $this->addSql('ALTER TABLE activite ADD CONSTRAINT FK_B8755515A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
       // $this->addSql('ALTER TABLE depense ADD CONSTRAINT FK_34059757BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
       // $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CAA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        //$this->addSql('ALTER TABLE preference ADD CONSTRAINT FK_5D69B053A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        //$this->addSql('ALTER TABLE tache ADD CONSTRAINT FK_93872075A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        //$this->addSql('ALTER TABLE activite DROP FOREIGN KEY FK_B8755515A76ED395');
       // $this->addSql('ALTER TABLE depense DROP FOREIGN KEY FK_34059757BCF5E72D');
       // $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CAA76ED395');
       // $this->addSql('ALTER TABLE preference DROP FOREIGN KEY FK_5D69B053A76ED395');
       // $this->addSql('ALTER TABLE tache DROP FOREIGN KEY FK_93872075A76ED395');
        $this->addSql('DROP TABLE activite');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE depense');
        $this->addSql('DROP TABLE matiere');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE preference');
        $this->addSql('DROP TABLE ressources_rev');
        $this->addSql('DROP TABLE session_revision');
        $this->addSql('DROP TABLE tache');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
