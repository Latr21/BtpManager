<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250303104910 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE affectation (id INT AUTO_INCREMENT NOT NULL, id_ouvrier VARCHAR(255) DEFAULT NULL, id_chantier VARCHAR(255) DEFAULT NULL, date_affectation DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chantier (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, chantier_prerequis LONGTEXT DEFAULT NULL, effectif_requis INT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, chef_chantier VARCHAR(255) DEFAULT NULL, id_equipe VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipe (id INT AUTO_INCREMENT NOT NULL, nom_equipe VARCHAR(255) NOT NULL, competance_equipe VARCHAR(255) NOT NULL, nombre INT NOT NULL, planning_equipe LONGTEXT DEFAULT NULL, id_chef_equipe VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ouvrier (id INT AUTO_INCREMENT NOT NULL, nom_ouvrier VARCHAR(100) NOT NULL, competance VARCHAR(100) NOT NULL, role VARCHAR(100) NOT NULL, planning LONGTEXT DEFAULT NULL, disponibilite TINYINT(1) DEFAULT NULL, id_equipe VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE affectation');
        $this->addSql('DROP TABLE chantier');
        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE ouvrier');
    }
}
