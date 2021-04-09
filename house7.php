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
        <div id="singleArticleImage">
            <img src="./images/img-soutenance/grande_maison4.jpg" alt="grande maisons">
        </div>
        <div id="singleArticleContent">
            <div id="singleArticleIcon">
                <div>
                    <img src="./images/icon/meters.png">
                    <p class="size">13à m²</p>
                </div>
                <div>
                    <img src="./images/icon/localisation.png">
                    <p class="location">Auray 56400</p>
                </div>
                <div>
                    <img src="./images/icon/price.png">
                    <p class="price">392 100 $</p>
                </div>
                <div>
                    <img src="./images/icon/energy.png">
                    <p class="energy">D</p>
                </div>
                <div>
                    <img src="./images/icon/calendar.png">
                    <p class="foundation-years">2010</p>
                </div>
            </div>
            <p id="articleContent">
            Maison familiale à pieds des commerces et services, sur sous-sol avec garage, offrant pièce de vie et cuisine au premier étage avec une exposition sans vis à vis Sud Ouest, une chambre et salle d'eau privative complète ce niveau. Trois chambres au 2ème étage, salle de bains. 
            </p>
            <p id="articleSubContent">* Le prix indiqué comprend les 
                honoraires à la charge de l'acheteur</p>
        </div>
    </section>
</main>

<?php
include_once './layouts/footer.php'
?>