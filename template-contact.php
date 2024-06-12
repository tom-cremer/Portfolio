<?php /* Template Name: Page "Contact" */ ?>
<?php get_header(); ?>
    <div class="brand-container">
        <div class="logo-name">
            <img class="logo" src="<?= get_field('brand_icon') ?>"
                 alt="<?= get_field('brand_icon_texte_alternatif') ?>">
            <h1><?= get_field('brand_name') ?></h1>
        </div>
    </div>
    <section class="contact-container">
        <div class="contact-form">
            <h2 class="contact-title"><?= get_field('contact_title') ?></h2>
            <?= do_shortcode('[contact-form-7 id="e87a582" title="Formulaire de Contact" class:contact-form]'); ?>
        </div>
        <ul class="contact-infos-list">
            <h3>Coordonnées</h3>
            <?php if (get_field('phone_number')): ?>
                <li class="info-item">
                    <p class="label">Numéro de Téléphone&nbsp;:</p>
                    <p class="data-phone"><?= get_field('phone_number') ?></p>
                </li>
            <?php endif; ?>
            <?php if (get_field('mail_adress')): ?>
                <li class="info-item">
                    <p class="label">Adresse Mail&nbsp;:</p>
                    <a title="Adresse mail de contact" href="mailto:<?= get_field('mail_adress') ?> "
                       class="data-mail"><?= get_field('mail_adress') ?></a>

                </li>
            <?php endif; ?>
            <?php if (get_field('postal_adress')): ?>
                <li class="info-item">
                    <p class="label">Adresse Postal&nbsp;:</p>
                    <p class="data-postal"><?= get_field('postal_adress') ?></p>
                </li>
            <?php endif; ?>

        </ul>


    </section>


<?php get_footer(); ?>