-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema instrument_project
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema instrument_project
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `instrument_project` DEFAULT CHARACTER SET utf8mb4 ;
USE `instrument_project` ;

-- -----------------------------------------------------
-- Table `instrument_project`.`artiste`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `instrument_project`.`artiste` ;

CREATE TABLE IF NOT EXISTS `instrument_project`.`artiste` (
  `artisteID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50) NOT NULL,
  `wiki_url` VARCHAR(250) NULL DEFAULT NULL,
  `website_url` VARCHAR(250) NULL DEFAULT NULL,
  PRIMARY KEY (`artisteID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `instrument_project`.`category_instrument`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `instrument_project`.`category_instrument` ;

CREATE TABLE IF NOT EXISTS `instrument_project`.`category_instrument` (
  `categoryID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cat_instrument` VARCHAR(30) NOT NULL,
  `cat_description` TEXT NOT NULL,
  `cat_img` VARCHAR(250) NULL DEFAULT NULL,
  PRIMARY KEY (`categoryID`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `instrument_project`.`contact`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `instrument_project`.`contact` ;

CREATE TABLE IF NOT EXISTS `instrument_project`.`contact` (
  `contactID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(30) NOT NULL,
  `prenom` VARCHAR(30) NOT NULL,
  `message` VARCHAR(500) NOT NULL,
  `datemsg` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email_contact` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`contactID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `instrument_project`.`instrument`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `instrument_project`.`instrument` ;

CREATE TABLE IF NOT EXISTS `instrument_project`.`instrument` (
  `instrumentID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(30) NOT NULL,
  `description` TEXT NOT NULL,
  `date_instrument` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category_instrument_categoryID` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`instrumentID`),
  INDEX `fk_instrument_category_instrument1_idx` (`category_instrument_categoryID` ASC),
  CONSTRAINT `fk_instrument_category_instrument1`
    FOREIGN KEY (`category_instrument_categoryID`)
    REFERENCES `instrument_project`.`category_instrument` (`categoryID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `instrument_project`.`instrument_has_artiste`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `instrument_project`.`instrument_has_artiste` ;

CREATE TABLE IF NOT EXISTS `instrument_project`.`instrument_has_artiste` (
  `instrument_instrumentID` INT(10) UNSIGNED NOT NULL,
  `artiste_artisteID` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`instrument_instrumentID`, `artiste_artisteID`),
  INDEX `fk_instrument_has_artiste_artiste1_idx` (`artiste_artisteID` ASC),
  INDEX `fk_instrument_has_artiste_instrument1_idx` (`instrument_instrumentID` ASC),
  CONSTRAINT `fk_instrument_has_artiste_artiste1`
    FOREIGN KEY (`artiste_artisteID`)
    REFERENCES `instrument_project`.`artiste` (`artisteID`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_instrument_has_artiste_instrument1`
    FOREIGN KEY (`instrument_instrumentID`)
    REFERENCES `instrument_project`.`instrument` (`instrumentID`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `instrument_project`.`media`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `instrument_project`.`media` ;

CREATE TABLE IF NOT EXISTS `instrument_project`.`media` (
  `idmedias` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `instrumentID` INT(10) UNSIGNED NOT NULL,
  `type_media` INT(3) NOT NULL COMMENT '1.Image \\\\\\\\r\\\\\\\\n2.Video\\\\\\\\r\\\\\\\\n3.Audio',
  `media_url` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`idmedias`),
  INDEX `instrumentID` (`instrumentID` ASC),
  CONSTRAINT `media_ibfk_1`
    FOREIGN KEY (`instrumentID`)
    REFERENCES `instrument_project`.`instrument` (`instrumentID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `instrument_project`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `instrument_project`.`user` ;

CREATE TABLE IF NOT EXISTS `instrument_project`.`user` (
  `userID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(30) NOT NULL,
  `mail_user` VARCHAR(250) NOT NULL,
  `user_pwd` VARCHAR(250) NOT NULL,
  `uniqID` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`userID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
