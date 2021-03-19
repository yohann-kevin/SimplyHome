<section id="contactLink">
    <a id="linkTel" href="tel:0257877185"> <span id="numTel">02-57-87-71-85</span><i class="fas fa-phone"></i></a>
    <a onclick="modal(false,false)" href="#"><i class="fas fa-envelope"></i></a>
</section>

<div id="modalContact" class="modal">
    <form class="modal-content animate" action="connect.php">
        <p onclick="modal(true,false)" class="close">&times;</p>
        <div class="containerModal">
            <label for="name">Nom</label>
            <input type="text" placeholder="Entrez votre nom" name="name" required>

            <label for="mail">Mail</label>
            <input type="mail" placeholder="Entrez votre mail" name="mail" required>

            <label for="msg">Message</label>
            <textarea name="msg" placeholder="Votre message"></textarea>

            <button type="submit">Envoyer</button>
            <button type="reset">Annuler</button>
        </div>
    </form>
</div>