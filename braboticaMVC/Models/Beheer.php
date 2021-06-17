<?php

require_once ( 'Model.php' );

class Beheer extends Model
{
    protected string $GebruikerId;
    protected string $Voornaam;
    protected string $Achternaam;
    protected string $Telefoonnummer;
    protected string $Email;
    protected string $Rol;
    protected string $Wachtwoord;
    protected string $VoorkeurTaal;

    public function __construct(string $GebruikerId = '', string $Voornaam = '', string $Achternaam = '', string $Telefoonnummer = '', string $Email = '', string $Rol = '', string $Wachtwoord = '', string $VoorkeurTaal = '')
    {
        $this->GebruikerId = $GebruikerId;
        $this->Voornaam = $Voornaam;
        $this->Achternaam = $Achternaam;
        $this->Telefoonnummer = $Telefoonnummer;
        $this->Email = $Email;
        $this->Rol = $Rol;
        $this->Wachtwoord = $Wachtwoord;
        $this->VoorkeurTaal = $VoorkeurTaal;
    }
    
    public static function alleGebruikers()
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM gebruikers");
        $stmt-> execute();
        //return $stmt->fetchAll( PDO::FETCH_OBJ );

        $taskArray = [];

        $allTasks = $stmt->fetchAll();

        foreach($allTasks as $task)
        {
            array_push( $taskArray, new Beheer($task['GebruikerId'], $task['Voornaam'], $task['Achternaam'], $task['Telefoonnummer'], $task['Email'], $task['Rol'], $task['Wachtwoord'], $task['VoorkeurTaal']) );
        }

        return $taskArray;
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
            array_push( $taskArray, new Beheer($task['GebruikerId'], $task['Voornaam'], $task['Achternaam'], $task['Telefoonnummer'], $task['Email'], $task['Rol'], $task['Wachtwoord'], $task['VoorkeurTaal']) );
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



    //protected string $person;
   // protected string $title;
   // protected string $description;
   // protected string $id;
/*
    public function __construct(string $person = '', string $title = '', string $description = '', string $id = '')
    {
        $this->person = $person;
        $this->title = $title;
        $this->description = $description;
        $this->id = $id;
    }

    public static function getAll()
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM tasks");
        $stmt->execute();

        $taskArray = [];

        $allTasks = $stmt->fetchAll();

        foreach($allTasks as $task)
        {
            array_push( $taskArray, new Task($task['person'], $task['title'], $task['description'], $task['id']) );
        }

        return $taskArray;
    }

    public function getSingle($id)
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM tasks WHERE id = :id");
        $stmt->execute([
            ':id' => $id
        ]);

        $task = $stmt->fetch();

        if($stmt->rowCount() > 0)
        {
            $this->person = $task['person'];
            $this->title = $task['title'];
            $this->description = $task['description'];
            
            return $this;
        }

        throw new Exception('Record niet gevonden...');
    }

    public function save()
    {
        $pdo = DB::connect();
        if ( isset( $_POST['id'] ) )
        {
            $stmt = $pdo->prepare("UPDATE `tasks` SET `person` = :person, `title` = :title, `description` = :description WHERE `tasks`.`id` = :id");
            $stmt->execute([
                ':id' => $_POST['id'],
                ':person' => $this->person,
                ':title' => $this->title,
                ':description' => $this->description
            ]);
        } else
        {
            $stmt = $pdo->prepare("INSERT INTO `tasks` (`person`, `title`, `description`) VALUES (:person, :title, :description) ");
            $stmt->execute([
                ':person' => $this->person,
                ':title' => $this->title,
                ':description' => $this->description
            ]);
        }
    }

    public function delete()
    {
        $pdo = DB::connect();
        
        $stmt = $pdo->prepare("DELETE FROM `tasks` WHERE `tasks`.`id` = :id");
        $stmt->execute([
            ':id' => $this->id
        ]);
    }
*/

}