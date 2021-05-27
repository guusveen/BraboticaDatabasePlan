<?php require_once ( 'partials/header.php' ); ?>
    
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

<p></p>

<?php require_once ( 'partials/footer.php' ); ?>