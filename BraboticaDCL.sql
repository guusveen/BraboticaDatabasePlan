--
-- Maak gebruiker Klant aan --
--
drop user if exists 'Klant'@'localhost';
CREATE USER 'Klant'@'localhost' IDENTIFIED BY 'GeheimeWachtwoord';
--
-- Geef de gebruiker 'klant' lees schrijf en update rechten op bepaalde velden in de tabel adressen --
--
GRANT SELECT (`Postcode`, `Huisnummer`, `Land`), INSERT (`Postcode`, `Huisnummer`, `Land`), UPDATE (`Postcode`, `Huisnummer`, `Land`) 
ON `braboticadb`.`adressen` TO 'Klant'@'localhost';

--
-- Geef de gebruiker 'klant' lees schrijf en update rechten op bepaalde velden in de tabel gebruikers --
--
GRANT SELECT (`Voornaam`, `Achternaam`, `Telefoonnummer`, `Email`, `Wachtwoord`), INSERT (`Voornaam`, `Achternaam`, `Telefoonnummer`, `Email`, `Wachtwoord`), UPDATE (`Voornaam`, `Achternaam`, `Telefoonnummer`, `Email`, `Wachtwoord`) 
ON `braboticadb`.`gebruikers` 
TO 'Klant'@'localhost';

--
-- Geef de gebruiker 'klant' lees rechten op bepaalde velden in de tabel orders --
--
GRANT SELECT (`Postcode`, `Huisnummer`, `Orderdatum`) 
ON `braboticadb`.`orders` 
TO 'Klant'@'localhost';

--
-- Geef de gebruiker 'klant' lees schrijf en wijzig rechten op de tabel winkelwagens --
--
GRANT SELECT, INSERT, UPDATE 
ON `braboticadb`.`winkelwagens` 
TO 'Klant'@'localhost';

--
-- Geef de gebruiker 'klant' lees rechten op de tabel producten --
--
GRANT SELECT 
ON `braboticadb`.`producten` 
TO 'Klant'@'localhost';

--
-- Maak gebruiker Medewerker aan --
--
drop user if exists 'Medewerker'@'localhost';
CREATE USER 'Medewerker'@'localhost' IDENTIFIED BY '20Br@MeBrbo';

--
-- Geef de gebruiker 'Medewerker' lees schrijf wijzig en delete rechten op de alle tabellen in de database --
--
GRANT SELECT, INSERT, UPDATE, DELETE 
ON `braboticadb`.* 
TO 'Medewerker'@'localhost' WITH GRANT OPTION;

--
-- Maak gebruiker Admin aan --
--
drop user if exists 'Admin'@'localhost';
CREATE USER 'Admin'@'localhost' IDENTIFIED BY 'Ad20@MinBro';

--
-- Geef de gebruiker 'Admin' alle rechten voor de database braboticadb --
--
GRANT ALL PRIVILEGES
ON `braboticadb`.* 
TO 'Admin'@'localhost'  WITH GRANT OPTION;