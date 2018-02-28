<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180227123646 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE airport (id INT AUTO_INCREMENT NOT NULL, city VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE flight (id INT AUTO_INCREMENT NOT NULL, airport_from_id INT DEFAULT NULL, airport_to_id INT DEFAULT NULL, number NUMERIC(10, 2) DEFAULT NULL, date_from DATETIME DEFAULT NULL, date_to DATETIME DEFAULT NULL, duration NUMERIC(10, 2) DEFAULT NULL, price NUMERIC(10, 2) DEFAULT NULL, INDEX IDX_C257E60E504E723 (airport_from_id), INDEX IDX_C257E60E47AA5690 (airport_to_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, text VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT NULL, udapted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE passenger (id INT AUTO_INCREMENT NOT NULL, reservation_id INT DEFAULT NULL, civility VARCHAR(255) DEFAULT NULL, birthdate DATETIME DEFAULT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, INDEX IDX_3BEFE8DDB83297E7 (reservation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, flight_id INT DEFAULT NULL, number NUMERIC(10, 2) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, date_from DATETIME DEFAULT NULL, date_to DATETIME DEFAULT NULL, created_at DATETIME DEFAULT NULL, passengers VARCHAR(255) DEFAULT NULL, INDEX IDX_42C84955A76ED395 (user_id), INDEX IDX_42C8495591F478C5 (flight_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE flight ADD CONSTRAINT FK_C257E60E504E723 FOREIGN KEY (airport_from_id) REFERENCES airport (id)');
        $this->addSql('ALTER TABLE flight ADD CONSTRAINT FK_C257E60E47AA5690 FOREIGN KEY (airport_to_id) REFERENCES airport (id)');
        $this->addSql('ALTER TABLE passenger ADD CONSTRAINT FK_3BEFE8DDB83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495591F478C5 FOREIGN KEY (flight_id) REFERENCES flight (id)');
        $this->addSql('ALTER TABLE user ADD reservations VARCHAR(255) DEFAULT NULL, ADD phone VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE flight DROP FOREIGN KEY FK_C257E60E504E723');
        $this->addSql('ALTER TABLE flight DROP FOREIGN KEY FK_C257E60E47AA5690');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495591F478C5');
        $this->addSql('ALTER TABLE passenger DROP FOREIGN KEY FK_3BEFE8DDB83297E7');
        $this->addSql('DROP TABLE airport');
        $this->addSql('DROP TABLE flight');
        $this->addSql('DROP TABLE page');
        $this->addSql('DROP TABLE passenger');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('ALTER TABLE user DROP reservations, DROP phone');
    }
}
