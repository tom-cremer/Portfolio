<!-- components/navigation.php -->
<nav class="site-navigation">
    <ul class="menu">
        <?php
        // Get the ACF field containing the menu items
        $menu_items = get_field('navigation_menu');

        // Loop through each menu item
        if ($menu_items) :
            foreach ($menu_items as $item) :
                $item_url = esc_url($item['url']);
                $item_title = esc_html($item['title']);
                ?>
                <li><a href="<?php echo $item_url; ?>"><?php echo $item_title; ?></a></li>
            <?php
            endforeach;
        endif;
        ?>
    </ul>
</nav>
