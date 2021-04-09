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
            <img src="./images/img-soutenance/grande_maison2.jpg" alt="grande maisons">
        </div>
        <div id="singleArticleContent">
            <div id="singleArticleIcon">
                <div>
                    <img src="./images/icon/meters.png">
                    <p>122 m²</p>
                </div>
                <div>
                    <img src="./images/icon/localisation.png">
                    <p>Vannes 56000</p>
                </div>
                <div>
                    <img src="./images/icon/price.png">
                    <p>545 000 $</p>
                </div>
                <div>
                    <img src="./images/icon/energy.png">
                    <p>D</p>
                </div>
                <div>
                    <img src="./images/icon/calendar.png">
                    <p>Inconnu</p>
                </div>
            </div>
            <p id="articleContent">
            Elle est composée, au rez-de-chaussée, d'un bureau, d'une salle à manger, 
            un salon-séjour, une cuisine, une buanderie, un WC, une chambre et 
            un garage. Au premier étage, dans la partie de gauche, une salle de bain, 
            2 chambres, une suite parentale
            </p>
            <p id="articleSubContent">* Le prix indiqué [ne] comprend [pas] les 
                honoraires à la charge de l'acheteur</p>
        </div>
    </section>
</main>

<?php
include_once './layouts/footer.php'
?>