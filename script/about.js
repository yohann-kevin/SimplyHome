window.onload = initAccordion();

function initAccordion() {
    let allArticleAbout = document.getElementsByClassName("articleAboutContent");
    for (let i = 1; i < allArticleAbout.length; i++) {
        allArticleAbout[i].style.display = "none";
    }
}

function accordion(element) {
    let container = element.parentNode;
    if (container.children[1].style.display == "none") {
        container.children[1].style.display = "block";
        element.children[0].classList.remove("fa-chevron-circle-right");
        element.children[0].classList.add("fa-chevron-circle-down");
    } else {
        container.children[1].style.display = "none";
        element.children[0].classList.remove("fa-chevron-circle-down");
        element.children[0].classList.add("fa-chevron-circle-right");
    }
}