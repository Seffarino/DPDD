<!DOCTYPE html>
<html lang="en">
<?php ob_start(); ?>
<div class="container">
    <form method="POST" action="<?= URL ?>back/carrousel/creationValidation" enctype="multipart/form-data">
        
        <div class="field">
            <label for="aftermovie_url" class="label">Url</label>
            <div class="control">
                <textarea id="aftermovie_url" name="aftermovie_url" class="textarea" placeholder="Entrez l'url pour ajouter la vidéo"></textarea>
            </div>
       
        <div class="columns is-mobile is-centered has-text-centered">
            <div class="column is-half">
                <button type="submit" class="button is-success" >Créer</button>
            </div>
        </div>
</form>
</div>
</html>
<?php 
$content = ob_get_clean();
$titre = "Ajout d'une vidéo dans le carrousel";
require "views/commons/template.php";