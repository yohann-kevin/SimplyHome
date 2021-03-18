const nav = document.getElementById("smartnav");

function smartnav(isOpen) {
    isOpen ? action = "0%" : action = "100%";
    nav.style.width = action;
}