<?php
require_once ( __DIR__ . '\..\Models\Gebruiker.php' );
require_once ( __DIR__ . '\..\DB.php' );

class GebruikersTest extends PHPUnit\Framework\TestCase
{
    public function testConstructorGebruiker()
    {
        $gebruiker = new Gebruiker(
                3,
                "TestVoornaam",
                "TestAchternaam",
                "TestAdres",
                10,
                "5522GL",
                "TestWoonplaats",
                "Nederland",
                "0412457635",
                "jan.vervoort@outlook.com",
                "Klant",
                "TestWachtwoord",
                "NL",
                );
        
        $this->assertInstanceOf('Gebruiker', $gebruiker);
        $this->assertEquals(3, $gebruiker->get('GebruikerId'));
        $this->assertEquals("TestVoornaam", $gebruiker->get('Voornaam'));
        $this->assertEquals("TestAchternaam", $gebruiker->get('Achternaam'));
        $this->assertEquals("TestAdres", $gebruiker->get('Adres'));
        $this->assertEquals(10, $gebruiker->get('Huisnummer'));
        $this->assertEquals("5522GL", $gebruiker->get('Postcode'));
        $this->assertEquals("TestWoonplaats", $gebruiker->get('Woonplaats'));
        $this->assertEquals("Nederland", $gebruiker->get('Land'));
        $this->assertEquals("0412457635", $gebruiker->get('Telefoonnummer'));
        $this->assertEquals("jan.vervoort@outlook.com", $gebruiker->get('Email'));
        $this->assertEquals("Klant", $gebruiker->get('Rol'));
        $this->assertEquals("TestWachtwoord", $gebruiker->get('Wachtwoord'));
        $this->assertEquals("NL", $gebruiker->get('VoorkeurTaal'));
    }

    public function testCreateGebruiker()
    {
        $gebruiker = new Gebruiker(
                
                "",                 //Gebruikers.GebruikersId 
                "Voornaam",         //Gebruikers.Voornaam
                "Achternaam",       //Gebruikers.Achternaam
                "Adres",            //Adressen.Adres
                10,                 //Adressen.Huisnummer
                "1234PC",           //Adressen.Postcode
                "Woonplaats",       //Adressen.Woonplaats
                "Land",             //Adressen.Land
                "0123456789",       //Gebruikers.Telefoonnummer
                "Test@Email.nl",    //Gebruikers.Email
                "Klant",            //Gebruikers.Rol
                "TestWachtwoord",   //Gebruikers.Wachtwoord
                "NL",               //Gebruikers.VoorkeurTaal
                );
        
        $alleGebruikersVoor = $gebruiker->alleGebruikers();
        $gebruiker->save();
        $alleGebruikersNa = $gebruiker->alleGebruikers();
        $this->assertCount(count($alleGebruikersVoor) + 1, $alleGebruikersNa);
    }

    public function testCreateMedewerker()
    {
        $gebruiker = new Gebruiker(
                
                "",                 //Gebruikers.GebruikersId 
                "TestMedewerker",   //Gebruikers.Voornaam
                "TestAchternaam",   //Gebruikers.Achternaam
                "TestAdres",        //Adressen.Adres
                26,                 //Adressen.Huisnummer
                "5612BB",           //Adressen.Postcode
                "TestWoonplaats",   //Adressen.Woonplaats
                "TestLand",         //Adressen.Land
                "0246813579",       //Gebruikers.Telefoonnummer
                "Test@Brabotica.nl",//Gebruikers.Email
                "Medewerker",       //Gebruikers.Rol
                "TestMedewerker",   //Gebruikers.Wachtwoord
                "EN",               //Gebruikers.VoorkeurTaal
                );
        
        $alleGebruikersVoor = $gebruiker->alleGebruikers();
        $gebruiker->save();
        $alleGebruikersNa = $gebruiker->alleGebruikers();
        
        $this->assertCount(count($alleGebruikersVoor) + 1, $alleGebruikersNa);
    }
}
?>