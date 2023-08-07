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
        <?php foreach($contacts as $contact) : ?>
        <tr>
            <td><?= $contact['contact_id'] ?></td>
            <td><?= $contact['contact_contenu'] ?></td>
            <td><?= $contact['contact_ordre'] ?></td>

            <td>
                <form method="post" action="<?= URL ?>back/contacts/validationSuppression" onSubmit="return confirm('Voulez-vous vraiment supprimer ?');">
                    <input type="hidden" name="contact_id" value="<?= $contact['contact_id'] ?>" />
                    <button class="button is-danger" type="submit">Supprimer</button>
                </form>
                <form method="post" action="<?= URL ?>back/contacts/haut">
                    <input type="hidden" name="contact_id" value="<?= $contact['contact_id'] ?>" />
                    <input type="hidden" name="contact_ordre" value="<?= $contact['contact_ordre'] ?>" />
                    <button class="button is-warning" type="submit">↑</button>
                </form>
                <form method="post" action="<?= URL ?>back/contacts/bas">
                    <input type="hidden" name="contact_id" value="<?= $contact['contact_id'] ?>" />
                    <input type="hidden" name="contact_ordre" value="<?= $contact['contact_ordre'] ?>" />
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
$titre = "Les contacts";
require "views/commons/template.php";