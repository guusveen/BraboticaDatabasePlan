<?php

require_once ( 'Model.php' );
require_once ( 'Product.php' );

class Zoekterm extends Model
{
    
    protected string $zoekterm;
    protected ?string $zoekdatum;
    protected ?int $id;
    
    public function __construct(string $zoekterm, string $zoekdatum = null, int $id = null)
    {
        $this->zoekterm = $zoekterm;
        $this->zoekdatum = $zoekdatum;
        $this->id = $id;
    }
    
    public static function alleZoektermen()
    {
        $pdo = DB::connect();
        
        $stmt = $pdo->prepare("SELECT * FROM zoektermen");
        $stmt->execute();
        
        $zoektermObjecten = [];
        $zoektermen = $stmt->fetchAll();
        foreach($zoektermen as $zoekterm)
        {
            array_push($zoektermObjecten, new Zoekterm($zoekterm['Zoekterm'], $zoekterm['Zoekdatum'], $zoekterm['ZoektermId']));
        }
        return $zoektermObjecten;
    }
    
    public function create()
    {
        $pdo = DB::connect();
        $stmt = $pdo->prepare("INSERT INTO `zoektermen` "
                . "(`Zoekterm`, `Zoekdatum`) "
                . "VALUES (:zoekterm, NOW())");
        $stmt->execute([
                ':zoekterm' => $this->zoekterm,
        ]);
    }
}