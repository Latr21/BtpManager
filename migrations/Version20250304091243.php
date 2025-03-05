<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
<<<<<<<< HEAD:migrations/Version20250304091243.php
final class Version20250304091243 extends AbstractMigration
========
final class Version20250304093945 extends AbstractMigration
>>>>>>>> sofiane:migrations/Version20250304093945.php
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
<<<<<<<< HEAD:migrations/Version20250304091243.php
        $this->addSql('ALTER TABLE equipe CHANGE competance_equipe competence_equipe VARCHAR(255) NOT NULL');
========
        $this->addSql('ALTER TABLE equipe CHANGE competence_equipe competance_equipe VARCHAR(255) NOT NULL');
>>>>>>>> sofiane:migrations/Version20250304093945.php
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
<<<<<<<< HEAD:migrations/Version20250304091243.php
        $this->addSql('ALTER TABLE equipe CHANGE competence_equipe competance_equipe VARCHAR(255) NOT NULL');
========
        $this->addSql('ALTER TABLE equipe CHANGE competance_equipe competence_equipe VARCHAR(255) NOT NULL');
>>>>>>>> sofiane:migrations/Version20250304093945.php
    }
}
