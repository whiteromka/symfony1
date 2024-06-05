<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240515144902 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $sql = 'ALTER TABLE blog ADD descr VARCHAR(255);';
        $this->addSql($sql);
    }

    public function down(Schema $schema): void
    {
        $sql = 'ALTER TABLE blog DROP COLUMN descr;';
        $this->addSql($sql);
    }
}
