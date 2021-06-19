<?php

class Adres extends Model
{
    protected int $gebruikerId;
    protected ?string $straat;
    protected ?int $huisnummer;
    protected ?string $woonplaats;
    protected ?string $land;
    protected ?string $postcode;

    public function __construct(int $gebruikerId, 
            string $straat = null, 
            int $huisnummer = null, 
            string $woonplaats = null,
            string $land = null,
            string $postcode = null)
    {
        $this->gebruikerId = $gebruikerId;
        $this->straat = $straat;
        $this->huisnummer = $huisnummer;
        $this->woonplaats = $woonplaats;
        $this->land = $land;
        $this->postcode = $postcode;
    }

    public function getAdres()
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM adressen WHERE GebruikerId = :gebruikerId");
        $stmt->execute([
            ':gebruikerId' => $this->gebruikerId
        ]);

        $adres = $stmt->fetch();

        if($stmt->rowCount() === 1)
        {
            return new Adres(
                    $adres['GebruikerId'], 
                    $adres['Adres'], 
                    $adres['Huisnummer'], 
                    $adres['Woonplaats'], 
                    $adres['Land'], 
                    $adres['Postcode']
                    );
        }
        throw new Exception('Record niet gevonden of niet uniek');
    }
}