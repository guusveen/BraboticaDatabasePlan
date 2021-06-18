<?php

require_once ( 'Model.php' );

class BeheerLogin extends Model
{
    
    protected int $GebruikerId;
    protected string $Voornaam;
    protected string $Email;
    protected string $Rol;
    
    public function __construct(int $GebruikerId, string $Voornaam, string $Email, string $Rol)
    {
        $this->GebruikerId = $GebruikerId;
        $this->Voornaam = $Voornaam;
        $this->Email = $Email;
        $this->Rol = $Rol;
    }
    
    public static function login()
    {
        try
        {
            if(isset($_POST["login"]))  
      {
        $pdo = DB::connect();

        $stmt = $pdo->prepare("SELECT * FROM gebruikers WHERE email = :email AND wachtwoord = :wachtwoord");
        $stmt->execute([
            ':email' => $_GET['email']
        ]);
        $count = $stmt->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["email"] = $_POST["email"];
                     $_SESSION["voornaam"] = $Voornaam;
                     $_SESSION["rol"] = $Rol;
                     header("location:index.php");    
                }  
                else  
                {  
                     $message = '<label>Verkeerde Gegevens</label>';  
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