<?php

require_once ( __DIR__ . '\..\Models\Beheer.php' );

class BeheerController
{
    public function index()
    {
        $view = new View('Beheer');
        $view->set('title', 'Beheer');
        $view->set('pagina', 'Beheer');
        $view->set('gebruikers', Beheer::alleGebruikers());
        if(isset($_SESSION['taal']))
        {
            $view->set('taal', $_SESSION["taal"]);
        }
        
        $view->render();
    }

    public function add()
    {
        $view = new View('Gebruiker.add');
        $view->set('title', 'Gebruiker Toevoegen');
        $view->set('pagina', 'Beheer');

        $view->render();
    }
    public function edit()
    {
        if( ! isset($_GET['GebruikerId']) )
            throw new Exception('Geen id gevonden!');

        $task = new Beheer();
        $task->getSingle($_GET['GebruikerId']);

        $view = new View('Gebruiker.add');
        $view->set('pagina', 'Beheer');
        $view->set('title', 'Gebruiker Toevoegen');
        $view->set('GebruikerId', $_GET['GebruikerId']);
        $view->set( 'Voornaam', $task->get('Voornaam') );
        $view->set( 'Achternaam', $task->get('Achternaam') );
        $view->set( 'Telefoonnummer', $task->get('Telefoonnummer') );
        $view->set( 'Email', $task->get('Email') );
        $view->set( 'Rol', $task->get('Rol') );
        $view->set( 'Wachtwoord', $task->get('Wachtwoord') );
        $view->set( 'VoorkeurTaal', $task->get('VoorkeurTaal') );

        $view->render();
    }

    public function save()
    {
        $task = new Beheer('', $_POST['Voornaam'], $_POST['Achternaam'], $_POST['Telefoonnummer'], $_POST['Email'], $_POST['Rol'], $_POST['Wachtwoord'], $_POST['VoorkeurTaal']);
        $task->save();
        header("Location: index.php?controller=Beheer");
    }

    public function delete()
    {
        if( ! isset($_GET['GebruikerId']) )
            throw new Exception('Geen id gevonden!');
        
        $task = new Beheer($_GET['GebruikerId'], '', '', '', '', '', '', '');
        $task->delete();

        header("Location: index.php?controller=Beheer");
    }
}