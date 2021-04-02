<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210401091721 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bolgeler (id INT AUTO_INCREMENT NOT NULL, isim VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE content (id INT AUTO_INCREMENT NOT NULL, bolge_id INT DEFAULT NULL, hizmet_id INT DEFAULT NULL, isim VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, icerik LONGTEXT NOT NULL, keyword VARCHAR(255) NOT NULL, description VARCHAR(350) NOT NULL, UNIQUE INDEX UNIQ_FEC530A94BCE3BCC (bolge_id), UNIQUE INDEX UNIQ_FEC530A91EEBCCB7 (hizmet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hizmetler (id INT AUTO_INCREMENT NOT NULL, isim VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, keyword VARCHAR(255) NOT NULL, description VARCHAR(350) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mahalle (id INT AUTO_INCREMENT NOT NULL, semt_id_id INT DEFAULT NULL, isim VARCHAR(255) NOT NULL, INDEX IDX_2B200176FF77003C (semt_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, fullname VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE content ADD CONSTRAINT FK_FEC530A94BCE3BCC FOREIGN KEY (bolge_id) REFERENCES bolgeler (id)');
        $this->addSql('ALTER TABLE content ADD CONSTRAINT FK_FEC530A91EEBCCB7 FOREIGN KEY (hizmet_id) REFERENCES hizmetler (id)');
        $this->addSql('ALTER TABLE mahalle ADD CONSTRAINT FK_2B200176FF77003C FOREIGN KEY (semt_id_id) REFERENCES bolgeler (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE content DROP FOREIGN KEY FK_FEC530A94BCE3BCC');
        $this->addSql('ALTER TABLE mahalle DROP FOREIGN KEY FK_2B200176FF77003C');
        $this->addSql('ALTER TABLE content DROP FOREIGN KEY FK_FEC530A91EEBCCB7');
        $this->addSql('DROP TABLE bolgeler');
        $this->addSql('DROP TABLE content');
        $this->addSql('DROP TABLE hizmetler');
        $this->addSql('DROP TABLE mahalle');
        $this->addSql('DROP TABLE `user`');
    }
}
