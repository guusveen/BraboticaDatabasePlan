const menulist = document.getElementById("menuList")
menulist.style.maxHeight = "0px";
function toggleManu(){
    if (menulist.style.maxHeight == "0px"){
        menulist.style.maxHeight = "230px"
    }
    else {
        menulist.style.maxHeight = "0px"
    }
}