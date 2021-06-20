<?php


class DownloadsController
{
    public function index()
    {
        $view = new View('Downloads');
        $view->set('title', 'Downloads');
        $view->set('pagina', 'downloads');
        if(isset($_SESSION['taal']))
        {
            $view->set('taal', $_SESSION["taal"]);
        }
        
        $view->render();
    }
}