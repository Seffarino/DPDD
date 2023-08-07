<!DOCTYPE html>
<html lang="en">
<?php ob_start(); ?>
<div class="container">
    <form method="POST" action="<?= URL ?>back/partenaires/creationValidation" enctype="multipart/form-data">
        <div class="field">
            <label for="partenaire_url" class="label">URL</label>
            <div class="control">
                <input id="partenaire_url" name="partenaire_url" class="input" type="text" placeholder="Entrez l'url de redirection">
            </div>
        </div>


        <label for="image" class="label">Image</label>
        <div class="file">
            <label class="file-label">
                <input class="file-input" type="file" name="image" id="image">
                <span class="file-cta">
                    <span class="file-label">
                        Choisir un fichier
                    </span>
                </span>
            </label>
        </div>
        <div class="field">
            <label for="partenaire_categorie" class="label">Catégorie</label>
            <select id="partenaire_categorie" name="partenaire_categorie">
                <?php foreach ($categories as $categorie) : ?>
                    <option value="<?= $categorie['categorie_id'] ?>"><?= $categorie['categorie_libelle'] ?></option>
                <?php endforeach; ?>
            </select>
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
