<?php require_once ( 'partials/header.php' ); ?>

<div class="headerportfolio">
    <div class="transparentLayer">
        <h1>Portfolio</h1>
        <p>Wat wij vertellen op verjaardagen</p>
    </div>
</div>

<input type="text" id="filterBar" onkeyup="filterCards()" placeholder="Zoeken naar projecten...">

<div class="grid-container" id="gridContainer">
    <div class="card" id="card0">
        <div class="bg-img" style="background-image: url(img/thijs/school0.jpg); background-color: bisque;"></div>            
        <div class="content">
            <h4 class="card-header" style="font-size: 18px;" id="card0header">Roald</h4>
            <h3 style="font-size: 16px;" id="card0date">16-09-2020</h3>
            <hr />
            <p style="font-size: 16px;" id="card0text">Omschrijving</p>  
            <button onclick="alertButton()">Lees meer >></button>  
        </div>
    </div>

    <div class="card" id="card1">
        <div class="bg-img" style="background-image: url(img/thijs/school1.jpg); background-color: chartreuse;"></div>
        <div class="content">
            <h4 class="card-header" style="font-size: 18px;" id="card1header">Roald</h4>
            <h3 style="font-size: 16px;" id="card1date">16-09-2020</h3>
            <hr />
            <p style="font-size: 16px;" id="card1text">Omschrijving</p>  
            <button onclick="alertButton()">Lees meer >></button>             
        </div>
    </div>

    <div class="card" id="card2">
        <div class="bg-img" style="background-image: url(img/thijs/school2.jpg); background-color: aquamarine;"></div>
        <div class="content">
            <h4 class="card-header" style="font-size: 18px;" id="card2header">Roald</h4>
            <h3 style="font-size: 16px;" id="card2date">16-09-2020</h3>
            <hr />
            <p style="font-size: 16px;" id="card2text">Omschrijving</p>  
            <button onclick="alertButton()">Lees meer >></button>  
        </div>
    </div>

    <div class="card" id="card3">
        <div class="bg-img" style="background-image: url(img/thijs/school3.jpg); background-color: goldenrod;"></div>            
        <div class="content">
            <h4 class="card-header" style="font-size: 18px;" id="card3header">Roald</h4>
            <h3 style="font-size: 16px;" id="card3date">16-09-2020</h3>
            <hr />
            <p style="font-size: 16px;" id="card3text">Omschrijving</p>  
            <button onclick="alertButton()">Lees meer >></button>   
        </div>
    </div>

    <div class="card" id="card4">
        <div class="bg-img" style="background-image: url(img/thijs/school4.jpg); background-color: darkcyan;"></div>
        <div class="content">
            <h4 class="card-header" style="font-size: 18px;" id="card4header">Roald</h4>
            <h3 style="font-size: 16px;" id="card4date">16-09-2020</h3>
            <hr />
            <p style="font-size: 16px;" id="card4text">Omschrijving</p>  
            <button onclick="alertButton()">Lees meer >></button>   
        </div>
    </div>

    <div class="card" id="card5">
        <div class="bg-img" style="background-image: url(img/thijs/school5.jpg); background-color: darkslategrey;"></div>
        <div class="content">
            <h4 class="card-header" style="font-size: 18px;" id="card5header">Roald</h4>
            <h3 style="font-size: 16px;" id="card5date">16-09-2020</h3>
            <hr />
            <p style="font-size: 16px;" id="card5text">Omschrijving</p>  
            <button onclick="alertButton()">Lees meer >></button>  
        </div>
    </div>
</div>

<?php require_once ( 'partials/footer.php' ); ?>