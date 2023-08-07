<!DOCTYPE html>
<html lang="en">
<?php ob_start(); ?>
<script>
    tinymce.init({
        selector: '#billet_description'
    });
</script>
<div class="container">
    <form method="POST" action="<?= URL ?>back/billetterie/modificationValidation" enctype="multipart/form-data">
        <input type="hidden" name="billet_id" value="<?= $billet['billet_id'] ?>" />
        <p>ID:<?= $billet['billet_id'] ?></p>
        <div class="field">
            <label for="billet_libelle" class="label">Nom</label>
            <div class="control">
                <input id="billet_libelle" value="<?= $billet['billet_libelle'] ?>" name="billet_libelle" class="input" type="text" placeholder="Entrez le nom de l'billet">
            </div>
        </div>
        <div class="field">
            <label for="billet_date" class="label">Date</label>
            <div class="control">
                <input id="billet_date" value="<?= $billet['billet_date'] ?>" name="billet_date" class="input" type="date" placeholder="Entrez la date de sa representation">
            </div>
        </div>
        <div class="field">
            <label for="billet_lien" class="label">Style musical</label>
            <div class="control">
                <input id="billet_lien" value="<?= $billet['billet_lien'] ?>" name="billet_lien" class="input" type="text" placeholder="Entrez le style musical">
            </div>
        </div>
        <div class="field">
            <label for="billet_description" class="label">Description</label>
            <div class="control">
                <textarea id="billet_description" name="billet_description" class="textarea"><?= $billet['billet_description'] ?></textarea>
            </div>
        </div>
        <div class="columns is-mobile is-centered has-text-centered">
            <div class="column is-half">
                <button type="submit" class="button is-success">Modifier</button>
            </div>
        </div>
    </form>
</div>

</html>
<?php
$content = ob_get_clean();
$titre = "Modification d'un billet";
require "views/commons/template.php";
