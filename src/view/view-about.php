<div class="page-container">
    <section class="hero">
        <div>
            <h1> <?= MB_get_field('title_about_hero') ?> </h1>
            <p> <?= MB_get_field('subtitle_about_hero') ?> </p>
        </div>
        <img src="<?= MB_get_field('image_about_hero') ?>" alt="">
    </section>
    <section class="about-images">
        <div>
            <img src="<?= MB_get_field('image_1_about_section_1') ?>" alt="">
            <img src="<?= MB_get_field('image_2_about_section_1') ?>" alt="">
            <img src="<?= MB_get_field('image_3_about_section_1') ?>" alt="">
            <img src="<?= MB_get_field('image_4_about_section_1') ?>" alt="">
        </div>
        <p> <?= MB_get_field('text_about_section_1') ?> </p>
    </section>
    <section class="section-members">
        <h2> <?= MB_get_field('title_about_section_2') ?> </h2>
        <div class="members">
            <div class="member">
                <img src="<?= MB_get_field('image_1_about_section_2') ?>" alt="">
                <p> <?= MB_get_field('title_1_about_section_2') ?> </p>
                <p class="subtitle"> <?= MB_get_field('subtitle_1_about_section_2') ?> </p>
            </div>
            <div class="member">
                <img src="<?= MB_get_field('image_2_about_section_2') ?>" alt="">
                <p> <?= MB_get_field('title_2_about_section_2') ?> </p>
                <p class="subtitle"> <?= MB_get_field('subtitle_2_about_section_2') ?> </p>
            </div>
            <div class="member">
                <img src="<?= MB_get_field('image_3_about_section_2') ?>" alt="">
                <p> <?= MB_get_field('title_3_about_section_2') ?> </p>
                <p class="subtitle"> <?= MB_get_field('subtitle_3_about_section_2') ?> </p>
            </div>
            <div class="member">
                <img src="<?= MB_get_field('image_4_about_section_2') ?>" alt="">
                <p> <?= MB_get_field('title_4_about_section_2') ?> </p>
                <p class="subtitle"> <?= MB_get_field('subtitle_4_about_section_2') ?> </p>
            </div>
        </div>
    </section>
    <section class="image-full-width-text">
        <img src="<?= MB_get_field('image_about_section_3') ?>" alt="">
        <div>
            <h2> <?= MB_get_field('title_about_section_3') ?> </h2>
            <p> <?= MB_get_field('text_about_section_3') ?> </p>
            <a href="<?= MB_get_field('link_button_about_section_3') ?>"><?= MB_get_field('text_button_about_section_3') ?></a>
        </div>
    </section>
</div>