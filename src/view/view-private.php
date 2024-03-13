<div class="page-container">
    <section class="hero">
        <div>
            <h1> <?= MB_get_field('title_private_hero') ?> </h1>
            <p> <?= MB_get_field('subtitle_private_hero') ?> </p>
        </div>
        <img src="<?= MB_get_field('image_private_hero') ?>" alt="">
    </section>
    <section class="two-columns">
        <img src="<?= MB_get_field('image_private_section_1') ?>" alt="">
        <div>
            <h2> <?= MB_get_field('title_private_section_1') ?> </h2>
            <p> <?= MB_get_field('text_private_section_1') ?> </p>
        </div>
    </section>
    <section class="two-columns bg-blue">
        <div>
            <h2> <?= MB_get_field('title_private_section_2') ?> </h2>
            <p> <?= MB_get_field('text_private_section_2') ?> </p>
        </div>
        <img src="<?= MB_get_field('image_private_section_1') ?>" alt="">
    </section>
    <section class="two-columns">
        <img src="<?= MB_get_field('image_private_section_3') ?>" alt="">
        <div>
            <h2> <?= MB_get_field('title_private_section_3') ?> </h2>
            <p> <?= MB_get_field('text_private_section_3') ?> </p>
        </div>
    </section>
    <section class="image-full-width-text">
        <img src="<?= MB_get_field('image_private_section_4') ?>" alt="">
        <div>
            <h2> <?= MB_get_field('title_private_section_4') ?> </h2>
            <p> <?= MB_get_field('text_private_section_4') ?> </p>
            <a href="<?= MB_get_field('link_button_private_section_4') ?>"><?= MB_get_field('text_button_private_section_4') ?></a>
        </div>
    </section>
</div>