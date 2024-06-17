<?php /* Template Name: Page "Politique de confidentialité" */ ?>
<?php get_header(); ?>
<div class="brand-container">
    <div class="logo-name">
        <img class="logo" src="<?= get_field('brand_icon') ?>"
             alt="<?= get_field('brand_icon_texte_alternatif') ?>">
        <h1><?= get_field('brand_name') ?></h1>
    </div>
</div>
<?php if (have_posts()): while (have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress ?>

<div class="container">
    <div class="infos">
        <h2 class="title"><?= get_field('title'); ?></h2>
        <p><strong>Dernière mise à jour : <?= get_the_modified_date(); ?></strong></p>
    </div>

    <h2>INFORMATIONS PERSONNELLES RECUEILLIES</h2>
    <h3><?= get_field('personnal_info')['subtitle']; ?></h3>
    <p><?= get_field('personnal_info')['texte']; ?></p>
    <ul>
        <?php foreach (get_field('personnal_info')['donnees'] as $data): ?>
            <li><p><?= $data ?></p></li>
        <?php endforeach; ?>
    </ul>

    <h2>UTILISATION DE VOS INFORMATIONS PERSONNELLES</h2>
    <p><?= get_field('use_personnal_info')['texte']; ?></p>
    <ul>
        <?php foreach (get_field('use_personnal_info')['usage'] as $data): ?>
            <li><p><?= $data ?></p></li>
        <?php endforeach; ?>
    </ul>

    <h2>PARTAGE DE VOS INFORMATIONS PERSONNELLES</h2>
    <p><?= get_field('share')['texte']; ?></p>
    <ul>
        <li><p><?= get_field('share')['case']; ?></p></li>
    </ul>

    <h2>COOKIES</h2>
    <p><?= get_field('cookies')['texte']; ?></p>

    <h2>VOS DROITS</h2>
    <p><?= get_field('rights')['texte']; ?></p>

    <h2>RÉTENTION DES DONNÉES</h2>
    <p><?= get_field('retention')['texte']; ?></p>

    <h2>CHANGEMENTS</h2>
    <p><?= get_field('changements')['texte']; ?></p>

    <h2>NOUS CONTACTER</h2>
    <p><?= get_field('contact')['texte']; ?></p>
    <ul>
        <li><a href="mailto:<?= get_field('contact')['information_de_contact']['info_1']; ?>"><?= get_field('contact')['information_de_contact']['info_1']; ?></a></li>
        <li><p><?= get_field('contact')['information_de_contact']['info_2']; ?></p></li>
    </ul>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

