<?php
$page = "house";
$title = "Nos maisons";
$description = "Découvrer nos modèles de maison";
include_once './layouts/head.php';
include_once './layouts/header.php';
?>

<main id="articleHouse">
    <section id="titleSingleArticle">
        <h2>Grosse maison 4 chambres</h2>
    </section>

    <section id="singleArticle">
        <div is="singleArticleImage">
            <img src="./images/img-soutenance/grande_maison.jpg" alt="grande maisons">
        </div>
        <div id="singleArticleContent">
            <div id="singleArticleIcon">
                <div>
                    <img src="./images/icon/meters.png">
                    <p>109 m²</p>
                </div>
                <div>
                    <img src="./images/icon/localisation.png">
                    <p>Vannes 56000</p>
                </div>
                <div>
                    <img src="./images/icon/price.png">
                    <p>399 000 $</p>
                </div>
                <div>
                    <img src="./images/icon/energy.png">
                    <p>D</p>
                </div>
                <div>
                    <img src="./images/icon/calendar.png">
                    <p>1975</p>
                </div>
            </div>
            <p id="articleContent">
            Exclusivité - Séné.. Emplacement exceptionnel pour cette maison d'environ 100m² située à proximité de tous les commerces, du bus et des écoles. Elle se situe à seulement 7 min du port de Vannes et 10 min de la plage.. Cette maison nantaise construite en 1975
            </p>
            <p id="articleSubContent">* Le prix indiqué [ne] comprend [pas] les 
                honoraires à la charge de l'acheteur</p>
        </div>
    </section>
</main>

<?php
include_once './layouts/footer.php'
?>