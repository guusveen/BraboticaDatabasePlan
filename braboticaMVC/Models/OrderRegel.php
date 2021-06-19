<?php

require_once ( 'Model.php' );

class OrderRegel extends Model
{
    
    protected int $gebruikerId;
    protected int $productId;
    protected int $aantal;    

    public function __construct(int $gebruikerId, 
            int $productId, 
            int $aantal)
    {
        $this->gebruikerId = $gebruikerId;
        $this->productId = $productId;
        $this->aantal = $aantal;
    }

    public function create()
    {
        $pdo = DB::connect();
        $stmt = $pdo->prepare("INSERT INTO `orderregels` (OrderId, ProductId, Aantal) "
                . "VALUES (:gebruikerId, :productId, :aantal)");
        $stmt->execute([
            ':gebruikerId' => $this->gebruikerId,
            ':productId' => $this->productId,
            ':aantal' => $this->aantal
        ]);
    }
}