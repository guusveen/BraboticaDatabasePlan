<?php
require_once ( __DIR__ . '\..\Models\Product.php' );
require_once ( __DIR__ . '\..\Models\Categorie.php' );

class ProductenController
{
    public function index()
    {
        $view = new View('Producten');
        $view->set('title', 'Producten');
        $view->set('pagina', 'producten');
        $view->set('producten', Product::alleProducten());
        $view->set('categorieen', Categorie::alleCategorieen());
        
        $view->render();
    }
    
    public function productPagina()
    {
        if( ! isset($_GET['productId']) )
            throw new Exception('Geen id gevonden!');
        $view = new View('Product');
        $view->set('title', 'Producten');
        $view->set('pagina', 'product');
        $view->set('product', Product::getProduct());
        
        $view->render();
    }
    
    public function productBeheerPagina()
    {
        $view = new View('ProductBeheer');
        $view->set('title', 'Producten');
        $view->set('pagina', 'productBeheer');
        $view->set('producten', Product::alleProducten());
        $view->set('categorieen', Categorie::alleCategorieen());
        
        $view->render();
    }
    
    public function productUpdatenPagina()
    {
        if( ! isset($_GET['productId']) )
            throw new Exception('Geen id gevonden!');
        $view = new View('ProductUpdaten');
        $view->set('title', 'Product updaten');
        $view->set('pagina', 'productUpdaten');
        $view->set('product', Product::getProduct($_GET['productId']));
        
        $view->render();
    }
    
    public function updateProduct()
    {
        if( ! isset($_POST['productId']) )
            throw new Exception('Geen id gevonden!');
        $product = new product(
                $_POST['naam'], 
                $_POST['omschrijving'], 
                $_POST['categorieId'],
                $_POST['prijs'],
                $_POST['voorraad'],
                $_POST['fotoAdres'],
                null,
                $_POST['productId'],);
        
        $product->update();
        header("Location: index.php?controller=Producten&action=productUpdatenPagina&productId={$product->get('id')}");
    }
    
    public function createProduct()
    {
        $product = new product(
                $_POST['naam'], 
                $_POST['omschrijving'], 
                $_POST['categorieId'],
                $_POST['prijs'],
                $_POST['voorraad'],
                $_POST['fotoAdres']);
        $product->create();
        header("Location: index.php?controller=Producten&action=productBeheerPagina");
    }
}