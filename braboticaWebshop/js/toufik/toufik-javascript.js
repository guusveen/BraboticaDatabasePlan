let x = 0;

let textToDisplay = 'Brabotica';
let hetBedrijfNaaam = document.querySelector('.col-1 h2');

function animation() {
    if (x < textToDisplay.length) {
        hetBedrijfNaaam.innerHTML += textToDisplay.charAt(x);
        x++;
        setTimeout(animation, 160);
    }
}

animation();
