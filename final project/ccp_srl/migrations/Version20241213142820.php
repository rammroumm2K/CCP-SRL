<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241213142820 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE supplier_tag (supplier_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_8C79CD762ADD6D8C (supplier_id), INDEX IDX_8C79CD76BAD26311 (tag_id), PRIMARY KEY(supplier_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE supplier_tag ADD CONSTRAINT FK_8C79CD762ADD6D8C FOREIGN KEY (supplier_id) REFERENCES supplier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE supplier_tag ADD CONSTRAINT FK_8C79CD76BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE supplier_tag DROP FOREIGN KEY FK_8C79CD762ADD6D8C');
        $this->addSql('ALTER TABLE supplier_tag DROP FOREIGN KEY FK_8C79CD76BAD26311');
        $this->addSql('DROP TABLE supplier_tag');
    }
}
