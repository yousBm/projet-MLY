-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 15 mai 2020 à 07:31
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jeumly`
--

-- --------------------------------------------------------

--
-- Structure de la table `niveaux`
--

DROP TABLE IF EXISTS `niveaux`;
CREATE TABLE IF NOT EXISTS `niveaux` (
  `idNiveau` int(11) NOT NULL AUTO_INCREMENT,
  `nomNiveau` varchar(100) NOT NULL,
  `pointDeVie` int(11) NOT NULL,
  PRIMARY KEY (`idNiveau`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `niveaux`
--

INSERT INTO `niveaux` (`idNiveau`, `nomNiveau`, `pointDeVie`) VALUES(1, 'ciel', 100);
INSERT INTO `niveaux` (`idNiveau`, `nomNiveau`, `pointDeVie`) VALUES(2, 'galaxie', 200);
INSERT INTO `niveaux` (`idNiveau`, `nomNiveau`, `pointDeVie`) VALUES(3, 'espace', 100);
INSERT INTO `niveaux` (`idNiveau`, `nomNiveau`, `pointDeVie`) VALUES(4, 'terre', 100);

-- --------------------------------------------------------

--
-- Structure de la table `personnages`
--

DROP TABLE IF EXISTS `personnages`;
CREATE TABLE IF NOT EXISTS `personnages` (
  `idPersonnage` int(11) NOT NULL AUTO_INCREMENT,
  `nomPersonnage` varchar(100) NOT NULL,
  `descriptionPersonnage` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  PRIMARY KEY (`idPersonnage`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnages`
--

INSERT INTO `personnages` (`idPersonnage`, `nomPersonnage`, `descriptionPersonnage`, `avatar`) VALUES(1, 'xnn', 'machin chouette', '../images/Test.jpg');
INSERT INTO `personnages` (`idPersonnage`, `nomPersonnage`, `descriptionPersonnage`, `avatar`) VALUES(2, 'toto', 'fort, courageux, ambitieux.\r\n25 ans ', '../images/f1.jpg');
INSERT INTO `personnages` (`idPersonnage`, `nomPersonnage`, `descriptionPersonnage`, `avatar`) VALUES(3, 'tata', '22 ans\r\npetit de taille mais robuste', '../images/f2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `idScore` int(11) NOT NULL AUTO_INCREMENT,
  `idNiveau` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `nbDePieceRecolte` int(11) NOT NULL,
  `Bonus` int(11) NOT NULL,
  `time` time NOT NULL,
  `scoreObtenu` int(11) NOT NULL,
  PRIMARY KEY (`idScore`),
  KEY `Scores_Niveaux_FK` (`idNiveau`),
  KEY `Scores_Users_FK` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `scores`
--

INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(2, 1, 2, 10, 50, '02:00:00', 2200);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(3, 2, 3, 5, 50, '03:00:00', 2500);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(4, 1, 5, 15, 50, '02:30:05', 2200);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(5, 4, 4, 8, 70, '03:43:12', 3050);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) DEFAULT NULL,
  `motDePasse` varchar(100) DEFAULT NULL,
  `idPersonnage` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  KEY `Users_Personnages_FK` (`idPersonnage`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES(1, 'cccc', 'cccc', 2);
INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES(2, 'Med', '1111', 1);
INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES(3, 'loic', '2222', 2);
INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES(4, 'martine', '3333', 1);
INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES(5, 'yous', '4444', 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `Scores_Niveaux_FK` FOREIGN KEY (`idNiveau`) REFERENCES `niveaux` (`idNiveau`),
  ADD CONSTRAINT `Scores_Users_FK` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Users_Personnages_FK` FOREIGN KEY (`idPersonnage`) REFERENCES `personnages` (`idPersonnage`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
