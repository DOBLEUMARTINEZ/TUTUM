<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220126205221 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE minuta ADD objectivo VARCHAR(255) NOT NULL, ADD fecha_inicio DATETIME NOT NULL, ADD fecha_fin DATETIME NOT NULL, ADD proxima_reunion DATETIME NOT NULL, ADD itinerario VARCHAR(5000) NOT NULL, ADD autorizacion VARCHAR(255) NOT NULL, ADD estatus VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE minuta DROP objectivo, DROP fecha_inicio, DROP fecha_fin, DROP proxima_reunion, DROP itinerario, DROP autorizacion, DROP estatus');
    }
}
