<?php  
include_once './layouts/head.php';
include_once './layouts/header.php';
?>

<main id="home">
    <section id="contactLink">
        <a href="tel:0257877185"><i class="fas fa-phone"></i></a>
        <a href="#"><i class="fas fa-envelope"></i></a>
    </section>

    <section id="welcome" class="maxLength">
        <h2>Bienvenue Chez Simply Home</h2>
        <div id="welcomeContent">
            <p>La société <span class="textBolder">Simply Home</span>, constructeur de maisons neuves
                individuelles en <span class="textBolder">Charente</span> (16) et en <span class="textBolder">Vendée</span> (85),
                est née d'une ambition, accompagner ses clients dans la réussite d'un des projets les 
                plus importants de leur vie : la <span class="textBolder">construction d'une maison neuve.</span>
            </p>
            <br>
            <p>
                <span class="textBolder">Simply Home</span> vous accompagne tout au long de votre projet de
                construction de maison individuelle, de la recherche de votre terrain
                jusqu'à la remise des clés.
            </p>
        </div>

        <div id="welcomeImg">
            <img src="./images/construction_maison_individuelle.jpg" alt="simply home construction de maison">
        </div>
    </section>

    <section id="homeHouse" class="maxLength">
        <h2>Nos maisons</h2>

        <article class="homeHouseArticle">
            <img src="./images/calypso_3_chambres.jpg" alt="maison 3 chambres">
            <h3>Calypso</h3>
            <p>Maison 3 chambres</p>
            <p>107m²</p>
        </article>

        <article class="homeHouseArticle">
            <img src="./images/city_2_chambres.jpg" alt="maison 2 chambres">
            <h3>City</h3>
            <p>Maison 2,3 ou 4 chambres</p>
            <p>A partir de 68m²</p>
        </article>

        <article class="articleFinanceProject">
            <img src="./images/imgfinancerprojet.jpg" alt="Financer votre projet">
            <div id="financeProjectContent">
                <h3>Comment financer mon projet ?</h3>
                <a href="#">+ d'infos</a>
            </div>
        </article>

        <article class="homeHouseArticle">
            <img src="./images/armenia_3_chambres.jpg" alt="maison 3 chambres avec bureau">
            <h3>Armenia</h3>
            <p>Maison 3 chambres+bureau</p>
            <p>104m²</p>
        </article>

        <article class="homeHouseArticle">
            <img src="./images/bolzano_3_chambres.jpg" alt="maison 3 chambres">
            <h3>Bolzano</h3>
            <p>Maison 3 chambres</p>
            <p>104m²</p>
        </article>

        <article class="homeHouseArticle">
            <img src="./images/azure_3_chambres.jpg" alt="maison 3 chambres">
            <h3>Azure</h3>
            <p>Maison 3 chambres</p>
            <p>97m²</p>
        </article>

        <div id="homeButtonMore">
            <a href="#">En voir +</a>
        </div>
    </section>

</main>

<?php  
include_once './layouts/footer.php'
?>
