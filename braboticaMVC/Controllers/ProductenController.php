<?php
require_once ( __DIR__ . '\..\Models\Product.php' );

class ProductenController
{
    public function index()
    {
        $view = new View('Producten');
        $view->set('title', 'Producten');
        $view->set('pagina', 'producten');
        $view->set('producten', Product::alleProducten());
        
        $view->render();
    }
    
    public function productPagina()
    {
        if( ! isset($_GET['productId']) )
            throw new Exception('Geen id gevonden!');
        $view = new View('Product');
        $view->set('title', 'Producten');
        $view->set('pagina', 'product');
        $view->set('product', Product::getProduct($_GET['productId']));
        
        $view->render();
    }
}