-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ProyectoFinal
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ProyectoFinal
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ProyectoFinal` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `ProyectoFinal` ;

-- -----------------------------------------------------
-- Table `ProyectoFinal`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ProyectoFinal`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Nombre` VARCHAR(100) NULL COMMENT '',
  `Apellido` VARCHAR(100) NULL COMMENT '',
  `Edad` INT NULL COMMENT '',
  `telefono` VARCHAR(45) NULL COMMENT '',
  `User` VARCHAR(45) NULL COMMENT '',
  `Password` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idUsuario`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ProyectoFinal`.`Productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ProyectoFinal`.`Productos` (
  `idProductos` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Codigo` VARCHAR(45) NULL COMMENT '',
  `Nombre` VARCHAR(100) NULL COMMENT '',
  `Cantidad` VARCHAR(45) NULL COMMENT '',
  `Usuario_idUsuario` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idProductos`)  COMMENT '',
  INDEX `fk_Productos_Usuario_idx` (`Usuario_idUsuario` ASC)  COMMENT '',
  CONSTRAINT `fk_Productos_Usuario`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `ProyectoFinal`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
