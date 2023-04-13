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
CREATE TABLE IF NOT EXISTS `instrument_project`.`artiste` (
  `artisteID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`artisteID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `instrument_project`.`category_instrument`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `instrument_project`.`category_instrument` (
  `categoryID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cat_instrument` VARCHAR(30) NOT NULL,
  `cat_description` TEXT NOT NULL,
  `cat_img` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`categoryID`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `instrument_project`.`contact`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `instrument_project`.`contact` (
  `contactID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(30) NOT NULL,
  `prenom` VARCHAR(30) NOT NULL,
  `message` VARCHAR(500) NOT NULL,
  `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`contactID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `instrument_project`.`instrument`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `instrument_project`.`instrument` (
  `instrumentID` INT(10) UNSIGNED NOT NULL,
  `categoryID` INT(10) UNSIGNED NOT NULL,
  `titre` VARCHAR(30) NOT NULL,
  `description` TEXT NOT NULL,
  `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `id_test` INT(10) UNSIGNED NOT NULL,
  `category_instrument_categoryID` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`instrumentID`, `category_instrument_categoryID`),
  INDEX `fk_instrument_category_instrument1_idx` (`category_instrument_categoryID` ASC) VISIBLE,
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
CREATE TABLE IF NOT EXISTS `instrument_project`.`instrument_has_artiste` (
  `instrument_instrumentID` INT(10) UNSIGNED NOT NULL,
  `instrument_category_instrument_categoryID` INT(10) UNSIGNED NOT NULL,
  `artiste_artisteID` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`instrument_instrumentID`, `instrument_category_instrument_categoryID`, `artiste_artisteID`),
  INDEX `fk_instrument_has_artiste_artiste1_idx` (`artiste_artisteID` ASC) VISIBLE,
  INDEX `fk_instrument_has_artiste_instrument1_idx` (`instrument_instrumentID` ASC, `instrument_category_instrument_categoryID` ASC) VISIBLE,
  CONSTRAINT `fk_instrument_has_artiste_artiste1`
    FOREIGN KEY (`artiste_artisteID`)
    REFERENCES `instrument_project`.`artiste` (`artisteID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_instrument_has_artiste_instrument1`
    FOREIGN KEY (`instrument_instrumentID` , `instrument_category_instrument_categoryID`)
    REFERENCES `instrument_project`.`instrument` (`instrumentID` , `category_instrument_categoryID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `instrument_project`.`media`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `instrument_project`.`media` (
  `idmedias` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `instrumentID` INT(10) UNSIGNED NOT NULL,
  `type_media` INT(3) NOT NULL COMMENT '1.Image \\r\\n2.Video\\r\\n3.Audio',
  `media_url` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`idmedias`),
  INDEX `instrumentID` (`instrumentID` ASC) VISIBLE,
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
CREATE TABLE IF NOT EXISTS `instrument_project`.`user` (
  `userID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(30) NOT NULL,
  `mail_user` VARCHAR(250) NOT NULL,
  `user_pwd` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`userID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
