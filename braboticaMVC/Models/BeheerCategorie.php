<?php

require_once ( 'Model.php' );

class BeheerCategorie extends Model
{
  //  protected string $CategorieId;
  //  protected string $Naam;
  //  protected string $OuderCategorie;
    public string $CategorieId = "";
    public string $Naam = "";
    public string $OuderCategorie = "";

    public function __construct($CategorieId, $Naam, $OuderCategorie)
    {
        $this->CategorieId = $CategorieId;
        $this->Naam = $Naam;
        $this->Hoofdcategorie = $OuderCategorie;
    }
    
    public static function alleCategorieen()
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM `categorieen` WHERE `OuderCategorie` IS NOT NULL ");
        $stmt-> execute();
        //return $stmt->fetchAll( PDO::FETCH_OBJ );

        $result = [];

        $alleCategorieen = $stmt->fetchAll();

        foreach($alleCategorieen as $categorie)
        {
            array_push( $result, new BeheerCategorie($categorie['CategorieId'], $categorie['Naam'], $categorie['OuderCategorie']) );
        }

        return $result;
    }

    public static function alleHoofdCategorieen()
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM `categorieen` WHERE `OuderCategorie` IS NULL ");
        $stmt-> execute();
        
        $result = [];

        $alleHoofdCategorieen = $stmt->fetchAll();

        foreach($alleHoofdCategorieen as $hcategorie)
        {
            array_push( $result, new BeheerCategorie($hcategorie['CategorieId'], $hcategorie['Naam'], $hcategorie['OuderCategorie']) );
        }

        return $result;
    }


    public static function widgetGebruikers()
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM gebruikers ORDER BY GebruikerId LIMIT 4");
        $stmt-> execute();
        //return $stmt->fetchAll( PDO::FETCH_OBJ );

        $taskArray = [];

        $allTasks = $stmt->fetchAll();

        foreach($allTasks as $task)
        {
            array_push( $taskArray, new BeheerCategorie($task['GebruikerId'], $task['Voornaam'], $task['Achternaam'], $task['Telefoonnummer'], $task['Email'], $task['Rol'], $task['Wachtwoord'], $task['VoorkeurTaal']) );
        }

        return $taskArray;
    }

    public function getSingle($GebruikerId)
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM gebruikers WHERE GebruikerId = :GebruikerId");
        $stmt->execute([
            ':GebruikerId' => $GebruikerId
        ]);

        $task = $stmt->fetch();

        if($stmt->rowCount() > 0)
        {
            $this->Voornaam = $task['Voornaam'];
            $this->Achternaam = $task['Achternaam'];
            $this->Telefoonnummer = $task['Telefoonnummer'];
            $this->Email = $task['Email'];
            $this->Rol = $task['Rol'];
            $this->Wachtwoord = $task['Wachtwoord'];
            $this->VoorkeurTaal = $task['VoorkeurTaal'];
            
            return $this;
        }

        throw new Exception('Record niet gevonden...');
    }

    public function save()
    {
        $pdo = DB::connect();
        if ( isset( $_POST['GebruikerId'] ) )
        {
            $stmt = $pdo->prepare("UPDATE `gebruikers` SET `Voornaam` = :Voornaam, `Achternaam` = :Achternaam, `Telefoonnummer` = :Telefoonnummer, `Email` = :Email, `Rol` = :Rol, `Wachtwoord` = :Wachtwoord, `VoorkeurTaal` = :VoorkeurTaal WHERE `gebruikers`.`GebruikerId` = :GebruikerId");
            $stmt->execute([
                ':GebruikerId' => $_POST['GebruikerId'],
                ':Voornaam' => $this->Voornaam,
                ':Achternaam' => $this->Achternaam,
                ':Telefoonnummer' => $this->Telefoonnummer,
                ':Email' => $this->Email,
                ':Rol' => $this->Rol,
                ':Wachtwoord' => $this->Wachtwoord,
                ':VoorkeurTaal' => $this->VoorkeurTaal
            ]);
        } else
        {
            $stmt = $pdo->prepare('INSERT INTO `gebruikers` (`Voornaam`, `Achternaam`, `Telefoonnummer`, `Email`, `Rol`, `Wachtwoord`, `VoorkeurTaal`) VALUES (:Voornaam, :Achternaam, :Telefoonnummer, :Email, :Rol, :Wachtwoord, :VoorkeurTaal) ');
            $stmt->execute([
                
                ':Voornaam' => $this->Voornaam,
                ':Achternaam' => $this->Achternaam,
                ':Telefoonnummer' => $this->Telefoonnummer,
                ':Email' => $this->Email,
                ':Rol' => $this->Rol,
                ':Wachtwoord' => $this->Wachtwoord,
                ':VoorkeurTaal' => $this->VoorkeurTaal
            ]);
        }
    }

    public function delete()
    {
        $pdo = DB::connect();
        
        $stmt = $pdo->prepare("DELETE FROM `gebruikers` WHERE `gebruikers`.`GebruikerId` = :GebruikerId");
        $stmt->execute([
            ':GebruikerId' => $this->GebruikerId
        ]);
    }
}