const nav = document.getElementById("smartnav");
const contact = document.getElementById("contactLink");

function smartnav(isOpen) {
    if (isOpen) {
        nav.style.width = "0%";
        contact.children[0].classList.remove("contactInMenu");
        contact.children[1].classList.remove("contactInMenu");
    } else {
        nav.style.width = "100%";
        contact.children[0].classList.add("contactInMenu");
        contact.children[1].classList.add("contactInMenu");
    }
}