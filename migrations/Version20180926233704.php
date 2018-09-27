<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180926233704 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Schools (id SMALLINT AUTO_INCREMENT NOT NULL, district_id SMALLINT NOT NULL, name VARCHAR(255) NOT NULL, cds_code VARCHAR(255) NOT NULL, INDEX IDX_88F90249B08FA272 (district_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE RawData (id SMALLINT AUTO_INCREMENT NOT NULL, CDS_CODE VARCHAR(255) NOT NULL, COUNTY VARCHAR(255) NOT NULL, DISTRICT VARCHAR(255) NOT NULL, SCHOOL VARCHAR(255) NOT NULL, ETHNIC VARCHAR(255) NOT NULL, GENDER VARCHAR(255) NOT NULL, KDGN INT NOT NULL, GR_1 INT NOT NULL, GR_2 INT NOT NULL, GR_3 INT NOT NULL, GR_4 INT NOT NULL, GR_5 INT NOT NULL, GR_6 INT NOT NULL, GR_7 INT NOT NULL, GR_8 INT NOT NULL, GR_9 INT NOT NULL, GR_10 INT NOT NULL, GR_11 INT NOT NULL, GR_12 INT NOT NULL, UNGR_ELM INT NOT NULL, UNGR_SEC INT NOT NULL, ENR_TOTAL INT NOT NULL, ADULT INT NOT NULL, YEAR VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Counties (id SMALLINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE SchoolGradeCounts (id SMALLINT AUTO_INCREMENT NOT NULL, school_id SMALLINT NOT NULL, year INT NOT NULL, kdgn INT NOT NULL, gr_1 INT NOT NULL, gr_2 INT NOT NULL, gr_3 INT NOT NULL, gr_4 INT NOT NULL, gr_5 INT NOT NULL, gr_6 INT NOT NULL, gr_7 INT NOT NULL, gr_8 INT NOT NULL, gr_9 INT NOT NULL, gr_10 INT NOT NULL, gr_11 INT NOT NULL, gr_12 INT NOT NULL, ungr_elm INT NOT NULL, ungr_sec INT NOT NULL, enr_total INT NOT NULL, adult INT NOT NULL, INDEX IDX_566F401FC32A47EE (school_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Districts (id SMALLINT AUTO_INCREMENT NOT NULL, county_id SMALLINT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_EA129A7F85E73F45 (county_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Schools ADD CONSTRAINT FK_88F90249B08FA272 FOREIGN KEY (district_id) REFERENCES Districts (id)');
        $this->addSql('ALTER TABLE SchoolGradeCounts ADD CONSTRAINT FK_566F401FC32A47EE FOREIGN KEY (school_id) REFERENCES Schools (id)');
        $this->addSql('ALTER TABLE Districts ADD CONSTRAINT FK_EA129A7F85E73F45 FOREIGN KEY (county_id) REFERENCES Counties (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE SchoolGradeCounts DROP FOREIGN KEY FK_566F401FC32A47EE');
        $this->addSql('ALTER TABLE Districts DROP FOREIGN KEY FK_EA129A7F85E73F45');
        $this->addSql('ALTER TABLE Schools DROP FOREIGN KEY FK_88F90249B08FA272');
        $this->addSql('DROP TABLE Schools');
        $this->addSql('DROP TABLE RawData');
        $this->addSql('DROP TABLE Counties');
        $this->addSql('DROP TABLE SchoolGradeCounts');
        $this->addSql('DROP TABLE Districts');
    }
}
