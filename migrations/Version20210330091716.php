<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210330091716 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bolgeler (id INT AUTO_INCREMENT NOT NULL, isim VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mahalle (id INT AUTO_INCREMENT NOT NULL, semt_id_id INT DEFAULT NULL, isim VARCHAR(255) NOT NULL, INDEX IDX_2B200176FF77003C (semt_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mahalle ADD CONSTRAINT FK_2B200176FF77003C FOREIGN KEY (semt_id_id) REFERENCES bolgeler (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mahalle DROP FOREIGN KEY FK_2B200176FF77003C');
        $this->addSql('DROP TABLE bolgeler');
        $this->addSql('DROP TABLE mahalle');
    }
}
