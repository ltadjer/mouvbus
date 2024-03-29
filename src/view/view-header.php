<?php

$custom_logo_id = get_theme_mod('custom_logo'); // Récupère l'ID de l'image du logo personnalisé
$custom_logo_url = wp_get_attachment_image_src($custom_logo_id, 'full'); // Récupère l'URL de l'image du logo personnalisé
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://podcastfont.com/releases/202212281527/css/PodcastFont.css" integrity="sha384-O7BuHBrLnSw8RY33z6dyxLwbpCBthLu+y9SJ0JZha2P90JHxJGy5nw72rE9hGn65" crossorigin="anonymous" />
    <?= MB_root_css(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="header-menu">
            <div class="logo">
                <a href="<?= home_url('/'); ?>">
                    <?= get_custom_logo(); ?>
                </a>
            </div>
            <?=
            wp_nav_menu([
                'theme_location' => 'header-top',
                'menu_class' => 'header-menu-top',
            ]);
            ?>
            <button class="hamburger">
                <div class="bar"></div>
            </button>
        </nav>
    </header>
    <?php wp_body_open(); ?>
    <main>
        <script>
            const menu_btn = document.querySelector('.hamburger');
            const mobile_menu = document.querySelector('.header-menu-top');

            menu_btn.addEventListener('click', function() {
                menu_btn.classList.toggle('is-active');
                mobile_menu.classList.toggle('is-active');
            });
        </script>