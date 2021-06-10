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
    <form action="index.php?controller=WinkelWagenController&action=addProduct">
        
    </form>
</div>

<?php require_once ( 'partials/footer.php' ); ?>