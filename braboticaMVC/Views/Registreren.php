<?php require_once ( 'partials/header.php' ); ?>

<div class="headerbeheer">
    <div class="transparentLayer">
        <h1><?php echo $title; ?></h1>
        <p></p>
    </div>
</div>

<div class="BeheerContainer">
  <form class="BeheerFormulier" id="BeheerFormulier" method="post" action="index.php?controller=gebruiker&action=save1" autocomplete="off">
    
  <?php if ( isset($GebruikerId) ): ?>
    <input type="hidden" name="GebruikerId" value="<?php echo $GebruikerId; ?>">
  <?php endif; ?>
    <table border="0">
        <thead>
            <tr>
              <th></th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <td>
    <label for="Voornaam">
    <input type="text" name="Voornaam" id="Voornaam" size="44" tabindex="1" placeholder="Voornaam" value="<?php echo isset($Voornaam) ? $Voornaam : ""; ?>" >
    </label>
    
            </td>
            <td></td>
            <td>

    <label for="Telefoonnummer">
    <input type="tel" name="Telefoonnummer" id="Telefoonnummer" minlength="10" maxlength="10" size="30" tabindex="8" placeholder="Telefoonnummer" value="<?php echo isset($Telefoonnummer) ? $Telefoonnummer : ""; ?>">
    </label><br />
    
          </td></tr>
          <tr><td>

    <label for="Achternaam">
    <input type="text" name="Achternaam" id="Achternaam"  size="44" tabindex="2" placeholder="Achternaam" value="<?php echo isset($Achternaam) ? $Achternaam : ""; ?>">
    </label><br />

        </td>
        <td></td>
        <td>

    <label for="Email">
    <input type="email" name="Email" id="Email" size="30" tabindex="9" placeholder="Email" value="<?php echo isset($Email) ? $Email : ""; ?>">
    </label><br />

        </td></tr>
        <tr><td>

    <label for="Adres">
    <input type="text" name="Adres" id="Adres"  size="30" tabindex="3" placeholder="Adres" value="<?php echo isset($Adres) ? $Adres : ""; ?>">
    </label>
    <label for="Huisnummer">
    <input type="text" name="Huisnummer" id="Huisnummer"  size="7" tabindex="4" placeholder="Nr" value="<?php echo isset($Huisnummer) ? $Huisnummer : ""; ?>">
    </label><br />

        </td>
        <td></td>
        <td>
    
    <label for="Wachtwoord">
    <input type="text" name="Wachtwoord" id="Wachtwoord" size="30" tabindex="9" placeholder="Wachtwoord" value="<?php echo isset($Wachtwoord) ? $Wachtwoord : ""; ?>">
    </label><br />

        </td></tr>
        <tr><td>
    
    <label for="Postcode">
    <input type="text" name="Postcode" id="Postcode" minlength="6" maxlength="6" size="7" tabindex="5" placeholder="Postcode" value="<?php echo isset($Postcode) ? $Postcode : ""; ?>">
    </label>
    <label for="Woonplaats">
    <input type="text" name="Woonplaats" id="Woonplaats"  size="30" tabindex="6" placeholder="Woonplaats" value="<?php echo isset($Woonplaats) ? $Woonplaats : ""; ?>">
    </label><br />
    
    <input type="hidden" name="Rol" value="<?php echo isset($Rol) ? $Rol : "Klant"; ?>">

        </td>
        <td></td>
        <td> 
  
        <label for="VoorkeurTaal">Voorkeur taal
    <select name="VoorkeurTaal" style="width: 172px;">
      <option selected value="<?php echo isset($VoorkeurTaal) ? $VoorkeurTaal : "NL"; ?>">NL</option>
      <option value="<?php echo isset($VoorkeurTaal) ? $VoorkeurTaal : "EN"; ?>">EN</option>
    </select>
    </label>

        </td></tr>
        <tr><td>

    <label for="Land">
    <input type="text" name="Land" id="Land"  size="44" tabindex="7" placeholder="Land" value="<?php echo isset($Land) ? $Land : ""; ?>">
    </label><br />

        </td>
        <td></td>
        <td>



        </td></tr></tbody></table>
  <button type="submit" name="submit_button" class="btn btn-primary">Verzenden</button>
</form>

</div>


<?php require_once ( 'partials/footer.php' ); ?>