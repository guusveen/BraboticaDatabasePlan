CREATE TABLE Rollen (
Rol VARCHAR(255) NOT NULL,
PRIMARY KEY (Rol)
);

CREATE TABLE Gebruikers (
GebruikerId INT(10) NOT NULL AUTO_INCREMENT,
Voornaam VARCHAR(255) NOT NULL,
Achternaam VARCHAR(255) NOT NULL,
Telefoonnummer VARCHAR(15),
Email VARCHAR(255) NOT NULL,
Rol VARCHAR(255) NOT NULL DEFAULT 'Klant',
Wachtwoord VARCHAR(255) NOT NULL,
VoorkeurTaal VARCHAR(10) DEFAULT 'NL',
PRIMARY KEY (GebruikerId),
FOREIGN KEY (Rol) REFERENCES Rollen(Rol),
UNIQUE (Email)
);

CREATE TABLE Adressen (
Adres VARCHAR(255) NOT NULL,
Huisnummer INT(5) NOT NULL,
Postcode VARCHAR(10) NOT NULL,
Woonplaats VARCHAR(255) NOT NULL,
Land VARCHAR(255) NOT NULL,
GebruikerId INT(10) NOT NULL,
PRIMARY KEY (Postcode, Huisnummer),
FOREIGN KEY (GebruikerId) REFERENCES Gebruikers(GebruikerId)
);

CREATE TABLE Orders ( 
OrderId INT(10) NOT NULL AUTO_INCREMENT, 
Postcode VARCHAR(10) NOT NULL, 
Huisnummer INT(5) NOT NULL, 
GebruikerId INT(10) NOT NULL, 
Orderdatum DATETIME NOT NULL, 
PRIMARY KEY (OrderId), 
FOREIGN KEY (Postcode, Huisnummer) REFERENCES Adressen(Postcode, Huisnummer), 
FOREIGN KEY (GebruikerId) REFERENCES Gebruikers(GebruikerId) 
); 

CREATE TABLE Betalingen ( 
OrderId INT(10) NOT NULL, 
Banknaam VARCHAR(255) NOT NULL, 
Status VARCHAR(255) NOT NULL, 
PRIMARY KEY (OrderId), 
FOREIGN KEY (OrderId) REFERENCES Orders(OrderId) 
); 

CREATE TABLE Categorieen (
CategorieId INT(10) NOT NULL AUTO_INCREMENT,
Naam VARCHAR(255) NOT NULL,
OuderCategorie INT(10), 
PRIMARY KEY (CategorieId)
);

ALTER TABLE Categorieen ADD FOREIGN KEY (ouderCategorie) REFERENCES Categorieen(CategorieId);

CREATE TABLE Producten (
ProductId INT(10) NOT NULL AUTO_INCREMENT,
Naam VARCHAR(255) NOT NULL,
Omschrijving VARCHAR(255) NOT NULL,
CategorieId INT(10) NOT NULL,
Prijs DECIMAL(10,2) NOT NULL,
Voorraad INT DEFAULT 0,
FotoAdres VARCHAR(255),
PRIMARY KEY (ProductId),
FOREIGN KEY (CategorieId) REFERENCES Categorieen(CategorieId)
);

CREATE TABLE Orderregels (
OrderId INT(10) NOT NULL,
ProductId INT(10) NOT NULL,
Aantal INT(10) NOT NULL,
PRIMARY KEY (OrderId, ProductId),
FOREIGN KEY (OrderId) REFERENCES Orders(OrderId),
FOREIGN KEY (ProductId) REFERENCES Producten(ProductId)
);

CREATE TABLE Winkelwagens (
GebruikerId INT(10) NOT NULL,
ProductId INT(10) NOT NULL,
Aantal INT(10) NOT NULL,
PRIMARY KEY (GebruikerId, ProductId),
FOREIGN KEY (GebruikerId) REFERENCES Gebruikers(GebruikerId),
FOREIGN KEY (ProductId) REFERENCES Producten(ProductId)
);

CREATE TABLE Zoektermen (
ZoektermId INT(10) NOT NULL AUTO_INCREMENT,
Zoekterm VARCHAR(255) NOT NULL,
Zoekdatum DATETIME NOT NULL,
PRIMARY KEY (ZoektermId)
);