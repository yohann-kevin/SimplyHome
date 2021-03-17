const modalConnect = document.getElementById('modalConnect');

window.onclick = function (event) {
    if (event.target == modalConnect) modal(true);
}

function modal(isOpen) {
    isOpen ? action = "none" : action = "block"
    modalConnect.style.display = action
}