<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201126123427 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE costume ADD models_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE costume ADD CONSTRAINT FK_3B0EB3DBD966BF49 FOREIGN KEY (models_id) REFERENCES model (id)');
        $this->addSql('CREATE INDEX IDX_3B0EB3DBD966BF49 ON costume (models_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE costume DROP FOREIGN KEY FK_3B0EB3DBD966BF49');
        $this->addSql('DROP INDEX IDX_3B0EB3DBD966BF49 ON costume');
        $this->addSql('ALTER TABLE costume DROP models_id');
    }
}
