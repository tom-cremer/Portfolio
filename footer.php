<footer class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
    <div class="footer-container">
        <div class="footer-logo" itemscope itemtype="https://schema.org/Organization">
            <?php if (get_field('brand_icon')): ?>
                <img src="<?= get_field('brand_icon') ?>" alt="<?= get_field('brand_icon_texte_alternatif') ?>">
            <?php else: ?>
                <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.04 12.1">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                                stroke-miterlimit: 10;
                            }

                            .cls-1, .cls-2 {
                                stroke: #fff;
                            }

                            .cls-2 {
                                fill: #fff;
                            }
                        </style>
                    </defs>
                    <g id="Layer_1-2" data-name="Layer 1">
                        <g>
                            <polygon class="cls-2"
                                     points=".5 .5 .5 2.89 5.87 2.89 5.87 11.6 8.26 11.6 8.26 2.89 8.26 .53 8.26 .5 .5 .5"/>
                            <rect class="cls-1" x="10.15" y=".5" width="3.39" height="2.39"/>
                        </g>
                    </g>
                </svg>
            <?php endif; ?>
            <?php if (get_field('brand_name')): ?>
                <span itemprop="name"><?= get_field('brand_name'); ?></span>
            <?php else: ?>
                <span itemprop="name">Cremer Tom</span>
            <?php endif; ?>


        </div>
        <div class="footer-column" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <h4>NAVIGATION</h4>
            <ul>
                <?php foreach (pf_get_navigation_links('footer_nav') as $link): ?>
                    <li><a href="<?= $link->url ?>" itemprop="url"><?= $link->label ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="footer-column" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <h4>LEGAL</h4>
            <ul>
                <?php foreach (pf_get_navigation_links('nav_legal') as $link): ?>
                    <li><a href="<?= $link->url ?>" itemprop="url"><?= $link->label ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="footer-contact">
            <?php foreach (pf_get_navigation_links('contact') as $link): ?>
                <a href="<?= $link->url ?>" class="contact-button" itemprop="url"><?= $link->label ?></a>
            <?php endforeach; ?>
            <a class="mail" href="mailto:contact@tomcremer.be">contact@tomcremer.be</a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 <?php if (get_field('brand_name')): ?>
                <?= get_field('brand_name'); ?>
            <?php else: ?>
                Cremer Tom
            <?php endif; ?> - Développé par <span itemprop="creator">Cremer Tom</span></p>
    </div>
</footer>
</body>
</html>
<?php wp_footer(); ?>
<script src="<?= pf_asset('/assets/js/main.js') ?>"></script>
</body>
</html>