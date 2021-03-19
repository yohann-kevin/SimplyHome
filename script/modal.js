const modalConnect = document.getElementById('modalConnect');
const modalContact = document.getElementById('modalContact');

window.onclick = function (event) {
    if (event.target == modalConnect) modal(true);
}

function modal(isOpen,isConnect) {
    isOpen ? action = "none" : action = "block";
    isConnect ? content = modalConnect : content = modalContact;
    content.style.display = action;
}