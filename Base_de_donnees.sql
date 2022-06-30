-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 30 juin 2022 à 13:31
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_des_examens`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

DROP TABLE IF EXISTS `candidat`;
CREATE TABLE IF NOT EXISTS `candidat` (
  `ID_CANDIDAT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PAYS` bigint(4) NOT NULL,
  `USERNAME` varchar(128) DEFAULT NULL,
  `MOT_DE_PASSE` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`ID_CANDIDAT`),
  KEY `I_FK_CANDIDAT_PAYS` (`ID_PAYS`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`ID_CANDIDAT`, `ID_PAYS`, `USERNAME`, `MOT_DE_PASSE`) VALUES
(1, 1, 'PAKA', 'GHJK'),
(2, 2, 'NONO', 'FGHJ');

-- --------------------------------------------------------

--
-- Structure de la table `concerne`
--

DROP TABLE IF EXISTS `concerne`;
CREATE TABLE IF NOT EXISTS `concerne` (
  `ID_FORMATION` int(11) NOT NULL,
  `ID_EPREUVE` int(11) NOT NULL,
  PRIMARY KEY (`ID_FORMATION`,`ID_EPREUVE`),
  KEY `I_FK_CONCERNE_FORMATION` (`ID_FORMATION`),
  KEY `I_FK_CONCERNE_EPREUVE` (`ID_EPREUVE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `concerne`
--

INSERT INTO `concerne` (`ID_FORMATION`, `ID_EPREUVE`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `ID_EPREUVE` int(11) NOT NULL,
  `NUM_QUESTION` bigint(4) NOT NULL,
  `NBRE_POINT` bigint(100) DEFAULT NULL,
  PRIMARY KEY (`ID_EPREUVE`,`NUM_QUESTION`),
  KEY `I_FK_CONTENIR_EPREUVE` (`ID_EPREUVE`),
  KEY `I_FK_CONTENIR_QUESTION` (`NUM_QUESTION`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contenir`
--

INSERT INTO `contenir` (`ID_EPREUVE`, `NUM_QUESTION`, `NBRE_POINT`) VALUES
(1, 1, 100),
(1, 2, 100);

-- --------------------------------------------------------

--
-- Structure de la table `effectuer`
--

DROP TABLE IF EXISTS `effectuer`;
CREATE TABLE IF NOT EXISTS `effectuer` (
  `ID_CANDIDAT` int(11) NOT NULL,
  `ID_FORMATION` int(11) NOT NULL,
  `DURER` time DEFAULT NULL,
  `PERIODE` date DEFAULT NULL,
  PRIMARY KEY (`ID_CANDIDAT`,`ID_FORMATION`),
  KEY `I_FK_EFFECTUER_CANDIDAT` (`ID_CANDIDAT`),
  KEY `I_FK_EFFECTUER_FORMATION` (`ID_FORMATION`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `effectuer`
--

INSERT INTO `effectuer` (`ID_CANDIDAT`, `ID_FORMATION`, `DURER`, `PERIODE`) VALUES
(1, 1, '14:22:13', '2022-07-04'),
(2, 2, '14:58:56', '2022-07-04');

-- --------------------------------------------------------

--
-- Structure de la table `epreuve`
--

DROP TABLE IF EXISTS `epreuve`;
CREATE TABLE IF NOT EXISTS `epreuve` (
  `ID_EPREUVE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_EPREUVE` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID_EPREUVE`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `epreuve`
--

INSERT INTO `epreuve` (`ID_EPREUVE`, `NOM_EPREUVE`) VALUES
(1, 'EPREUVE PREPARATOIRE ITIL'),
(2, 'EPREUVE PREPARATOIRE TOGAF');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `ID_FORMATION` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_FORMATION` varchar(128) DEFAULT NULL,
  `NBRE_QUESTION` bigint(123) DEFAULT NULL,
  PRIMARY KEY (`ID_FORMATION`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`ID_FORMATION`, `NOM_FORMATION`, `NBRE_QUESTION`) VALUES
(1, 'ITIL', 40),
(2, 'TOGAF', 40);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `ID_PAYS` bigint(4) NOT NULL AUTO_INCREMENT,
  `NOM_PAYS` char(255) DEFAULT NULL,
  PRIMARY KEY (`ID_PAYS`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`ID_PAYS`, `NOM_PAYS`) VALUES
(1, 'CAMEROUN'),
(2, 'FRANCE');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `NUM_QUESTION` bigint(4) NOT NULL AUTO_INCREMENT,
  `ID_PAYS` bigint(4) NOT NULL,
  `NOM_QUESTION` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`NUM_QUESTION`),
  KEY `I_FK_QUESTION_REPONSE` (`ID_PAYS`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`NUM_QUESTION`, `ID_PAYS`, `NOM_QUESTION`) VALUES
(1, 1, 'REPONDRE PAR FAUX OU VRAI'),
(2, 2, 'REPONDRE PAR FAUX OU VRAI');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `ID_PAYS` bigint(4) NOT NULL AUTO_INCREMENT,
  `NOM_PAYS` varchar(128) DEFAULT NULL,
  `REPONSE_VRAI` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`ID_PAYS`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`ID_PAYS`, `NOM_PAYS`, `REPONSE_VRAI`) VALUES
(1, 'CAMEROUN', '30'),
(2, 'FRANCE', '15');

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

DROP TABLE IF EXISTS `resultat`;
CREATE TABLE IF NOT EXISTS `resultat` (
  `ID_RESULTAT` bigint(4) NOT NULL AUTO_INCREMENT,
  `ID_EPREUVE` int(11) NOT NULL,
  `ID_CANDIDAT` int(11) NOT NULL,
  `NBRE_POINT_VRAI` bigint(123) DEFAULT NULL,
  `NBRE_POINT_FAUX` bigint(123) DEFAULT NULL,
  PRIMARY KEY (`ID_RESULTAT`),
  KEY `I_FK_RESULTAT_EPREUVE` (`ID_EPREUVE`),
  KEY `I_FK_RESULTAT_CANDIDAT` (`ID_CANDIDAT`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `resultat`
--

INSERT INTO `resultat` (`ID_RESULTAT`, `ID_EPREUVE`, `ID_CANDIDAT`, `NBRE_POINT_VRAI`, `NBRE_POINT_FAUX`) VALUES
(1, 1, 1, 30, 10),
(2, 1, 2, 25, 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
