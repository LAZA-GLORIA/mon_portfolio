<?php ob_start(); 

require "../../sources/utile/formatage.php";
?>


<?php
if(isset($_POST['mail'])){
    $to="gloria.besamba@gmail.com";
    $from=$_POST['mail'];
    $object=$_POST['objet'];
    $message=$_POST['message'];
    mail($to, $object, $message, $from);
    ?>
    <div class="alert alert-success" role="alert"><i class="fa fa-paper-plane"></i>
        Votre message a bien été envoyé!
    </div>
<?php

}


?>


<div class="container perso_bg_contact text-center"> 
    
    
     <!-- <h2 class="m-5 perso_mecontacter  text-white rounded-lg p-3">
        Me contacter
    </h2>  -->

    <?= formatageSousTitre("Me contacter");
            ?>

    <form method="POST" action="">

    <div class="form-group">
            <label for="nom" class="col-sm-2 col-form-label"></label>
            <input type="name" class="form-control" id="name" name="name" placeholder="Votre nom*">
        </div>

        <div class="form-group">
            <label for="mail" class="col-sm-2 col-form-label"></label>
            <input type="email" class="form-control" id="mail" name="mail" placeholder="Votre mail*">
        </div>

        <!-- <div class="form-group row">
            <label for="objet" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
            <select class="form-control" id="objet" name="objet">
                <option value="question">Questions</option>
                <option value="remarque">Remarques</option>
                <option value="autre">Autres</option>
            </select>
            </div>
        </div> -->

        <div class="form-group">
            <label for="message" class="col-sm-2 col-form-label"></label>
            <textarea class="form-control" id="message" rows="3"  name="message">Votre message*</textarea>
        </div>
        
        <button type="submit" class="btn perso_bgboutonCV mt-1 mb-5 text-center" ><i class="fa fa-paper-plane"></i> Envoyer</button>
    </form>
</div>

<?php 
$content= ob_get_clean();
require "../../template.php";
?>