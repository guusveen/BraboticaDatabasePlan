<?php
require_once ( __DIR__ . '\..\Models\Login.php' );

class LoginController
{
    public function index()
    {
        $view = new View('Login');
        $view->set('title', 'Inloggen');
        $view->set('pagina', 'login');
        if(isset($_SESSION['taal']))
        {
            $view->set('taal', $_SESSION["taal"]);
        }
        //$view->set('producten', Product::alleProducten());
        //$view->set('categorieen', Categorie::alleCategorieen());
        
        $view->render();
    }
    
    function logout()
    {
        session_start();
        session_destroy();
        header('location: index.php');
        //exit;
    }
}