<!DOCTYPE html>
<html lang="en">
<?php ob_start(); ?>
<script>
      tinymce.init({
        selector: '#artiste_description'
      });
    </script>
<div class="container">
    <form method="POST" action="<?= URL ?>back/artistes/creationValidation" enctype="multipart/form-data">
        <div class="field">
            <label for="artiste_nom" class="label">Nom</label>
            <div class="control">
                <input id="artiste_nom" name="artiste_nom" class="input" type="text" placeholder="Entrez le nom de l'artiste">
            </div>
        </div>
        <div class="field">
            <label for="artiste_date" class="label">Date</label>
            <div class="control">
                <input id="artiste_date" name="artiste_date" class="input" type="date" placeholder="Entrez la date de sa representation">
            </div>
        </div>
        <div class="field">
            <label for="artiste_style" class="label">Style musical</label>
            <div class="control">
                <input id="artiste_style" name="artiste_style" class="input" type="text" placeholder="Entrez le style musical">
            </div>
        </div>
        <div class="field">
            <label for="artiste_video" class="label">Vidéo intégré en bas de la fiche</label>
            <div class="control">
                <input id="artiste_video" name="artiste_video" class="input" type="text" placeholder="Entrez la vidéo à afficher">
            </div>
            <p class="help">Il faut prendre le code à la fin du lien : </p>
            <p class="help">Exemple : https://www.youtube.com/watch?v=St4Kv0RBRWo</p>
            <p class="help">rentrez St4Kv0RBRWo </p>
        </div>

        <div class="field">
            <label for="artiste_provenance" class="label">Provenance</label>
            <div class="control">
                <input id="artiste_provenance" name="artiste_provenance" class="input" type="text" placeholder="Entrez la provenance de l'artiste">
            </div>
        </div>

        <div class="field">
            <label for="artiste_description" class="label">Description</label>
            <div class="control">
                <textarea id="artiste_description" name="artiste_description" class="textarea" placeholder="Entrez la description à afficher"></textarea>
            </div>
            <p class="help">Enregistre les sauts de lignes </p>
        </div>
        <div class="field">
            <label for="artiste_site_web" class="label">Lien site web</label>
            <div class="control">
                <input id="artiste_site_web" name="artiste_site_web" class="input"  type="text" placeholder="Entrez le lien du site web à afficher"></textarea>
            </div>
        </div>
        <div class="field">
            <label for="artiste_youtube" class="label">Youtube</label>
            <div class="control">
                <input id="artiste_youtube" name="artiste_youtube" class="input" type="text" placeholder="Le lien vers la page youtube">
            </div>
        </div>

        <div class="field">
            <label for="artiste_twitter" class="label">Twitter</label>
            <div class="control">
                <input id="artiste_twitter" name="artiste_twitter" class="input" type="text" placeholder="Le lien vers la page twitter">
            </div>
        </div>

        <div class="field">
            <label for="artiste_instagram" class="label">Instagram</label>
            <div class="control">
                <input id="artiste_instagram" name="artiste_instagram" class="input" type="text" placeholder="Le lien vers la page instagram">
            </div>
        </div>

        <div class="field">
            <label for="artiste_facebook" class="label">Facebook</label>
            <div class="control">
                <input id="artiste_facebook" name="artiste_facebook" class="input" type="text" placeholder="Le lien vers la page facebook">
            </div>
        </div>
        <div class="field">
            <label for="artiste_spotify" class="label">Spotify</label>
            <div class="control">
                <input id="artiste_spotify" name="artiste_spotify" class="input" type="text" placeholder="Le lien vers la page spotify">
            </div>
        </div>

        <div class="field">
            <label for="artiste_tarif" class="label">Tarif</label>
            <div class="control">
                <input id="artiste_tarif" name="artiste_tarif" class="input" type="text" placeholder="Le tarif">
            </div>
        </div>

        <div class="field">
            <label for="artiste_lieu" class="label">Lieus</label>
            <div class="control">
                <input id="artiste_lieu" name="artiste_lieu" class="input" type="text" placeholder="Le lieu de la representation">
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
$titre = "Creation d'un artiste";
require "views/commons/template.php";