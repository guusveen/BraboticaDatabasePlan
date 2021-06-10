--
-- Gegevens worden geïmporteerd voor tabel `Rollen`
--
INSERT INTO `rollen` VALUES
('Klant'), ('Medewerker'), ('Admin');

--
-- Gegevens worden geïmporteerd voor tabel `Gebruikers`
--
INSERT INTO `gebruikers` (`GebruikerId`, `Voornaam`, `Achternaam`, `Telefoonnummer`, `Email`, `Wachtwoord`, `Rol`) VALUES 
(NULL, 'Jan', 'Vervoort', '0613295367', 'jan.vervoort@outlook.com', '198303', 'Klant'),
(NULL, 'Lotte', 'Vissers', '0650237398', 'lotte.vissers@brabotica.nl', 'Brabo2103', 'Medewerker'),
(NULL, 'Piet', 'Janssen', '0412457635', 'piet.janssen@gmail.com', 'janssen33', 'Klant'),
(NULL, 'Geert', 'Schepers', '0735220441', 'geertschepers@gmail.com', 'geert@schepers', 'Klant'),
(NULL, 'Wilco', 'Bekkers', '0650683502', 'wilco.bekkers@brabotica.nl', 'Ikwilopvakantie', 'Medewerker'),
(NULL, 'Anne', 'Dekkers', '0650462970', 'anne.dekker@brabotica.nl', '@dminAnne21', 'Admin');

--
-- Gegevens worden geïmporteerd voor tabel `Adressen`
--
INSERT INTO `adressen` (`Postcode`, `Huisnummer`, `Land`, `GebruikerId`) VALUES 
('5461PH', '2', 'Nederland', '1'), 
('3657AV', '56', 'Nederland', '2'),
('2516AS', '103', 'Nederland', '3'), 
('2136LT', '4', 'Nederland', '4'),
('3790FK', '5', 'Nederland', '5'),
('6390KS', '62', 'Nederland', '6');

--
-- Gegevens worden geïmporteerd voor tabel `Orders`
--
INSERT INTO `orders` (`OrderId`, `Postcode`, `Huisnummer`, `GebruikerId`, `Orderdatum`) VALUES
(1, '5461PH', '2', 1, '2020-09-16 12:38:38'),
(2, '2516AS', '103', 3, '2021-02-28 15:20:12');

--
-- Gegevens worden geïmporteerd voor tabel `Betalingen`
--
INSERT INTO `betalingen` (`OrderId`, `Banknaam`, `Status`) VALUES 
(1, 'Rabobank', 'In Behandeling'), 
(2, 'ING bank', 'Betaald');

--
-- Gegevens worden geïmporteerd voor tabel `categorieen`
--
INSERT INTO `categorieen` (`CategorieId`, `Naam`, `ouderCategorie`) VALUES
(1, 'Robots', NULL),
(2, 'Robot pakketten', 1),
(3, 'Robot bouwpakket', 1),
(4, 'Onderdelen', NULL),
(5, 'Geheugenkaart', 4),
(6, 'Leds', 4),
(7, 'Kabels', 4);

--
-- Gegevens worden geïmporteerd voor tabel `producten`
--
INSERT INTO `producten` (`ProductId`, `Naam`, `Omschrijving`, `CategorieId`, `Prijs`, `Voorraad`, `FotoAdres`) VALUES
(NULL, 'Robotarm', 'OWI-535 Robotarm Edge', '2', '39.95', '8', 'img/robotarm.png'),
(NULL, 'Robotarm', 'Arduino Braccio Robotarm', '2', '215.00', '3', 'img/robotarm.png'),
(NULL, 'Educatieve set', 'Tinkerbots Mijn Eerste Robot Educatieve Set', '2', '149.95', '5', 'img/pakket1.png'),
(NULL, 'Educatieve set', 'De Learning Journey Techno Gears Kit - Dizzy Droid', '2', '23.00', '24', 'img/pakket2.png'),
(NULL, 'Programmeerbare robot', 'Edison Programmeerbare V2.0-Robot', '2', '39.00', '63', 'img/klaar1.png'),
(NULL, 'Programmeerbare robot', 'DFRobotShop Rover V2 - Arduino Compatibele Robottank (Basisset)', '2', '90.00', '63', 'img/klaar2.png'),
(NULL, 'Programmeerbare robot', 'Hexapod Robot Hexy - Blauw', '2', '225.00', '8', 'img/klaar3.png'),
(NULL, 'Programmeerbare robot', 'Verwoester Tank Mobiele Robot Platform', '2', '79.95', '12', 'img/klaar4.png'),
(NULL, 'Educatieve bouwpakket', 'Inventor Basic Kit 50 Models Set', '3', '49.95', '84', 'img/pakket3.png'),
(NULL, 'Educatieve bouwpakket', 'Lynxmotion Tweevoetig Robot Verkenner', '3', '110.00', '14', 'img/pakket4.png'),
(NULL, 'Educatieve bouwpakket', 'EdCreate Edison Robot Creator Kit', '3', '30.00', '43', 'img/pakket5.png'),
(NULL, 'Led groen', 'Set van 5x groene led lampjes', '6', '2.00', '15', 'img/lampjes1.png'),
(NULL, 'Led rood', 'Set van 5x rode led lampjes', '6', '2.00', '10', 'img/lampjes1.png'),
(NULL, 'Led geel', 'Set van 5x gele led lampjes', '6', '2.00', '15', 'img/lampjes1.png'),
(NULL, 'Led wit', 'Set van 5x witte led lampjes', '6', '2.00', '25', 'img/lampjes1.png'),
(NULL, 'Led blauw', 'Set van 5x blauwe led lampjes', '6', '2.00', '35', 'img/lampjes1.png'),
(NULL, 'Led groen', '1x groen led lampje', '6', '0.50', '63', 'img/lampjes1.png'),
(NULL, 'Led rood', '1x rood led lampje', '6', '0.50', '72', 'img/lampjes1.png'),
(NULL, 'Led geel', '1x geel led lampje', '6', '0.50', '42', 'img/lampjes1.png'),
(NULL, 'Led wit', '1x wit led lampje', '6', '0.50', '56', 'img/lampjes1.png'),
(NULL, 'Led blauw', '1x blauw led lampje', '6', '0.50', '37', 'img/lampjes1.png'),
(NULL, 'Geheugenkaart 64GB', 'Samsung EVO Plus MicroSDXC 64 GB - Versie 2020', '5', '11.00', '4', 'img/geheugenkaart1.png'),
(NULL, 'Geheugenkaart 128GB', 'Samsung EVO Plus MicroSDXC 128 GB', '5', '15.50', '6', 'img/geheugenkaart1.png'),
(NULL, 'Geheugenkaart 256GB', 'Samsung EVO Plus MicroSDXC 256 GB', '5', '29.95', '2', 'img/geheugenkaart1.png'),
(NULL, '9V Batterij aansluiting', '9V batterij aansluiting naar DC connector', '7', '0.75', '16', 'img/electra1.png'),
(NULL, 'USB Kabel', 'USB-A naar Micro USB-B 3.0 2,5mtr', '7', '5.00', '53', 'img/electra1.png'),
(NULL, 'USB Kabel', 'USB-A naar Micro USB-B 3.0 5mtr', '7', '8.95', '34', 'img/electra1.png'),
(NULL, 'USB Kabel', 'USB-C naar USB-A 3.0 2mtr', '7', '11.95', '8', 'img/electra1.png'),
(NULL, 'USB Kabel', 'USB-C naar USB-A 3.0 4mtr', '7', '15.00', '2', 'img/electra1.png'),
(NULL, 'USB Kabel', 'USB verlengkabel 3.0 3mtr', '7', '9.00', '26', 'img/electra1.png'),
(NULL, 'USB Kabel', 'USB verlengkabel 3.0 5mtr', '7', '16.00', '15', 'img/electra1.png');