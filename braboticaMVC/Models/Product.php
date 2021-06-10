<?php

require_once ( 'Model.php' );

class Product extends Model
{
    protected int $id = 0;
    protected string $naam = "";
    protected string $omschrijving = "";
    protected int $categorieId = 0;
    protected float $prijs = 0;
    protected int $voorraad = 0;
    protected string $fotoAdres = "";
    
    public function __construct($id, $naam, $omschrijving, $categorieId, $prijs, $voorraad, $fotoAdres)
    {
        $this->id = $id;
        $this->naam = $naam;
        $this->omschrijving = $omschrijving;
        $this->categorieId = $categorieId;
        $this->prijs = $prijs;
        $this->voorraad = $voorraad;
        $this->fotoAdres = $fotoAdres;
    }
    
    public static function alleProducten()
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM producten");
        $stmt-> execute();
        $result = [];

        $alleProducten = $stmt->fetchAll();

        foreach($alleProducten as $product)
        {
            array_push( $result, new Product(
                    $product['ProductId'],
                    $product['Naam'], 
                    $product['Omschrijving'], 
                    $product['CategorieId'], 
                    $product['Prijs'], 
                    $product['Voorraad'], 
                    $product['FotoAdres'] 
                    ));
        }
        return $result;
    }

    public static function getProduct()
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM producten WHERE ProductId = :productId");
        $stmt->execute([
            ':productId' => $_GET['productId']
        ]);

        $product = $stmt->fetch();

        if($stmt->rowCount() === 1)
        {
            return new Product(
                    $product['ProductId'],
                    $product['Naam'], 
                    $product['Omschrijving'], 
                    $product['CategorieId'], 
                    $product['Prijs'], 
                    $product['Voorraad'], 
                    $product['FotoAdres']
                    );
        }
        throw new Exception('Record niet gevonden of niet uniek');
    }
}