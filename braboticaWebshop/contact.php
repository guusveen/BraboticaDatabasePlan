<?php
require_once 'DBConnection.php';
$sql = 'SELECT oornaam FROM ' . DB_NAME . '.gebruikers';
$statement = $db->prepare( $sql );
$statement->execute();
$result = $statement->fetchall();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/overOns.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/openstreetmap.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <title>Brabotica - Contact</title>
    <link rel="icon" type="image/png" href="img/favicon.png" />
</head>
<body>
    <div class="container">
        <div class="navbar">
            <a href="index.html"><img src="img/logo1.png" alt="logo" class="logo"></a>
            <nav>
                <ul id="menuList">
                    <li><a href="overons.html">Over ons</a></li>
                    <li><a href="portfolio.html">Portfolio </a></li>
                    <li><a href="producten.html">Producten </a></li>
                    <li><a href="downloads.html">Downloads </a></li>
                    <li><a href="contact.html">Contact </a></li>
                </ul>
            </nav>
            <img src="img/menu.png" alt="" class="menu-icon" onclick="toggleManu()">
        </div>

        <div class="headercontact">
            <div class="transparentLayer">
                <h1>Contact</h1>
                <p>Waar kunnen we je mee helpen?</p>
            </div>
        </div>

        <div class="contactContainer">
            <form class="contactformulier" id="contactformulier" method="get" autocomplete="off">
                <label for="naam">
                    <input type="text" id="naam" size="40" placeholder="Naam" tabindex="1">
                    <div class="popup" id="iNaam" onclick="showInfoNaam()">
                        <img src="img/i.png" width="18px" style="margin-top:20px;" />
                        <span class="popuptext" id="ballonNaam"></span>
                    </div>
                </label><br />

                <label for="emailadres">
                    <input type="email" id="email" size="40" placeholder="Email adres" tabindex="2">
                    <div class="popup" id="iEmail" onclick="showInfoEmail()">
                        <img src="img/i.png" width="18px" style="margin-top:8px;" />
                        <span class="popuptext" id="ballonEmail"></span>
                    </div>
                </label><br />

                <label for="telefoonnummer">
                    <input type="tel" id="telefoonnummer" minlength="10" maxlength="10" size="40" placeholder="Telefoonnummer" tabindex="3">
                    <div class="popup" id="iTelefoon" onclick="showInfoNummer()">
                        <img src="img/i.png" width="18px" style="margin-top:8px;" />
                        <span class="popuptext" id="ballonNummer"></span>
                    </div>
                </label><br />

                <label for="onderwerp">
                    <input type="text" id="onderwerp" minlength="3" size="40" placeholder="Onderwerp" tabindex="4">
                    <div class="popup" id="iOnderwerp" onclick="showInfoOnderwerp()">
                        <img src="img/i.png" width="18px" style="margin-top:8px;" />
                        <span class="popuptext" id="ballonOnderwerp"></span>
                    </div>
                </label><br />
                
                <label for="vraag">
                    <textarea id="vraag" minlength="3" cols="39" rows="4" placeholder="Uw vraag" style="margin-top:5px;" tabindex="5"></textarea>
                    <div class="popup" id="iVraag" onclick="showInfoVraag()">
                        <img src="img/i.png" width="18px" style="margin-top:8px;" />
                        <span class="popupLabel" id="ballonVraag"></span>
                    </div>
                </label>

                <div class="check" id="check">
                    <div class="checkboxRecap">
                        <input type="checkbox" onclick="veranderAfbeelding()" tabindex="6"/>
                    </div>
                </div>

                <br />
                <input type="submit" name="submit" id="verzendbtn" class="verzendbtn" value="Verzenden" disabled="true" tabindex="7" />
            </form>

            <!-- osm -->
            <div id="Map" class="map"></div><br />
        </div>
    </div>


    <p></p>
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
        </div><div class="footerCell">
            <!-- whitespacefix -->
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
        </div><div class="footerCell">
            <!-- whitespacefix -->
            <h3>Social media</h3>
            <p><br></p>
            <ul>
                <li>
                    <a href="https://www.facebook.com" target="_blank">
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
        </div><div class="footerCell">
            <!-- whitespacefix -->
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
    <script type="text/javascript" src="js/nav.js"></script>
    <script type="text/javascript" src="js/overOns.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
    <script type="text/javascript" src="js/OpenLayers.js"></script>

</body>
</html>
