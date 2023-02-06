<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230205182319 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE issue_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE sprint_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE issue (id INT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, story_point INT DEFAULT NULL, spent_time INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE issue_sprint (issue_id INT NOT NULL, sprint_id INT NOT NULL, PRIMARY KEY(issue_id, sprint_id))');
        $this->addSql('CREATE INDEX IDX_1D70DF905E7AA58C ON issue_sprint (issue_id)');
        $this->addSql('CREATE INDEX IDX_1D70DF908C24077B ON issue_sprint (sprint_id)');
        $this->addSql('CREATE TABLE sprint (id INT NOT NULL, name VARCHAR(255) NOT NULL, start_date DATE DEFAULT NULL, end_date DATE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE issue_sprint ADD CONSTRAINT FK_1D70DF905E7AA58C FOREIGN KEY (issue_id) REFERENCES issue (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE issue_sprint ADD CONSTRAINT FK_1D70DF908C24077B FOREIGN KEY (sprint_id) REFERENCES sprint (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE issue_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE sprint_id_seq CASCADE');
        $this->addSql('ALTER TABLE issue_sprint DROP CONSTRAINT FK_1D70DF905E7AA58C');
        $this->addSql('ALTER TABLE issue_sprint DROP CONSTRAINT FK_1D70DF908C24077B');
        $this->addSql('DROP TABLE issue');
        $this->addSql('DROP TABLE issue_sprint');
        $this->addSql('DROP TABLE sprint');
    }
}
