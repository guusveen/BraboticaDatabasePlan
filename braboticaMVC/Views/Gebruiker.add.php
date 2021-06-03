<?php require_once ( 'partials/header.php' ); ?>


<h1><?php echo $title; ?></h1>

<div class="contactGebruiker">
  <form class="contactformulier" id="contactformulier" method="post" action="index.php?controller=Beheer&action=save" autocomplete="off">
  
  <?php if ( isset($GebruikerId) ): ?>
    <input type="hidden" name="GebruikerId" value="<?php echo $GebruikerId; ?>">
  <?php endif; ?>
  
  <div class="form-group">
    <label for="Voornaam">Voornaam</label>
    <input type="text" name="Voornaam" id="Voornaam" size="30" tabindex="1" class="form-control" value="<?php echo isset($Voornaam) ? $Voornaam : ""; ?>" >
  </div>

  <div class="form-group">
    <label for="Achternaam">Achternaam</label>
    <input type="text" name="Achternaam" id="Achternaam"  size="30" tabindex="2" class="form-control" value="<?php echo isset($Achternaam) ? $Achternaam : ""; ?>">
  </div>

  <div class="form-group">
    <label for="Telefoonnummer">Telefoonnummer</label>
    <input type="tel" name="Telefoonnummer" id="Telefoonnummer" minlength="10" maxlength="10" size="30" tabindex="3" class="form-control" value="<?php echo isset($Telefoonnummer) ? $Telefoonnummer : ""; ?>">
  </div>
  
  <div class="form-group">
    <label for="Email">Email</label>
    <input type="email" name="Email" id="Email" size="30" tabindex="4" value="<?php echo isset($Email) ? $Email : ""; ?>">
  </div>

  <div class="form-group">
    <label for="Rol">Rol</label>
    <select name="Rol">
      <option selected value="<?php echo isset($Rol) ? $Rol : "Klant"; ?>">Klant</option>
      <option value="<?php echo isset($Rol) ? $Rol : "Medewerker"; ?>">Medewerker</option>
      <option value="<?php echo isset($Rol) ? $Rol : "Admin"; ?>">Admin</option>
    </select>
  </div>

  <div class="form-group">
    <label for="Wachtwoord">Wachtwoord</label>
    <input type="text" name="Wachtwoord" class="form-control" id="Wachtwoord" value="<?php echo isset($Wachtwoord) ? $Wachtwoord : ""; ?>">
  </div>

  <div class="form-group">
    <label for="VoorkeurTaal">VoorkeurTaal</label>
    <select name="VoorkeurTaal">
      <option selected value="<?php echo isset($VoorkeurTaal) ? $VoorkeurTaal : "NL"; ?>">NL</option>
      <option value="<?php echo isset($VoorkeurTaal) ? $VoorkeurTaal : "EN"; ?>">EN</option>
    </select>
  </div>

  <button type="submit" name="submit_button" class="btn btn-primary">Submit</button>
</form>
</div>

<?php require_once ( 'partials/footer.php' ); ?>