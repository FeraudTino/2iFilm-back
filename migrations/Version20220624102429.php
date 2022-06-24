<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220624102429 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE liste_films_films DROP FOREIGN KEY FK_3E4594C38F4B4B14');
        $this->addSql('DROP TABLE liste_films');
        $this->addSql('DROP TABLE liste_films_films');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE liste_films (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, INDEX IDX_D1171EFFA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE liste_films_films (liste_films_id INT NOT NULL, films_id INT NOT NULL, INDEX IDX_3E4594C38F4B4B14 (liste_films_id), INDEX IDX_3E4594C3939610EE (films_id), PRIMARY KEY(liste_films_id, films_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE liste_films ADD CONSTRAINT FK_D1171EFFA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE liste_films_films ADD CONSTRAINT FK_3E4594C38F4B4B14 FOREIGN KEY (liste_films_id) REFERENCES liste_films (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE liste_films_films ADD CONSTRAINT FK_3E4594C3939610EE FOREIGN KEY (films_id) REFERENCES films (id) ON DELETE CASCADE');
    }
}
