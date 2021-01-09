-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 06 jan. 2021 à 18:53
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `idPersonne` int(11) NOT NULL,
  `idLivre` varchar(15) NOT NULL,
  `idRole` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`idPersonne`, `idLivre`, `idRole`) VALUES
(7, '9782756056968', 1),
(6, '9782253151432', 1),
(1, '9791026819523', 1),
(2, '9782874425554', 1),
(3, '9782010009242', 1),
(5, '9782070468089', 1),
(4, '9782013949736', 1),
(8, '9782368520536', 1),
(9, '9782081250833', 1),
(10, '9782070418077', 1),
(11, '9782010009242', 3),
(12, '9782013949736', 4),
(13, '9782070468089', 3),
(14, '9782253151432', 3),
(15, '9782756056968', 3),
(16, '9782368520536', 3),
(17, '9782070418077', 3),
(18, '9782070418077', 2);

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

DROP TABLE IF EXISTS `editeur`;
CREATE TABLE IF NOT EXISTS `editeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `editeur`
--

INSERT INTO `editeur` (`id`, `libelle`) VALUES
(1, 'Urban Comics'),
(2, 'Jungle'),
(3, 'Hachette éducation'),
(4, 'Gallimard'),
(5, 'Le livre de poche'),
(6, 'Le livre de poche jeunesse'),
(7, 'Delcourt'),
(8, 'Kurokawa'),
(9, 'Flammarion'),
(10, 'Denoël');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `libelle` (`libelle`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `libelle`) VALUES
(1, 'Conte'),
(2, 'Roman'),
(3, 'Manga'),
(4, 'BD'),
(5, 'Horreur');

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

DROP TABLE IF EXISTS `langue`;
CREATE TABLE IF NOT EXISTS `langue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `langue`
--

INSERT INTO `langue` (`id`, `libelle`) VALUES
(1, 'Anglais'),
(2, 'Français'),
(3, 'Japonais'),
(4, 'Espagnol'),
(5, 'Italien');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `isbn` varchar(15) NOT NULL,
  `titre` varchar(500) NOT NULL,
  `editeur` int(11) NOT NULL,
  `annee` int(11) DEFAULT NULL,
  `genre` int(11) DEFAULT NULL,
  `langue` int(11) DEFAULT NULL,
  `nbpages` int(11) DEFAULT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`isbn`, `titre`, `editeur`, `annee`, `genre`, `langue`, `nbpages`) VALUES
('9791026819523', 'Justice League', 1, 2019, 4, 2, 560),
('9782874425554', 'Les Simpson : Un sacré foin ', 2, 2014, 4, 2, 160),
('9782010009242', 'Alice au pays des merveilles', 6, 2017, 1, 2, 80),
('9782013949736 ', 'La Belle et la Bête ', 3, 2017, 1, 2, 128),
('9782070468089', 'Frankestein ', 4, 2015, 5, 2, 270),
('9782253151432', 'Simetierre', 5, 2003, 5, 2, 636),
('9782756056968', 'Jojo\'s Bizzares Adventures ', 7, 2015, 3, 2, 224),
('9782368520536', 'My red eyes sword', 8, 2015, 3, 2, 212),
('9782081250833', 'Graal, le chevalier sans nom', 9, 1660, 2, 2, 354),
('9782070418077', 'Je suis une légende', 10, 2001, 2, 2, 228);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `nom`, `prenom`) VALUES
(1, 'Johns', 'Geoff'),
(2, 'Groening', 'Matt'),
(3, 'Caroll', 'Lewis'),
(4, 'Leprince de Beaumont', 'Jeanne-Marie'),
(5, 'Shelley', 'Mary'),
(6, 'King', 'Stephen'),
(7, 'Araki', 'Hirohiko'),
(8, 'Tashiro', 'Tetsuya'),
(9, 'de montella', 'Christian'),
(10, 'Matheson', 'Richard'),
(16, 'Malet', 'Frédéric'),
(15, 'Fujimoto', 'Satoko'),
(14, 'Lasquin', 'François'),
(13, 'Morvan', 'Alain'),
(12, 'De lisle', 'Isabelle'),
(11, 'Laporte', 'Michel'),
(17, 'Serval', 'Nathalie '),
(18, 'Clarenko', 'Georges');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `libelle`) VALUES
(1, 'Ecrivain'),
(2, 'Illustrateur'),
(3, 'Traducteur'),
(4, 'Annoteur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
