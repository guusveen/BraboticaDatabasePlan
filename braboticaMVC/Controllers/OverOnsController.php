<?php


class OverOnsController
{
    public function index()
    {
        $view = new View('OverOns');
        $view->set('title', 'Over ons');
        $view->set('pagina', 'overOns');

        $view->render();
    }
}