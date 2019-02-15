-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- DROP DATABASE "geekhub" ---------------------------------
DROP DATABASE IF EXISTS `geekhub`;
-- ---------------------------------------------------------


-- CREATE DATABASE "geekhub" -------------------------------
CREATE DATABASE `geekhub` CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `geekhub`;
-- ---------------------------------------------------------


-- CREATE TABLE "save_hw3_form" --------------------------------
CREATE TABLE `save_hw3_form` ( 
	`id` Int( 255 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 55 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`surname` VarChar( 75 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`html_book` VarChar( 120 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`comments` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`gender` VarChar( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	`age` Int( 255 ) NOT NULL,
	`sex` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`date` DateTime NOT NULL,
	`marital` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`social` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`home` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`weekend` JSON NOT NULL,
	`books` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`position` VarChar( 20 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`entered` VarChar( 30 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`email` VarChar( 70 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`spam` JSON NOT NULL,
	`task` JSON NOT NULL,
	CONSTRAINT `unique_id` UNIQUE( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- -------------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


