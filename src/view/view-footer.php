</main>
<footer>
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
</footer>
<?php wp_footer(); ?>