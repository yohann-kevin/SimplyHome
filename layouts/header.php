
<?php if ($page == "home") : ?>

<body>
    <header id="header">
        <div id="topHeader">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>

            <a href="tel:0257877185"><i class="fas fa-phone"></i> 02 57 87 71 85</a>
            <a onclick="modal(false,true)" id="modalOpeners"><i class="fas fa-home"></i> Suivre mon projet</a>
        </div>
        <div id="containerHeader">
            <div id="headerBackImg">
                <img src="images/choisir-constructeur.jpg" alt="maison 3 chambres">
            </div>
            <div id="blackBackImg"></div>
            <nav id="navbar">
                <a href="index.php" id="headerLogo">
                    <img src="images/simply-home-logo.png" alt="simply home">
                    <div id="headerTitle">
                        <h1>Simply Home</h1>
                        <h2>Constructeur de vie</h2>
                    </div>
                </a>
                <div id="menuBurger">
                    <i class="fas fa-bars" onclick="smartnav(false)"></i>
                </div>
                <ul id="navLink">
                    <li><a href="index.php" class="active">Accueil</a></li>
                    <li><a href="about.php">A Propos</a></li>
                    <li><a href="house.php">Nos maisons</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>

        <div id="modalConnect" class="modal">
            <form class="modal-content animate" action="connect.php">
                <p onclick="modal(true,true)" class="close">&times;</p>
                <div class="containerModal">
                    <label for="name">Identifiant</label>
                    <input type="text" placeholder="Entrez votre identifiant" name="name" required>

                    <label for="password">Mot de passe</label>
                    <input type="password" placeholder="Entrez votre mot de passe" name="password" required>

                    <button type="submit">Envoyer</button>
                    <button type="reset">Annuler</button>

                    <a href="#">Mot de passe oublié ?</a>
                    <a href="#">Nouveau par ici ?</a>
                </div>
            </form>
        </div>


        <div id="smartnav" class="overlay">

            <div id="btnCloseMenu">
                <a href="javascript:void(0)" class="closebtn" onclick="smartnav(true)">&times;</a>
            </div>


            <div class="overlay-content">
                <a href="index.php" class="active">Accueil</a>
                <a href="about.php">A propos</a>
                <a href="house.php">Nos maisons</a>
                <a href="contact.php">Contact</a>
            </div>

        </div>
    </header>

    <?php else : ?>
<body>
    <header id="header">
        <div id="containerHeader">
            <nav id="nav">
                <a href="index.php" id="headerLogo">
                    <img src="images/simply-home-logo.png" alt="simply home">
                    <div id="headerTitle">
                        <h1>Simply Home</h1>
                        <h2>Constructeur de vie</h2>
                    </div>
                </a>
                <div id="menuBurger">
                    <i class="fas fa-bars" onclick="smartnav(false)"></i>
                </div>
                <ul id="navLink">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="about.php"  class="<?php if($page == 'about'){echo "active";} ?>">A Propos</a></li>
                    <li><a href="house.php" class="<?php if($page == 'house'){echo "active";} ?>">Nos maisons</a></li>
                    <li><a href="contact.php" class="<?php if($page == 'contact'){echo "active";} ?>">Contact</a></li>
                </ul>
            </nav>
        </div>

        <div id="smartnav" class="overlay">

            <div id="btnCloseMenu">
                <a href="javascript:void(0)" class="closebtn" onclick="smartnav(true)">&times;</a>
            </div>


            <div class="overlay-content">
                <a href="index.php">Accueil</a>
                <a href="about.php" class="<?php if($page == 'about'){echo "active";} ?>">A propos</a>
                <a href="house.php" class="<?php if($page == 'house'){echo "active";} ?>">Nos maisons</a>
                <a href="contact.php" class="<?php if($page == 'contact'){echo "active";} ?>">Contact</a>
            </div>

        </div>
    </header>
    <?php endif ; ?>