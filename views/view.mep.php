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
            <label for="pratique" class="label">Paragraph Pratique</label>
            <div class="control">
                <textarea id="pratique" name="pratique" class="textarea" ><?= $mep['pratique']?></textarea>
            </div>
        </div>
        <div class="field">
            <label for="presentation" class="label">Paragraph presentation</label>
            <div class="control">
                <textarea id="presentation" name="presentation" class="textarea" ><?= $mep['presentation']?></textarea>
            </div>
        </div>
        <div class="field">
            <label for="billetterie" class="label">Paragraph billetterie</label>
            <div class="control">
                <textarea id="billetterie" name="billetterie" class="textarea" ><?= $mep['billetterie']?></textarea>
            </div>
        </div>
        <div class="columns is-mobile is-centered has-text-centered">
            <div class="column is-half">
                <button type="submit" class="button is-success" >Mettre à jour</button>
            </div>
        </div>
</form>
</div>
</html>
<?php 
$content = ob_get_clean();
$titre = "Mise en page";
require "views/commons/template.php";