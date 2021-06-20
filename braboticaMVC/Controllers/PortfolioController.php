<?php


class PortfolioController
{
    public function index()
    {
        $view = new View('Portfolio');
        $view->set('title', 'Portfolio');
        $view->set('pagina', 'portfolio');
        if(isset($_SESSION['taal']))
        {
            $view->set('taal', $_SESSION["taal"]);
        }

        $view->render();
    }
}