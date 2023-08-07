<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <script src="/tinymce/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    
</head>
<body>
    <?php require_once "menu.php" ?>
    <div class="container">
        <h1 class="title has-text-centered has-text-primary"><?= $titre ?></h1>
    </div>
    <?php if(!empty($_SESSION['alert'])) : ?> 

        <div class="notification has-text-centered <?= $_SESSION['alert']['type'] ?>">

            <p><?= $_SESSION['alert']['message'] ?></p>
        </div>
        <?php 
            unset($_SESSION['alert']);
            endif; 
        ?>
    <?= $content ?>
</body>
</html>