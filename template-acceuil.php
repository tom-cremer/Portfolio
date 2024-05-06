<?php /* Template Name: Page "Acceuil" */ ?>
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
    </div>
    <ul class="cards-list">
        <?php for ($x = 0; $x <= 3; $x++): ?>
            <li class="card"
                style="<?php if ($x % 2 != 0): ?>rotate:<?= rand(3, 10);?>deg;<?php else: ?>rotate:<?= -rand(3, 10);?>deg;<?php endif; ?>">
                <img src="<?= get_field('dos_carte')['url'] ?>" alt="<?= get_field('dos_carte')['alt'] ?>">
            </li>
        <?php endfor; ?>
    </ul>


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
                    <p class="o-title">Prenez Avantage de votre carte et concrétisons vos projets ensemble !</p>
                </li>
                <a class="o-contact" href="#">Contact</a>
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
                <li><img src="<?= $icon['url']?>" alt="<?= $icon['alt']?>"></li>
            <?php
                endforeach;
            ?>

        </ul>
    </div>
</section>

<?php get_footer(); ?>


