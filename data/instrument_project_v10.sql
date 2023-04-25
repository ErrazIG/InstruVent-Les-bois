-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mar. 25 avr. 2023 à 12:19
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `instrument_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

DROP TABLE IF EXISTS `artiste`;
CREATE TABLE IF NOT EXISTS `artiste` (
  `artisteID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `wiki_url` varchar(250) DEFAULT NULL,
  `website_url` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`artisteID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `artiste`
--

INSERT INTO `artiste` (`artisteID`, `nom`, `description`, `wiki_url`, `website_url`) VALUES
(1, 'Vincent Lauzer', '', 'https://fr.wikipedia.org/wiki/Vincent_Lauzer', 'http://www.vincentlauzer.com/'),
(2, 'Georges Barrère', '', 'https://fr.wikipedia.org/wiki/Georges_Barr%C3%A8re', NULL),
(3, 'Nathalie Boucheix', '', 'https://fr.wikipedia.org/wiki/Nathalie_Boucheix', NULL),
(4, 'James Cotton', '', 'https://fr.wikipedia.org/wiki/James_Cotton', 'http://jamescottonsuperharp.com/'),
(5, 'Buddy DeFranco', '', 'https://fr.wikipedia.org/wiki/Buddy_DeFranco', 'http://www.buddydefranco.com/'),
(6, 'Josef Horák', '', 'https://fr.wikipedia.org/wiki/Josef_Hor%C3%A1k', 'http://www.horakbasscl.cz/'),
(7, 'Sophie Alour', '', 'https://fr.wikipedia.org/wiki/Sophie_Alour', 'http://www.sophiealour.com/'),
(8, 'Timothée de Thèbes', '', 'https://fr.wikipedia.org/wiki/Timoth%C3%A9e_de_Th%C3%A8bes', NULL),
(9, 'Bruno Giner', '', 'https://fr.wikipedia.org/wiki/Bruno_Giner', 'https://brunoginer.wixsite.com/brunoginer'),
(10, 'Yusef Lateef', '', 'https://fr.wikipedia.org/wiki/Yusef_Lateef', 'https://yuseflateef.com/');

-- --------------------------------------------------------

--
-- Structure de la table `category_instrument`
--

DROP TABLE IF EXISTS `category_instrument`;
CREATE TABLE IF NOT EXISTS `category_instrument` (
  `categoryID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cat_instrument` varchar(30) NOT NULL,
  `cat_description` text NOT NULL,
  `cat_img` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category_instrument`
--

INSERT INTO `category_instrument` (`categoryID`, `cat_instrument`, `cat_description`, `cat_img`) VALUES
(5, 'Biseau', '', NULL),
(6, 'Anche Libre', '', NULL),
(7, 'Anche Simple', '', NULL),
(8, 'Anche Double', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contactID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `message` varchar(500) NOT NULL,
  `datemsg` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email_contact` varchar(250) NOT NULL,
  PRIMARY KEY (`contactID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `instrument`
--

DROP TABLE IF EXISTS `instrument`;
CREATE TABLE IF NOT EXISTS `instrument` (
  `instrumentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `date_instrument` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `category_instrument_categoryID` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`instrumentID`),
  KEY `fk_instrument_category_instrument1_idx` (`category_instrument_categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `instrument`
--

INSERT INTO `instrument` (`instrumentID`, `titre`, `description`, `date_instrument`, `category_instrument_categoryID`) VALUES
(1, 'Flûte à bec', '', '2023-04-25 13:22:23', 5),
(2, 'Flûte traversière', '', '2023-04-25 13:27:29', 5),
(3, 'Accordéon', '', '2023-04-25 13:27:47', 6),
(4, 'Harmonica', '', '2023-04-25 13:28:06', 6),
(5, 'Clarinette', '', '2023-04-25 13:28:24', 7),
(6, 'Clarinette basse', '', '2023-04-25 13:28:35', 7),
(7, 'Saxophone', '', '2023-04-25 13:28:46', 7),
(8, 'Aulos', '', '2023-04-25 13:29:01', 8),
(9, 'Basson', '', '2023-04-25 13:29:11', 8),
(10, 'Hautbois', '', '2023-04-25 13:29:21', 8);

-- --------------------------------------------------------

--
-- Structure de la table `instrument_has_artiste`
--

DROP TABLE IF EXISTS `instrument_has_artiste`;
CREATE TABLE IF NOT EXISTS `instrument_has_artiste` (
  `instrument_instrumentID` int(10) UNSIGNED NOT NULL,
  `artiste_artisteID` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`instrument_instrumentID`,`artiste_artisteID`),
  KEY `fk_instrument_has_artiste_artiste1_idx` (`artiste_artisteID`),
  KEY `fk_instrument_has_artiste_instrument1_idx` (`instrument_instrumentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `instrument_has_artiste`
--

INSERT INTO `instrument_has_artiste` (`instrument_instrumentID`, `artiste_artisteID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `idmedias` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `instrumentID` int(10) UNSIGNED NOT NULL,
  `type_media` int(3) NOT NULL COMMENT '1.Image \\\\\\\\r\\\\\\\\n2.Video\\\\\\\\r\\\\\\\\n3.Audio',
  `media_url` varchar(250) NOT NULL,
  PRIMARY KEY (`idmedias`),
  KEY `instrumentID` (`instrumentID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `mail_user` varchar(250) NOT NULL,
  `user_pwd` varchar(250) NOT NULL,
  `uniqID` varchar(100) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`userID`, `username`, `mail_user`, `user_pwd`, `uniqID`) VALUES
(1, 'admin', 'fredcraft97@hotmail.fr', '$2y$10$61FishRonkmg9yRIupkXWeA35YCujTT.xwxpwTfrN/msN49fLOgr.', 'bois6440ecfb5f8868.17680220');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `instrument`
--
ALTER TABLE `instrument`
  ADD CONSTRAINT `fk_instrument_category_instrument1` FOREIGN KEY (`category_instrument_categoryID`) REFERENCES `category_instrument` (`categoryID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `instrument_has_artiste`
--
ALTER TABLE `instrument_has_artiste`
  ADD CONSTRAINT `fk_instrument_has_artiste_artiste1` FOREIGN KEY (`artiste_artisteID`) REFERENCES `artiste` (`artisteID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_instrument_has_artiste_instrument1` FOREIGN KEY (`instrument_instrumentID`) REFERENCES `instrument` (`instrumentID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`instrumentID`) REFERENCES `instrument` (`instrumentID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
