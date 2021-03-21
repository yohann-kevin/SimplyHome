<?php
$page = "contact";
$title = "Contact";
include_once './layouts/head.php';
include_once './layouts/header.php';
?>

<main id="contact">
    <?php include_once 'layouts/contactLink.php' ?>
    <section id="titleContact" class="maxLength">
        <h2>Contacter Simply Home</h2>
        <div id="titleContactContent">
            <p>Pour toute demande d'information ou de prise de rendez-vous, vous
            pouvez nous adresser votre demande en remplissant le formulaire de
            contact ci-dessous</p><br>
            <p>Le conseiller en habitat de votre secteur géographique, interlocuteur
            unique, vous proposera un accompagnement unique et personnalisé
            tout au long de la construction. Ce suivi personnalisé est 
            granat de la réussite des projets</p>    
        </div>
        <img src="./images/imgcommencerprojet.jpg" alt="Contacter Simply Home">
    </section>

    <section id="formContact" class="maxLength">
        <form id="contactForm" action="sendmail.php">
            <div id="nameAndCoord">
                <input type="text" name="name" placeholder="Nom" required>
                <input type="email" name="mail" placeholder="Email" required> 
                <input type="tel" name="phone" placeholder="Téléphone">
            </div>
            <div id="contactDpt">
                <p>Département</p>
                <label for="required">16</label>
                <input type="checkbox" name="dpt16" value="16">
                <label for="dpt85">85</label>
                <input type="checkbox" name="dpt85" value="85">
            </div>
            <div id="contactProject">
                <p>Votre projet</p>
                <label for="house">Maison</label>
                <input type="checkbox" name="house" value="house">
                <label for="houseAndGround">Maison + Terrain</label>
                <input type="checkbox" name="houseAndGround" value="houseAndGround">
                <label for="apartment">Apartement</label>
                <input type="checkbox" name="apartment" value="apartment">
            </div>
            <div id="contactMsg">
                <label for="msg">Votre message</label>
                <textarea name="msg" id="contactMsg"></textarea>
            </div>

            <div id="btnSubContact">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </section>
</main>

<?php  
include_once './layouts/footer.php'
?>