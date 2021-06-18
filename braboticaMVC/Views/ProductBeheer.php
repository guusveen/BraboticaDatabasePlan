<?php require_once ( 'partials/header.php' ); 

if (isset($_SESSION['rol']) == 'Beheer')              
             { 
?>

<!-- Header -->
<div class="headerProducten">
    <div class="transparentLayer">
        <h1>Productbeheer</h1>
    </div>
</div>

<form action="index.php?controller=Producten&action=createProduct" method="post">
    <table>
        <tr>
            <td>Naam:</td>
            <td><input type="text" id="naam" name="naam"></td>
        </tr>
        <tr>
            <td>Omschrijving:</td>
            <td><input type="text" id="omschrijving" name="omschrijving"></td>
        </tr>
        <tr>
            <td>Categorie:</td>
            <td><input type="number" id="categorieId" name="categorieId"></td>
        </tr>
        <tr>
            <td>Prijs:</td>
            <td><input type="number" step="any" id="prijs" name="prijs"></td>
        </tr>
        <tr>
            <td>Voorraad:</td>
            <td><input type="number" id="voorraad" name="voorraad"></td>
        </tr>
        <tr>
            <td>Foto adres:</td>
            <td><input type="text" id="fotoAdres" name="fotoAdres"></td>
        </tr>
    </table>


    <input class="submitButton" type="submit" value="product aanmaken">
</form>

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
        <a href="index.php?controller=Producten&action=productUpdatenPagina&productId=<?php echo $product->get('id');?>" class="productLink">
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

<?php

} else {

    header("location:index.php"); 
}
?>

<?php require_once ( 'partials/footer.php' ); ?>