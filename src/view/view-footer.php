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
    <div class="footer-rs">
        <a href="<?= get_option('link_instagram') ?>"><i class="fa-brands fa-instagram"></i></a>
        <a href="<?= get_option('link_facebook') ?>"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="<?= get_option('link_linkedin') ?>"><i class="fa-brands fa-linkedin-in"></i></a>                   
    </div>
    <div class="footer-copyright">
        <span class="copyright"> <?= get_option('text_copyright') ?> - <a href="/mentions-legales"> Mentions légales </a> -  <a href="/politique-de-confidentialite"> Politique de confidentialité </a> </span>
    </div>
</footer>
<?php wp_footer(); ?>