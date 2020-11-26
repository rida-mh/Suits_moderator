<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201125183708 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE costume ADD model_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE costume ADD CONSTRAINT FK_3B0EB3DB4107BEA0 FOREIGN KEY (model_id_id) REFERENCES model (id)');
        $this->addSql('CREATE INDEX IDX_3B0EB3DB4107BEA0 ON costume (model_id_id)');
        $this->addSql('ALTER TABLE model ADD compan_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE model ADD CONSTRAINT FK_D79572D9B0F91289 FOREIGN KEY (compan_id_id) REFERENCES company (id)');
        $this->addSql('CREATE INDEX IDX_D79572D9B0F91289 ON model (compan_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE costume DROP FOREIGN KEY FK_3B0EB3DB4107BEA0');
        $this->addSql('DROP INDEX IDX_3B0EB3DB4107BEA0 ON costume');
        $this->addSql('ALTER TABLE costume DROP model_id_id');
        $this->addSql('ALTER TABLE model DROP FOREIGN KEY FK_D79572D9B0F91289');
        $this->addSql('DROP INDEX IDX_D79572D9B0F91289 ON model');
        $this->addSql('ALTER TABLE model DROP compan_id_id');
    }
}
