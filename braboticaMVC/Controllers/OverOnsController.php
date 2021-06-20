<?php


class OverOnsController
{
    public function index()
    {
        $view = new View('OverOns');
        $view->set('title', 'Over ons');
        $view->set('pagina', 'overOns');
        if(isset($_SESSION['taal']))
        {
            $view->set('taal', $_SESSION["taal"]);
        }

        $view->render();
    }
}