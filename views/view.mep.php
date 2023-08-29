<!DOCTYPE html>
<html lang="en">
<?php ob_start(); ?>
<script>
    tinymce.init({
        selector: '#pratique'
    });
    tinymce.init({
        selector: '#presentation'
    });
    tinymce.init({
        selector: '#billetterie'
    });
    tinymce.init({
        selector: '#titre_entete'
    });
</script>
<div class="container">
    <form method="POST" action="<?= URL ?>back/mise_en_page/validationModification" enctype="multipart/form-data">
        <div class="field">
            <label for="aftermovie_titre" class="label">Titre aftermovie</label>
            <div class="control">
                <input id="aftermovie_titre" name="aftermovie_titre" class="input" type="text" value="<?= $mep['aftermovie_titre'] ?>">
            </div>
        </div>
        <div class="field">
            <label for="programmation_titre" class="label">Titre aftermovie</label>
            <div class="control">
                <input id="programmation_titre" name="programmation_titre" class="input" type="text" value="<?= $mep['programmation_titre'] ?>">
            </div>
        </div>
        <div class="field">
            <label for="pratique" class="label">Paragraphe Pratique</label>
            <div class="control">
                <textarea id="pratique" name="pratique" class="textarea"><?= $mep['pratique'] ?></textarea>
            </div>
        </div>
        <div class="field">
            <label for="presentation" class="label">Paragraphe presentation</label>
            <div class="control">
                <textarea id="presentation" name="presentation" class="textarea"><?= $mep['presentation'] ?></textarea>
            </div>
        </div>
        <div class="field">
            <label for="billetterie" class="label">Paragraphe billetterie</label>
            <div class="control">
                <textarea id="billetterie" name="billetterie" class="textarea"><?= $mep['billetterie'] ?></textarea>
            </div>
        </div>
        <div class="field">
            <label for="titre_entete" class="label">Titre de l'entête</label>
            <div class="control">
                <textarea id="titre_entete" name="titre_entete" class="textarea"><?= $mep['titre_entete'] ?></textarea>
            </div>
        </div>
        <div class="field">
            <label for="billetterie" class="label">Integration playlist spotify</label>
            <div class="control">
                <textarea id="playlist" name="playlist" class="textarea"><?= $mep['playlist'] ?></textarea>
            </div>
        </div>
        <label for="image" class="label">Image de l'entete</label>
        <img src="<?= URL ?>views/festival/images/<?= $mep['image_entete'] ?> " style="width:50px" />
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
        <div class="columns is-mobile is-centered has-text-centered">
            <div class="column is-half">
                <button type="submit" class="button is-success">Mettre à jour</button>
            </div>
        </div>
    </form>
</div>

</html>
<?php
$content = ob_get_clean();
$titre = "Mise en page";
require "views/commons/template.php";
