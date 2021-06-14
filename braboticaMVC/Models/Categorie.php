<?php

class Categorie extends Model
{
    
    protected int $categorieId;
    protected string $naam;
    protected ?int $ouderId;
    protected array $subCategorieen;

    public function __construct(int $categorieId, string $naam, int $ouderId = null, array $subCategorieen = null)
    {
        $this->categorieId = $categorieId;
        $this->naam = $naam;
        $this->ouderId = $ouderId;
        $this->subCategorieen = $subCategorieen;
    }

    public static function alleCategorieen()
    {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM categorieen");
        $stmt->execute();

        $categorieen = [];

        $alleCategorieen = $stmt->fetchAll();

        foreach($alleCategorieen as $categorie)
        {
            $categorieId = $categorie['CategorieId'];
            if($categorie['OuderCategorie'] === null)
            {
                $subCategorieen = self::getSubCategorieen($alleCategorieen, $categorieId);
                $categorieen[$categorieId] = new Categorie(
                        $categorieId,
                        $categorie['Naam'],
                        null,
                        $subCategorieen);
            }
        }
        return $categorieen;
    }
    
    private static function getSubCategorieen(array $alleCategorieen, string $ouderId) :array
    {
        $subCategorieen = [];
        foreach($alleCategorieen as $categorie)
        {
           
            if($categorie['OuderCategorie'] === $ouderId)
            {
                $categorieId = $categorie['CategorieId'];
                $subSubCategorieen = self::getSubCategorieen($alleCategorieen, $categorieId);
                $categorieObject = new Categorie(
                        $categorieId, 
                        $categorie['Naam'],
                        $categorie['OuderCategorie'],
                        $subSubCategorieen);
                $subCategorieen[$categorieId] = $categorieObject;
            }
        }
        return $subCategorieen;
    }
}