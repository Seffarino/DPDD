<?php ob_start(); ?>
<div class="container" style="overflow:scroll;">
<table class="table" style="width:100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>URL</th>
            <th>image</th>
            <th>categorie</th>
            <th>ordre</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($partenaires as $partenaire) : ?>
        <tr>
            <td><?= $partenaire['partenaire_id'] ?></td>
            <td><?= $partenaire['partenaire_url'] ?></td>
            <td><?= $partenaire['partenaire_image'] ?></td>
            <td><?= $partenaire['categorie_libelle'] ?></td>
            <td><?= $partenaire['partenaire_ordre'] ?></td>
            <td>
                <form method="post" action="<?= URL ?>back/partenaires/validationSuppression" onSubmit="return confirm('Voulez-vous vraiment supprimer ?');">
                    <input type="hidden" name="partenaire_id" value="<?= $partenaire['partenaire_id'] ?>" />
                    <button class="button is-danger" type="submit">Supprimer</button>
                </form>
                <form method="post" action="<?= URL ?>back/partenaires/haut">
                    <input type="hidden" name="partenaire_id" value="<?= $partenaire['partenaire_id'] ?>" />
                    <input type="hidden" name="partenaire_ordre" value="<?= $partenaire['partenaire_ordre'] ?>" />
                    <button class="button is-warning" type="submit">↑</button>
                </form>
                <form method="post" action="<?= URL ?>back/partenaires/bas">
                    <input type="hidden" name="partenaire_id" value="<?= $partenaire['partenaire_id'] ?>" />
                    <input type="hidden" name="partenaire_ordre" value="<?= $partenaire['partenaire_ordre'] ?>" />
                    <button class="button is-warning" type="submit">⭣</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>


<?php 
$content = ob_get_clean();
$titre = "Les partenaires";
require "views/commons/template.php";