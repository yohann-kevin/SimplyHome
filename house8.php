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
        <div id="singleArticleImage">
            <img src="./images/img-soutenance/grande_maison5.jpg" alt="grande maisons">
        </div>
        <div id="singleArticleContent">
            <div id="singleArticleIcon">
                <div>
                    <img src="./images/icon/meters.png">
                    <p class="size">300 m²</p>
                </div>
                <div>
                    <img src="./images/icon/localisation.png">
                    <p class="location">Auray 56400</p>
                </div>
                <div>
                    <img src="./images/icon/price.png">
                    <p class="price">892 500 $</p>
                </div>
                <div>
                    <img src="./images/icon/energy.png">
                    <p class="energy">C</p>
                </div>
                <div>
                    <img src="./images/icon/calendar.png">
                    <p class="foundation-years">1850</p>
                </div>
            </div>
            <p id="articleContent">
            Maison/Villa 9 pièces Auray centre. Un bien rare niché en coeur de ville: Spacieuse maison d'env 300 m² offrant de belles pièces de vie exposées Sud et ouvrant sur la terrasse, 6 chambres dont 2 avec salles d'eau privatives, 1 salle de bains, garage. Terrain clos de murs et joliment arboré.
            </p>
            <p id="articleSubContent">* Le prix indiqué [ne] comprend [pas] les 
                honoraires à la charge de l'acheteur</p>
        </div>
    </section>
</main>

<?php
include_once './layouts/footer.php'
?>