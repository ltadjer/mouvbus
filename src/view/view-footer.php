</main>
<a href="<?= home_url('/'); ?>">
    <?= get_custom_logo(); ?>
</a>
<nav>
    <?=
    wp_nav_menu([
        'theme_location' => 'footer-bottom',
        'menu_class'        => 'footer-menu-bottom',
    ]);
    ?>
</nav>
<?php wp_footer(); ?>