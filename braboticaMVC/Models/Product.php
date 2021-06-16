<?php

require_once ( 'Model.php' );

class Product extends Model
{
    
    protected string $naam = "";
    protected string $omschrijving = "";
    protected int $categorieId = 0;
    protected float $prijs = 0;
    protected int $voorraad = 0;
    protected string $fotoAdres = "";
    protected ?int $ouderCategorieId;
    protected ?int $id;
    
    public function __construct(string $naam, string $omschrijving, int $categorieId, 
            float $prijs, int $voorraad, string $fotoAdres, int $ouderCategorieId = null, int $id = null)
    {
        $this->naam = $naam;
        $this->omschrijving = $omschrijving;
        $this->categorieId = $categorieId;
        $this->prijs = $prijs;
        $this->voorraad = $voorraad;
        $this->fotoAdres = $fotoAdres;
        $this->ouderCategorieId = $ouderCategorieId;
        $this->id = $id;
    }
    
    public static function alleProducten()
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT producten.*, categorieen.OuderCategorie "
                . "FROM producten "
                . "LEFT JOIN categorieen "
                . "ON producten.CategorieId=categorieen.CategorieId "
                . "ORDER BY producten.CategorieId ASC");
        $stmt->execute();
        $result = [];

        $alleProducten = $stmt->fetchAll();
        foreach($alleProducten as $product)
        {
            array_push( $result, new Product(
                    $product['Naam'],
                    $product['Omschrijving'],
                    $product['CategorieId'],
                    $product['Prijs'],
                    $product['Voorraad'],
                    $product['FotoAdres'],
                    $product['OuderCategorie'],
                    $product['ProductId'],
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
                    $product['Naam'], 
                    $product['Omschrijving'], 
                    $product['CategorieId'], 
                    $product['Prijs'], 
                    $product['Voorraad'], 
                    $product['FotoAdres'],
                    null,
                    $product['ProductId']
                    );
        }
        throw new Exception('Record niet gevonden of niet uniek');
    }
    
    public function update()
    {
        $pdo = DB::connect();
        if (isset($_POST['productId']))
        {
            $stmt = $pdo->prepare("UPDATE `producten` "
                    . "SET `Naam` = :naam, "
                    . "`Omschrijving` = :omschrijving, "
                    . "`CategorieId` = :categorieId, "
                    . "`Prijs` = :prijs, "
                    . "`Voorraad` = :voorraad, "
                    . "`FotoAdres` = :fotoAdres "
                    . "WHERE `ProductId` = :productId");
            $stmt->execute([
                ':naam' => $this->naam,
                ':omschrijving' => $this->omschrijving,
                ':categorieId' => $this->categorieId,
                ':prijs' => $this->prijs,
                ':voorraad' => $this->voorraad,
                ':fotoAdres' => $this->fotoAdres,
                ':productId' => $_POST['productId']
            ]);
        } else
        {
            throw new Exception('productId in POST is leeg');
        }
    }
    
    public function create()
    {
        $pdo = DB::connect();
        $stmt = $pdo->prepare("INSERT INTO `producten` "
                . "(`Naam`, `Omschrijving`, `CategorieId`, `Prijs`, `Voorraad`, `FotoAdres`) "
                . "VALUES (:naam, :omschrijving, :categorieId, :prijs, :voorraad, :fotoAdres) ");
        $stmt->execute([
                ':naam' => $this->naam,
                ':omschrijving' => $this->omschrijving,
                ':categorieId' => $this->categorieId,
                ':prijs' => $this->prijs,
                ':voorraad' => $this->voorraad,
                ':fotoAdres' => $this->fotoAdres
        ]);
    }
}