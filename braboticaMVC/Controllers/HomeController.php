<?php


class HomeController
{
    public function index()
    {
        $view = new View('Home');
        $view->set('title', 'Home');
        $view->set('pagina', 'homePage');
        if(isset($_SESSION['taal']))
        {
            $view->set('taal', $_SESSION["taal"]);
        }

        $view->render();
    }
    
    public function setTaalNL()
    {
        $view = new View('Home');
        $view->set('title', 'Home');
        $view->set('pagina', 'homePage');
        $_SESSION["taal"] = "NL";
        $view->set('taal', $_SESSION["taal"]);

        $view->render();
    }
    public function setTaalEN()
    {
        $view = new View('Home');
        $view->set('title', 'Home');
        $view->set('pagina', 'homePage');
        $_SESSION["taal"] = "EN";
        $view->set('taal', $_SESSION["taal"]);

        $view->render();
    }
    
}