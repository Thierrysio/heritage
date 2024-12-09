<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241209092959 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE complex_products_cti (id INT NOT NULL, composant VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE productscti (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, price INT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE simple_product_cti (id INT NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE complex_products_cti ADD CONSTRAINT FK_BA23FF24BF396750 FOREIGN KEY (id) REFERENCES productscti (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE simple_product_cti ADD CONSTRAINT FK_DAAFDE64BF396750 FOREIGN KEY (id) REFERENCES productscti (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE complex_products_cti DROP FOREIGN KEY FK_BA23FF24BF396750');
        $this->addSql('ALTER TABLE simple_product_cti DROP FOREIGN KEY FK_DAAFDE64BF396750');
        $this->addSql('DROP TABLE complex_products_cti');
        $this->addSql('DROP TABLE productscti');
        $this->addSql('DROP TABLE simple_product_cti');
    }
}
