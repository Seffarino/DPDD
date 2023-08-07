<?php ob_start(); ?>
<div class="container" style="overflow:scroll;">
    <table class="table" style="width:100%;">
        <thead>
            <tr>
                <th>#</th>
                <th>nom</th>
                <th>date</th>

                <th>image</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($artistes as $artiste) : ?>
                <tr>
                    <td><?= $artiste['artiste_id'] ?></td>
                    <td><?= $artiste['artiste_nom'] ?></td>
                    <td><?= $artiste['artiste_date'] ?></td>

                    <td><img src="<?= URL ?>views/festival/images/<?= $artiste['artiste_image'] ?> " style="width:50px" /></td>
                    <td>
                        <form method="post" action="<?= URL ?>back/artistes/validationSuppression" onSubmit="return confirm('Voulez-vous vraiment supprimer ?');">
                            <input type="hidden" name="artiste_id" value="<?= $artiste['artiste_id'] ?>" />
                            <button class="button is-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="<?= URL ?>back/artistes/modification">
                            <input type="hidden" name="artiste_id" value='<?= $artiste['artiste_id'] ?>' />
                            <button class="button is-warning" type="submit">Modification</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php
$content = ob_get_clean();
$titre = "Les artistes";
require "views/commons/template.php";
