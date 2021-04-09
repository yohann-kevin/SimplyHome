<?php
$page = "house";
$title = "Nos maisons";
$description = "Découvrer nos modèles de maison";
include_once './layouts/head.php';
include_once './layouts/header.php';
?>

<main id="articleHouse">
    <section id="titleSingleArticle">
        <h2>Grande maison 6 chambres</h2>
    </section>

    <section id="singleArticle">
        <div is="singleArticleImage">
            <img src="./images/img-soutenance/grande_maison9.jpg" alt="grande maisons">
        </div>
        <div id="singleArticleContent">
            <div id="singleArticleIcon">
                <div>
                    <img src="./images/icon/meters.png">
                    <p>197 m²</p>
                </div>
                <div>
                    <img src="./images/icon/localisation.png">
                    <p>Séné 56860</p>
                </div>
                <div>
                    <img src="./images/icon/price.png">
                    <p>866 000 €</p>
                </div>
                <div>
                    <img src="./images/icon/energy.png">
                    <p>A</p>
                </div>
                <div>
                    <img src="./images/icon/calendar.png">
                    <p>2015</p>
                </div>
            </div>
            <p id="articleContent">
            Maison Située aux portes de Vannes, 
            cette maison de 187m² sur un terrain arboré de 
            532 m² allie calme et convivialité. Sa pièce de 
            vie principale bénéficie d'une belle luminosité apportée par 
            la verrière. Un séjour salon avec cheminée (insert) en open-space 
            avec sa cuisine équipée, sa piscine intérieure font de ce bien un lieu 
            atypique. L'accès direct au jardin avec terrasse permet de profiter dès 
            le petit déjeuner d'une vue paisible sur la végétation
            </p>
            <p id="articleSubContent">* Le prix indiqué [ne] comprend [pas] les 
                honoraires à la charge de l'acheteur</p>
        </div>
    </section>
</main>

<?php
include_once './layouts/footer.php'
?>