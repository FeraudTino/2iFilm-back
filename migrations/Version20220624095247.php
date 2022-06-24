<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220624095247 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE films DROP FOREIGN KEY FK_CEECCA518F4B4B14');
        $this->addSql('DROP INDEX IDX_CEECCA518F4B4B14 ON films');
        $this->addSql('ALTER TABLE films DROP liste_films_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE films ADD liste_films_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE films ADD CONSTRAINT FK_CEECCA518F4B4B14 FOREIGN KEY (liste_films_id) REFERENCES liste_films (id)');
        $this->addSql('CREATE INDEX IDX_CEECCA518F4B4B14 ON films (liste_films_id)');
    }
}
