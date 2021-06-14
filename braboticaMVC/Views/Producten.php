<?php require_once ( 'partials/header.php' ); ?>

<!-- Header -->
<div class="headerProducten">
    <div class="transparentLayer">
        <h1>Producten</h1>
        <p>Bouw je eigen robot</p>
    </div>
</div>

<!-- Filters -->
<h2>Filters</h2>
<ul class="categorieen">
    <?php foreach($categorieen as $categorie) : ?>
    <li categorie="<?php echo $categorie->get('categorieId')?>">
        <?php echo $categorie->get('naam') ?>
    </li>
    <ul class="subCategorieen">
        <?php foreach($categorie->get('subCategorieen') as $subCategorie) : ?>
        <li categorie="<?php echo $subCategorie->get('categorieId')?>"><?php echo $subCategorie->get('naam') ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endforeach; ?>
</ul>

<!-- Producten -->
<div class="row" style="margin-top: 20px;">
    <?php foreach($producten as $product) : ?> 
    <div class="column" 
         categorieid="<?php echo $product->get('categorieId')?>" 
         oudercategorieid="<?php echo $product->get('ouderCategorieId')?>">
        <a href="index.php?controller=Producten&action=productPagina&productId=<?php echo $product->get('id');?>" class="productLink">
            <div class="productCard">
                <img src="<?php echo $product->get('fotoAdres')?>" style="width:100%">
                <h2><?php echo $product->get('naam') ?></h2>
                <p class="productPrice"><?php echo $product->get('prijs') ?> Euro</p>
                <p><?php echo $product->get('omschrijving')?></p>
            </div>
        </a>
    </div>
    <?php endforeach; ?> 
</div>

<?php require_once ( 'partials/footer.php' ); ?>