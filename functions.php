<?php

// Démarrer la session
if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Désactiver l'éditeur de texte Gutenberg de Wordpress :
add_filter('use_block_editor_for_post', '__return_false');


register_nav_menu('main', 'Navigation principale, en-tête du site');
register_nav_menu('footer', 'Navigation de pied de page');

add_theme_support('title_tag');

/*function pf_enqueue_styles() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'pf_enqueue_styles');
*/


function pf_asset(string $file): string
{
    return get_template_directory_uri() . '/assets/' . $file;
}

