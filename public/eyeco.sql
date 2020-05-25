-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 30 avr. 2020 à 14:27
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eyeco`
--

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `idQuestion` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) NOT NULL,
  `jour` date NOT NULL,
  `question` text NOT NULL,
  `reponse` text DEFAULT NULL,
  PRIMARY KEY (`idQuestion`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`idQuestion`, `identifiant`, `jour`, `question`, `reponse`) VALUES
(5, 'phiphi', '2020-04-19', 'Combien de temps dure les tests ?\r\n', 'le temps qu\'il faut\r\n'),
(6, 'phiphi', '2020-04-19', 'Quand sera fini le confinement ?\r\n', 'yaaa');

-- --------------------------------------------------------

--
-- Structure de la table `online`
--

DROP TABLE IF EXISTS `online`;
CREATE TABLE IF NOT EXISTS `online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `temps` int(11) NOT NULL,
  `userIP` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `online`
--

INSERT INTO `online` (`id`, `temps`, `userIP`) VALUES
(3, 1588256768, '::1');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `idTEST` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) NOT NULL,
  `id_Test` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_Test_composant` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`idTEST`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`idTEST`, `identifiant`, `id_Test`, `date`, `id_Test_composant`, `type`, `score`) VALUES
(1, 'guigui', 1, '2020-04-08', 1, 'gruigrui', 20),
(2, 'guigui', 2, '2020-04-27', 1, 'trui trui', 15),
(3, 'guigui', 3, '2020-04-27', 1, 'trui trui', 150),
(4, 'guigui', 3, '2020-04-27', 2, 'gruik gruik', 330);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `codepilote` int(11) NOT NULL,
  `admin` tinyint(1) DEFAULT 0,
  `identifiant` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `email`, `mdp`, `codepilote`, `admin`, `identifiant`) VALUES
(4, 'dubois', 'guilhem', 'guilhem.dubois@isep.fr', '$2y$10$gz.3DAtBXkWXoFxt5HpiD.prqhpDRPskXkN8PbZYwlqxys8IbrZUO', 2, 1, 'guigui'),
(5, 'Saraiva', 'Philippe', 'philippe.saraiva@isep.fr', '$2y$10$fWg0x2O6v9K.hm08fduameabFGhYVDhyir5.MxG/f1p2NmnSYJ3WS', 4, 0, 'phiphi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
