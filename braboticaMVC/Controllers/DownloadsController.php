<?php


class DownloadsController
{
    public function index()
    {
        $view = new View('Downloads');
        $view->set('title', 'Downloads');
        $view->set('pagina', 'downloads');
        
        $view->render();
    }
}