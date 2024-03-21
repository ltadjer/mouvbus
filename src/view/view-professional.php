<div class="page-container">
    <section class="hero" style="background: center/cover no-repeat url('<?= MB_get_field('image_professional_hero') ?>');">
        <div class="overlay">
            <h1> <?= MB_get_field('title_professional_hero') ?> </h1>
            <p> <?= MB_get_field('subtitle_professional_hero') ?> </p>
        </div>
    </section>
    <section class="two-columns">
        <img src="<?= MB_get_field('image_professional_section_1') ?>" alt="">
        <div>
            <h2> <?= MB_get_field('title_professional_section_1') ?> </h2>
            <p> <?= MB_get_field('text_professional_section_1') ?> </p>
        </div>
    </section>
    <section class="two-columns bg-yellow">
        <div>
            <h2> <?= MB_get_field('title_professional_section_2') ?> </h2>
            <p> <?= MB_get_field('text_professional_section_2') ?> </p>
        </div>
        <img src="<?= MB_get_field('image_professional_section_2') ?>" alt="">
    </section>
    <section class="contact-section" style="background: center/cover no-repeat url('<?= MB_get_field('image_professional_section_3') ?>');">
        <div class="overlay">
            <h2> <?= MB_get_field('title_professional_section_3') ?> </h2>
            <p> <?= MB_get_field('text_professional_section_3') ?> </p>
            <a class="btn" href="<?= MB_get_field('button_professional_section_3')['link_button_professional_section_3'] ?>"><?= MB_get_field('button_professional_section_3')['text_button_professional_section_3'] ?></a>
        </div>
    </section>
</div>