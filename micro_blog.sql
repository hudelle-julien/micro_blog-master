-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 19 jan. 2018 à 22:54
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `micro_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `date` int(100) NOT NULL,
  `id_utilisateurs` int(11) NOT NULL,
  `votes` int(11) DEFAULT NULL,
  `derniereIP` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_utilisateurs` (`id_utilisateurs`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `date`, `id_utilisateurs`, `votes`, `derniereIP`) VALUES
(1329, 'Ce qui est plutÃ´t Ã©trange...', 1516401912, 1253, NULL, NULL),
(1065, 'Il me rajoute un \'s\' Ã  la fin de mes messages', 1516401903, 1253, NULL, NULL),
(256, 'Bon Ã§a a l\'air de fonctionner', 1516401881, 1253, NULL, NULL),
(70, 'Test', 1516401868, 1253, NULL, NULL),
(1392, 'Test3', 1516401973, 294, NULL, NULL),
(66, 'Bon Ã§a va je pense', 1516401980, 294, NULL, NULL),
(1033, 'La pagination a l\'air correcte', 1516401992, 294, NULL, NULL),
(246, 'Btw, vous attardez pas sur les dates, j\'ai tout effacÃ© avant de retester', 1516402011, 294, NULL, NULL),
(1775, 'Encore un message pour une troisiÃ¨me page', 1516402024, 294, NULL, NULL),
(891, 'Parfait', 1516402031, 294, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `sid` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `mdp`, `pseudo`, `sid`) VALUES
(294, 'DelaCancreluche', 'Jean-Jacques', 'cra@gmail.com', '51f7b4150aece7d0f6d45d8f00b8184e', 'Craaaaa', 'bb98ff12cf774d2a5c295ea6606a47b5'),
(454, 'Lannoy', 'JP', 'jp.lannoy@nilsine.fr', '9165a3ad1267dbcc6d6e00f03b7030a8', 'JPL', '3ebefb07785b0483823ccd807fac5445'),
(595, 'Chretien', 'Simon', 'sc@gmail.com', 'a671fa80a14d868c808f6f4c6f3b5783', 'SC', NULL),
(1253, 'Hudelle', 'Julien', 'julien.hudelle@gmail.com', '04d51b1fa455c1df8c3cbff04a5daafa', 'Jenova', '531c882a6e37a7b10c6b0fb532c3a2e7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
