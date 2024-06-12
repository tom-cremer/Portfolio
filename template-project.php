<?php /* Template Name: Page "Projet" */ ?>
<?php get_header(); ?>
<div class="brand-container">
    <div class="logo-name">
        <img class="logo" src="<?= get_field('brand_icon') ?>"
             alt="<?= get_field('brand_icon_texte_alternatif') ?>">
        <h1><?= get_field('brand_name') ?></h1>
    </div>
</div>
<main class="post project-page">
    <h2 class="project-t"><?= get_field('page_name'); ?></h2>
    <?php if (have_posts()): while (have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress ?>
        <?php
        // Créer une nouvelle requête Wordpress pour récupérer mes 3 derniers projets en date.
        $projects = new WP_Query([
            'post_type' => 'projet',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        ]); ?>
        <ul class="p-list">

            <?php
            // Boucler via "The Loop" sur le résultat de cette requête
            if ($projects->have_posts()): while ($projects->have_posts()): $projects->the_post();
                ?>
                <li class="project-item">
                    <article class="project">
                        <h3 class="p-title"><?= get_field('project_name'); ?></h3>
                        <span class="p-tag"><?= get_field('sticker'); ?></span>
                        <img class="p-image" src="<?= get_field('image_presentation')['url']; ?>" alt="<?= get_field('image_presentation')['alt']; ?>">
                        <div class="p-overlay">
                            <h4 class="p-desc-title">Description</h4>
                            <p class="p-description"><?= get_field('description') ?></p>
                        </div>
                        <a class="p-link" href="<?= get_permalink(); ?>">Voir le Projet
                            <svg width="27" height="16" viewBox="0 0 27 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.19012 6.79968C0.63784 6.79968 0.190125 7.2474 0.190125 7.79968C0.190125 8.35197 0.63784 8.79968 1.19012 8.79968L1.19012 6.79968ZM26.4984 8.50679C26.8889 8.11627 26.8889 7.4831 26.4984 7.09258L20.1344 0.728615C19.7439 0.338091 19.1107 0.338091 18.7202 0.728615C18.3297 1.11914 18.3297 1.7523 18.7202 2.14283L24.377 7.79968L18.7202 13.4565C18.3297 13.8471 18.3297 14.4802 18.7202 14.8708C19.1107 15.2613 19.7439 15.2613 20.1344 14.8708L26.4984 8.50679ZM1.19012 8.79968L25.7912 8.79968V6.79968L1.19012 6.79968L1.19012 8.79968Z"
                                      fill="white"/>
                            </svg>
                        </a>
                    </article>
                </li>

            <?php endwhile; endif; // Fin de "The Loop" des recettes ?>
        </ul>
    <?php endwhile; endif; // Fin de "The Loop" des recettes ?>
</main>

<?php get_footer(); ?>
