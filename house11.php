<?php
$page = "house";
$title = "Nos maisons";
$description = "Découvrer nos modèles de maison";
include_once './layouts/head.php';
include_once './layouts/header.php';
?>

<main id="articleHouse">
    <section id="titleSingleArticle">
        <h2>Petites maison 3 chambres</h2>
    </section>

    <section id="singleArticle">
        <div id="singleArticleImage">
            <img src="./images/img-soutenance/petite_maison3.jpg" alt="grande maisons">
        </div>
        <div id="singleArticleContent">
            <div id="singleArticleIcon">
                <div>
                    <img src="./images/icon/meters.png">
                    <p class="size">93 m²</p>
                </div>
                <div>
                    <img src="./images/icon/localisation.png">
                    <p class="location">Séné 56860</p>
                </div>
                <div>
                    <img src="./images/icon/price.png">
                    <p class="price">420 240 €</p>
                </div>
                <div>
                    <img src="./images/icon/energy.png">
                    <p class="energy">E</p>
                </div>
                <div>
                    <img src="./images/icon/calendar.png">
                    <p class="foundation-years">1965</p>
                </div>
            </div>
            <p id="articleContent">
            SENE - en impasse dans village de pêcheur - Proche de la réserve naturelle des 
            marais de Séné et de Montsarrac - Maison (1965) rénovée de 122m² hab. Au sol 
            (93m² loi carrez) comprenant: Entrée, Séjour/Salon avec poêle à bois/Cuisine ouverte, 
            sd eau, WC, chambre avec placards, à l'étage; mezzanine/Bureau, 2 chambres, WC, salle de bains.
            </p>
            <p id="articleSubContent">* Le prix indiqué [ne] comprend [pas] les 
                honoraires à la charge de l'acheteur</p>
        </div>
    </section>
</main>

<?php
include_once './layouts/footer.php'
?>