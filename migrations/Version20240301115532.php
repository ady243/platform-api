<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240301115532 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ingredient DROP CONSTRAINT fk_6baf787064538881');
        $this->addSql('DROP INDEX idx_6baf787064538881');
        $this->addSql('ALTER TABLE ingredient RENAME COLUMN realation_id TO relation_id');
        $this->addSql('ALTER TABLE ingredient ADD CONSTRAINT FK_6BAF78703256915B FOREIGN KEY (relation_id) REFERENCES recipe (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_6BAF78703256915B ON ingredient (relation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE ingredient DROP CONSTRAINT FK_6BAF78703256915B');
        $this->addSql('DROP INDEX IDX_6BAF78703256915B');
        $this->addSql('ALTER TABLE ingredient RENAME COLUMN relation_id TO realation_id');
        $this->addSql('ALTER TABLE ingredient ADD CONSTRAINT fk_6baf787064538881 FOREIGN KEY (realation_id) REFERENCES recipe (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_6baf787064538881 ON ingredient (realation_id)');
    }
}
