<?php require_once ( 'partials/header.php' ); ?>

<!-- Header -->
<div class="headerProducten">
    <div class="transparentLayer">
        <h1>Producten</h1>
        <p>Bouw je eigen robot</p>
    </div>
</div>

<!-- Filters -->
<div id="filterContainer">
    <!-- Filter categorie-->
    <button class="card btn active" onclick="filterSelectie('alle')">Alle producten</button>
    <button class="card btn" onclick="filterSelectie('doe-het-zelf')">Doe-het-zelf robot</button>
    <button class="card btn" onclick="filterSelectie('kant-en-klaar')">Kant-en-klaar robot</button>
    <button class="card btn" style="margin-right:20px;" onclick="filterSelectie('materiaal')">Materiaal</button>
    <!-- Filters robot -->
    <button class="card btn" onclick="filterSelectie('robot-guus')">Robot Guus</button>
    <button class="card btn" onclick="filterSelectie('robot-thijs')">Robot Thijs</button>
    <button class="card btn" onclick="filterSelectie('robot-linda')">Robot Linda</button>
    <button class="card btn" onclick="filterSelectie('robot-erwin')">Robot Erwin</button>
    <button class="card btn" onclick="filterSelectie('robot-taoufik')">Robot Taoufik</button>
</div>

<!-- Producten -->

<div class="row" style="margin-top: 20px;">
    <?php foreach($producten as $product) : ?> 
        <div class="column productFilters alle doe-het-zelf robot-linda">
            <a href="index.php?controller=Producten&action=productPagina&productId=<?php echo $product->get('id');?>" class="productLink">
                <div class="productCard">
                    <img src="<?php echo $product->get('fotoAdres')?>" style="width:100%">
                    <h2><?php echo $product->get('naam') ?></h2>
                    <p class="productPrice"><?php echo $product->get('prijs') ?> Euro</p>
                    <p><?php echo $product->get('omschrijving')?></p>
                </div>
            </a>
        </div>   
    <?php endforeach ?>
    
</div>

<?php require_once ( 'partials/footer.php' ); ?>