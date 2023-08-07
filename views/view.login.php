<?php ob_start(); ?>
<div class="container">
    <form method="POST" action="<?= URL ?>back/connexion">
        <div class="field">
            <label for="login" class="label">Login</label>
            <div class="control">
                <input id="login" name="login" class="input" type="text" placeholder="Tapez le login">
            </div>
        </div>
        <div class="field">
            <label for="mdp" class="label">Mot de passe</label>
            <div class="control">
                <input id="mdp" name="mdp" class="input" type="password" placeholder="Tapez le mdp">
            </div>
        </div>
        <button class="button is-success" type="submit" class="btn btn-primary">Valider</button>
    </form>
</div>

<?php 
$content = ob_get_clean();
$titre = "Login";
require "views/commons/template.php";