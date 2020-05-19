
--
-- Déchargement des données de la table `niveaux`
--

INSERT INTO `niveaux` (`idNiveau`, `nomNiveau`, `pointDeVie`) VALUES(1, 'facile', 6);
INSERT INTO `niveaux` (`idNiveau`, `nomNiveau`, `pointDeVie`) VALUES(2, 'moyen', 5);
INSERT INTO `niveaux` (`idNiveau`, `nomNiveau`, `pointDeVie`) VALUES(3, 'difficile', 4);
INSERT INTO `niveaux` (`idNiveau`, `nomNiveau`, `pointDeVie`) VALUES(4, 'tres difficile', 3);

-- --------------------------------------------------------

--
-- Déchargement des données de la table `personnages`
--

INSERT INTO `personnages` (`idPersonnage`, `nomPersonnage`, `descriptionPersonnage`, `avatar`) VALUES(1, 'Joe l''édenté', 'chercheur d\'or dont la seule preoccupation et de s\'enrichir', 'images/perso1.PNG');
INSERT INTO `personnages` (`idPersonnage`, `nomPersonnage`, `descriptionPersonnage`, `avatar`) VALUES(2, 'Prince Moustache', 'fort, courageux, ambitieux.\r\n Et Avec une belle Moustache ', 'images/perso2.PNG');
INSERT INTO `personnages` (`idPersonnage`, `nomPersonnage`, `descriptionPersonnage`, `avatar`) VALUES(3, 'Totor le rouquin', 'bah il est roux, c est pourtant évident', 'images/perso3.jpg');
INSERT INTO `personnages` (`idPersonnage`, `nomPersonnage`, `descriptionPersonnage`, `avatar`) VALUES (4, 'Jack le Zombie', 'Il a garder sa conscience et il est a la recherche d un moyen de redevenir humain', 'images/perso4.PNG');

-- --------------------------------------------------------


--
-- Déchargement des données de la table `scores`
--

INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(2, 1, 2, 10, 50, '02:00:00', 2200);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(3, 2, 3, 5, 50, '03:00:00', 2500);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(4, 1, 5, 15, 50, '02:30:05', 2200);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(5, 4, 4, 8, 70, '03:43:12', 3050);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(6, 1, 2, 10, 50, '02:30:00', 2200);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(7, 2, 3, 5, 50, '03:20:00', 2500);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(8, 1, 5, 15, 50, '02:50:05', 2200);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(9, 4, 4, 8, 70, '03:43:12', 4000);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(10, 1, 2, 10, 50, '02:00:00', 4100);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(11, 2, 3, 5, 50, '03:00:00', 1200);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(12, 1, 5, 15, 50, '02:30:05', 1000);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(13, 4, 4, 8, 70, '03:43:12', 2020);

-- --------------------------------------------------------

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES(1, 'cccc', 'cccc', 2);
INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES(2, 'Med', '1111', 1);
INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES(3, 'loic', '2222', 2);
INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES(4, 'martine', '3333', 1);
INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES(5, 'yous', '4444', 3);
