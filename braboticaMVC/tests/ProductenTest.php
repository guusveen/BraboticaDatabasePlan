<?php
require_once ( __DIR__ . '\..\Models\Product.php' );
require_once ( __DIR__ . '\..\DB.php' );

class ProductenTest extends PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $product = new Product(
                "TestNaam",
                "TestOmschrijving",
                2,
                9.99,
                10,
                "../img/bezos.png",
                1);
        
        $this->assertInstanceOf('Product', $product);
        $this->assertEquals("TestNaam", $product->get('naam'));
        $this->assertEquals("TestOmschrijving", $product->get('omschrijving'));
        $this->assertEquals(2, $product->get('categorieId'));
        $this->assertEquals(9.99, $product->get('prijs'));
        $this->assertEquals(10, $product->get('voorraad'));
        $this->assertEquals("../img/bezos.png", $product->get('fotoAdres'));
        $this->assertEquals(1, $product->get('ouderCategorieId'));
    }
    
    public function testCreateProduct()
    {
        $product = new Product(
                "TestNaam",
                "TestOmschrijving",
                2,
                9.99,
                10,
                "../img/bezos.png",
                1);
        
        $alleProductenVoor = $product->alleProducten();
        $product->create();
        $alleProductenNa = $product->alleProducten();
        
        $this->assertCount(count($alleProductenVoor) + 1, $alleProductenNa);
    }

}
?>