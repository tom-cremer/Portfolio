<?php get_header(); ?>

<section class="main-container">
    <div class="brand-container">
        <div class="logo-name">
            <img class="logo" src="<?= get_field('brand_icon') ?>"
                 alt="<?= get_field('brand_icon_texte_alternatif') ?>">
            <h1><?= get_field('brand_name') ?></h1>
        </div>
        <?php if (get_field('add_on_brand')): ?>
            <div class="brand-add-on-container">
                <span class="brand-add-on-content"><?= get_field('add_on_brand') ?></span>
                <svg class="brand-arrow" width="57" height="40" viewBox="0 0 57 40" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M45.5966 0.802525C46.258 0.303616 47.1986 0.435295 47.6975 1.09664L55.8277 11.8739C56.3266 12.5353 56.1949 13.4758 55.5336 13.9747C54.8722 14.4736 53.9317 14.342 53.4328 13.6806L46.2059 4.10083L36.6261 11.3277C35.9647 11.8266 35.0242 11.6949 34.5253 11.0336C34.0264 10.3722 34.158 9.43166 34.8194 8.93275L45.5966 0.802525ZM1.49983 39.5C0.671402 39.5 -0.000171698 38.8284 -0.000171661 38C-0.000171625 37.1716 0.671402 36.5 1.49983 36.5L1.49983 39.5ZM47.9855 2.20797C46.179 15.112 39.9596 24.4782 31.4369 30.5937C22.945 36.6871 12.2467 39.5 1.49983 39.5L1.49983 36.5C11.753 36.5 21.8047 33.8129 29.6879 28.1563C37.5403 22.5218 43.3211 13.888 45.0145 1.79203L47.9855 2.20797Z"
                          fill="#10B982"/>
                </svg>
            </div>
        <?php endif; ?>
    </div>

    <div class="magic-container">
        <h2 class="magic-title"><?= get_field('titre_1'); ?></h2>
        <div class="magic-add-on-container">
            <svg class="magic-arrow" width="48" height="41" viewBox="0 0 48 41" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M13.0608 40.1376C12.4751 40.7234 11.5253 40.7234 10.9395 40.1376L1.39359 30.5917C0.807805 30.0059 0.807806 29.0561 1.39359 28.4704C1.97938 27.8846 2.92913 27.8846 3.51491 28.4704L12.0002 36.9556L20.4855 28.4704C21.0713 27.8846 22.021 27.8846 22.6068 28.4704C23.1926 29.0562 23.1926 30.0059 22.6068 30.5917L13.0608 40.1376ZM46.4566 0.499998C47.285 0.500009 47.9566 1.17158 47.9566 2.00001C47.9566 2.82844 47.285 3.50001 46.4566 3.5L46.4566 0.499998ZM10.5002 39.077C10.5002 28.0271 15.9895 18.3893 23.1283 11.5513C30.2332 4.74587 39.1998 0.499934 46.4566 0.499998L46.4566 3.5C40.2134 3.49994 31.9517 7.25401 25.2035 13.7178C18.4891 20.1492 13.5002 29.0499 13.5002 39.077L10.5002 39.077Z"
                      fill="#10B982"/>
            </svg>
            <span class="magic-add-on"><?= get_field('add_on_titre_1') ?></span>
        </div>
        <ul class="cards-list">
            <?php for ($x = 0; $x <= 3; $x++): ?>
                <li class="card"
                    style="<?php if ($x % 2 != 0): ?>rotate:<?= rand(3, 10);?>deg;<?php else: ?>rotate:<?= -rand(3, 10);?>deg;<?php endif; ?>">
                    <img src="<?= get_field('dos_carte')['url'] ?>" alt="<?= get_field('dos_carte')['alt'] ?>">
                </li>
            <?php endfor; ?>
        </ul>
    </div>


    <div class="overlay">
        <div class="o-content">
            <?php
            // Get the repeater field values
            $images = get_field('devant_cartes');

            // Check if there are images
            if ($images):
                // Get a random index within the range of the array
                $random_index = array_rand($images);

                // Get the image URL and alt text using the random index
                $image_url = $images[$random_index]['url'];
                $image_alt = $images[$random_index]['alt'];
                ?>
                <img class="o-card" style="rotate:<?= -rand(0, 6); ?>deg;" src="<?= $image_url ?>"
                     alt="<?= $image_alt ?>">

            <?php endif; ?>


            <ul class="o-list">
                <li class="o-items">
                    <p class="o-subtitle">Vous avez découvert un As</p>
                </li>
                <li class="o-items">
                    <p class="o-title">Prenez Avantage de votre carte et concrétisons vos projets ensemble&nbsp;!</p>
                </li>
                <li class="o-items">
                    <a class="o-contact" href="#">Contact</a>
                </li>
            </ul>
            <div class="cross">
                <svg class="lucide lucide-x line" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"/>
                    <path d="m6 6 12 12"/>
                </svg>
            </div>
        </div>
    </div>

    <svg class="diamond d-one" width="34" height="35" viewBox="0 0 34 35" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path d="M13.7797 2.12108C15.1742 -0.104004 18.82 -0.103998 20.2134 2.12177C21.5096 4.19218 23.1321 6.41076 25.1539 8.60184C27.3554 10.9876 29.5704 12.8423 31.5871 14.2774C33.467 15.6151 33.5694 18.5599 31.7514 19.9807C29.6922 21.59 27.4591 23.5908 25.2206 26.0614C23.0881 28.4151 21.343 30.7651 19.9222 32.9497C18.5899 34.9981 15.3954 34.997 14.0627 32.9489C12.6413 30.7645 10.8949 28.4148 8.76262 26.0614C6.52699 23.594 4.29682 21.5953 2.23983 19.987C0.4204 18.5644 0.524579 15.6137 2.40598 14.2742C4.42137 12.8393 6.63377 10.9845 8.8293 8.60184C10.8566 6.41052 12.482 4.19169 13.7797 2.12108Z"
              fill="#10B982"/>
    </svg>
    <svg class="diamond d-two" width="34" height="35" viewBox="0 0 34 35" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path d="M13.7797 2.12108C15.1742 -0.104004 18.82 -0.103998 20.2134 2.12177C21.5096 4.19218 23.1321 6.41076 25.1539 8.60184C27.3554 10.9876 29.5704 12.8423 31.5871 14.2774C33.467 15.6151 33.5694 18.5599 31.7514 19.9807C29.6922 21.59 27.4591 23.5908 25.2206 26.0614C23.0881 28.4151 21.343 30.7651 19.9222 32.9497C18.5899 34.9981 15.3954 34.997 14.0627 32.9489C12.6413 30.7645 10.8949 28.4148 8.76262 26.0614C6.52699 23.594 4.29682 21.5953 2.23983 19.987C0.4204 18.5644 0.524579 15.6137 2.40598 14.2742C4.42137 12.8393 6.63377 10.9845 8.8293 8.60184C10.8566 6.41052 12.482 4.19169 13.7797 2.12108Z"
              fill="#10B982"/>
    </svg>
    <svg class="diamond d-three" width="34" height="35" viewBox="0 0 34 35" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path d="M13.7797 2.12108C15.1742 -0.104004 18.82 -0.103998 20.2134 2.12177C21.5096 4.19218 23.1321 6.41076 25.1539 8.60184C27.3554 10.9876 29.5704 12.8423 31.5871 14.2774C33.467 15.6151 33.5694 18.5599 31.7514 19.9807C29.6922 21.59 27.4591 23.5908 25.2206 26.0614C23.0881 28.4151 21.343 30.7651 19.9222 32.9497C18.5899 34.9981 15.3954 34.997 14.0627 32.9489C12.6413 30.7645 10.8949 28.4148 8.76262 26.0614C6.52699 23.594 4.29682 21.5953 2.23983 19.987C0.4204 18.5644 0.524579 15.6137 2.40598 14.2742C4.42137 12.8393 6.63377 10.9845 8.8293 8.60184C10.8566 6.41052 12.482 4.19169 13.7797 2.12108Z"
              fill="#10B982"/>
    </svg>
    <svg class="diamond d-four" width="34" height="35" viewBox="0 0 34 35" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path d="M13.7797 2.12108C15.1742 -0.104004 18.82 -0.103998 20.2134 2.12177C21.5096 4.19218 23.1321 6.41076 25.1539 8.60184C27.3554 10.9876 29.5704 12.8423 31.5871 14.2774C33.467 15.6151 33.5694 18.5599 31.7514 19.9807C29.6922 21.59 27.4591 23.5908 25.2206 26.0614C23.0881 28.4151 21.343 30.7651 19.9222 32.9497C18.5899 34.9981 15.3954 34.997 14.0627 32.9489C12.6413 30.7645 10.8949 28.4148 8.76262 26.0614C6.52699 23.594 4.29682 21.5953 2.23983 19.987C0.4204 18.5644 0.524579 15.6137 2.40598 14.2742C4.42137 12.8393 6.63377 10.9845 8.8293 8.60184C10.8566 6.41052 12.482 4.19169 13.7797 2.12108Z"
              fill="#10B982"/>
    </svg>

</section>

<section class="skills-container">
    <div class="scroller" data-speed="<?= get_field('scroll_speed'); ?>">
        <ul class="tag-list scroller__inner">
            <?php
            // Get the repeater field values
            $skillIcons = get_field('skills_icons');

            // Check if there are images
            foreach ($skillIcons as $icon):?>
                <li><img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>"></li>
            <?php
            endforeach;
            ?>
        </ul>
    </div>
</section>
<section class="projects-container">
    <h2 class="project-title"><?= get_field('project_section_title'); ?></h2>
    <?php if (have_posts()): while (have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress ?>
        <?php
        // Créer une nouvelle requête Wordpress pour récupérer mes 3 derniers projets en date.
        $projects = new WP_Query([
            'post_type' => 'projet',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        ]); ?>
        <ul class="project-list">

            <?php
            // Boucler via "The Loop" sur le résultat de cette requête
            if ($projects->have_posts()): while ($projects->have_posts()): $projects->the_post();
                ?>
                <li class="project-item">
                    <article class="project">
                        <h3 class="p-title"><?= get_field('project_name'); ?></h3>
                        <span class="p-tag"><?= get_field('sticker'); ?></span>
                        <img class="p-image" src="<?= get_field('image_presentation')['url']; ?>"
                             alt="<?= get_field('image_presentation')['alt']; ?>">
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
    <div class="wrapper-other-button">
        <?php while (have_posts()) : the_post() ?>
            <a href="<?= get_field('other_button') ?>" class="p-other-button">D'autres Projet
                <svg class="vector" width="20" height="20" viewBox="0 0 20 20" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.895921 17.9907C0.505396 18.3812 0.505396 19.0144 0.895921 19.4049C1.28644 19.7954 1.91961 19.7954 2.31013 19.4049L0.895921 17.9907ZM19.9986 1.3022C19.9986 0.749911 19.5509 0.302196 18.9986 0.302196H9.99865C9.44636 0.302196 8.99865 0.749911 8.99865 1.3022C8.99865 1.85448 9.44636 2.3022 9.99865 2.3022H17.9986V10.3022C17.9986 10.8545 18.4464 11.3022 18.9986 11.3022C19.5509 11.3022 19.9986 10.8545 19.9986 10.3022V1.3022ZM2.31013 19.4049L19.7058 2.0093L18.2915 0.595089L0.895921 17.9907L2.31013 19.4049Z"
                          fill="white"/>
                </svg>
            </a>

        <?php endwhile;  // Fin de "The Loop" des recettes ?>

    </div>

    <svg class="diamond p-one" width="34" height="35" viewBox="0 0 34 35" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path d="M13.7797 2.12108C15.1742 -0.104004 18.82 -0.103998 20.2134 2.12177C21.5096 4.19218 23.1321 6.41076 25.1539 8.60184C27.3554 10.9876 29.5704 12.8423 31.5871 14.2774C33.467 15.6151 33.5694 18.5599 31.7514 19.9807C29.6922 21.59 27.4591 23.5908 25.2206 26.0614C23.0881 28.4151 21.343 30.7651 19.9222 32.9497C18.5899 34.9981 15.3954 34.997 14.0627 32.9489C12.6413 30.7645 10.8949 28.4148 8.76262 26.0614C6.52699 23.594 4.29682 21.5953 2.23983 19.987C0.4204 18.5644 0.524579 15.6137 2.40598 14.2742C4.42137 12.8393 6.63377 10.9845 8.8293 8.60184C10.8566 6.41052 12.482 4.19169 13.7797 2.12108Z"
              fill="#10B982"/>
    </svg>
    <svg class="diamond p-two" width="34" height="35" viewBox="0 0 34 35" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path d="M13.7797 2.12108C15.1742 -0.104004 18.82 -0.103998 20.2134 2.12177C21.5096 4.19218 23.1321 6.41076 25.1539 8.60184C27.3554 10.9876 29.5704 12.8423 31.5871 14.2774C33.467 15.6151 33.5694 18.5599 31.7514 19.9807C29.6922 21.59 27.4591 23.5908 25.2206 26.0614C23.0881 28.4151 21.343 30.7651 19.9222 32.9497C18.5899 34.9981 15.3954 34.997 14.0627 32.9489C12.6413 30.7645 10.8949 28.4148 8.76262 26.0614C6.52699 23.594 4.29682 21.5953 2.23983 19.987C0.4204 18.5644 0.524579 15.6137 2.40598 14.2742C4.42137 12.8393 6.63377 10.9845 8.8293 8.60184C10.8566 6.41052 12.482 4.19169 13.7797 2.12108Z"
              fill="#10B982"/>
    </svg>
</section>
<section class="contact-me">
    <?php while (have_posts()) : the_post() ?>
        <div class="magic-container">
            <h2 class="magic-title"><?= get_field("cs_title") ?></h2>
            <div class="contact-add-on-container">
                <span class="magic-add-on"><?= get_field("cs_addon") ?></span>
                <svg class="contact-arrow" width="37" height="52" viewBox="0 0 37 52" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.2266 50.8697C22.6645 51.5729 23.5896 51.788 24.2928 51.3502L35.7529 44.2146C36.4562 43.7767 36.6713 42.8517 36.2334 42.1484C35.7956 41.4452 34.8705 41.23 34.1672 41.6679L23.9805 48.0106L17.6378 37.8239C17.1999 37.1206 16.2748 36.9055 15.5716 37.3434C14.8683 37.7813 14.6532 38.7063 15.0911 39.4096L22.2266 50.8697ZM2.75588 0.781193C2.04031 0.363745 1.12183 0.605418 0.704382 1.32098C0.286938 2.03655 0.528609 2.95503 1.24417 3.37247L2.75588 0.781193ZM24.961 50.4166C27.5606 39.2384 25.0795 28.6168 20.4485 19.9337C15.8279 11.27 9.01424 4.43219 2.75588 0.781193L1.24417 3.37247C6.98574 6.72199 13.4221 13.1342 17.8014 21.3454C22.1704 29.5372 24.4393 39.4154 22.039 49.7371L24.961 50.4166Z"
                          fill="#10B982"/>
                </svg>
            </div>
            <a href="<?= get_field('contact_page'); ?>" class="c-link">Me Contacter</a>
        </div>
    <?php endwhile; ?>

</section>
<section class="myself">
    <?php while (have_posts()) : the_post() ?>
        <h2 class="title"><?= "Qui Suis-je&nbsp;?" ?></h2>
        <ul class="me-grid">
            <!--Projets-->
            <li class="me-grid-item li1">
                <span class="item-number"><?= get_field('nbr_projets'); ?><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="24" height="24"
                                                                               viewBox="0 0 24 24" fill="none"
                                                                               stroke="#10B982" stroke-width="3"
                                                                               stroke-linecap="round"
                                                                               stroke-linejoin="round"
                                                                               class="lucide lucide-plus"><path
                                d="M5 12h14"/><path
                                d="M12 5v14"/></svg></span>
                <p class="item-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="#10B982" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-briefcase-business">
                        <path d="M12 12h.01"/>
                        <path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
                        <path d="M22 13a18.15 18.15 0 0 1-20 0"/>
                        <rect width="20" height="14" x="2" y="6" rx="2"/>
                    </svg>
                    Projets
                </p>
            </li>
            <!--Languages-->
            <li class="me-grid-item li2">
                <span class="item-number"><?= get_field('nbr_lang'); ?><svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="#10B982" stroke-width="3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-plus"><path
                                d="M5 12h14"/><path
                                d="M12 5v14"/></svg></span>
                <p class="item-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="#10B982" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-book-type">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/>
                        <path d="M16 8V6H8v2"/>
                        <path d="M12 6v7"/>
                        <path d="M10 13h4"/>
                    </svg>
                    Languages
                </p>
            </li>
            <!--Expérience-->
            <li class="me-grid-item li3">
                <span class="item-number"><?= get_field('annees_xp'); ?><svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24"
                                                                             viewBox="0 0 24 24" fill="none"
                                                                             stroke="#10B982" stroke-width="3"
                                                                             stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             class="lucide lucide-plus"><path
                                d="M5 12h14"/><path
                                d="M12 5v14"/></svg></span>
                <p class="item-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="#10B982" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-sparkles">
                        <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/>
                        <path d="M20 3v4"/>
                        <path d="M22 5h-4"/>
                        <path d="M4 17v2"/>
                        <path d="M5 18H3"/>
                    </svg>
                    Expérience
                </p>
            </li>
            <!--Parcours-->
            <li class="me-grid-item li4">
                <p class="parkour-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="#10B982" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-land-plot">
                        <path d="m12 8 6-3-6-3v10"/>
                        <path d="m8 11.99-5.5 3.14a1 1 0 0 0 0 1.74l8.5 4.86a2 2 0 0 0 2 0l8.5-4.86a1 1 0 0 0 0-1.74L16 12"/>
                        <path d="m6.49 12.85 11.02 6.3"/>
                        <path d="M17.51 12.85 6.5 19.15"/>
                    </svg>
                    Mes Formations
                </p>
                <ul class="parkour-list">
                    <?php foreach (get_field('formations') as $formation):
                        if ($formation):
                            if (strlen($formation["titre_formation"]) !== 0):
                                ?>
                                <li class="parkour-item">
                                    <article class="parkour">
                                        <p class="pk-date"><?= $formation["date_from"] ?>
                                            &nbsp;&hyphen;&nbsp;<?= $formation["date_to"] ?></p>
                                        <div>
                                            <h3 class="pk-title"><?= $formation["titre_formation"] ?></h3>
                                            <p class="pk-desc"><?= $formation["details"] ?></p>
                                        </div>
                                        <svg class="pk-dia" width="12" height="12" viewBox="0 0 12 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.28228 0.409219C5.58858 -0.115777 6.41492 -0.115779 6.72105 0.409316C7.17089 1.1809 7.77432 2.04718 8.57719 2.9C9.39335 3.76693 10.2154 4.40726 10.935 4.87683C11.3904 5.17397 11.4143 5.8668 10.9747 6.18676C10.2407 6.72094 9.42064 7.4137 8.59825 8.30336C7.78829 9.17958 7.15538 10.0542 6.66469 10.84C6.36547 11.3191 5.63513 11.3188 5.33589 10.8396C4.8452 10.0539 4.21161 9.17946 3.40175 8.30336C2.5801 7.4145 1.76077 6.72218 1.0273 6.18819C0.587295 5.86786 0.611654 5.17376 1.06746 4.87633C1.78697 4.40684 2.60856 3.7661 3.42281 2.9C4.22781 2.04715 4.8321 1.18083 5.28228 0.409219Z"
                                                  fill="#10B982"/>
                                        </svg>
                                    </article>
                                </li>
                            <?php endif; endif; endforeach; ?>

                </ul>
            </li>
            <!--Work Process-->
            <li class="me-grid-item li5">
                <p class="w-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="#10B982" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-brain-circuit">
                        <path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"/>
                        <path d="M9 13a4.5 4.5 0 0 0 3-4"/>
                        <path d="M6.003 5.125A3 3 0 0 0 6.401 6.5"/>
                        <path d="M3.477 10.896a4 4 0 0 1 .585-.396"/>
                        <path d="M6 18a4 4 0 0 1-1.967-.516"/>
                        <path d="M12 13h4"/>
                        <path d="M12 18h6a2 2 0 0 1 2 2v1"/>
                        <path d="M12 8h8"/>
                        <path d="M16 8V5a2 2 0 0 1 2-2"/>
                        <circle cx="16" cy="13" r=".5"/>
                        <circle cx="18" cy="3" r=".5"/>
                        <circle cx="20" cy="21" r=".5"/>
                        <circle cx="20" cy="8" r=".5"/>
                    </svg>
                    Méthodologie
                </p>
                <ul class="w-list">
                    <li class="w-item">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="#10B982" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-clipboard-list"><rect width="8" height="4" x="8"
                                                                                           y="2" rx="1" ry="1"/><path
                                        d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path
                                        d="M12 11h4"/><path d="M12 16h4"/><path d="M8 11h.01"/><path
                                        d="M8 16h.01"/></svg>
                        </span>
                        <p>Objectifs</p>
                    </li>
                    <li class="w-item">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="#10B982" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-scan-search"><path d="M3 7V5a2 2 0 0 1 2-2h2"/><path
                                        d="M17 3h2a2 2 0 0 1 2 2v2"/><path d="M21 17v2a2 2 0 0 1-2 2h-2"/><path
                                        d="M7 21H5a2 2 0 0 1-2-2v-2"/><circle cx="12" cy="12" r="3"/><path
                                        d="m16 16-1.9-1.9"/></svg></span>
                        <p>Recherche</p>
                    </li>
                    <li class="w-item">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="#10B982" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-pen-tool"><path
                                        d="M15.707 21.293a1 1 0 0 1-1.414 0l-1.586-1.586a1 1 0 0 1 0-1.414l5.586-5.586a1 1 0 0 1 1.414 0l1.586 1.586a1 1 0 0 1 0 1.414z"/><path
                                        d="m18 13-1.375-6.874a1 1 0 0 0-.746-.776L3.235 2.028a1 1 0 0 0-1.207 1.207L5.35 15.879a1 1 0 0 0 .776.746L13 18"/><path
                                        d="m2.3 2.3 7.286 7.286"/><circle cx="11" cy="11" r="2"/></svg></span>
                        <p>Wireframe</p>
                    </li>
                    <li class="w-item">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="#10B982" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-layers"><path
                                        d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"/><path
                                        d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"/><path
                                        d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"/></svg></span>
                        <p>Prototypage</p>
                    </li>
                    <li class="w-item">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="#10B982" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-gift"><rect x="3" y="8" width="18" height="4"
                                                                                 rx="1"/><path d="M12 8v13"/><path
                                        d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"/><path
                                        d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"/></svg></span>
                        <p>Produit final</p>
                    </li>
                </ul>
            </li>
            <!--About Me-->
            <li class="me-grid-item li6">
                <div class="me-1">
                    <div class="me-div1">
                        <img class="me-img" src="<?= get_field('me_1')["photo_de_profile"]["url"] ?>"
                             alt="<?= get_field('me_1')["photo_de_profile"]["alt"] ?>">
                        <!--https://placehold.jp/100x100.png-->
                    </div>
                    <div class="me-div2">
                        <p class="me-name"><?= get_field('me_1')["full_name"] ?></p>
                        <ul class="tag-list">
                            <?php foreach (get_field("me_1")["formation_sticker"] as $sticker): ?>
                                <li class="tag-item">
                                    <p class="me-tag"><?= $sticker ?></p>
                                </li>
                            <?php endforeach; ?>

                        </ul>

                    </div>

                </div>
                <div class="me-2">
                    <?php if (get_field('me_1')): ?>
                        <?php if (get_field('me_1')["personnal_data"]): ?>
                            <ul class="tag-list">
                                <?php if (get_field('me_1')["personnal_data"]['country']): ?>
                                    <li class="tag-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B982" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pinned"><path d="M18 8c0 4.5-6 9-6 9s-6-4.5-6-9a6 6 0 0 1 12 0"/><circle cx="12" cy="8" r="2"/><path d="M8.835 14H5a1 1 0 0 0-.9.7l-2 6c-.1.1-.1.2-.1.3 0 .6.4 1 1 1h18c.6 0 1-.4 1-1 0-.1 0-.2-.1-.3l-2-6a1 1 0 0 0-.9-.7h-3.835"/></svg>
                                        <p><?= get_field('me_1')["personnal_data"]["country"] ?></p>
                                    </li>
                                <?php endif; ?>

                                <?php if (get_field('me_1')["personnal_data"]['permis']): ?>
                                    <li class="tag-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B982" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-car"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>
                                        <p><?= get_field('me_1')["personnal_data"]["permis"] ?></p>
                                    </li>
                                <?php endif; ?>
                                <?php if (get_field('me_1')["personnal_data"]['birth_date']): ?>
                                    <li class="tag-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B982" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cake"><path d="M20 21v-8a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8"/><path d="M4 16s.5-1 2-1 2.5 2 4 2 2.5-2 4-2 2.5 2 4 2 2-1 2-1"/><path d="M2 21h20"/><path d="M7 8v3"/><path d="M12 8v3"/><path d="M17 8v3"/><path d="M7 4h.01"/><path d="M12 4h.01"/><path d="M17 4h.01"/></svg>
                                        <p><?= get_field('me_1')["personnal_data"]["birth_date"] ?></p>
                                    </li>
                                <?php endif; ?>
                                <?php if (get_field('me_1')["personnal_data"]['langues_1']): ?>
                                    <li class="tag-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B982" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-languages"><path d="m5 8 6 6"/><path d="m4 14 6-6 2-3"/><path d="M2 5h12"/><path d="M7 2h1"/><path d="m22 22-5-10-5 10"/><path d="M14 18h6"/></svg>
                                        <p><?= get_field('me_1')["personnal_data"]["langues_1"] ?></p>
                                    </li>
                                <?php endif; ?>
                                <?php if (get_field('me_1')["personnal_data"]['langues_2']): ?>
                                    <li class="tag-item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B982" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-languages"><path d="m5 8 6 6"/><path d="m4 14 6-6 2-3"/><path d="M2 5h12"/><path d="M7 2h1"/><path d="m22 22-5-10-5 10"/><path d="M14 18h6"/></svg>
                                        <p><?= get_field('me_1')["personnal_data"]["langues_2"] ?></p>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </li>
            <!--Description-->
            <li class="me-grid-item li7">
                <p class="desc"><?= get_field('about_me') ?></p>
            </li>
            <!--Link Me-->
            <li class="me-grid-item li8">
                <div class="follow-me">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="#10B982" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-link">
                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
                    </svg>
                    <p>Mes Réseaux</p>
                </div>
                <ul class="w-list">
                    <?php if (get_field('social_links')): ?>
                        <?php if (get_field('social_links')['instagram']): ?>
                            <li class="w-item">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                         viewBox="0 0 24 24" fill="none" stroke="#10B982"
                                         stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round"
                                         class="lucide lucide-instagram">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                                    </svg>
                                </span>
                                <a href="<?= get_field('social_links')['instagram']; ?>"
                                   class="social-links">Instagram</a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php if (get_field('social_links')): ?>
                        <?php if (get_field('social_links')['linkedin']): ?>
                            <li class="w-item">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                         viewBox="0 0 24 24" fill="none" stroke="#10B982"
                                         stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round"
                                         class="lucide lucide-linkedin">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                                    </svg>
                                </span>
                                <a href="<?= get_field('social_links')['linkedin']; ?>"
                                   class="social-links">Linkedin</a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if (get_field('social_links')): ?>
                        <?php if (get_field('social_links')['facebook']): ?>
                            <li class="w-item">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                         viewBox="0 0 24 24" fill="none" stroke="#10B982"
                                         stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round"
                                         class="lucide lucide-facebook">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                                    </svg>
                                </span>
                                <a href="<?= get_field('social_links')['facebook']; ?>"
                                   class="social-links">Facebook</a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </li>
            <!--Contact Me-->
            <li class="me-grid-item li9">
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                         stroke="#10B982" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-crown"><path
                                d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z"/><path
                                d="M5 21h14"/></svg>
                </span>
                <p class="title">Concrétisons vos Projets</p>

                <ul class="lets-work">
                    <?php if (get_field('contact_links')): ?>
                        <?php if (get_field('contact_links')['github']): ?>
                            <li>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           fill="none" stroke="#10B982" stroke-width="2" stroke-linecap="round"
                                           stroke-linejoin="round" class="lucide lucide-github"><path
                                                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path
                                                d="M9 18c-4.51 2-5-2-7-2"/></svg></span>
                                <a href="<?= get_field('contact_links')['github'] ?>">Github</a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if (get_field('contact_links')): ?>
                        <?php if (get_field('contact_links')['contact_mail']): ?>
                            <li>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           fill="none" stroke="#10B982" stroke-width="2" stroke-linecap="round"
                                           stroke-linejoin="round" class="lucide lucide-mail"><rect width="20"
                                                                                                    height="16" x="2"
                                                                                                    y="4" rx="2"/><path
                                                d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg></span>
                                <a href="mailto:<?= get_field('contact_links')['contact_mail'] ?>"><?= get_field('contact_links')['contact_mail'] ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if (get_field('contact_links')): ?>
                        <?php if (get_field('contact_links')['contact_page']): ?>
                            <li>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                           fill="none" stroke="#10B982" stroke-width="2" stroke-linecap="round"
                                           stroke-linejoin="round" class="lucide lucide-text-cursor-input"><path
                                                d="M5 4h1a3 3 0 0 1 3 3 3 3 0 0 1 3-3h1"/><path
                                                d="M13 20h-1a3 3 0 0 1-3-3 3 3 0 0 1-3 3H5"/><path
                                                d="M5 16H4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h1"/><path
                                                d="M13 8h7a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-7"/><path d="M9 7v10"/></svg></span>
                                <a href="<?= get_field('contact_links')['contact_page'] ?>">Formulaire de Contact</a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>

                </ul>

            </li>
        </ul>
    <?php endwhile; ?>
</section>


<?php get_footer(); ?>


