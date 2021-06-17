<?php require_once ( 'partials/header.php' ); ?>

<div class="headergebruiker">
    <div class="transparentLayer">
        <h1><?php echo $title; ?></h1>
        <p></p>
    </div>
</div>

<div class="GebruikerContainer">
<?php 
   
 $message = "";
 $Voornaam = "";

 try  
 {    
      $pdo = DB::connect();

      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["email"]) || empty($_POST["wachtwoord"]))  
           {  
                $message = '<label>Graag alle velden invullen</label><p></p>';  
           }  
           else  
           {  
                $query = "SELECT * FROM gebruikers WHERE email = :email AND wachtwoord = :wachtwoord";  
                $stmt = $pdo->prepare($query);  
                $stmt->execute(
                
                     array(  
                          'email'     =>     $_POST["email"],  
                          'wachtwoord'     =>     $_POST["wachtwoord"],
                     )  
                );  
                                
                $count = $stmt->rowCount(); 
                if($count > 0)  
                {  
                     $_SESSION["email"] = $_POST["email"];
                      $_SESSION["voornaam"] = $Voornaam;
                       
                     header("location:index.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>   

           <div>
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
                
                <form method="post">
                     <input hidden="true" type="text" name="voornaam" id="voornaam" size="44" tabindex="1" />  
                     <label for="Email">
                     <input type="text" name="email" id="Email" size="44" tabindex="1" placeholder="Email adres" />  
                     </label><p></p>
                     
                     <label for="Wachtwoord">
                     <input type="password" name="wachtwoord" id="Wachtwoord" size="44" tabindex="2" placeholder="Wachtwoord" />  
                     </label><p></p>
                     
                     <input type="submit" name="login" id="submit" value="Login" />
                     <p>Nieuwe gebruiker? <a href="index.php?controller=Gebruiker&action=nieuwegebruiker">Registreer hier</a></p>
                </form>
              </div>
            </div>


