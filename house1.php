<?php
$page = "house";
$title = "Nos maisons";
$description = "Découvrer nos modèles de maison";
include_once './layouts/head.php';
include_once './layouts/header.php';
?>

<main id="articleHouse">
    <section id="titleSingleArticle">
        <h2>Grande maison 7 chambres</h2>
    </section>

    <section id="singleArticle">
        <div is="singleArticleImage">
            <img src="./images/img-soutenance/maison_pierre.jpg" alt="grande maisons">
        </div>
        <div id="singleArticleContent">
            <div id="singleArticleIcon">
                <div>
                    <img src="./images/icon/meters.png">
                    <p>217 m²</p>
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
                    <p>B</p>
                </div>
                <div>
                    <img src="./images/icon/calendar.png">
                    <p>1767</p>
                </div>
            </div>
            <p id="articleContent">
            Charmante maison du 18e siècle, en pierre, située entre Moustoir-Ac et Locminé, à 25 minutes de Vannes. Elle est composée, au rez-de-chaussée, d'un bureau, d'une salle à manger, un salon-séjour, une cuisine, une buanderie, un WC, une chambre et un garage. Au premier 
            </p>
            <p id="articleSubContent">* Le prix indiqué [ne] comprend [pas] les 
                honoraires à la charge de l'acheteur</p>
        </div>
    </section>
</main>

<?php
include_once './layouts/footer.php'
?>