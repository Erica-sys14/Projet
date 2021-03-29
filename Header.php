<?php
function nav_item (string $lien, string $titre): string
{
    $html = '<li class="nav-item">
                <a class="nav-link" href="/indexe.php">Accueil</a>
            </li>' ;

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">
    <title><?php if (isset($title)) {echo $title;} else { echo 'Mon site'; } ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <?= nav_item('/index.php', 'Accueil'); ?>
            <?= nav_item('/Contact.php', 'Nous contacter'); ?>
            <li class="nav-item  <?php if ($_SERVER['SCRIPT_NAME'] === '/indexe.php'): ?>active<?php endif; ?>">
                <a class="nav-link" href="/indexe.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" <?php if ($_SERVER['SCRIPT_NAME'] === '/Contact.php'): ?>active<?php endif; ?>">
                <a class="nav-link" href="/Contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>


<main role="main" class="container">