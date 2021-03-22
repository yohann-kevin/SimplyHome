<?php
$page = "about";
$title = "A propos";
$description = "En savoir plus sur simply home";
include_once 'layouts/head.php';
include_once 'layouts/header.php';
?>

<main id="about">
    <?php include_once 'layouts/contactLink.php' ?>
    <section id="presentationAbout" class="maxLength">
        <h2>Simplye Home : Une équipe d'experts</h2>
        <p>Forts d’une longue expérience dans le domaine de la construction de maisons individuelles,
            nous nous engageons à déterminer avec vous ce qui vous conviendra le mieux, en étudiant
            rigoureusement les moindres détails de la conception de votre nouveau lieu de vie.</p><br>

        <p>Que votre choix se porte sur une maison traditionnelle ou sur une maison contemporaine,
            notre équipe expérimentée, composée de conducteurs de travaux qualifiés, d’un responsable
            technique, d’un responsable qualité et de technico-commerciaux, est là pour vous conseiller
            et vous accompagner durant l’intégralité de vos travaux. Notez que nous disposons d’un bureau de dessin.</p>
    </section>

    <section id="sectionAbout" class="maxLength">
        <article class="articleAbout">
            <h3 onclick="accordion(this)"><i class="fas fa-chevron-circle-down"></i> Nos engagements et garanties</h3>
            <div class="articleAboutContent">
                <div class="articleAboutPara">
                    <p>Nous mettons tout en œuvre pour vous offrir une maison qui réponde en tous points à vos
                        exigences. Ainsi, nous nous engageons à respecter les délais que nous nous sommes fixés,
                        en ne travaillant qu’avec des matériaux de qualité et adaptés. De plus, nous respectons
                        toutes les normes et les réglementations, notamment les normes RT 2012, ainsi que le
                        Contrat de Construction de Maison Individuelle.</p><br>
                    <p>Nous vous invitons à découvrir l’ensemble de nos garanties : </p>
                </div>
                <div class="articleImg">
                    <ul>
                        <li>Garantie de remboursement d’acompte</li>
                        <li>Garantie de livraison à prix et délai convenus</li>
                        <li>Assurance dommages-ouvrage</li>
                        <li>Garantie de parfait achèvement</li>
                        <li>Garanties biennale et décennale</li>
                        <li>Garantie de bon fonctionnement</li>
                        <li>Paiement des travaux strictement réglementé</li>
                    </ul>
                    <figure class="imgArticleAbout">
                        <img src="./images/pa-picto-01.png" alt="simply home">
                    </figure>

                </div>
            </div>
        </article>

        <article class="articleAbout">
            <h3 onclick="accordion(this)"><i class="fas fa-chevron-circle-right"></i> Nos engagements et garanties</h3>
            <div class="articleAboutContent">
                <div class="articleAboutPara">
                    <p>Nous mettons tout en œuvre pour vous offrir une maison qui réponde en tous points à vos
                        exigences. Ainsi, nous nous engageons à respecter les délais que nous nous sommes fixés,
                        en ne travaillant qu’avec des matériaux de qualité et adaptés. De plus, nous respectons
                        toutes les normes et les réglementations, notamment les normes RT 2012, ainsi que le
                        Contrat de Construction de Maison Individuelle.</p><br>
                    <p>Nous vous invitons à découvrir l’ensemble de nos garanties : </p>
                </div>
                <div class="articleImg">
                    <ul>
                        <li>Garantie de remboursement d’acompte</li>
                        <li>Garantie de livraison à prix et délai convenus</li>
                        <li>Assurance dommages-ouvrage</li>
                        <li>Garantie de parfait achèvement</li>
                        <li>Garanties biennale et décennale</li>
                        <li>Garantie de bon fonctionnement</li>
                        <li>Paiement des travaux strictement réglementé</li>
                    </ul>
                    <figure class="imgArticleAbout">
                        <img src="./images/pa-picto-01.png" alt="simply home">
                    </figure>

                </div>
            </div>
        </article>

        <article class="articleAbout">
            <h3 onclick="accordion(this)"><i class="fas fa-chevron-circle-right"></i> Nos engagements et garanties</h3>
            <div class="articleAboutContent">
                <div class="articleAboutPara">
                    <p>Nous mettons tout en œuvre pour vous offrir une maison qui réponde en tous points à vos
                        exigences. Ainsi, nous nous engageons à respecter les délais que nous nous sommes fixés,
                        en ne travaillant qu’avec des matériaux de qualité et adaptés. De plus, nous respectons
                        toutes les normes et les réglementations, notamment les normes RT 2012, ainsi que le
                        Contrat de Construction de Maison Individuelle.</p><br>
                    <p>Nous vous invitons à découvrir l’ensemble de nos garanties : </p>
                </div>
                <div class="articleImg">
                    <ul>
                        <li>Garantie de remboursement d’acompte</li>
                        <li>Garantie de livraison à prix et délai convenus</li>
                        <li>Assurance dommages-ouvrage</li>
                        <li>Garantie de parfait achèvement</li>
                        <li>Garanties biennale et décennale</li>
                        <li>Garantie de bon fonctionnement</li>
                        <li>Paiement des travaux strictement réglementé</li>
                    </ul>
                    <figure class="imgArticleAbout">
                        <img src="./images/pa-picto-01.png" alt="simply home">
                    </figure>

                </div>
            </div>
        </article>
    </section>
</main>

<?php 
include_once 'layouts/footer.php';
?>