<?php

require_once ( __DIR__ . '\..\Models\Login.php' );

class LoginController
{


    //Public function __construct() {
    //    parent::__construct();
    //    Session::init();
    //}

    public function index()
    {
        $view = new View('Login');
        $view->set('title', 'Inloggen');
        $view->set('pagina', 'login');
        
        $view->render();
    }

    function create ($Voornaam, $Email, $Wachtwoord)
    {

    }

    function Login ($Voornaam, $Email, $Wachtwoord)
    {
        if ($this->authenticate($Voornaam, $Wachtwoord)) {
            session_start();

            $Gebruiker = new Login($Voornaam);

            $_SESSION['Voornaam'] = $Gebruiker;

            return true;
        }
        else {
            
            return false;
        }
        
    }

    static function authenticate($gebr, $wachtw)
    {
        $authentic = false;

        if ($gebr == 'admin' && $wachtw == 'wachtw') $authentic = true;
        return $authentic;
    }

    function logout()
    {
        session_start();
        session_destroy();
        //header('location: index');
        //exit;
    }
}