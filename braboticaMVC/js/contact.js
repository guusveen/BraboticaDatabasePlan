
window.onload = function (){
    openstreetmap();
   
}

//// Contact formulier ////

const contactformulier = document.getElementById('contactformulier');
const naam = document.getElementById('naam');
const email = document.getElementById('email');
const telefoon = document.getElementById('telefoonnummer');
const onderwerp = document.getElementById('onderwerp');
const vraag = document.getElementById('vraag');

contactformulier.addEventListener('submit', e => {
    e.preventDefault();
    checkInputs();
});

function showInfoNaam() {
    var ballonNaam = document.getElementById("ballonNaam");
    ballonNaam.classList.toggle("show");
}

function showInfoEmail() {
    var ballonEmail = document.getElementById("ballonEmail");
    ballonEmail.classList.toggle("show");
}

function showInfoNummer() {
    var ballonNummer = document.getElementById("ballonNummer");
    ballonNummer.classList.toggle("show");
}

function showInfoOnderwerp() {
    var ballonOnderwerp = document.getElementById("ballonOnderwerp");
    ballonOnderwerp.classList.toggle("show");
}
function showInfoVraag() {
    var ballonVraag = document.getElementById("ballonVraag");
    ballonVraag.classList.toggle("show");
}

function checkInputs() {
    // trim verwijder whitespaces

    const naamValue = naam.value.trim();
    const emailValue = email.value.trim();
    const telefoonValue = telefoon.value.trim();
    const onderwerpValue = onderwerp.value.trim();
    const vraagValue = vraag.value.trim();


    if (naamValue === '') {
        document.getElementById("iNaam").style.visibility = "visible";
        document.getElementById("ballonNaam").innerHTML = "Graag uw naam invullen";
        document.getElementById("naam").style.borderColor = "#ff0000";
    } else {
        document.getElementById("iNaam").style.visibility = "hidden";
        document.getElementById("ballonNaam").style.visibility = "hidden";
        document.getElementById("naam").style.borderColor = "#00ff00";
    }

    if (emailValue === '') {
        document.getElementById("iEmail").style.visibility = "visible";
        document.getElementById("ballonEmail").innerHTML = "Graag uw email adres invullen";
        document.getElementById("email").style.borderColor = "#ff0000";
    } else if (!checkEmail(emailValue)) {
        document.getElementById("iEmail").style.visibility = "visible";
        document.getElementById("ballonEmail").innerHTML = "Ongeldig email adres ingevuld";
        document.getElementById("email").style.borderColor = "#ff0000";
    } else {
        document.getElementById("iEmail").style.visibility = "hidden";
        document.getElementById("ballonEmail").style.visibility = "hidden";
        document.getElementById("email").style.borderColor = "#00ff00";
    }

    if (telefoonValue === '') {
        document.getElementById("iTelefoon").style.visibility = "visible";
        document.getElementById("ballonNummer").innerHTML = "Graag uw telefoonnummer invullen";
        document.getElementById("telefoonnummer").style.borderColor = "#ff0000";
    }
    else if (!checkTelefoon(telefoonValue)) {
        document.getElementById("iTelefoon").style.visibility = "visible";
        document.getElementById("ballonNummer").innerHTML = "Ongeldig telefoonnummer ingevuld";
        document.getElementById("telefoonnummer").style.borderColor = "#ff0000";
    } else {
        document.getElementById("iTelefoon").style.visibility = "hidden";
        document.getElementById("ballonNummer").style.visibility = "hidden";
        document.getElementById("telefoonnummer").style.borderColor = "#00ff00";
    }

    if (onderwerpValue === '') {
        document.getElementById("iOnderwerp").style.visibility = "visible";
        document.getElementById("ballonOnderwerp").innerHTML = "Graag het onderwerp invullen";
        document.getElementById("onderwerp").style.borderColor = "#ff0000";
    } else {
        document.getElementById("iOnderwerp").style.visibility = "hidden";
        document.getElementById("ballonOnderwerp").style.visibility = "hidden";
        document.getElementById("onderwerp").style.borderColor = "#00ff00";
    }

    if (vraagValue === '') {
        document.getElementById("iVraag").style.visibility = "visible";
        document.getElementById("ballonVraag").innerHTML = "Graag uw vraag invullen";
        document.getElementById("vraag").style.borderColor = "#ff0000";
    } else {
        document.getElementById("iVraag").style.visibility = "hidden";
        document.getElementById("ballonVraag").style.visibility = "hidden";
        document.getElementById("vraag").style.borderColor = "#00ff00";
    }

    if (afb === "img/recaptcha.gif") {

        alert("Graag checkbox aanklikken");
    } else {
    }

    if (naamValue !== '' && naamValue !== '' && emailValue !== '' && telefoonValue !== '' && onderwerpValue !== '' && vraagValue !== '') {
        berichtVerzonden();
        location.reload();
    }
}

/*  -- Uitleg!! --

\d  -  match any digit (equal to [0-9])
\w  -  match any word character (a-z,A-Z,0-9 & _)
\s  -  match whitespace character (eg spaces & tabs)
\t  -  match a tab only

^   -  alles voor de 0 wordt niet geaccepteerd ([^7-9] hier wordt juist 7 tm 9 niet geaccepteerd)
$   -  afsluit teken voor de check

*/

function checkEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function checkTelefoon(telefoon) {
    return /^[0]\d{9}$/.test(telefoon);
}


//// checkbox ////
var afb = "img/recaptcha.gif";
function veranderAfbeelding() {
    if (afb == "img/recaptcha.gif") {
        document.getElementById("check").style.backgroundImage = "url('img/recaptcha.gif')";

        setTimeout(
            function () {
                document.getElementById("verzendbtn").disabled = false;
                document.getElementById("verzendbtn").style.cursor = "pointer";
            }, 4500);
        afb = "img/recaptcha.png";
    } else {
        document.getElementById("check").style.backgroundImage = "url('img/recaptcha.png')";
        document.getElementById('verzendbtn').disabled = true;
        afb = "img/recaptcha.gif";
    }
}

function berichtVerzonden() {
    alert("Beste " + naam.value + " uw bericht is verzonden");
}


/// openstreetmap ///

function openstreetmap() {
    var lat = 51.58433;     //51.58399  Locatie van de map
    var lon = 4.79771;      //4.79733   Locatie van de map
    var zoom = 17;          // Zoom level

    var latM = 51.58385;    // Locatie van de marker verticaal
    var lonM = 4.79725;     // locatie van de marker horizontaal
    
    var fromProjection = new OpenLayers.Projection("EPSG:4326");    // Transform from WGS 1984
    var toProjection = new OpenLayers.Projection("EPSG:900913");    // to Spherical Mercator Projection
    var position = new OpenLayers.LonLat(lon, lat).transform(fromProjection, toProjection);
    var positionM = new OpenLayers.LonLat(lonM, latM).transform(fromProjection, toProjection);

    map = new OpenLayers.Map("Map");
    var mapB = new OpenLayers.Layer.OSM();
    map.addLayer(mapB);

    var markers = new OpenLayers.Layer.Markers("Markers");
    map.addLayer(markers);
    markers.addMarker(new OpenLayers.Marker(positionM));

    map.setCenter(position, zoom);
}