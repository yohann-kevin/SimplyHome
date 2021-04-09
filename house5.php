<?php
$page = "house";
$title = "Nos maisons";
$description = "Découvrer nos modèles de maison";
include_once './layouts/head.php';
include_once './layouts/header.php';
?>

<main id="articleHouse">
    <section id="titleSingleArticle">
        <h2>Petite maison 4 chambres</h2>
    </section>

    <section id="singleArticle">
        <div is="singleArticleImage">
            <img src="./images/img-soutenance/petite_maison2.jpg" alt="grande maisons">
        </div>
        <div id="singleArticleContent">
            <div id="singleArticleIcon">
                <div>
                    <img src="./images/icon/meters.png">
                    <p class="size">115 m²</p>
                </div>
                <div>
                    <img src="./images/icon/localisation.png">
                    <p class="location">Vannes 56000</p>
                </div>
                <div>
                    <img src="./images/icon/price.png">
                    <p class="price">385 000 €</p>
                </div>
                <div>
                    <img src="./images/icon/energy.png">
                    <p class="energy">D</p>
                </div>
                <div>
                    <img src="./images/icon/calendar.png">
                    <p class="foundation-years">2000</p>
                </div>
            </div>
            <p id="articleContent">
            Quartier résidentiel à proximité immédiate des commerces et lignes de bus.. Cette maison édifiée en 2000 vous offre une cuisine ouverte sur un séjour salon de 40 m² donnant accès à la terrasse exposée sud /ouest, une chambre, salle d'eau, WC.. Etage: 3 chambres avec placards dont une avec un dressing, salle de bains, WC.. Garage avec combles. A découvrir !
            </p>
            <p id="articleSubContent">* Le prix indiqué comprend les 
                honoraires à la charge de l'acheteur</p>
        </div>
    </section>
</main>

<?php
include_once './layouts/footer.php'
?>