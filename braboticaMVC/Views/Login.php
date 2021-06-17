<?php require_once ( 'partials/header.php' ); ?>

<div class="headergebruiker">
    <div class="transparentLayer">
        <h1><?php echo $title; ?></h1>
        <p></p>
    </div>
</div>

<div class="GebruikerContainer">
  <?php 
  if (isset($message))
{
  echo "<label>'.$message.'</label>";

}
?>

  <form method="post" action="index.php"> <!-- action="index.php?controller=Login&action=uitvoeren"> <!-/- class="GebruikerFormulier" id="GebruikerFormulier" action="Views/login_success.php" autocomplete="off"> -->
        
    <label for="Email">
    <input type="text" name="Email" id="Email" size="44" tabindex="1" placeholder="Email adres" value="<?php echo isset($Email) ? $Email : ""; ?>" >
    </label><p></p>

    <label for="Wachtwoord">
    <input type="text" name="Wachtwoord" id="Wachtwoord" size="44" tabindex="1" placeholder="Wachtwoord" value="<?php echo isset($Wachtwoord) ? $Wachtwoord : ""; ?>" >
    </label><p></p>
  	<input type="submit" name="inloggen" id="submit" value="Login"></input>
  	<p>Nieuwe gebruiker? <a href="index.php?controller=Gebruiker&action=nieuwegebruiker">Registreer hier</a></p>
</form>

</div>


<?php require_once ( 'partials/footer.php' ); ?>

