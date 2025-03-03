<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250303161707 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affectation DROP FOREIGN KEY FK_F4DD61D34E853A9E');
        $this->addSql('DROP INDEX IDX_F4DD61D34E853A9E ON affectation');
        $this->addSql('ALTER TABLE affectation CHANGE ouvrier_id equipe_id INT NOT NULL');
        $this->addSql('ALTER TABLE affectation ADD CONSTRAINT FK_F4DD61D36D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_F4DD61D36D861B89 ON affectation (equipe_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affectation DROP FOREIGN KEY FK_F4DD61D36D861B89');
        $this->addSql('DROP INDEX IDX_F4DD61D36D861B89 ON affectation');
        $this->addSql('ALTER TABLE affectation CHANGE equipe_id ouvrier_id INT NOT NULL');
        $this->addSql('ALTER TABLE affectation ADD CONSTRAINT FK_F4DD61D34E853A9E FOREIGN KEY (ouvrier_id) REFERENCES ouvrier (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_F4DD61D34E853A9E ON affectation (ouvrier_id)');
    }
}
