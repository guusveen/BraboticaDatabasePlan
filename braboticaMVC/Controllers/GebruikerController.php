<?php

require_once ( __DIR__ . '\..\Models\Gebruiker.php' );

class GebruikerController
{
    public function index()
    {
        $view = new View('Gebruiker');
        $view->set('title', 'Gebruikersbeheer');
        $view->set('pagina', 'gebruiker');
        $view->set('gebruiker', Gebruiker::alleGebruikers());
        
        $view->render();
    }

    public function NieuweGebruiker()
    {
        $view = new View('Registreren');
        $view->set('title', 'Gebruiker registreren');
        $view->set('pagina', 'gebruiker');

        $view->render();
    }

    public function add()
    {
        $view = new View('Gebruiker.add');
        $view->set('title', 'Gebruiker Toevoegen');
        $view->set('pagina', 'gebruiker');

        $view->render();
    }
    public function edit()
    {
        if( ! isset($_GET['GebruikerId']) )
            throw new Exception('Geen id gevonden!');

        $task = new Gebruiker();
        $task->getSingle($_GET['GebruikerId']);

        $view = new View('Gebruiker.add');
        $view->set('pagina', 'gebruiker');
        $view->set('title', 'Gebruiker bewerken');

        $view->set('GebruikerId', $_GET['GebruikerId']);
        $view->set( 'Voornaam', $task->get('Voornaam') );
        $view->set( 'Achternaam', $task->get('Achternaam') );
        $view->set( 'Adres', $task->get('Adres') );
        $view->set( 'Huisnummer', $task->get('Huisnummer') );
        $view->set( 'Postcode', $task->get('Postcode') );
        $view->set( 'Woonplaats', $task->get('Woonplaats') );
        $view->set( 'Land', $task->get('Land') );
        $view->set( 'Telefoonnummer', $task->get('Telefoonnummer') );
        $view->set( 'Email', $task->get('Email') );
        $view->set( 'Rol', $task->get('Rol') );
        $view->set( 'Wachtwoord', $task->get('Wachtwoord') );
        $view->set( 'VoorkeurTaal', $task->get('VoorkeurTaal') );

        $view->render();
    }

    public function save()
    {
        $task = new Gebruiker('', $_POST['Voornaam'], $_POST['Achternaam'], $_POST['Adres'], $_POST['Huisnummer'], $_POST['Postcode'], $_POST['Woonplaats'], $_POST['Land'], $_POST['Telefoonnummer'], $_POST['Email'], $_POST['Rol'], $_POST['Wachtwoord'], $_POST['VoorkeurTaal']);
        $task->save();
        header("Location: index.php?controller=Gebruiker");
    }

    public function save1()
    {
        $task = new Gebruiker('', $_POST['Voornaam'], $_POST['Achternaam'], $_POST['Adres'], $_POST['Huisnummer'], $_POST['Postcode'], $_POST['Woonplaats'], $_POST['Land'], $_POST['Telefoonnummer'], $_POST['Email'], '', $_POST['Wachtwoord'], $_POST['VoorkeurTaal']);
        $task->save1();
        header("Location: index.php");
    }

    public function delete()
    {
        if( ! isset($_GET['GebruikerId']) )
            throw new Exception('Geen id gevonden!');
        
        $task = new Gebruiker($_GET['GebruikerId'], '', '', '', '', '', '', '', '', '', '', '', '', '');
        $task->delete();

        header("Location: index.php?controller=Gebruiker");
    }
}