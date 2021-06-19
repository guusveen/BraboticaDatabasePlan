<?php

require_once ( 'Model.php' );

class Winkelwagen extends Model
{
    
    protected int $gebruikerId;
    protected ?int $productId;
    protected ?int $aantal;
    protected ?string $productNaam;
    protected ?float $prijs;
    protected ?float $totaal;
    

    public function __construct(int $gebruikerId, 
            int $productId = null, 
            int $aantal = null, 
            string $productNaam = null,
            float $prijs = null,
            float $totaal = null)
    {
        $this->gebruikerId = $gebruikerId;
        $this->productId = $productId;
        $this->aantal = $aantal;
        $this->productNaam = $productNaam;
        $this->prijs = $prijs;
        $this->totaal = $totaal;
    }

    public function winkelwagenKlant()
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT winkelwagens.*, producten.Naam, producten.Prijs "
                . "FROM winkelwagens "
                . "LEFT JOIN producten "
                . "ON winkelwagens.ProductId = producten.ProductId "
                . "WHERE winkelwagens.GebruikerId = " . $this->gebruikerId);
        $stmt->execute();
        $winkelwagen = [];
        $winkelwagenRegels = $stmt->fetchAll();
        foreach($winkelwagenRegels as $winkelwagenRegel)
        {
            array_push( $winkelwagen, new Winkelwagen(
                    $winkelwagenRegel['GebruikerId'],
                    $winkelwagenRegel['ProductId'],
                    $winkelwagenRegel['Aantal'],
                    $winkelwagenRegel['Naam'],
                    $winkelwagenRegel['Prijs'],
                    $winkelwagenRegel['Prijs'] * $winkelwagenRegel['Aantal']));
        }
        return $winkelwagen;
    }

    public function winkelwagenRegel()
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT winkelwagens.*, producten.Naam "
                . "FROM winkelwagens "
                . "LEFT JOIN producten "
                . "ON winkelwagens.ProductId = producten.ProductId "
                . "WHERE GebruikerId = :gebruikerId "
                . "AND winkelwagens.ProductId = :productId");
        $stmt->execute([
            ':gebruikerId' => $this->gebruikerId,
            ':productId' => $this->productId
        ]);

        $winkelwagenRegel = $stmt->fetch();
        if($stmt->rowCount() > 0)
        {
            if($this->aantal == null)
            {
                $this->aantal = $winkelwagenRegel['Aantal'];
            }
            return $this;
        } else
        {
            return null;
        }
    }

    public function save()
    {
        $pdo = DB::connect();
        if ($this->winkelwagenRegel() != null)
        {
            $stmt = $pdo->prepare("UPDATE `winkelwagens` "
                    . "SET Aantal = :aantal "
                    . "WHERE GebruikerId = :gebruikerId "
                    . "AND ProductId = :productId");
            $stmt->execute([
                ':aantal' => $this->aantal,
                ':gebruikerId' => $this->gebruikerId,
                ':productId' => $this->productId
            ]);
        } else
        {
            $stmt = $pdo->prepare("INSERT INTO `winkelwagens` (GebruikerId, ProductId, Aantal) "
                    . "VALUES (:gebruikerId, :productId, :aantal)");
            $stmt->execute([
                ':gebruikerId' => $this->gebruikerId,
                ':productId' => $this->productId,
                ':aantal' => $this->aantal
            ]);
        }
    }

    public function delete()
    {
        $pdo = DB::connect();
        
        $stmt = $pdo->prepare("DELETE FROM `winkelwagens` "
                . "WHERE GebruikerId = :gebruikerId "
                . "AND ProductId = :productId");
        $stmt->execute([
                ':gebruikerId' => $this->gebruikerId,
                ':productId' => $this->productId
            ]);
    }

}