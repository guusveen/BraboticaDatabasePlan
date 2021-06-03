<?php 
    require_once "DBConnection.php";

    $db = connectDB();
    $Registreren = "Registreren";
    $Aanmelden = "Aanmelden";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registreren.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="img/favicon.png"/>
    <title>Registreren</title>
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
    <div class="headerRegistreren">
        <div class="transparentLayer">
            <h1>Registreren</h1>
            <p>Bouw je eigen robot</p>
        </div>
    </div>

    <!-- Submenu -->
    <div class="submenu" ><center>
        <button><?php print $Aanmelden ?></button>
        <button><?php print $Registreren ?></button></center>
    </div>

    <div class="registrerenContainer">
        <form class="registreerformulier" id="registreerformulier" method="get" autocomplete="off">
            <label for="voornaam">
                <input type="text" id="voornaam" size="40" placeholder="Voornaam" tabindex="1">
                <div class="popup" id="iVoornaam" onclick="showInfoNaam()">
                    <img src="img/i.png" width="18px" style="margin-top:20px;" />
                    <span class="popuptext" id="ballonNaam"></span>
                </div>
            </label>
            <label for="emailadres">
                <input type="email" id="email" size="40" placeholder="Email adres" tabindex="7">
                <div class="popup" id="iEmail" onclick="showInfoEmail()">
                    <img src="img/i.png" width="18px" style="margin-top:8px;" />
                    <span class="popuptext" id="ballonEmail"></span>
                </div>
            </label><br />

            <label for="achternaam">
                <input type="text" id="achternaam" size="40" placeholder="Achternaam" tabindex="2">
                <div class="popup" id="iachternaam" onclick="showInfoNaam()">
                    <img src="img/i.png" width="18px" style="margin-top:20px;" />
                    <span class="popuptext" id="ballonNaam"></span>
                </div>
            </label>
            <label for="wachtwoord">
                <input type="wachtwoord" id="wachtwoord" size="40" placeholder="Wachtwoord" tabindex="8">
                <div class="popup" id="iWachtwoord" onclick="showInfoWachtwoord()">
                    <img src="img/i.png" width="18px" style="margin-top:8px;" />
                    <span class="popuptext" id="ballonWachtwoord"></span>
                </div>
            </label><br />

            <label for="postcode">
                <input type="text" id="postcode" size="20" placeholder="Postcode" tabindex="3">
                <div class="popup" id="ipostcode" onclick="showInfoAdres()">
                    <img src="img/i.png" width="18px" style="margin-top:20px;" />
                    <span class="popuptext" id="ballonPostcode"></span>
                </div>
            </label>
            <label for="huisnummer">
                <input type="text" id="huisnummer" size="10" placeholder="Huisnummer" tabindex="4">
                <div class="popup" id="ihuisnummer" onclick="showInfoHuisnummer()">
                    <img src="img/i.png" width="18px" style="margin-top:20px;" />
                    <span class="popuptext" id="ballonAdres"></span>
                </div>
            </label>
            <label for="voorkeurstaal">
                <input type="voorkeurstaal" id="voorkeurstaal" size="40" placeholder="voorkeurstaal" tabindex="9">
                <div class="popup" id="ivoorkeurstaal" onclick="showInfoVoorkeurstaal()">
                    <img src="img/i.png" width="18px" style="margin-top:8px;" />
                    <span class="popuptext" id="ballonVoorkeurstaal"></span>
                </div>
            </label><br />

            <label for="Woonplaats">
                <input type="text" id="woonplaats" size="40" placeholder="Woonplaats" tabindex="5">
                <div class="popup" id="iwoonplaats" onclick="showInfoWoonplaats()">
                    <img src="img/i.png" width="18px" style="margin-top:20px;" />
                    <span class="popuptext" id="ballonWoonplaats"></span>
                </div>
            </label><br />

            <label for="telefoonnummer">
                <input type="tel" id="telefoonnummer" minlength="10" maxlength="10" size="40" placeholder="Telefoonnummer" tabindex="6">
                <div class="popup" id="iTelefoon" onclick="showInfoNummer()">
                    <img src="img/i.png" width="18px" style="margin-top:8px;" />
                    <span class="popuptext" id="ballonNummer"></span>
                </div>
            </label><br />
                <br />
            <input type="submit" name="submit" id="verzendbtn" class="verzendbtn" value="Verzenden" disabled="true" tabindex="10" />
        </form>
    </div>
</div>
<br />
    <!-- test -->
    
    <form action="" method="post" class="nieuwe" >
    <h3>Nieuwe gebruiker</h3>
    <input type="text" name="Voornaam" placeholder="Voornaam" value="" /><br>
    <input type="text" name="Achternaam" placeholder="Achternaam" value="" /><br>
    <input type="nummer" name="Telefoonnummer" placeholder="Telefoonnummer" value="" /><br>
    <input type="text" name="Email" placeholder="Email" value="" /><br>
    <input type="text" name="Wachtwoord" placeholder="Wachtwoord" value="" /><br>
    <input type="text" name="VoorkeurTaal" placeholder="VoorkeurTaal" value="" /><br>
    
    <input type="submit" name="nieuwe" value="nieuwe" />
</form>
<?php


if( !is_null( $db ) && array_key_exists( 'nieuwe', $_POST ) ):
  $vn = filter_var( trim( $_POST['Voornaam'] ), FILTER_SANITIZE_STRING );
  $an = filter_var( trim( $_POST['Achternaam'] ), FILTER_SANITIZE_STRING );
  $t = filter_var( trim( $_POST['Telefoonnummer'] ), FILTER_SANITIZE_STRING );
  $em = filter_var( trim( $_POST['Email'] ), FILTER_SANITIZE_STRING );
  $ww = filter_var( trim( $_POST['Wachtwoord'] ), FILTER_SANITIZE_STRING );
  $v = filter_var( trim( $_POST['VoorkeurTaal'] ), FILTER_SANITIZE_STRING );
  $nieuwe_id = NieuweGebruiker( $db, $vn, $an, $t, $em, $ww, $v );
endif;


    ?>

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