-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 24 juil. 2024 à 14:30
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `masson_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `article_id` int NOT NULL AUTO_INCREMENT,
  `article_name` varchar(128) NOT NULL,
  `article_level` varchar(16) NOT NULL,
  `article_time` int NOT NULL,
  `article_desc` longtext NOT NULL,
  `categories_section` text NOT NULL,
  `author` text NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`article_id`, `article_name`, `article_level`, `article_time`, `article_desc`, `categories_section`, `author`) VALUES
(1, 'Apprenez A Installez Windows Sur un poste de travail', 'Facile', 45, 'Certains PC sont désormais vendus sans système d\'exploitation. Pour autant, installer Windows 10 dessus est chose aisée', 'Windows', ''),
(2, 'Configurer un post de travail sous Windows', 'Facile', 30, 'Apres avoir installer Windows 10 il est maintenant temps de Configurer votre system', 'Windows', ''),
(3, 'Apprenez A Installez Linux Sur un poste de travail', 'Facile', 45, 'Certains PC sont désormais vendus sans système d\'exploitation. Pour autant, installer un system Linux dessus est chose aisée', 'Linux', ''),
(4, 'Configurer un post de travail sous Linux', 'Facile', 30, 'Apres avoir installer Windows 10 il est maintenant temps de Configurer votre system', 'Linux', '');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `categories_id` int NOT NULL AUTO_INCREMENT,
  `categories_name` varchar(16) NOT NULL,
  `categories_color` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`categories_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_color`) VALUES
(1, 'Windows', 'rgb(37 99 235);'),
(2, 'Linux', 'rgb(219 39 119);');

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `courses_id` int NOT NULL AUTO_INCREMENT,
  `courses_get_id` int NOT NULL,
  `courses_sujet` longtext NOT NULL,
  PRIMARY KEY (`courses_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`courses_id`, `courses_get_id`, `courses_sujet`) VALUES
(1, 1, 'Je suis le sujet sur l\'installation de Windows'),
(2, 2, 'Je suis le sujet sur la configuration de Windows'),
(3, 3, 'Je suis le sujet sur l\'installation  de Linux'),
(4, 4, 'Je suis le sujet sur configuration de Linux');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
