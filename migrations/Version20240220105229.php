<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240220105229 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE financial_hub_invest (id INT AUTO_INCREMENT NOT NULL, image VARCHAR(255) NOT NULL, nom_invest VARCHAR(255) NOT NULL, description_invest VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE financial_hub_portfolio (id INT AUTO_INCREMENT NOT NULL, fhiid_id INT NOT NULL, nom_portfolio VARCHAR(255) NOT NULL, INDEX IDX_68B2D3865D62430F (fhiid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE financial_hub_portfolio ADD CONSTRAINT FK_68B2D3865D62430F FOREIGN KEY (fhiid_id) REFERENCES financial_hub_invest (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE financial_hub_portfolio DROP FOREIGN KEY FK_68B2D3865D62430F');
        $this->addSql('DROP TABLE financial_hub_invest');
        $this->addSql('DROP TABLE financial_hub_portfolio');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
