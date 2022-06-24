<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220624082136 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE films ADD mes_films_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE films ADD CONSTRAINT FK_CEECCA51AA8AEE48 FOREIGN KEY (mes_films_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_CEECCA51AA8AEE48 ON films (mes_films_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE films DROP FOREIGN KEY FK_CEECCA51AA8AEE48');
        $this->addSql('DROP INDEX IDX_CEECCA51AA8AEE48 ON films');
        $this->addSql('ALTER TABLE films DROP mes_films_id');
    }
}
