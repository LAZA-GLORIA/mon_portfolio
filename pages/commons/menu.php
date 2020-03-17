<nav class="navbar navbar-expand-lg navbar-dark perso_bg_menu  sticky-top">
    <!--Navbrand à decaler-->
    <a class="navbar-brand" href="<?php echo RACINE ?>index.php"><img src="<?php echo RACINE ?>sources/images/BG.png" class="bg img-fluid rounded-circle" /></a>

    <!--Bouton qui permet d'afficher le burger menu-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!--L'ensemble des liens qui composent notre menu qui sera contenu dans la balise ul-->

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link perso_couleur_nav" href="<?php echo RACINE ?>index.php#apropos">A Propos</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link perso_couleur_nav" href="<?php echo RACINE ?>index.php#competences">Compétences</a>
        </li>

        <!--
        <li class="nav-item active">
            <a class="nav-link perso_couleur_nav" href="<?php echo RACINE ?>pages/global/cv.php">CV</a>
        </li>
        -->
        
        <li class="nav-item active">
            <a class="nav-link perso_couleur_nav" href="<?php echo RACINE ?>index.php#portfolio">Portofolio</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link perso_couleur_nav" href="<?php echo RACINE ?>pages/global/contact.php">Contact</a>
        </li>
       
    </ul>

    </div>
</nav>