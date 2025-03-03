<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250303115859 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affectation ADD ouvrier_id INT NOT NULL, ADD chantier_id INT NOT NULL, DROP id_ouvrier, DROP id_chantier');
        $this->addSql('ALTER TABLE affectation ADD CONSTRAINT FK_F4DD61D34E853A9E FOREIGN KEY (ouvrier_id) REFERENCES ouvrier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE affectation ADD CONSTRAINT FK_F4DD61D3D0C0049D FOREIGN KEY (chantier_id) REFERENCES chantier (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_F4DD61D34E853A9E ON affectation (ouvrier_id)');
        $this->addSql('CREATE INDEX IDX_F4DD61D3D0C0049D ON affectation (chantier_id)');
        $this->addSql('ALTER TABLE chantier ADD chef_chantier_id INT DEFAULT NULL, ADD equipe_id INT DEFAULT NULL, DROP chef_chantier, DROP id_equipe');
        $this->addSql('ALTER TABLE chantier ADD CONSTRAINT FK_636F27F622456F8F FOREIGN KEY (chef_chantier_id) REFERENCES ouvrier (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE chantier ADD CONSTRAINT FK_636F27F66D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_636F27F622456F8F ON chantier (chef_chantier_id)');
        $this->addSql('CREATE INDEX IDX_636F27F66D861B89 ON chantier (equipe_id)');
        $this->addSql('ALTER TABLE equipe ADD chef_equipe_id INT DEFAULT NULL, DROP id_chef_equipe');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT FK_2449BA15BEF74F87 FOREIGN KEY (chef_equipe_id) REFERENCES ouvrier (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2449BA15BEF74F87 ON equipe (chef_equipe_id)');
        $this->addSql('ALTER TABLE ouvrier ADD equipe_id INT DEFAULT NULL, DROP disponibilite');
        $this->addSql('ALTER TABLE ouvrier ADD CONSTRAINT FK_ED5E7D256D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_ED5E7D256D861B89 ON ouvrier (equipe_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affectation DROP FOREIGN KEY FK_F4DD61D34E853A9E');
        $this->addSql('ALTER TABLE affectation DROP FOREIGN KEY FK_F4DD61D3D0C0049D');
        $this->addSql('DROP INDEX IDX_F4DD61D34E853A9E ON affectation');
        $this->addSql('DROP INDEX IDX_F4DD61D3D0C0049D ON affectation');
        $this->addSql('ALTER TABLE affectation ADD id_ouvrier VARCHAR(255) DEFAULT NULL, ADD id_chantier VARCHAR(255) DEFAULT NULL, DROP ouvrier_id, DROP chantier_id');
        $this->addSql('ALTER TABLE chantier DROP FOREIGN KEY FK_636F27F622456F8F');
        $this->addSql('ALTER TABLE chantier DROP FOREIGN KEY FK_636F27F66D861B89');
        $this->addSql('DROP INDEX IDX_636F27F622456F8F ON chantier');
        $this->addSql('DROP INDEX IDX_636F27F66D861B89 ON chantier');
        $this->addSql('ALTER TABLE chantier ADD chef_chantier VARCHAR(255) DEFAULT NULL, ADD id_equipe VARCHAR(255) NOT NULL, DROP chef_chantier_id, DROP equipe_id');
        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY FK_2449BA15BEF74F87');
        $this->addSql('DROP INDEX UNIQ_2449BA15BEF74F87 ON equipe');
        $this->addSql('ALTER TABLE equipe ADD id_chef_equipe VARCHAR(255) DEFAULT NULL, DROP chef_equipe_id');
        $this->addSql('ALTER TABLE ouvrier DROP FOREIGN KEY FK_ED5E7D256D861B89');
        $this->addSql('DROP INDEX IDX_ED5E7D256D861B89 ON ouvrier');
        $this->addSql('ALTER TABLE ouvrier ADD disponibilite TINYINT(1) DEFAULT NULL, DROP equipe_id');
    }
}
