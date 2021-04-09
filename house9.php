<?php
$page = "house";
$title = "Nos maisons";
$description = "Découvrer nos modèles de maison";
include_once './layouts/head.php';
include_once './layouts/header.php';
?>

<main id="articleHouse">
    <section id="titleSingleArticle">
        <h2>Grande maison 4 chambres</h2>
    </section>

    <section id="singleArticle">
        <div is="singleArticleImage">
            <img src="./images/img-soutenance/grande_maison6.jpg" alt="grande maisons">
        </div>
        <div id="singleArticleContent">
            <div id="singleArticleIcon">
                <div>
                    <img src="./images/icon/meters.png">
                    <p>140 m²</p>
                </div>
                <div>
                    <img src="./images/icon/localisation.png">
                    <p>Auray 56400</p>
                </div>
                <div>
                    <img src="./images/icon/price.png">
                    <p>356 660 $</p>
                </div>
                <div>
                    <img src="./images/icon/energy.png">
                    <p>D</p>
                </div>
                <div>
                    <img src="./images/icon/calendar.png">
                    <p>1968</p>
                </div>
            </div>
            <p id="articleContent">
            VILLE AURAY Exclusivité: du potentiel pour cette maison des années 1970 d'environ 140 m² sur un terrain de 652 m². Proche centre ville. Travaux de rafraîchissement ? Prévoir 4 chambres dont 2 en rez-de-chaussée, garage.
            </p>
            <p id="articleSubContent">* Le prix indiqué [ne] comprend [pas] les 
                honoraires à la charge de l'acheteur</p>
        </div>
    </section>
</main>

<?php
include_once './layouts/footer.php'
?>