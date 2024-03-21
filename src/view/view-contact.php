<div class="page-container">
    <section class="hero" style="background: center/cover no-repeat url('<?= MB_get_field('image_contact_hero') ?>');">
        <div class="overlay">
            <h1> <?= MB_get_field('title_contact_hero') ?> </h1>
            <p> <?= MB_get_field('name_contact_hero') ?> </p>
            <p> <?= MB_get_field('phone_contact_hero') ?> </p>
            <p> <?= MB_get_field('email_contact_hero') ?> </p>
            <p> <?= MB_get_field('address_contact_hero') ?> </p>
        </div>
    </section>
    <section class="contact-form">
        <?php echo do_shortcode('[wpforms id="258"]'); ?>        
    </section>
</div>