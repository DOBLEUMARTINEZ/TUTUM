<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220128002412 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE audiencia ADD id_usuario VARCHAR(255) NOT NULL, ADD id_minuta VARCHAR(255) NOT NULL, ADD asistencia VARCHAR(255) NOT NULL, ADD estatus VARCHAR(255) NOT NULL, ADD observacion VARCHAR(1000) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE audiencia DROP id_usuario, DROP id_minuta, DROP asistencia, DROP estatus, DROP observacion');
    }
}
