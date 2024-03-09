<div class="page-container">
    <section class="hero">
        <div>
            <h1> <?= MB_get_field('title_professional_hero') ?> </h1>
            <p> <?= MB_get_field('subtitle_professional_hero') ?> </p>
        </div>
        <img src="<?= MB_get_field('image_professional_hero') ?>" alt="">
    </section>
    <section>
        <img src="<?= MB_get_field('image_professional_section_1') ?>" alt="">
        <div>
            <h2> <?= MB_get_field('title_professional_section_1') ?> </h2>
            <p> <?= MB_get_field('text_professional_section_1') ?> </p>
        </div>
    </section>
    <section>
        <div>
            <h2> <?= MB_get_field('title_professional_section_2') ?> </h2>
            <p> <?= MB_get_field('text_professional_section_2') ?> </p>
        </div>
        <img src="<?= MB_get_field('image_professional_section_2') ?>" alt="">
    </section>
    <section>
        <img src="<?= MB_get_field('image_professional_section_3') ?>" alt="">
        <div>
            <h2> <?= MB_get_field('title_professional_section_3') ?> </h2>
            <p> <?= MB_get_field('text_professional_section_3') ?> </p>
            <a href="<?= MB_get_field('link_button_professional_section_3') ?>"><?= MB_get_field('text_button_professional_section_3') ?></a>
        </div>
    </section>
</div>