<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress ?>
    <div class="brand-container">
        <div class="logo-name">
            <img class="logo" src="<?= get_field('brand_icon') ?>"
                 alt="<?= get_field('brand_icon_texte_alternatif') ?>">
            <h1><?= get_field('brand_name') ?></h1>
        </div>

    </div>
    <main class="post">
        <h2 class="project-t"><?= get_field('project_name'); ?></h2>
        <span class="sticker"><?= get_field('sticker'); ?></span>
        <a href="<?= get_field('url'); ?>" class="url-project"><?= get_field('url'); ?>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.895921 17.9907C0.505396 18.3812 0.505396 19.0144 0.895921 19.4049C1.28644 19.7954 1.91961 19.7954 2.31013 19.4049L0.895921 17.9907ZM19.9986 1.3022C19.9986 0.749911 19.5509 0.302196 18.9986 0.302196H9.99865C9.44636 0.302196 8.99865 0.749911 8.99865 1.3022C8.99865 1.85448 9.44636 2.3022 9.99865 2.3022H17.9986V10.3022C17.9986 10.8545 18.4464 11.3022 18.9986 11.3022C19.5509 11.3022 19.9986 10.8545 19.9986 10.3022V1.3022ZM2.31013 19.4049L19.7058 2.0093L18.2915 0.595089L0.895921 17.9907L2.31013 19.4049Z"
                      fill="white"/>
            </svg>
        </a>
        <article class="concept-article">
            <div>
                <img class="concept-img" src="<?= get_field('image_consigne')['url']; ?>"
                     alt="<?= get_field('image_consigne')['alt']; ?>">
            </div>
            <div>
                <h3 class="concept-title">Consigne</h3>
                <p class="concept-txt"><?= get_field('concept'); ?></p>
            </div>
        </article>
        <ul class="tools-list">
            <li class="tools-item"><p class="tools-title">Outils</p></li>
            <?php foreach (get_field('outils') as $tool): ?>
                <li class="tools-item">
                    <p class="tools-content"><?= $tool ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
        <article class="desc-article">
            <div>
                <h3 class="desc-title">Description</h3>
                <p class="desc-txt"><?= get_field('description'); ?></p>
            </div>
            <div>
                <img class="desc-img" src="<?= get_field('image_presentation')['url']; ?>"
                     alt="<?= get_field('image_presentation')['alt']; ?>">
            </div>

        </article>
        <section class="gallery">
            <h3 class="g-title">Galerie</h3>
            <div class="gallery-grid">

                <?php
                 $div_nbr = 1;
                foreach (get_field('galerie') as $img):
                    if ($img):?>
                        <div class="g-item div<?= $div_nbr ?>">
                            <img src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>">
                        </div>
                    <?php endif; $div_nbr++; endforeach; ?>


            </div>
        </section>
    </main>
<?php endwhile; endif; // Fermeture de "The Loop" de Wordpress ?>
<?php get_footer(); ?>