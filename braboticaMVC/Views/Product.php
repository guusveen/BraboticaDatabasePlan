<?php require_once ( 'partials/header.php' ); ?>

<!-- Header -->
<div class="headerProducten">
    <div class="transparentLayer">
        <h1>Producten</h1>
        <p>Bouw je eigen robot</p>
    </div>
</div>

<div>
    <h1><?php echo $product->get('naam') ?></h1>
    <p><?php echo $product->get('omschrijving')?></p>
    <img src="<?php echo $product->get('fotoAdres')?>">
    <h2>€<?php echo $product->get('prijs')?></h2>
    <form action="index.php?controller=Winkelwagen&action=save" method="post">
        <input type="hidden" name="productId" value="<?php echo $product->get('id'); ?>">
        <input type="number" name="aantal" min="1" max="10" value="1">
        <input type="submit" value="Voeg toe aan winkelwagen">
    </form>
</div>

<?php require_once ( 'partials/footer.php' ); ?>