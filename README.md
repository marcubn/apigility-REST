First 'build' of the project
ToDo 1 - clean the project a little (remove test classes/files etc)
ToDo 2 - refactor code

The project is created on localhost:
http://localhost:8080/apigility/ui#//module/Library/1

The links i used are:

http://test.lan/athor/3
RESPONSE:
{"Author":"Suzanne Collins","Books":["The Hunger Games","Catching Fire","MockingJay"],"_links":{"self":{"href":"http:\/\/localhost:8080\/athor\/3"}}}


http://test.lan/boks/3
RESPONSE:
{"Book Title":"MockingJay","Author":"Suzanne Collins","_links":{"self":{"href":"http:\/\/localhost:8080\/boks\/3"}}}

SOME REFACTORING ARE IN ORDER FOR THE FUTURE (created only the simple calls):

- add validations
- add tests
- remove unused/testing code



SQL:

-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE DATABASE "apigility" -----------------------------
CREATE DATABASE IF NOT EXISTS `apigility` CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `apigility`;
-- ---------------------------------------------------------


-- CREATE TABLE "authors" ----------------------------------
CREATE TABLE `authors` (
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) NOT NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `unique_id` UNIQUE( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- ---------------------------------------------------------


-- Dump data of "authors" ----------------------------------
INSERT INTO `authors`(`id`,`name`) VALUES ( '1', 'Dan Brown' );
INSERT INTO `authors`(`id`,`name`) VALUES ( '2', 'J. K. Rowling' );
INSERT INTO `authors`(`id`,`name`) VALUES ( '3', 'Suzanne Collins' );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


-- CREATE TABLE "books" ------------------------------------
CREATE TABLE `books` (
	`id` Int( 11 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`author_id` Int( 11 ) NOT NULL,
	`title` VarChar( 255 ) NOT NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `unique_id` UNIQUE( `id` ) )
ENGINE = InnoDB
AUTO_INCREMENT = 15;
-- ---------------------------------------------------------


-- Dump data of "books" ------------------------------------
INSERT INTO `books`(`id`,`author_id`,`title`) VALUES ( '1', '3', 'The Hunger Games' );
INSERT INTO `books`(`id`,`author_id`,`title`) VALUES ( '2', '3', 'Catching Fire' );
INSERT INTO `books`(`id`,`author_id`,`title`) VALUES ( '3', '3', 'MockingJay' );
INSERT INTO `books`(`id`,`author_id`,`title`) VALUES ( '4', '2', 'The Philosopher\'s Stone' );
INSERT INTO `books`(`id`,`author_id`,`title`) VALUES ( '5', '2', 'The Chamber of Secrets' );
INSERT INTO `books`(`id`,`author_id`,`title`) VALUES ( '6', '2', 'The Prisoner of Azkaban' );
INSERT INTO `books`(`id`,`author_id`,`title`) VALUES ( '7', '2', 'The Goblet of Fire' );
INSERT INTO `books`(`id`,`author_id`,`title`) VALUES ( '8', '2', 'The Order of the Phoenix' );
INSERT INTO `books`(`id`,`author_id`,`title`) VALUES ( '9', '2', 'The Half-Blood Prince' );
INSERT INTO `books`(`id`,`author_id`,`title`) VALUES ( '10', '2', 'The Deadly Hallows' );
INSERT INTO `books`(`id`,`author_id`,`title`) VALUES ( '11', '1', 'The Da Vinci Code' );
INSERT INTO `books`(`id`,`author_id`,`title`) VALUES ( '12', '1', 'Inferno' );
INSERT INTO `books`(`id`,`author_id`,`title`) VALUES ( '13', '1', 'Angels & Demons' );
INSERT INTO `books`(`id`,`author_id`,`title`) VALUES ( '14', '1', 'Digital Fortress' );
-- ---------------------------------------------------------


-- CREATE INDEX "index_author_id" --------------------------
CREATE INDEX `index_author_id` USING BTREE ON `books`( `author_id` );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


