/*----------------------------------------
  Functie voor het filteren van producten
------------------------------------------*/

// Filter "all" is het standaard actieve element
filterSelectie("all")
// filterSelectie is de naam van de functie
function filterSelectie(c) {
  var x, i;
  // x = Benader alle elementen met class name "productFilters"
  x = document.getElementsByClassName("productFilters");
  if (c == "all") c = "";
  // Verwijderen / toevoegen van de "showProduct" class
  for (i = 0; i < x.length; i++) {
    // Verwijder de "showProduct" class van elementen die niet geselecteerd zijn
    verbergClass(x[i], "showProduct");
    // Voeg de "showProduct" class toe aan elementen die geselecteerd zijn
    if (x[i].className.indexOf(c) > -1) showProductClass(x[i], "showProduct");
  }
}

// "showProduct" producten die geselecteerd zijn
function showProductClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// "Verberg" producten die niet geselecteerd zijn
function verbergClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Voeg een "active" class toe (blauwe vs. grijze knoppen)
var btnContainer = document.getElementById("filterContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

/*-----------------------------------------------
  Functie voor een alert voor de winkelwagenknop
------------------------------------------------*/

// productToegevoegd is de naam van de functie
function productToegevoegd() {
  // Deze alert krijg je wanneer je een product wilt toevoegen aan je winkelwagen
  alert("Het product is toegevoegd aan je winkelwagen");
}