INSERT INTO Gebruikers (Voornaam, Achternaam, Telefoonnummer, Email)
VALUES ('John', 'Doe', 0612345678, 'JohnDoe@voorbeeld.nl');

UPDATE Gebruikers
SET Voornaam = 'Jane', Achternaam = 'Smith', Telefoonnummer = 987654321, Email = 'janedoe@voorbeeld.nl', Wachtwoord = 'test'
WHERE GebruikerID = 1; 

SELECT Email, Password FROM Gebruikers
WHERE Email='janedoe@voorbeeld.nl';

INSERT INTO Winkelwagens (GebruikerID, ProductId, Aantal)
VALUES (1, 1, 1);

UPDATE Winkelwagens
SET Aantal = 2 
WHERE GebruikerID = 1 and ProductId = 1; 

INSERT INTO Orders (GebruikerID, Postcode, Huisnummer)
VALUES (1, '5600aa', 96);

SELECT ProductId, Aantal FROM Winkelwagens
WHERE GebruikerID = 1;

INSERT INTO Betalingen (OrderId, ProductId, Aantal)
VALUES (1, 1, 1);

DELETE FROM Winkelwagens
WHERE GebruikerID = 1;