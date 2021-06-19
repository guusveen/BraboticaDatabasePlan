<?php
require_once ( __DIR__ . '\..\Models\BeheerLogin.php' );

class BeheerLoginController
{
    public function index()
    {
        $view = new View('BeheerLogin');
        $view->set('title', 'Beheerder inloggen');
        $view->set('pagina', 'login');
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