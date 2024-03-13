<div class="page-container">
    <section class="hero">
        <div>
            <h1> <?= MB_get_field('title_home_hero') ?> </h1>
            <p> <?= MB_get_field('subtitle_home_hero') ?> </p>
            <a class="btn" href="<?= MB_get_field('link_button_home_hero') ?>"><?= MB_get_field('text_button_home_hero') ?></a>
        </div>
        <img src="<?= MB_get_field('image_home_hero') ?>" alt="">
    </section>
    <section class="section-icons">
        <h2> <?= MB_get_field('title_home_section_1') ?> </h2>
        <h3> <?= MB_get_field('subtitle_home_section_1') ?> </h3>
        <div class="icons">
            <div class="icon">
                <img src="<?= MB_get_field('icon_1_home_section_1') ?>" alt="">
                <h2> <?= MB_get_field('title_1_home_section_1') ?> </h2>
                <p> <?= MB_get_field('text_1_home_section_1') ?> </p>
            </div>
            <div class="icon">
                <img src="<?= MB_get_field('icon_2_home_section_1') ?>" alt="">
                <h2> <?= MB_get_field('title_2_home_section_1') ?> </h2>
                <p> <?= MB_get_field('text_2_home_section_1') ?> </p>
            </div>
            <div class="icon">
                <img src="<?= MB_get_field('icon_3_home_section_1') ?>" alt="">
                <h2> <?= MB_get_field('title_3_home_section_1') ?> </h2>
                <p> <?= MB_get_field('text_3_home_section_1') ?> </p>
            </div>
        </div>
    </section>
    <section class="two-columns bg-blue">
        <img src="<?= MB_get_field('image_home_section_2') ?>" alt="">
        <div>
            <h2> <?= MB_get_field('title_home_section_2') ?> </h2>
            <p> <?= MB_get_field('text_home_section_2') ?> </p>
            <a class="btn" href="<?= MB_get_field('link_button_home_section_2') ?>"><?= MB_get_field('text_button_home_section_2') ?></a>
        </div>
    </section>
    <section class="two-columns">
        <div>
            <h2> <?= MB_get_field('title_home_section_3') ?> </h2>
            <p> <?= MB_get_field('text_home_section_3') ?> </p>
            <a class="btn-blue" href="<?= MB_get_field('link_button_home_section_3') ?>"><?= MB_get_field('text_button_home_section_3') ?></a>
        </div>
        <img src="<?= MB_get_field('image_home_section_3') ?>" alt="">
    </section>
    <section class="image-full-width-text">
        <img src="<?= MB_get_field('image_home_section_4') ?>" alt="">
        <div>
            <h2> <?= MB_get_field('title_home_section_4') ?> </h2>
            <p> <?= MB_get_field('text_home_section_4') ?> </p>
            <a class="btn" href="<?= MB_get_field('link_button_home_section_4') ?>"><?= MB_get_field('text_button_home_section_4') ?></a>
        </div>
    </section>
</div>