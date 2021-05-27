<?php


class HomeController
{
    public function index()
    {
        $view = new View('Home');
        $view->set('title', 'Home');
        $view->set('pagina', 'homePage');

        $view->render();
    }
}