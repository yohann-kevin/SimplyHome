<?php
$page = "house";
$title = "Nos maisons";
$description = "Découvrer nos modèles de maison";
include_once './layouts/head.php';
include_once './layouts/header.php';
?>

<main id="house">
    <?php include_once 'layouts/contactLink.php' ?>

    <section id="presentationHouse" class="maxLength">
        <h2>Simply Home : Nos Maisons</h2>
        <p>Que votre choix se porte sur une <span class="textBolder">maison traditionnelle</span> ou sur une <span
                class="textBolder">maison contemporaine</span>,
            notre équipe expérimentée, composée de conducteurs de travaux qualifiés, d’un responsable
            technique, d’un responsable qualité et de technico-commerciaux, est là pour vous conseiller
            et vous accompagner durant l’intégralité de vos travaux. Notez que nous disposons d’un bureau de dessin.</p>
    </section>

    <section id="allHouse" class="maxLength">
        <h3 class="allHouseTitle">Choisissez Votre Maison</h3>
        <div id="filterHouse">
            <select name="style">
                <option>STYLE</option>
                <option>Traditionnel</option>
                <option>Contemporain</option>
            </select>
            <select name="toiture">
                <option>TOITURE</option>
                <option>Ardoise</option>
                <option>Tuiles</option>
            </select>
            <select name="niveau">
                <option>NIVEAU</option>
                <option>Plein pied</option>
                <option>Etages</option>
            </select>
            <select name="chambre">
                <option>NB CHAMBRE(S)</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>

        <article class="articleHouse">
            <img src="./images/img-soutenance/maison_pierre.jpg" alt="maison 10 pièces">
            <h3>ARMENIA<span class="subtitleArticle"> - 10 pièces</span></h3>
            <p class="subtitleArticle">214m²</p>
            <p class="houseArticleContent">Elle est composée, au rez-de-chaussée, d'un bureau, d'une salle à manger, un salon-séjour, une cuisine, une buanderie, un WC, une chambre et un garage. Au premier étage, dans la partie de gauche, une salle de bain, 2 chambres, une suite parentale</p>
        </article>

        <article class="articleHouse">
            <img src="./images/img-soutenance/petite_maison.jpg" alt="maison 3 chambres">
            <h3>ATLAS<span class="subtitleArticle"> - 3 chambres</span></h3>
            <p class="subtitleArticle">90m²</p>
            <p class="houseArticleContent">Dans un environnement aéré et verdoyant, venez découvrir une maison à rafraîchir située sur un grand terrain arboré. Pièce de vie orientée plein sud. 2 chambres, une salle d'eau et un grand cellier au rez-de-chaussée.</p>
        </article>

        <article class="articleHouse">
            <img src="./images/img-soutenance/grande_maison.jpg" alt="maison 4 chambres">
            <h3>ATTIS<span class="subtitleArticle"> - 4 chambres</span></h3>
            <p class="subtitleArticle">109m²</p>
            <p class="houseArticleContent">Exclusivité - Séné.. Emplacement exceptionnel pour cette maison d'environ 100m² située à proximité de tous les commerces, du bus et des écoles. Elle se situe à seulement 7 min du port de Vannes et 10 min de la plage.</p>
        </article>

        <article class="articleHouse">
            <img src="./images/img-soutenance/grande_maison2.jpg" alt="maison 4 chambres">
            <h3>ACTUEL<span class="subtitleArticle"> - 4 chambres</span></h3>
            <p class="subtitleArticle">122m²</p>
            <p class="houseArticleContent">Exclusivité - Vannes proche centre ville - Au calme d'une d'une impasse à quelques minutes à pied de toutes commodités - Vous serez séduits par cette maison de 6 pièces proposant une vaste entrée avec placards, séjour salon de 33 m² avec poêle donnant sur une terrasse en bois avec spa, cuisine américaine équipée</p>
        </article>

        <article class="articleHouse">
            <img src="./images/img-soutenance/petite_maison2.jpg" alt="maison 4 chambres">
            <h3>ACTUEL<span class="subtitleArticle"> - 4 chambres</span></h3>
            <p class="subtitleArticle">115m²</p>
            <p class="houseArticleContent">Quartier résidentiel à proximité immédiate des commerces et lignes de bus.. Cette maison édifiée en 2000 vous offre une cuisine ouverte sur un séjour salon de 40 m² donnant accès à la terrasse exposée sud /ouest, une chambre, salle d'eau, WC.. Etage: 3 chambres avec placards dont une avec un dressing, salle de bains, WC.. Garage avec combles.</p>
        </article>

        <article class="articleHouse">
            <img src="./images/actuel_4_chambres.jpg" alt="maison 4 chambres">
            <h3>ACTUEL<span class="subtitleArticle"> - 4 chambres</span></h3>
            <p class="subtitleArticle">108m²</p>
            <p class="houseArticleContent">Maison contemporaine de plain-pied de 108m² environ.
                Grande pièce de vie de 47m², 4 chambres, salle de bains et WC séparés.
                Cette maison bénéficie également d'un garage et jardin.</p>
        </article>

        <article class="articleHouse">
            <img src="./images/adonis_4_chambres.jpg" alt="maison 4 chambres">
            <h3>ADONIS<span class="subtitleArticle"> - 4 chambres</span></h3>
            <p class="subtitleArticle">125m²</p>
            <p class="houseArticleContent">Maison traditionnelle à étage de 125m² habitables environ.
                Au RDC, belle pièce de vie, 1 grande chambre, une salle de bains, un cellier.
                A l'étage, une mezzanine, 3 chambres, salle de bains et WC.</p>
        </article>

        <article class="articleHouse">
            <img src="./images/alpha_5_chambres.jpg" alt="maison 5 chambres">
            <h3>ALPHA<span class="subtitleArticle"> - 5 chambres</span></h3>
            <p class="subtitleArticle">177m²</p>
            <p class="houseArticleContent">Maison contemporaine de plain-pied de 177 m² habitables environ.
                Belle pièce de vie de 66m², 5 chambres dont une avec dressing et salle de bains,
                cellier, salle de bains et WC séparés.
                Cette maison bénéficie également d'un garage et jardin.</p>
        </article>

        <article class="articleHouse">
            <img src="./images/ambroise_4_chambres.jpg" alt="maison 4 chambres">
            <h3>AMBROISE<span class="subtitleArticle"> - 4 chambres</span></h3>
            <p class="subtitleArticle">117m²</p>
            <p class="houseArticleContent">Maison contemporaine à étage de 117m² environ. Au RDC,
                belle pièce de vie de 49m², 1 grande chambre avec salle de bains, cellier.
                A l'étage, 3 chambres, salle de bains et WC séparés.</p>
        </article>

        <div id="housePagination">
            <a href="#">Prèc.</a>
            <a class="paginationActive" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">Suiv.</a>
        </div>
    </section>
</main>

<?php  
include_once './layouts/footer.php'
?>