CREATE TABLE Utilisateurs(
   ID_Utilisateur INT,
   Nom VARCHAR(50) NOT NULL,
   Prenom VARCHAR(50) NOT NULL,
   Mot_de_passe INT NOT NULL,
   Contact INT NOT NULL,
   Email VARCHAR(50) NOT NULL,
   Statut VARCHAR(50) NOT NULL,
   PRIMARY KEY(ID_Utilisateur)
);

CREATE TABLE Voiture(
   ID_Voiture INT,
   Marque VARCHAR(50) NOT NULL,
   Modèle VARCHAR(50) NOT NULL,
   Prix CURRENCY NOT NULL,
   EstVendu LOGICAL NOT NULL,
   Origine VARCHAR(50) NOT NULL,
   Année_Sortie DATE,
   Image VARCHAR(50),
   PRIMARY KEY(ID_Voiture)
);

CREATE TABLE Activité(
   ID_Vente INT,
   Date_ DATETIME NOT NULL,
   Type VARCHAR(50) NOT NULL,
   ID_Utilisateur INT NOT NULL,
   ID_Voiture INT NOT NULL,
   ID_Utilisateur_1 INT NOT NULL,
   PRIMARY KEY(ID_Vente),
   FOREIGN KEY(ID_Utilisateur) REFERENCES Utilisateurs(ID_Utilisateur),
   FOREIGN KEY(ID_Voiture) REFERENCES Voiture(ID_Voiture),
   FOREIGN KEY(ID_Utilisateur_1) REFERENCES Utilisateurs(ID_Utilisateur)
);

CREATE TABLE AdminStatique(
   ID_Admin INT,
   Variable VARCHAR(50) NOT NULL,
   Contenu VARCHAR(200),
   Page VARCHAR(50) NOT NULL,
   ID_Utilisateur INT NOT NULL,
   PRIMARY KEY(ID_Admin),
   FOREIGN KEY(ID_Utilisateur) REFERENCES Utilisateurs(ID_Utilisateur)
);
