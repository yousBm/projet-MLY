
--
-- Déchargement des données de la table `niveaux`
--

INSERT INTO `niveaux` (`idNiveau`, `nomNiveau`, `pointDeVie`) VALUES(1, 'ciel', 100);
INSERT INTO `niveaux` (`idNiveau`, `nomNiveau`, `pointDeVie`) VALUES(2, 'galaxie', 200);
INSERT INTO `niveaux` (`idNiveau`, `nomNiveau`, `pointDeVie`) VALUES(3, 'espace', 100);
INSERT INTO `niveaux` (`idNiveau`, `nomNiveau`, `pointDeVie`) VALUES(4, 'terre', 100);

-- --------------------------------------------------------

--
-- Déchargement des données de la table `personnages`
--

INSERT INTO `personnages` (`idPersonnage`, `nomPersonnage`, `descriptionPersonnage`, `avatar`) VALUES(1, 'xnn', 'machin chouette', '../images/Test.jpg');
INSERT INTO `personnages` (`idPersonnage`, `nomPersonnage`, `descriptionPersonnage`, `avatar`) VALUES(2, 'toto', 'fort, courageux, ambitieux.\r\n25 ans ', '../images/f1.jpg');
INSERT INTO `personnages` (`idPersonnage`, `nomPersonnage`, `descriptionPersonnage`, `avatar`) VALUES(3, 'tata', '22 ans\r\npetit de taille mais robuste', '../images/f2.jpg');

-- --------------------------------------------------------


--
-- Déchargement des données de la table `scores`
--

INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(2, 1, 2, 10, 50, '02:00:00', 2200);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(3, 2, 3, 5, 50, '03:00:00', 2500);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(4, 1, 5, 15, 50, '02:30:05', 2200);
INSERT INTO `scores` (`idScore`, `idNiveau`, `idUser`, `nbDePieceRecolte`, `Bonus`, `time`, `scoreObtenu`) VALUES(5, 4, 4, 8, 70, '03:43:12', 3050);

-- --------------------------------------------------------

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES(1, 'cccc', 'cccc', 2);
INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES(2, 'Med', '1111', 1);
INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES(3, 'loic', '2222', 2);
INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES(4, 'martine', '3333', 1);
INSERT INTO `users` (`idUser`, `pseudo`, `motDePasse`, `idPersonnage`) VALUES(5, 'yous', '4444', 3);

