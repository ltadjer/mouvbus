<?php 

$custom_logo_id = get_theme_mod( 'custom_logo' ); // Récupère l'ID de l'image du logo personnalisé
$custom_logo_url = wp_get_attachment_image_src( $custom_logo_id , 'full' ); // Récupère l'URL de l'image du logo personnalisé
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <a href="<?= home_url( '/' ); ?>">
        <?= get_custom_logo(); ?>
        </a>  
        <nav>
            <?=
            wp_nav_menu( [
                'theme_location' => 'header-top',
                'menu_class'        => 'header-menu-top',
            ] );
            ?>
        </nav>
    </header>
    <?php wp_body_open(); ?>
<main>