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
            <li><a href="contact.php">Contact</a></li>
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
<?php
// Laad de pagina specifieke JS files
switch($pagina)
{
    case "homePage":
        echo "<script src=\"js/overOns.js\"></script>
                <script src=\"js/toufik/carousel.js\"></script>
                <script src=\"js/toufik/toufik-javascript.js\"></script>";
        break;
    case "overOns":
        echo "<script type=\"text/javascript\" src=\"js/overOns.js\"></script>";
        break;
    case "producten":
        echo "<script type=\"text/javascript\" src=\"js/producten.js\"></script>";
        break;
    case "contact":
        echo "<script type=\"text/javascript\" src=\"js/overOns.js\"></script>
                <script type=\"text/javascript\" src=\"js/contact.js\"></script>
                <script type=\"text/javascript\" src=\"js/OpenLayers.js\"></script>";
        break;
    case "downloads":
        echo "<script type=\"text/javascript\" src=\"js/nav.js\"></script>
                <script type=\"text/javascript\" src=\"js/overOns.js\"></script>";
        break;
    case "portfolio":
        echo "<script src=\"js/portfolio.js\"></script>";
        break;

        break;
    case "beheer":
        echo "<script src=\"js/beheer.js\"></script>";
        break;
    case "productBeheer":
        echo "<script type=\"text/javascript\" src=\"js/producten.js\"></script>";
        break;
}
?>
</body>
</html>