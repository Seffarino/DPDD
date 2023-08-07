<!DOCTYPE html>
<html lang="en">
<?php ob_start(); ?>
<script>
      tinymce.init({
        selector: '#billet_description'
      });
    </script>
<div class="container">
    <form method="POST" action="<?= URL ?>back/billetterie/creationValidation" enctype="multipart/form-data">
        <div class="field">
            <label for="billet_libelle" class="label">Nom</label>
            <div class="control">
                <input id="billet_libelle" name="billet_libelle" class="input" type="text" placeholder="Entrez le libelle du billet">
            </div>
        </div>
        <div class="field">
            <label for="billet_date" class="label">Date</label>
            <div class="control">
                <input id="billet_date" name="billet_date" class="input" type="date" placeholder="Entrez la date du billet">
            </div>
        </div>
        <div class="field">
            <label for="billet_description" class="label">Description</label>
            <div class="control">
                <textarea id="billet_description" name="billet_description" class="textarea" placeholder="Entrez la description à afficher"></textarea>
            </div>
            <p class="help">Enregistre les sauts de lignes </p>
        </div>

        <div class="field">
            <label for="billet_lien" class="label">lien</label>
            <div class="control">
                <input id="billet_lien" name="billet_lien" class="input" type="text" placeholder="Entrez le lien du billet">
            </div>
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
$titre = "Creation d'un billet";
require "views/commons/template.php";