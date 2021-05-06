<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <script src="js/portfolio.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <title>Portfolio</title>
</head>
<body>
<div class="container">
    <div class="navbar">
        <a href="index.html"><img src="img/logo1.png" alt="logo" class="logo"></a>
        <nav>
            <ul id="menuList">
                <li><a href="overOns.html">Over ons</a></li>
                <li><a href="portfolio.html">Portfolio </a></li>
                <li><a href="producten.html">Producten </a></li>
                <li><a href="downloads.html">Downloads </a></li>
                <li><a href="contact.html">Contact </a></li>
            </ul>
        </nav>
        <img src="img/menu.png" alt="" class="menu-icon" onclick="toggleManu()">
    </div>

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
</div>

<footer>
    <div class="footerCell">
        <h3>Over ons</h3>
        <p><br></p>
        <ul>
            <li>Brabotica</li>
            <li>Hogeschoollaan 1</li>
            <li>6232 SE Breda</li>
            <li>Nederland</li>
            <li><br></li>
            <li>06-00000000</li>
            <li><a href="google.com">info@brabotica.nl</a></li>
            <li><br></li>
            <li>KvK nummer: 1234567</li>
            <li>BTW nummer: 7654321</li>
        </ul>
    </div><!--Inline-block whitespace fix 
 --><div class="footerCell"> 
        <h3>Klantenservice</h3>
        <p><br></p>
        <ul>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="https://www.google.com" target="_blank">Privacy</a></li>
            <li><a href="https://www.google.com" target="_blank">Partners</a></li>
            <li><a href="https://www.google.com" target="_blank">Betaling</a></li>
            <li><a href="https://www.google.com" target="_blank">Bezorging</a></li>
            <li><a href="https://www.google.com" target="_blank">Retourneren</a></li>
        </ul>
    </div><!--Inline-block whitespace fix 
 --><div class="footerCell">
        <h3>Social media</h3>
        <p><br></p>
        <ul>
            <li>
                <a href="https://www.facebook.com"target="_blank"> 
                    <button><img src="img/facebookLogo.png"></button>
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com" target="_blank">
                    <button><img src="img/youtubeLogo.png"></button>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com" target="_blank">
                    <button><img src="img/instagramLogo.png"></button>
                </a>
            </li>
        </ul>
    </div><!--Inline-block whitespace fix 
 --><div class="footerCell">
        <h3>Reviews</h3>
        <p><br></p>
        <div class="review">
            <h4>John</h4>
            <p>Onze leerlingen zijn gek op jullie robots!</p>
        </div>
        <p><br></p>
        <div class="review">
            <h4>Jane</h4>
            <p>Ik leer er zelf ook wat van!</p>
        </div>
    </div>
</footer>
<script src="js/nav.js"></script>
</body>
</html>