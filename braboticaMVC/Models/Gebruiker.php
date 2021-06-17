<?php

require_once ( 'Model.php' );

class Gebruiker extends Model
{
    protected string $GebruikerId;
    protected string $Voornaam;
    protected string $Achternaam;
    protected string $adres;
    protected string $Huisnummer;
    protected string $Postcode;
    protected string $Woonplaats;
    protected string $Land;
    protected string $Telefoonnummer;
    protected string $Email;
    protected string $Rol;
    protected string $Wachtwoord;
    protected string $VoorkeurTaal;

    public function __construct(string $GebruikerId = '', string $Voornaam = '', string $Achternaam = '', string $Adres = '', string $Huisnummer = '', string $Postcode = '', string $Woonplaats = '', string $Land = '', string $Telefoonnummer = '', string $Email = '', string $Rol = '', string $Wachtwoord = '', string $VoorkeurTaal = '')
    {
        $this->GebruikerId = $GebruikerId;
        $this->Voornaam = $Voornaam;
        $this->Achternaam = $Achternaam;
        $this->Adres = $Adres;
        $this->Huisnummer = $Huisnummer;
        $this->Postcode = $Postcode;
        $this->Woonplaats = $Woonplaats;
        $this->Land = $Land;
        $this->Telefoonnummer = $Telefoonnummer;
        $this->Email = $Email;
        $this->Rol = $Rol;
        $this->Wachtwoord = $Wachtwoord;
        $this->VoorkeurTaal = $VoorkeurTaal;
    }
    
    public static function alleGebruikers()
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM gebruikers
            LEFT JOIN adressen 
            ON (gebruikers.GebruikerId=adressen.GebruikerId) 
            ORDER BY gebruikers.GebruikerId ");
        $stmt-> execute();

        $result = [];

        $alleGebruikers = $stmt->fetchAll();

        foreach($alleGebruikers as $gebruiker)
        {
            array_push( $result, new Gebruiker($gebruiker['GebruikerId'], $gebruiker['Voornaam'], $gebruiker['Achternaam'], $gebruiker['Adres'], $gebruiker['Huisnummer'], $gebruiker['Postcode'], $gebruiker['Woonplaats'], $gebruiker['Land'], $gebruiker['Telefoonnummer'], $gebruiker['Email'], $gebruiker['Rol'], $gebruiker['Wachtwoord'], $gebruiker['VoorkeurTaal']) );
        }

        return $result;
    }

    public function getSingle($GebruikerId)
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM gebruikers
            LEFT JOIN adressen 
            ON (gebruikers.GebruikerId=adressen.GebruikerId)
            WHERE gebruikers.GebruikerId = :GebruikerId");
        $stmt->execute([
            ':GebruikerId' => $GebruikerId
        ]);

        $gebruiker = $stmt->fetch();

        if($stmt->rowCount() > 0)
        {
            $this->Voornaam = $gebruiker['Voornaam'];
            $this->Achternaam = $gebruiker['Achternaam'];
            $this->Adres = $gebruiker['Adres'];
            $this->Huisnummer = $gebruiker['Huisnummer'];
            $this->Postcode = $gebruiker['Postcode'];
            $this->Woonplaats = $gebruiker['Woonplaats'];
            $this->Land = $gebruiker['Land'];
            $this->Telefoonnummer = $gebruiker['Telefoonnummer'];
            $this->Email = $gebruiker['Email'];
            $this->Rol = $gebruiker['Rol'];
            $this->Wachtwoord = $gebruiker['Wachtwoord'];
            $this->VoorkeurTaal = $gebruiker['VoorkeurTaal'];
            
            return $this;
        }

        throw new Exception('Record niet gevonden...');
    }

    public function save()
    {
        $pdo = DB::connect();
        if ( isset( $_POST['GebruikerId'] ) )
        {
            $stmt = $pdo->prepare("UPDATE `gebruikers`, `adressen` SET `gebruikers`.`Voornaam` = :Voornaam, `gebruikers`.`Achternaam` = :Achternaam, `gebruikers`.`Telefoonnummer` = :Telefoonnummer, `gebruikers`.`Email` = :Email, `gebruikers`.`Rol` = :Rol, `gebruikers`.`Wachtwoord` = :Wachtwoord, `gebruikers`.`VoorkeurTaal` = :VoorkeurTaal, `adressen`.`Adres` = :Adres, `adressen`.`Huisnummer` = :Huisnummer, `adressen`.`Postcode` = :Postcode, `adressen`.`Woonplaats` = :Woonplaats, `adressen`.`Land` = :Land  WHERE `gebruikers`.`GebruikerId` = :GebruikerId AND `adressen`.`GebruikerId` = :GebruikerId");

            $stmt->execute([
                ':GebruikerId' => $_POST['GebruikerId'],
                ':Voornaam' => $this->Voornaam,
                ':Achternaam' => $this->Achternaam,
                ':Telefoonnummer' => $this->Telefoonnummer,
                ':Email' => $this->Email,
                ':Rol' => $this->Rol,
                ':Wachtwoord' => $this->Wachtwoord,
                ':VoorkeurTaal' => $this->VoorkeurTaal,
                ':Adres' => $this->Adres,
                ':Huisnummer' => $this->Huisnummer,
                ':Postcode' => $this->Postcode,
                ':Woonplaats' => $this->Woonplaats,
                ':Land' => $this->Land
            ]);
        } else
        {
           $stmt = $pdo->prepare('INSERT INTO `gebruikers` (`GebruikerId`,`Voornaam`, `Achternaam`, `Telefoonnummer`, `Email`, `Rol`, `Wachtwoord`, `VoorkeurTaal`) VALUES ( "", :Voornaam, :Achternaam, :Telefoonnummer, :Email, :Rol, :Wachtwoord, :VoorkeurTaal) ');
                
                $stmt->execute([
                ':Voornaam' => $this->Voornaam,
                ':Achternaam' => $this->Achternaam,
                ':Telefoonnummer' => $this->Telefoonnummer,
                ':Email' => $this->Email,
                ':Rol' => $this->Rol,
                ':Wachtwoord' => $this->Wachtwoord,
                ':VoorkeurTaal' => $this->VoorkeurTaal
            ]);
                // zet de gebruikerId onder variable
                $userid = $pdo->lastInsertId();
          

            $stmt2 = $pdo->prepare('INSERT INTO `adressen` (`Adres`,`Huisnummer`, `Postcode`, `Woonplaats`, `Land`, `GebruikerId`) VALUES (:Adres, :Huisnummer, :Postcode, :Woonplaats, :Land, :GebruikerId ) ');

            $stmt2->execute([
                ':Adres' => $this->Adres,
                ':Huisnummer' => $this->Huisnummer,
                ':Postcode' => $this->Postcode,
                ':Woonplaats' => $this->Woonplaats,
                ':Land' => $this->Land,
                ':GebruikerId' => $userid
            ]);           
        }
    }

    public function delete()
    {
        $pdo = DB::connect();

        // Verwijder eerst de gevens uit de child tabel
        $stmt2 = $pdo->prepare("DELETE FROM `adressen` WHERE `adressen`.`GebruikerId` = :GebruikerId");
        $stmt2->execute([
            ':GebruikerId' => $this->GebruikerId
        ]);

        // Na het verwijderen van de gegevens uit de child tabel kun je de gevens uit de parent tabel verwijderden
        $stmt = $pdo->prepare("DELETE FROM `gebruikers` WHERE `gebruikers`.`GebruikerId` = :GebruikerId");
        $stmt->execute([
            ':GebruikerId' => $this->GebruikerId
        ]);
    }

    public function save1()
    {
        $pdo = DB::connect();

        $rol = "Klant";
       
            $stmt = $pdo->prepare('INSERT INTO `gebruikers` (`GebruikerId`,`Voornaam`, `Achternaam`, `Telefoonnummer`, `Email`, `Rol`, `Wachtwoord`, `VoorkeurTaal`) VALUES ( "", :Voornaam, :Achternaam, :Telefoonnummer, :Email, :Rol, :Wachtwoord, :VoorkeurTaal) ');
                
                $stmt->execute([
                ':Voornaam' => $this->Voornaam,
                ':Achternaam' => $this->Achternaam,
                ':Telefoonnummer' => $this->Telefoonnummer,
                ':Email' => $this->Email,
                ':Rol' => $rol,
                ':Wachtwoord' => $this->Wachtwoord,
                ':VoorkeurTaal' => $this->VoorkeurTaal
            ]);
                // zet de gebruikerId onder variable
                $userid = $pdo->lastInsertId();
          

            $stmt2 = $pdo->prepare('INSERT INTO `adressen` (`Adres`,`Huisnummer`, `Postcode`, `Woonplaats`, `Land`, `GebruikerId`) VALUES (:Adres, :Huisnummer, :Postcode, :Woonplaats, :Land, :GebruikerId ) ');

            $stmt2->execute([
                ':Adres' => $this->Adres,
                ':Huisnummer' => $this->Huisnummer,
                ':Postcode' => $this->Postcode,
                ':Woonplaats' => $this->Woonplaats,
                ':Land' => $this->Land,
                ':GebruikerId' => $userid
            ]);  
        }
    
}