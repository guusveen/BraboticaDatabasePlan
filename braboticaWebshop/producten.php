<?php 
    require_once "DBConnection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/producten.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="img/favicon.png"/>
    <title>Producten</title>
</head>
<body class="body-linda">
<div class="container">

    <!-- Navigatie -->
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
        <div class="column productFilters alle doe-het-zelf robot-linda">
            <div class="productCard">
                <img src="img/pakket_linda.png" alt="Denim Jeans" style="width:100%">
                <h2>Doe-het-zelf robot Linda</h2>
                <p class="productPrice">€21.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
        <div class="column productFilters alle kant-en-klaar robot-guus">
            <div class="productCard">
                <img src="img/klaar_guus.png" alt="Denim Jeans" style="width:100%">
                <h2>Kant-en-klaar robot Guus</h2>
                <p class="productPrice">€28.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
        <div class="column productFilters alle robot-linda robot-guus robot-erwin robot-thijs robot-taoufik materiaal">
            <div class="productCard">
                <img src="img/handboek_software.png" alt="Denim Jeans" style="width:100%">
                <h2>Handboek van Brabotica</h2>
                <p class="productPrice">€19.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
        <div class="column productFilters alle materiaal robot-taoufik">
            <div class="productCard">
                <img src="img/robotarm_taoufik.png" alt="Denim Jeans" style="width:100%">
                <h2>Robotarm robot Taoufik</h2>
                <p class="productPrice">€9.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
        <div class="column productFilters alle doe-het-zelf robot-guus">
            <div class="productCard">
                <img src="img/pakket_guus.png" alt="Denim Jeans" style="width:100%">
                <h2>Doe-het-zelf robot Guus</h2>
                <p class="productPrice">€21.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
        <div class="column productFilters alle kant-en-klaar robot-taoufik">
            <div class="productCard">
                <img src="img/klaar_taoufik.png" alt="Denim Jeans" style="width:100%">
                <h2>Kant-en-klaar robot Taoufik</h2>
                <p class="productPrice">€28.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
        <div class="column productFilters alle doe-het-zelf robot-taoufik">
            <div class="productCard">
                <img src="img/pakket_taoufik.png" alt="Denim Jeans" style="width:100%">
                <h2>Doe-het-zelf robot Taoufik</h2>
                <p class="productPrice">€21.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
        <div class="column productFilters alle materiaal robot-erwin">
            <div class="productCard">
                <img src="img/magickubus_erwin.png" alt="Denim Jeans" style="width:100%">
                <h2>Magic kubus robot Erwin</h2>
                <p class="productPrice">€11.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
        <div class="column productFilters alle kant-en-klaar robot-erwin">
            <div class="productCard">
                <img src="img/klaar_erwin.png" alt="Denim Jeans" style="width:100%">
                <h2>Kant-en-klaar robot Erwin</h2>
                <p class="productPrice">€28.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
        <div class="column productFilters alle doe-het-zelf robot-thijs">
            <div class="productCard">
                <img src="img/pakket_thijs.png" alt="Denim Jeans" style="width:100%">
                <h2>Doe-het-zelf robot Thijs</h2>
                <p class="productPrice">€21.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
        <div class="column productFilters alle materiaal robot-linda">
            <div class="productCard">
                <img src="img/electra_linda.png" alt="Denim Jeans" style="width:100%">
                <h2>Extra electra robot Linda</h2>
                <p class="productPrice">€2.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
        <div class="column productFilters alle doe-het-zelf robot-erwin">
            <div class="productCard">
                <img src="img/pakket_erwin.png" alt="Denim Jeans" style="width:100%">
                <h2>Doe-het-zelf robot Erwin</h2>
                <p class="productPrice">€21.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
        <div class="column productFilters alle kant-en-klaar robot-linda">
            <div class="productCard">
                <img src="img/klaar_linda.png" alt="Denim Jeans" style="width:100%">
                <h2>Kant-en-klaar robot Linda</h2>
                <p class="productPrice">€28.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
        <div class="column productFilters alle materiaal robot-thijs">
            <div class="productCard">
                <img src="img/geheugenkaart_thijs.png" alt="Denim Jeans" style="width:100%">
                <h2>Geheugenkaart robot Thijs</h2>
                <p class="productPrice">€13.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
        <div class="column productFilters alle kant-en-klaar robot-thijs">
            <div class="productCard">
                <img src="img/klaar_thijs.png" alt="Denim Jeans" style="width:100%">
                <h2>Kant-en-klaar robot Thijs</h2>
                <p class="productPrice">€28.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
        <div class="column productFilters alle materiaal robot-guus">
            <div class="productCard">
                <img src="img/lampjes_guus.png" alt="Denim Jeans" style="width:100%">
                <h2>Extra lampjes robot Guus</h2>
                <p class="productPrice">€1.99</p>
                <p><button onclick="productToegevoegd()"><b>+</b> In winkelwagen</button></p>
              </div>
        </div>
    </div>
</div>
    <!-- Footer -->
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
<!-- Javascript -->
<script src="js/nav.js"></script>
<script src="js/producten.js"></script>
</body>
</html>