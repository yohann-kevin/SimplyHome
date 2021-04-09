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
            <img src="./images/img-soutenance/grande_maison8.jpg" alt="grande maisons">
        </div>
        <div id="singleArticleContent">
            <div id="singleArticleIcon">
                <div>
                    <img src="./images/icon/meters.png">
                    <p class="size">119m m²</p>
                </div>
                <div>
                    <img src="./images/icon/localisation.png">
                    <p class="location">Séné 56860</p>
                </div>
                <div>
                    <img src="./images/icon/price.png">
                    <p class="price">504 000 €</p>
                </div>
                <div>
                    <img src="./images/icon/energy.png">
                    <p class="energy">C</p>
                </div>
                <div>
                    <img src="./images/icon/calendar.png">
                    <p class="foundation-years">1984</p>
                </div>
            </div>
            <p id="articleContent">
            En impasse, venez découvrir cette maison d'habitation d'environ 120 m², 
            construite sur un terrain de 900m² clos et arboré. Elle comprend au 
            rez-de-chaussée: une entrée avec placard, un salon séjour avec cheminée, 
            une cuisine aménagée et équipée, un espace bureau/cellier, un toilette avec 
            lave-mains, et une chambre avec salle d'eau.
            </p>
            <p id="articleSubContent">* Le prix indiqué [ne] comprend [pas] les 
                honoraires à la charge de l'acheteur</p>
        </div>
    </section>
</main>

<?php
include_once './layouts/footer.php'
?>