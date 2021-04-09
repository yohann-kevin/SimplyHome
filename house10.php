<?php
$page = "house";
$title = "Nos maisons";
$description = "Découvrer nos modèles de maison";
include_once './layouts/head.php';
include_once './layouts/header.php';
?>

<main id="articleHouse">
    <section id="titleSingleArticle">
        <h2>Grande maison 5 chambres</h2>
    </section>

    <section id="singleArticle">
        <div is="singleArticleImage">
            <img src="./images/img-soutenance/grande_maison6.jpg" alt="grande maisons">
        </div>
        <div id="singleArticleContent">
            <div id="singleArticleIcon">
                <div>
                    <img src="./images/icon/meters.png">
                    <p class="size">275 m²</p>
                </div>
                <div>
                    <img src="./images/icon/localisation.png">
                    <p class="location">Auray 56400</p>
                </div>
                <div>
                    <img src="./images/icon/price.png">
                    <p class="price">1 123 000 $</p>
                </div>
                <div>
                    <img src="./images/icon/energy.png">
                    <p class="energy">D</p>
                </div>
                <div>
                    <img src="./images/icon/calendar.png">
                    <p class="foundation-years">1838</p>
                </div>
            </div>
            <p id="articleContent">
            Demeures Marines vous dévoile en exclusivité " 1838 ", une magnifique propriété en pierre située dans la belle campagne morbihannaise, à moins de 15 minutes d'Auray dans un petit hameau de charme typiquement breton. Sur plus d'un hectare entièrement clos et paysagé, vous découvrirez une magnifique demeure en pierre du 19ème siècle de 275 M² entièrement rénovée avec des prestations haut de gamme et un amour certain pour les pierres qui font de cette adresse un lieu exceptionnel.
            </p>
            <p id="articleSubContent">* Le prix indiqué [ne] comprend [pas] les 
                honoraires à la charge de l'acheteur</p>
        </div>
    </section>
</main>

<?php
include_once './layouts/footer.php'
?>