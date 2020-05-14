-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 14 mai 2020 à 15:02
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

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `Scores_Niveaux_FK` FOREIGN KEY (`idNiveau`) REFERENCES `niveaux` (`idNiveau`),
  ADD CONSTRAINT `Scores_Users_FK` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
