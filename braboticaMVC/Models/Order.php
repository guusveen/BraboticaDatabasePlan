<?php

class Order extends Model
{
    protected int $gebruikerId;
    protected string $postcode;
    protected int $huisnummer;
    protected ?string $orderDatum;
    protected int $orderId;


    public function __construct(int $gebruikerId,
            string $postcode, 
            int $huisnummer, 
            string $orderDatum = null)
    {
        $this->gebruikerId = $gebruikerId;
        $this->postcode = $postcode;
        $this->huisnummer = $huisnummer;
        $this->orderDatum = $orderDatum;
    }

    public function create()
    {
        $pdo = DB::connect();
        
        $stmt = $pdo->prepare("INSERT INTO orders "
                . "(GebruikerId, Postcode, Huisnummer, Orderdatum) "
                . "VALUES (:gebruikerId, :postcode, :huisnummer, NOW())");
        $stmt->execute([":gebruikerId" => $this->gebruikerId,
            ":postcode" => $this->postcode,
            ":huisnummer" => $this->huisnummer]);
        
        return $pdo->lastInsertId();
    }
}