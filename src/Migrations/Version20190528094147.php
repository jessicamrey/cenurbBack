<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190528094147 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE FavoritosCol DROP FOREIGN KEY fk_FavoritosCol_2');
        $this->addSql('ALTER TABLE FavoritosTerr DROP FOREIGN KEY fk_FavoritosTerr_2');
        $this->addSql('CREATE TABLE SEGUSU (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_4DE82BF0E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE FavoritosCol');
        $this->addSql('DROP TABLE FavoritosTerr');
        $this->addSql('DROP TABLE seg_usu');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE FavoritosCol (colonia INT DEFAULT NULL, usuario VARCHAR(45) DEFAULT NULL COLLATE latin1_swedish_ci, idFavoritosCol INT AUTO_INCREMENT NOT NULL, INDEX fk_FavoritosCol_1_idx (colonia), INDEX fk_FavoritosCol_2_idx (usuario), PRIMARY KEY(idFavoritosCol)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE FavoritosTerr (territorio INT DEFAULT NULL, usuario VARCHAR(45) DEFAULT NULL COLLATE latin1_swedish_ci, idFavoritosTerr INT AUTO_INCREMENT NOT NULL, INDEX fk_FavoritosTerr_1_idx (territorio), INDEX fk_FavoritosTerr_2_idx (usuario), PRIMARY KEY(idFavoritosTerr)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE seg_usu (ID_USU VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, USU_COORD TINYINT(1) DEFAULT NULL, PRIMARY KEY(ID_USU)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE FavoritosCol ADD CONSTRAINT fk_FavoritosCol_1 FOREIGN KEY (colonia) REFERENCES Colonia (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE FavoritosCol ADD CONSTRAINT fk_FavoritosCol_2 FOREIGN KEY (usuario) REFERENCES seg_usu (ID_USU) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE FavoritosTerr ADD CONSTRAINT fk_FavoritosTerr_1 FOREIGN KEY (territorio) REFERENCES Territorio (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE FavoritosTerr ADD CONSTRAINT fk_FavoritosTerr_2 FOREIGN KEY (usuario) REFERENCES seg_usu (ID_USU) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('DROP TABLE SEGUSU');
    }
}
