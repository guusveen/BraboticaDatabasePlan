// vars en constants
const hideShowDivs = document.getElementsByClassName("hideShow");
const teamMemberDivs = document.getElementsByClassName("teamMember");
var i;

// loop door de teammemberdivs en voog de eventlistenders toe
for(i = 0; i < teamMemberDivs.length; i++) {
	teamMemberDivs[i].addEventListener("mouseenter", extend)
	teamMemberDivs[i].addEventListener("mouseleave", retract)
}

//functies
function extend(e) {
	var hideShowDiv = e.target.querySelector('.hideShow');
	show(hideShowDiv);
}
function retract(e) {
	var hideShowDiv = e.target.querySelector('.hideShow');
	hide(hideShowDiv);
} 
function show(elem) {
	var height = getHeight(elem);
	elem.classList.add('is-visible');
	elem.style.height = height; 
};
function hide(elem) {
	elem.style.height = '0';
};
function getHeight(elem) {
	if(window.innerWidth >= 800) {
		elem.style.display = 'inline-block'; 
	} else {
		elem.style.display = 'block'
	}
	var height = elem.scrollHeight + 'px'; 
	elem.style.display = ''; //  verberg het element
	return height;
};