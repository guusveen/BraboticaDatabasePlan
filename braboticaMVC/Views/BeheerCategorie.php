<?php require_once ( 'partials/header.php' ); ?>

<?php var_dump($pagina); ?>

<div class="headerbeheer">
    <div class="transparentLayer">
        <h1><?php echo $title; ?></h1>
        <p></p>
    </div>
</div>
<div class="Submenu">
    <button style="margin-right:40px;" onclick="window.location.href='index.php?controller=BeheerCategorie&action=add'">Categorie toevoegen</button>
    <button onclick="window.location.href='index.php?controller=Gebruiker'">Gebruiker beheer</button>
    <button onclick="window.location.href='index.php?controller=BeheerArtikel'">Artikel beheer</button>
    
</div>


<div class="BeheerContainer">
    <table border="0">
        <thead>
            <tr>
                <th width="120" align="right">ID</th>
                <th width="120" align="right">Hoofd Categorie</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($HoofdCategorie as $hcategorie) : ?>
            <tr>
                <td align="right"><?php echo $hcategorie->get('CategorieId'); ?></td>
                <td align="right"><?php echo $hcategorie->get('Naam'); ?></td>
                <td><a href="index.php?controller=BeheerCategorie&action=edit&CategorieId=<php echo $hcategorie->get('CategorieId'); ?>">
                    <button>Bewerken</button>
                </a></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>

<p></p>

<div class="BeheerContainer">
    <table border="0">
        <thead>
            <tr>
                <th width="120" align="right">ID</th>
                <th width="120" align="right">Sub categorie</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($Categorie as $categorie) : ?>
            <tr>
                <td align="right"><?php echo $categorie->get('CategorieId'); ?></td>
                <td align="right"><?php echo $categorie->get('Naam'); ?></td>
                <td><a href="index.php?controller=BeheerCategorie&action=edit&CategorieId=<?php echo $categorie->get('CategorieId'); ?>">
                    <button>Bewerken</button>
                </a></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>
<nav>
    <a href="index.php?controller=Beheer&action=add">Gebruiker toevoegen</a>
</nav>
<?php require_once ( 'partials/footer.php' ); ?>