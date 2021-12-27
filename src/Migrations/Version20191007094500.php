<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191007094500 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bibliotheque (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, jeux_id INT DEFAULT NULL, favoris VARCHAR(255) DEFAULT NULL, date VARCHAR(255) DEFAULT NULL, jeux_possedes VARCHAR(255) DEFAULT NULL, jeux_souhaites VARCHAR(255) DEFAULT NULL, INDEX IDX_4690D34DA76ED395 (user_id), INDEX IDX_4690D34DEC2AA9D2 (jeux_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jeux (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, annee_sortie VARCHAR(255) NOT NULL, support VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, editeur VARCHAR(255) NOT NULL, developpeur VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, login VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naissance VARCHAR(255) NOT NULL, motdepasse VARCHAR(255) NOT NULL, role VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bibliotheque ADD CONSTRAINT FK_4690D34DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE bibliotheque ADD CONSTRAINT FK_4690D34DEC2AA9D2 FOREIGN KEY (jeux_id) REFERENCES jeux (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bibliotheque DROP FOREIGN KEY FK_4690D34DEC2AA9D2');
        $this->addSql('ALTER TABLE bibliotheque DROP FOREIGN KEY FK_4690D34DA76ED395');
        $this->addSql('DROP TABLE bibliotheque');
        $this->addSql('DROP TABLE jeux');
        $this->addSql('DROP TABLE user');
    }
}
