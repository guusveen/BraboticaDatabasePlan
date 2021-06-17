<?php

require_once ( __DIR__ . '\..\Models\BeheerCategorie.php' );

class BeheerCategorieController
{
    public function index()
    {
        $view = new View('BeheerCategorie');
        $view->set('title', 'Beheer Categorie');
        $view->set('pagina', 'beheerCategorie');
        $view->set('HoofdCategorie', BeheerCategorie::alleHoofdCategorieen());
        $view->set('Categorie', BeheerCategorie::alleCategorieen());
        
        $view->render();
    }

    public function add()
    {
        $view = new View('Categorie.add');
        $view->set('title', 'Hoofd categorie Toevoegen');
        $view->set('pagina', 'beheerCategorie');

        $view->render();
    }
    public function edit()
    {
        if( ! isset($_GET['CategorieId']) )
            throw new Exception('Geen id gevonden!');

        $task = new BeheerCategorie();
        $task->getSingle($_GET['CategorieId']);

        $view = new View('Gebruiker.add');
        $view->set('pagina', 'beheer');
        $view->set('title', 'Gebruiker bewerken');
        $view->set('CategorieId', $_GET['CategorieId']);
        $view->set( 'Naam', $task->get('Naam') );

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

        header("Location: index.php?controller=Beheer2");
    }
}