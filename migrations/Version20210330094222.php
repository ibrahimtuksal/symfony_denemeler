<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210330094222 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE content ADD hizmet_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE content ADD CONSTRAINT FK_FEC530A91EEBCCB7 FOREIGN KEY (hizmet_id) REFERENCES hizmetler (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FEC530A91EEBCCB7 ON content (hizmet_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE content DROP FOREIGN KEY FK_FEC530A91EEBCCB7');
        $this->addSql('DROP INDEX UNIQ_FEC530A91EEBCCB7 ON content');
        $this->addSql('ALTER TABLE content DROP hizmet_id');
    }
}
