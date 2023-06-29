-- Adminer 4.8.1 MySQL 10.10.2-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `txtart` varchar(150) NOT NULL,
  `datestart` datetime NOT NULL,
  `datend` datetime NOT NULL,
  `catim` int(11) NOT NULL DEFAULT 0,
  `AUTHOR_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ARTICLES_AUTHOR1_idx` (`AUTHOR_id`),
  CONSTRAINT `fk_ARTICLES_AUTHOR1` FOREIGN KEY (`AUTHOR_id`) REFERENCES `authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `articles` (`id`, `title`, `txtart`, `datestart`, `datend`, `catim`, `AUTHOR_id`) VALUES
(1,	'les valeurs du sport dans le biathlon',	'Le biathlon une discipline en or',	'2023-06-28 00:00:00',	'2023-07-18 00:00:00',	3,	3),
(2,	'la cuisine ',	'la cuisine est une acitvité de détente qui permet de manger ',	'2023-06-28 00:00:00',	'2023-07-21 00:00:00',	4,	1),
(3,	'review dernière vidéo de tobias',	'vreument la vidéo est d\'une qualité ',	'2023-06-30 00:00:00',	'2023-07-26 00:00:00',	2,	1);

DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `psauthor` varchar(20) NOT NULL,
  `pauthor` varchar(20) DEFAULT NULL,
  `nauthor` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `psauthor_UNIQUE` (`psauthor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `authors` (`id`, `psauthor`, `pauthor`, `nauthor`) VALUES
(1,	'“Matéo”',	NULL,	'degrivot'),
(2,	'Valentine',	NULL,	'husson'),
(3,	'loulou',	'luigi',	'chiappa'),
(4,	'Garry',	'Barry',	'Larry'),
(5,	'Pierre',	'Paul',	'Jack');

DROP TABLE IF EXISTS `categorys`;
CREATE TABLE `categorys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namecat` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `categorys` (`id`, `namecat`) VALUES
(1,	'loisirs'),
(2,	'sport'),
(3,	'jeux'),
(4,	'cuisine');

DROP TABLE IF EXISTS `category_has_articles`;
CREATE TABLE `category_has_articles` (
  `CATEGORY_id` int(11) NOT NULL,
  `ARTICLES_id` int(11) NOT NULL,
  PRIMARY KEY (`CATEGORY_id`,`ARTICLES_id`),
  KEY `fk_CATEGORY_has_ARTICLES_ARTICLES1_idx` (`ARTICLES_id`),
  KEY `fk_CATEGORY_has_ARTICLES_CATEGORY1_idx` (`CATEGORY_id`),
  CONSTRAINT `fk_CATEGORY_has_ARTICLES_ARTICLES1` FOREIGN KEY (`ARTICLES_id`) REFERENCES `articles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_CATEGORY_has_ARTICLES_CATEGORY1` FOREIGN KEY (`CATEGORY_id`) REFERENCES `categorys` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `commentarys`;
CREATE TABLE `commentarys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comart` varchar(150) NOT NULL,
  `datedefault` datetime NOT NULL DEFAULT current_timestamp(),
  `ARTICLES_id` int(11) NOT NULL,
  `AUTHOR_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_COMMENTARY_ARTICLES1_idx` (`ARTICLES_id`),
  KEY `fk_COMMENTARY_AUTHOR1_idx` (`AUTHOR_id`),
  CONSTRAINT `fk_COMMENTARY_ARTICLES1` FOREIGN KEY (`ARTICLES_id`) REFERENCES `articles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_COMMENTARY_AUTHOR1` FOREIGN KEY (`AUTHOR_id`) REFERENCES `authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `commentarys` (`id`, `comart`, `datedefault`, `ARTICLES_id`, `AUTHOR_id`) VALUES
(1,	'vraiment l\'auteur insane',	'2023-06-28 11:52:21',	1,	1),
(2,	'Sans avis',	'2023-06-28 11:54:18',	2,	1),
(3,	'Bravo!!!',	'2023-06-28 11:54:55',	2,	4),
(4,	'Énorme blague',	'2023-06-28 11:57:18',	3,	3);

-- 2023-06-29 07:55:47
