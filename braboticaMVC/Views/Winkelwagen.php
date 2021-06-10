<?php require_once ( 'partials/header.php' ); ?>

<!-- Header -->
<div class="headerProducten">
    <div class="transparentLayer">
        <h1>Producten</h1>
        <p>Bouw je eigen robot</p>
    </div>
</div>

<?php foreach ($winkelwagenKlant as $winkelwagenRegel): ?>
<div>
    <h1><?php echo $winkelwagenRegel->get('naam') ?></h1>
    <p><?php echo $winkelwagenRegel->get('omschrijving')?></p>
    <img src="<?php echo $winkelwagenRegel->get('fotoAdres')?>">
    <form action="index.php?controller=WinkelWagenController&action=addProduct">
        
    </form>
</div>
<?php endforeach ?>

<?php require_once ( 'partials/footer.php' ); ?>