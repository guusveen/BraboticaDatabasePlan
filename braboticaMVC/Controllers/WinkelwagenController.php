<?php
require_once ( __DIR__ . '\..\Models\Winkelwagen.php' );

class WinkelwagenController
{
    public function index()
    {
        $view = new View('Winkelwagen');
        $view->set('title', 'Winkelwagen');
        $view->set('pagina', 'winkelwagen');
        $view->set('winkelwagenKlant', Winkelwagen::WinkelwagenKlant($gebruikerId));
        
        $view->render();
    }
    
    public function updateAantal()
    {
        if( ! isset($_GET['productId']) )
            throw new Exception('Geen id gevonden!');
        $view = new View('Product');
        $view->set('title', 'Producten');
        $view->set('pagina', 'product');
        $view->set('product', Product::getProduct($_GET['productId']));
        
        $view->render();
    }
    
    public function save()
    {
        $winkelwagen = new Winkelwagen($_POST['gebruikerid'], $_POST['productid'], $_POST['aantal']);
        $winkelwagen->save();
        header("Location: index.php?controller=Winkelwagen");
    }

    public function delete()
    {
        if( !isset($_POST['gebruikerid']) || !isset($_POST['productid']))
            throw new Exception('geen gebruikerid of productid gevonden');
        
        $winkelwagen = new Winkelwagen($_POST['gebruikerid'], $_POST['productid'], 0);
        $winkelwagen->delete();

        header("Location: index.php?controller=Winkelwagen");
    }
}