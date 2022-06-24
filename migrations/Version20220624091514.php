<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220624091514 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE liste_films_films (liste_films_id INT NOT NULL, films_id INT NOT NULL, INDEX IDX_3E4594C38F4B4B14 (liste_films_id), INDEX IDX_3E4594C3939610EE (films_id), PRIMARY KEY(liste_films_id, films_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE liste_films_films ADD CONSTRAINT FK_3E4594C38F4B4B14 FOREIGN KEY (liste_films_id) REFERENCES liste_films (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE liste_films_films ADD CONSTRAINT FK_3E4594C3939610EE FOREIGN KEY (films_id) REFERENCES films (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE liste_films_films');
    }
}
