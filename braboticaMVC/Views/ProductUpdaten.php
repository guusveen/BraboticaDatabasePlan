<?php require_once ( 'partials/header.php' ); 
?>

<!-- Header -->
<div class="headerProducten">
    <div class="transparentLayer">
        <h1>Wijzig product: <?php echo $product->get('naam') ?></h1>
    </div>
</div>

<div>
    <form action="index.php?controller=Producten&action=updateProduct" method="post">
        <input type="hidden" name="productId" value="<?php echo $product->get('id'); ?>">
        <table >
            <tr>
                <td>Naam:</td>
                <td><input type="text" id="naam" name="naam" value="<?php echo $product->get('naam') ?>"></td>
            </tr>
            <tr>
                <td>Omschrijving:</td>
                <td><input type="text" id="omschrijving" name="omschrijving" value="<?php echo $product->get('omschrijving')?>"></td>
            </tr>
            <tr>
                <td>Categorie:</td>
                <td><input type="number" id="categorieId" name="categorieId" value="<?php echo $product->get('categorieId') ?>"></td>
            </tr>
            <tr>
                <td>Prijs:</td>
                <td><input type="number" step="any" id="prijs" name="prijs" value="<?php echo $product->get('prijs') ?>"></td>
            </tr>
            <tr>
                <td>Voorraad:</td>
                <td><input type="number" id="voorraad" name="voorraad" value="<?php echo $product->get('voorraad') ?>"></td>
            </tr>
            <tr>
                <td>Foto adres:</td>
                <td><input type="text" id="fotoAdres" name="fotoAdres" value="<?php echo $product->get('fotoAdres') ?>"></td>
            </tr>
        </table>
        
        
        <input class="submitButton" type="submit" value="wijziging indienen">
    </form>
    <h1><?php echo $product->get('naam') ?></h1>
    <p><?php echo $product->get('omschrijving')?></p>
    <img src="<?php echo $product->get('fotoAdres')?>">
</div>

<?php require_once ( 'partials/footer.php' ); ?>