<?php


class ProductenController
{
    public function index()
    {
        $view = new View('Producten');
        $view->set('title', 'Producten');
        $view->set('pagina', 'producten');
        
        $view->render();
    }
}