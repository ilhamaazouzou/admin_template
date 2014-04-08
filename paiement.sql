-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Jeu 06 Juin 2013 à 15:22
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `paiement`
--

-- --------------------------------------------------------

--
-- Structure de la table `annee`
--

CREATE TABLE IF NOT EXISTS `annee` (
  `id_annee` int(10) NOT NULL AUTO_INCREMENT,
  `Annee` varchar(20) NOT NULL,
  PRIMARY KEY (`id_annee`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `annee`
--

INSERT INTO `annee` (`id_annee`, `Annee`) VALUES
(1, '2013'),
(2, '2013-2014'),
(3, '2014-2015'),
(4, '2015-2016');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE IF NOT EXISTS `classe` (
  `id_classe` int(10) NOT NULL AUTO_INCREMENT,
  `nom_classe` varchar(50) NOT NULL,
  PRIMARY KEY (`id_classe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `classe`
--

INSERT INTO `classe` (`id_classe`, `nom_classe`) VALUES
(1, 'GL'),
(2, 'ISR'),
(3, 'AAI'),
(4, 'APIB');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE IF NOT EXISTS `compte` (
  `id_compte` int(20) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `id_role` int(20) NOT NULL,
  PRIMARY KEY (`id_compte`),
  KEY `id_role` (`id_role`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`id_compte`, `login`, `pass`, `id_role`) VALUES
(35, 're', 're', 1),
(36, 'se', 'se', 1),
(37, 'sd', 'a', 1),
(38, 'svxhqs', 'e', 1),
(39, 'dbhcfjds', 'd', 1),
(41, 'shbdjqs', 'art', 1),
(42, 'ilham', 'ilham', 2),
(43, 'manal', 'manal', 1),
(45, 'admin', 'admin', 1),
(46, 'ff', 'ff', 2);

-- --------------------------------------------------------

--
-- Structure de la table `droit`
--

CREATE TABLE IF NOT EXISTS `droit` (
  `id_droit` int(50) NOT NULL AUTO_INCREMENT,
  `nom_droit` varchar(50) NOT NULL,
  `droitglobal` varchar(50) NOT NULL,
  PRIMARY KEY (`id_droit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `droit`
--

INSERT INTO `droit` (`id_droit`, `nom_droit`, `droitglobal`) VALUES
(1, 'consulter les utilisateurs', ''),
(2, 'ajouter compte', '1'),
(3, 'supprimer les compte', '1'),
(4, 'modifier les comptes', '1'),
(5, 'Consulter les roles ', ''),
(6, 'ajouter role', '5'),
(7, 'modifier le role et les droit ', '5'),
(8, 'supprimer un role et ces droits', '5');

-- --------------------------------------------------------

--
-- Structure de la table `droit_role`
--

CREATE TABLE IF NOT EXISTS `droit_role` (
  `id_role` int(20) NOT NULL,
  `id_droit` int(20) NOT NULL,
  PRIMARY KEY (`id_role`,`id_droit`),
  KEY `id_droit` (`id_droit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `droit_role`
--

INSERT INTO `droit_role` (`id_role`, `id_droit`) VALUES
(1, 1),
(2, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 5),
(1, 6),
(1, 7),
(1, 8);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE IF NOT EXISTS `facture` (
  `id_facture` int(50) NOT NULL AUTO_INCREMENT,
  `date_facture` varchar(50) NOT NULL,
  `totalFacture` double NOT NULL,
  `remiseFacture` double NOT NULL,
  `id_inscription` int(50) NOT NULL,
  `id_mois` int(50) NOT NULL,
  `montant_depose` int(20) NOT NULL,
  PRIMARY KEY (`id_facture`),
  KEY `fac1` (`id_inscription`),
  KEY `id_mois` (`id_mois`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=144 ;

--
-- Contenu de la table `facture`
--

INSERT INTO `facture` (`id_facture`, `date_facture`, `totalFacture`, `remiseFacture`, `id_inscription`, `id_mois`, `montant_depose`) VALUES
(143, '06-06-2013', 2080, 11, 29, 1, 1233);

-- --------------------------------------------------------

--
-- Structure de la table `frais`
--

CREATE TABLE IF NOT EXISTS `frais` (
  `id_frais` int(50) NOT NULL AUTO_INCREMENT,
  `nom_frais` varchar(50) NOT NULL,
  `montant` int(50) NOT NULL,
  PRIMARY KEY (`id_frais`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `frais`
--

INSERT INTO `frais` (`id_frais`, `nom_frais`, `montant`) VALUES
(1, 'Scolarité', 0),
(2, 'Transport', 0);

-- --------------------------------------------------------

--
-- Structure de la table `frais_facture`
--

CREATE TABLE IF NOT EXISTS `frais_facture` (
  `id_frais` int(50) NOT NULL,
  `id_facture` int(50) NOT NULL,
  `valeur` int(50) NOT NULL,
  PRIMARY KEY (`id_frais`,`id_facture`),
  KEY `fa1` (`id_facture`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `frais_mois`
--

CREATE TABLE IF NOT EXISTS `frais_mois` (
  `id_inscription` int(11) NOT NULL,
  `id_frais` int(11) NOT NULL,
  `id_mois` int(11) NOT NULL,
  `remise` double NOT NULL,
  `regle` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id_inscription`,`id_frais`,`id_mois`),
  KEY `id_frais` (`id_frais`),
  KEY `id_mois` (`id_mois`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `frais_mois`
--

INSERT INTO `frais_mois` (`id_inscription`, `id_frais`, `id_mois`, `remise`, `regle`) VALUES
(29, 1, 1, 11, b'0'),
(29, 1, 2, 0, b'0'),
(29, 1, 3, 0, b'1'),
(29, 2, 3, 0, b'1');

-- --------------------------------------------------------

--
-- Structure de la table `frais_niveau`
--

CREATE TABLE IF NOT EXISTS `frais_niveau` (
  `id_frais` int(11) NOT NULL,
  `id_niveau` int(11) NOT NULL,
  `montantFrais` double NOT NULL,
  PRIMARY KEY (`id_frais`,`id_niveau`),
  KEY `id_niveau` (`id_niveau`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `frais_niveau`
--

INSERT INTO `frais_niveau` (`id_frais`, `id_niveau`, `montantFrais`) VALUES
(1, 1, 2000),
(1, 2, 2400),
(1, 3, 2900),
(2, 1, 300),
(2, 2, 300),
(2, 3, 300);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `id_inscription` int(50) NOT NULL AUTO_INCREMENT,
  `num_inscription` int(50) NOT NULL,
  `id_classe` int(10) NOT NULL,
  `id_niveau` int(11) NOT NULL,
  `date_inscription` text NOT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `cne` varchar(20) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `id_compte` int(20) NOT NULL,
  `id_annee` int(10) NOT NULL,
  `compte_prix` int(50) NOT NULL,
  PRIMARY KEY (`id_inscription`),
  KEY `fkk1` (`id_compte`),
  KEY `fkk2` (`id_annee`),
  KEY `dd` (`id_classe`),
  KEY `FK_inscription_niveau` (`id_niveau`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`id_inscription`, `num_inscription`, `id_classe`, `id_niveau`, `date_inscription`, `nom`, `prenom`, `cne`, `adresse`, `telephone`, `id_compte`, `id_annee`, `compte_prix`) VALUES
(12, 234, 1, 1, '', 'dscds', 'sdcs', '32532', 'hsjcs', 'dvcdsvc', 35, 1, 0),
(29, 3454, 1, 1, '01/05/2013', 'aazouozu', 'ilham', '5R5667', 'hgbc', '1234567', 42, 1, 12);

-- --------------------------------------------------------

--
-- Structure de la table `mois`
--

CREATE TABLE IF NOT EXISTS `mois` (
  `id_mois` int(50) NOT NULL AUTO_INCREMENT,
  `nom_mois` varchar(10) NOT NULL,
  PRIMARY KEY (`id_mois`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `mois`
--

INSERT INTO `mois` (`id_mois`, `nom_mois`) VALUES
(1, 'Janvier'),
(2, 'Fevrier'),
(3, 'Mars'),
(4, 'Avril'),
(5, 'Mai'),
(6, 'Juin'),
(7, 'Juillet'),
(8, 'Août'),
(9, 'Septembre'),
(10, 'Octobre'),
(11, 'Novembre'),
(12, 'Decembre');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE IF NOT EXISTS `niveau` (
  `id_niveau` int(11) NOT NULL AUTO_INCREMENT,
  `nom_niveau` varchar(50) NOT NULL,
  PRIMARY KEY (`id_niveau`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `niveau`
--

INSERT INTO `niveau` (`id_niveau`, `nom_niveau`) VALUES
(1, 'Primaire'),
(2, 'Collége'),
(3, 'Lycée');

-- --------------------------------------------------------

--
-- Structure de la table `reglement`
--

CREATE TABLE IF NOT EXISTS `reglement` (
  `id_reglement` int(2) NOT NULL,
  `date_reglement` varchar(50) NOT NULL,
  `montant` int(50) NOT NULL,
  `id_facture` int(50) NOT NULL,
  PRIMARY KEY (`id_reglement`,`id_facture`),
  KEY `fac4` (`id_facture`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reglement`
--

INSERT INTO `reglement` (`id_reglement`, `date_reglement`, `montant`, `id_facture`) VALUES
(1, '06-06-2013', 1233, 143);

-- --------------------------------------------------------

--
-- Structure de la table `remise`
--

CREATE TABLE IF NOT EXISTS `remise` (
  `id_remise` int(50) NOT NULL AUTO_INCREMENT,
  `valeur` int(50) NOT NULL,
  PRIMARY KEY (`id_remise`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `remise`
--

INSERT INTO `remise` (`id_remise`, `valeur`) VALUES
(1, 30),
(2, 20);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(20) NOT NULL AUTO_INCREMENT,
  `nom_role` varchar(20) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id_role`, `nom_role`) VALUES
(1, 'Administrateur'),
(2, 'Etudiant');

-- --------------------------------------------------------

--
-- Structure de la table `type_reglement`
--

CREATE TABLE IF NOT EXISTS `type_reglement` (
  `id_reglement` int(2) NOT NULL AUTO_INCREMENT,
  `type_reglement` varchar(12) NOT NULL,
  PRIMARY KEY (`id_reglement`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `type_reglement`
--

INSERT INTO `type_reglement` (`id_reglement`, `type_reglement`) VALUES
(1, 'espéce'),
(2, 'chéque');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `droit_role`
--
ALTER TABLE `droit_role`
  ADD CONSTRAINT `droit_role_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `droit_role_ibfk_2` FOREIGN KEY (`id_droit`) REFERENCES `droit` (`id_droit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `fac1` FOREIGN KEY (`id_inscription`) REFERENCES `inscription` (`id_inscription`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`id_mois`) REFERENCES `mois` (`id_mois`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `frais_facture`
--
ALTER TABLE `frais_facture`
  ADD CONSTRAINT `fa1` FOREIGN KEY (`id_facture`) REFERENCES `facture` (`id_facture`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fa2` FOREIGN KEY (`id_frais`) REFERENCES `frais` (`id_frais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `frais_mois`
--
ALTER TABLE `frais_mois`
  ADD CONSTRAINT `frais_mois_ibfk_1` FOREIGN KEY (`id_inscription`) REFERENCES `inscription` (`id_inscription`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `frais_mois_ibfk_2` FOREIGN KEY (`id_frais`) REFERENCES `frais` (`id_frais`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `frais_mois_ibfk_3` FOREIGN KEY (`id_mois`) REFERENCES `mois` (`id_mois`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `frais_niveau`
--
ALTER TABLE `frais_niveau`
  ADD CONSTRAINT `frais_niveau_ibfk_1` FOREIGN KEY (`id_frais`) REFERENCES `frais` (`id_frais`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `frais_niveau_ibfk_2` FOREIGN KEY (`id_niveau`) REFERENCES `niveau` (`id_niveau`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `dd` FOREIGN KEY (`id_classe`) REFERENCES `classe` (`id_classe`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkk1` FOREIGN KEY (`id_compte`) REFERENCES `compte` (`id_compte`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkk2` FOREIGN KEY (`id_annee`) REFERENCES `annee` (`id_annee`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_inscription_niveau` FOREIGN KEY (`id_niveau`) REFERENCES `niveau` (`id_niveau`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reglement`
--
ALTER TABLE `reglement`
  ADD CONSTRAINT `fac4` FOREIGN KEY (`id_facture`) REFERENCES `facture` (`id_facture`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reglement_ibfk_1` FOREIGN KEY (`id_reglement`) REFERENCES `type_reglement` (`id_reglement`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
