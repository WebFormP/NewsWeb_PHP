-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema newsweb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema newsweb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `newsweb` DEFAULT CHARACTER SET utf8 ;
USE `newsweb` ;

-- -----------------------------------------------------
-- Table `newsweb`.`utilisateurs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `newsweb`.`utilisateurs` ;

CREATE TABLE IF NOT EXISTS `newsweb`.`utilisateurs` (
  `util_id` SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `util_nom` VARCHAR(45) NOT NULL,
  `util_login` VARCHAR(45) NOT NULL,
  `util_motdepasse` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`util_id`),
  UNIQUE INDEX `util_login_UNIQUE` (`util_login` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `newsweb`.`articles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `newsweb`.`articles` ;

CREATE TABLE IF NOT EXISTS `newsweb`.`articles` (
  `art_id` SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `art_titre` VARCHAR(100) NOT NULL,
  `art_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `art_resume` VARCHAR(150) NULL,
  `art_texte` TEXT NOT NULL,
  `utilisateurs_util_id` SMALLINT(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`art_id`),
  INDEX `fk_articles_utilisateurs1_idx` (`utilisateurs_util_id` ASC),
  CONSTRAINT `fk_articles_utilisateurs1`
    FOREIGN KEY (`utilisateurs_util_id`)
    REFERENCES `newsweb`.`utilisateurs` (`util_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `newsweb`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `newsweb`.`categories` ;

CREATE TABLE IF NOT EXISTS `newsweb`.`categories` (
  `cat_id` SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cat_nom` VARCHAR(45) NOT NULL,
  `cat_description` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`cat_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `newsweb`.`articles_has_categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `newsweb`.`articles_has_categories` ;

CREATE TABLE IF NOT EXISTS `newsweb`.`articles_has_categories` (
  `articles_art_id` SMALLINT(5) UNSIGNED NOT NULL,
  `categories_cat_id` SMALLINT(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`articles_art_id`, `categories_cat_id`),
  INDEX `fk_articles_has_categories_categories1_idx` (`categories_cat_id` ASC),
  INDEX `fk_articles_has_categories_articles_idx` (`articles_art_id` ASC),
  CONSTRAINT `fk_articles_has_categories_articles`
    FOREIGN KEY (`articles_art_id`)
    REFERENCES `newsweb`.`articles` (`art_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_articles_has_categories_categories1`
    FOREIGN KEY (`categories_cat_id`)
    REFERENCES `newsweb`.`categories` (`cat_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
