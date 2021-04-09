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
            <img src="./images/img-soutenance/grande_maison3.jpg" alt="grande maisons">
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
                    <p class="price">883 096 $</p>
                </div>
                <div>
                    <img src="./images/icon/energy.png">
                    <p class="energy">C</p>
                </div>
                <div>
                    <img src="./images/icon/calendar.png">
                    <p class="foundation-years">1746</p>
                </div>
            </div>
            <p id="articleContent">
            La noblesse des matériaux utilisés pour la rénovation de cette longère de 300m² rend hommage à son histoire. Tout le monde trouvera forcément sa place à travers ses 6 chambres dont 1 suite parentale au rez-de-chaussée, un séjour au sud d'environ 65 m²
            </p>
            <p id="articleSubContent">* Le prix indiqué [ne] comprend [pas] les 
                honoraires à la charge de l'acheteur</p>
        </div>
    </section>
</main>

<?php
include_once './layouts/footer.php'
?>