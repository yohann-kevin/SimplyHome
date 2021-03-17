<?php  
include_once './layouts/head.php';
include_once './layouts/header.php';
?>

<main id="home">
    <section id="contactLink">
        <!-- <a href="#"><i class="fas fa-phone"></a> -->
        <a href="#"><i class="fas fa-phone"></i></a>
        <a href="#"><i class="fas fa-envelope"></i></a>
    </section>
    <section id="welcome" class="maxLength">
        <h1>Bienvenue Chez Simply Home</h1>
        <div id="welcomeContent">
            <p>La société <span class="textBolder">Simply Home</span>, constructeur de maisons neuves
                individuelles en <span class="textBolder">Chanrente</span> (16) et en <span class="textBolder">Vendée</span>,
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
</main>

<?php  
include_once './layouts/footer.php'
?>
