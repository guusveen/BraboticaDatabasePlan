<?php

require_once ( 'Model.php' );

class Login extends Model
{
    
    protected string $username = "";
    protected string $naam = "";
    protected string $omschrijving = "";
    protected int $categorieId = 0;
    protected float $prijs = 0;
    protected int $voorraad = 0;
    protected string $fotoAdres = "";
    protected ?int $ouderCategorieId;
    protected ?int $id;
    
    public function __construct(string $username, string $naam, string $omschrijving, int $categorieId, 
            float $prijs, int $voorraad, string $fotoAdres, int $ouderCategorieId = null, int $id = null)
    {
        $this->username = $username;
        $this->naam = $naam;
        $this->omschrijving = $omschrijving;
        $this->categorieId = $categorieId;
        $this->prijs = $prijs;
        $this->voorraad = $voorraad;
        $this->fotoAdres = $fotoAdres;
        $this->ouderCategorieId = $ouderCategorieId;
        $this->id = $id;
    }
    
    public static function login()
    {
        try
        {
            if(isset($_POST["login"]))  
      {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $stmt->execute([
            ':username' => $_GET['username']
        ]);
        $count = $stmt->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:login_success.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }

        $user = $stmt->fetch();
    }
    }
    catch(PDOException $error)  
     {  
          $message = $error->getMessage();  
     } 
    }
}