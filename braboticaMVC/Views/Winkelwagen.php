<?php require_once ( 'partials/header.php' ); ?>

<!-- Header -->
<div class="headerProducten">
    <div class="transparentLayer">
        <h1>Producten</h1>
        <p>Bouw je eigen robot</p>
    </div>
</div>

<table>
    <tr>
        <th>Naam</th>
        <th>Prijs per stuk</th>
        <th>Aantal</th>
        <th>Prijs</th>
    </tr>
    <?php foreach ($winkelwagenKlant as $winkelwagenRegel): ?>
    <tr>
        <td><?php echo $winkelwagenRegel->get('productNaam') ?></td>
        <td>€<?php echo $winkelwagenRegel->get('prijs') ?></td>
        <td>
            <form action="index.php?controller=Winkelwagen&action=save" method="post">
                <input type="hidden" name="productId" value="<?php echo $winkelwagenRegel->get('productId'); ?>">
                <input type="number" name="aantal" min="1" max="10" value="<?php echo $winkelwagenRegel->get('aantal') ?>">
                <input type="submit" value="Update aantal">
            </form>
        </td>
        <td>€<?php echo $winkelwagenRegel->get('totaal')?></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td>Eindbedrag:</td>
        <td></td>
        <td></td>
        <td>€<?php echo $eindbedrag; ?></td>
    </tr>
    <tr>
        <td>
            <form action="index.php?controller=Winkelwagen&action=bestel" method="post">
                <input type="submit" value="Plaats bestelling">
            </form>
        </td>
    </tr>
</table>


<?php require_once ( 'partials/footer.php' ); ?>