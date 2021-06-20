<?php
require_once ( __DIR__ . '\..\Models\Winkelwagen.php' );
require_once ( __DIR__ . '\..\Models\Adres.php' );
require_once ( __DIR__ . '\..\Models\Order.php' );
require_once ( __DIR__ . '\..\Models\OrderRegel.php' );

class WinkelwagenController
{
    public function index()
    {
        $view = new View('Winkelwagen');
        $view->set('title', 'Winkelwagen');
        $view->set('pagina', 'winkelwagen');
        if(isset($_SESSION['taal']))
        {
            $view->set('taal', $_SESSION["taal"]);
        }
        $winkelwagen = new Winkelwagen($_SESSION['gebruikerId']);
        $view->set('winkelwagenKlant', $winkelwagen->winkelwagenKlant());
        $view->set('eindbedrag', self::getEindbedrag($winkelwagen->winkelwagenKlant()));
        $view->render();
    }
    
    public function save()
    {
        $winkelwagen = new Winkelwagen($_SESSION['gebruikerId'], $_POST['productId'], $_POST['aantal']);
        $winkelwagen->save();
        header("Location: index.php?controller=Winkelwagen");
    }

    public function delete()
    {
        if( !isset($_SESSION['gebruikerId']) || !isset($_POST['productid']))
            throw new Exception('geen gebruikerid of productid gevonden');
        
        $winkelwagen = new Winkelwagen($_SESSION['gebruikerId'], $_POST['productid'], 0);
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
        $adres = (new Adres($_SESSION['gebruikerId']))->getAdres();
        
        // Zet de order in de database
        $order = new Order($_SESSION['gebruikerId'], $adres->get("postcode"), $adres->get('huisnummer'));
        $orderId = $order->create();
        
        $winkelwagen = (new Winkelwagen($_SESSION['gebruikerId']))->winkelwagenKlant();
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
        
        header("Location: index.php?controller=Winkelwagen");
    }
}