<!DOCTYPE html>
<html lang="en">
<?php ob_start(); ?>
<script>
      tinymce.init({
        selector: '#contact_contenu'
      });
    </script>
<div class="container">
    <form method="POST" action="<?= URL ?>back/partenaires/categorieValidation" enctype="multipart/form-data">
        
        <div class="field">
            <label for="categorie_libelle" class="label">Categorie</label>
            <div class="control">
                <input id="categorie_libelle" name="categorie_libelle" class="input" placeholder="Entrez le nom de la catégorie"></textarea>
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
$titre = "Creation d'une categorie";
require "views/commons/template.php";