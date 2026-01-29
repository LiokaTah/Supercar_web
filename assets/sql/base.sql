CREATE TABLE Utilisateurs(
   ID_Utilisateur INT AUTO_INCREMENT,
   Nom VARCHAR(50) NOT NULL,
   Prenom VARCHAR(50) NOT NULL,
   Mot_de_passe VARCHAR(255) NOT NULL,  
   Contact VARCHAR(50) NOT NULL,
   Email VARCHAR(50) NOT NULL,
   Statut VARCHAR(50) NOT NULL,
   PRIMARY KEY(ID_Utilisateur),
   UNIQUE(Email)  
);

CREATE TABLE Voiture(
   ID_Voiture INT AUTO_INCREMENT,
   Marque VARCHAR(50) NOT NULL,
   Modele VARCHAR(50) NOT NULL, 
   Prix DECIMAL(10,2) NOT NULL,  
   EstVendu BOOLEAN NOT NULL DEFAULT FALSE,  
   Origine VARCHAR(50) NOT NULL,
   Annee_Sortie YEAR, 
   Type_voiture VARCHAR(50),
   Place INT, 
   Img VARCHAR(255),  
   PRIMARY KEY(ID_Voiture)
);


CREATE TABLE Activite(  
   ID_Vente INT AUTO_INCREMENT,
   Date_ DATETIME NOT NULL,
   Type VARCHAR(50) NOT NULL,
   ID_Utilisateur INT NOT NULL,
   ID_Voiture INT NOT NULL,
   PRIMARY KEY(ID_Vente),
   FOREIGN KEY(ID_Utilisateur) REFERENCES Utilisateurs(ID_Utilisateur),
   FOREIGN KEY(ID_Voiture) REFERENCES Voiture(ID_Voiture)
);