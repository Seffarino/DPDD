<?php ob_start(); ?>
<div class="container" style="overflow:scroll;">
<table class="table" style="width:100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Url de la vidéo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($carrousel as $video) : ?>
        <tr>
            <td><?= $video['aftermovie_id'] ?></td>
            <td><?= $video['aftermovie_url'] ?></td>
            <td>
                <form method="post" action="<?= URL ?>back/carrousel/validationSuppression" onSubmit="return confirm('Voulez-vous vraiment supprimer ?');">
                    <input type="hidden" name="aftermovie_id" value="<?= $video['aftermovie_id'] ?>" />
                    <button class="button is-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>


<?php 
$content = ob_get_clean();
$titre = "Le Carrousel";
require "views/commons/template.php";