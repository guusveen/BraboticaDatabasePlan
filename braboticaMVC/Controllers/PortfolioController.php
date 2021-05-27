<?php


class PortfolioController
{
    public function index()
    {
        $view = new View('Portfolio');
        $view->set('title', 'Portfolio');
        $view->set('pagina', 'portfolio');

        $view->render();
    }
}