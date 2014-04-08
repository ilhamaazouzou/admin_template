-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le : Jeu 02 Mai 2013 à 00:50
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

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
(1, '2012-2013'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`id_compte`, `login`, `pass`, `id_role`) VALUES
(1, 'admin', 'admin', 1),
(5, 'ham', 'hamza', 2);

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
  `id_facture` int(50) NOT NULL,
  `date_facture` varchar(50) NOT NULL,
  `id_inscription` int(50) NOT NULL,
  `id_remise` int(50) NOT NULL,
  PRIMARY KEY (`id_facture`),
  KEY `fac1` (`id_inscription`),
  KEY `fac2` (`id_remise`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'transport', 0),
(2, 'scolarite', 0);

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
  `id_frais` int(50) NOT NULL,
  `id_mois` int(50) NOT NULL,
  PRIMARY KEY (`id_frais`,`id_mois`),
  KEY `id_mois` (`id_mois`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `id_inscription` int(50) NOT NULL AUTO_INCREMENT,
  `num_inscription` int(50) NOT NULL,
  `id_classe` int(10) NOT NULL,
  `id_niveau` int(11) NOT NULL,
  `date_inscription` date NOT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `cne` varchar(20) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `id_compte` int(20) NOT NULL,
  `id_annee` int(10) NOT NULL,
  PRIMARY KEY (`id_inscription`),
  KEY `fkk1` (`id_compte`),
  KEY `fkk2` (`id_annee`),
  KEY `dd` (`id_classe`),
  KEY `FK_inscription_niveau` (`id_niveau`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`id_inscription`, `num_inscription`, `id_classe`, `id_niveau`, `date_inscription`, `nom`, `prenom`, `cne`, `adresse`, `telephone`, `id_compte`, `id_annee`) VALUES
(27, 55555888, 1, 1, '0000-00-00', 'hamza', 'hamza', '99998888', 'khjhjgjg', '', 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `mois`
--

CREATE TABLE IF NOT EXISTS `mois` (
  `id_mois` int(50) NOT NULL AUTO_INCREMENT,
  `nom_mois` varchar(10) NOT NULL,
  PRIMARY KEY (`id_mois`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `mois`
--

INSERT INTO `mois` (`id_mois`, `nom_mois`) VALUES
(1, 'janvier'),
(2, 'fevrier');

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
  `id_reglement` int(50) NOT NULL AUTO_INCREMENT,
  `type_reglement` varchar(50) NOT NULL,
  `date_reglement` varchar(50) NOT NULL,
  `montant` int(50) NOT NULL,
  `id_facture` int(50) NOT NULL,
  PRIMARY KEY (`id_reglement`),
  KEY `fac4` (`id_facture`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  ADD CONSTRAINT `fac2` FOREIGN KEY (`id_remise`) REFERENCES `remise` (`id_remise`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `frais_mois_ibfk_1` FOREIGN KEY (`id_frais`) REFERENCES `frais` (`id_frais`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `frais_mois_ibfk_2` FOREIGN KEY (`id_mois`) REFERENCES `mois` (`id_mois`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fac4` FOREIGN KEY (`id_facture`) REFERENCES `facture` (`id_facture`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
