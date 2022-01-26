<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220126211248 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE minuta CHANGE fecha_inicio fecha_inicio VARCHAR(255) NOT NULL, CHANGE fecha_fin fecha_fin VARCHAR(255) NOT NULL, CHANGE proxima_reunion proxima_reunion VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE minuta CHANGE fecha_inicio fecha_inicio DATETIME NOT NULL, CHANGE fecha_fin fecha_fin TIME NOT NULL, CHANGE proxima_reunion proxima_reunion DATETIME NOT NULL');
    }
}
