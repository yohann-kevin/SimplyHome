<?php
$page = "house";
$title = "Nos maisons";
$description = "Découvrer nos modèles de maison";
include_once './layouts/head.php';
include_once './layouts/header.php';
?>

<main id="articleHouse">
    <section id="titleSingleArticle">
        <h2>Petite maison 3 chambres</h2>
    </section>

    <section id="singleArticle">
        <div is="singleArticleImage">
            <img src="./images/img-soutenance/petite_maison.jpg" alt="grande maisons">
        </div>
        <div id="singleArticleContent">
            <div id="singleArticleIcon">
                <div>
                    <img src="./images/icon/meters.png">
                    <p class="size">90 m²</p>
                </div>
                <div>
                    <img src="./images/icon/localisation.png">
                    <p class="location">Vannes 56000</p>
                </div>
                <div>
                    <img src="./images/icon/price.png">
                    <p class="price">318 000 €</p>
                </div>
                <div>
                    <img src="./images/icon/energy.png">
                    <p class="energy">E</p>
                </div>
                <div>
                    <img src="./images/icon/calendar.png">
                    <p class="foundation-years">2010</p>
                </div>
            </div>
            <p id="articleContent">
            Dans un environnement aéré et verdoyant, venez découvrir une maison à rafraîchir située sur un grand terrain arboré. Pièce de vie orientée plein sud. 2 chambres, une salle d'eau et un grand cellier au rez-de-chaussée. A l'étage: 1 chambre actuellement, possibilité de 2 
            </p>
            <p id="articleSubContent">* Le prix indiqué [ne] comprend [pas] les 
                honoraires à la charge de l'acheteur</p>
        </div>
    </section>
</main>

<?php
include_once './layouts/footer.php'
?>