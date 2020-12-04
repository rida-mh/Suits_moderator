<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201203141659 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, name_res VARCHAR(255) NOT NULL, create_date DATETIME NOT NULL, size INT NOT NULL, color VARCHAR(255) NOT NULL, size_pants INT NOT NULL, length_pant INT NOT NULL, size_jacket INT NOT NULL, size_shoe INT NOT NULL, color_shoe VARCHAR(255) NOT NULL, type_crav_pap TINYINT(1) NOT NULL, num_tele VARCHAR(255) NOT NULL, name_client VARCHAR(255) NOT NULL, id_cart VARCHAR(255) NOT NULL, price INT NOT NULL, advanced INT NOT NULL, rest INT NOT NULL, note VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reservation');
    }
}
