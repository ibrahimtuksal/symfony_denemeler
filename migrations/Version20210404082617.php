<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210404082617 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE content DROP INDEX UNIQ_FEC530A94BCE3BCC, ADD INDEX IDX_FEC530A94BCE3BCC (bolge_id)');
        $this->addSql('ALTER TABLE content DROP INDEX UNIQ_FEC530A91EEBCCB7, ADD INDEX IDX_FEC530A91EEBCCB7 (hizmet_id)');
        $this->addSql('ALTER TABLE content ADD created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE mahalle DROP FOREIGN KEY FK_2B200176FF77003C');
        $this->addSql('DROP INDEX IDX_2B200176FF77003C ON mahalle');
        $this->addSql('ALTER TABLE mahalle CHANGE semt_id_id semt_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mahalle ADD CONSTRAINT FK_2B20017642A1334 FOREIGN KEY (semt_id) REFERENCES bolgeler (id)');
        $this->addSql('CREATE INDEX IDX_2B20017642A1334 ON mahalle (semt_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE content DROP INDEX IDX_FEC530A94BCE3BCC, ADD UNIQUE INDEX UNIQ_FEC530A94BCE3BCC (bolge_id)');
        $this->addSql('ALTER TABLE content DROP INDEX IDX_FEC530A91EEBCCB7, ADD UNIQUE INDEX UNIQ_FEC530A91EEBCCB7 (hizmet_id)');
        $this->addSql('ALTER TABLE content DROP created_at');
        $this->addSql('ALTER TABLE mahalle DROP FOREIGN KEY FK_2B20017642A1334');
        $this->addSql('DROP INDEX IDX_2B20017642A1334 ON mahalle');
        $this->addSql('ALTER TABLE mahalle CHANGE semt_id semt_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mahalle ADD CONSTRAINT FK_2B200176FF77003C FOREIGN KEY (semt_id_id) REFERENCES bolgeler (id)');
        $this->addSql('CREATE INDEX IDX_2B200176FF77003C ON mahalle (semt_id_id)');
    }
}
