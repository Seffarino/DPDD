<?php ob_start(); ?>
<div class="container" style="overflow:scroll;">
    <table class="table" style="width:100%;">
        <thead>
            <tr>
                <th>#</th>
                <th>libelle</th>
                <th>date</th>
                <th>lien</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($billetterie as $billet) : ?>
                <tr>
                    <td><?= $billet['billet_id'] ?></td>
                    <td><?= $billet['billet_libelle'] ?></td>
                    <td><?= $billet['billet_date'] ?></td>
                    <td><?= $billet['billet_lien'] ?></td>

                    <td>
                        <form method="post" action="<?= URL ?>back/billetterie/validationSuppression" onSubmit="return confirm('Voulez-vous vraiment supprimer ?');">
                            <input type="hidden" name="billet_id" value="<?= $billet['billet_id'] ?>" />
                            <button class="button is-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="<?= URL ?>back/billetterie/modification">
                            <input type="hidden" name="billet_id" value='<?= $billet['billet_id'] ?>' />
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
$titre = "La billetterie";
require "views/commons/template.php";
