<?php

require_once ( 'Model.php' );

class WinkelWagen extends Model
{
    
    protected int $gebruikerId;
    protected int $productId;
    protected int $aantal;
    protected string $productNaam;
    

    public function __construct(int $gebruikerId, int $productId, int $aantal, string $productNaam)
    {
        $this->gebruikerId = $gebruikerId;
        $this->productId = $productId;
        $this->aantal = $aantal;
        $this->aantal = $productNaam;
    }

    public static function WinkelwagenKlant()
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT winkelwagens.*, "
                . "producten.Naam, "
                . "FROM winkelwagens "
                . "LEFT JOIN producten "
                . "ON winkelwagens.ProductId = producten.ProductId "
                . "WHERE winkelwagens.GebruikerId = " . $gebruikerId);
        $stmt->execute();
        $winkelwagen = [];
        $winkelwagenRegels = $stmt->fetchAll();
        foreach($winkelwagenRegels as $winkelwagenRegel)
        {
            array_push( $winkelwagen, new Winkelwagen(
                    $winkelwagenRegel['gebruikerId'],
                    $winkelwagenRegel['productId'],
                    $winkelwagenRegel['aantal'],
                    $winkelwagenRegel['productNaam']));
        }
        return $winkelwagen;
    }

    public static function WinkelwagenRegel(int $gebruikerId, int $productId)
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM winkelwagens "
                . "WHERE GebruikerId = :gebruikerId "
                . "AND ProductId = :productId");
        $stmt->execute([
            ':gebruikerId' => $gebruikerId,
            ':productId' => $productId
        ]);

        $winkelwagenRegel = $stmt->fetch();

        if($stmt->rowCount() > 0)
        {
            $this->gebruikerId = $winkelwagenRegel['gebruikerId'];
            $this->productId = $winkelwagenRegel['productId'];
            $this->aantal = $winkelwagenRegel['aantal'];
            
            return $this;
        } else
        {
            return null;
        }
    }

    public static function save(int $gebruikerId, int $productId, int $aantal)
    {
        $pdo = DB::connect();
        if ( $this->getWinkelwagenRegel($gebruikerId, $productId) != null )
        {
            $stmt = $pdo->prepare("UPDATE `winkelwagens` "
                    . "SET aantal = :aantal "
                    . "WHERE GebruikerId = :gebruikerId "
                    . "AND ProductId = :productId");
            $stmt->execute([
                ':aantal' => $_POST['aantal'],
                ':gebruikerId' => $_POST['gebruikerid'],
                ':productId' => $_POST['productid']
            ]);
        } else
        {
            $stmt = $pdo->prepare("INSERT INTO `winkelwagens` (GebruikerId, ProductId, Aantal) "
                    . "VALUES (:gebruikerId, :productId, :aantal)");
            $stmt->execute([
                ':gebruikerId' => $_POST['gebruikerid'],
                ':productId' => $_POST['productid'],
                ':aantal' => $_POST['aantal']
            ]);
        }
    }

    public static function deleteProduct(int $gebruikerId, int $productId)
    {
        $pdo = DB::connect();
        
        $stmt = $pdo->prepare("DELETE FROM `winkelwagens` "
                . "WHERE GebruikerId = :gebruikerId "
                . "AND ProductId = :productId");
        $stmt->execute([
                ':gebruikerId' => $_POST['gebruikerid'],
                ':productId' => $_POST['productid']
            ]);
    }

}