<?php require_once ( 'partials/header.php' ); ?>

<div class="headergebruiker">
    <div class="transparentLayer">
        <div style="text-align: right; vertical-align: top;"><a href="index.php?controller=beheerLogin"><img src="img/beheer.png" width="15" height="15"></a></div>
        <h1><?php echo $title; ?></h1>
        <p></p>
        
    </div>
</div>



<div class="GebruikerContainer">
<?php 
   
 $message = "";
 $GebruikerId;
 $Voornaam;
 $Email;
 $Rol;

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
                $query = "SELECT * FROM gebruikers WHERE email = :email AND wachtwoord = :wachtwoord AND Rol = 'Klant'";  
                $stmt = $pdo->prepare($query);
                
                $stmt->execute(

                          
                     array(  
                          'email'          =>     $_POST["email"],  
                          'wachtwoord'     =>     $_POST["wachtwoord"],
                          

                     )  
                );               

                $gebruiker = $stmt->fetch();
                $count = $stmt->rowCount(); 
                if($count > 0)  
                {  
                     $_SESSION["email"]    = $_POST["email"];
                     $_SESSION["voornaam"] = $Voornaam;
                     $_SESSION["gebruikerId"] = $gebruiker['GebruikerId'];
                     
                       
                     header("location:index.php");  
                }
                else  
                {  
                     $message = '<label>Verkeerde gegevens</label>';  
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
                     echo '<label>'.$message.'</label>';  
                }  
                ?>  
                
                <form method="post">
                     <input hidden="true" type="text" name="voornaam" id="voornaam" value="<?php $Voornaam ?>" />
                     <input hidden="true" type="text" name="rol" id="rol" value="klant" />  
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


