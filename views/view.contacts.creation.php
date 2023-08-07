<!DOCTYPE html>
<html lang="en">
<?php ob_start(); ?>
<script>
      tinymce.init({
        selector: '#contact_contenu'
      });
    </script>
<div class="container">
    <form method="POST" action="<?= URL ?>back/contacts/creationValidation" enctype="multipart/form-data">
        
        <div class="field">
            <label for="contact_contenu" class="label">Description</label>
            <div class="control">
                <textarea id="contact_contenu" name="contact_contenu" class="textarea" placeholder="Entrez la description à afficher"></textarea>
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
$titre = "Creation d'un Contact";
require "views/commons/template.php";