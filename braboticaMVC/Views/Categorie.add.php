<?php require_once ( 'partials/header.php' ); ?>

<div class="headerbeheer">
    <div class="transparentLayer">
        <h1><?php echo $title; ?></h1>
        <p></p>
    </div>
</div>
<div class="Submenu">
    <button style="margin-right:20px;" onclick="window.location.href='index.php?controller=Gebruiker'">Gebruiker beheer</button>
    <button class="card btn" onclick="filterSelectie('robot-erwin')">Artikel beheer</button>
    <button class="card btn" onclick="filterSelectie('robot-taoufik')">Categorie beheer</button>
</div>

<div class="BeheerContainer">
  <form class="BeheerFormulier" id="BeheerFormulier" method="post" action="index.php?controller=gebruiker&action=save" autocomplete="off">
    
  <?php if ( isset($CategorieId) ): ?>
    <input type="hidden" name="CategorieId" value="<?php echo $CategorieId; ?>">
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
                    <label for="HoofdCategorie">
                    <input type="text" name="HoofdCategorie" id="HoofdCategorie" size="44" tabindex="1" placeholder="HoofdCategorie" value="<?php echo isset($HoofdCategorie) ? $HoofdCategorie : ""; ?>" >
                    </label>
                </td>
            </tr>
        </tbody>
    </table>
    <button type="submit" name="submit_button" class="btn btn-primary">Verzenden</button>
    </form>
</div><div>
    <form class="BeheerFormulier" id="BeheerFormulier" method="post" action="index.php?controller=gebruiker&action=save" autocomplete="off">
    
  <?php if ( isset($CategorieId) ): ?>
    <input type="hidden" name="CategorieId" value="<?php echo $CategorieId; ?>">
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
                    <label for="SubCategorie">
                    <input type="text" name="SubCategorie" id="SubCategorie" size="44" tabindex="1" placeholder="SubCategorie" value="<?php echo isset($SubCategorie) ? $SubCategorie : ""; ?>" >
                    </label>
                </td>
            </tr>
        </tbody>
    </table>
    <button type="submit" name="submit_button" class="btn btn-primary">Verzenden</button>
    </form>

</div>


<?php require_once ( 'partials/footer.php' ); ?>