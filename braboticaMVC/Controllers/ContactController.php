<?php


class ContactController
{
    public function index()
    {
        $view = new View('Contact');
        $view->set('title', 'Contact');
        $view->set('pagina', 'contact');
        if(isset($_SESSION['taal']))
        {
            $view->set('taal', $_SESSION["taal"]);
        }

        $view->render();
    }
}