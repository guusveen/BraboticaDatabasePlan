<?php
require_once ( __DIR__ . '\..\Models\Winkelwagen.php' );
require_once ( __DIR__ . '\..\Models\Adres.php' );
require_once ( __DIR__ . '\..\Models\Order.php' );
require_once ( __DIR__ . '\..\Models\OrderRegel.php' );

class WinkelwagenController
{
    public function index()
    {
        $sessionGebruikerId = 1;
        $view = new View('Winkelwagen');
        $view->set('title', 'Winkelwagen');
        $view->set('pagina', 'winkelwagen');
        $winkelwagen = new Winkelwagen($sessionGebruikerId);
        $view->set('winkelwagenKlant', $winkelwagen->winkelwagenKlant());
        $view->set('eindbedrag', self::getEindbedrag($winkelwagen->winkelwagenKlant()));
        $view->render();
    }
    
    public function save()
    {
        $sessionGebruikerId = 1;
        $winkelwagen = new Winkelwagen($sessionGebruikerId, $_POST['productId'], $_POST['aantal']);
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
    
    private static function getEindbedrag($winkelwagen)
    {
        $eindbedrag = 0;
        foreach($winkelwagen as $winkelwagenRegel)
        {
            $eindbedrag += $winkelwagenRegel->get('totaal');
        }
        return $eindbedrag;
    }
    
    public function bestel()
    {
        $sessionGebruikerId = 1;
        $adres = (new Adres($sessionGebruikerId))->getAdres();
        
        // Zet de order in de database
        $order = new Order($sessionGebruikerId, $adres->get("postcode"), $adres->get('huisnummer'));
        $orderId = $order->create();
        
        $winkelwagen = (new Winkelwagen($sessionGebruikerId))->winkelwagenKlant();
        foreach($winkelwagen as $winkelwagenRegel /*@var Winkelwagen $winkelwagenRegel*/)
        {
            // Zet voor elke winkelwagenregel een orderregel in de DB en 
            // verwijder daarna de winkelwagenregel
            $orderRegel = new OrderRegel($orderId, 
                    $winkelwagenRegel->get('productId'), 
                    $winkelwagenRegel->get('aantal'));
            
            $orderRegel->create();
            $winkelwagenRegel->delete();
        }
        //var_dump($winkelwagen); die;
        
        header("Location: index.php?controller=Winkelwagen");
    }
}