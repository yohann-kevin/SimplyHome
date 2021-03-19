<?php
$page = "about";
$title = "A propos";
include_once 'layouts/head.php';
include_once 'layouts/header.php';
?>

<main id="about">
    <section id="contactLink">
        <a href="tel:0257877185"><i class="fas fa-phone"></i></a>
        <a href="#"><i class="fas fa-envelope"></i></a>
    </section>

    <section id="presentationAbout" class="maxLength">
        <h2>Simplye Home : Une équipe d'experts</h2>
        <p>Forts d’une longue expérience dans le domaine de la construction de maisons individuelles,
            nous nous engageons à déterminer avec vous ce qui vous conviendra le mieux, en étudiant
            rigoureusement les moindres détails de la conception de votre nouveau lieu de vie.</p><br>

        <p>Que votre choix se porte sur une maison traditionnelle ou sur une maison contemporaine,
            notre équipe expérimentée, composée de conducteurs de travaux qualifiés, d’un responsable
            technique, d’un responsable qualité et de technico-commerciaux, est là pour vous conseiller
            et vous accompagner durant l’intégralité de vos travaux. Notez que nous disposons d’un bureau </p>
    </section>

    <section id="sectionAbout" class="maxLength">
        <article class="articleAbout">
            <h3 onclick="accordion(this)"><i class="fas fa-chevron-circle-down"></i> Nos engagements et garanties</h3>
            <div class="articleAboutContent"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, voluptates?</p></div>
        </article>

        <article class="articleAbout">
            <h3 onclick="accordion(this)"><i class="fas fa-chevron-circle-right"></i> Nos engagements et garanties</h3>
            <div class="articleAboutContent"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, voluptates?</p></div>
        </article>

        <article class="articleAbout">
            <h3 onclick="accordion(this)"><i class="fas fa-chevron-circle-right"></i> Nos engagements et garanties</h3>
            <div class="articleAboutContent"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, voluptates?</p></div>
        </article>
    </section>
</main>

<?php 
include_once 'layouts/footer.php';
?>