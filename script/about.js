window.onload = initAccordion();

function initAccordion() {
    let allArticleAbout = document.getElementsByClassName("articleAboutContent");
    for (let i = 0; i < allArticleAbout.length; i++) {
        allArticleAbout[i].style.display = "none";
    }
}

function accordion(element) {
    let container = element.parentNode;
    if (container.children[1].style.display == "none") {
        container.children[1].style.display = "block";
    } else {
        container.children[1].style.display = "none";
    }
}
