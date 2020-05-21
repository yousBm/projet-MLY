-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 19 mai 2020 à 15:47
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

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

--
-- Déchargement des données de la table `niveaux`
--

INSERT INTO `niveaux` (`idNiveau`, `nomNiveau`, `pointDeVie`) VALUES
(1, 'Petit joueur', 4),
(2, 'Sans talent', 3),
(3, 'Un peu de difficulté ', 2),
(4, 'Tu vas en chier ', 1);

--
-- Déchargement des données de la table `personnages`
--

INSERT INTO `personnages` (`idPersonnage`, `nomPersonnage`, `descriptionPersonnage`, `avatar`) VALUES
(1, 'Joe l\'édenté', 'Chercheur d or dont sa seule préoccupation est de s enrichir !', 'Images/perso1.png'),
(2, 'Prince Moustache', 'Fort, courageux, ambitieux. Et avec une belle Moustache !', 'Images/perso2.png'),
(3, 'Totor, le rouquin', 'Bah il est roux, c est pourtant évident !', 'Images/perso3.png'),
(4, 'Jack le Zombie', 'Il a gardé sa conscience et il est a la recherche d un moyen pour redevenir humain. Bonne chance Jack !', 'Images/perso4.png');

--
-- Déchargement des données de la table `scores`
--

INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES
(2, 1, 2, 10, 50, '02:00:00', 2200),
(3, 2, 3, 5, 50, '03:00:00', 2500),
(4, 1, 5, 15, 50, '02:30:05', 2200),
(5, 4, 4, 8, 70, '03:43:12', 3050);

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES
(2, 'Med', '1111', 1),
(3, 'loic', '0722d8017336c860fdae1895318b35d7', 2),
(4, 'martine', '3333', 1),
(5, 'yous', '4444', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
