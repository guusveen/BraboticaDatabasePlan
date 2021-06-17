<?php require_once ( 'partials/header.php' ); ?>

<div class="headerbeheer">
    <div class="transparentLayer">
        <h1><?php echo $title; ?></h1>
    </div>
</div>

<div class="grid-overview">
    <button style="margin-right:20px;" onclick="window.location.href='index.php?controller=Gebruiker'">
        <div><img class="overview" src="img/gebruikers.png"><br />Gebruikers beheer</div>
    </button>
    <button style="margin-right:20px;" onclick="window.location.href='index.php?controller=Producten&action=productBeheerPagina'">
        <div><img class="overview" src="img/artikelen.png"><br />Producten beheer</div>
    </button>
    <button style="margin-right:20px;" onclick="window.location.href='index.php?controller=BeheerZoektermen'">
        <div><img class="overview" src="img/categorieen.png"><br />Zoektermen beheer</div>
    </button>
</div>

<?php require_once ( 'partials/footer.php' ); ?>

