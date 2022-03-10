<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220310102403 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE prof (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, question1_id INT DEFAULT NULL, question2_id INT DEFAULT NULL, intitule LONGTEXT NOT NULL, prop1 VARCHAR(255) DEFAULT NULL, prop2 VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_B6F7494E8DACA478 (question1_id), UNIQUE INDEX UNIQ_B6F7494E9F190B96 (question2_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E8DACA478 FOREIGN KEY (question1_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E9F190B96 FOREIGN KEY (question2_id) REFERENCES question (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E8DACA478');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E9F190B96');
        $this->addSql('DROP TABLE prof');
        $this->addSql('DROP TABLE question');
    }
}
