window.onload = function() {
    changeCardText();
}

function changeCardText() {
    document.getElementById("card0header").textContent="Summerville Basisschool";
    document.getElementById("card0date").textContent="> 20 oktober 2020, Zouterwoede";
    document.getElementById("card0text").textContent="Vandaag waren wij te gast op de Summerville Basisschool in Zouterwoede. De kinderen op deze school waren bijzonder enthousiast over de producten van Brabotica...";

    document.getElementById("card1header").textContent="Koningin Juliana School";
    document.getElementById("card1date").textContent="> 19 september 2020, Heerjansdam";
    document.getElementById("card1text").textContent="Brabotica ging op bezoek bij de Koningin Juliana School in Heerjansdam. Vooraf kregen wij te horen dat de kinderen in Heerjansdam een voorliefde hebben voor technologie...";

    document.getElementById("card2header").textContent="Katholieke Basisschool de Esdoorn";
    document.getElementById("card2date").textContent="> 14 mei 2020, Oeverstee";
    document.getElementById("card2text").textContent="We begonnen vroeg aan ons avontuur op de Esdoorn. Een school vol met potentiele ict'ers welke voor hun leeftijd behoorlijk vaardig zijn met computers...";

    document.getElementById("card3header").textContent="Bassischool de Boot";
    document.getElementById("card3date").textContent="> 09 maart 2020, Lutjebroek";
    document.getElementById("card3text").textContent="Zelden hebben wij van Brabotica zo'n begaafde groep met kinderen mogen begeleiden. Al spelender wijs werden alle onderwerpen uitgelegd en de kinderen gingen...";

    document.getElementById("card4header").textContent="John F. Kennedy Basisschool";
    document.getElementById("card4date").textContent="> 26 februari 2020, Hendrik-Ido-Ambacht";
    document.getElementById("card4text").textContent="Gelegen in het rustige Hendrik-Ido-Ambacht hadden wij de eer om de kinderen van de John F. Kennedy Basisschool te mogen begeleiden deze dag. Onze robots...";

    document.getElementById("card5header").textContent="Christelijke Bassischool de Wegwijzer";
    document.getElementById("card5date").textContent="> 18 januari 2020, Zwijndrecht";
    document.getElementById("card5text").textContent="Ons eerste project als Brabotica. Wij zijn verheugd en vereerd dat de Wegwijzer ons deze kans wilt geven en ons steunt in ons doel. Wij hopen dat we...";
}

function filterCards() {
    var input, filter, gridContainer, card, a, txtValue;
    input = document.getElementById("filterBar");
    filter = input.value.toUpperCase();
    gridContainer = document.getElementById("gridContainer");
    card = gridContainer.getElementsByClassName("card");

    for (var i = 0; i < card.length; i++) {
        a = card[i].getElementsByClassName("content")[0].getElementsByClassName("card-header")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            card[i].style.display = "";
        } else {
            card[i].style.display = "none";
        }
    }
}

function alertButton() {
    alert("Deze functionaliteit werkt nog niet");
}