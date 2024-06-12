<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= pf_asset('/style.css') ?>">
    <title>Portfolio - Cremer Tom</title>
    <?php wp_head(); ?>
</head>
<body>
<input type="checkbox" id="burger" class="menu-checkbox hidden" autocomplete="off" aria-expanded="false">
<label for="burger" class="burger-button">
    <span class="burger-line top"></span>
    <span class="burger-line middle"></span>
    <span class="burger-line bottom"></span>
</label>
<nav class="nav">
    <h2 class="hidden"><?= __('Navigation principale', 'pf') ?></h2>
    <ul class="nav-container">
        <?php foreach (pf_get_navigation_links('main') as $link): ?>
            <li class="nav-item">
                <a href="<?= $link->url ?>" class="nav-link"><?= $link->label ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>


