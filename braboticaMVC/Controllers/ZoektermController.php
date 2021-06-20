<?php
require_once ( __DIR__ . '\..\Models\Product.php' );
require_once ( __DIR__ . '\..\Models\Zoekterm.php' );
require_once ( __DIR__ . '\..\Models\Categorie.php' );

class ZoektermController
{
    public function index() 
    {
         $view = new View('ZoektermBeheer');
        $view->set('title', 'Zoekgeschiedenis');
        $view->set('pagina', 'zoektermBeheer');
        $view->set('zoektermen', Zoekterm::alleZoektermen());
        $view->set('categorieen', Categorie::alleCategorieen());
        if(isset($_SESSION['taal']))
        {
            $view->set('taal', $_SESSION["taal"]);
        }
        
        $view->render();
    }
    
    public function zoekProduct()
    {
        $producten = Product::alleProducten();
        $zoekterm = $_POST['zoekterm'];
        if(!empty($zoekterm))
        {
            self::createZoekterm($zoekterm);
            $producten = self::filterProducten($zoekterm, $producten);
        }
        
        $view = new View('Producten');
        $view->set('title', 'Producten');
        $view->set('pagina', 'producten');
        if(isset($_SESSION['taal']))
        {
            $view->set('taal', $_SESSION["taal"]);
        }
        $view->set('producten', $producten);
        $view->set('categorieen', Categorie::alleCategorieen());
        
        $view->render();
    }
    
    private static function createZoekterm(string $zoekterm)
    {
        $newZoekterm = new Zoekterm($zoekterm);
        $newZoekterm->create();
    }
    
    private static function filterProducten(string $zoekterm, array $producten)
    {
        $gefilterdeProducten = [];
        foreach($producten as $product)
        {
            // Alleen producten waar de ingevoerde zoekterm terugkomt in de 
            // naam of beschrijving geven we terug
            if(strpos(strtolower($product->get('naam')), strtolower($zoekterm)) !== false ||
                    strpos(strtolower($product->get('omschrijving')), strtolower($zoekterm)) !== false)
            {
                array_push($gefilterdeProducten, $product);
            }
        }
        return $gefilterdeProducten;
    }
}