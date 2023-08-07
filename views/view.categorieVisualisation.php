<?php ob_start(); ?>
<div class="container" style="overflow:scroll;">
<table class="table" style="width:100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Contenu</th>
            <th>Ordre</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($categories as $categorie) : ?>
        <tr>
            <td><?= $categorie['categorie_id'] ?></td>
            <td><?= $categorie['categorie_libelle'] ?></td>
            <td><?= $categorie['categorie_ordre'] ?></td>
            
            <td>
                <form method="post" action="<?= URL ?>back/partenaires/categorieSuppression" onSubmit="return confirm('Voulez-vous vraiment supprimer ?');">
                    <input type="hidden" name="categorie_id" value="<?= $categorie['categorie_id'] ?>" />
                    <button class="button is-danger" type="submit">Supprimer</button>
                </form>
                <form method="post" action="<?= URL ?>back/partenaires/categorieHaut">
                    <input type="hidden" name="categorie_id" value="<?= $categorie['categorie_id'] ?>" />
                    <input type="hidden" name="categorie_ordre" value="<?= $categorie['categorie_ordre'] ?>" />
                    <button class="button is-warning" type="submit">↑</button>
                </form>
                <form method="post" action="<?= URL ?>back/partenaires/categorieBas">
                    <input type="hidden" name="categorie_id" value="<?= $categorie['categorie_id'] ?>" />
                    <input type="hidden" name="categorie_ordre" value="<?= $categorie['categorie_ordre'] ?>" />
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
$titre = "Les catégories";
require "views/commons/template.php";