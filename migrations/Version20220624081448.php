<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220624081448 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE me_films_films DROP FOREIGN KEY FK_FB13D3469C56E4C7');
        $this->addSql('ALTER TABLE me_films_user DROP FOREIGN KEY FK_C7223B619C56E4C7');
        $this->addSql('DROP TABLE me_films');
        $this->addSql('DROP TABLE me_films_films');
        $this->addSql('DROP TABLE me_films_user');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE me_films (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE me_films_films (me_films_id INT NOT NULL, films_id INT NOT NULL, INDEX IDX_FB13D3469C56E4C7 (me_films_id), INDEX IDX_FB13D346939610EE (films_id), PRIMARY KEY(me_films_id, films_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE me_films_user (me_films_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_C7223B619C56E4C7 (me_films_id), INDEX IDX_C7223B61A76ED395 (user_id), PRIMARY KEY(me_films_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE me_films_films ADD CONSTRAINT FK_FB13D346939610EE FOREIGN KEY (films_id) REFERENCES films (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE me_films_films ADD CONSTRAINT FK_FB13D3469C56E4C7 FOREIGN KEY (me_films_id) REFERENCES me_films (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE me_films_user ADD CONSTRAINT FK_C7223B619C56E4C7 FOREIGN KEY (me_films_id) REFERENCES me_films (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE me_films_user ADD CONSTRAINT FK_C7223B61A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }
}
