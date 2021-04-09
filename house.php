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
        <a style="text-decoration:none; color:black" href="house1.php">
            <img src="./images/img-soutenance/maison_pierre.jpg" alt="maison 10 pièces">
            <h3>ARMENIA<span class="subtitleArticle"> - 10 pièces</span></h3>
            <p class="subtitleArticle">214m²</p>
            <p class="houseArticleContent">Elle est composée, au rez-de-chaussée, d'un bureau, d'une salle à manger, un salon-séjour, une cuisine, une buanderie, un WC, une chambre et un garage. Au premier étage, dans la partie de gauche, une salle de bain, 2 chambres, une suite parentale</p>
        </a>
        </article>

        <article class="articleHouse">
        <a style="text-decoration:none; color:black" href="house2.php">
            <img src="./images/img-soutenance/petite_maison.jpg" alt="maison 3 chambres">
            <h3>ATLAS<span class="subtitleArticle"> - 3 chambres</span></h3>
            <p class="subtitleArticle">90m²</p>
            <p class="houseArticleContent">Dans un environnement aéré et verdoyant, venez découvrir une maison à rafraîchir située sur un grand terrain arboré. Pièce de vie orientée plein sud. 2 chambres, une salle d'eau et un grand cellier au rez-de-chaussée.</p>
            </a>
        </article>

        <article class="articleHouse">
        <a style="text-decoration:none; color:black" href="house3.php">
            <img src="./images/img-soutenance/grande_maison.jpg" alt="maison 4 chambres">
            <h3>ATTIS<span class="subtitleArticle"> - 4 chambres</span></h3>
            <p class="subtitleArticle">109m²</p>
            <p class="houseArticleContent">Exclusivité - Séné.. Emplacement exceptionnel pour cette maison d'environ 100m² située à proximité de tous les commerces, du bus et des écoles. Elle se situe à seulement 7 min du port de Vannes et 10 min de la plage.</p>
            </a>
            </article>

        <article class="articleHouse">
        <a style="text-decoration:none; color:black" href="house4.php">
            <img src="./images/img-soutenance/grande_maison2.jpg" alt="maison 4 chambres">
            <h3>ACTUEL<span class="subtitleArticle"> - 4 chambres</span></h3>
            <p class="subtitleArticle">122m²</p>
            <p class="houseArticleContent">Exclusivité - Vannes proche centre ville - Au calme d'une d'une impasse à quelques minutes à pied de toutes commodités - Vous serez séduits par cette maison de 6 pièces proposant une vaste entrée avec placards, séjour salon de 33 m² avec poêle donnant sur une terrasse en bois avec spa, cuisine américaine équipée</p>
            </a>
            </article>

        <article class="articleHouse">
        <a style="text-decoration:none; color:black" href="house5.php">
            <img src="./images/img-soutenance/petite_maison2.jpg" alt="maison 4 chambres">
            <h3>ACTUEL<span class="subtitleArticle"> - 4 chambres</span></h3>
            <p class="subtitleArticle">115m²</p>
            <p class="houseArticleContent">Quartier résidentiel à proximité immédiate des commerces et lignes de bus.. Cette maison édifiée en 2000 vous offre une cuisine ouverte sur un séjour salon de 40 m² donnant accès à la terrasse exposée sud /ouest, une chambre, salle d'eau, WC.. Etage: 3 chambres avec placards dont une avec un dressing, salle de bains, WC.. Garage avec combles.</p>
            </a>
            </article>

        <article class="articleHouse">
        <a style="text-decoration:none; color:black" href="house6.php">
            <img src="./images/img-soutenance/grande_maison3.jpg" alt="maison 6 chambres">
            <h3>ACTUEL<span class="subtitleArticle"> - 6 chambres</span></h3>
            <p class="subtitleArticle">300m²</p>
            <p class="houseArticleContent">La noblesse des matériaux utilisés pour la rénovation de cette longère de 300m² rend hommage à son histoire. Tout le monde trouvera forcément sa place à travers ses 6 chambres dont 1 suite parentale au rez-de-chaussée, un séjour au sud d'environ 65 m², bibliothèque, bureau et une chaleureuse cuisine équipée pour les amateurs</p>
            </a>
            </article>

        <article class="articleHouse">
        <a style="text-decoration:none; color:black" href="house7.php">
            <img src="./images/img-soutenance/grande_maison4.jpg" alt="maison 4 chambres">
            <h3>ADONIS<span class="subtitleArticle"> - 4 chambres</span></h3>
            <p class="subtitleArticle">130m²</p>
            <p class="houseArticleContent">Maison familiale à pieds des commerces et services, sur sous-sol avec garage, offrant pièce de vie et cuisine au premier étage avec une exposition sans vis à vis Sud Ouest, une chambre et salle d'eau privative complète ce niveau.</p>
            </a>
            </article>

        <article class="articleHouse">
        <a style="text-decoration:none; color:black" href="house8.php">
            <img src="./images/img-soutenance/grande_maison5.jpg" alt="maison 6 chambres">
            <h3>ALPHA<span class="subtitleArticle"> - 6 chambres</span></h3>
            <p class="subtitleArticle">300m²</p>
            <p class="houseArticleContent">Maison/Villa 9 pièces Auray centre. Un bien rare niché en coeur de ville: Spacieuse maison d'env 300 m² offrant de belles pièces de vie exposées Sud et ouvrant sur la terrasse, 6 chambres dont 2 avec salles d'eau privatives, 1 salle de bains, garage. Terrain clos de murs et joliment arboré.</p>
            </a>
            </article>
        <article class="articleHouse">
        <a style="text-decoration:none; color:black" href="house9.php">
            <img src="./images/img-soutenance/grande_maison6.jpg" alt="maison 4 chambres">
            <h3>AMBROISE<span class="subtitleArticle"> - 4 chambres</span></h3>
            <p class="subtitleArticle">140m²</p>
            <p class="houseArticleContent">VILLE AURAY Exclusivité: du potentiel pour cette maison des années 1970 d'environ 140 m² sur un terrain de 652 m². Proche centre ville. Travaux de rafraîchissement ? Prévoir 4 chambres dont 2 en rez-de-chaussée, garage. Pour toute visite contacter Sophie PILARD: CHRISTINE IMMO LE BONO: estimation, vente.</p>
            </a>
            </article>
        <article class="articleHouse">
        <a style="text-decoration:none; color:black" href="house10.php">
            <img src="./images/img-soutenance/grande_maison7.jpg" alt="maison 5 chambres">
            <h3>AMBROISE<span class="subtitleArticle"> - 5 chambres</span></h3>
            <p class="subtitleArticle">275m²</p>
            <p class="houseArticleContent">Demeures Marines vous dévoile en exclusivité " 1838 ", une magnifique propriété en pierre située dans la belle campagne morbihannaise, à moins de 15 minutes d'Auray dans un petit hameau de charme typiquement breton. Sur plus d'un hectare entièrement clos et paysagé, vous découvrirez une magnifique demeure en pierre du 19ème siècle de 275 M² entièrement rénovée avec des prestations haut de gamme et un amour certain pour les pierres qui font de cette adresse un lieu exceptionnel.</p>
            </a>
            </article>
        <article class="articleHouse">
        <a style="text-decoration:none; color:black" href="house11.php">
            <img src="./images/img-soutenance/petite_maison3.jpg" alt="maison 4 chambres">
            <h3>AMBROISE<span class="subtitleArticle"> - 3 chambres</span></h3>
            <p class="subtitleArticle">93m²</p>
            <p class="houseArticleContent">SENE - en impasse dans village de pêcheur - Proche de la réserve naturelle des marais de Séné et de Montsarrac - Maison (1965) rénovée de 122m² hab. Au sol (93m² loi carrez) comprenant: Entrée, Séjour/Salon avec poêle à bois/Cuisine ouverte, sd eau, WC, chambre avec placards, à l'étage; mezzanine/Bureau, 2 chambres, WC, salle de bains.</p>
            </a>
            </article>
        <article class="articleHouse">
        <a style="text-decoration:none; color:black" href="house12.php">
            <img src="./images/img-soutenance/petite_maison4.jpg" alt="maison 3 chambres">
            <h3>AMBROISE<span class="subtitleArticle"> - 3 chambres</span></h3>
            <p class="subtitleArticle">105m²</p>
            <p class="houseArticleContent">L'agence Stéphane PLAZA Immobilier de Vannes est fière de vous présenter cette charmante maison située sur la presqu'île de Port Anna à Séné. Maison à la décoration soignée, vous serez ravis par son bel espace à vivre avec cuisine américaine équipée. Le rez-de-chaussée vous offre en plus une jolie chambre avec salle d'eau et dressing et un WC.</p>
            </a>
            </article>
        <article class="articleHouse">
        <a style="text-decoration:none; color:black" href="house13.php">
            <img src="./images/img-soutenance/grande_maison8.jpg" alt="maison 4 chambres">
            <h3>AMBROISE<span class="subtitleArticle"> - 4 chambres</span></h3>
            <p class="subtitleArticle">119m²</p>
            <p class="houseArticleContent">En impasse, venez découvrir cette maison d'habitation d'environ 120 m², construite sur un terrain de 900m² clos et arboré. Elle comprend au rez-de-chaussée: une entrée avec placard, un salon séjour avec cheminée, une cuisine aménagée et équipée, un espace bureau/cellier, un toilette avec lave-mains, et une chambre avec salle d'eau.</p>
            </a>
            </article>
        <article class="articleHouse">
        <a style="text-decoration:none; color:black" href="house14.php">
            <img src="./images/img-soutenance/petite_maison5.jpg" alt="maison 3 chambres">
            <h3>AMBROISE<span class="subtitleArticle"> - 3 chambres</span></h3>
            <p class="subtitleArticle">93m²</p>
            <p class="houseArticleContent">SENE - en impasse dans village de pêcheur - Proche de la réserve naturelle des marais de Séné et de Montsarrac - Maison (1965) rénovée de 122m² hab. Au sol (93m² loi carrez) comprenant: Entrée, Séjour/Salon avec poêle à bois/Cuisine ouverte, sd eau, WC, chambre avec placards, à l'étage; mezzanine/Bureau, 2 chambres, WC, salle de bains</p>
            </a>
            </article>
        <article class="articleHouse">
        <a style="text-decoration:none; color:black" href="house15.php">
            <img src="./images/img-soutenance/grande_maison9.jpg" alt="maison 6 chambres">
            <h3>AMBROISE<span class="subtitleArticle"> - 6 chambres</span></h3>
            <p class="subtitleArticle">197m²</p>
            <p class="houseArticleContent">Maison Située aux portes de Vannes, cette maison de 187m² sur un terrain arboré de 532 m² allie calme et convivialité. Sa pièce de vie principale bénéficie d'une belle luminosité apportée par la verrière. Un séjour salon avec cheminée (insert) en open-space avec sa cuisine équipée, sa piscine intérieure font de ce bien un lieu atypique. L'accès direct au jardin avec terrasse permet de profiter dès le petit déjeuner d'une vue paisible sur la végétation.</p>
            </a>
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

