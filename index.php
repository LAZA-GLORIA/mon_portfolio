<?php ob_start(); 

require "sources/utile/formatage.php";
?>

<div class="container-fluid mb-5 mx-auto"  style="height: 600px;" id="apropos">
    <div class="row no-gutters">
        <div class="col image-fluid text-center pt-5">
            <img src="sources/images/cv/photocv.png" height="350" class=" d-block mx-auto rounded-circle" alt="photo de profil besamba"> 
           
        </div>
    

        <div class="col pt-5 mx-auto" id="retour_cv" >
            <h1 class="font-weight-bold">Je recherche un poste de développeuse </br>
                web en alternance pour valider ma formation Développeur Web de niveau Bac+2, avec Openclassrooms</h1>
                <p class="font-weight-bold text-danger border-danger"> Je suis disponible de suite.</br>
                Le rythme sera de un ou deux jours en formation et trois ou quatre jours en entreprise </p>
                
        </div>
    </div>

    <div class="col text-center">
        <a class="btn bg-secondary rounded p-4" href="sources/pdf/CV.pdf" download="CV-GloriaBesamba"><i class="fa fa-download" aria-hidden="true"></i>Telecharger CV</a>
    </div>

</div>




<div class="container-fluid"  id="competences"> 

    <div class="row">
    <div class="col-sm-6 col-md-6 bg-danger text-center" style="height: 500px;">
            <?= formatageTitre("Outils");
            ?> 
                <p>Visual Studio Code, Git/Github</p>
                <p>Canva, Windows, Linux</p>
        

           
        </div>


        <div class="col-sm-6 col-md-6 text-center ">
            <!-- <h2 class="">Compétences Techniques</h2> -->
            <?= formatageTitre("Compétences");
            ?>
                <div class="text-center" style="height: 300px;">
                    <ul> 
                        <li class="perso_li_competences_bleu">HTML5</li>
                        <li class="perso_li_competences_bleu">CSS3</li>
                        <li class="perso_li_competences_bleu">BOOTSTRAP4</li>
                        <li class="perso_li_competences_vert">WORDPRESS5</li>
                        <li class="perso_li_competences_orange">JAVASCRIPT</li>
                        <li class="perso_li_competences_orange">NODE.JS</li>
                        <li class="perso_li_competences_orange">PHP</li>
                        <li class="perso_li_competences_orange">RESPONSIVE DESIGN</li>
                        
                    </ul>
                </div>
        
        </div>
   

        

    
    
    </div>
       

</div>

<div class="container-fluid text-center perso_portfolio mb-5" style="height: 500px;" id="portfolio"> 
    <?= formatageTitre("Portfolio");
    ?>

    <div class="card-deck m-5" style="height: 300px;">
            
            <div class="card" id="perso_id_card1">
                <img src="sources/images/BG.png" width="700" class="card-img-top d-block mx-auto" alt="...">
                <div class="card-body">
                    <div id="btn_perso_id_card1" style="visibility:hidden">
                        <a href="#" class="btn" data-toggle="modal" data-target="#description_card_portfolio" >
                        <i class="fa fa-search-plus"></i> 
                            <span class="sr-only"></span>Portfolio</a>
                    </div>
                </div>
            </div> 


            <div class="card" id="perso_id_card2">
                <img src="sources/images/M2I.png" width="200" class="card-img-top d-block mx-auto" alt="...">
                <div class="card-body">
                    <div id="btn_perso_id_card2" style="visibility:hidden">
                        <a href="https://www.moninvestissementimmo.com/" target="_blank" class="btn">
                            <i class="fa fa-search-plus"></i>
                            <span class="sr-only"></span>Site personnel</a>
                    </div> 
                </div>
            </div>

            <div class="card" id="perso_id_card3">
                <img src="sources/images/CV.png" width="200" class="card-img-top d-block mx-auto" alt="...">
                <div class="card-body">
                    <div id="btn_perso_id_card3" style="visibility:hidden">
                        <a href="pages/global/cv.php" target="_blank" class="btn">
                            <i class="fa fa-search-plus"></i>
                            <span class="sr-only"></span>CV</a>
                    </div> 
                </div>
            </div>

            <div class="card" id="perso_id_card4">
            <img src="sources/images/loky/loky.gif" width="200" class="card-img-top d-block mx-auto" alt="...">
            <div class="card-body">
            <div id="btn_perso_id_card4" style="visibility:hidden">
                        <a href="pages/global/loky.php" target="_blank" class="btn">
                            <i class="fa fa-search-plus"></i>
                            <span class="sr-only"></span>Loky</a>
                    </div> 
                </div>
            </div>
    </div>

</div>




<!-- Modal -->
<div class="modal fade" id="description_card_portfolio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">    
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <p> J'ai réalisé ce portfolio avec passion! </br>
                Réalisation de mon portfolio en HTML5, CSS3, BOOTSTRAP4, PHP et JQUERY </br>
                Utilisation des fonctionnalités de bootstrap4 : menu, card, modal, responsive,... </br>
                Mise en place de fichiers de "template" et de structure de site web. </br>
                Utilisation des flexbox. </br>
                Utilisation de JQuery dans la partie portfolio. </br>
                Utilisation de fonctions PHP pour structurer le site et pour le formulaire de contact.</br>
                Mise en ligne sur webhost. </br>
                </p>
            
            </div>
        </div>
    </div> 
</div>



<?php 
$content= ob_get_clean();
require "template.php";
?>