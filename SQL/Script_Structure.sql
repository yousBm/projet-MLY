#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `JEUMLY` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `JEUMLY`;

#------------------------------------------------------------
# Table: Personnages
#------------------------------------------------------------

CREATE TABLE Personnages(
        idPersonnage          Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomPersonnage         Varchar (100) NOT NULL ,
        descriptionPersonnage Varchar (100) NOT NULL ,
        avatar                Varchar (100) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE Users(
        idUser       Int  Auto_increment  NOT NULL PRIMARY KEY,
        pseudo       Varchar (100) NOT NULL ,
        motDePasse   Varchar (100) NOT NULL ,
        idPersonnage Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Niveaux
#------------------------------------------------------------

CREATE TABLE Niveaux(
        idNiveau   Int  Auto_increment  NOT NULL ,
        nomNiveau  Varchar (100) NOT NULL ,
        pointDeVie Int NOT NULL
	,CONSTRAINT Niveaux_PK PRIMARY KEY (idNiveau)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Scores
#------------------------------------------------------------

CREATE TABLE Scores(
	idScore		Int  Auto_increment  NOT NULL PRIMARY KEY,
        idNiveau         Int NOT NULL ,
        idUser           Int NOT NULL ,
        nbDePieceRecolte Int NOT NULL ,
        Bonus            Int NOT NULL ,
        time             Time NOT NULL ,
        scoreObtenu      Int NOT NULL
)ENGINE=InnoDB;

ALTER TABLE Users ADD CONSTRAINT Users_Personnages_FK FOREIGN KEY (idPersonnage) REFERENCES Personnages(idPersonnage);
ALTER TABLE Scores ADD CONSTRAINT Scores_Niveaux_FK FOREIGN KEY (idNiveau) REFERENCES Niveaux(idNiveau);
ALTER TABLE Scores ADD CONSTRAINT Scores_Users_FK FOREIGN KEY (idUser) REFERENCES Users(idUser);